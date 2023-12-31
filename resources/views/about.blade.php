@extends('layouts.app')

@section('title', 'halaman Profil')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" align="center" id="hdr">{{ __('Halaman Profile') }}</div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('createprofile') }}" method="POST" enctype="multipart/form-data">
                            <div class="col-md-12">
                                @csrf
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label for="nama-profil" class="form-label">Profile</label>
                                <input type="file" accept=".jpg,.png,.jpeg" class="form-control" id="profile" name="profile"
                                    placeholder="Masukkan foto">
                                @error('profile')
                                    {{ $message }}
                                @enderror
                                <div class="col-md-12">
                                    <label for="status" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" cols="30" rows="10" placeholder="Masukkan deskripsi"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">URL</label>
                                    <input type="text" id="url" name="url" class="form-control" placeholder="Masukkan URL">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="Submit" href="#" class="form-control text-bg-primary p-2 btn"
                                    id="submit">Save</button>
                            </div>
                            <div class="col-md-6">
                                <button type="reset" class="form-control text-bg-danger p-2 btn"
                                    id="reset">Reset</button>
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
                    <div class="card-header" align="center" id="hdr">{{ __('Daftar Profile baru') }}</div>
                    <div class="card-body">
                        <div class="container text-center">
                            <table class="table table-dark table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Profile</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">URL</th>
                                    <td scope="col">Action</td>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($profile as $d) 
                                    <tr>
                                     <th scope="row">{{ $loop->iteration }}</th>
                                     <td>
                                        @if ($d->profile == NULL)
                                        <img src="{{ asset('images/img.webp') }}" width="80px">
                                        @else
                                        <img src="{{ asset('images') }}/{{ $d->profile }}" width="80px">
                                        @endif
                                     </td>
                                     <td>{{ $d->deskripsi }}</td>
                                     <td>{{ $d->url }}</td>
                                     <td>
                                      <div class="d-grid gap-2 d-md-block">
                                        <a href="{{ route('editprofile', $d->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="{{ route('deleteprofile', $d->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
    </div>



@endsection
