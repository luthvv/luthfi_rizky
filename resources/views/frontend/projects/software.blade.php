@extends('layouts.frontend')


@section('content')
    @php
        $image = ['aqiqah', 'calvary', 'shadaqu', 'lmp', 'tekno'];
        $name = ['Restu Aqiqah', 'Calvary Music', 'Shadaqu App', 'LMP Networks', 'Kodein Tekno'];
        $desc = ['A company profile website from Restu Aqiqah', 'Music streaming platform that i created using Vue JS and using API from Shazam', 'Muslim mobile app for pray time reminder, quran, everyday zikr, weather information, and qibla finder', 'A company profile website for PT.LMP Networks', 'A company profile website for PT.Kodein Tekno'];

        $link = ['http://restuaqiqah.com/', 'https://calvary.netlify.app/', 'https://github.com/ZoD3V/SholatApp', 'https://lmp-global.com/', 'https://kodeintekno.com/'];
    @endphp
    <div class="relative bg-bg1">
        <div class="relative pt-[30px] pb-44 px-5 md:px-[40px] lg:px-[100px] xl:px-[150px] h-full md:pr-[20px] min-h-screen">

            <x-nav-bar />
            <div class="mt-24 grid xl:grid-cols-3 md:grid-cols-2 lg:gap-16 sml:gap-12 gap-16">
                @for ($i = 0; $i < 5; $i++)
                    <div class="bg-bg2 rounded-md flex flex-col justify-between">
                        <div class="flex justify-center items-center leading-none">
                            <img src="{{ asset('software/' . $image[$i] . '.jpg') }}" alt="pic"
                                class="w-4/5 rounded-md shadow-2xl mt-6 transform -translate-y-10 hover:-translate-y-2 transition duration-700" />


                        </div>

                        <div class="p-5 pb-7 pt-1 flex flex-col items-start">
                            <p class="block mb-2 gotham-medium text-xl font-black font-medium">{{ $name[$i] }}</p>
                            <p class="tracking-tighter text-black mb-4">
                                {{ $desc[$i] }}
                            </p>
                            <div class="self-end">
                                <a href="{{ $link[$i] }}"
                                    class="bg-secondary duration-300 hover:bg-primary text-white font-bold py-2 px-4 rounded">
                                    Visit Website ->
                                </a>
                            </div>

                        </div>
                    </div>
                @endfor
            </div>



        </div>
    </div>
@endsection
