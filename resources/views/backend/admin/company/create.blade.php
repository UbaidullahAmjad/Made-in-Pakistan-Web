@extends('layout.app')
@section('contents')
<div class="row">
<div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-colored-controls">2-Columns Horizontal Form</h4>
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
						<div class="card-text">
							<p>This is 2-columns horizontal form with labels on left and form controls on right in one line. Add <code>.form-horizontal</code> class to the form tag to have horizontal form styling. User can also change the border color and background color of the form control. Add <code>border-*</code> class to change border color and <code>bg-*</code> class to change background color of the form control.</p>
						</div>
						
	                    <form class="form form-horizontal" action="{{route('admin.company-information.store')}}" method="post">
                            @csrf
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="la la-eye"></i> Company Detailed Information</h4>
	                    		<div class="row">
                                    <input type=hidden value="1" name="vendor_id">
	                    			<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput1">Company Name</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput1" class="form-control border-primary" placeholder="First Name" name="nameOfCompany">
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput2">Type of Company</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput2" class="form-control border-primary" placeholder="Last Name" name="typesOfCompany">
			                        		</div>
				                        </div>
			                        </div>
		                        </div>
		                        <div class="row">
		                        	<div class="col-md-6">
			                        	<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput3">CEO Name</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="userinput3" class="form-control border-primary" placeholder="Username" name="ceoname">
			                        		</div>
			                       		</div>
			                       	</div>
			                       	<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput4">Establishment Year</label>
				                        	<div class="col-md-9">
				                            	<input type="date" id="userinput4" class="form-control border-primary" placeholder="Nick Name" name="establishmentYear">
			                        		</div>
				                        </div>
				                    </div>
		                        </div>		                      
		                        <div class="row">
		                        	<div class="col-md-6">
		                        		<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput5">Head Office</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="email" id="userinput5" name="headOffice">
				                        	</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">regionalOffice1</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" id="userinput6" name="regionalOffice1">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">regionalOffice 2</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" id="userinput6" name="regionalOffice2">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">regionalOffice 3</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" id="userinput6" name="regionalOffice3">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">factory Address 1</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" name="factoryAddress1">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">factory Address 2</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" name="factoryAddress2">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">factory Address 3</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" name="factoryAddress3">
											</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="userinput6">GPS of Factory</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="http://" name="GpsOfFactory">
											</div>
                                        </div>
                                    </div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Head Office Landline</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="tel" placeholder="Contact Number" name="headOfficeLandline">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Head Office Mobile</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="tel" placeholder="Contact Number" name="headOfficeMobile">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Email</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="email" placeholder="email address" name="email">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Website URL</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="url" placeholder="http://" name="webSiteUrl">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Fax Number</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="url" placeholder="http://" name="faxNumber">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Total Employees</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="number" placeholder="80." name="totalEmployee">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Company Export</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="" name="companyExport">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">List Of Countries</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="listOfCountries">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Nearest Ports</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="nearestPorts">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">portName</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="portName">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">forigenOffice</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="forigenOffice">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">NTN NO</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="ntnNo">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">GST NO</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="gstNo">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">weboc ID</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="webocID">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">filler UpTo Date</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="fillerUpToDate">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">NTN Certificate</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="ntnCertificate">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Commerce Chamber</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="chamberOfCommerece">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Pro Tax Certificate</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="proTexCertificate">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Annual Rs</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="annualRs">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Bank Statement</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="bankStatename">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Account Number</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" type="text" placeholder="Pakistan, India" name="accountNumber">
											</div>
				                        </div>
		                        	</div>
                                       <div class="col-md-6">                     
										<div class="form-group row">
				                        	<label class="col-md-3 label-control">Status</label>
				                        	<div class="col-md-9">
												<input class="form-control border-primary" value="1" type="text" placeholder="1 or 0" name="active">
											</div>
				                        </div>
		                        	</div>

		                        </div>
							</div>

	                        <div class="form-actions right">
	                            <button type="button" class="btn btn-danger mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button>
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
@stop