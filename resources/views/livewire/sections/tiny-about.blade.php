<div
    class="flex panel relative  transition-colors dark bg-gray-800  text-white bg-panel-800 rounded-xl group overflow-hidden border border-transparent p-4 duration-500 hover:border-blue  h-full">
    <div class="h-full  md:grid md:grid-cols-12 md:gap-12">
        <div
            class="body  flex items-center gap-16 md:col-span-full justify-center lg:col-span-12 xl:col-span-9">
            <div class="relative hidden max-w-[250px] flex-shrink-0 md:block 2xl:max-w-xs">
                <div
                    class="relative rounded-2xl">
                    <figure class="w-full text-center">
                        <img loading="lazy" class="lazy rounded-2xl lazyloaded"
                             src="{{asset('/images/benyaminrmb/yellow.jpg')}}"
                             alt="Benyamin Bolhassani">

                    </figure>
                </div>
            </div>
            <div
                class="flex h-full w-full max-w-[400px] flex-shrink-0 flex-col xl:max-w-[500px] 2xl:max-w-[550px] xl:pr-10">
                <div class="flex-1 flex-wrap flex h-full w-full text-center justify-between md:text-left">
                    <div class="flex flex-wrap w-full">
                        <div class="mb-6 flex flex-col items-center md:items-start">
                            <h2
                                class="text-2xl font-semibold leading-tight lg:text-3xl">
                                {{__('about.greeting')}}
                            </h2>
                        </div>
                        <div
                            class="content w-full hide-scrollbar clamp mb-2 overflow-hidden leading-loose text-white md:mb-8 xl:mr-0 line-clamp-6">
                           {!! __('about.tiny_about') !!}


                        </div>
                    </div>
                    <div class="flex flex-wrap w-full self-end">
                        <div class="flex gap-2">
                            <button class="btn capitalize btn-primary">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="32"
                                          d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"/>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="32"
                                          d="m176 272l80 80l80-80M256 48v288"/>
                                </svg>
                                {{ __('global.cv.download_fa') }}
                            </button>
                            <button class="btn capitalize btn-primary">
                                <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="32"
                                          d="M336 176h40a40 40 0 0 1 40 40v208a40 40 0 0 1-40 40H136a40 40 0 0 1-40-40V216a40 40 0 0 1 40-40h40"/>
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="32"
                                          d="m176 272l80 80l80-80M256 48v288"/>
                                </svg>
                                {{ __('global.cv.download_en') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="text-center">
            <img
                class="thumbnail pointer-events-none absolute top-0 mb-8 mt-[-200px] hidden -translate-y-1/4 rounded-lg md:right-0 md:my-0 md:h-5/6 xl:inline-block scale-125 duration-500 group-hover:scale-[126%] md:translate-x-2/3 md:translate-y-0 xl:translate-x-1/2"
                src="https://ik.imagekit.io/laracasts/series/thumbnails/svg/write-code-thats-easy-to-maintain.svg"
                alt="Write Code That's Easy to Maintain" style="transition: transform 0.3s ease-in-out 0s;">
        </div>
    </div>
</div>
