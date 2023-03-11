<section @if($id) id="{{ $id }}" @endif class="relative flex items-center justify-center overflow-hidden {{ $pt }} {{ $pb }}">
    <div class="w-full md:my-8 py-4 text-2xl md:text-3xl lg:text-4xl font-semibold space-y-4 md:space-y-6 {{ $bg_color }}">
        <div class="relative bg-white transform -rotate-3 py-8 flex text-black">
            <div class="animate-marquee whitespace-nowrap flex items-center">
                @foreach ($word_slider as $word)
                    <span class="mx-4 md:mx-6">{!! $word['text'] !!}</span>
                    @if($custom_seperator)
                        <div class="h-6 w-6 mt-1">{!! $seperator !!}</div>
                    @else
                        <span class="h-2 w-2 bg-white block"></span>
                    @endif
                @endforeach
            </div>
            <div class="absolute top-8 delay-300 animate-marquee2 whitespace-nowrap flex items-center">
                @foreach ($word_slider as $word)
                    <span class="mx-4 md:mx-6">{!! $word['text'] !!}</span>
                    @if($custom_seperator)
                        <div class="h-6 w-6 mt-1">{!! $seperator !!}</div>
                    @else
                        <span class="h-2 w-2 bg-black block"></span>
                    @endif
                @endforeach
            </div>
            <div class="h-full w-5 bg-white absolute -right-4 top-0 rotate-0"></div>
            <div class="h-full w-5 bg-white absolute -left-4 top-0 rotate-0"></div>
        </div>
    </div>
</section>