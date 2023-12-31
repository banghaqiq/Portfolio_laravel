@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-4">
   <div class="card">
    <div class="card-header" align="center" id="hdr">{{ __('Halaman Edit') }}</div>
    <div class="card-body">
     <form class="row g-3" action="{{ route('updatemenu', $id_edit->id) }}" method="POST">
      <div class="col-md-12">
       @csrf
							@method('PUT')
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <label for="nama-menu" class="form-label">Nama Menu</label>
       <input type="text" class="form-control" id="nama_menu" value='{{ $id_edit->nama_menu }}'  placeholder="Masukkan Nama Menu" name="nama_menu" >
       <div class="col-md-12">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control">
         <option value="#">-- pilih status Menu --</option>
         @foreach ($status as $s)
         <option value="{{ $s }}" {{ $s == $id_edit->status ? 'selected' : '' }}>{{ $s }}</option>
         @endforeach
        </select>
       </div>
       <div class="col-md-12">
        <label for="" class="form-label">URL</label>
        <input type="text" class="form-control" placeholder="Masukkan URL" id="url" name="url" value='{{ $id_edit->url }}'>
       </div>
      </div>
      <div class="col-md-12 " >
       <button type="Submit" href="#" class="form-control text-bg-primary p-2 btn " id="submit" >Save</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
</div>

@endsection
