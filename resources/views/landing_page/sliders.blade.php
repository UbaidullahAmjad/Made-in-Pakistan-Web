@extends('backend.superadmin.layout.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>S#</td>
                            <td>Heading</td>
                            <td>Description</td>
                            <td>Image</td>
                            <td>Actions</td>
                        </tr>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $slider->slider_heading }}</td>
                                <td>{{ $slider->slider_description }}</td>
                                <td>{{ $slider->slider_image_url }}</td>
                                <td><a href="{{ route('superadmin.slider.show', $slider->id) }}">Edit</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection