<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestedProducts\CreateRequestedProductRequest;
use App\Http\Requests\RequestedProducts\UpdateRequestedProductRequest;
use App\Models\RequestedProduct;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class RequestedProductController extends Controller
{
    public function index()
    {
        return view('requested_product.index');
    }

    public function create(CreateRequestedProductRequest $request)
    {
        $formdata = $request->validated();
        $formdata['status'] = 0;
        RequestedProduct::create($formdata);
        return back()->with('create', 'Requested Product created successfully');
    }

    public function show()
    {
        $requestedProducts = RequestedProduct::paginate(10);
        return view('requested_product.show',compact('requestedProducts'));
    }

    public function edit(RequestedProduct $requestedProduct)
    {
        return view('requested_product.edit', compact('requestedProduct'));
    }

    public function update(UpdateRequestedProductRequest $request,RequestedProduct $requestedProduct)
    {
        $formdata = $request->validated();
        $requestedProduct->update($formdata);
        return redirect(route('requested.product.index'))->with('update', 'Requested Product updated successfully');
    }

    public function destroy(RequestedProduct $requestedProduct)
    {
        $requestedProduct->delete();
        return back()->with('destroy', 'Requested Product deleted successfully');
    }
}
