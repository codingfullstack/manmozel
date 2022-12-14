<div class="w-full bg-stone-300  flex justify-between">
    <div class="m-4">
        <a href="{{ route('home') }}">
            <h1 class="text-2xl">Manmozel</h1>
        </a>
    </div>
    <nav class="m-4">
        <a class="mx-2   md:inline xl:inline hidden" href="">link</a>
        <a class="mx-2  md:inline xl:inline hidden " href="">link</a>
        @auth
            <a class="mx-2  md:inline xl:inline hidden" href="{{ route('product.create') }}">Kurti</a>

            <form class="mx-2  md:inline xl:inline hidden" method="POST" action="{{ route('logout') }}">
                @csrf

                <a href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        @endauth
        <div x-data="{ dropdownOpen: false }" class="relative inline ">
            <button @click="dropdownOpen = !dropdownOpen"
                class="relative  z-10  md:hidden sm:inline-block    focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

            <div x-show="dropdownOpen"
                class="absolute top-10  -right-4  py-2 w-48  bg-stone-300   rounded-md shadow-xl z-20">
                <a href="#"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    link
                </a>
                <a href="#"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    link
                </a>
                @auth
                <a href="{{ route('product.create') }}"
                    class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                    Kurti
                </a>

                    <form class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white"
                        method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @endauth

            </div>
        </div>

    </nav>
</div>
