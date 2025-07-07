@extends('layouts.axion')

@section('title')
    Crud-Basic | Axion
@endsection

@section('axion-content')

<div class="max-w-7xl mx-auto md:px-4 py-12 grid grid-cols-1 md:grid-cols-2 gap-12">
    {{-- FORM CRUD --}}
    <div>
        <form id="form-crud-test"
            action="{{ route('axion.crud.update',[$data->id]) }}"
            method="POST"
            enctype="multipart/form-data"
            class="space-y-6 bg-white dark:bg-gray-800 p-6">
    
            {!! csrf_field() !!}
    
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Edit Data</h2>
    
            @flash_info('#form-crud-test')
    
            {{-- Nama --}}
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Name</label>
                <input type="text" id="name" name="name"
                    value="{{$data->name}}"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-red-500"
                    required>
            </div>
    
            {{-- Deskripsi --}}
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Description</label>
                <textarea id="description" name="description" rows="3"
                    class="w-full px-4 py-2 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-900 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-red-500"
                >{{$data->description}}</textarea>
            </div>
    
            {{-- Gambar --}}
            <div>
                <label for="image">Image</label>
                <input type="file" id="image" name="image" accept="image/*" hidden>
                <span>{!! VeltoImage('#image', $data->image) !!}</span>
            </div>
    
            {{-- Submit --}}
            <div class="pt-2">
                <button type="submit"
                    class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-200">
                    Update
                </button>
            </div>
        </form>
    </div>
    
    {{-- DATA LIST --}}
    <div class="bg-white dark:bg-gray-800 p-6 ">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Existing Records : {{$dataCount}} </h2>
        <div class="space-y-6">
            @foreach ($datas as $data)
                <div class="p-4 rounded-lg border border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900 shadow-sm hover:border-red-500 transition">
                    <div class="flex justify-between items-start gap-4">
                        <div class="flex items-center gap-4">
                            @if ($data->image)
                                <img src="{{ $data->image }}" alt="{{ $data->image }}" class="h-16 w-16 object-cover rounded-md border border-gray-300 dark:border-gray-600">
                            @else
                                <div class="h-16 w-16 flex items-center justify-center bg-gray-200 text-gray-400 text-xs rounded-md">No Image</div>
                            @endif
        
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $data->name }}</h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $data->description }}</p>
                                <p class="text-xs text-gray-400 mt-1">By: {{ $data->user->name }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col items-end gap-2 text-sm">
                            <a href="{{ route('axion.crud.view',[$data->id]) }}"
                                class="text-blue-600 hover:text-blue-800 hover:underline transition">View</a>

                            <a href="{{ route('axion.crud.edit',[$data->id]) }}"
                               class="text-blue-600 hover:text-blue-800 hover:underline transition">Edit</a>
        
                            <form action="{{ route('axion.crud.delete',[$data->id]) }}" method="POST" onsubmit="return veltoAlert('Are you sure to delete this item?')">
                                {!! csrf_field() !!}
                                <button type="submit" class="text-red-600 hover:text-red-800 hover:underline transition">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {!! paginate($datas) !!}
    </div>
</div>
@endsection