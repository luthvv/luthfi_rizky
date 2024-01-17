@extends('layouts.frontend')


@section('content')
    @php
        $name = ['Qatar the Desert Jewel', 'Assassins Creed Saber VFX', 'Gabut Malem', 'Chaos Apartment', 'Pancatuy(ST 05) Makrab after movie', 'Mobile Legends Hologram VFX', 'Rain City'];
        $video = ['https://www.youtube.com/embed/-aplEdbLfIs?si=mTph_gQ_pL0Amfjg', 'https://www.youtube.com/embed/HOAAxBnEplg?si=sRBd1lUkYwloPvOv', 'https://www.youtube.com/embed/xZyZFehz5HQ?si=xIV8wVENffEXwtdK', 'https://www.youtube.com/embed/ysInGCbB1xo?si=YK4C8vsm4kYr0pes', 'https://www.youtube.com/embed/HILnoV5a01U?si=03IV-Rw9HjlEMj_h', 'https://www.youtube.com/embed/3vot1YWTAnQ?si=3U-CR-VnAS4B3LXB', 'https://www.youtube.com/embed/wQ72XeMFc-4?si=d5UQdzjeBSadHbur'];
        $types = [['4K', 'Cinematic'], ['VFX', 'HD'], ['4K', 'Cinematic'], ['VFX'], ['HD'], ['VFX', 'HD'], ['4K', 'Cinematic']];
        $desc = ['Journey through Qatar, the Desert Jewel, where ancient sands meet modern marvels, and tradition dances with opulence in a radiant tapestry of history and innovation', 'Assassins creed logo intro using Saber VFX', 'Only gabut actually', 'Chaos destruction effect, doctor strange reference', 'Pancatuy`s makrab after movie', '3D Hologram Mobile Legends VFX Using After Effect', 'Bogor, often referred to as the "Rain City" of Indonesia, is a haven of tranquility. Its lush landscapes, iconic Botanical Gardens, historic Bogor Palace, delectable cuisine, and rich culture define the serene charm of this remarkable city'];
    @endphp
    <div class="relative bg-bg1">
        <div class="relative pt-[30px] pb-44 px-5 md:px-[40px] lg:px-[100px] xl:px-[150px] h-full md:pr-[20px] min-h-screen">

            <x-nav-bar />
            <div class="mt-24 grid xl:grid-cols-3 md:grid-cols-2 lg:gap-16 sml:gap-12 gap-16">
                {{-- {{ $type[0][1] }} --}}
                @for ($i = 0; $i < count($video); $i++)
                    <div class="bg-bg2 rounded-md flex flex-col justify-between">
                        <div class="flex justify-center items-center leading-none">
                            {{-- <img src="https://images.unsplash.com/photo-1585554414787-09b821c321c0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                                alt="pic"
                                class="w-4/5 rounded-md shadow-2xl mt-6 transform -translate-y-10 hover:-translate-y-2 transition duration-700" /> --}}

                            {{-- <video class="" autoplay>
                                <source src="{{ asset('video/ml.mp4') }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                Your browser does not support the video tag.
                            </video> --}}
                            <iframe
                                class="w-5/6 h-[250px] rounded-md shadow-2xl mt-6 transform -translate-y-10 hover:-translate-y-2 transition duration-700"
                                src="{{ $video[$i] }}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>


                        </div>

                        <div class="p-5 pt-1 flex flex-col items-start">
                            <p class="block mb-2 gotham-medium text-xl font-black font-medium"> {{ $name[$i] }}
                            </p>
                            <p class="tracking-tighter text-black mb-2 max-sml:text-sm gotham-light">
                                {{ $desc[$i] }}
                            </p>
                            <div class="self-end">
                                @if ($name[$i] == 'Qatar the Desert Jewel' || $name[$i] == 'Gabut Malem' || $name[$i] == 'Rain City')
                                    <span
                                        class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">4K</span>
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Cinematic</span>
                                @else
                                    @if ($name[$i] == 'Pancatuy(ST 05) Makrab after movie')
                                        <span
                                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">HD</span>
                                    @else
                                        <span
                                            class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">VFX</span>
                                        <span
                                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">HD</span>
                                    @endif
                                @endif

                                {{-- @if ($name[$i] == 'Qatar the Desert Jewel' || $name[$i] == 'Gabut Malem' || $name[$i] == 'Rain City')
                                    <span
                                        class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">4K</span>
                                    <span
                                        class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Cinematic</span>
                                @endif --}}
                                {{-- @foreach ($types as $type)
                                    <span
                                        class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">{{ $type[0] }}</span>
                                @endforeach --}}
                            </div>

                        </div>
                    </div>
                @endfor
            </div>



        </div>
    </div>
@endsection
