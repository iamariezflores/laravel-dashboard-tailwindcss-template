@extends('layouts.app')

@section('contents')
<div class="bg-gray-100 min-h-screen">
    <div class="flex justify-between p-4">
        <h2>Settings</h2>
        <h2>Welcome Back, Ariez</h2>
    </div>
    <div class="p-4">
        <div class="w-full m-auto p-4 border rounded-lg bg-white">
            <!--Tabs navigation-->
            <ul
            class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0"
            role="tablist"
            data-te-nav-ref>
                <li role="presentation">
                    <a
                        href="#tabs-home"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-600 data-[te-nav-active]:text-purple-600"
                        data-te-toggle="pill"
                        data-te-target="#tabs-home"
                        data-te-nav-active
                        role="tab"
                        aria-controls="tabs-home"
                        aria-selected="true"
                        >Settings 1</a
                    >
                 </li>
                <li role="presentation">
                    <a
                        href="#tabs-profile"
                        class="focus:border-transparen my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate data-[te-nav-active]:border-orange-600 data-[te-nav-active]:text-purple-600"
                        data-te-toggle="pill"
                        data-te-target="#tabs-profile"
                        role="tab"
                        aria-controls="tabs-profile"
                        aria-selected="false"
                        >Settings 2</a
                    >
                </li>
                <li role="presentation">
                    <a
                        href="#tabs-messages"
                        class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-orange-600 data-[te-nav-active]:text-purple-600"
                        data-te-toggle="pill"
                        data-te-target="#tabs-messages"
                        role="tab"
                        aria-controls="tabs-messages"
                        aria-selected="false"
                        >Settings 3</a
                    >
                </li>
            </ul>

            <!--Tabs content-->
            <div class="mb-6">
                <div
                    class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-home"
                    role="tabpanel"
                    aria-labelledby="tabs-home-tab"
                    data-te-tab-active>
                    Settings Content 1
                </div>
                <div
                    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-profile"
                    role="tabpanel"
                    aria-labelledby="tabs-profile-tab">
                    Settings Content 2
                </div>
                <div
                    class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="tabs-messages"
                    role="tabpanel"
                    aria-labelledby="tabs-profile-tab">
                    Settings Content 3
                </div>
            </div>
        </div>
    </div>
</div>
@endsection