<nav class="navbar px-[10%] bg-base-100 py-4 border-b-[1px] border-gray-200 shadow-md">

        <div class="flex-1">
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


    <div class="flex-none ml-6">
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">
                    <img alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li>
                    <a class="justify-between">
                        Profile
                        <span class="badge">New</span>
                    </a>
                </li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
