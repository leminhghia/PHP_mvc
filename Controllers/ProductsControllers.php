<?php

namespace Controllers;

use Models\ProductsModel;

class ProductsControllers extends \Core\BaseController
{
    protected string $Model = "ProductsModel";
    public function index()
    {
        $product = new ProductsModel();
        $product->getproduct();
        $products = $product->getproduct();
        view('index/index', compact('products'));
    }
   
}
