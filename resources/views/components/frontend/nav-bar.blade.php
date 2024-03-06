<div
    class="p-5 text-center flex gap-4 sm:gap-[40px] text-lg sm:text-[20px] lg:text-[26px] justify-between sm:justify-center lg:justify-start w-fulls max-sm:px-5">
    <a href="{{ route('frontend.projects.software') }}"
        class="cursor-pointer fonseca text-white relative {{ Route::current()->getName() == 'frontend.projects.software' ? 'dot' : 'opacity-60' }}">
        Software Developing</a>
    <a href="{{ route('frontend.projects.video') }}"
        class="cursor-pointer fonseca relative hover:opacity-100 transition duration-150 text-white {{ Route::current()->getName() == 'frontend.projects.video' ? 'dot' : 'opacity-60' }}">
        Video Editing
    </a>
    <a href="{{ route('frontend.projects.design') }}"
        class="cursor-pointer fonseca relative hover:opacity-100 transition duration-150 text-white {{ Route::current()->getName() == 'frontend.projects.design' ? 'dot' : 'opacity-60' }}">
        Graphic Design
    </a>
</div>
