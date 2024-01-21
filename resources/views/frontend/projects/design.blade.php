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

            <x-frontend.nav-bar />
            <div class="fonseca text-5xl text-center flex items-center justify-center mt-44 text-white">
                <div class="fonseca">COMING SOON</div>
            </div>



        </div>
    </div>
@endsection
