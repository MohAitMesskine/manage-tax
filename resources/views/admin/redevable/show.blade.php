@extends('admin.layout')
@section('title', 'Redevables')
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-user"></i>
                    <div class="d-inline">
                        <h5>Redevables</h5>
                        <span>Les Caractéstique de Redevable </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('redevables.index') }}">Redevables</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- start message area-->
        @include('include.message')
        <!-- end message area-->
        <!-- list layout 1 start -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col col-sm-1">
                        <div class="card-options d-inline-block">
                            <div class="dropdown d-inline-block">

                            </div>
                        </div>

                    </div>

                    <table class="table-light">
                        <tr class="table-light">
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Nom : </label>
                                <b>{{ $redevable->nom}} </b></td>
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Adress :</label>
                                <b>{{ $redevable->adress}} </b></td>
                        </tr>
                        <tr class="table-light">
                            <td class="table-light"> <label class="col-sm-3 col-form-label">CIN : </label>
                                <b>{{ $redevable->cin}} </b></td>
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Type :</label>
                                <b>{{ $redevable->type}} </b></td>
                        </tr>
                        <tr class="table-light">
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Email : </label>
                                <b>{{ $redevable->email}} </b></td>
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Telephone :</label>
                                <b>{{ $redevable->telephone}} </b></td>
                        </tr>



                    </table>





                    <table id="advanced_table" class="table">
                        <thead>
                            <tr>
                                {{-- <th class="nosort" width="10">
                                        <label class="custom-control custom-checkbox m-0">
                                            <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                            <span class="custom-control-label">&nbsp;</span>
                                        </label>
                                    </th> --}}

                                <th>Numero</th>
                                <th>Date</th>
                                <th>Type</th>
                                <th>RC</th>
                                <th>Sup</th>
                                <th>Categorie</th>
                                <th>Sous Categorie</th>
                                <th>Numero Rolot</th>
                                <th>Pattante</th>
                                <th>Obersation</th>
                                <th>Valeur Locative</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($autorisations as $autorisation )
                            <tr>

                                {{-- <td> --}}

                                {{-- <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input select_all_child" id="" name="id" value="{{ $autorisation->id }}">
                                <span class="custom-control-label">&nbsp;</span>
                                </label>
                                </td> --}}

                                {{-- @foreach ( $redevables as $redevabless )
                                    <td>{{$redevabless->nom }}</td>

                                @endforeach --}}
                                {{-- <td>{{ $redevables->nom }}</td> --}}

                                <td>{{ $autorisation->numero }}</td>
                                <td>{{ $autorisation->date}}</td>
                                <td>{{ $autorisation->type }}</td>
                                <td>{{ $autorisation->rc }}</td>
                                <td>{{ $autorisation->sup }}</td>
                                <td>{{ $autorisation->categorie}}</td>
                                <td>{{ $autorisation->souscate}}</td>
                                <td>{{ $autorisation->numerolot}}</td>
                                <td>{{ $autorisation->pattante}}</td>
                                <td>{{ $autorisation->observation}}</td>
                                <td>{{ $autorisation->valeurlocative}}</td>
                                <td>

                                    {{-- @can('redevable_show')
                                        <a href="#redevableView" onclick="show_redevable(this)" data-attr="{{ route('redevables.getredevable', $redevable->id) }}"
                                    data-toggle="modal" data-target="#redevableView"><i
                                        class="ik ik-eye f-16 mr-15"></i></a>
                                    @endcan --}}
                                    @can('redevable_show')
                                    <a href="{{ route('autorisation.show', $autorisation->id) }}" title="voir"><i
                                            class="ik ik-eye f-16 mr-15"></i></a>
                                    @endcan

                                    @can('redevable_edit')
                                    <a href="{{ route('autorisation.edit', $autorisation->id) }}" title="modifier"><i
                                            class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                    @endcan
                                    @can('redevable_delete')
                                    <form action="{{ route('autorisation.destroy', $autorisation->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" title="supprimer" class="btn bg-transparent"
                                            style="display: contents"><i
                                                class="ik ik-trash-2 f-16 text-red"></i></button>
                                    </form>
                                    @endcan
                                    @can('redevable_create')
                                    <a title="ajouter autorisation" href="{{url('payement/create')}}"
                                        title="ajouter payement"><svg xmlns="http://www.w3.org/2000/svg" width="14"
                                            height="16" fill="currentColor" class="bi bi-plus-circle"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                        @endcan
                                </td>
                            </tr>


                            @endforeach
                        </tbody>
                    </table>






                </div>
            </div>
        </div>

    </div>
</div>


@push('script')
<script>
    function show_redevable(e) {
        $.ajax({
            url: e.getAttribute('data-attr'),
            beforeSend: function () {
                $('#redevable-spinner').show();
                $('#redevable-content').hide();
                //redevable-content
                //redevable-spinner
            },
            // return the result
            success: function (result) {
                $('#redevable-spinner').hide();
                $('#redevable-content').html(result).show();
                redevable_line_chart();
            },
            complete: function () {
                $('#redevable-spinner').hide();
            },
            error: function (jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#redevable-spinner').hide();
            },
            timeout: 8000
        })
    }

</script>
<script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
<script src="{{ asset('plugins/amcharts/gauge.js') }}"></script>
<script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
<script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
<script src="{{ asset('plugins/amcharts/animate.min.js') }}"></script>
<script src="{{ asset('plugins/amcharts/pie.js') }}"></script>
<script src="{{ asset('plugins/ammap3/ammap/ammap.js') }}"></script>
<script src="{{ asset('plugins/ammap3/ammap/maps/js/usaLow.js') }}"></script>
<script src="{{ asset('js/redevable.js') }}"></script>
@endpush
@endsection
