@extends('admin.layout')
@section('title', 'Payement')
@section('content')

<div class="container-fluid">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-headphones bg-green"></i>
                    <div class="d-inline">
                        <h5>Payement</h5>
                        <span>View, Voir les payement</span>
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
                            <a href="#">Payement</a>
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
                            <div class="input-group mb-3">

                                <div class="card-search with-adv-search dropdown">
                                    <div class="input-group mb-3">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-5">

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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

                                    <th>numero Autorisation</th>
                                    <th>date</th>
                                    <th>quittence</th>
                                    <th>date_quittence</th>
                                    <th>annee</th>
                                    <th>trim</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payement as $payements)
                                <tr>


                                    <td></td>

                                    <td>{{$payements->numero}}</td>


                                    <td>{{ $payements->date }}</td>
                                    <td>{{ $payements->quittence}}</td>
                                    <td>{{ $payements->date_quittence }}</td>
                                    <td>{{ $payements->annee }}</td>
                                    <td>{{ $payements->trim }}</td>
                                    <td>

                                        {{-- @can('redevable_show')
                                            <a href="#redevableView" onclick="show_redevable(this)" data-attr="{{ route('redevables.getredevable', $redevable->id) }}"
                                        data-toggle="modal" data-target="#redevableView"><i
                                            class="ik ik-eye f-16 mr-15"></i></a>
                                        @endcan --}}
                                        @can('redevable_edit')
                                        <a href="{{ route('payement.edit', $payements->id) }}"><i
                                                class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                        @endcan
                                        @can('redevable_delete')
                                        <form action="{{ route('payement.destroy', $payements->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn bg-transparent"
                                                style="display: contents"><i
                                                    class="ik ik-trash-2 f-16 text-red"></i></button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">

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
