<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
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
    <main>
        {{-- @include('components.frontend.nav-bar') --}}
        @yield('content')
        @include('components.frontend.footer')

    </main>

    <script src="https://vjs.zencdn.net/8.9.0/video.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <style>
        .footer {
            position: relative;
            width: 100%;
            background: #D6C5BD;
            min-height: 100px;
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
            width: 105%;
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
            font-weight: 500;
            src: url('{{ public_path('fonts/Fonseca.tff') }}');
        }

        @font-face {
            font-family: Fonseca;
            font-weight: 700;
            src: url('{{ public_path('fonts/Fonseca-Bold.tff') }}');
        }

        @font-face {
            font-family: Fonseca;
            font-weight: 500;
            font-style: italic;
            src: url('{{ public_path('fonts/Fonseca-Italic.tff') }}');
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
            font-weight: normal;

        }

        .fonseca-bold {
            font-family: 'Fonseca', sans-serif;
            font-weight: 700;

        }

        .fonseca-italic {
            font-family: 'Fonseca', sans-serif;
            font-weight: 500;
            font-style: italic
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
    </script>
</body>

</html>
