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
            <td><img src="images/{{$ad->photo->path}}" class="img-polaroid" height="20" width="30"></td>
            <td>{{$ad->created_at->diffForHumans()}}</td>
            <td>
                <a type="button" href="{{route('user.ads.edit', $ad->id)}}" class="btn btn-primary" title="Uredi oglas"><i class="icon-cog"></i></a>
                <button type="button" onclick="deleteObject({{$ad->id}})" class="btn btn-danger"><i class="icon-trash" title="Obrtiši oglas"></i></button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{-- Skruipta za upit prilikom brisanja oglasa --}}
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function deleteObject(id){
        swal({
            title: "Da li ste sigurni?",
            text: "Da li ste sigurni da želite obrisati ovaj oglas?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
            if (willDelete) {
                location.href='/ad/delete/'+id;
            }
        })
    }
</script>

