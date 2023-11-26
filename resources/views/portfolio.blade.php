@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Portfolio') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="foto" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="inputEmail4" placeholder="Masukkan foto">
                                <div class="col-md-12">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="Masukkan title">
                                </div>
                                <div class="col-md-12">
                                    <label for="nama-kategori" class="form-label" >Category</label>
                                    <input type="text" class="form-control" placeholder="Masukkan kategori">
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
                <div class="card-header" align="center" id="hdr">{{ __('Daftar Portfolio baru') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <label for="">Photo</label>
                                </div>
                                <div class="col">
                                    <label for="">Title</label>
                                </div>
                                <div class="col">
                                    <label for="">kategori</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection