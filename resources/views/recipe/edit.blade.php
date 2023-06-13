<div>
    <form method="post" action="{{route('recipes.update', $recipe)}}">
        @csrf
        <input type='text' name='name' placeholder="Entrer le nom de la recette">
        <textarea type="text" name="description" rows="10" cols="50" placeholder="Entrer votre recette"></textarea>
        <button type="submit" class="btn" >Enregistrer</button>
    </form>
    
</div>
