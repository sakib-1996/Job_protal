<?php

namespace App\Http\Controllers;

use App\Models\Add;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class AddController extends Controller
{
    public function createAddPage()
    {
        $adds = Add::get();
        return view('pages.adds.createAdds-Page', compact('adds'));
    }
    public function createAdd(Request $request)
    {
        $request->validate([
            'img' => 'required',
        ]);

        $image = $request->file('img');
        // dd($image);
        $directory = 'uploads/add';
        File::ensureDirectoryExists(public_path($directory));
        $newFileName = time() . '-' . $image->getClientOriginalName();
        $image->move(public_path($directory), $newFileName);
        // dd($newFileName);

        // Create the Add model
        $add = Add::create([
            'img_url' => asset("{$directory}/{$newFileName}"),
            'site_url' => $request->link,
        ]);

        // Other logic (if any) goes here

        return redirect()->back()->with('success', 'Add created successfully');
    }

    public function status($id)
    {
        // dd($id);
        $adds = Add::findOrFail($id);

        $newStatus = $adds->status == 0 ? 1 : 0;

        $adds->update(['status' => $newStatus]);

        return back();
    }


    public function addsDelete($id)
    {
        $adds = Add::findOrFail($id);

        $this->deleteOldImage($adds->img_url);
        $adds->delete();

        return redirect()->back()->with('success', 'Pluging Request Deleted!');
    }


    private function deleteOldImage($old_img)
    {
        $directory = 'uploads/add';
        $pathParts = explode('/', $old_img);
        $old_imgName = end($pathParts);
        // dd($old_imgName);
        File::delete(public_path("{$directory}/{$old_imgName}"));
    }
}
