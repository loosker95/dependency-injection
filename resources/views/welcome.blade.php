@extends('layouts.app', ['pageTitle' => 'Home'])

@section('content')
    <h1>Welcome</h1>

    <h1>{{ Session::get('name') }}</h1>

    <h3>{{ $data['name'] }}</h3>
    <p>{{ $data['country'] }}</p>
    <p>{{ $data['city'] }}</p>
    <p>{{ $data['profession'] }}</p>
@endsection
