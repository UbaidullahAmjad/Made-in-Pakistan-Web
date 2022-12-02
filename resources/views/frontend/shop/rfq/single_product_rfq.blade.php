@extends('frontend.layouts.app')
@section('header')
<header id="header" class="u-header u-header-left-aligned-nav">
  <div class="u-header__section">
      <!-- Topbar -->
      @include('frontend.layouts.partials.topbar')
      <!-- End Topbar -->

      <!-- Logo and Menu -->
      @include('frontend.layouts.partials.logo')
      <!-- End Logo and Menu -->

      <!-- Vertical-and-Search-Bar -->
        @include('frontend.layouts.partials.searchbar')
      <!-- End Vertical-and-secondary-menu -->
  </div>
</header>
@endsection
@section('contents')

<div class="container p-5 ">
  <form class="mx-auto" method="POST" action="{{route('rfq.store')}}" enctype="multipart/form-data">
    @csrf
    @method('post')
    <input type="hidden" value="{{$product->id}}" name="product_id">
    <input type="hidden" value="{{Auth::guard('buyer')->id()}}" name="customer_id">
    <div class="col-lg-6">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" value="{{Auth::guard('buyer')->user()->email}}" class="form-control" 
          id="colFormLabel" name="email">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">To</label>
        <div class="col-sm-10">
          <input type="text" value="supplier ABC Nasir Khan Jan" class="form-control" 
          id="colFormLabel" placeholder="col-form-label" name="email">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
          <input type="text" value="{{'Inquiry About  ( '.$product->name.' )' }}" class="form-control" 
          id="colFormLabel" placeholder="col-form-label" name="subject">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Purchase Quantity</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" 
          id="colFormLabel" name="qty">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Content</label>
        <div class="col-sm-10"> 
          <textarea class="form-control" name="content" rows=8 style="resize: none;"></textarea>  
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Document</label>
        <div class="col-sm-10"> 
        <input type="file" class="form-control" id="colFormLabel" name="rfqDocument">
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn  btn-danger">Send Inquiry</button>
        </div>
      </div>
    </div>

  </form>

</div>
@stop