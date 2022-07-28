<?php

namespace App\Http\Controllers;

use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
        $rules = [
            'nama_kategori' => 'string',
            'warna' => 'string',
        ];

        $validatedata = $request->validate($rules);

        //  dd($validatedata);

         $user = Category::create([
            'category_name' => $validatedata['nama_kategori'],
            'color' => $validatedata['warna'],
         ]);

        Alert::success('Berhasil', 'Data Berhasil di Tambahkan');
        return redirect()->back();
            //code...
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
        return redirect()->back();
        }
          
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request,  $id)
    {
        try{
        $rules = [
            'nama_kategori' => 'string',
            'warna' => 'string',
        ];

        $validatedata = $request->validate($rules);

        //  dd($validatedata);

         $user = Category::where('id', $id)->update([
            'category_name' => $validatedata['nama_kategori'],
            'color' => $validatedata['warna'],
            // 'password' => Crypt::encryptString($validatedata['password']),
        ]);

        Alert::success('Berhasil', 'Data Berhasil di Update');
        return redirect()->back();

    } catch (\Exception $e) {
        Alert::error('Gagal', $e->getMessage());
        return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $category)
    {
        try{
            // dd($notes);
        Category::destroy($category);
        Alert::success('Berhasil', 'Menu Berhasil di Hapus');
        return redirect()->back();
    } catch (\Exception $e) {
        Alert::error('Gagal', $e->getMessage());
        return redirect()->back();
        }
    }
}
