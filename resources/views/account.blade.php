@extends('layouts.master')

@section('title')
    Account
@endsection

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Account</h3></header>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="full_name">Name</label>
                    <input type="text" name="full_name" class="form-control" value="{{ $user->full_name }} {{ $user->last_name }}" id="full_name">
                </div>
				<div class="form-group">
                    <label for="full_name">E-Mail</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number }}" id="last_name">
                </div>
                <div class="form-group">
                    <label for="image">Image (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    @if (Storage::disk('local')->has($user->full_name . '-' . $user->id . '.jpg'))
        <section class="row new-post">
            <div class="col-md-6 col-md-offset-3">
                <img src="{{ route('account.image', ['filename' => $user->full_name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
            </div>
        </section>
    @endif
@endsection