<div>
    <div id="contact-section"
        class="fixed right-[-400px] bottom-10 z-[999] card-contact shadow-2xl gotham-medium flex transition-all duration-500">
        <div class="relative z-10">

            <div id="cancelContact"
                class="cursor-pointer absolute right-5 top-5 z-10 bg-white rounded-md p-1 inline-flex items-center justify-center text-gray-400 hover:text-white hover:bg-bg1 transition-all">
                <span class="sr-only">Close menu</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
                            style="transition-delay:150ms">a</span><span style="transition-delay:200ms">m</span><span
                            style="transition-delay:300ms">e</span>
                    </label>
                </div>

                <div class="form-control mb-7">
                    <input type="text" name="subject" required="">
                    <label class="text-black">
                        <span style="transition-delay:0ms">S</span><span style="transition-delay:50ms">u</span><span
                            style="transition-delay:100ms">b</span><span style="transition-delay:150ms">j</span><span
                            style="transition-delay:200ms">e</span><span style="transition-delay:250ms">c</span><span
                            style="transition-delay:250ms">t</span>
                    </label>
                </div>

                <div class="form-control mb-7">
                    <input type="email" name="email" required="">
                    <label class="text-black">
                        <span style="transition-delay:0ms">E</span><span style="transition-delay:50ms">m</span><span
                            style="transition-delay:100ms">a</span><span style="transition-delay:150ms">i</span><span
                            style="transition-delay:200ms">l</span>
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
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
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
</div>
