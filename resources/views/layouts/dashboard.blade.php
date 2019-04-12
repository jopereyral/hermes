<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="font-sans">
    <div class="min-h-screen md:flex">
        <div class="flex-none w-full md:max-w-xs bg-black text-white">
            <div class="px-10 py-6 bg-teal-dark">
                <h2><span class="font-mono">Hermes</span> ⚡</h2>
            </div>
            <div class="mt-10 px-6 py-5 text-lg font-semibold border-indigo-light border-l-8 bg-grey-darkest">
                <svg class="w-5 h-5 mr-2 fill-current text-white inline-block" enable-background="new 0 0 372 372" version="1.1" viewBox="0 0 372 372" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <path d="m320 19.6h-268c-25.12 0-52 13.68-52 52v179.68c0 38.32 26.88 52 52 52h99.2v33.12h-16.48c-4.418 0-8 3.582-8 8s3.582 8 8 8h105.6c4.418 0 8-3.582 8-8s-3.582-8-8-8h-19.52v-33.12h99.2c38.32 0 52-26.88 52-52v-179.68c0-38.32-26.88-52-52-52zm-115.2 316.8h-37.6v-33.12h37.6v33.12zm151.2-85.12c0 10.8-3.52 36-36 36h-268c-10.8 0-36-3.52-36-36v-11.44h340v11.44zm0-27.36h-340v-152c0-32.48 25.2-36 36-36h268c10.8 0 36 3.52 36 36v152z" />
                    <path d="m315.69 57.359c-3.532-2.654-8.547-1.942-11.201 1.59-3e-3 4e-3 -6e-3 7e-3 -8e-3 0.011h0.4l-59.68 80-28-36.4c-1.458-1.897-3.689-3.042-6.08-3.12-2.381-0.068-4.669 0.93-6.24 2.72l-45.601 51.84-33.44-57.12c-1.426-2.405-4.004-3.891-6.8-3.92-2.808-0.016-5.42 1.441-6.88 3.84l-55.2 89.2c-2.841 3.384-2.4 8.43 0.984 11.271s8.43 2.4 11.271-0.984c0.573-0.682 1.027-1.455 1.345-2.287l48-78.24 32 55.12c2.231 3.814 7.131 5.096 10.945 2.865 0.724-0.424 1.377-0.959 1.935-1.585l46.56-52.08 28.56 37.12c1.634 1.85 3.937 2.972 6.4 3.12 2.49-0.025 4.826-1.208 6.32-3.2l66-88.56c2.654-3.532 1.942-8.547-1.59-11.201z" />
                </svg>
                <span>Monitor</span>
            </div>
        </div>
        <div class="flex-1 bg-grey-lightest text-grey-darkest pl-10">
            @yield('body')
        </div>
    </div>
</body>

</html>
