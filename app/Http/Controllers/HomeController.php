<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use App\Models\AboutModel;
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
        $profile = AboutModel::all();
        return view('about',compact('profile'));
    }
    
    public function createprofile(Request $request){
        
        AboutModel::create($request->all());
        
        return redirect()->route('addprofile')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function editprofile(AboutModel $edit_profile)
    {
        return view('editAbout', compact('edit_profile'));
    }
    
    public function updateprofile(Request $request, AboutModel $edit_profile)
    {
        $edit_profile->update($request->all());

        // dd($cek);

        return redirect()->route('addprofile')->with('pesan', 'Data anda telah diubah');
    }   

    public function deleteprofile(Request $request ,$delete_profile)
    {
    // Mendapatkan data berdasarkan id
    $about_delete = AboutModel::find($request->delete_profile);

    // Jika variabel tidak kosong
    if ($about_delete !== null) {
        // Memanggil fungsi delete
        $about_delete->delete();
        return redirect()->route('addprofile')->with('success', 'Data anda berhasil dihapus');
    }
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
