<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    //Add stock item
    public function add_stock(Request $req)
    {
        $part = $req->input('part');
        $description = $req->input('description');
        $group = $req->input('group');
        $vendor = $req->input('vendor');
        $remaining = $req->input('remaining');

        $date = date("m/d/Y");

        DB::insert("insert into stock_item (part_number, description, product_group, vendor, remaining_stock, edit_date, balance) values ('$part', '$description', '$group', '$vendor', '$remaining', '$date', '0')");
    }
}
