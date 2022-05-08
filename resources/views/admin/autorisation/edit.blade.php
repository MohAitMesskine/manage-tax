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
                            <h5>Autorisation</h5>
                            <span> Modifier un un autorisation </span>
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
                                <a href="#">Autorisation</a>
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
		                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>

		                        </div>
		                    </div>

		                </div>

                                <form action="{{ route('autorisation.update',$autorisation->id) }}" method="POST" class="forms-sample  col-form-label">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        {{ Form::label('nom', 'nom Redevable:',['class' => 'col-sm-3 col-form-label' ])}}
                                        <div class="col-sm-9">

                                    {!! Form::select('redevable_id', $redevables , null, ['class' => 'form-control','value' => '$redevables->id' ])  !!}
                                </div>
                            </div>
                                      <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Numero</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $autorisation->numero}}" name="numero" class="form-control"  placeholder="Saisir Le numero">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">DATE</label>
                                        <div class="col-sm-9">
                                            <input type="date" value="{{ $autorisation->date}}" name="date" class="form-control"  placeholder="saisir la date ">
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">	type</label>
                                        <div class="col-sm-9">
                                            <select class="form-select" value="{{ $autorisation->type}}" name="type" aria-label="Default select example">
                                                <option selected value="" >__Selectionnez__</option>
                                                <option value="taxi">type1</option>
                                                <option value="societe">type2</option>
                                                <option value="personne">type3</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">RC</label>
                                        <div class="col-sm-9">
                                            <input value="{{ $autorisation->rc}}" type="text"name="rc" class="form-control" placeholder="Saisir RC ">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Sup</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="{{ $autorisation->sup}}" name="sup" class="form-control"  placeholder="Saisir Sup">
                                        </div>
                                    </div>
                                        <div class="form-group row">
                                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Montant</label>
                                            <div class="col-sm-9">
                                                <input type="text" value="{{ $autorisation->montant}}" name="montant" class="form-control"  placeholder="Saisir Le Montant">
                                            </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Categorie</label>
                                                <div class="col-sm-9">
                                                    <input type="text"value="{{ $autorisation->categorie}}" name="categorie" class="form-control"  placeholder="Saisir Le categorie">
                                                </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Sous Categorie</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" value="{{ $autorisation->souscate}}" name="souscate" class="form-control"  placeholder="Saisir Le Sous  Categorie">
                                                    </div>
                                                </div>
                                                    <div class="form-group row">
                                                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Article</label>
                                                            <div class="col-sm-9">
                                                                <input type="text"  value="{{ $autorisation->article}}" name="article" class="form-control"  placeholder="Saisir L'article">
                                                            </div>
                                                        </div>
                                                    <div class="form-group row">
                                                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Numero Rolot</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text"  value="{{ $autorisation->numerolot}}" name="numerolot" class="form-control"  placeholder="Saisir Le numero Rolot">
                                                                </div>
                                                              </div>
                                                    <div class="form-group row">
                                                                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">pattente</label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text"  value="{{ $autorisation->pattante}}" name="pattante" class="form-control"  placeholder="Saisir Le pattante">
                                                                    </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Valeur Locative</label>
                                                                            <div class="col-sm-9">
                                                                            <input type="text"  value="{{ $autorisation->valeurlocative}}" name="valeurlocative" class="form-control"  placeholder="Saisir La Valeur Locative">
                                                                            </div>
                                                                         </div>
                                                                         <div class="form-group row">
                                                                            <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">observation</label>
                                                                            <div class="col-sm-9">
                                                                                <div class="form-floating">
                                                                                    <textarea name="observation" value="{{ $autorisation->observation}}" class="form-control" placeholder="Votre openion" id="floatingTextarea"></textarea>

                                                                                  </div>
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
