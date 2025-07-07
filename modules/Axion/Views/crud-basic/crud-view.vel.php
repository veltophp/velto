@extends('layouts.axion')

@section('title')
    Crud-Basic | Axion
@endsection

@section('axion-content')
<div class="bg-white">
    <div class="max-w-3xl mx-auto px-6 md:px-9 py-12">
        <div class="p-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 shadow-sm hover:border-red-500 transition">
            <div class="flex items-center gap-4">
                <img src="{{ $data->image }}" alt="{{ $data->image }}" class="h-32 w-32 object-cover rounded-md border border-gray-300 dark:border-gray-600">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $data->name }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $data->description }}</p>
                    <p class="text-xs text-gray-400 mt-1">By: {{ $data->user->name }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
