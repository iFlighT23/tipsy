<div>
    <form method="post" action="{{route('recipes.update', $recipe)}}">
        @csrf
        <input type='text' name='Name' placeholder="Entrer le nom de la recette">
        <textarea type="text" name="Description" rows="10" cols="50" placeholder="Entrer votre recette"></textarea>
        <button type="submit" class="btn">Enregistrer</button>
    </form>
</div>
