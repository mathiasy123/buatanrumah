<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\VendorContent;

use App\User;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor_content = VendorContent::first();

        $chefs = User::all()->take(3);

        return view('vendor.index', compact('vendor_content', 'chefs'));
    }

}
