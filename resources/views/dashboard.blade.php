<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-2">
            <x-product-columns name="Overview" :columns="$columns['overview']"/>
            <x-product-columns name="Price" :columns="$columns['price']"/>
            <x-product-columns name="Attributes" :columns="$columns['attributes']"/>
            <x-product-columns name="Export" :columns="$columns['export']"/>
            <x-product-columns name="Additional" :columns="$columns['additional']"/>
        </div>
    </div>
</x-app-layout>
