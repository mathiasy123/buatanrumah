<?php

namespace App\Http\Controllers;

use App\VendorContent;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = VendorContent::first();

        return view('vendor.index', compact('content'));
    }

}
