@extends('layouts.master')

@section('content')
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="container-fluid p-4">
                <div class="row justify-content-md-center">
                    <div class="col-md-9">
                        <form method="POST" action="/edit/{{ $note->id }}">
                            @method('PUT')
                            @csrf
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ $note->title }}">

                            <label for="content">Content:</label>
                            <input type="text" class="form-control" name="content" id="content"
                                value="{{ $note->content }}">

                            <button type="submit" class="btn btn-lg btn-primary m-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
