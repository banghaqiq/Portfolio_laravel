<?php

namespace App\Http\Controllers\PrimaryView;

use App\Models\MenuModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $data = MenuModel::where('status','aktif')->get();
        return view('PrimaryView.beranda',['data'=>$data]);
    }
}
