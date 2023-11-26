@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Pricing') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan icon">
                                <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan Title">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Type</label>
                                    <input type="text" class="form-control" placeholder="Masukkan type">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Harga</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Harga">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Url</label>
                                    <input type="text" class="form-control" placeholder="Masukkan Url">
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
                <div class="card-header" align="center" id="hdr">{{ __('Daftar pricing baru') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <label for="">Icon</label>
                                </div>
                                <div class="col">
                                    <label for="">Title</label>
                                </div>
                                <div class="col">
                                    <label for="">Type</label>
                                </div>
                                <div class="col">
                                    <label for="">Harga</label>
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