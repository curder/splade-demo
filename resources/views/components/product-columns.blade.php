@php use Illuminate\Support\Str; @endphp
<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">

        <x-splade-lazy>
            <x-slot:placeholder> The {{ $name }} columns are loading...</x-slot:placeholder>

            <h2 class="font-bold">{{ $name }}({{ count($columns) }})</h2>
            <div class="space-x-1 space-y-1">
                @foreach($columns as $column)
                    <span
                        class="inline-flex items-center rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800">{{ $column }}</span>
                @endforeach
            </div>
        </x-splade-lazy>
    </div>
</div>
