{{-- @if($socialNetworks)
<div class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
    @foreach ($socialNetworks->social_network as $network)
    @if ($network['is_active'])

    <a href="{{ $network['url'] }}" target="_blank">
        <img src="{{ $network['icon'] ? $network['icon'] : '/vendor/filament-social-networks/images/' . $network['name'] . '.svg' }}"
            alt="{{ $network['name'] }}" class="w-5 h-5 @if (! $loop->first) ml-3 @endif">
    </a>

    @endif
    @endforeach
</div>
@endif --}}

@if ($socialNetworks)

@endif

<div class="flex space-x-6 md:order-2">
    @foreach ($socialNetworks->social_network as $network)
    @if ($network['is_active'])
    <a href="{{ $network['url'] }}" target="_blank" class="text-gray-400 hover:text-gray-300">
        <span class="sr-only">{{ $network['name'] }}</span>
        <img src="{{ $network['icon'] ? $network['icon'] : '/vendor/filament-social-networks/images/' . $network['name'] . '.svg' }}"
            alt="{{ $network['name'] }}" class="w-6 h-6 @if (! $loop->first) ml-3 @endif">
    </a>

    @endif
    @endforeach

</div>
