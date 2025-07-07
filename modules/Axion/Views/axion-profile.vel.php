@extends('layouts.axion')

@section('title')
    Your Account | Axion
@endsection

@section('axion-content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-9 py-12">
        {{-- Header --}}
        <div class="mb-5">
            <h1 class="text-2xl">User Information</h1>
            <p class="text-sm text-gray-500">Manage your account settings.</p>
        </div>

        {{-- Logout --}}
        <div class="mb-12 border-b pb-8 max-w-lg">
            <form action="{{ route('logout') }}" method="POST" class="space-y-4">
                {!! csrf_field() !!}
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-white border border-red-500 text-red-600 rounded-md hover:bg-red-50 hover:border-red-600 transition">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </button>
            </form>
        </div>

        {{-- Update Name --}}
        <div class="mb-12 border-b pb-8 max-w-lg">
            <h2 class="text-lg text-gray-800">Update Name</h2>
            <p class="mt-1 text-sm text-gray-600">Change your name or review your email address.</p>
            <div class="mt-4">@flash_info('#form-update-name')</div>

            <form id="form-update-name" 
                action="{{ route('axion.update.name') }}" 
                onsubmit="return veltoAlert('Are you sure change your name account?')"
                method="POST" class="mt-6 space-y-6">
                
                {!! csrf_field() !!}

                {{-- Name --}}
                <div>
                    <label for="name" class="block text-sm text-gray-700">Your Name</label>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-red-500 focus:border-red-500 font-thin"
                        placeholder="Enter your name">
                </div>

                {{-- Email (non-editable) --}}
                <div>
                    <label class="block text-sm text-gray-700">Email Address</label>
                    <input type="email" value="{{ Auth::user()->email }}" disabled
                        class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm px-3 py-2 font-thin text-gray-500 cursor-not-allowed">
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Update Name
                    </button>
                </div>
            </form>
        </div>

        {{-- Change Password --}}
        <div class="mb-12 border-b pb-8 max-w-lg">
            <h2 class="text-lg text-gray-800">Change Password</h2>
            <p class="mt-1 text-sm text-gray-600">Update your account password here.</p>
            <div class="mt-4">@flash_info('#form-change-password')</div>


            <form id="form-change-password" 
                action="{{ route('axion.change.password') }}" 
                method="POST" 
                onsubmit="return veltoAlert('Are you sure to change you password?')"
                class="mt-6 space-y-6">


                {!! csrf_field() !!}

                <div>
                    <label for="current_password" class="block text-sm text-gray-700">Current Password</label>
                    <input type="password" name="current_password" id="current_password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-red-500 focus:border-red-500 font-thin"
                        placeholder="Enter current password">
                </div>

                <div>
                    <label for="new_password" class="block text-sm text-gray-700">New Password</label>
                    <input type="password" name="new_password" id="new_password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-red-500 focus:border-red-500 font-thin"
                        placeholder="Enter new password">
                </div>

                <div>
                    <label for="new_password_confirmation" class="block text-sm text-gray-700">Confirm New Password</label>
                    <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-red-500 focus:border-red-500 font-thin"
                        placeholder="Confirm new password">
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Update Password
                    </button>
                </div>
            </form>
        </div>

        {{-- Delete Account --}}
        <div class="mb-12 border-b pb-8 max-w-lg">
            <h2 class="text-lg text-red-500">Delete Account</h2>
            <p class="mt-1 text-sm text-gray-600">Once your account is deleted, all of its resources and data will be permanently deleted.</p>
            <div class="mt-4"> @flash_info('#form-delete-account') </div>

            <form id="form-delete-account" 
                action="{{ route('delete.account') }}" 
                method="POST" 
                onsubmit="return veltoAlert('Are you sure to delete this Account?')" 
                class="mt-6 space-y-6">

                {!! csrf_field() !!}

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:ring-red-500 focus:border-red-500 font-thin"
                        placeholder="Enter your password">
                </div>

                <div class="mt-4">
                    <button type="submit" 
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Delete Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
