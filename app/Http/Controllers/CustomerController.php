<?php

namespace App\Http\Controllers;

use App\Services\CustomerServiceImpl;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerServiceImpl $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $customers = $this->customerService->getAll();
        return response()->json($customers, 200);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $dataCustomer = $this->customerService->create($request->all());

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function show($id)
    {
        $dataCustomer = $this->customerService->finById($id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $dataCustomer = $this->customerService->update($request->all(), $id);

        return response()->json($dataCustomer['customers'], $dataCustomer['statusCode']);
    }

    public function destroy($id)
    {
        $dataCustomer = $this->customerService->destroy($id);

        return response()->json($dataCustomer['message'], $dataCustomer['statusCode']);
    }
}
