@extends('layout.app')

@section('contents')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="horz-layout-colored-controls">Company Details</h4>
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
                        <div style="width: 80%;" class="mx-auto">
                        <table class="table table-border table-hover">
                            <tr><td colspan="2"><h3>General Information</h3></td></tr>
                            <tr><td>Company Name:</td><td>{{ $company->nameOfCompany }}</td></tr>
                            <tr><td>Type of Company:</td><td>{{ $company->typesOfCompany }} </td></tr>
                            <tr><td>CEO Name:</td><td>{{ $company->ceoname }} </td></tr>
                            <tr><td>Year Establshed:</td><td>{{ $company->establishmentYear }} </td></tr>
                            <tr><td>Total Employees:</td><td>{{ $company->totalEmployee }} </td></tr>
                            <tr><td>Company Export:</td><td>{{ $company->companyExport }} </td></tr>
                            <tr><td colspan="2"><h3>Contact Information</h3></tr>
                            <tr><td>Head Office:</td><td>{{ $company->headOffice }} </td></tr>
                            <tr><td>Regional Office 1:</td><td>{{ $company->regionalOffice1 }} </td></tr>
                            <tr><td>Regional Office 2:</td><td>{{ $company->regionalOffice2 }} </td></tr>
                            <tr><td>Regional Office 3:</td><td>{{ $company->regionalOffice3 }} </td></tr>
                            <tr><td>Factory Address:</td><td>{{ $company->factoryAddress1 }} </td></tr>
                            <tr><td>Factory Address 1:</td><td>{{ $company->factoryAddress2 }} </td></tr>
                            <tr><td>Factory Address 2:</td><td>{{ $company->factoryAddress3 }} </td></tr>
                            <tr><td>GPS Coordinates:</td><td>{{ $company->GpsOfFactory }} </td></tr>
                            <tr><td>Head Office Landline #:</td><td>{{ $company->headOfficeLandline }} </td></tr>
                            <tr><td>Head Office Mobile #:</td><td>{{ $company->headOfficeMobile }} </td></tr>
                            <tr><td>Email:</td><td>{{ $company->email }} </td></tr>
                            <tr><td>Website Url:</td><td>{{ $company->webSiteUrl }} </td></tr>
                            <tr><td>Fax:</td><td>{{ $company->faxNumber }} </td></tr>
                            <tr><td colspan="2"><h3>Legal Information</h3></tr>
                            <tr><td>Nearest Ports:</td><td>{{ $company->nearestPorts }} </td></tr>
                            <tr><td>Port Name:</td><td>{{ $company->portName }} </td></tr>
                            <tr><td>Forigen Office:</td><td>{{ $company->forigenOffice }} </td></tr>
                            <tr><td>NTN No:</td><td>{{ $company->ntnNo }} </td></tr>
                            <tr><td>GST No:</td><td>{{ $company->gstNo }} </td></tr>
                            <tr><td>WEBOC ID:</td><td>{{ $company->webocID }} </td></tr>
                            <tr><td>Filler Upto Date:</td><td>{{ $company->fillerUpToDate }} </td></tr>
                            <tr><td>Chamber of Commerece:</td><td>{{ $company->chamberOfCommerece }} </td></tr>
                           <tr><td>NTN Certificate:</td>
                                <td>
                                @foreach ($company->documents as $item)
                                    <a href="{{ $item->url}}" >Download</a>
                                @endforeach
                                <td>
                            </tr>
                            <tr><td>Pro Tax Certificate:</td><td><a href="{{ $company->proTexCertificate }}">Download</a> </td></tr>
                            <tr><td>Annual Turnover.:</td><td>{{ $company->annualRs }} </td></tr>
                            <tr><td>Bank Name :</td><td>{{ $company->bankName }} </td></tr>
                            <tr><td>Bank Branch City :</td><td>{{ $company->bankBranch }} </td></tr>
                            <tr><td>Bank Branch Code :</td><td>{{ $company->branchCode }} </td></tr>
                            <tr><td>Account Number :</td><td>{{ $company->accountNumber }} </td></tr>
                            <tr><td>Bank Statement :</td><td><a href="{{ $company->bankStatename }}">Download</a> </td></tr>
                        </table>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
