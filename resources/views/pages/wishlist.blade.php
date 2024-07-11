@extends('layout.main')

@section('title', 'Wishlist')

@section('content')
@push('head')
    <style>
        #card-container{
            display: grid;
            place-items: center;
            grid-template-columns: repeat(3,auto);
            grid-row-gap: 2rem;
        }
    </style>
@endpush
    <main class="py-24 mx-20">
        <section>
            <div class="flex justify-between items-center">
                <span class="font-semibold text-gray-600 font-sans">Wishlist (4)</span>
                <button class="rounded-md text-sm border-2 border-gray-200 px-8 py-3 transition ease-in-out duration-700 hover:border-gray-700 hover:font-semibold">Move All To Cart</button>
            </div>
            <div class="container">
                <div class="py-10">
                    <div id="card-container">
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-10">
            <div class="flex justify-between">
                <div class="flex">
                    <div class="kotak"></div>
                    <span class="text-title">Just For You</span>
                </div>
                <button class="rounded-md text-sm border-2 border-gray-200 px-8 py-3 transition ease-in-out duration-700 hover:border-gray-700 hover:font-semibold">See All</button>
            </div>
            <div class="container">
                <div class="py-10">
                    <div id="card-container">
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                        <div class="w-80 rounded overflow-hidden shadow-lg bg-white">
                            <div class="absolute flex flex-col items-end w-72  gap-4 py-3 pl-3">
                                <button class="bg-white px-2 py-1 rounded-full"><i class="fa-regular fa-trash-can fa-xl"></i></button>
                            </div>
                            <img class="w-full h-48" src="https://via.placeholder.com/400" alt="Placeholder Image">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Card Title 2</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection