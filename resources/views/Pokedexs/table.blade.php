<h1>Pokedexs Lists</h1>

<table class="table">
    <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Type</td>
            <td>Species</td>
            <td>Height</td>
            <td>Weight</td>
            <td>Hp</td>
            <td>Attack</td>
            <td>Defense</td>
            <td>Image_url</td>
            <td></td>
        </tr>
    </thead>
    <?php foreach($Pokedexs as $item) {?>
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->species }}</td>
        <td>{{ $item->height }}</td>
        <td>{{ $item->weight }}</td>
        <td>{{ $item->hp }}</td>
        <td>{{ $item->attack }}</td>
        <td>{{ $item->defense }}</td>
        <td>{{ $item->image_url }}</td>
        <td>
            <a class="btn btn-warning" href="{{ url('/Pokedexs/' . $item->id . '/edit') }}">
                แก้ไข
            </a>
            <form
                style="display:inline-block"
                action="{{url('/Pokedexs/'. $item->id)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">ลบ</button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>
