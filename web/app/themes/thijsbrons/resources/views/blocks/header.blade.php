<section @if($id) id="{{ $id }}" @endif class="relative flex items-center justify-center h-[70vh] md:h-screen {{ $bg_color }}">
    <div class="container">
        <div class="flex flex-col justify-center items-center">
            <div class="flex flex-col justify-center items-center text-center">
                @if ($image && in_array('image', $content_items))
                    <div class="relative w-32 md:w-52 h-32 md:h-52 mb-8 bg-secondary rounded-full">
                        {!! wp_get_attachment_image( $image['ID'], isset($size), "", ["class" => "w-full h-full absolute inset-0 object-cover object-center rounded-full"] ) !!}
                    </div>
                @endif
                @if ($title && in_array('title', $content_items))
                    <{{ $heading }}>{!! highlightedWord($highlighted_title, $title) !!}</{{ $heading }}>
                @endif
                @if ($content && in_array('content', $content_items))
                    <div class="mt-8 max-w-3xl">{!! $content !!}</div>
                @endif
                @if ($buttons && in_array('buttons', $content_items))
                    <div class="flex flex-wrap gap-6 mt-8">
                        @foreach($buttons as $button)
                            <x-button type="{{ $button['type'] }}" href="{{ $button['link']['url'] }}" target="{{ $button['link']['target'] }}">{!! $button['link']['title'] !!}</x-button>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>