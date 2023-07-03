<x-guest-layout>
    @include('_partial.url', $theme)

    <div class="flex justify-around">
        @foreach ($recipes as $recipe)
        @include('_partial.card', $recipe)
        @endforeach
    </div>
</x-guest-layout>
