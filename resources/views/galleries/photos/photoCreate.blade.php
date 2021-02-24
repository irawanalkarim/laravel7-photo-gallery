@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">Upload New Photo</div>
                <div class="card-body">
                    <form action="{{ route('photoStore') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">Photo Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="cover">Photo</label>
                                <input type="file" name="photo" class="form-control-file">
                            </div>
                        </div>
                        <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="description">Photo Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Save Photo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection