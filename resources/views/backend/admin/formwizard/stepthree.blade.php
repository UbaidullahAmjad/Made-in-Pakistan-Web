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
                    <form class="form form-horizontal" action="{{route('step3')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h4 class="form-section"><i class="la la-eye"></i> Company Legal Information</h4>
                            <div class="row">
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">NTN NO</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="XXXXX-XXXXXX-X" name="ntnNo" value="{{ session()->get('company.ntnNo') }}">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">GST NO</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="GST No" name="gstNo" value="{{ session()->get('company.gstNo') }}">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">weboc ID</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="weboc ID" name="webocID" value="{{ session()->get('company.webocID') }}">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">filler UpTo Date</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="date" name="fillerUpToDate" value="{{ session()->get('company.fillerUpToDate') }}">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">NTN Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="file" multiple name="ntnCertificate[]">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Commerce Chamber</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Commerce Chamber" name="chamberOfCommerece" value="{{ session()->get('company.chamberOfCommerece') }}">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Pro Tax Certificate</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="file" placeholder="Pro Tax Certificate" name="proTexCertificate">
                                        </div>
                                    </div>
                                </div>
                                   <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Annual Turnover</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="number" placeholder="Annual Turnover" name="annualRs" value="{{ session()->get('company.annualRs') }}" min="0">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Bank Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Bank Name" name="bankName" value="{{ session()->get('company.bankName') }}">
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Account Number</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Bank Account #" name="accountNumber" value="{{ session()->get('company.accountNumber') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Bank Branch</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Bank Branch Name" name="bankBranch" value="{{ session()->get('company.bankBranch') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Bank Branch Code</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Bank Branch Code" name="branchCode" value="{{ session()->get('company.branchCode') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Bank Statement</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="file" placeholder="Bank Statement" name="bankStatename">
                                        </div>
                                    </div>
                                </div>
                                   
                                   
                                <div class="col-md-6">                     
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control">Company Export</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="text" placeholder="Company Export" name="companyExport" value="{{ session()->get('company.companyExport') }}">
                                        </div>
                                    </div>
                                </div>
                                <input type=hidden value="1" name="vendor_id">
                            </div>
                        </div>

                        <div class="form-actions right">
                            <a href="{{ url('/steptwo') }}" class="btn btn-danger mr-1">
                                <i class="ft-x"></i> Previous
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Save
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection