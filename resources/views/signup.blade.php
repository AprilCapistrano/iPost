@extends('layouts.master')

@section('title')
    Sign Up
@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                    <label for="full_name">Your First Name</label>
                    <input class="form-control" type="text" name="full_name" id="full_name" value="{{ Request::old('full_name') }}">
                </div>
                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                    <label for="last_name">Your Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="{{ Request::old('last_name') }}">
                </div>
                <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                    <label for="phone_number">Your Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number" value="{{ Request::old('phone_number') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection