@extends('layouts.main')
@section('title', 'Leaderboard -')
@section('content')

<div class="w-11/12 mx-auto py-14">
    <div class="text-4xl font-medium text-lime-500 drop-shadow mb-5">Leaderboard of Program</div>
    <div class="flex justify-between items-end mb-4">
        <div class="flex items-center gap-4">
            <div class="text-gray-500">Program :</div>
            <div class="relative border rounded border-gray-50" data-te-dropdown-ref>
                <a class="bg-white cursor-pointer text-gray-900 flex items-center whitespace-nowrap rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal shadow-lg  transition duration-150 ease-in-out hover:bg-gray-100 focus:bg-gray-100 motion-reduce:transition-none"
                    type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref aria-expanded="false"
                    data-te-ripple-init data-te-ripple-color="light">
                    {{ (request('program') == 1) ? 'Web' : '' }}
                    {{ (request('program') == 2) ? 'Flutter' : '' }}
                    {{ (request('program') == 3) ? 'UI/UX' : '' }}
                    {{ (request('program') == 4) ? 'Kotlin' : '' }}
                    {{ (request('program') == 5) ? 'English' : '' }}
                    {{ (request('program') == null) ? 'All Programs' : '' }}
                    <span class="ml-2 w-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </a>
                <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                    aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                    @if (request('program'))
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="/leaderboard" data-te-dropdown-item-ref>All Programs</a>
                    </li>
                    @endif
                    @foreach ($programs as $program)
                    @if (request('program') != $program->id)
                    <li>
                        <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                            href="/leaderboard?program={{ $program->id }}" data-te-dropdown-item-ref>{{ $program->name
                            }}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div>
            <div class="flex gap-3 justify-end mb-4">
                <div class="relative border rounded border-gray-50" data-te-dropdown-ref>
                    <a class="bg-white text-gray-900 flex items-center whitespace-nowrap rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal shadow-lg  transition duration-150 ease-in-out hover:bg-gray-100 focus:bg-gray-100 motion-reduce:transition-none"
                        href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                        aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                        Batch
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Data Science</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Web Design</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>UI / UX</a>
                        </li>
                    </ul>
                </div>
                <div class="relative border rounded border-gray-50" data-te-dropdown-ref>
                    <a class="bg-white text-gray-900 flex items-center whitespace-nowrap rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal shadow-lg  transition duration-150 ease-in-out hover:bg-gray-100 focus:bg-gray-100 motion-reduce:transition-none"
                        href="#" type="button" id="dropdownMenuButton2" data-te-dropdown-toggle-ref
                        aria-expanded="false" data-te-ripple-init data-te-ripple-color="light">
                        Sort by
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:bg-neutral-700 [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButton2" data-te-dropdown-menu-ref>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Data Science</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>Web Design</a>
                        </li>
                        <li>
                            <a class="block w-full whitespace-nowrap bg-transparent py-2 px-4 text-sm font-normal text-neutral-700 hover:bg-neutral-100 active:text-neutral-800 active:no-underline disabled:pointer-events-none disabled:bg-transparent disabled:text-neutral-400 dark:text-neutral-200 dark:hover:bg-neutral-600"
                                href="#" data-te-dropdown-item-ref>UI / UX</a>
                        </li>
                    </ul>
                </div>
            </div>
            <form action="">
                <div class="shadow-lg flex overflow-hidden rounded bg-white group border border-gray-50">
                    <button class="h-10 w-10 flex items-center justify-center group group-hover:bg-slate-100 ">
                        <i class="fa-sharp fa-solid fa-magnifying-glass text-gray-400 group-hover:text-gray-500"></i>
                    </button>
                    <input type="text" class="outline-none group-hover:bg-slate-100 w-[300px]" name="search"
                        placeholder="Search">
                </div>
            </form>
        </div>
    </div>
    <div class="flex flex-col mb-3">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b-2 font-medium border-lime-600/50">
                            <tr>
                                <th scope="col" class="px-6 py-4">Rank</th>
                                <th scope="col" class="px-6 py-4">Nama Peserta</th>
                                <th scope="col" class="px-6 py-4">Sekolah</th>
                                <th scope="col" class="px-6 py-4">Program</th>
                                <th scope="col" class="px-6 py-4">Angkatan</th>
                                <th scope="col" class="px-6 py-4">Skor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participants as $participant)
                            <tr class="border-b dark:border-neutral-300">
                                <td class="whitespace-nowrap px-6 py-2 font-medium">{{ $participant->rank }}</td>
                                <td class="whitespace-nowrap px-6 py-2">{{ $participant->name }}</td>
                                <td class="whitespace-nowrap px-6 py-2">{{ $participant->school }}</td>
                                <td class="whitespace-nowrap px-6 py-2">{{ $participant->program->name }}</td>
                                <td class="whitespace-nowrap px-6 py-2">{{ $participant->generation }}</td>
                                <td class="whitespace-nowrap px-6 py-2">{{ $participant->score }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
        {{ $participants->withQueryString()->links('pagination::tailwind') }}
    </div>
</div>
@endsection
