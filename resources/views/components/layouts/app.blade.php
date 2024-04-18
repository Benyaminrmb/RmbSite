<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{app()->getLocale() === 'fa'?'rtl':'ltr'}}">
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

<div class="flex flex-wrap w-full @if(app()->getLocale()=='fa') dir-rtl @endif">
    <livewire:app.header/>

    <div class="grid grid-cols-12 justify-center w-full">
        <div class="col-span-8 col-start-3 mt-4">
                <livewire:sections.tiny-about/>
        </div>
    </div>

    {{--    <livewire:sections.alert-box :link="'dddddddd'" :text="'zz'"/>--}}


    {{ $slot }}

</div>
</body>
</html>
