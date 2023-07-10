{{-- Side Bar --}}
<div class="flex flex-col items-center">
    {{-- Home Icon --}}
    <a href="/">
        <div class="bg-purple-800 p-2 rounded-lg inline-block">
            <x-gmdi-home class="w-6 h-6 text-white" />
        </div>
    </a>               
    <span class="border-b-[1px] border-gray-200 w-full p-2 mt-2"></span>
    {{-- Dashboard--}}
     <li class="{{ (Route::currentRouteName() == 'home') ? 'bg-orange-600 p-2 mt-2 rounded-lg inline-block' : 'bg-gray-100 p-2 mt-2 rounded-lg inline-block'}} list-none">
         <a href="/">
             <x-gmdi-dashboard class="w-6 h-6 {{(Route::currentRouteName() == 'home') ? 'text-white' : 'text-black'}}" />
         </a>
     </li>
    {{-- Customers --}}
    <li class="{{ (Route::currentRouteName() == 'customers') ? 'bg-orange-600 p-2 mt-2 rounded-lg inline-block' : 'bg-gray-100 p-2 mt-2 rounded-lg inline-block'}} list-none">
        <a href={{route('customers')}}>
            <x-gmdi-person class="w-6 h-6 {{(Route::currentRouteName() == 'customers') ? 'text-white' : 'text-black'}}" />
        </a>
    </li>
     {{-- Shopping --}}
     <li class="{{ (Route::currentRouteName() == 'shopping') ? 'bg-orange-600 p-2 mt-2 rounded-lg inline-block' : 'bg-gray-100 p-2 mt-2 rounded-lg inline-block'}} list-none">
        <a href="{{route('shopping')}}">
            <x-gmdi-shopping-bag-o class="w-6 h-6 {{(Route::currentRouteName() == 'shopping') ? 'text-white' : 'text-black'}}" />
        </a>
    </li>
    {{-- Settings --}}
    <li class="{{ (Route::currentRouteName() == 'settings') ? 'bg-orange-600 p-2 mt-2 rounded-lg inline-block' : 'bg-gray-100 p-2 mt-2 rounded-lg inline-block'}} list-none">
        <a href="{{route('settings')}}">
            <x-gmdi-settings class="w-6 h-6 {{(Route::currentRouteName() == 'settings') ? 'text-white' : 'text-black'}}" />
        </a>
    </li>
</div>