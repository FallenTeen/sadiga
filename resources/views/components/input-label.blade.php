@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-poppins text-md text-white font-semibold']) }}>
    {{ $value ?? $slot }}
</label>
