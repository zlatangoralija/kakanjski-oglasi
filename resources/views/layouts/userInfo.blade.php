<div class="span4">
    <div class="project-widget">
        <h4><i class="icon-48 icon-user"></i>Informacije o računu</h4>
        <ul class="project-detail">
            <ceter><img src="images/{{$user->photo->path}}" class="img-polaroid"></ceter>
            <br>
            <p>  </p>
            <li><label>Ime i prezime: </label>{{$user->full_name}}</li>
            <li><label>Korisničko ime: </label>{{$user->name}}</li>
            <li><label>Regija-kanton: </label>{{$user->region}}</li>
            <li><label>Grad: </label>{{$user->city}}</li>
            <li><label>Poštanski broj: </label>{{$user->post_number}}</li>
            <li><label>Adresa: </label>{{$user->address}}</li>
            <li><label>Datum rođenja: </label>{{$user->birthday}}</li>
            <li><label>Kontakt telefon: </label>{{$user->phone_number}}</li>
            <li><label>E-mail: </label>{{$user->email}}</li>
            {{-- Dodavanje dugmeta za editovanje usera --}}
            <a type="button" href="{{route('userPanel.edit', $user->id)}}" class="btn btn-primary"><i class="icon-chevron-up"></i>Izmjeni</a>
            <p> </p>
        </ul>
    </div>
</div>