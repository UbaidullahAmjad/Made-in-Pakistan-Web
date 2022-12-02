@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="post" action="{{ route('superadmin.slider.update', $slider->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="sliderHeading">Slider Heading Title</label>
                                            <input type="text" value="{{ $slider->slider_heading }}" class="form-control"
                                                name="slider_heading" id="sliderHeading">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="sliderDescription">Slider Description</label>
                                            <input type="text" value="{{ $slider->slider_description }}" class="form-control"
                                                name="slider_description" id="sliderDescription">
                                        </div>
                                    </div>
                
                                    <div class="form-row">
                                        <div class="form-group">
                                            <input type="file" name="slider_image" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Update Slider Details</button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="col-lg-6" >
                                <div class="p-2" style="width:200px; height:200px;">
                                    <img src="{{ asset('slider-images/' . $slider->slider_image_url) }}"  class="img-thumbnail  img-fluid">
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
@endsection
