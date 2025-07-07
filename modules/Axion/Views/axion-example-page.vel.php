@extends('layouts.axion')

@section('title')
    Example Page | Axion
@endsection

@section('axion-content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-9 py-12">
        <div class="mb-10">
            <h1 class="text-2xl">Example Page</h1>
            <p class="text-sm text-gray-500">{{$message}}</p>
        </div>
        <div class="">
            <h1 class="text-2xl">Example Crud</h1>
            <div class="text-red-600">
                <li><a href="{{route('axion.crud')}}" class="hover:underline">Crud-Basic</a></li>
            </div>
        </div>
    </div>
</div>
@endsection