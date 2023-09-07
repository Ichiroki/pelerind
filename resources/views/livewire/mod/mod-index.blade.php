<div>
    <x-app-layout>
        <div wire:offline>
            You are now offline
        </div>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Mod') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg dark:text-white">
                    <div class="p-6 lg:p-8">

                        <div x-data="{showModal: false}">
                            <x-button x-on:click="showModal = true">Test</x-button>

                            {{-- <div x-show="showText" x-transition>
                                test
                            </div> --}}
                        </div>
                        <div x-data="{ show: @entangle('showModal') }">
                            <x-button x-on:click="show = true">Upload Mod</x-button>

                            <x-dialog-modal x-show="show" @click.outside=" show = false ">
                                <div wire:loading.remove>
                                    <x-slot name="title" class="text-center text-2xl">Upload Mod</x-slot>

                                    <form action="" method="POST">
                                        @csrf
                                        <x-slot name="content">
                                            <div class="mt-6">
                                                <x-label for="name" value="{{ __('Name') }}" />
                                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="username" />
                                            </div>

                                            <div class="mt-6">
                                                <x-label for="description" value="{{ __('Description') }}" />
                                                <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="username" />
                                            </div>

                                            <div class="mt-6">
                                                <x-label for="thumbnail" value="{{ __('Thumbnail') }}" />
                                                <x-input id="thumbnail" class="block mt-1 w-full" type="file" name="thumbnail" :value="old('thumbnail')" required autofocus autocomplete="username" />
                                            </div>
                                        </x-slot>

                                        <x-slot name="footer">
                                            <x-button type="submit" class="mr-3">
                                                {{ __('Upload') }}
                                            </x-button>
                                            <x-danger-button wire:click="closeModal">
                                                {{ __('Close') }}
                                            </x-danger-button>
                                        </x-slot>
                                    </form>
                                </div>
                            </x-dialog-modal>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
