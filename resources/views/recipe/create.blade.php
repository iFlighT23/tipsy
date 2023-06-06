<x-guest-layout>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <div>
        <form action="{{ route('recipes.store') }}" method="Post">
            @csrf

            <div class="">
                <input type='text' name='name' placeholder="Entrer le nom de la recette" class="border border-gray-600 @error('name') border-red-600 @enderror">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="">
                <textarea type="text" name="description" rows="10" cols="50" placeholder="Entrer votre recette"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn">Enregistrer</button>
        </form>
    </div>
</x-guest-layout>
