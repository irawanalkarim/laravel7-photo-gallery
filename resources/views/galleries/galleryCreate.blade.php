@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">Add New Photo</div>
                <div class="card-body">
                    <form action="{{ route('galleryStore') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="title">Gallery Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="cover">Gallery Cover</label>
                                <input type="file" name="cover" class="form-control-file">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="description">Gallery Description</label>
                                <textarea name="description" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Create Gallery</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection