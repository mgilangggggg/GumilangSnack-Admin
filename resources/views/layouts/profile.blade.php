@extends('layouts.master')
@section('title', 'gumilang snack | profile')
@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Informasi Profile</h1>
    <div class="text-right">
        <a href="{{ route('dashboard') }}" type="button" class="btn btn-danger btn-lg ml-auto mt-1 mr-1 text-light"></i>X</a>
    </div> 
</div>

<form method="post" enctype="multipart/form-data" id="profile_setup_frm" action="" >
<div class="row">
    <div class="col-md-12 border-right">
        <div class="p-3 py-5">
            <div class="row" id="res"></div>
            <div class="row mt-2">

                <div class="col-md-6">
                    <label class="labels">Username</label>
                    <input type="text" name="username" disabled class="form-control" value="{{ auth()->user()->username }}" placeholder="Username">
                </div>
                <div class="col-md-6">
                    <label class="labels">Email</label>
                    <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="Email">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <label class="labels">Role</label>
                    <input type="text" name="role" disabled class="form-control" value="{{ auth()->user()->role }}"  placeholder="Role">
                </div>
            </div>
        </div>
    </div>
</div>

</form>

@endsection