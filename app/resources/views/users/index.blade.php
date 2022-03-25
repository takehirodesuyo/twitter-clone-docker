<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('ユーザー一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  @foreach($users as $user)
                  名前:{{ $user->name }}
                  <a href="{{ url('users/' .$user->id) }}" class="text-secondary">プロフィール</a>
                  @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
