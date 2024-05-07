<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Experience;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SittingsController extends Controller
{

    public function index()
    {
        return view('pages.sittings.index-page');
    }


    public function slidersAddPage()
    {
        $img = Slider::find(1);
        return view('pages.sittings.add-slider',compact('img'));
    }
    public function slidersAdd(Request $request)
    {
        $request->validate([
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_4' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $directoryToRefresh = 'uploads/banner';

        Slider::truncate();
        $this->refreshDirectory($directoryToRefresh);

        $slider = new Slider();

        // Upload and process image_1
        if ($request->hasFile('image_1') && $request->file('image_1')->isValid()) {
            $slider->image_1 = $this->uploadImage($request->file('image_1'), $directoryToRefresh);
        }

        // Upload and process image_2
        if ($request->hasFile('image_2') && $request->file('image_2')->isValid()) {
            $slider->image_2 = $this->uploadImage($request->file('image_2'), $directoryToRefresh);
        }

        // Upload and process image_3
        if ($request->hasFile('image_3') && $request->file('image_3')->isValid()) {
            $slider->image_3 = $this->uploadImage($request->file('image_3'), $directoryToRefresh);
        }

        // Upload and process image_4
        if ($request->hasFile('image_4') && $request->file('image_4')->isValid()) {
            $slider->image_4 = $this->uploadImage($request->file('image_4'), $directoryToRefresh);
        }

        // Save Slider record
        $slider->save();

        return back()->with('success', 'Request successful');
    }

    private function refreshDirectory($directory)
    {
        $directoryPath = public_path($directory);

        // Check if the directory exists before proceeding
        if (File::isDirectory($directoryPath)) {
            // Delete all files within the directory
            File::cleanDirectory($directoryPath);
        }
    }

    private function uploadImage($image, $directory)
    {
        $t = time();
        $file_name = $image->getClientOriginalName();
        $newName = "{$t}-{$file_name}";

        $path = "{$directory}/{$newName}";

        File::ensureDirectoryExists(public_path($directory));

        $img = Image::make($image);
        $img->resize(null, 400, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save(public_path($path));

        return asset($path);
    }


    public function categoryPageList()
    {
        $categories = Category::paginate(10);
        return view('pages.sittings.categoryList-page', compact('categories'));
    }

    public function createCategoryPage(Request $request)
    {
        $request->validate([
            'categoryName' => 'required|string|unique:categories,name',
        ]);
        Category::create([
            'name' => $request->categoryName,
        ]);
        return back()->with('success', 'Category created successfully');
    }

    public function typePageList()
    {
        $types = Type::paginate(10);
        return view('pages.sittings.typeList-page', compact('types'));
    }


    public function createTypePage(Request $request)
    {
        $request->validate([
            'job_types' => 'required|string|unique:types,job_type',
        ]);

        Type::create([
            'job_type' => $request->job_types,
        ]);

        return back()->with('success', 'Type created successfully');
    }


    public function typeDelete(Type $type)
    {
        $type->delete();

        return back()->with('success', 'Type deleted successfully');
    }
    public function categoryDelete(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Type deleted successfully');
    }




    public function experianceListPage()
    {
        $experiences = Experience::paginate(10);
        return view('pages.sittings.experienceList-page', compact('experiences'));
    }

    public function createExperience(Request $request)
    {
        $request->validate([
            'job_experience' => 'required|string|unique:experiences,experience',
        ]);

        Experience::create([
            'experience' => $request->job_experience,
        ]);

        return back()->with('success', 'Experience created successfully');
    }

    public function PageDelete(Experience $experiance)
    {
        $experiance->delete();
        return back()->with('success', 'Type deleted successfully');
    }
}
