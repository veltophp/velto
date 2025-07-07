@extends('layouts.axion')

@section('title')
    Dashboard | Axion
@endsection

@section('axion-content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-9 py-12">
        {{-- Header --}}
        <div class="mb-10">
            <h1 class="text-2xl">Dashboard</h1>
            <p class="text-sm text-gray-500">{{$message}}</p>
        </div>
    </div>
</div>
@endsection