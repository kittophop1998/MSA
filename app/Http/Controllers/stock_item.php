<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class stock_item extends Controller
{
    function Dashboard()
    {
        return view('Dashboard');
    }

    // หน้า Stock item
    function Stock()
    {
        return view('stock_item.stock');
    }

    // หน้า import stock item
    function import_stock()
    {
        return view('stock_item.import_stock');
    }

    // เก็บรูปสินค้า
    function keepvender()
    {
        return view('stock_item.test');
    }

    public function add_stock()
    {
        $_POST("product");
    }
}
