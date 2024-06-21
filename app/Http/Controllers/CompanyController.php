<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCompanyRequest;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.company.index',['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    //企業登録画面
    public function create()
    {

        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $validated = $request->validated();
        $validated['logo_url'] = $request->file('logo_url')->store('company', 'public');
        Company::create($validated);

        return to_route('admin.company.index')->with('success', '会社を新規登録しました');

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        return view('admin.company.edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCompanyRequest $request, string $id)
    {
        $company = Company::findOrFail($id);
        $updateData = $request->validated();
        if ($request->hasFile('logo_url')) {
            Storage::disk('public')->delete($company->logo_url);
            $updateData['logo_url'] = $request->file('logo_url')->store('company', 'public');
        }
        $company->update($updateData);
        return to_route('admin.company.index')->with('success', '会社情報を更新しました');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
