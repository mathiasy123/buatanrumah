<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget('food_not_found');

        $request->validate([
            'food_keyword' => 'nullable'
        ]);

        $foods = Food::where('user_id', $user_id)
                    ->when($request->food_keyword, function($query) use($request){
                        $query->where('food_name', 'like', '%' . strip_tags($request->food_keyword) . '%')
                        ->orWhere('rating', $request->food_keyword)
                        ->orWhere('price', $request->food_keyword);
                    })
                    ->paginate(6);
        
        $foods->appends($request->only('food_keyword'));

        if(count($foods)) {
            return view('chef.profile', compact('foods'));
        }else {
            session()->flash('food_not_found', 'Maaf, makanan yang Anda dicari tidak ada');
            
            return view('chef.profile', compact('foods'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
