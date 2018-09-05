<table class="table">
    <thead>
    <tr>
        <th>Naslov</th>
        <th>Kategorija</th>
        <th>Stanje </th>
        <th>Slika</th>
        <th>Datum kreiranja</th>
        <th>Opcije</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ads as $ad)
        <tr>
            <td>{{$ad->title}}</td>
            <td>{{$ad->category ? $ad->category->name : "Nema kategorije"}}</td>
            @if($ad->condition == '1')
                <td>Novo</td>
            @else
                <td>Korišteno</td>
            @endif
            <td>path</td>
            <td>{{$ad->created_at->diffForHumans()}}</td>
            <td>Opcije</td>

        </tr>
    @endforeach
    </tbody>
</table>