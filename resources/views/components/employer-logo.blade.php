@props(['employer', 'width' => 90])

@php
    use Illuminate\Support\Str;
    $logo = $employer->logo;
    $isExternal = Str::startsWith($logo, ['http://', 'https://']);
@endphp

@if ($isExternal)
    <img src="{{ $logo }}" alt="{{ $employer->name }}" class="rounded-xl" width="{{ $width }}">
@else
    {{-- Use asset('storage/...') so uploaded logos also work --}}
    <img src="{{ asset('storage/' . $logo) }}" alt="{{ $employer->name }}" class="rounded-xl" width="{{ $width }}">
@endif
