@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-3">
            <div class="card shadow">
                <div class="card-header">
                    <a href="{{ route('galleryCreate') }}" class="btn btn-success btn-block shadow">
                        <i class="fas fa-plus-circle"></i>
                        Create New Gallery
                    </a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach ($galleries as $gallery)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow card-item">
                              <img style="height: 160px; object-fit: cover; object-position: center;" class="card-img-top gp" src="{{ asset('public/galleries/'.$gallery->cover) }}" alt="cover" width="100%" class="cover">
                              <div class="card-body">
                                <p class="card-text">{{ $gallery->title }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <a href="{{ route('galleryShow', $gallery->id) }}" type="button" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye"></i>
                                        View
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
