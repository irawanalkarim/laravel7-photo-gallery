@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    {{ $photo->title }}
                    <div class="float-right">
                        <a href="{{ route('photoEdit', $photo->id) }}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('photoDelete', $photo->id) }}" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            {{ $photo->description }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('public/galleries/photos/' . $photo->photo) }}" alt="main" width="100%" class="photos">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection