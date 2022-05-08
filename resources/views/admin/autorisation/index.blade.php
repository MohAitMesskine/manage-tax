@extends('admin.layout')
@section('title', 'Autorisation')
@section('content')

	<div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-list"></i>
                        <div class="d-inline">
                            <h5>Autorisation</h5>
                            <span> La Listes Des Autorisation </span>
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

		                        </div>
		                    </div>

		                </div>
		                <div class="col col-sm-6">
		                    <div class="card-search with-adv-search dropdown">
                                <div class="col col-sm-6">
                                    <form action="{{ route('search') }}" method="GET">
                                    <div class="card-search with-adv-search dropdown">
                                        <div class="input-group mb-3">

                                                <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                                <button class="input-group-text border-0" id="search-addon">
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
			                    <a href="{{url('autorisation/create')}}" class=" btn btn-outline-primary btn-semi-rounded ">Ajouter Autorisation</a>
                                @endcan
                            </div>
		                </div>
		            </div>
		            <div class="card-body">
                        <div class="table-responsive">
                            <table id="advanced_table" class="table">
                                <thead>
                                    <tr>
                                        <th class="nosort" width="10">
                                            <label class="custom-control custom-checkbox m-0">
                                                <input type="checkbox" class="custom-control-input" id="selectall" name="" value="option2">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </th>
                                        <th>Nom Redevable</th>
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

                                    <tr>
                                        <td>
                                            @foreach ($autorisation as $autorisation)
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input select_all_child" id="" name="id" value="{{ $autorisation->id }}">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>

                                        {{-- @foreach ( $redevables as $redevabless )
                                        <td>{{$redevabless->nom }}</td>

                                        @endforeach --}}
                                        {{-- <td>{{ $redevables->nom }}</td> --}}
                                        <td>{{ $autorisation->nom}}</td>
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
                                            <a href="#redevableView" onclick="show_redevable(this)" data-attr="{{ route('redevables.getredevable', $redevable->id) }}" data-toggle="modal" data-target="#redevableView"><i class="ik ik-eye f-16 mr-15"></i></a>
                                            @endcan --}}
                                            @can('redevable_edit')
                                            <a href="{{ route('autorisation.edit', $autorisation->id) }}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            @endcan
                                            @can('redevable_delete')
                                            <form action="{{ route('autorisation.destroy', $autorisation->id) }}" method="POST" style="display: inline-block;">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn bg-transparent" style="display: contents" ><i class="ik ik-trash-2 f-16 text-red"></i></button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                 {{ $auto->links() }}
                            </div>
                        </div>
		            </div>
		        </div>
		    </div>
		    <!-- list layout 1 end -->
            <!-- list layout 2 end -->
		</div>
	</div>
	<div class="modal fade edit-layout-modal pr-0" id="redevableView" tabindex="-1" role="dialog" aria-labelledby="redevableViewLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="redevableViewLabel">Iphone 6</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>

            <div class="modal-body">
                <div id="redevable-spinner" style="text-align: center;margin: auto;">
                    <i class="ace-icon fa fa-spinner fa-spin orange bigger-500" style="font-size:60px;margin-top:50px;"></i>
                </div>
                <div id="redevable-content"  style="display: none">

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
                  <script>
                    $(document).ready(function(){
                      $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#advanced_table tr").filter(function() {
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
