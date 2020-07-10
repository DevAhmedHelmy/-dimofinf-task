@extends('layouts.app')

@section('content')

<div id="page-header" class="justify-between">
    <div id="title">
        <h1 class="mb-4 text-gray-800 h3">{{ $name ?? 'Laravel' }}</h1>

    </div>

</div>

<div class="container-fluid">
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @elseif(session('warning'))
        <div class="alert alert-warning" role="alert">
            {{ session('warning') }}
        </div>
    @endif
    @yield('page-content')
</div>

@endsection
