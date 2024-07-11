@extends('layout.main')

@section('title', 'Landing Page')

@section('content')

    @push('head')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    @endpush
    
    <main class="flex pt-16">
        <aside>
            <div class="w-max border-r-2 pl-16 pr-32">
                <ul class="w-max flex flex-col gap-5 pt-5 pl-4">
                    <li><a href="" class="category">Woman's Fashion</a></li>
                    <li><a href="" class="category">Men's Fashion</a></li>
                    <li><a href="" class="category">Electronics</a></li>
                    <li><a href="" class="category">Home & Lifestyle</a></li>
                    <li><a href="" class="category">Medicine</a></li>
                    <li><a href="" class="category">Sports & Outdoor</a></li>
                    <li><a href="" class="category">Baby's $ Toys</a></li>
                    <li><a href="" class="category">Groceries & Pets</a></li>
                    <li><a href="" class="category">Health & Beauty</a></li>
                </ul>
            </div>
        </aside>
        
        <section id="default-carousel" class="relative w-full m-5 -z-10" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/img/banner1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/img/banner2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/img/banner3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/img/banner4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="assets/img/banner5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                </span>
            </button>
        </section>

    </main>

    <section class="mx-20 my-20">
        <div class="flex">
            <div class="kotak"></div>
            <span class="text-title">Today's</span>
        </div>
        <div class="flex gap-24 items-center justify-between">
            <div class="flex items-center ">
                <span class="text-header">Flash Sales</span>
                <div class="flex gap-6 ml-16 mb-4">
                    <div class="box-angka">
                        <span class="text-sm font-semibold">Days</span>
                        <span id="days" class="text-4xl font-semibold"></span>
                    </div>
                    <span class="titik2">:</span>
                    <div class="box-angka">
                        <span class="text-sm font-semibold">Hours</span>
                        <span id="hours" class="text-4xl font-semibold"></span>
                    </div>
                    <span class="titik2">:</span>
                    <div class="box-angka">
                        <span class="text-sm font-semibold">Minutes</span>
                        <span id="minutes" class="text-4xl font-semibold"></span>
                    </div>
                    <span class="titik2">:</span>
                    <div class="box-angka">
                        <span class="text-sm font-semibold">Seconds</span>
                        <span id="seconds" class="text-4xl font-semibold"></span>
                    </div>
                </div>
            </div>
            <!-- Add Navigation -->
            <div class="flex justify-end gap-3 ml-10 my-auto">
                <button id="tmbl-prev"><i class="fa-solid fa-circle-chevron-left fa-2xl text-gray-300"></i></button>
                <button id="tmbl-next"><i class="fa-solid fa-circle-chevron-right fa-2xl text-gray-300"></i></button>
            </div>
        </div>
        <div class="container py-8">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 1</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
                            <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more slides as needed -->
                </div>
                
            </div>
        </div>
        <div class="w-full flex items-center justify-center mt-5">
            <button class="bg-red-500 p-3 rounded-sm text-white font-bold hover:bg-red-600">View All Products</button>
        </div>
        <div class="divider"></div>
    </section>

    <section class="mx-20 my-20">
        <div class="flex">
            <div class="kotak"></div>
            <span class="text-title">Categories</span>
        </div>
        <div class="flex justify-between mt-5">
            <span class="text-header">Browse By Category</span>
            <!-- Add Navigation -->
            <div class="flex justify-end gap-3 ml-10 my-auto">
                <button id="tmbl-prev-1"><i class="fa-solid fa-circle-chevron-left fa-2xl text-gray-300"></i></button>
                <button id="tmbl-next-1"><i class="fa-solid fa-circle-chevron-right fa-2xl text-gray-300"></i></button>
            </div>
        </div>
        <div class="container py-8">
            <div class="swiper-container swiper-container-1 flex items-center justify-center">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/mobile-button.png" alt="">
                            <span class="font-semibold">Phones</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/screen.png" alt="">
                            <span class="font-semibold">Computers</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/watch-smart.png" alt="">
                            <span class="font-semibold">Smartwatchs</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/camera.png" alt="">
                            <span class="font-semibold">Cameras</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/headphones.png" alt="">
                            <span class="font-semibold">Headphones</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/game-controller.png" alt="">
                            <span class="font-semibold">Gamings</span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-category">
                            <img src="assets/img/storage-box.png" alt="">
                            <span class="font-semibold">Toys</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <section class="mx-20 my-20">
        <div class="flex">
            <div class="kotak"></div>
            <span class="text-title">This Month</span>
        </div>
        <div class="flex justify-between mt-5">
            <span class="text-header">Best Selling Products</span>
            <button class="bg-red-500 px-12 rounded-sm text-white font-bold hover:bg-red-600">View All</button>
        </div>
        <div class="container">
            <div class="py-16">
                <div id="card-container">
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jumbotron" class="mx-20 h-screen">
        <div class="max-w-screen py-20 px-16 flex flex-col gap-12">
            <div>
                <span class="font-semibold text-3xl text-black">Categories</span>
            </div>
            <div class="flex flex-col gap-2">
                <h2 class="text-6xl font-bold text-white drop-shadow-lg">Enhance Your</h2>
                <h2 class="text-6xl font-bold text-white drop-shadow-lg">Music Experience</h2>
            </div>
            <div class="flex gap-5">
                <div class="circle-time px-5">
                    <span id="days2" class="font-semibold text-lg">05</span>
                    <span class="font-semibold">Days</span>
                </div>
                <div class="circle-time">
                    <span id="hours2" class="font-semibold text-lg">23</span>
                    <span class="font-semibold">Hours</span>
                </div>
                <div class="circle-time px-2">
                    <span id="minutes2" class="font-semibold text-lg">38</span>
                    <span class="font-semibold">Minutes</span>
                </div>
                <div class="circle-time px-2">
                    <span id="seconds2" class="font-semibold text-lg">42</span>
                    <span class="font-semibold">Seconds</span>
                </div>
            </div>
            <div class="mt-4">
                <button class="bg-black px-14 py-4 text-white font-semibold rounded-md hover:bg-gray-900">Buy Now!</button>
            </div>
        </div>
    </section>

    <section class="mx-20 my-20">
        <div class="flex">
            <div class="kotak"></div>
            <span class="text-title">Our Product</span>
        </div>
        <div class="flex justify-between mt-5">
            <span class="text-header">Explore Our Products</span>
            <!-- Add Navigation -->
            <div class="flex justify-end gap-3 ml-10 my-auto">
                <button id="tmbl-prev-1"><i class="fa-solid fa-circle-chevron-left fa-2xl text-gray-300"></i></button>
                <button id="tmbl-next-1"><i class="fa-solid fa-circle-chevron-right fa-2xl text-gray-300"></i></button>
            </div>
        </div>
        <div class="container">
            <div class="py-16">
                <div id="card-container">
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="w-64 rounded overflow-hidden shadow-lg bg-white">
                        <div class="absolute flex flex-col gap-4 py-3 pl-3">
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-heart fa-lg"></i></button>
                            <button class="bg-white p-1 rounded-full"><i class="fa-regular fa-eye fa-lg"></i></button>
                        </div>
                        <img class="w-full" src="https://via.placeholder.com/400" alt="Placeholder Image">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Card Title 2</div>
                            <p class="text-gray-700 text-base">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="m-20">
        <div class="flex">
            <div class="kotak"></div>
            <span class="text-title">Our Product</span>
        </div>
        <div class="mt-5">
            <span class="text-header">New Arrival</span>
        </div>
        <div id="adv-container">
            <div class="menu menu1">
                <img id="adv-img" src="https://via.placeholder.com/400x600" alt="Menu 1">
            </div>
            <div class="menu menu2">
                <img id="adv-img" src="https://via.placeholder.com/400x300" alt="Menu 2">
            </div>
            <div class="menu menu3">
                <img id="adv-img" src="https://via.placeholder.com/200x300" alt="Menu 3">
            </div>
            <div class="menu menu4">
                <img id="adv-img" src="https://via.placeholder.com/200x300" alt="Menu 4">
            </div>
        </div>
    </section>

    <section class="mx-24 py-20">
        <div class="flex flex-row items-center justify-around">
            <div class="flex flex-col items-center justify-center gap-3">
                <div class="service">
                    <img src="assets/img/delivery-truck.png" alt="">
                </div>
                <div class="flex flex-col items-center justify-center gap-1">
                    <span class="font-bold text-lg">FREE AND FAST DELIVERY</span>
                    <span>Free delivery for all orders over 140$</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-3">
                <div class="service">
                    <img src="assets/img/customer-service.png" alt="">
                </div>
                <div class="flex flex-col items-center justify-center gap-1">
                    <span class="font-bold text-lg">24/7 CUSTOMER SERVICE</span>
                    <span>Friendly 24/7 customer support</span>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-3">
                <div class="service">
                    <img src="assets/img/check.png" alt="">
                </div>
                <div class="flex flex-col items-center justify-center gap-1">
                    <span class="font-bold text-lg">MONEY BACK GUARANTEE</span>
                    <span>We return money within 30 days</span>
                </div>
            </div>
        </div>
    </section>

    @push('js')
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop:true,
                navigation: {
                    nextEl: '#tmbl-next',
                    prevEl: '#tmbl-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                }
            });
        </script>
        <script>
            var swiper = new Swiper('.swiper-container-1', {
                slidesPerView: 10 ,
                spaceBetween: 10,
                loop:true,
                navigation: {
                    nextEl: '#tmbl-next-1',
                    prevEl: '#tmbl-prev-1',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 40,
                    },
                }
            });
        </script>
    @endpush
@endsection