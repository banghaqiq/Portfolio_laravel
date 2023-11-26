@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Testimonial') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="foto" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="inputEmail4" placeholder="Masukkan Nama Menu">
                                <div class="col-md-12">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" cols="30" rows="10" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="name" class="form-label" >Name</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama">
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
                <div class="card-header" align="center" id="hdr">{{ __('Daftar Testimonial baru') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <label for="">Photo</label>
                                </div>
                                <div class="col">
                                    <label for="">Deskripsi</label>
                                </div>
                                <div class="col">
                                    <label for="">Name</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection