@extends('layouts.index_layout')

@section('content')
    <section id="subintro">
        <div class="jumbotron subhead" id="overview">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <div class="centered">
                            <h3>Dobrodošli na korisnički panel, {{Auth::user()->name}}</h3>
                            <p>
                                Fundamental HTML elements styled and enhanced with extensible classes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- main content goes here --}}
    <section id="maincontent">
        <div class="container">
            <div class="row">
                @include('layouts.userInfo')
                <div class="span8" style="float:left;">
                    <h4>Page title here</h4>
                    <p>
                        Lorem ipsum dolor sit amet, per cu graece fierent dignissim, et reque dicat blandit quo, ad mel stet aperiri insolens. Eum esse ancillae conclusionemque at. Ut nec ullum homero. Autem legimus in sed. Ad eam iudico delectus, aperiri maiestatis eos eu.
                        Mea viris abhorreant at, eirmod vivendo an ius.
                    </p>
                    <p>
                        Cu nec iudicabit percipitur, eu sit possim viderer malorum. In homero audiam aperiri eos, ea noster virtute usu, vim id inimicus philosophia. Id propriae percipit consulatu nam, in verear sensibus deseruisse has. Magna moderatius ei eum, at eum tractatos
                        contentiones. Noster electram at his, partem repudiandae contentiones ea eam. Nemore forensibus delicatissimi eu his. Est salutandi imperdiet te, sale magna commune ex pri. Diam alia sanctus ei nam, ut vel pertinax delicata, facilis invenire
                        sea ex. Pro eu sale prompta, congue inermis mea ei.
                    </p>
                    <p>
                        Ei eam diam quando sapientem, ad pri enim vero eleifend. Eu everti inimicus his, te his nisl vocent. At rebum omnium blandit duo, malis scriptorem vis te. Altera mandamus eam ei, ex usu odio mutat debitis. At quo laudem iuvaret albucius, magna mundi honestatis
                        pri ut, eos ei suas feugait. Vim tation dicant ornatus in.
                    </p>

                <blockquote>
                    <p>Vaši oglasi:</p>
                </blockquote>
                @include('layouts.post_table')
                </div>
            </div>
        </div>
    </section>
@endsection