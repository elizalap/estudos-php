@extends('layouts.app')

@section('content')
@csrf
    <login-component csrf_token="{{ @csrf_token() }}"></login-component>
@endsection
