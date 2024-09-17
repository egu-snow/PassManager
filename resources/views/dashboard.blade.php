<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="ms-5 mb-3">{{ Auth::user()->name }}さん、ようこそ！</p>
                    <button type="button" class="ms-5 btn-sm btn btn-primary">
                        <a href={{ route('acount.list') }} class="text-white link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover">一覧画面へ</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
