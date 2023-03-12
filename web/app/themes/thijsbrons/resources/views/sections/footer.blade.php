@php
  $footer = get_field('footer', 'option');
@endphp

<footer class="relative">
  <div class="container border-t border-white/10 text-[#F0F2F5]">
    <div class="flex flex-col-reverse md:flex-row gap-2 items-center justify-between py-8">
      <span>&copy; <?= date('Y') ?> @if($footer['text']) {{ $footer['text'] }} @endif</span>
      @if($footer['socials'])
        <div class="flex gap-2">
          @foreach($footer['socials'] as $social)
            <a class="p-4 border-gradient" href="{{ $social['url'] }}" target="blank">
              {!! $social['svg'] !!}
            </a>
          @endforeach
        </div>
      @endif
    </div>
  </div>
</footer>
