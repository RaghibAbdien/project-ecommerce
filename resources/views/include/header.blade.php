<nav class="bg-white w-full flex justify-evenly items-center py-3 border-b-2 fixed z-50">
    <div class="w-24">
        <a href=""><img src="assets/img/logo-brand.png" alt=""></a>
    </div>
    <ul class="flex gap-10">
        <li><a href="" class="link">Home</a></li>
        <li><a href="" class="link">Contact</a></li>
        <li><a href="" class="link">About</a></li>
        <li><a href="" class="link">Sign Up</a></li>
    </ul>
    <div class="flex gap-6">
        
        <form class="max-w-sm mx-auto">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:border-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Cari disini.." />
            </div>
        </form>

        <div class="flex gap-4 items-center">
            <a href=""><i class="fa-regular fa-heart text-2xl hover:text-red-600"></i></a>
            <a href=""><i class="fa-solid fa-cart-shopping text-2xl hover:text-gray-400"></i></a>
            <button type="button" id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar"><i class="fa-solid fa-circle-user text-2xl hover:text-gray-400"></i></button>
        </div>

        {{-- Dropdown User --}}
        <div id="dropdownAvatar" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
              <div>Bonnie Green</div>
              <div class="font-medium truncate">name@flowbite.com</div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
              <li>
                <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-black hover:text-white"><i class="fa-solid fa-user-gear"></i>My Account</a>
              </li>
              <li>
                <a href="#" class="flex items-center gap-4 px-4 py-2 hover:bg-black hover:text-white"><i class="fa-solid fa-bag-shopping"></i>My Order</a>
              </li>
              <li>
                <a href="#" class="flex items-center gap-3 px-4 py-2 hover:bg-black hover:text-white"><i class="fa-solid fa-shop"></i>My Shop</a>
              </li>
            </ul>
            <div class="py-2">
              <a href="#" class="flex items-center gap-3 px-4 py-2 text-sm text-gray-700 hover:bg-black hover:text-white"><i class="fa-solid fa-right-from-bracket"></i>Sign out</a>
            </div>
        </div>
    </div>
</nav>