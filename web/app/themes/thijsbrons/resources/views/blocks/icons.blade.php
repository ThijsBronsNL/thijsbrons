<section @if($id) id="{{ $id }}" @endif class="relative {{ $bg_color }} {{ $pt }} {{ $pb }}">
    <div class="container">
        <div class="flex flex-col gap-8 md:gap-16">
            @if ($title && in_array('title', $content_items))
                <{{ $heading }}>{!! highlightedWord($highlighted_title, $title) !!}</{{ $heading }}>
            @endif
            <div class="grid grid-cols-1 lg:grid-cols-10 justify-center items-center gap-4">
                @foreach($icons as $icon)
                    <div class="lg:col-span-2 flex flex-col gap-8 justify-center items-center bg-secondary p-8 lg:p-12 w-full h-full">
                        <div class="relative w-28 h-28">
                            {!! wp_get_attachment_image( $icon['image']['ID'], isset($size), "", ["class" => "w-full h-full abolute inset-0 object-cover object-center"] ) !!}
                        </div>
                        <h6>{{ $icon['title'] }}</h6>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>