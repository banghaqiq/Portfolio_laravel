@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Service') }}</div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="nama-icon" class="form-label">Icon</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="--">
                                <div class="col-md-12">
                                    <label for="title" class="form-label">Title icon</label>
                                    <input type="text" class="form-control" placeholder="--">
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label" >Deskripsi</label>
                                	<textarea type="text" id="" cols="30" rows="10" class="form-control" placeholder="Masukkan deskripsi"></textarea>
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
                <div class="card-header" align="center" id="hdr">{{ __('Daftar Service baru') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <label for="">Icon</label>
                                </div>
                                <div class="col">
                                    <label for="">Title icon</label>
                                </div>
                                <div class="col">
                                    <label for="">Deskripsi</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection