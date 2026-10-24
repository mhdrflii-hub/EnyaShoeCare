<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | USER
    |--------------------------------------------------------------------------
    */


    public function index()
    {
        $services = Service::all();

        return view('services.index', [
            'services' => $services,
            'page' => 'services',
            'pageTitle' => 'Layanan'
        ]);
    }



    public function show(Service $service)
    {
        return view('services.show', [
            'service' => $service
        ]);
    }



    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */


    public function adminIndex()
    {
        $services = Service::all();

        return view('admin.services.index', [
            'services' => $services
        ]);
    }



    public function create()
    {
        return view('admin.services.create');
    }



    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'category' => 'required',
            'status' => 'required',
            'image' => 'nullable'
        ]);


        Service::create([

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'duration' => $request->duration,

            'category' => $request->category,

            'status' => $request->status,

            'image' => $request->image

        ]);


        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Layanan berhasil ditambahkan');
    }




    public function edit(Service $service)
    {
        return view('admin.services.edit', [
            'service' => $service
        ]);
    }





    public function update(Request $request, Service $service)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);


        $service->update([

            'name' => $request->name,

            'description' => $request->description,

            'price' => $request->price,

            'duration' => $request->duration,

            'category' => $request->category,

            'status' => $request->status,

            // gambar tetap pakai yang lama
            'image' => $service->image,

        ]);


        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Layanan berhasil diperbarui');
    }





    public function destroy(Service $service)
    {

        $service->delete();


        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Layanan berhasil dihapus');
    }
}
