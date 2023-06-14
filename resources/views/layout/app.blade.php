<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div id="app">
        <button
            id="menu_button"
            data-drawer-target="default-sidebar"
            data-drawer-toggle="default-sidebar"
            aria-controls="default-sidebar"
            type="button"
            class="
            inline-flex
            items-center
            p-2
            mt-2
            ml-3
            text-sm
            text-gray-500
            rounded-lg
            sm:hidden
            hover:bg-gray-100
            focus:outline-none
            focus:ring-2
            focus:ring-gray-200
            "
        >
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>

        <sidebar></sidebar>

        <div class="p-4 sm:ml-64">
            <div class="p-4 border-2 inline-block border-gray-200 border-dashed rounded-lg min-w-full">

                @if(Session::has('success'))
                    <div id="message_success" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ Session::get('success') }}</span>
                    </div>
                @elseif(Session::has('error'))
                    <div id="message_error" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ Session::get('error') }}</span>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
