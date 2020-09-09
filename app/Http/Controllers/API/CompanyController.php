<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CompanyController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param Company $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Request $request, Company $company)
    {
        return response()->json($company, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompanyRequest $request
     * @param Company $company
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->validated());
        return response()->json($company->refresh(), 200);
    }

}
