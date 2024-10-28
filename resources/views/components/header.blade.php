<nav class="navbar px-[10%] bg-base-100 py-4 border-b-[1px] border-gray-200 shadow-md">

        <div class="flex-1">
            {{-- <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" class="h-[50px] cursor-pointer"> --}}
            <a href="{{ route('home') }}"><span class="ml-2 mr-6 text-xl font-semibold">StageRadar</span></a>
        </div>


            <!-- Navigation Links -->
            <div>
                <a href="{{ route('home') }}"
                    class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                {{ request()->routeIs('home') ? 'text-primary' : 'hover:opacity-75' }}">
                    Home
                </a>

                @if (Auth::check() && Auth::user())
                    <a href="{{ route('internships.index') }}"
                        class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                        {{ request()->routeIs('internships.*') ? 'text-primary' : 'hover:opacity-75' }}">
                        Stages
                    </a>
                @endif


                {{-- Displays if logged in --}}

                {{-- If it has the admin ID --}}
                {{-- Alternative if routes are implemented @if (Auth::check() && Auth::user()->role_id == "teacher"--}}
                @if (Auth::check() && Auth::user()->id == 1)
                    <div class="mr-4 dropdown dropdown-hover">
                        <div tabindex="0" role="button" class="m-1">Admin</div>
                        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                        <li>
                            <a href="{{ route('tags.index') }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                                {{ request()->routeIs('tags.*') ? 'text-primary' : 'hover:opacity-75' }}">
                                Labels
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('users.index') }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                                {{ request()->routeIs('users.*') ? 'text-primary' : 'hover:opacity-75' }}">
                                Gebruikers
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('companies.index') }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                                {{ request()->routeIs('companies.*') ? 'text-primary' : 'hover:opacity-75' }}">
                                Bedrijven
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('roles.index') }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                                {{ request()->routeIs('roles.*') ? 'text-primary' : 'hover:opacity-75' }}">
                                Rollen
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('contracts.index') }}"
                                class="link no-underline block mt-4 lg:inline-block lg:mt-0 mr-4
                                {{ request()->routeIs('contracts.*') ? 'text-primary' : 'hover:opacity-75' }}">
                                Contracten
                            </a>
                        </li>
                    </ul>
                </div>
            @endif


        {{-- If not logged in --}}
        @if (!Auth::check())
            <a href="{{ route('login') }}" class="mr-4 btn btn-primary">
                <button>
                    Login
                </button>
            </a>
        @endif

        {{-- If logged in --}}
        @if (Auth::check() && Auth::user())
        <form class="mr-4 btn btn-primary" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">
                Logout
            </button>
        </form>
    @endif
</nav>
