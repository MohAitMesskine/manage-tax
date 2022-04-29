@extends('admin.layout')
@section('title', 'Redevables')
@section('content')

	<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-green"></i>
                        <div class="d-inline">
                            <h5>Redevables</h5>
                            <span>Créer un Redevables </span>
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
		                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>

		                        </div>
		                    </div>

		                </div>

                                <form action="{{ route('redevables.store') }}" method="POST" class="forms-sample  col-form-label">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nom</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Votre Nom">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Adress</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  placeholder="Votre Adresse(R/ville/Region)">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>taxi</option>
                                        <option value="taxi">taxi</option>
                                        <option value="societe">societe</option>
                                        <option value="personne">personne</option>
                                      </select>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">CNE</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" placeholder="Votre CNE">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control"  placeholder="Votre Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Telephone</label>
                                        <div class="col-sm-9">
                                            <input type="tel" class="form-control"  placeholder="Votre Telephone">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-light">Cancel</button>
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
                    beforeSend: function() {
                        $('#redevable-spinner').show();
                        $('#redevable-content').hide();
                        //redevable-content
                        //redevable-spinner
                    },
                    // return the result
                    success: function(result) {
                        $('#redevable-spinner').hide();
                        $('#redevable-content').html(result).show();
                        redevable_line_chart();
                    },
                    complete: function() {
                        $('#redevable-spinner').hide();
                    },
                    error: function(jqXHR, testStatus, error) {
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
