@extends('layouts.base')

@section('content')
    <div class="container">
        <form action="/animals/{{$edit->id}}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Race</label>
                <input type="text" name="race" value="{{$edit->race}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre</label>
                <select class="form-select" name="genre" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="femelle">femelle</option>
                    <option value="mâle">mâle</option>
                    <option value="hermaphrodite">hermaphrodite</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Âge</label>
                <input type="text" name="age" value="{{$edit->age}}" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
