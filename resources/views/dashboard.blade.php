@extends('layouts.app')

@section('contents')
{{-- Header --}}
<div class="flex justify-between px-4 pt-4">
    <h2>Dashboard</h2>
    <h2>Welcome Back, Ariez</h2>
</div>
{{-- Top Cards --}}
<div class="grid lg:grid-cols-5 gap-4 p-4">
    <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full border p-4 rounded-lg">
        <div class="flex flex-col w-full pb-4">
            <p class="text-2xl font-bold">$7.846</p>
            <p class="text-gray-600">Daily Revenue</p>
        </div>
        <p class="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            <span class="text-green-700 text-lg">+18%</span>
        </p>
    </div>
    <div class="lg:col-span-2 col-span-1 bg-white flex justify-between w-full border p-4 rounded-lg">
        <div class="flex flex-col w-full pb-4">
            <p class="text-2xl font-bold">$7.846</p>
            <p class="text-gray-600">Daily Revenue</p>
        </div>
        <p class="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            <span class="text-green-700 text-lg">+18%</span>
        </p>
    </div>
    <div class="bg-white flex justify-between w-full border p-4 rounded-lg">
        <div class="flex flex-col w-full pb-4">
            <p class="text-2xl font-bold">$7.846</p>
            <p class="text-gray-600">Daily Revenue</p>
        </div>
        <p class="bg-green-200 flex justify-center items-center p-2 rounded-lg">
            <span class="text-green-700 text-lg">+18%</span>
        </p>
    </div>
</div>
{{-- Charts --}}
<div class="p-4 grid md:grid-cols-3 grid-cols-1 gap-4">
    {{-- Implement Charts here --}}
    <div class="w-full md:col-span-2 relative lg:h-[70vh] h-[50vh] m-auto p-4 border rounded-lg bg-white">
        <canvas id="theChart" class="w-full"></canvas>
    </div>
    
    {{-- Recent Orders --}}
    <div class="w-full col-span-1 relative lg:h-[70vh] h-[50vh] m-auto p-4 border rounded-lg bg-white overflow-y-auto">
        <h1>Recent Orders</h1>
        <ul>
            @foreach ($allorders as $o)
                <li class="bg-gray-50 hover:bg-gray-100 rounded-lg my-3 flex items-center cursor-pointer">
                    <div class="bg-purple-100 rounded-lg p-3">
                        <x-gmdi-shopping-bag class="w-6 h-6 text-purple-800" />
                    </div>
                    <div class="pl-4">
                        <p class="text=gray-800 font-bold">{{$o->total}}</p>
                        <p class="text-gray-400 text-sm">{{$o->name}}</p>
                    </div>
                    <p class="lg:flex md:hidden absolute right-6 text-sm">{{\Carbon\Carbon::parse($o->created_at)->format('d/m/Y')}}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>   
@endsection

@section('body_scripts')
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>

<script>
    var labels = {{Js::from($labels)}};
    var users = {{Js::from($data)}}

    const data = {
        labels: labels,
        datasets: [{
            label: 'Users data',
            backgroundColor: 'rgb(255,99,132)',
            borderColor: 'rgb(255,99,132)',
            data: users,
        }]
    };

    const config = {
        type: 'bar',
        data: data,
        options: {
            plugins: {
                legend: {
                position: 'top',
                },
                title: {
                    display: true,
                    text: 'Daily Users Acquisition'
                }
            },
            maintainAspectRatio: false,
            responsive: true
        }
    };

    const theChart = new Chart(
        document.getElementById('theChart'),
        config,
    );

</script>
@endsection