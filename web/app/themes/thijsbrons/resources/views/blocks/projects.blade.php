<section @if($id) id="{{ $id }}" @endif class="relative {{ $bg_color }} {{ $pt }} {{ $pb }}">
    <div class="container">
        <div>
            @if ($title && in_array('title', $content_items))
                <{{ $heading }}>{!! highlightedWord($highlighted_title, $title) !!}</{{ $heading }}>
            @endif
            @if ($content && in_array('content', $content_items))
                <div class="mt-8 max-w-xl">{!! $content !!}</div>
            @endif
            @if ($buttons && in_array('buttons', $content_items))
                <div class="flex flex-wrap gap-6 mt-8">
                    @foreach($buttons as $button)
                        <x-button type="{{ $button['type'] }}" href="{{ $button['link']['url'] }}" target="{{ $button['link']['target'] }}">{!! $button['link']['title'] !!}</x-button>
                    @endforeach
                </div>
            @endif
        </div>
        @if($projects)
            @foreach($projects['data'] as $project)
                <a href="{{ $project['url'] }}">
                    <div class="relative bg-gradient pt-[40%] group overflow-hidden mt-8 md:mt-16">
                        {!! wp_get_attachment_image( $project["featured_image"], isset($size), "", ["class" => "absolute inset-0 w-full h-full object-center object-cover transition ease-in-out duration-300 group-hover:scale-[1.1]"] ) !!}
                        <div class="relative z-20 px-6 md:px-20 pb-6 md:pb-20 flex flex-col gap-1 md:gap-8">
                            <h1>{{ $project['title'] }}</h1>
                            <h5>{{ $project['subtitle'] }}</h5>
                            <div class="hidden md:flex gap-4">
                                @foreach($project['category'] as $item)
                                    <span class="group button button-primary">{{ $item->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
</section>