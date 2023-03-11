<section @if($id) id="{{ $id }}" @endif class="relative {{ $bg_color }} {{ $pt }} {{ $pb }}">
    <div class="container">
        <div class="flex items-center justify-center">
            <div class="flex flex-col gap-8 md:gap-16">
                @if ($title && in_array('title', $content_items))
                    <{{ $heading }} class="{{ $cta_text == true ? "cta-text" : "" }}">{!! highlightedWord($highlighted_title, $title) !!}</{{ $heading }}>
                @endif
                @if ($link && in_array('link', $content_items))
                    <a class="link w-fit inline-flex items-center gap-4 group transition ease-in-out duration-300" href="{{ $link['url'] }}" target="{{ $link['target'] }}">
                        {{ $link['title'] }}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="url(#gradient)" class="w-12 md:w-[84px] h-12 md:h-[84px] transition ease-in-out duration-300 group-hover:rotate-45 gradient">
                          <defs>
                                    <linearGradient id="gradient">
                                        <stop stop-color="#0575E6" ffset="0" />
                                        <stop stop-color="#00F260" offset="1" />
                                    </linearGradient>
                            </defs>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                @endif
            </div>
        </div>
    </div>
</section>