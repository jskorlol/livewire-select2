@extends('layouts.base')

@section('body')
{{--    <div class="h-screen flex overflow-hidden bg-white">--}}
    <div class="min-h-screen md:h-screen flex overflow-hidden bg-white">

        @stack('modals')

        <!-- Main column -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden">
            <!-- Search header -->
            <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none" tabindex="0">

                @yield('content')
                @isset($slot){{$slot}}@endisset

            </main>
        </div>
    </div>

@endsection
