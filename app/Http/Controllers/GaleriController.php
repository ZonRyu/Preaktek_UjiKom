<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Session;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('add-photo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //dd($request);
        $request->validate([
            'photo' => 'required'
        ]);

        $input = $request->all();
        $destination_path = 'public/image';
        $image = $request->file('photo');
        $image_name = $image->getClientOriginalName();
        $path = $image->storeAs($destination_path, $image_name);

        $input['photo'] = $image_name;

        Galeri::create($input);
        Session::flash('success', 'berhasil upload foto');

        return redirect('add-image');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
