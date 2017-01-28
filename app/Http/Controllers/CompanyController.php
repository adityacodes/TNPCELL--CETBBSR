<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TNP;
use App\Company;
use View, Session, Auth, Validator;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');

        if(Auth::check()){
                $user = TNP::where('regdno', '=', Auth::user()->name)->first();
                View::share('user', $user);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the blog posts in it
        $companies = Company::orderBy('id', 'desc')->paginate(5);

        //return a view and pass in the above variabe
        return view('companies.index')->withCompanies($companies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. validate the date
        $validator = Validator::make($request->all(), [
                'company_name' => 'required|max:25',
                'company_image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'company_website'=> 'required',
                'company_description' => 'required',
                'company_massrecruiter'=> 'required',
            ]);

        if ($validator->fails()) {
            // send back to the page with the input data and errors
            return redirect('admin/company/create')
                        ->withErrors($validator)
                        ->withInput();
          }

        if($request->file('company_image')->isValid()){
            $imageName = time().'.'.$request->company_image->getClientOriginalExtension();
            $request->company_image->move(public_path('uploads/company'), $imageName);
        }
        else {
          // sending back with error message.
          Session::flash('warning', 'Uploaded file is not valid');
          return redirect('admin/company/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        //2. Store in the DB
        $company = new Company;

        $company->company_name = $request->company_name;
        $company->company_image = $imageName;
        $company->company_website = $request->company_website;
        $company->company_description = $request->company_description;
        $company->company_massrecruiter = $request->company_massrecruiter; 

        $company->save();

        //3. Redirect to another page
        Session::flash('success', 'The company was successfully saved.');

        return redirect()->route('admin.company.show', $company->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $company = Company::find($id);
        return view('companies.show')->withCompany($company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the db ans save as a var
        $company = Company::find($id);
        //return the view and pass in the var we previously created
        return view('companies.edit')->withCompany($company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $company = Company::find($id);

        
        //1. validate the date
        $validator = Validator::make($request->all(), [
                'company_name' => 'required|max:25',
                'company_image'=> 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'company_website'=> 'required',
                'company_description' => 'required',
                'company_massrecruiter'=> 'required',
            ]);
        

        if($request->hasfile('company_image'))
        {
            if($request->file('company_image')->isValid()){
                File::delete('uploads/company/'.$company->company_image);
                $imageName = time().'.'.$request->company_image->getClientOriginalExtension();
                $request->company_image->move(public_path('uploads/company'), $imageName);
                $company->company_image = $imageName;
            }
            else{     
              // sending back with error message.
              Session::flash('warning', 'Uploaded file is not valid');
              return redirect('admin/company/create')
                            ->withErrors($validator)
                            ->withInput();
            }

        }
        //2. Store in the DB
        
        $company->company_name = $request->company_name;
        $company->company_website = $request->company_website;
        $company->company_description = $request->company_description;
        $company->company_massrecruiter = $request->company_massrecruiter;
        
        $company->save();
        // set flash meessage to be shown

        Session::flash('success', 'The Company was successfully updated');
        //redirect the users

        return redirect()->route('admin.company.show', $company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        File::delete('uploads/company/'.$company->company_image);
        $company->delete();

        Session::flash('Success', 'Alum Deleted Successfully');

        return redirect()->route('admin.company.index');
    }
}
