@extends('layouts.master')

@section('content')
<div class="col-lg-12 mb-4">
    <div class="card shadow mb-4">
        <div class="container-fluid p-4">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <form action="/notes" method="post">
                        @csrf
                        <label for="title">Title:</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
                        @error('title')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                        <label for="content">Content</label>
                        <textarea type="text" rows="3" class="form-control h-8" name="content" id="content"></textarea>
                        
                        
                        <button type="submit" class="btn btn-lg btn-primary mt-2">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection
