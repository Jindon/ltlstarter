<header class="bg-gray-900">
    <navigation-bar>
        <template v-slot:logo>
            <a href="{{ url('/') }}">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/>
                    </svg>
                    <span class="font-semibold text-xl tracking-tight">{{ config('app.name', 'Laravel') }}</span>
                </div>
            </a>
        </template>
        <template v-slot:menuitems>
            @guest
            <a href="{{url('/')}}"
               class="block px-2 py-2 text-gray-500 hover:text-white hover:bg-gray-800 rounded font-semibold">Home</a>
                <a href="{{ route('login') }}"
               class="block mt-1 sm:mt-0 sm:ml-2 px-2 py-2 text-gray-500 hover:text-white hover:bg-gray-800 rounded font-semibold">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
               class="block mt-1 sm:mt-0 sm:ml-2 px-2 py-2 text-gray-500 hover:text-white hover:bg-gray-800 rounded font-semibold">Register</a>
                @endif
            @else
                <dropdown-menu>
                    <template v-slot:text>
                        <a href="#"
                           class="block mt-1 sm:mt-0 sm:ml-2 px-2 py-2 text-gray-500 hover:text-white hover:bg-gray-800 rounded font-semibold">{{ Auth::user()->name }}</a>
                    </template>
                    <template v-slot:dropdown>
                        <div class="absolute right-0 bg-white rounded-lg py-2 w-48 shadow-md">
                            <a href="#" class="block py-2 px-4 text-gray-800 hover:bg-indigo-400 hover:text-white font-semibold">My Orders</a>
                            <a href="javascript:0;" class="block py-2 px-4 text-gray-800 hover:bg-indigo-400 hover:text-white font-semibold"
                               onclick="e.preventDefault();document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </template>
                </dropdown-menu>
            @endguest
        </template>
    </navigation-bar>

</header>
