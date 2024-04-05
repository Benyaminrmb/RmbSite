<div class="navbar fixed z-50 bg-gray-900/90 drop-shadow-md  ">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/" wire:navigate>Item 1</a></li>
                <li><a href="/home2" wire:navigate.hover>Item 2</a></li>

            </ul>
        </div>
        <a class="btn btn-ghost text-xl">
            {{ config('app.name') }}
        </a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/" wire:navigate>Item 1</a></li>
            <li><a href="/home2" wire:navigate.hover>Item 2</a></li>

        </ul>
    </div>
    <div class="navbar-end">
        <livewire:system.language-switcher/>
    </div>
</div>
