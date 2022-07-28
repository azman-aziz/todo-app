<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Notes;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Builder;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::whereHas('notes',function (Builder $query) {
        //     $query->where('star', '=', NULL);
        // } )->get();
        $category = Category::with('notes')->get();
        $menu = Menu::with('notes')->get();
        $menu_bawah = Notes::all();
        $star = Notes::where('star',  '=', 1)->paginate(5);
        $test = Notes::with('category')->get();
        // $test =  \App\Journal::first();

        // dd($category);
       
        return view('backend.dashboard.menu', compact('category', 'menu','star', 'menu_bawah'));
        // return view('backend.dashbord.menu', compact('data', 'dati'));
    }

    public function star(Request $request, $id){
        
        
        try{
            $notes = Notes::where('id', '=', $id)->firstOrFail();
            
            // dd($notes);
        // dd($penerima);

        $penerima = $notes->update([
            'star' => 1,
          ]);

          Alert::success('Berhasil', 'Berhasil di  Beri Bintang');
            return redirect()->back();
                //code...
            } catch (\Exception $e) {
                Alert::error('Gagal', $e->getMessage());
            return redirect()->back();
            }
    }

    public function un_star(Request $request, $id){
        // dd($id);
        
        try{
            $notes = Notes::where('id', '=', $id)->firstOrFail();
            
            // dd($notes);
        // dd($penerima);

        $penerima = $notes->update([
            'star' => null,
          ]);

          Alert::success('Berhasil', 'Berhasil Melepas Bintang');
            return redirect()->back();
                //code...
            } catch (\Exception $e) {
                Alert::error('Gagal', $e->getMessage());
            return redirect()->back();
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
        try {
            $rules = [
                "judul" => 'string',
                "kategori" => 'string',
                "menu" => 'string',
                "waktu" => 'string',
                "prioritas" => 'string',
                
            ];
    
            $validatedata = $request->validate($rules);
    
            //  dd($validatedata);
    
             $user = Notes::create([
                'title' => $validatedata['judul'],
                'content' => $request['editordata'],
                'category_id' => $validatedata['kategori'],
                'menus_id' => $validatedata['menu'],
                'set_deadline' => $validatedata['waktu'],
                'priority' => $validatedata['prioritas'],
             ]);
    
            Alert::success('Berhasil', 'Catatan Berhasil di Tambahkan');
            return redirect()->back();
                //code...
            } catch (\Exception $e) {
                Alert::error('Gagal', $e->getMessage());
            return redirect()->back();
            }
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function show(Notes $notes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function edit(Notes $notes)
    {
        //
    }

    public function custom(){
        $url = substr(url()->current(),22 );

        $menu = Menu::with('notes')->where('name_menu', $url)->paginate(10);

        return view('backend.dashboard.custom_menu', compact('menu', 'url'));
        // dd($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        // dd($request->all());

        try{
            $rules = [
                'judul' => 'string',
                'kategori' => 'string',
                'menu' => 'string',
                'waktu' => 'string',
                'prioritas' => 'string',
                'content' => 'string',
            ];
    
            $validatedata = $request->validate($rules);
    
            //  dd($validatedata);
    
             $user = Notes::where('id', $id)->update([
                'title' => $validatedata['judul'],
                'content' => $validatedata['content'],
                'category_id' => $validatedata['kategori'],
                'menus_id' => $validatedata['menu'],
                'set_deadline' => $validatedata['waktu'],
                'priority' => $validatedata['prioritas'],
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
     * @param  \App\Models\Notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function destroy($notes)
    {
        // dd($notes);
        try{
            // dd($notes);
        Notes::destroy($notes);
        Alert::success('Berhasil', 'Catata Berhasil di Hapus');
        return redirect()->back();
    } catch (\Exception $e) {
        Alert::error('Gagal', $e->getMessage());
        return redirect()->back();
        }
    }
}
