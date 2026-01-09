@extends('template.default')

@section('content')
    <h1>Pokedexs Update</h1>
    <form action="{{ url('/Pokedexs/'.$Pokedexs_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name" value="{{$Pokedexs_update->name}}">

        <lable for="type">Type</lable>
        <input class="form-control" type="text" name="type" id="type" value="{{$Pokedexs_update->type}}">

        <lable for="species">Species</lable>
        <input class="form-control" type="number" name="species" id="species" value="{{$Pokedexs_update->species}}">

        <lable for="height">Height</lable>
        <input class="form-control" type="decimal" name="height" id="height" value="{{$Pokedexs_update->height}}">

        <lable for="weight">Weight</lable>
        <input class="form-control" type="number" name="weight" id="weight" value="{{$Pokedexs_update->weight}}">

        <lable for="hp">Hp</lable>
        <input class="form-control" type="number" name="hp" id="hp" value="{{$Pokedexs_update->hp}}">

        <lable for="attack">Attack</lable>
        <input class="form-control" type="number" name="attack" id="attack" value="{{$Pokedexs_update->attack}}">

        <lable for="defense">Defense</lable>
        <input class="form-control" type="number" name="defense" id="defense" value="{{$Pokedexs_update->defense}}">

        <lable for="image_url">Image_url</lable>
        <input class="form-control" type="number" name="image_url" id="image_url" value="{{$flight_update->image_url}}">


        <button class="btn btn-primary mt-3" type="submit">บันทึก</button>
    </form>
    @include('Pokedexs.table')
@endsection
