<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex justify-between">
                <span>
                    {{ __('Product Files') }}
                </span>
                <span>
                    <x-splade-link slideover
                                   href="{{ route('product-files.create') }}"
                                   class="text-sm font-normal rounded-md shadow-sm bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-1 px-3 focus:outline-none focus:shadow-outline">
                    {{ __('Update product file') }}
                    </x-splade-link>
                </span>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-table :for="$product_files" as="$product_file">

                        <x-splade-cell file_size>
                            {{ file_size_for_human($product_file->file_size) }}
                        </x-splade-cell>

                        <x-splade-cell actions>

                            <x-splade-link confirm="{{ __('product-files.import_confirm') }}"
                                           confirm-text="{{ __('product-files.import_confirm_text') }}"
                                           confirm-button="{{ __('product-files.import_confirm_button') }}"
                                           cancel-button="{{ __('product-files.import_confirm_cancel') }}"
                                           href="{{ route('product-files.import', $product_file) }}"
                                           data="{ id: {{ $product_file->id }} }"
                                           method="POST"
                            >
                                @if($product_file->status === 'init')
                                    {{ __('product-files.import') }}
                                @elseif($product_file->status === 'processing')
                                    {{ __('product-files.processing') }}
                                @else
                                    {{ __('product-files.done') }}
                                @endif
                            </x-splade-link>

                            <x-splade-link confirm="{{ __('product-files.destroy_confirm') }}"
                                           confirm-text="{{ __('product-files.destroy_confirm_text') }}"
                                           confirm-button="{{ __('product-files.destroy_confirm_button') }}"
                                           cancel-button="{{ __('product-files.destroy_confirm_cancel') }}"
                                           href="{{ route('product-files.destroy', $product_file) }}"
                                           data="{ id: {{ $product_file->id }} }"
                                           method="DELETE"
                            >{{ __('categories.destroy') }}</x-splade-link>
                        </x-splade-cell>
                    </x-splade-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
