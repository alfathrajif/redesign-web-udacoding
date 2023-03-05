<header class="shadow-xl w-full flex items-center h-20 sticky top-0 z-30 bg-white">
    <div class="w-11/12 mx-auto flex justify-between items-center">
        <a href="/">
            <img src="{{ asset('img/Udacodng_Logo-removebg-preview 2.png') }}" alt="" class="w-40">
        </a>
        <ul class="flex items-center">
            <li><a href="/"
                    class="px-4 py-4 text-gray-500 hover:text-gray-600 {{ Request::is('/') ? 'font-bold text-lime-500 hover:text-lime-500' : '' }}">Home</a>
            </li>
            <li><a href="/"
                    class="px-4 py-4 text-gray-500 hover:text-gray-600 {{ Request::is('/about') ? 'font-bold text-lime-500 hover:text-lime-500' : '' }} ">About</a>
            </li>
            <li><a href="/"
                    class="px-4 py-4 text-gray-500 hover:text-gray-600 {{ Request::is('/categories') ? 'font-bold text-lime-500 hover:text-lime-500' : '' }} ">Categories</a>
            </li>
            <li><a href="/leaderboard"
                    class="px-4 py-4 text-gray-500 hover:text-gray-600 {{ Request::is('leaderboard') ? 'font-bold text-lime-500 hover:text-lime-500' : '' }} ">Leaderboard</a>
            </li>
            <li><a href="/"
                    class="px-4 py-4 text-gray-500 hover:text-gray-600 {{ Request::is('/portfolio') ? 'font-bold text-lime-500 hover:text-lime-500' : '' }} ">Portfolio</a>
            </li>
            <li><a href="/"
                    class="px-4 py-4 text-gray-500 hover:text-gray-600 {{ Request::is('/testimonial') ? 'font-bold text-lime-500 hover:text-lime-500' : '' }} ">Testimonial</a>
            </li>
            <li class="ml-8">
                <a href="#" data-te-ripple-init data-te-ripple-color="light"
                    class="inline-block shadow rounded-lg bg-lime-500 px-6 pt-2.5 pb-2 leading-normal text-white transition duration-150 ease-in-out hover:bg-lime-600 focus:bg-lime-600  focus:outline-none focus:ring-0 active:bg-lime-700">
                    Join Us
                </a>
            </li>
        </ul>
    </div>
</header>
