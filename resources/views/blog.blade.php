@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Blog') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="foto" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="inputEmail4" placeholder="Masukkan Nama Menu">
                                <div class="col-md-12">
                                    <label for="" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan Title">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">By</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan nama">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Like</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan jumlah Like">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Comment</label>
                                        <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan Jumlah Komen">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Deskripsi</label>
                                    <textarea class="form-control" cols="30" rows="10" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Url</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan Url">
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
                <div class="card-header" align="center" id="hdr">{{ __('Daftar Blog baru') }}</div>
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
                                    <label for="">By</label>
                                </div>
                                <div class="col">
                                    <label for="">Like</label>
                                </div>
                                <div class="col">
                                    <label for="">Comment</label>
                                </div>
                                <div class="col">
                                    <label for="">Deskripsi</label>
                                </div>
                                <div class="col">
                                    <label for="">Url</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection