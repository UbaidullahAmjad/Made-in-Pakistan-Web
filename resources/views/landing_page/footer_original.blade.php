@extends('backend.superadmin.layout.app')
@section('contents')
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <div class="card-content">
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>    
                    @endif
                    
                    <form method='post' action="{{route('superadmin.landing.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="form-row">
                                <h3>Home Page Company Information Setting</h3>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Mobile No</label>
                                    <input type="number" name="phone['mobile']" class="form-control" id="inputEmail4">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Phone</label>
                                    <input type="number" name="phone['phone']" class="form-control" id="inputPassword4">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Fax</label>
                                    <input type="number" name="phone['fax']" class="form-control" id="inputPassword4">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">Full Address</label>
                                    <input type="text" name='address' class="form-control" id="">
                                </div>
                            </div>
                            <div class="form-row">
                                <h3>Home Page Categories Options</h3>
                                
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="">Category 1</label>
                                    <select class="custom-select my-1 mr-sm-2" name='category[]' id="" style="width: 250px; height: 40px;">
                                    <option selected value="" disabled readonly>Select Category 1</option>
                                    @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                    </select>
                                    <label for="">Category 2</label>
                                    <select class="custom-select my-1 mr-sm-2" id="" name='category[]' style="width: 250px; height: 40px;">
                                        <option selected value="" disabled readonly>Select Category 2</option>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="">Category 3</label>
                                    <select class="custom-select my-1 mr-sm-2" name='category[]' id="" style="width: 250px; height: 40px;">
                                        <option selected value="" disabled readonly>Select Category 3</option>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="">Category 4</label>
                                    <select class="custom-select my-1 mr-sm-2" name='category[]' id="" style="width: 250px; height: 40px;">
                                        <option selected value="" disabled readonly>Select Category 4</option>
                                        @foreach($category as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">

                                <h3>Home Page Brand Images</h3>
                                <hr>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group">
                                    <label for="sliderImages"> Upload Brand Images</label>
                                    <input type="file" class=" form-control" multiple name="brand[]" id="sliderImages">
                                </div>
                            </div>
                            <div class="form-row">
                                <h3>Logo Images</h3>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group">
                                    <label for="HeaderLogoImage"> Upload Logo Image (for header)</label>
                                    <input type="file" class="form-control" name="header_logo" id="HeaderLogoImage">
                                </div>
                            </div>
                            <div class="form-row">
                                
                                <div class="form-group">
                                    <label for="footerLogoImage"> Upload Logo Image (for footer)</label>
                                    <input type="file" class="form-control" name="footer_logo" id="footerLogoImage">
                                </div>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                            </div>
                        </div>
                    </form>
                    <form method='post' action="{{route('superadmin.landing.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-6">
                                <h3>Home Page Slider Images</h3>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ route("superadmin.slider.all") }}">View All Uploaded Slider</a>
                            </div>
                            
                            <hr>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="sliderImages"> Slider Heading</label>
                                <input type="text" class=" form-control" name="slider[heading]"  id="sliderImages">
                            </div>
                            <div class="form-group">
                                <label for="sliderImages"> Slider Description</label>
                                <input type="text" class=" form-control" name="slider[description]" id="sliderImages">
                            </div>
                            <div class="form-group">
                                <label for="sliderImages"> Upload Slider Pictures</label>
                                <input type="file" class=" form-control" name="slider[image]" id="sliderImages">
                            </div>
                        </div>  
                        
                        <div class="form-group">
                            <button type="submit" class="form-control">Upload Slide</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection    
