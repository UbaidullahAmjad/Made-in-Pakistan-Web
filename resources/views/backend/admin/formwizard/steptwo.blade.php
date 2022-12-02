@extends('backend.admin.unvarified')

@section('contents')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collpase show">
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="form form-horizontal" action="{{ route('step2') }}" method="post">
                            @csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> Company Contact Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">factory Address 1</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text"
                                                    placeholder="Factory Address 1" name="factoryAddress1" rows="5">
                                                {{ $company->factoryAddress1 }}
                                                </textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">factory Address 2</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text"
                                                    placeholder="Factory Address 2" name="factoryAddress2" rows="5">
                                                {{ $company->factoryAddress2 }}
                                                </textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">factory Address 3</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text"
                                                    placeholder="Factory Address 3" name="factoryAddress3" rows="5">
                                                {{ $company->factoryAddress3 }}
                                                </textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">GPS of Factory</label>
                                            <div class="col-md-9" id="map">

                                                <input class="form-control border-primary" type="text"
                                                    placeholder="coordinates of your company location" name="GpsOfFactory"
                                                    value="{{ $company->GpsOfFactory }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Head Office Landline</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="tel"
                                                    placeholder="Head Office Landline #" name="headOfficeLandline"
                                                    value="{{ $company->headOfficeLandline }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Head Office Mobile</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="tel"
                                                    placeholder="Head Office Mobile #" name="headOfficeMobile"
                                                    value="{{ $company->headOfficeMobile }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Email</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="email"
                                                    placeholder="Company Email Address" name="email"
                                                    value="{{ $company->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Website URL</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="url"
                                                    placeholder="Company Official Office" name="webSiteUrl"
                                                    value="{{ $company->webSiteUrl }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Fax Number</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"
                                                    placeholder="Fax Number" name="faxNumber"
                                                    value="{{ $company->faxNumber }}">
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Nearest Ports</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"
                                                    placeholder="Nearst Port to Company (Name)" name="nearestPorts"
                                                    value="{{ $company->nearestPorts }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">portName</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"
                                                    placeholder="Port Name" name="portName"
                                                    value="{{ $company->portName }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">forigenOffice</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="text"
                                                    placeholder="Forigen Office Address" name="forigenOffice"
                                                    value="{{ $company->forigenOffice }}">
                                            </div>
                                        </div>
                                    </div>


                                    <input type=hidden value="1" name="vendor_id">

                                </div>
                            </div>

                            <div class="form-actions right">
                                <a href="{{ url('/stepone') }}" class="btn btn-danger mr-1">
                                    <i class="ft-x"></i> Previous
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> Next
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
    <script>
        function initMap(){
            var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8,
        });

        }
        

    </script>

@endsection
