@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">Edit Photo Gallery</div>
                <div class="card-body">
                    <form action="{{ route('photoUpdate', $photo->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">Photo Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $photo->title }}">
                            </div>
                            <div class="col-md-6">
                                <label for="cover">Photo Cover</label>
                                <input type="file" name="photo" class="form-control-file">
                                <input type="hidden" name="old_cover" value="{{ $photo->photo }}">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="description">Photo Description</label>
                                <textarea name="description" class="form-control" rows="4">
                                    {{ $photo->description }}
                                </textarea>
                            </div>
                        </div>
                    
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Update Photo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection