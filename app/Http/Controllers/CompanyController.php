<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'image'  => 'required',
        ]);

        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'business-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('company'))
            {
                Storage::disk('public')->makeDirectory('company');
            }

//                resize image for category and upload
            $companyLogo = Image::make($image)->resize(51,200)->stream();
            Storage::disk('public')->put('company/'.$imageName,$companyLogo);
        }else{
            $imageName = "default.png";
        }

        $attributes['image']  = $imageName;



        Company::create($attributes);
//        dd($request->all());
        return redirect('/company/create')->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::find($id);
//        dd($company);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {


        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required',
            'address' => 'required',
            'image'  => '',
        ]);

        $companies = Company::find($request->id);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'business-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('company'))
            {
                Storage::disk('public')->makeDirectory('company');
            }

            //                delete old image
            if (Storage::disk('public')->exists('company/'.$companies->logo))
            {
                Storage::disk('public')->delete('company/'.$companies->logo);
            }


//                resize image for category and upload
            $companyLogo = Image::make($image)->resize(200,51)->stream();
            Storage::disk('public')->put('company/'.$imageName,$companyLogo);
        }else{
            $imageName = $companies->image;
        }
        $attributes['image']  = $imageName;

        $companies->update($attributes);

        return redirect()->back()->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
