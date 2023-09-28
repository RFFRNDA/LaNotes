@extends('layouts.master')

@section('content')
<div class="col-lg-12 mb-4">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{$note ["title"]}}</h6>
            <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink" style="">
                    <a class="dropdown-item" href="/edit">Edit</a>
                    <a class="dropdown-item" href="#">Delete</a>
                </div>
            </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid d-flex justify-content-end">
                <div class="">Created : {{$note["created_at"]}}</div>
            </div>
            <div class="container">
                <p>{{$note["content"]}}<a target="_blank" rel="nofollow" href="#">
            </div>
        </div>
    </div>
</div>
</div>
<!-- End of Main Content -->

@endsection
