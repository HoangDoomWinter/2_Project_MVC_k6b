<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    function getProduct() {
        $products = ProductModel::all();
        return view('admin.product.getProducts', ['products' => $products]);
    }
}


function getProductsByBand(Request $request)
{
    $band = $request->input('selectBand');
    $products = ProductModel::where('band', $band)->get();
    return view('admin.product.getProductsByBand', ['Products' => $products]);
}
# lay box de nhap du lieu
function forminsertProduct()
{
    return view('admin.product.insertProduct');
}

function insertProduct(Request $request) #ham insert de lay du lieu vao cosodulieu
{
    $product = new ProductModel;
    $product ->pid = $request->id;
    $product ->pname = $request->pname;
    $product ->company = $request->company;
    $product ->band = $request->selectBand;
    $product ->year = $request->selectYear;
    if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK) {
        $pimage = 'data: image/png;base64,'
        . base64_encode(file_get_contents($_FILES['imageFile']["tmp_name"]));
    $product->pimage =   $pimage;
    }
    $product->save();
    return redirect('admin/product/insertProduct')
    ->with("Note", "them thanh cong");
}

function deleteProduct($pid)
{
    $product = ProductModel::where('pid', $pid)->first();
    $product->delete();
    return redirect('admin/product/getProducts')
    ->with("Note", "xoa thanh cong");
}