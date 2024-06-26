<link rel="stylesheet" href="{{ asset('styles/output.css') }}">
<link rel="stylesheet" href="{{ asset('styles/crsl.css') }}">
<script src="{{ asset('js/crslsingle.js') }}"></script>
<link rel="stylesheet" href="{{ asset('styles/flowbite.min.css') }}">
<script src="{{ asset('js/flowbite.min.js') }}"></script>
@extends('layout.navbar')

@section('title', 'Single Produk')
@section('content')
<div class="container mx-auto px-5 my-10 justify-center">

    <!--Layout Second Hand-->
    <div class="container mx-auto px-20 my-10 justify-center"><br>
        <h2 class="font-bold mt-5">Second Hand</h2>
        <p class="">Tetaplah cerdas dengan pilihan Thrift mu</p>

        <!--Carousel dan details-->
        <div class="flex h-fit" method="POST">
        {{ csrf_field() }}
            <!--Carousel-->
            <div class="flex-wrap w-2/5 justify-between items-center">
                <div class="main-pic container h-full mx-auto overflow-hidden">
                    <div id="controls-carousel" class="relative" data-carousel="static">
                        <!-- Carousel wrapper -->
                        <div class="h-full">
                            <!-- Item 1 -->
                            <div class="blok duration-700 ease-in-out" data-carousel-item>
                                <a href="{{ asset('images/PA/'. $dtPA->gambar) }}">
                                    <img src="{{ asset('images/PA/'. $dtPA->gambar) }}" class="w-full" alt="Product Image">
                                </a>
                            </div>
                            <!-- Item 2
                            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                                <img src="" value="" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div> -->
                            <!-- Item 3 -->
                            <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('images/kaos3.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div> -->
                            <!-- Item 4 -->
                            <!-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                <img src="{{ asset('images/kaos4.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                            </div> -->
                        </div>
                        <!-- Slider controls -->
                        <!-- <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button> -->
                    </div>

                </div>
                <!-- <div class="nav-pic h-24 mt-2 flex flex-wrap justify-between">
                    <div class="navImage h-24 w-24 m-auto border border-2 border-opacity-5 border-black"><img src="{{ asset('images/kaos1.jpg') }}" alt="" data-target="mainPic1"></div>
                    <div class="navImage h-24 w-24 m-auto border border-2 border-opacity-5 border-black"><img src="{{ asset('images/kaos2.jpg') }}" alt="" data-target="mainPic2"></div>
                    <div class="navImage h-24 w-24 m-auto border border-2 border-opacity-5 border-black"><img src="{{ asset('images/kaos3.jpg') }}" alt="" data-target="mainPic3"></div>
                    <div class="navImage h-24 w-24 m-auto border border-2 border-opacity-5 border-black"><img src="{{ asset('images/kaos4.jpg') }}" alt="" data-target="mainPic4"></div>
                </div> -->
            </div>
            
            <!--Carousel-->
            <!--Detail-->
            <div class="w-2/3 bg-slate-100/80 ml-2 h-fit">
                <div class="m-5 grid gap-4 mb-4 grid-cols-4">
                    <div class="col-span-4 pt-10 font-bold">
                            <h1 class="text-2xl mb-3" value="">{{ $dtPA->nama_produk_pa }}</h1>
                    </div>
                    <div class="col-span-4 pt-2">
                            <h1 class="text-4xl mb-3" value="">Rp. {{ $dtPA->harga_pa }}</h1>
                    </div>
                    <div class="col-span-1 pt-4 font-bold">
                            <h1 class="text-md mb-3" value="">Detail Produk:</h1>
                    </div>
                    <div class="col-span-3 pt-2 text-wrap">
                        <div class="h-fit text-md mb-3 p-2 w-full bg-white/80" value="">
                        <td class="px-6 py-4">
                            <ul class="list-disc list-inside grid gap-1">
                                <p class="">- Ukuran: {{ $dtPA->ukuran }}</p>
                                <p class="">- Warna: {{ $dtPA->warna }}</p>
                                <p class="">- Brand: {{ $dtPA->brand }}</p>
                                <p class="">- Material: {{ $dtPA->material }}</p>
                                <p class="">- Kondisi: {{ $dtPA->kondisi }}</p>
                                <p class="">- Detail Tambahan: {{ $dtPA->detailtambahan }}</p>
                            </ul>
                        </td>
                    </div>
                    <hr>
                    </div>

                    <div class="col-span-1 pt-4 font-bold">
                            <h1 class="text-md mb-3" value="">Deskripsi Produk:</h1>
                    </div>
                    <div class="col-span-3 pt-2 text-wrap">
                        <div class="h-fit text-md mb-3 p-2 w-full bg-white/80" value="">
                        <p class="border-2 border-white rounded-md">{{ $dtPA->deskripsiproduk }}</p>
                    </div>
                    <hr>
                    </div>

                    <div class="col-span-1 pt-4 font-bold">
                            <h1 class="text-md mb-3" value="">Catatan:</h1>
                    </div>
                    <div class="col-span-3 pt-2 text-wrap">
                        <div class="h-fit text-md mb-3 p-2 w-full bg-white/80" value="">
                        <p class="border-2 border-white rounded-md">{{ $dtPA->catatan }}</p>
                    </div>
                    </div>
                    </div>
                    <div class="justify-center mb-4 mx-2 w-full">
                        <a href="{{ url('checkout-produk',$dtPA->id) }}">
                        <button class="bg-lawngreen rounded-md py-1 w-full font-semibold">Beli</button>
                        </a>
                    </div>
                    </div>
            </div>
            <!--Detail-->
        </div>
        <br><br><br><br><br>
        <!--Carousel dan details-->    
    
    </div>
    <!--Layout Second Hand-->

</div>
@endsection