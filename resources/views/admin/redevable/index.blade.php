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
                        <span> La Listes Des Redevables </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard"><i class="ik ik-user"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Redevables</a>
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
                                <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

                            </div>
                        </div>

                    </div>
                    <div class="col col-sm-6">
                        <div class="card-search with-adv-search dropdown">
                            <div class="col col-sm-6">
                                <form action="{{ route('chercher') }}" method="GET">
                                    <div class="card-search with-adv-search dropdown">
                                        <div class="input-group mb-3">

                                            <input type="search" name="search" class="form-control rounded"
                                                placeholder="Search" aria-label="Search" aria-describedby="search-addon"
                                                required />
                                            <button type="submit" class="input-group-text border-0" id="search-addon">
                                                <i class="fas fa-search"></i>
                                            </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col col-sm-5">
                <div class="card-options text-right">
                    @can('redevable_create')
                    <a href="{{url('redevables/create')}}" class=" btn btn-outline-primary btn-semi-rounded ">Ajouter
                        Redevable</a>
                    @endcan
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="advanced_table" class="table">
                    <thead>
                        <tr>
                            {{-- <th class="nosort" width="10">

                                            </label>
                                        </th> --}}
                            <th>Id </th>
                            <th>Nom</th>
                            <th>Adress</th>
                            <th>Type</th>
                            <th>CIN</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($redevables as $redevable)
                        <tr>
                            {{-- <td>

                                        </td> --}}
                            <td>{{ $redevable->id}}</td>
                            <td>{{ $redevable->nom }}</td>
                            <td>{{ $redevable->adress}}</td>
                            <td>{{ $redevable->type }}</td>
                            <td>{{ $redevable->cin }}</td>
                            <td>{{ $redevable->email }}</td>
                            <td>{{ $redevable->telephone}}</td>
                            <td>

                                @can('redevable_show')
                                <a href="{{ route('redevables.show', $redevable->id) }}" title="voir"><i
                                        class="ik ik-eye f-16 mr-15"></i></a>
                                @endcan

                                <a href="{{ route('redevables.edit', $redevable->id) }}" title="modifier"><i
                                        class="ik ik-edit f-16 mr-15 text-green"></i></a>

                                @can('redevable_delete')
                                <form action="{{ route('redevables.destroy', $redevable->id) }}" title="supprimer"
                                    method="POST" style="display: inline-block;">
                                    @method('DELETE')
                                    @csrf
                                    <button title="supprimer" type="submit" class="btn bg-transparent"
                                        style="display: contents"><i class="ik ik-trash-2 f-16 text-red"></i></button>
                                </form>
                                @endcan
                                @can('redevable_create')
                                <a href="{{ route('ajout', $redevable->id) }}" title="ajouter Autorisation"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-plus-circle" viewBox="0 0 16 16">
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
                <div class="d-flex justify-content-center">
                    {{ $redevables->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- list layout 1 end -->
<!-- list layout 2 end -->
</div>
</div>
<div class="modal fade edit-layout-modal pr-0" id="redevableView" tabindex="-1" role="dialog"
    aria-labelledby="redevableViewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="redevableViewLabel">Iphone 6</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <div id="redevable-spinner" style="text-align: center;margin: auto;">
                    <i class="ace-icon fa fa-spinner fa-spin orange bigger-500"
                        style="font-size:60px;margin-top:50px;"></i>
                </div>
                <div id="redevable-content" style="display: none">

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
<script>
    $(document).ready(function () {
        $("#myInput").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#advanced_table tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

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
