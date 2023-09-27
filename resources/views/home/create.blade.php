@extends('layouts.master')

@section('content')
<div class="col-lg-12 mb-4">
    <div class="card shadow mb-4">
        <div class="container-fluid p-4">
            <div class="row justify-content-md-center">
                <div class="col-md-9">
                    <form action="/post" method="post">
                        @csrf
                        <label for="">Title:</label>
                        <input type="text" class="form-control" name="title">
                        <label for="">Deskripsi</label>
                        <input type="text" class="form-control" name="title">
                        <button
                            type="submit" class="btn btn-lg btn-primary">Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->

@endsection
