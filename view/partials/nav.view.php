<nav class="block w-full max-w-screen-xl px-6 py-3 mx-auto text-blue-gray-900 bg-white border shadow-md border-white/80 bg-opacity-80 backdrop-blur-2xl backdrop-saturate-200">
    <div class="flex items-center justify-between text-blue-gray-900">
        <a href="home.php" class="mr-4 block cursor-pointer py-1.5 font-sans text-base font-bold leading-relaxed tracking-normal text-inherit antialiased">
            Tukdo
        </a>
        <div class="relative flex w-full gap-2 md:w-max">
            <div class="relative h-10 w-full min-w-[288px]">
                <input type="search" class="peer h-full w-full rounded-[7px] border border-gray-200 bg-gray-100 px-3 py-2.5 pr-20 font-sans text-sm font-normal" placeholder=" Type here.... " />
            </div>
            <button class="!absolute right-1 top-1.5 select-none rounded border border-gray-300 bg-gray-200 py-1.5 px-4 text-center align-middle font-sans text-xs font-bold text-blue-gray-900 shadow-md shadow-blue-gray-500/10 transition-all hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                Search
            </button>
        </div>
        <div class="hidden lg:block">
            <ul class="flex flex-col gap-2 my-2 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
                <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                    <a href="products.php" class="flex items-center transition-colors hover:text-blue-500" Id="productNav">
                        Shop products
                    </a>
                </li>
                <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                    <a href="blogs.php" class="flex items-center transition-colors hover:text-blue-500" Id="blogNav">
                        Blogs
                    </a>
                </li>
                <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">

                    <a href="#" class="flex items-center transition-colors text-gray-400">
                    <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        Account
                    </a>
                </li>
            </ul>
        </div>
        <button class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden" type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                </svg>
            </span>
        </button>
    </div>
</nav>