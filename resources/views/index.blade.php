@extends('master')
@section('title', 'Page title')

@section('sidebar')
    <p>This is prepended to the master sidebar</p>
    @parent
    <p>This is appended to the master sidebar</p>
@endsection

@section('content')
    <p>This is my body content. </p>

    @datetime(time())

    @upper(strtoupper('fatima'))
    @alert(['status' => 'warning'])

        @slot('title')
            Forbidden!
        @endslot

        You are not allowed
    @endalert

{{--    @include('alert', ['slot' => '<strong>Whoops!</strong> Something went wrong!'])--}}





@endsection