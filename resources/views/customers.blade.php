@extends('layouts.app')

@section('contents')
<div class="bg-gray-100 min-h-screen">
    <div class="flex justify-between p-4">
        <h2>Customers</h2>
        <h2>Welcome Back, Ariez</h2>
    </div>
    <div class="p-4">
        <div class="w-full m-auto p-4 border rounded-lg bg-white overflow-y-auto">
            <div class="my-3 p-2 grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 items-center justify-between cursor-pointer">
                <span>Name</span>
                <span class="sm:text-left text-right">Email</span>
                <span class="hidden md:grid">Last Order</span>
                <span class="hidden sm:grid">Method</span>
            </div>
            <ul>
                @foreach ($allorders as $o)
                    <li class="bg-gray-50 hover:bg-gray-100 rounded-lg my-3 p-2 grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 items-center justify-between cursor-pointer">
                        <div class="flex items-center">
                            <div class="bg-purple-100 p-3 rounded-lg">
                                <x-gmdi-person class="text-purple-800 w-6 h-6"/>
                            </div>
                            <p class="pl-4 text-sm">{{$o->name}}</p>
                        </div>
                        <p class="text-gray-600 text-sm sm:text-left text-right">{{$o->email}}</p>
                        <p class="hidden md:flex text-sm">{{\Carbon\Carbon::parse($o->created_at)->format('d/m/Y')}}</p>
                        <div class="sm:flex hidden justify-between items-center">
                            <p class="text-sm">{{$o->method}}</p>
                            <x-gmdi-vertical-split class="w-6 h-6 text-red-500"/>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection