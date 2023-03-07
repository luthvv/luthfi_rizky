<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Luthfi Rizky</title>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        black: '#282828',
                        abu: '#D9D9D9',
                        bg1: '#DBD9D7',
                        bg2: '#D6C5BD',
                        primary: '#2A3145',
                        secondary: '#A25D50'
                    },
                },
                screens: {
                    'sm': '420px',
                    // => @media (min-width: 640px) { ... }
                    'sml': '640px',
                    // => @media (min-width: 640px) { ... }

                    'md': '768px',
                    // => @media (min-width: 768px) { ... }

                    'lg': '1024px',
                    // => @media (min-width: 1024px) { ... }

                    'xl': '1280px',
                    // => @media (min-width: 1280px) { ... }

                    '2xl': '1536px',
                    // => @media (min-width: 1536px) { ... }
                }
            }
        }
    </script>
</head>

<body>
    <div class="relative bg-bg1">
        <div class="bg-bg1 miring overflow-hidden relative z-50 md:h-[118vh] h-[110vh]">
            <div
                class="relative top-[65px] rata pt-[30px] px-5 md:px-[40px] lg:px-[100px] xl:px-[150px] h-full md:pr-[20px]">
                <div
                    class="flex gap-[20px] sm:gap-[40px] text-[22px] sm:text-[26px] lg:text-[30px] justify-between sm:justify-center lg:justify-start w-fulls">
                    <div class="cursor-pointer fonseca text-white relative dot">Home</div>
                    <div class="cursor-pointer fonseca opacity-60 hover:opacity-100 transition duration-150 text-white">
                        Works
                    </div>
                    <div class="cursor-pointer fonseca opacity-60 hover:opacity-100 transition duration-150 text-white">
                        Service
                    </div>
                </div>

                <div class="h-full flex flex-col-reverse md:flex-row justify-between gap-">
                    <div class="md:self-center relative z-50 mb-[180px] sm:mb-[200px] md:mb-[80px]">
                        <div class="flex items-center gap-5 mb-[40px] xl:mb-[70px] text-3xl md:text-4xl text-primary">
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

                        <div class="w-[100px] h-[6px] md:h-[8px] bg-secondary mb-[30px]"></div>

                        <div
                            class="fonseca name text-[50px] sm:text-[70px] lg:text-[90px] xl:text-[130px] leading-[55px] sm:leading-[70px] lg:leading-[100px] xl:leading-[130px] z-[999] relative text-white">
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

                        <button data-text="Awesome" class="button">
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
                class="gw rata-background h-[520px] sm:h-[600px] md:h-[750px] xl:h-[820px] w-auto z-[-999] absolute bottom-[-32px] md:bottom-[-42px] right-0 left-0 m-auto"
                alt="">
        </div>

        <div
            class="bg-bg2 relative top-[-140px] px-5 sm:px-8 sml:px-10 md:px-[70px] lg:px-[100px] xl:px-[180px] pt-[150px] lg:pt-[200px] pb-[250px] z-20">
            <div class="flex md:flex-row flex-col justify-between gap-10 lg:gap-0">
                <div class="about1 flex flex-col items-start md:w-1/2 lg:w-2/5">
                    <div class="gotham-light text-lg lg:text-xl text-primary mb-5 relative sm:left-[-12px]">&#x2022;
                        About
                    </div>

                    <div
                        class="gotham-bold text-xl sm:text-2xl lg:text-3xl text-white leading-[30px] sm:leading-[40px] mb-3 s:mb-5">
                        High school
                        student,
                        who develops
                        application</div>

                    <div
                        class="gotham-medium text-md sm:text-lg lg:text-xl text-[#EEEEEE] sm:leading-[30px] lg:leading-[42px] mb-8 sm:mb-11">
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
                        <div
                            class="gotham-bold text-xl sm:text-2xl lg:text-3xl text-white leading-[30px] sm:leading-[42px] mb-3 sm:mb-5">
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
                        class="flex justify-between items-center relative cube min-w-fit gap-2  sml:gap-10 md:gap-5 px-3 lg:px-6">
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
            <div class="flex gap-[40px] absolute justify-center left-[180px] right-[180px] bottom-[-150px]">
                <div
                    class="block1 cursor-pointer h-[300px] w-full duration-300 bg-bg1 hover:bg-secondary flex items-end justify-center pb-10 shadow-xl">
                    <div class="flex gap-6">
                        <i class="text-4xl text-white fa-solid fa-laptop mt-4"></i>
                        <div>
                            <div class="text-white gotham-medium text-3xl mb-4">Website <br> Developer.</div>
                            <div class="text-xl gotham-light text-white">8 Project</div>
                        </div>
                    </div>
                </div>

                <div
                    class="block2 cursor-pointer h-[300px] w-full duration-300 bg-bg1 hover:bg-secondary flex items-end justify-center pb-10 shadow-xl">
                    <div class="flex gap-6">
                        <i class="fa-solid fa-mobile-screen-button text-4xl text-white mt-5"></i>
                        <div>
                            <div class="text-white gotham-medium text-3xl mb-4">Mobile <br> Developer.</div>
                            <div class="text-xl gotham-light text-white">8 Project</div>
                        </div>
                    </div>
                </div>

                <div
                    class="block3 cursor-pointer h-[300px] w-full duration-300 bg-bg1 hover:bg-secondary flex items-end justify-center pb-10 shadow-xl">
                    <div class="flex gap-6">
                        <i class="fa-solid fa-pen-ruler text-4xl text-white mt-5"></i>
                        <div>
                            <div class="text-white gotham-medium text-3xl mb-4">UI / UX <br> Design.</div>
                            <div class="text-xl gotham-light text-white">8 Project</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=" w-full px-[180px] pt-[220px] relative top-[-140px] pb-12 bg-bg1">
            <div class="gotham-light text-xl text-primary mb-5 relative left-[-12px]">&#x2022; Works</div>
            <div class="flex justify-between items-end">
                <div class="fonseca text-5xl mb-7 text-white">Some of my <br> feature <span
                        class="text-primary fonseca">projects.</span>
                </div>
                <div
                    class="more cursor-pointer pb-1 max-w-fit flex items-center gap-[70px] gotham-medium text-xl text-secondary underline-hover">
                    <div class="gotham-medium">More Projects</div>
                    <i class="fa-solid fa-forward arrow"></i>
                </div>
            </div>
            <div class="gotham-medium text-xl text-white mb-12">Project that i made with my team, <br> and some i made
                it bt
                my
                self
            </div>
            <div class="card-grid m-auto">
                <a class="card" href="#">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)">
                    </div>
                    <div class="card__content">
                        <p class="font-bold text-[36px] text-white">Financiluc</p>
                        <h3 class="text-white">PT. Halo lab</h3>
                    </div>
                </a>
                <a class="card" href="#">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)">
                    </div>
                    <div class="card__content">
                        <p class="font-bold text-[36px] text-white">Financiluc</p>
                        <h3 class="text-white">PT. Halo lab</h3>
                    </div>
                </a>
                <a class="card" href="#">
                    <div class="card__background"
                        style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)">
                    </div>
                    <div class="card__content">
                        <p class="font-bold text-[36px] text-white">Financiluc</p>
                        <h3 class="text-white">PT. Halo lab</h3>
                    </div>
                </a>
            </div>
        </div>

        <button id="contact-btn" onclick="contactBtn()"
            class="floating-contact fixed right-5 bottom-5 md:right-10 md:bottom-10 z-[999] flex items-center justify-center transition-all">
            <i class="fa-regular fa-message text-4xl "></i>
            <div class="contact-me ml-2 gotham-medium">Contact me</div>
        </button>

        <div id="contact-section"
            class="fixed right-[-400px] bottom-10 z-[999] card-contact shadow-2xl gotham-medium flex transition-all duration-500">
            <div class="relative z-10">

                <div id="cancelContact"
                    class="cursor-pointer absolute right-5 top-5 z-10 bg-white rounded-md p-1 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-bg1 transition-all">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>


                <div class="bg-[#B78677] flex flex-col items-center justify-center py-4 z-10 w-full">
                    <div class="gotham-light text-white mb-2">Send a message</div>
                    <div class="w-20 h-20 rounded-full border-[3px] border-abu mb-1">
                        <img src="{{ asset('images/pp.jpg') }}" class="rounded-full h-full w-full" alt="">
                    </div>

                    <div class="gotham-medium text-lg text-white">Luthfi</div>
                    <div class="gotham-light text-white">How can i help you?</div>

                </div>
                <form action="" class="px-8 pt-8 pb-6 h-[60vh] overflow-y-scroll">
                    <div class="form-control mb-7">
                        <input type="text" name="name" required="">
                        <label class="text-black"><span style="">N</span><span
                                style="transition-delay:150ms">a</span><span
                                style="transition-delay:200ms">m</span><span style="transition-delay:300ms">e</span>
                        </label>
                    </div>

                    <div class="form-control mb-7">
                        <input type="text" name="subject" required="">
                        <label class="text-black">
                            <span style="transition-delay:0ms">S</span><span
                                style="transition-delay:50ms">u</span><span
                                style="transition-delay:100ms">b</span><span
                                style="transition-delay:150ms">j</span><span
                                style="transition-delay:200ms">e</span><span
                                style="transition-delay:250ms">c</span><span style="transition-delay:250ms">t</span>
                        </label>
                    </div>

                    <div class="form-control mb-7">
                        <input type="email" name="email" required="">
                        <label class="text-black">
                            <span style="transition-delay:0ms">E</span><span
                                style="transition-delay:50ms">m</span><span
                                style="transition-delay:100ms">a</span><span
                                style="transition-delay:150ms">i</span><span style="transition-delay:200ms">l</span>
                        </label>
                    </div>

                    <div class="flex justify-center">
                        <div class="relative mb-3 w-full relative z-[99]" data-te-input-wrapper-init>
                            <textarea name="message"
                                class="peer min-h-[auto] w-full rounded border-2 border-abu focus:border-secondary bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-black dark:placeholder:text-black [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                                id="content" rows="3" placeholder="Your message"></textarea>
                            <label for="content"
                                class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:bg-white peer-data-[te-input-state-active]:px-1 peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-abu dark:peer-focus:text-secondary dark:peer-focus:bg-white dark:peer-focus:px-1">Write
                                Your Message</label>
                        </div>



                    </div>

                    <button type="submit" class="send relative z-10 w-full justify-center bg-bg2 hover:bg-[#B78677]">
                        <div class="svg-wrapper-1">
                            <div class="svg-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path fill="currentColor"
                                        d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <span>Send</span>
                    </button>
                </form>
            </div>

        </div>

        <div id="chat-section"
            class="fixed right-[-380px] bottom-10 z-[999] shadow-2xl gotham-medium transition-all duration-500 w-1/4 rounded-b-[10px]">

            <div class="bg-[#B78677] flex items-center justify-between py-3 px-5 z-10 w-full rounded-t-[10px]">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full border-[3px] border-abu mb-1">
                        <img src="{{ asset('images/pp.jpg') }}" class="rounded-full h-full w-full" alt="">
                    </div>

                    <div class="text-white">
                        <div class="font-bold text-lg">Luthv Bot</div>
                        <div class="">Ask me something</div>
                    </div>
                </div>

                <div id="cancelChat"
                    class="cursor-pointer z-10 bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-bg1 transition-all">
                    <span class="sr-only">Close menu</span>
                    <!-- Heroicon name: outline/x -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>

            </div>

            <div
                class="flex flex-col relative z-10 w-full drop drop-1 rounded-b-[10px] p-5 gap-4 overflow-y-scroll h-[70vh]">

                <div id="chat-sub-section" class="flex flex-col gap-2">
                    <div class="chat-bubble-bot chat-opening delay-[500ms] transition opacity-0 bottom-[-20px]">
                        Hello!
                    </div>

                    <div class="chat-bubble-bot chat-opening  delay-[1000ms] transition opacity-0 bottom-[-20px]">
                        Im LUTHFI'S Bot! Im here to help you with your question
                    </div>
                    <div class="chat-bubble-bot chat-opening delay-[1500ms] transition opacity-0 bottom-[-20px]">
                        What would you like to do?
                    </div>

                </div>

                <div id="user-interaction"
                    class="opacity-0 delay-[2000ms] transition flex flex-col gap-2 font-bold relative">
                    <div id="greet" class="chat-interaction">
                        Just want to greet!
                    </div>

                    <div id="cv" class="chat-interaction">
                        I want too see your CV!
                    </div>

                    <div id="contact" class="chat-interaction">
                        Can we contact you?
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social-icon">
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-github"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a></li>
                <li class="social-icon__item"><a class="social-icon__link" href="#">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
            </ul>
            <ul class="menu">
                <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
                <li class="menu__item"><a class="menu__link" href="#">About</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
                <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
                <li class="menu__item cursor-pointer" onclick="contactBtn()"><a class="menu__link">Contact</a></li>

            </ul>
            <p>&copy;2021 Nadine Coelho | All Rights Reserved</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>


    <style>
        .footer {
            position: relative;
            width: 100%;
            background: #D6C5BD;
            min-height: 100px;
            padding: 20px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .social-icon,
        .menu {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
            flex-wrap: wrap;
        }

        .social-icon__item,
        .menu__item {
            list-style: none;
        }

        .social-icon__link {
            font-size: 2rem;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
        }

        .social-icon__link:hover {
            transform: translateY(-10px);
        }

        .menu__link {
            font-size: 1.2rem;
            color: #fff;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
            text-decoration: none;
            opacity: 0.75;
            font-weight: 300;
        }

        .menu__link:hover {
            opacity: 1;
        }

        .footer p {
            color: #fff;
            margin: 15px 0 10px 0;
            font-size: 1rem;
            font-weight: 300;
        }

        .wave {
            position: absolute;
            top: -100px;
            left: 0;
            width: 100%;
            height: 100px;
            background: url('https://i.ibb.co/j8Qt7DW/wave.png');
            background-size: 1000px 100px;
        }

        .wave#wave1 {
            z-index: 10;
            opacity: 1;
            bottom: 0;
            animation: animateWaves 4s linear infinite;
        }

        .wave#wave2 {
            z-index: 9;
            opacity: 0.5;
            bottom: 10px;
            animation: animate 4s linear infinite !important;
        }

        .wave#wave3 {
            z-index: 10;
            opacity: 0.2;
            bottom: 15px;
            animation: animateWaves 3s linear infinite;
        }

        .wave#wave4 {
            z-index: 9;
            opacity: 0.7;
            bottom: 20px;
            animation: animate 3s linear infinite;
        }

        @keyframes animateWaves {
            0% {
                background-position-x: 1000px;
            }

            100% {
                background-positon-x: 0px;
            }
        }

        @keyframes animate {
            0% {
                background-position-x: -1000px;
            }

            100% {
                background-positon-x: 0px;
            }
        }

        .chat-bubble-bot {
            align-self: start;
            transition-duration: 500ms;
            position: relative;
            border-radius: 0 10px 10px 10px;
            background: #2d3548;
            color: #D9D9D9;
            padding: 14px;
            max-width: fit-content;
        }

        .chat-bubble-user {
            align-self: end;
            position: relative;
            transition-duration: 500ms;
            background: #A25D50;
            color: #D9D9D9;
            padding: 14px;
            border-radius: 10px 0 10px 10px;
            max-width: fit-content;
        }

        .chat-interaction {
            position: relative;
            cursor: pointer;
            background: transparent;
            color: #B78677;
            padding: 16px 20px;
            border-radius: 999px;
            border: 3px #B78677 solid;
            max-width: fit-content;
        }

        .chat-interaction:hover {
            color: #A25D50;
            border: 3px #A25D50 solid;
        }


        .drop {
            background: rgba(197, 197, 197, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
            margin: 0 auto;
        }

        .drop1 {
            backdrop-filter: blur(7px);
            -webkit-backdrop-filter: blur(7px);
        }

        .send {
            font-family:
                inherit;
            font-size:
                18px;
            color:
                white;
            padding:
                0.7em 1em;
            padding-left:
                0.9em;
            display:
                flex;
            align-items:
                center;
            border:
                none;
            border-radius:
                5px;
            overflow:
                hidden;
            transition:
                all 0.2s;
        }

        .send span {
            display:
                block;
            margin-left:
                0.3em;
            transition:
                all 0.3s ease-in-out;
        }

        .send svg {
            display:
                block;
            transform-origin:
                center center;
            transition:
                transform 0.3s ease-in-out;
        }

        .send:hover .svg-wrapper {
            animation:
                fly-1 0.6s ease-in-out infinite alternate;
        }

        .send:hover svg {
            transform:
                translateX(1.2em) rotate(45deg) scale(1.1);
        }

        .send:hover span {
            transform:
                translateX(9em);
        }

        .send:active {
            transform:
                scale(0.95);
        }

        @keyframes fly-1 {
            from {
                transform:
                    translateY(0.1em);
            }

            to {
                transform:
                    translateY(-0.1em);
            }
        }


        .form-control {
            position: relative;
            z-index: 999;
            width: 300px;
        }

        .form-control input {
            background-color: transparent;
            border: 0;
            border-bottom: 2px #D9D9D9 solid;
            display: block;
            width: 100%;
            padding: 15px 0 5px 0;
            font-size: 16px;
            color: #282828;
        }

        .form-control input:focus,
        .form-control input:valid {
            outline: 0;
            border-bottom-color: #A25D50;
        }

        .form-control label {
            position: absolute;
            top: 15px;
            left: 0;
            pointer-events: none;
        }

        .form-control label span {
            display: inline-block;
            font-size: 16px;
            min-width: 5px;
            color: #D9D9D9;
            transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .form-control input:focus+label span,
        .form-control input:valid+label span {
            color: #A25D50;
            transform: translateY(-30px);
        }


        .card-contact {
            background: white;
            flex-direction: column;
            place-content: center;
            place-items: center;
            overflow: hidden;
            border-radius: 10px;
        }

        .cacard-contactrd h2 {
            z-index: 1;
            color: white;
            font-size: 2em;
        }

        .card-contact::before {
            content: '';
            position: absolute;
            width: 100px;
            background-image: linear-gradient(180deg, rgb(162, 93, 80), rgb(214, 197, 189));
            height: 130%;
            animation: rotBGimg 3s linear infinite;
            transition: all 0.2s linear;
        }

        @keyframes rotBGimg {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .card-contact::after {
            content: '';
            position: absolute;
            background: white;
            ;
            inset: 5px;
            border-radius: 15px;
        }


        .contact-me {
            position: absolute;
            opacity: 0%;
            transition: 0.5s ease-out;
            white-space: nowrap !important;
        }

        .floating-contact:hover .contact-me {
            position: relative;
            width: 100%;
            display: block;
            opacity: 100%;
        }

        .floating-contact {
            --green: #B78677;
            width: 75px;
            font-size: 15px;
            padding: 1.2em;
            letter-spacing: 0.06em;
            font-family: inherit;
            border-radius: 999px;
            overflow: hidden;
            transition: all 0.3s;
            line-height: 1.4em;
            border: 2px solid var(--green);
            background: linear-gradient(to right, rgba(183, 134, 119, 0.1) 1%, transparent 40%, transparent 60%, rgba(183, 134,
                        119, 0.1) 100%);
            color: var(--green);
            box-shadow: inset 0 0 10px rgba(183, 134, 119, 0.4), 0 0 9px 3px rgba(183, 134, 119, 0.1);
        }

        .floating-contact:hover {
            width: 180px;
            color: #B78677;
            box-shadow: inset 0 0 10px rgba(183, 134, 119, 0.6), 0 0 9px 3px rgba(183, 134, 119, 0.2);
        }

        .floating-contact:before {
            content: "";
            position: absolute;
            left: -4em;
            width: 4em;
            height: 100%;
            top: 0;
            transition: transform .4s ease-in-out;
            background: linear-gradient(to right, transparent 1%, rgba(183, 134, 119, 0.1) 40%, rgba(183, 134, 119, 0.1) 60%,
                    transparent 100%);
        }

        .floating-contact:hover:before {
            transform: translateX(15em);
        }

        .cube {
            z-index: 2;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.2);
            border: 2px solid rgba(255, 255, 255, 0.3);
        }


        .underline-hover::after {
            position: absolute;
            content: "";
            width: 0;
            left: 0;
            /* bottom: -7px; */
            margin-top: 40px;
            background: #A25D50;
            height: 2px;
            transition: 0.3s ease-out;
        }

        .underline-hover:hover::after {
            width: 235px;
        }

        .underline-hover:hover .arrow {
            transform: translateX(10px);
        }

        .arrow {
            transition: 0.2s ease-out;
            position: relative;
        }

        .button {
            margin: 0;
            height: auto;
            background: transparent;
            padding: 0;
            border: none;
        }

        /* button styling */
        .button {
            --border-right: 6px;
            --text-stroke-color: rgba(255, 255, 255, 0.6);
            --animation-color: #A25D50;
            --fs-size: 30px;
            letter-spacing: 3px;
            text-decoration: none;
            font-size: var(--fs-size);
            font-family: 'Gotham', sans-serif;
            font-weight: 500;
            position: relative;
            text-transform: uppercase;
            color: transparent;
            -webkit-text-stroke: 1px var(--text-stroke-color);
        }

        /* this is the text, when you hover on button */
        .hover-text {
            position: absolute;
            box-sizing: border-box;
            content: attr(data-text);
            color: var(--animation-color);
            width: 0%;
            white-space: nowrap;
            inset: 0;
            border-right: var(--border-right) solid var(--animation-color);
            overflow: hidden;
            transition: 0.5s;
            -webkit-text-stroke: 1px var(--animation-color);

        }

        /* hover */
        .button:hover .hover-text {
            width: 125%;
            filter: drop-shadow(0 0 23px var(--animation-color))
        }

        :root {
            --background-dark: #2d3548;
            --text-light: rgba(255, 255, 255, 0.6);
            --text-lighter: rgba(255, 255, 255, 0.9);
            --spacing-s: 8px;
            --spacing-m: 16px;
            --spacing-l: 54px;
            --spacing-xl: 32px;
            --spacing-xxl: 64px;
            --width-container: 100%;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-column-gap: var(--spacing-l);
            grid-row-gap: var(--spacing-l);
            max-width: var(--width-container);
        }

        @media(min-width: 540px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(min-width: 960px) {
            .card-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .card {
            list-style: none;
            position: relative;
        }

        .card:before {
            content: '';
            display: block;
            padding-bottom: 100%;
            width: 100%;
        }

        .card__background {
            background-size: cover;
            background-position: center;
            bottom: 0;
            filter: brightness(0.75) saturate(1.2) contrast(0.85);
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform-origin: center;
            trsnsform: scale(1) translateZ(0);
            transition:
                filter 200ms linear,
                transform 200ms linear;
        }

        .card:hover .card__background {
            transform: scale(1.05) translateZ(0);
        }

        .card-grid:hover>.card:not(:hover) .card__background {
            filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
        }

        .card__content {
            left: 0;
            padding: var(--spacing-l);
            position: absolute;
            bottom: 0;
        }

        .card__category {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: var(--spacing-s);
            text-transform: uppercase;
        }

        .card__heading {
            color: var(--text-lighter);
            font-size: 1.9rem;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
            line-height: 1.4;
            word-spacing: 100vw;
        }

        @font-face {
            font-family: Fonseca;
            font-weight: bold;
            src: url('{{ public_path('fonts/Fonseca.tff') }}');
        }

        @font-face {
            font-family: Gotham;
            font-weight: 700;
            src: url('{{ public_path('fonts/GothamBold.tff') }}');
        }

        @font-face {
            font-family: Gotham;
            font-weight: 500;
            src: url('{{ public_path('fonts/GothamBook.tff') }}');
        }

        @font-face {
            font-family: Gotham;
            font-weight: 600;
            src: url('{{ public_path('fonts/GothamMedium.tff') }}');
        }

        * {
            font-family: 'Inter', sans-serif;
        }

        .dot::after {
            display: flex;
            justify-content: center;
            border-radius: 999px;
            left: 0;
            right: 0;
            height: 8px;
            margin: auto;
            width: 8px;
            position: absolute;
            content: '';
            background-color: #A25D50;
            /* display: block; */
        }

        .miring {
            transform: skewY(5deg);
            position: relative;
            top: -65px;
            /* height: 118vh; */
        }

        .rata {
            transform: skewY(-5deg);
            position: relative;
            top: 65px
        }

        .rata-background {
            transform: skewY(-5deg);

        }

        .fonseca {
            font-family: 'Fonseca', sans-serif;
        }

        .gotham-bold {
            font-family: 'Gotham', sans-serif;
            font-weight: 700;
        }

        .gotham-light {
            font-family: 'Gotham', sans-serif;
            font-weight: 400;
        }

        .gotham-medium {
            font-family: 'Gotham', sans-serif;
            font-weight: 500;
        }
    </style>
    <script>
        var userInteract = false
        var contactSection = false

        var btn = document.getElementById("contact-btn");
        var cancelContact = document.getElementById("cancelContact");
        var cancelChat = document.getElementById("cancelChat");
        var chatSection = document.getElementById("chat-section");
        var chatSubSection = document.getElementById("chat-sub-section");
        var contactPage = document.getElementById("contact-section");

        var chatOpening = document.getElementsByClassName("chat-opening");
        var userInteraction = document.getElementById("user-interaction");
        var replyChat = document.getElementById("reply-chat");

        var greet = document.getElementById("greet");
        var cv = document.getElementById("cv");
        var contact = document.getElementById("contact");

        var greetBot = [
            "Oh, Hi!",
            "How's Your Day?",
            "Do you have something to help?"
        ]

        var cvBot = [
            "Sure!",
            "Thankyou for asking 😊",
            "Here you go!",
            "Is there anything else?"
        ]

        var contactBot = [
            "Ofcourse you can!",
            "Lets get in touch"
        ]
        var doneBot = [
            "You're done?",
            "What can i help you next?",
        ]

        const downloadFile = (file) => {
            const element = document.createElement('a');
            element.setAttribute('href', 'Download Btn');
            element.setAttribute('download', file);

            element.style.display = 'none';

            document.body.appendChild(element);

            element.click();
            document.body.removeChild(element);
        }

        function contactBtn() {
            btn.classList.toggle('opacity-0')
            chatSection.classList.toggle('translate-x-[-410px]')

            if (userInteract == false) {
                for (let i = 0; i < chatOpening.length; i++) {
                    chatOpening[i].classList.remove('opacity-0')
                    chatOpening[i].classList.toggle('translate-y-[-20px]')
                }

                userInteraction.classList.remove('opacity-0')
                userInteract = true
            }
        }

        cancelChat.addEventListener("click", () => {
            btn.classList.toggle('opacity-0')
            chatSection.classList.toggle('translate-x-[-410px]')
            console.log('testing')
        })

        cancelContact.addEventListener("click", () => {
            contactPage.classList.toggle('translate-x-[-425px]')
            chatSection.classList.toggle('translate-x-[-410px]')
            conversation(doneBot, 'Thanks', true)
        })

        greet.addEventListener("click", () => {
            conversation(greetBot, 'Hello', true)
        });

        cv.addEventListener("click", () => {
            console.log('testing')
            conversation(cvBot, 'can i see your cv?', true)

            downloadFile("/public/CV.pdf")
        });

        contact.addEventListener("click", () => {
            conversation(contactBot, 'can we contact you?', false)
            setTimeout(function() {
                chatSection.classList.toggle('translate-x-[-410px]')
                setTimeout(function() {
                    contactPage.classList.toggle('translate-x-[-425px]')
                }, 500);
            }, 2500);
        });

        function conversation(BotText, UserText, bool) {

            function createUser(content) {
                let user = document.createElement('div');
                user.textContent = content;
                user.className = 'chat-bubble-user delay-[100ms] bottom-[-20px] opacity-0 float';
                return user;
            }

            function createBot(content, delay) {
                let bot = document.createElement('div');
                bot.textContent = content;
                bot.className = `chat-bubble-bot transition delay-[${delay}ms] bottom-[-20px] opacity-0 float`;
                return bot;
            }


            userInteraction.classList.add('hidden')


            chatSubSection.appendChild(createUser(UserText))

            setTimeout(function() {
                document.querySelector('.float').classList.toggle('translate-y-[-20px]')
                document.querySelector('.float').classList.remove('opacity-0', 'float')

                for (let i = 0; i < BotText.length; i++) {
                    var delay = 600
                    chatSubSection.appendChild(createBot(BotText[i], delay * i))
                }

                setTimeout(function() {
                    var bot = document.getElementsByClassName('float')
                    let time = bot.length;

                    console.log(bot)

                    for (let i = 0; i < bot.length; i = 0) {
                        bot[i].classList.toggle('translate-y-[-20px]')
                        bot[i].classList.remove('opacity-0', 'float')
                    }

                    setTimeout(function() {
                        if (bool == true) {
                            userInteraction.classList.remove('hidden')
                        }
                    }, time * 600);

                }, 1000);
            }, 50);

        }

        ScrollReveal().reveal('.name', {
            delay: 100,
            distance: '50px',
            origin: 'left',
            duration: 1000
        });
        ScrollReveal().reveal('.ig', {
            delay: 200,
            distance: '80px',
            origin: 'bottom',
            duration: 1000
        });
        ScrollReveal().reveal('.linked', {
            delay: 300,
            distance: '80px',
            origin: 'bottom',
            duration: 1000
        });
        ScrollReveal().reveal('.git', {
            delay: 400,
            distance: '80px',
            origin: 'bottom',
            duration: 1000
        });
        ScrollReveal().reveal('.desc', {
            delay: 100,
            distance: '50px',
            origin: 'right',
            duration: 1000
        });
        ScrollReveal().reveal('.more', {
            delay: 400,
            distance: '50px',
            origin: 'right',
            duration: 1000
        });
        ScrollReveal().reveal('.gw', {
            delay: 100,
            duration: 1000
        });
        ScrollReveal().reveal('.about1', {
            delay: 100,
            distance: '50px',
            duration: 1000
        });
        ScrollReveal().reveal('.about2', {
            delay: 200,
            distance: '50px',
            duration: 1000
        });
        ScrollReveal().reveal('.about3', {
            delay: 200,
            distance: '50px',
            duration: 1000,
            origin: 'right'
        });
        ScrollReveal().reveal('.about4', {
            delay: 400,
            distance: '50px',
            duration: 1000,
            origin: 'right'
        });

        ScrollReveal().reveal('.block1', {
            delay: 300,
            distance: '50px',
            duration: 1000,
        });
        ScrollReveal().reveal('.block2', {
            delay: 400,
            distance: '50px',
            duration: 1000,
        });
        ScrollReveal().reveal('.block3', {
            delay: 500,
            distance: '50px',
            duration: 1000,
        });
    </script>
</body>

</html>
