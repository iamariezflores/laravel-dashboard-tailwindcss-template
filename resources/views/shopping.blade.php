@extends('layouts.app')

@section('contents')
<div class="bg-gray-100 min-h-screen">
    <div class="flex justify-between p-4">
        <h2>Orders</h2>
        <h2>Welcome Back, Ariez</h2>
    </div>
    <div class="p-4">
        <div class="w-full m-auto p-4 border rounded-lg bg-white overflow-y-auto">
            <div class="my-3 p-2 grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 items-center justify-between cursor-pointer">
                <span>Order</span>
                <span class="sm:text-left text-right">Status</span>
                <span class="hidden md:grid">Last Order</span>
                <span class="hidden sm:grid">Method</span>
            </div>
            <ul>
                @foreach ($allorders as $o)
                    <li class="bg-gray-50 hover:bg-gray-100 rounded-lg my-3 p-2 grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 items-center justify-between cursor-pointer">
                        <div class="flex">
                            <div class="bg-purple-100 p-3 rounded-lg">
                                <x-gmdi-shopping-bag-o class="w-6 h-6 text-purple-800"/>
                            </div>
                            <div class="pl-4">
                                <p class="text-gray-800 font-bold">{{$o->total}}</p>
                                <p class="text-gray-800 text-sm">{{$o->name}}</p>
                            </div>
                        </div>
                        <p class="text-gray-600 sm:text-left text-right">
                            @if ($o->status == 'Processing')
                                <span class="bg-green-200 p-2 rounded-lg">{{$o->status}}</span>
                            @endif
                            
                            @if ($o->status == 'Completed')
                                <span class="bg-blue-200 p-2 rounded-lg">{{$o->status}}</span>
                            @endif

                            @if ($o->status == 'On-Hold')
                                <span class="bg-yellow-200 p-2 rounded-lg">{{$o->status}}</span>
                            @endif
                        </p>
                        <p class="hidden md:flex">{{\Carbon\Carbon::parse($o->created_at)->format('d/m/Y')}}</p>
                        <div class="sm:flex hidden justify-between items-center">
                            <p>{{$o->method}}</p>
                            <x-gmdi-vertical-split class="w-6 h-6 text-red-500"/>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection