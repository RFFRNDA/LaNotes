@extends('layouts.master')

@section('content')
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="container-fluid p-4">
                <div class="row justify-content-md-center">
                    <div class="col-md-9">
                        <form method="POST" action="/notes/{{ $note->id }}">
                            @method('PUT')
                            @csrf
                            <label for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ $note->title }}">

                            <label class="mt-2" for="content">Content :</label>
                            <textarea type="text" rows="3" class="form-control h-8" name="content" id="content">{{ $note->content }}</textarea>
                            <button type="submit" class="btn btn-lg btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
