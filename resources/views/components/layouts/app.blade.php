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
    <div class="flex flex-wrap w-full h-screen">


    <livewire:app.header/>


    <div class="relative flex flex-wrap w-full justify-center items-center">
        <div class="flex flex-wrap w-full">

            <h1 class="max-w-3xl mx-auto text-5xl font-bold text-center md:text-6xl lg:text-7xl kanit-bold">
                Benyamin
                Bolhassani
                <br class="hidden lg:inline">
                <span data-text="Laravel Developer" class="text-primary hero glitch layers">
                Laravel Developer
            </span>

            </h1>
        </div>
        <div class="flex flex-wrap w-full">
            <p class="mt-6 max-w-xl mx-auto text-center text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10">
                Let me call myself
                <span class="text-primary">
                    the prophet
                </span>!
                <br class="hidden lg:inline">
                who's like to guide (them) out.
            </p>
        </div>

    </div>
    </div>
    awd
    {{--   <div class="grid grid-cols-12 justify-center w-full">
           <div class="col-span-8 col-start-3">
               <div class="flex flex-wrap w-full items-center">

                   <livewire:sections.tiny-about/>
               </div>
           </div>
       </div>--}}


    {{--    <livewire:sections.alert-box :link="'dddddddd'" :text="'zz'"/>--}}


    {{ $slot }}

</div>
</body>
</html>
