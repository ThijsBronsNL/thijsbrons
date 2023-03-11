<a {{ $attributes->merge(['class' => 'group button'. (!empty($type) ? ' button-'. $type : '')]) }}>
    {!! $message ?? $slot !!}
</a>