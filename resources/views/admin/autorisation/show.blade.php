@extends('admin.layout')
@section('title', 'LesPayement')
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-user"></i>
                    <div class="d-inline">
                        <h5>Autorisation</h5>
                        <span>Les Caractéstique de Payemnt </span>
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
                            <a href="{{ route('redevables.index') }}">Payement</a>
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
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Numero </label>
                                <b>{{ $autorisation->numero}} </b></td>
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Type</label>
                                <b>{{ $autorisation->type}} </b></td>
                        </tr>
                        <tr class="table-light">
                            <td class="table-light"> <label class="col-sm-3 col-form-label">Categorie : </label>
                                <b>{{ $autorisation->categorie}} </b></td>
                            <td class="table-light"> <label class="col-sm-3 col-form-label">SousCategie :</label> <b>
                                    {{ $autorisation->souscate}}</b></td>
                        </tr>
                        <tr class="table-light">
                            <td class="table-light"> <label class="col-sm-3 col-form-label">RC : </label>
                                <b>{{ $autorisation->rc}} </b></td>
                            <td class="table-light"> <label class="col-sm-3 col-form-label">NumeroRolot :</label>
                                <b>{{ $autorisation->numerolot}} </b></td>
                        </tr>
                        {{-- <tr class="table-light">
                                                    <td class="table-light"> <label  class="col-sm-3 col-form-label">Les Autorisation  : </label> <b >{{ $auto}}
                        </b></td>

                        </tr> --}}

                    </table>
                    <table id="advanced_table" class="table">
                        <thead>
                            <tr>
                                <th class="nosort" width="10">
                                    <label class="custom-control custom-checkbox m-0">
                                        <input type="checkbox" class="custom-control-input" id="selectall" name=""
                                            value="option2">
                                        <span class="custom-control-label">&nbsp;</span>
                                    </label>
                                </th>

                                <th>date</th>
                                <th>quittence</th>
                                <th>date_quittence</th>
                                <th>annee</th>
                                <th>trim</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($autorisations as $autorisation )
                            <tr>
                                <td>{{$autorisation->numero}}</td>


                                <td>{{ $autorisation->date }}</td>
                                <td>{{ $autorisation->quittence}}</td>
                                <td>{{ $autorisation->date_quittence }}</td>
                                <td>{{ $autorisation->annee }}</td>
                                <td>{{ $autorisation->trim }}</td>
                                <td>

                                    {{-- @can('redevable_show')
                                                    <a href="{{ route('payement.show', $payements->id) }}"><i
                                        class="ik ik-eye f-16 mr-15"></i></a>
                                    @endcan --}}
                                    @can('redevable_edit')
                                    <a href="{{ route('payement.edit', $autorisation->id) }}"><i
                                            class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                    @endcan
                                    @can('redevable_delete')
                                    <form action="{{ route('payement.destroy', $autorisation->id) }}" method="POST"
                                        style="display: inline-block;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn bg-transparent" style="display: contents"><i
                                                class="ik ik-trash-2 f-16 text-red"></i></button>
                                    </form>
                                    @endcan

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- <div class="d-flex justify-content-center">
                                        {{ $auto->links() }}
                </div> --}}
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
