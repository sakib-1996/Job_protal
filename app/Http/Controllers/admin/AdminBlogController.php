<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{

    public function blogListPage()
    {
        $user_type = auth()->user()->type;
        $admin_ids = User::where('type', $user_type)->pluck('id');
        $admin_blogs = Blog::whereIn('user_id', $admin_ids)->paginate(10);
        // dd($admin_blogs);
        return view('pages.blogList-page', compact('admin_blogs'));
    }


    public function status($id)
    {
        // dd($id);
        $adds = Blog::findOrFail($id);
        $newStatus = $adds->status == 0 ? 1 : 0;

        $adds->update(['status' => $newStatus]);

        return back();
    }




    public function blogCreatePage()
    {

        return view('pages.createBlogPost-page');
    }

    public function blogCreate(Request $request)
    {
        // dd("hello");
        $validatedData = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'user_id' => auth()->user()->id,
            'description' => $request->description,
        ]);
        return redirect()->route('admin.bloglist')->with('success', 'Request successfull');
    }

    public function blogEditPage(Request $request, $id)
    {

        // dd("hello");
        $blog = Blog::find($id);
        $user_type = auth()->user()->type;

        if (!$blog) {
            return back();
        }

        if ($user_type === 1) {
            return view('pages.blogEdit-page', compact('blog'));
        }
    }

    public function blogEdit(Request $request, $id)
    {

        // dd("hello");
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        // dd($request);
        $user_type = auth()->user()->type;
        $blog = Blog::find($id);

        if (!$blog) {
            return back()->with('error', 'Blog not found');
        }

        if ($user_type === 1) {
            // Admin can update any blog
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        } elseif ($blog->user_id === auth()->user()->id) {
            // User can only update their own blog
            $blog->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
        } else {
            // User is not authorized
            return back()->with('error', 'You are not authorized to edit this blog');
        }

        return back()->with('success', 'Blog updated successfully');
    }

    public function blogDelete($id)
    {
        // dd("hello");
        $user_type = auth()->user()->type;
        $blog = Blog::find($id);

        if (!$blog) {
            return back()->with('error', 'Blog not found');
        }

        if ($user_type === 1) {
            $blog->delete();
        } elseif ($blog->user_id === auth()->user()->id) {
            $blog->delete();
        } else {
            // User is not authorized
            return back()->with('error', 'You are not authorized to edit this blog');
        }

        return  back()->with('admin.blogEdit', $blog->id)->with('success', 'Blog Delete successfully');
    }
}
