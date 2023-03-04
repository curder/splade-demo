<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            <x-product-columns name="Overview" :columns="$overviews" />
            <x-product-columns name="Price" :columns="$prices" />
            <x-product-columns name="Attributes" :columns="$attributes" />
            <x-product-columns name="Export" :columns="$exports" />
            <x-product-columns name="Additional" :columns="$additionals" />
        </div>
    </div>
</x-app-layout>
