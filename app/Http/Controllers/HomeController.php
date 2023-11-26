<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    //   block menu
    public function index()
    {
        $data = MenuModel::all();
        return view('home',compact('data'));
    }

    public function create(Request $request)
    {
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah ditambah');
    }
    public function edit(MenuModel $id_edit)
    {
        $status = ['Aktif', 'Tidak Aktif'];
        return view('editMenu', compact(['id_edit', 'status']));
    }


    public function update(Request $request,MenuModel $id_edit)
    {
        $id_edit->update($request->all());

        // dd($cek);

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah diubah');
    }   

    public function delete(Request $request ,$id_delete)
    {
    // Mendapatkan data berdasarkan id
    $menu_delete = MenuModel::find($request->id_delete);

    // Jika variabel tidak kosong
    if ($menu_delete !== null) {
        // Memanggil fungsi delete
        $menu_delete->delete();
        return redirect()->route('addmenu')->with('success', 'Data anda berhasil dihapus');
    }
    }


    // endblock menu 


    public function about()
    {
        return view('about');
    }

    public function createprofile(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }

    public function service()
    {
        return view('service');
    }

    public function createservice(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function portfolio()
    {
        return view('portfolio');
    }

    public function createportfolio(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function pricing()
    {
        return view('pricing');
    }
    
    public function createpricing(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function testimonial()
    {
        return view('testimonial');
    }

    public function createtestimonial(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function blog()
    {
        return view('blog');
    }

    public function createblog(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function sosmed()
    {
        return view('sosmed');
    }

    public function createsosmed(Request $request){
        MenuModel::create($request->all());

        return redirect()->route('addmenu')->with('pesan', 'Data anda telah tersimpan');
    }
    
}
