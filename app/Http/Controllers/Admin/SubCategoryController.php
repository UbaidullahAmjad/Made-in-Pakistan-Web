<?php

namespace App\Http\Controllers\Admin;

use Mockery\Exception;
use App\Models\Category;
use App\Models\SubCategory;
use function Helper\message;
use Illuminate\Http\Request;
use function PHPSTORM_META\type;
use App\Http\Controllers\Controller;
use App\Models\Image as Picture;
use Intervention\Image\Facades\Image;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subcategories = SubCategory::all();
        
        return view('backend.admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.admin.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $name = rand()."-subcategory-image.".$request->file('subcat_image')->getClientOriginalExtension();
            $img = Image::make($request->file('subcat_image'))->resize(300, 300);
            $category = SubCategory::create($request->except('subcat_image'));
            $pic = new Picture();
            $pic->url = $name;
    

            $pic->imageable_type = get_class($category);
            $pic->imageable_id = $category->id;
            // dd($category);
            // $public_path = public_path()."\subcategory-images\\";
            $img->save($name);
            $pic->save();
            return redirect()->route('superadmin.category.index');
        
        
        
            
            // return $this->message('admin.category.index', 'success', 'New Category Created');

        // SubCategory::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        if($request->ajax()){
            return response()->json(SubCategory::where('category_id', $request->index)->get());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subcategory)
    {
        $categories = Category::all();
       return view('backend.admin.subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subcategory)
    {
        $subcategory->update($request->except('subcat_image'));
        return redirect()->route('superadmin.subcategory.index')->with('Subcategory Updated Successfully');
        // message('superadmin.subcategory.index', 'success', 'New Category Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(SubCategory $subCategory)
    {
        try{
            $subCategory->delete();
            message('admin.subcategory.index','success', 'Category Deleted');
        }
        catch (Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }

    }

}
