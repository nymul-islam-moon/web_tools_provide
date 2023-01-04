<?php

namespace App\Http\Controllers;

use App\Models\RequestedProduct;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class RequestedProductController extends Controller
{
    public function RequestedProduct()
    {
        return view('requested-product.add-requested-product');
    }

    public function saveRequestedProduct(Request $request)
    {
        RequestedProduct::saveRequestedProduct($request);
        return redirect(route('manage.requested.product'));
    }

    public function manageRequestedProduct()
    {
        return view('requested-product.manage-requested-product',[
            'products' => RequestedProduct::all(),
        ]);
    }

    public function changeStatus($id)
    {
        $product = RequestedProduct::find($id);
        if($product->status == 0)
        {
            $product->status = 1;
        }
        else{
            $product->status = 0;
        }
        $product->save();
        return back();
    }
}
