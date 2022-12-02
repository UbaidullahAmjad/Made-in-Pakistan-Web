<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyFormWizardController extends Controller
{
    function __construct()
    {
        $this->middleware('auth:seller');
    }
    public function stepOne(Request $request)
    {


        $company = $request->session()->get('company');
        return view('backend.admin.formwizard.stepone', compact('company'));
    }

    public function postStepOne(Request $request)
    {
        $errors = $request->validate([
            'nameOfCompany'=>'required|string',
            'typesOfCompany'=>'required|string',
            'ceoname'=>'required|min:2|string',
            'headOffice'=>'required|min:5|string',
        ]);
        if (empty($request->session()->get('company'))) {
            $company = new Company();
            $company->fill($request->all());
            $request->session()->put('company', $company);
        } else {
            $company = $request->session()->get('company');
            $company->fill($request->all());
            $request->session()->put('company', $company);
        }
        return redirect('/steptwo');
    }

    public function stepTwo(Request $request)
    {
        $company = $request->session()->get('company');
        return view('backend.admin.formwizard.steptwo', compact('company'));
    }

    public function postStepTwo(Request $request)
    {
        $errors = $request->validate([
             'headOfficeLandline'=>'required|string',
            'headOfficeMobile'=>'required|string',
            'email'=>'required|email',
            'nearestPorts'=>'required'
        ]);
        $company = $request->session()->get('company');
        $company->fill($request->all());
        $request->session()->put('company', $company);
        return redirect('/stepthree');
    }

    public function stepThree(Request $request)
    {
        $company = $request->session()->get('company');
        return view('backend.admin.formwizard.stepthree', compact('company'));
    }

    public function postStepThree(Request $request)
    {
        
$errors = $request->validate([
            'ntnNo'=>'required|string',
            'gstNo'=>'required|string',
            'fillerUpToDate'=>'required',
            'chamberOfCommerece'=>'required',
            'bankName'=>'required',
            'accountNumber'=>'required',
            'branchCode'=>'required',
        ]);
        // get data of step1 and step2 from sessions
        $company = $request->session()->get('company');
        if($request->has('ntnCertificate'))
        {
            $ntnCertificates = $request->file('ntnCertificate');
            foreach($ntnCertificates as $key =>  $file)
            {
                $file_name[] = time()."-ntn-certificate-".$key.".".$file->getClientOriginalExtension();
                // Put that New Company Data into Sessions
        $request->session()->put(['company' => $company, 'ntnCertificate' => $file_name]);    
            }
        }
        if ($request->has('proTexCertificate'))
        {
                // get proTaxCertificate file from Request and asssigen it a name
                $proTaxCertificate = time()."-pro-tax-certificate".".".$request->proTexCertificate->getClientOriginalExtension();
                $company->proTexCertificate = $proTaxCertificate;
                // move files from temp location to their respective folders in Public Direcotry
        $request->file('proTexCertificate')->move(public_path("/provisionalCertificate"), $proTaxCertificate);
        }
        if ($request->has('bankStatename'))
        {
            // get BankStatement file from Request and asssigen it a name
            $bankStatename = time()."-bank-statement".".".$request->bankStatename->getClientOriginalExtension();
                    $company->bankStatename = $bankStatename;
                            // move files from temp location to their respective folders in Public Direcotry
        $request->file('bankStatename')->move(public_path("/bankStatements"), $bankStatename);    
        }
        //add data to $company Variable

        $company->ntnNo = $request->ntnNo;
        $company->gstNo = $request->gstNo;
        $company->webocID = $request->webocID;
        $company->fillerUpToDate = $request->fillerUpToDate;
        
        $company->chamberOfCommerece = $request->chamberOfCommerece;
        $company->annualRs = $request->annualRs;
        $company->bankName = $request->bankName;
        $company->accountNumber = $request->accountNumber;
        $company->bankBranch = $request->bankBranch;
        $company->branchCode = $request->branchCode;
        $company->companyExport = $request->companyExport;
        
        
           
    
        
        // Redirect to store method to store the data in database
        return redirect('/store');
        
        
    }

    public function store(Request $request)
    {
        $document = new CompanyDocument();
        $company = $request->session()->get('company');
        
        $company->seller_id = Auth::guard('seller')->id();
        $company->save();
        if($request->has('ntnCertificate'))
        {
        $ntnCertificates = $request->session()->get('ntnCertificate');
        foreach($ntnCertificates as $certificate){
            CompanyDocument::create([
                'url' => $certificate,
                'company_id' => $company->id
            ]);
        }
        }
        // $document->save();
        // dd('working');
        
        $request->session()->forget('company');
        return redirect('/seller');
        }
}
