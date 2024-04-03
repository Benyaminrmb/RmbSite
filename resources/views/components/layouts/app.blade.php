<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ '.::'.config('app.name').(isset($title) ?' | '.$title:null) .'::.' }}</title>
    @vite(
        [
        'resources/css/app.css',
        'resources/js/app.js',
        ]
    )

</head>
<body>
<div class="font-sans text-xl text-gray-600 leading-normal antialiased border-t-6 border-primary">
    <div class="bg-secondary text-white font-semibold hover:underline py-3 px-6">
        <div class="wrapper text-center">
            <a class="focus:underline focus:bg-transparent" href="https://eventy.io" target="_blank" rel="noopener">
                Check out my latest project, Eventy. The event platform for the rest of us!
            </a>
        </div>
    </div>

    <livewire:app.header/>

    {{ $slot }}
</div>
</body>
</html>
