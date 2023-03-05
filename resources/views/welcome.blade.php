@extends('layouts.main')
@section('title', 'Welcome -')
@section('content')
<div class="hero relative flex items-center justify-center">
    <img src="{{ asset('img/chuttersnap-C4Lrq1F3vDQ-unsplash.jpg') }}" alt=""
        class="h-full w-full absolute object-cover -z-10">
    <div class="caption relative flex items-center w-full bg-white/10">
        <div class="captionText w-11/12 mx-auto flex flex-col items-center gap-14 justify-center">
            <div class="text-white text-8xl font-semibold drop-shadow-xl">
                <span class="underline underline-offset-8 ">Mentoring</span>
                <span class="text-lime-500">Program</span>
            </div>
            <div>
                <a href="#" data-te-ripple-init data-te-ripple-color="light"
                    class="shadow-xl rounded-lg bg-lime-500 w-44 h-14 flex justify-center items-center leading-normal text-white transition duration-150 ease-in-out hover:bg-lime-600 focus:bg-lime-600 text-xl focus:outline-none focus:ring-0 active:bg-lime-700">
                    Join Us
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white z-10">
    <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
        <div class="w-11/12 mx-auto pt-14 text-4xl font-medium text-lime-500 drop-shadow">About Mentoring</div>
        <div class="absolute right-0 bottom-0 left-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
            data-te-carousel-indicators>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="0" data-te-carousel-active
                class="mx-2 h-7 w-7 rounded-full flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-lime-500 opacity-50 transition-grayscale duration-[600ms] motion-reduce:transition-none"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="1"
                class="mx-2 h-7 w-7 rounded-full flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-lime-500 opacity-50 transition-grayscale duration-[600ms] motion-reduce:transition-none"
                aria-label="Slide 2"></button>
            <button type="button" data-te-target="#carouselExampleCaptions" data-te-slide-to="2"
                class="mx-2 h-7 w-7 rounded-full flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-lime-500 opacity-50 transition-grayscale duration-[600ms] motion-reduce:transition-none"
                aria-label="Slide 3"></button>
        </div>
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                <div class="h-[500px] flex items-center justify-center">
                    <div class="w-10/12 pb-12 flex justify-center ">
                        <div class="relative w-[300px] h-[380px]">
                            <img src="{{ asset('img/gabrielle-henderson-HJckKnwCXxQ-unsplash.jpg') }}" alt=""
                                class="h-[300px] w-[150px] object-cover object-top shadow-xl absolute left-0 top-0">
                            <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                class="h-[300px] w-[150px] object-cover object-top shadow-xl absolute left-28 bottom-0">
                        </div>
                        <div class="h-fit mt-28 relative max-w-3xl">
                            <h3 class="text-2xl font-semibold mb-4">What is Mentoring?</h3>
                            <p class="text-lg">
                                Mentoring is a learning method that allows someone with more experience to
                                share their experiences with people who do not have experience in a particular field.
                                Mentoring is proven to be effective in shaping one's characteristics, especially for
                                people who want to enter the workforce
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <div class="h-[500px] flex items-center justify-center">
                    <div class="w-10/12 pb-12 flex justify-center ">
                        <div class="relative w-[300px] h-[380px]">
                            <img src="{{ asset('img/gabrielle-henderson-HJckKnwCXxQ-unsplash.jpg') }}" alt=""
                                class="h-[300px] w-[150px] object-cover object-top shadow-xl absolute left-0 top-0">
                            <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                class="h-[300px] w-[150px] object-cover object-top shadow-xl absolute left-28 bottom-0">
                        </div>
                        <div class="h-fit mt-28 relative max-w-3xl">
                            <h3 class="text-2xl font-semibold mb-4">What is Mentoring?</h3>
                            <p class="text-lg">
                                Mentoring is a learning method that allows someone with more experience to
                                share their experiences with people who do not have experience in a particular field.
                                Mentoring is proven to be effective in shaping one's characteristics, especially for
                                people who want to enter the workforce
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <div class="h-[500px] flex items-center justify-center">
                    <div class="w-10/12 pb-12 flex justify-center ">
                        <div class="relative w-[300px] h-[380px]">
                            <img src="{{ asset('img/gabrielle-henderson-HJckKnwCXxQ-unsplash.jpg') }}" alt=""
                                class="h-[300px] w-[150px] object-cover object-top shadow-xl absolute left-0 top-0">
                            <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                class="h-[300px] w-[150px] object-cover object-top shadow-xl absolute left-28 bottom-0">
                        </div>
                        <div class="h-fit mt-28 relative max-w-3xl">
                            <h3 class="text-2xl font-semibold mb-4">What is Mentoring?</h3>
                            <p class="text-lg">
                                Mentoring is a learning method that allows someone with more experience to
                                share their experiences with people who do not have experience in a particular field.
                                Mentoring is proven to be effective in shaping one's characteristics, especially for
                                people who want to enter the workforce
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button
            class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-10 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
            <span data-te-ripple-init data-te-ripple-color="light"
                class="h-10 w-10 pr-0.5 rounded-full bg-lime-500 flex items-center justify-center shadow leading-normal text-white transition duration-150 ease-in-out hover:bg-lime-600 focus:bg-lime-600 focus:outline-none  active:bg-lime-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Previous</span>
        </button>
        <button
            class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
            type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
            <span
                class="h-10 w-10 pr-0.5 rounded-full bg-lime-500 flex items-center justify-center shadow leading-normal text-white transition duration-150 ease-in-out hover:bg-lime-600 focus:bg-lime-600 focus:outline-none  active:bg-lime-700"
                data-te-ripple-init data-te-ripple-color="light">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </span>
            <span
                class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Next</span>
        </button>
    </div>
    <div class="py-10 reveal">
        <div class="w-11/12 flex justify-between mx-auto">
            <div>
                <div class="text-4xl font-medium text-lime-500 drop-shadow mb-5">Mentoring Categories</div>
                <p class="text-lg max-w-xs">
                    Pick your favorite categories for mentoring, bring yourself one step further from the
                    others.
                </p>
            </div>
            <div class="max-w-4xl">
                <div class="flex  columns-3">
                    <div class="grid grid-cols-3">
                        <div></div>
                        <a href="#"
                            class="w-[300px] h-[270px] flex flex-col gap-7 items-center justify-center shadow-xl bg-lime-500 hover:bg-lime-600 active:bg-lime-700"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ asset('img/categories/cib_flutter.png') }}" alt="" class="w-24 mr-2">
                            <span class="text-2xl text-white tracking-wide">Flutter</span>
                        </a>
                        <a href="#"
                            class="w-[300px] h-[270px] flex flex-col gap-7 items-center justify-center shadow-xl bg-white hover:bg-gray-100 active:bg-slate-200"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ asset('img/categories/clarity_mobile-phone-solid.png') }}" alt=""
                                class="w-24 mr-2">
                            <span class="text-2xl  tracking-wide">UI Design</span>
                        </a>
                        <a href="#"
                            class="w-[300px] h-[270px] flex flex-col gap-7 items-center justify-center shadow-xl bg-lime-500 hover:bg-lime-600 active:bg-lime-700"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ asset('img/categories/cib_kotlin.png') }}" alt="" class="w-24 mr-2">
                            <span class="text-2xl text-white tracking-wide">Kotlin</span>
                        </a>
                        <a href="#"
                            class="w-[300px] h-[270px] flex flex-col gap-7 items-center justify-center shadow-xl bg-white hover:bg-gray-100 active:bg-slate-200"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ asset('img/categories/carbon_application-web.png') }}" alt=""
                                class="w-24 mr-2">
                            <span class="text-2xl  tracking-wide">Web Design</span>
                        </a>
                        <a href="#"
                            class="w-[300px] h-[270px] flex flex-col gap-7 items-center justify-center shadow-xl bg-lime-500 hover:bg-lime-600 active:bg-lime-700"
                            data-te-ripple-init data-te-ripple-color="light">
                            <img src="{{ asset('img/categories/bxs_book-bookmark.png') }}" alt="" class="w-24 mr-2">
                            <span class="text-2xl text-white tracking-wide">English</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-10 reveal">
        <div class="w-11/12 mx-auto">
            <div class="text-4xl font-medium text-lime-500 drop-shadow mb-5">Leaderboard</div>
            <ul class="mb-5 flex gap-4 px-5 rounded-xl list-none flex-col flex-wrap md:flex-row bg-lime-500"
                role="tablist" data-te-nav-ref>
                <li role="flutter" class="flex-grow basis-0 text-center">
                    <a href="#pills-flutter02"
                        class="block bg-lime-500 px-7 pt-4 pb-3.5 leading-tight text-white data-[te-nav-active]:!bg-lime-600 data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700"
                        id="pills-flutter-tab02" data-te-toggle="pill" data-te-target="#pills-flutter02"
                        data-te-nav-active role="tab" aria-controls="pills-flutter02" aria-selected="true">Flutter</a>
                </li>
                <li role="kotlin" class="flex-grow basis-0 text-center">
                    <a href="#pills-kotlin02"
                        class="block bg-lime-500 px-7 pt-4 pb-3.5 leading-tight text-white data-[te-nav-active]:!bg-lime-600 data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700"
                        id="pills-kotlin-tab02" data-te-toggle="pill" data-te-target="#pills-kotlin02" role="tab"
                        aria-controls="pills-kotlin02" aria-selected="false">Kotlin</a>
                </li>
                <li role="uidesign" class="flex-grow basis-0 text-center">
                    <a href="#pills-uidesign02"
                        class="block bg-lime-500 px-7 pt-4 pb-3.5 leading-tight text-white data-[te-nav-active]:!bg-lime-600 data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700"
                        id="pills-uidesign-tab02" data-te-toggle="pill" data-te-target="#pills-uidesign02" role="tab"
                        aria-controls="pills-uidesign02" aria-selected="false">UiDesign</a>
                </li>
                <li role="web" class="flex-grow basis-0 text-center">
                    <a href="#pills-web02"
                        class="block bg-lime-500 px-7 pt-4 pb-3.5 leading-tight text-white data-[te-nav-active]:!bg-lime-600 data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700"
                        id="pills-web-tab02" data-te-toggle="pill" data-te-target="#pills-web02" role="tab"
                        aria-controls="pills-web02" aria-selected="false">Web</a>
                </li>
                <li role="english" class="flex-grow basis-0 text-center">
                    <a href="#pills-english02"
                        class="block bg-lime-500 px-7 pt-4 pb-3.5 leading-tight text-white data-[te-nav-active]:!bg-lime-600 data-[te-nav-active]:text-white dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700"
                        id="pills-english-tab02" data-te-toggle="pill" data-te-target="#pills-english02" role="tab"
                        aria-controls="pills-english02" aria-selected="false">English</a>
                </li>
            </ul>
            <div class="mb-6">
                <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="pills-flutter02" role="tabpanel" aria-labelledby="pills-flutter-tab02" data-te-tab-active>
                    <div class="flex justify-center gap-12 py-8">
                        @foreach ($flutterParticipants as $flutterParticipant)
                        <div class="h-[400px] flex justify-center @if ($flutterParticipant->rank != 2 )mt-14 @endif">
                            <div
                                class="flex flex-col gap-6 w-full min-w-[280px] max-w-[280px] items-center justify-center rounded-xl bg-gray-50 p-8 px-4 shadow-lg dark:bg-neutral-700">
                                <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                    class="w-32 h-32 rounded-full border-[5px] border-amber-500">
                                <h5 class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    <div class="text-center text-lime-600 font-semibold mb-2">{{
                                        $flutterParticipant->name
                                        }}</div>
                                    <div class="text-center text-sm">{{ $flutterParticipant->school }}</div>
                                </h5>
                                <div class="text-4xl font-semibold">{{ $flutterParticipant->score }}</div>
                                <div class="text-base text-neutral-600 dark:text-neutral-200">
                                    {{ $flutterParticipant->program->name }} - {{ $flutterParticipant->generation }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="pills-kotlin02" role="tabpanel" aria-labelledby="pills-kotlin-tab02">
                    <div class="flex justify-center gap-12 py-8">

                        @foreach ($kotlinParticipants as $kotlinParticipant)
                        <div class="h-[400px] flex justify-center @if ($kotlinParticipant->rank != 2 )mt-14 @endif">
                            <div
                                class="flex flex-col gap-6 w-full min-w-[280px] max-w-[280px] items-center justify-center rounded-xl bg-gray-50 p-8 px-4 shadow-lg dark:bg-neutral-700">
                                <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                    class="w-32 h-32 rounded-full border-[5px] border-amber-500">
                                <h5 class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    <div class="text-center text-lime-600 font-semibold mb-2">{{
                                        $kotlinParticipant->name
                                        }}</div>
                                    <div class="text-center text-sm">{{ $kotlinParticipant->school }}</div>
                                </h5>
                                <div class="text-4xl font-semibold">{{ $kotlinParticipant->score }}</div>
                                <div class="text-base text-neutral-600 dark:text-neutral-200">
                                    {{ $kotlinParticipant->program->name }} - {{ $kotlinParticipant->generation }}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="pills-uidesign02" role="tabpanel" aria-labelledby="pills-uidesign-tab02">
                    <div class="flex justify-center gap-12 py-8">

                        @foreach ($uiParticipants as $uiParticipant)
                        <div class="h-[400px] flex justify-center @if ($uiParticipant->rank != 2 )mt-14 @endif">
                            <div
                                class="flex flex-col gap-6 w-full min-w-[280px] max-w-[280px] items-center justify-center rounded-xl bg-gray-50 p-8 px-4 shadow-lg dark:bg-neutral-700">
                                <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                    class="w-32 h-32 rounded-full border-[5px] border-amber-500">
                                <h5 class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    <div class="text-center text-lime-600 font-semibold mb-2">{{
                                        $uiParticipant->name
                                        }}</div>
                                    <div class="text-center text-sm">{{ $uiParticipant->school }}</div>
                                </h5>
                                <div class="text-4xl font-semibold">{{ $uiParticipant->score }}</div>
                                <div class="text-base text-neutral-600 dark:text-neutral-200">
                                    {{ $uiParticipant->program->name }} - {{ $uiParticipant->generation }}
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="pills-web02" role="tabpanel" aria-labelledby="pills-web-tab02">
                    <div class="flex justify-center gap-12 py-8">
                        @foreach ($webParticipants as $webParticipant)
                        <div class="h-[400px] flex justify-center @if ($webParticipant->rank != 2 )mt-14 @endif">
                            <div
                                class="flex flex-col gap-6 w-full min-w-[280px] max-w-[280px] items-center justify-center rounded-xl bg-gray-50 p-8 px-4 shadow-lg dark:bg-neutral-700">
                                <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                    class="w-32 h-32 rounded-full border-[5px] border-amber-500">
                                <h5 class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    <div class="text-center text-lime-600 font-semibold mb-2">{{
                                        $webParticipant->name
                                        }}</div>
                                    <div class="text-center text-sm">{{ $webParticipant->school }}</div>
                                </h5>
                                <div class="text-4xl font-semibold">{{ $webParticipant->score }}</div>
                                <div class="text-base text-neutral-600 dark:text-neutral-200">
                                    {{ $webParticipant->program->name }} - {{ $webParticipant->generation }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="hidden opacity-0 opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                    id="pills-english02" role="tabpanel" aria-labelledby="pills-english-tab02">
                    <div class="flex justify-center gap-12 py-8">
                        @foreach ($englishParticipants as $englishParticipant)
                        <div class="h-[400px] flex justify-center @if ($englishParticipant->rank != 2 )mt-14 @endif">
                            <div
                                class="flex flex-col gap-6 w-full min-w-[280px] max-w-[280px] items-center justify-center rounded-xl bg-gray-50 p-8 px-4 shadow-lg dark:bg-neutral-700">
                                <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                    class="w-32 h-32 rounded-full border-[5px] border-amber-500">
                                <h5 class="text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                                    <div class="text-center text-lime-600 font-semibold mb-2">{{
                                        $englishParticipant->name
                                        }}</div>
                                    <div class="text-center text-sm">{{ $englishParticipant->school }}</div>
                                </h5>
                                <div class="text-4xl font-semibold">{{ $englishParticipant->score }}</div>
                                <div class="text-base text-neutral-600 dark:text-neutral-200">
                                    {{ $englishParticipant->program->name }} - {{ $englishParticipant->generation }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-2xl flex justify-end font-medium text-lime-500 drop-shadow mb-5">
                <a href="/leaderboard">All Leaderboard</a>
            </div>
        </div>
    </div>
    <div class="py-10 bg-lime-500 pb-24 reveal">
        <div class="mx-auto w-11/12 relative">
            <div class="mb-7 text-4xl font-medium text-white drop-shadow">Portfolio</div>
            <!-- Swiper -->
            <div class="swiper mySwiper h-[300px] py-12 max-w-6xl static">
                <div class="swiper-wrapper">
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide border-4 shadow-lg overflow-hidden">
                        <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt="">
                    </div>
                </div>
                <div
                    class="z-10 swiper-button-prev mt-3 border h-10 w-10 pr-0.5 bg-white active:bg-gray-100 active:scale-95 transition opacity-50 hover:opacity-100 shadow rounded-full">
                </div>
                <div
                    class="z-10 swiper-button-next mt-3 border h-10 w-10 pr-0.5 bg-white active:bg-gray-100 active:scale-95 transition opacity-50 hover:opacity-100 shadow rounded-full">
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
    <div class="py-10 testimoni pb-28 reveal">
        <div class="w-11/12 mx-auto relative">
            <div class="text-4xl font-medium text-lime-500 drop-shadow mb-5">Testimoni</div>
            <div class="swiper mySwiper py-6 max-w-5xl static">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide">
                        <div class="h-[400px] flex w-full justify-center">
                            <div
                                class="flex flex-col gap-6 items-center justify-between w-full max-w-xs rounded-xl bg-gray-50 p-6 py-8 shadow-lg dark:bg-neutral-700">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore totam
                                    quisquam magnam laboriosam ipsam commodi quas vel dignissimos placeat?
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                        class="w-16 h-16 rounded-full">
                                    <div class="text-left">
                                        <div class="font-semibold text-lime-500">Hartanto Santoso</div>
                                        <div class="text-base">Batch 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[400px] flex w-full justify-center">
                            <div
                                class="flex flex-col gap-6 items-center justify-between w-full max-w-xs rounded-xl bg-gray-50 p-6 py-8 shadow-lg dark:bg-neutral-700">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore totam
                                    quisquam magnam laboriosam ipsam commodi quas vel dignissimos placeat?
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                        class="w-16 h-16 rounded-full">
                                    <div class="text-left">
                                        <div class="font-semibold text-lime-500">Hartanto Santoso</div>
                                        <div class="text-base">Batch 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[400px] flex w-full justify-center">
                            <div
                                class="flex flex-col gap-6 items-center justify-between w-full max-w-xs rounded-xl bg-gray-50 p-6 py-8 shadow-lg dark:bg-neutral-700">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore totam
                                    quisquam magnam laboriosam ipsam commodi quas vel dignissimos placeat?
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                        class="w-16 h-16 rounded-full">
                                    <div class="text-left">
                                        <div class="font-semibold text-lime-500">Hartanto Santoso</div>
                                        <div class="text-base">Batch 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[400px] flex w-full justify-center">
                            <div
                                class="flex flex-col gap-6 items-center justify-between w-full max-w-xs rounded-xl bg-gray-50 p-6 py-8 shadow-lg dark:bg-neutral-700">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore totam
                                    quisquam magnam laboriosam ipsam commodi quas vel dignissimos placeat?
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                        class="w-16 h-16 rounded-full">
                                    <div class="text-left">
                                        <div class="font-semibold text-lime-500">Hartanto Santoso</div>
                                        <div class="text-base">Batch 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[400px] flex w-full justify-center">
                            <div
                                class="flex flex-col gap-6 items-center justify-between w-full max-w-xs rounded-xl bg-gray-50 p-6 py-8 shadow-lg dark:bg-neutral-700">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore totam
                                    quisquam magnam laboriosam ipsam commodi quas vel dignissimos placeat?
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                        class="w-16 h-16 rounded-full">
                                    <div class="text-left">
                                        <div class="font-semibold text-lime-500">Hartanto Santoso</div>
                                        <div class="text-base">Batch 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="h-[400px] flex w-full justify-center">
                            <div
                                class="flex flex-col gap-6 items-center justify-between w-full max-w-xs rounded-xl bg-gray-50 p-6 py-8 shadow-lg dark:bg-neutral-700">
                                <div>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolore totam
                                    quisquam magnam laboriosam ipsam commodi quas vel dignissimos placeat?
                                </div>
                                <div class="flex items-center gap-3">
                                    <img src="{{ asset('img/jose-vazquez-Q5RBHz9cu1A-unsplash.jpg') }}" alt=""
                                        class="w-16 h-16 rounded-full">
                                    <div class="text-left">
                                        <div class="font-semibold text-lime-500">Hartanto Santoso</div>
                                        <div class="text-base">Batch 2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button
                    class="swiper-button-prev mt-3 border h-10 w-10 pr-0.5 bg-lime-500 active:bg-lime-600 active:scale-95 transition opacity-50 hover:opacity-100 shadow rounded-full">
                </button>
                <div
                    class="swiper-button-next mt-3 border h-10 w-10 pr-0.5 bg-lime-500 active:bg-lime-600 active:scale-95 transition opacity-50 hover:opacity-100 shadow rounded-full">
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/parallaxHero.js') }}"></script>
<script src="{{ asset('js/vidSwiper.js') }}"></script>
<script src="{{ asset('js/reveal.js') }}"></script>
@endsection
