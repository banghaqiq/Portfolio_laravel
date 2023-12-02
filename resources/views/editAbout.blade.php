@extends('layouts.app')

@section('title', 'halaman Profil')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" id="hdr">{{ __('Halaman Profile') }}</div>
                <div class="card-body">
                    <form class="row g-3" action="{{ route('updateprofile', $edit_profile->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-8">
                            <label for="nama-profil" class="form-label">Profile</label>
                            <input type="file" accept=".jpg,.png,.jpeg" class="form-control" id="profile" name="profile" placeholder="Masukkan foto" value="{{ $edit_profile->profile }}">
                            @error('profile')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <p for="">Preview Image</p>
                            <img src="{{ asset('images') }}/{{ $edit_profile->profile }}" width="80px" alt="">
                        </div>
                        <div class="col-md-12">
                            <label for="status" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="10" placeholder="Masukkan deskripsi">{{ $edit_profile->deskripsi }}</textarea>
                            @error('deskripsi')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="" class="form-label">URL</label>
                            <input type="text" id="url" name="url" class="form-control" placeholder="Masukkan URL" value='{{ $edit_profile->url }}'>
                            
                            @error('url')
                                {{ $message }}
                            @enderror
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
@endsection
