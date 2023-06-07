<table>

        <tr>
            <th>Name</th>
            <td>{{ $recipe->name }}</td>
        </tr>

        <tr>
            <th>Description</th>
            <td>{{ $recipe->description }}</td>

            <a href="{{ route('createrecipe') }}">Add</a>
        </tr>

</table>
