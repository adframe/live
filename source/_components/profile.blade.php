@props(['creator'])

<x-card>
    <div class="flex flex-col gap-2 text-center">
        <img src="{{ $creator->avatar }}" alt="{{ $creator->username }}"
             class="mx-auto h-24 w-24 rounded-full">

        <div class="mx-auto">
            <div class="flex items-center gap-1">
                <p class="font-bold"><span>@</span>{{ $creator->username }}</p>
                <x-check-badge class="h-5 w-5 text-[#20d5ec]"/>
            </div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 divide-x">
            <div class="text-center">
                <p class="font-bold">{{ formatNumber($creator->following) }}</p>
                <p class="text-sm text-gray-500">Volgend</p>
            </div>

            <div class="text-center">
                <p class="font-bold">{{ formatNumber($creator->followers) }}</p>
                <p class="text-sm text-gray-500">Volgers</p>
            </div>

            <div class="text-center hidden sm:block">
                <p class="font-bold">{{ formatNumber($creator->likes) }}</p>
                <p class="text-sm text-gray-500">Likes</p>
            </div>
        </div>

        <p class="text-gray-500">“{{ $creator->quote }}”</p>
    </div>
</x-card>