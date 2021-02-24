@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="gallery-profile m-auto pt-3">
                  <h3>{{ $gallery->title }}</h3>
                </div>
                <div class="card-body">
                    <img style="height: 160px; object-fit: cover; object-position: center;" src="{{ asset('public/galleries/'.$gallery->cover) }}" alt="cover" width="100%">
                    <br><br>
                    
                    <a href="{{ route('photoCreate', $gallery->id) }}" class="btn btn-primary shadow">
                      <i class="fas fa-upload"></i>
                    </a>
                    <a href="{{ route('galleryEdit', $gallery->id) }}" class="btn btn-success shadow">
                      <i class="fas fa-edit"></i>
                    </a>
                    <a href="{{ route('galleryDelete', $gallery->id) }}" class="btn btn-danger shadow">
                      <i class="fas fa-trash"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">All Photos</div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($photos as $photo)
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow card-item">
                              <img style="height: 160px; object-fit: cover; object-position: center;" class="card-img-top photos" src="{{ asset('public/galleries/photos/' .$photo->photo )}}" alt="cover" width="100%" class="cover">
                              <div class="card-body">
                                <p class="card-text">{{ $photo->title }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                  <div class="btn-group">
                                    <a href="{{ route('photoShow', $photo->id) }}" type="button" class="btn btn-sm btn-outline-primary">
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