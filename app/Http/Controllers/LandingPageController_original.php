<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use App\Models\SliderImage;
use Illuminate\Http\Request;
use Twilio\Deserialize;

use function PHPSTORM_META\type;

class LandingPageController extends Controller
{


    public function index()
    {
        // dd(Setting::first()->setting);
        $img = Setting::first();
        $arr = unserialize($img->slide_image);
        $category = Category::get(['id', 'name']);
        // dd($category);
        return view('landing_page.footer', compact('category'));
    }


    public function create()
    {
    }

    public function store(Request $request)
    {
        
        if ($request->has('slider')) {
            if (SliderImage::count('id') > 3) {
                return redirect()->back()->with('error', 'Cannot add more than three slider!, you can update though');
            } else {
                $this->sliderImages($request);
            }
        }
        if ($request->file('header_logo')) {
            $logo = $request->file('header_logo');
            $logo_name = rand() . "-header-logo." . $logo->getClientOriginalExtension();
            $old_header_logo = Setting::first();
            if (file_exists(public_path() . "/logos/" . $old_header_logo->header_logo)) {

                unlink(public_path() . "/logos/" . $old_header_logo->header_logo);
            }
            Setting::where('id', 1)->update(['header_logo' => $logo_name]);
            $logo->move(public_path() . "/logos/", $logo_name);
            return redirect()->back()->withSuccess('Header Logo Image Uploaded');
        }
        if ($request->file('footer_logo')) {
            $logo = $request->file('footer_logo');
            $logo_name = rand() . "-footer-logo." . $logo->getClientOriginalExtension();
            $old_footer_logo = Setting::first();
            if (file_exists(public_path() . "/logos/" . $old_footer_logo->footer_logo)) {

                unlink(public_path() . "/logos/" . $old_footer_logo->footer->footer_logo);
            }
            Setting::where('id', 1)->update(['footer_logo' => $logo_name]);
            $logo->move(public_path() . "/logos/", $logo_name);
            return redirect()->back()->withSuccess('Footer Image Uploaded');
        }

        if ($request->has('brand')) {
            $brands = array();
            $brand_image = $request->file('brand');
            $brand = Setting::first();
            $brand = unserialize($brand->brand_images);
            foreach ($brand as $image) {
                unlink(public_path() . "/brand-images/" . $image);
            }
            foreach ($brand_image as $image) {

                $name = rand() . "-brand-image." . $image->getClientOriginalExtension();
                array_push($brands, $name);
                $image->move(public_path() . "/brand-images/", $name);
            }
            Setting::where('id', 1)->update(['brand_images' => serialize($brands)]);
            return redirect()->back()->withSuccess('Brand Image Uploaded');
        }

        if ($request->has('phone')) {
            Setting::where('id', '1')->update([
                'phone' => json_encode($request->phone),
                'address' => $request->address,
                'category' => json_encode($request->category),
            ]);
            return redirect()->back()->withSuccess('Data Updated');
        }
        
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)

    {
        //
    }

    public function sliderImages($request)
    {
        $image = $request->file('slider.image');
        $image_name = rand() . "-slider-image." . $image->getClientOriginalExtension();
        SliderImage::create([
            'slider_heading' => $request->slider['heading'],
            'slider_description' => $request->slider['description'],
            'slider_image_url' => $image_name,
            'setting_id' => 1
        ]);

        $image->move(public_path() . "/slider-images/", $image_name);

        return redirect()->back()->withSuccess('Slider Image Uploaded');
    }
    public function slider()
    {
        $sliders = SliderImage::all();
        return view('landing_page.sliders', compact('sliders'));
    }
    public function showSlider($id)
    {
        $slider = SliderImage::findOrFail($id);
        return view('landing_page.slider_show', compact('slider'));
    }
    public function postShowSlider(Request $request, $id)
    {
        //get the new file
        if ($request->has('slider_image')) {
            $newSlider = $request->file('slider_image');
            $image_name = rand() . "-slider-image." . $newSlider->getClientOriginalExtension();
            // first remove the old picture
            $slider = SliderImage::find($id);
            if ($slider->slider_image_url != '') {
                unlink('slider-images/' . $slider->slider_image_url);
            }

            // get data from request and update the slider
            $slider->slider_heading = $request->slider_heading;
            $slider->slider_description = $request->slider_description;
            $slider->slider_image_url = $image_name;
            $slider->save();

            //move the new file to public/slider-images folder
            $newSlider->move(public_path() . '/slider-images/', $image_name);

            return redirect()->back()->withSuccess('Slider Information Updated Successfully');
        } else {
            SliderImage::where('id', $id)->update($request->except('slider_image', '_token'));
            return redirect()->back()->withSuccess('Slider Information Updated Successfully');
        }
    }
}
