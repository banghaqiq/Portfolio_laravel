@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    @if (session('pesan'))
    <div class='alert alert-info text-center text-bold' style="font-weight: bolder">{{ session('pesan') }}
    {{-- <button type='button' class='close btn btn-danger' data-dismiss='alert' aria-label='Close'> --}}
    {{-- <span aria-hidden='true'>&times;</span> --}}
    </button>
    </div>
    @endif
    <div class="card-header" align="center" id="hdr">{{ __('Halaman Utama') }}</div>
    <div class="card-body">
     <form class="row g-3" action="{{ route('createmenu') }}" method="POST">
      <div class="col-md-12">
       @csrf
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
       <label for="nama-menu" class="form-label">Nama Menu</label>
       <input type="text" class="form-control" id="nama_menu" placeholder="Masukkan Nama Menu" name="nama_menu" >
       <div class="col-md-12">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control">
         <option value="#">-- pilih status Menu --</option>
         <option value="Aktif">Aktif</option>
         <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
       </div>
       <div class="col-md-12">
        <label for="" class="form-label">URL</label>
        <input type="text" class="form-control" placeholder="Masukkan URL" id="url" name="url">
       </div>
      </div>
      <div class="col-md-6">
       <button type="Submit" href="#" class="form-control text-bg-primary p-2 btn" id="submit">Save</button>
      </div>
      <div class="col-md-6">
       <button type="reset" class="form-control text-bg-danger p-2 btn" id="reset">Reset</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
</div>
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header" align="center" id="hdr">{{ __('Daftar Menu baru') }}</div>
    <div class="card-body">
     <table class="table table-dark table-striped" >
      <thead>
        <tr style="background-color: transparent !important;">
          <th scope="col">No</th>
          <th scope="col">Nama Menu</th>
          <th scope="col">Status</th>
          <th scope="col">URl</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($data as $d) 
        <tr>
         <th scope="row">{{ $loop->iteration }}</th>
         <td>{{ $d->nama_menu }}</td>
         <td>{{ $d->status }}</td>
         <td>{{ $d->url }}</td>
         <td>
          <div  class="d-grid gap-2 d-md-block">
            <a href="{{ route('editmenu', $d->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('deletemenu', $d->id) }}" class="btn btn-sm btn-danger">Delete</a>
          </div>
        </td>
        </tr>
       @endforeach
      </tbody>
    </table>
    </div>
   </div>
  </div>
 </div>
</div>


@endsection
