<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image as Picture;
use Mockery\Exception;
use App\Models\Category;
use function Helper\message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    public function __construct(){
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();
        return view('backend.admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.admin.category.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        try{
            $img = Image::make($request->file('image'))->resize(500, 400);
            $category =Category::create($request->except('category_id', 'image'));
            $pic = new Picture();
            $pic->url = $request->file('image')->getClientOriginalExtension().time().".".$request->file('image')->getClientOriginalExtension();
            // $pic->save();
            $category->images()->save($pic);
            $img->save($pic->url);
            $pic->save();
            return $this->message('superadmin.category.index', 'success', 'New Category Created');
        }
        catch (Exception $exception){
            return    $this->message('superadmin.category.index', 'error', $exception);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('backend.admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return $this->message('superadmin.category.index', 'success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back();
        // return $this->message('admin.category.index','success', 'Category Deleted Successfully');
    }
    protected function message($route=null, $type=null, $message=null){
        return redirect()->route($route)->with($type, $message." successfully");
    }
}
