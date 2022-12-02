@extends('backend.admin.unvarified')

@section('contents')
    <div class="row">
        <div class="col-md-12">
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
                        <form class="form form-horizontal" action="{{ route('step1') }}"
                            method="post">
                            @csrf
                            <div class="form-body">
                                <h4 class="form-section"><i class="la la-eye"></i> Company General Information</h4>
                                <div class="row">
                                    <input type=hidden value="1" name="vendor_id">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput1">Company Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput1" class="form-control border-primary"
                                                    placeholder="write your company name" name="nameOfCompany" value="{{ session()->get('company.nameOfCompany')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput2">Type of Company</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput2" class="form-control border-primary"
                                                    placeholder="Type of your company" name="typesOfCompany" value="{{ session()->get('company.typesOfCompany')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput3">CEO Name</label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput3" class="form-control border-primary"
                                                    placeholder="CEO name of Your Company" name="ceoname" value="{{ session()->get('company.ceoname')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput4">Establishment
                                                Year</label>
                                            <div class="col-md-9">
                                                <input type="date" id="userinput4" class="form-control border-primary"
                                                    name="establishmentYear" value="{{ session()->get('company.establishmentYear')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput5">Head Office</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text" placeholder="Head Office Address"
                                                id="userinput5" name="headOffice" rows="5">
                                                {{ session()->get('company.headOffice')}}
                                                </textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">regionalOffice1</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text" placeholder="Regional Office1 Address"
                                                rows="5" id="userinput6" name="regionalOffice1">
                                                    {{ session()->get('company.regionalOffice1')}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">regionalOffice 2</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text" placeholder="Regional Office2 Address"
                                                rows="5" id="userinput6" name="regionalOffice2">
                                                    {{ session()->get('company.regionalOffice2')}}
                                                </textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput6">regionalOffice 3</label>
                                            <div class="col-md-9">
                                                <textarea class="form-control border-primary" type="text" placeholder="Regional Office3 Address"
                                                rows="5" id="userinput6" name="regionalOffice3">
                                                {{session()->get('company.regionalOffice3') }}
                                                </textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control">Total Employees</label>
                                            <div class="col-md-9">
                                                <input class="form-control border-primary" type="number" placeholder="Total Number of Employees of company"
                                                     name="totalEmployee" value="{{ session()->get('company.totalEmployee')}}" min="0">
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>

                            <div class="form-actions right">
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
