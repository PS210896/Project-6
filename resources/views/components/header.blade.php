<nav class="shadow-md bg-base-100 py-4 border-b-[1px] border-gray-200">

    <div class="px-[10%] mx-auto flex justify-between items-center">

        <!-- Logo -->
        <div class="flex items-center flex-shrink-0 hover:opacity-75 mr-6">
            {{-- <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" class="h-[50px] cursor-pointer"> --}}
            <a href="{{ route('home') }}"><span class="font-semibold text-xl ml-2 mr-6">StageRadar</span></a>
        </div>


        <!-- Navigation Links -->
        <div>
            <a href="{{ route('home') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('home') ? 'text-primary' : 'hover:opacity-75' }}">
                Home
            </a>
            <a href="{{ route('internships.index') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                {{ request()->routeIs('internships.*') ? 'text-primary' : 'hover:opacity-75' }}">
                Internships
            </a>
            {{-- <a href="{{ route('about') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('about') ? 'text-primary' : 'hover:opacity-75' }}">
                About
            </a>
            <a href="{{ route('contact') }}"
                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
            {{ request()->routeIs('contact') ? 'text-primary' : 'hover:opacity-75' }}">
                Contact
            </a> --}}
        </div>

    </div>
</nav>
