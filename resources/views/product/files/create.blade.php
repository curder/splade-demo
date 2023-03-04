<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('product-files.create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-splade-modal max-width="md">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('product-files.create') }}
                        </h2>

                        <div class="mt-4">
                            <x-splade-form
                                filepond
                                server
                                action="{{ route('product-files.store') }}"
                                class="space-y-4">
                                <x-splade-file name="file"
                                               label="{{ __('product-files.file') }}"
                                               multiple
                                               filepond />
                                <x-splade-submit label="{{ __('product-files.store') }}" />
                            </x-splade-form>
                        </div>
                    </x-splade-modal>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
