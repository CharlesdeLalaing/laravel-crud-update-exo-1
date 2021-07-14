<div class="container">
    <table class="table">
        <a href="/animals/create">créer un animal</a>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Race</th>
                <th scope="col">Genre</th>
                <th scope="col">Âge</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <th scope="row">{{$animal->id}}</th>
                    <td><a href="/animals/{{$animal->id}}/show">{{$animal->race}}</a></td>
                    <td>{{$animal->genre}}</td>
                    <td>{{$animal->age}}</td>
                    <td>
                        <form action="/animals/{{$animal->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-white" type="submit">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
