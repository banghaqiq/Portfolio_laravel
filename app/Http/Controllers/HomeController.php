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

    public function delete(Request $request ,MenuModel $id_delete)
    {
        $id_delete->delete();
        
        return redirect()->route('addmenu')->with('pesan', 'Data anda telah dihapus');
    }
    
    
    // endblock menu 
    

    public function about()
    {
        $profile = AboutModel::all();
        return view('about',compact('profile'));
    }
    
    public function createprofile(Request $request){
        $request->validate([
            'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'url' => 'required',
        ]);
    
        // $post = new AboutModel([
        //     'deskripsi' => $request->input('deskripsi'),
        //     'url' => $request->input('url'),
        // ]);
    
        if ($request->has('profile')) {
            $image = $request->file('profile');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
    
            $post = $name;
        } else {
            $post = null;
        }

        AboutModel::create([
            'profile' => $post,
            'deskripsi' => $request->get('deskripsi'),
            'url' => $request->get('url'),
        ]);

        // dd($cek);
        return redirect()->route('addprofile')->with('pesan', 'Data anda telah tersimpan');
    }
    
    public function editprofile(AboutModel $edit_profile)
    {
        return view('editAbout', compact('edit_profile'));
    }
    
    public function updateprofile(Request $request, $edit_profile)
    {
        // $request->validate([
        //     'profile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'description' => 'required',
        //     'deskripsi' => 'required',
        //     'url' => 'required',
        // ]);
    
        $editProfil = AboutModel::findOrFail($edit_profile);
    
        if ($request->hasFile('profile')) {
            $image = $request->file('profile');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
    
            if ($editProfil->profile) {
                $old_image = $editProfil->profile;
                $editProfil->profile = $name;
            } else {
                $editProfil->profile = $name;
            }
        }

        $editProfil->deskripsi = $request->input('deskripsi');
        $editProfil->url = $request->input('url');
        $cek = $editProfil->save();
    
        // Hapus foto lama
        if ($request->hasFile('profile') && $editProfil->image) {
            if (file_exists(public_path('images/'.$old_image))) {
                unlink(public_path('images/'.$old_image));
            }
        }
    
        // return redirect()->route('addprofile')->with('pesan','Profil berhasil diupdate');
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
