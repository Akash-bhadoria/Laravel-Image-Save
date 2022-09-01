<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Simple Plan Media') }}
        </h2>
    </x-slot>

    @include('media')

</x-app-layout>