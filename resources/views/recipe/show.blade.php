<x-app-layout>
{{ $recipe->name }} <br>
{{ $recipe->description }} <br>
@foreach ( $recipe->steps->sortBy('step_number') as $step )
<div class="">
    {{ $step->step_number }}
    {{ $step->step_desc }}
    {{ $step->ingredient->name }}
</div>
@endforeach
</x-app-layout>
