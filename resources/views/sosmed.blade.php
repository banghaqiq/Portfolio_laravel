@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Sosmed') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="nama-menu" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan URL">
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Twiter</label>
                                    <input type="text" class="form-control" placeholder="Masukkan URL">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Goggle+</label>
                                    <input type="text" class="form-control" placeholder="Masukkan URL">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Pinterest</label>
                                    <input type="text" class="form-control" placeholder="Masukkan URL">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Instagram</label>
                                    <input type="text" class="form-control" placeholder="Masukkan URL">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Rss</label>
                                    <input type="text" class="form-control" placeholder="Masukkan URL">
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
                <div class="card-header" align="center" id="hdr">{{ __('Daftar Sosmed') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <label for="">Facebook</label>
                                </div>
                                <div class="col">
                                    <label for="">Twiter</label>
                                </div>
                                <div class="col">
                                    <label for="">Goggle+</label>
                                </div>
                                <div class="col">
                                    <label for="">Pinterest</label>
                                </div>
                                <div class="col">
                                    <label for="">Instagram</label>
                                </div>
                                <div class="col">
                                    <label for="">Rss</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection