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
                        <span> Créer un payement </span>
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
                            <a href="{{ route('payement.index') }}">Payement</a>
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

                    <form action="{{ route('payement.store') }}" method="POST" class="forms-sample  col-form-label">
                        @csrf
                        {{-- <div class="form-group row">
                                        {{ Form::label('numero', 'Numero Autorisation:',['class' => 'col-sm-3 col-form-label' ])}}
                        <div class="col-sm-9">

                            {!! Form::select('autorisation_id', $autorisations ,null, ['class' => 'form-control','value'
                            => '$autorisations->id','name' => 'autorisation_id' ]) !!}
                        </div>
                </div> --}}

                <div class="form-group row" hidden>
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <input type="text" name="autorisation_id" class="form-control" value="{{$autorisation->id}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Numero</label>
                    <div class="col-sm-9">
                        <b type="text" name="autorisation_id" class="form-control">{{$autorisation->numero}}</b>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">date </label>
                    <div class="col-sm-9">
                        <input type="date" name="date" class="form-control" placeholder="Saisir La date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">quittence</label>
                    <div class="col-sm-9">
                        <input type="text" name="quittence" class="form-control" placeholder="Votre quittence">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label"> date_quittence</label>
                    <div class="col-sm-9">
                        <input type="date" name="date_quittence" class="form-control"
                            placeholder="Saisir La date De quittance">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">L'année</label>
                    <div class="col-sm-9">
                        <input type="number" name="annee" class="form-control" placeholder="Saisir L`annnée">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label"> Trimestre</label>
                    <div class="col-sm-9">
                        <input type="numbre" name="trim" class="form-control" placeholder="Saisir Le trim">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light" {{ route('payement.index') }}>Cancel</button>
                </form>


            </div>
        </div>

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
