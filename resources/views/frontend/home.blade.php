@extends('layouts.frontend')


@section('content')
    <div class="relative bg-bg1">
        <div class="bg-bg1 miring overflow-hidden relative z-50 md:h-[118vh] h-[110vh]">
            <div
                class="relative top-[65px] rata pt-[30px] px-5 md:px-[40px] lg:px-[100px] xl:px-[150px] h-full md:pr-[20px]">

                <x-nav-bar />

                <div class="h-full flex flex-col-reverse md:flex-row justify-between gap-">
                    <div class="md:self-center relative z-50 mb-[180px] sm:mb-[200px] md:mb-[80px]">
                        <div
                            class="flex items-center gap-5 sm:mb-[40px] mb-5 xl:mb-[70px] text-3xl md:text-4xl text-primary">
                            <div class="ig cursor-pointer hover:text-secondary duration-300">
                                <i class="fa-brands fa-instagram"></i>
                            </div>
                            <div class="linked cursor-pointer hover:text-secondary duration-300">
                                <i class="fa-brands fa-linkedin"></i>
                            </div>
                            <div class="git cursor-pointer hover:text-secondary duration-300">
                                <i class="fa-brands fa-github"></i>
                            </div>
                        </div>

                        <div class="w-[100px] h-[6px] md:h-[8px] bg-secondary sm:mb-[30px] mb-5"></div>

                        <div
                            class="fonseca name text-[40px] sm:text-[70px] lg:text-[90px] xl:text-[130px] leading-[55px] sm:leading-[70px] lg:leading-[100px] xl:leading-[130px] z-[999] relative text-white">
                            LUTHFI <br>
                            GINTING.
                        </div>
                    </div>
                    <div
                        class="w-full md:max-w-fit md:text-start text-center self-start justify-self-end relative top-[50px] md:mt-[50px]">
                        <div
                            class="desc text-[22px] sm:text-[26px] lg:text-3xl xl:text-4xl fonseca text-white mb-2 md:mb-9">
                            Indonesian
                            <span class="text-primary md:block fonseca">FULLSTACK</span> <br class="block md:hidden">
                            Developer and <br class="hidden md:block"> Editor
                        </div>

                        {{-- <div
                    class="more cursor-pointer pb-1 border-b-2 border-secondary max-w-fit flex items-center gap-[55px] gotham-medium text-xl text-secondary">

                </div> --}}

                        <button data-text="Awesome" class="button desc">
                            <span class="actual-text flex whitespace-nowrap">
                                <div class="text-2xl xl:text-3xl">&nbsp;about me&nbsp;</div>
                            </span>
                            <span class="hover-text flex items-center gap-2 whitespace-nowrap" aria-hidden="true">
                                <div class="text-2xl xl:text-3xl">&nbsp;about me&nbsp;</div>
                                <i class="fa-solid fa-forward text-2xl"></i>
                            </span>
                        </button>

                    </div>
                </div>
            </div>
            <img src="{{ asset('images/background.png') }}"
                class="gw rata-background h-auto sm:h-[600px] md:h-[750px] xl:h-[820px] sm:w-auto w-full z-[-999] absolute bottom-[-32px] md:bottom-[-42px] right-0 left-0 mx-auto"
                alt="">
        </div>

        <div
            class="bg-bg2 relative top-[-140px] sml:px-10 md:px-[70px] lg:px-[100px] xl:px-[180px] pt-[150px] lg:pt-[200px] z-20">
            <div class="flex md:flex-row flex-col justify-between max-sml:px-5  gap-10 lg:gap-0">
                <div class="about1 flex flex-col items-start md:w-1/2 lg:w-2/5">
                    <div class="gotham-light text-lg lg:text-xl text-primary mb-5 relative sm:left-[-12px]">&#x2022;
                        About
                    </div>
                    <div
                        class="gotham-bold headline text-xl sm:text-2xl lg:text-3xl text-white sm:leading-[40px] mb-3 s:mb-5">
                        High school
                        student,
                        who develops
                        application</div>

                    <div
                        class="gotham-medium sm:text-lg lg:text-xl text-[#EEEEEE] sm:leading-[30px] lg:leading-[42px] mb-11">
                        I Study in a IT School, Based in indonesia, we learn technologies and development.
                    </div>

                    <div
                        class="cursor-pointer text-secondary sm:text-lg lg:text-xl gotham-medium flex items-center max-w-fit underline-hover">
                        <i class="mr-10">kodeintekno.com</i>
                        <i class="fa-solid fa-forward arrow"></i>
                    </div>


                </div>

                <div class="flex flex-col md:w-1/2 lg:w-[45%]">
                    <div class="about2">
                        <div class="gotham-bold text-xl sm:text-2xl lg:text-3xl text-white sm:leading-[42px] mb-3 sm:mb-5">
                            Experience is the
                            name everyone
                            gives
                            to
                            their mistakes.</div>

                        <div
                            class="gotham-medium sm:text-lg lg:text-xl text-[#EEEEEE] sm:leading-[30px] lg:leading-[42px] mb-11">
                            Start learning to develop when i went to high school, from website, mobile and fullstack
                            development.
                        </div>
                    </div>

                    <div
                        class="flex max-sm:flex-wrap sm:justify-between justify-center items-center relative cube min-w-fit gap-2  sml:gap-10 md:gap-5 px-3 lg:px-6">
                        <div class="about3 flex gap-3 sml:gap-6 md:gap-3 lg:gap-6 items-center">
                            <div
                                class="fonseca text-[32px] sm:text-[50px] sml:text-[70px] md:text-[50px] lg:text-[70px] text-primary">
                                3</div>
                            <div class="gotham-bold text-sm sm:text-xl sml:text-2xl md:text-xl lg:text-2xl text-white">
                                Years of
                                <br>
                                Experience
                            </div>
                        </div>

                        <div class="about4 flex gap-3 sml:gap-6 md:gap-3 lg:gap-6 items-center">
                            <div
                                class="fonseca text-[32px] sm:text-[50px] sml:text-[70px] md:text-[50px] lg:text-[70px] text-primary">
                                24</div>
                            <div class="gotham-bold text-sm sm:text-xl sml:text-2xl md:text-xl lg:text-2xl text-white">
                                Projects
                                <br> Finished
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <x-home.card />

        </div>


        {{-- <x-home.works /> --}}

        <div class="w-full text-center pt-[220px] relative top-[-140px] fonseca text-3xl">
            THIS WEBSITE IS ON DEVELOP
        </div>

        {{-- <x-chat-bot /> --}}




        {{-- <button id="contact-btn" onclick="contactBtn()"
            class="floating-contact fixed right-5 bottom-5 md:right-10 md:bottom-10 z-[999] flex items-center justify-center transition-all">
            <i class="fa-regular fa-message text-4xl "></i>
            <div class="contact-me ml-2 gotham-medium">Contact me</div>
        </button> --}}
    </div>
@endsection
