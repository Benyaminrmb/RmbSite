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

<div class="flex flex-wrap w-full">
    <livewire:app.header/>


        {{--    <livewire:sections.alert-box :link="'dddddddd'" :text="'zz'"/>--}}

        <livewire:sections.tiny-about/>

        {{ $slot }}

</div>
</body>
</html>
