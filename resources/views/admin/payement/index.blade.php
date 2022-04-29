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
                            <h5>Payement</h5>
                            <span>View, delete and update Payement</span>
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
		                            <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ik ik-more-horizontal"></i></a>
		                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="moreDropdown">
		                                <a class="dropdown-item" href="#">Delete</a>
		                                <a class="dropdown-item" href="#">More Action</a>
		                            </div>
		                        </div>
		                    </div>

		                </div>
		                <div class="col col-sm-6">
		                    <div class="card-search with-adv-search dropdown">
		                        <form action="">
		                            <input type="text" class="form-control global_filter" id="global_filter" placeholder="Search.." required="">
		                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
		                            <button type="button" id="adv_wrap_toggler_1" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
		                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler_1">
		                                <div class="row">
		                                    <div class="col-md-12">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col0_filter" placeholder="Title" data-column="0">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col1_filter" placeholder="Price" data-column="1">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col2_filter" placeholder="SKU" data-column="2">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-4">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col3_filter" placeholder="Qty" data-column="3">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-4">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col4_filter" placeholder="Category" data-column="4">
		                                        </div>
		                                    </div>
		                                    <div class="col-md-4">
		                                        <div class="form-group">
		                                            <input type="text" class="form-control column_filter" id="col5_filter" placeholder="Tag" data-column="5">
		                                        </div>
		                                    </div>
		                                </div>
		                                <button class="btn btn-theme">Search</button>
		                            </div>
		                        </form>
		                    </div>
		                </div>
		                <div class="col col-sm-5">
		                    <div class="card-options text-right">
                                @can('redevable_create')
			                    <a href="{{url('payement/create')}}" class=" btn btn-outline-primary btn-semi-rounded ">Ajouter Payement</a>
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


                                        <th>date</th>
                                        <th>quittence</th>
                                        <th>date_quittence</th>
                                        <th>annee</th>
                                        <th>trim</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($payement as $payement)
                                    <tr>
                                        <td>
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input select_all_child" id="" name="id" value="{{ $redevable->id }}">
                                                <span class="custom-control-label">&nbsp;</span>
                                            </label>
                                        </td>

                                        <td>{{ $payement->date }}</td>
                                        <td>{{ $payement->quittence}}</td>
                                        <td>{{ $payement->date_quittence }}</td>
                                        <td>{{ $payement->annee }}</td>
                                        <td>{{ $payement->trim }}</td>
                                        <td>

                                            {{-- @can('redevable_show')
                                            <a href="#redevableView" onclick="show_redevable(this)" data-attr="{{ route('redevables.getredevable', $redevable->id) }}" data-toggle="modal" data-target="#redevableView"><i class="ik ik-eye f-16 mr-15"></i></a>
                                            @endcan --}}
                                            @can('redevable_edit')
                                            <a href="{{ route('payement.edit', $redevable->id) }}"><i class="ik ik-edit f-16 mr-15 text-green"></i></a>
                                            @endcan
                                            @can('redevable_delete')
                                            <form action="{{ route('payement.destroy', $redevable->id) }}" method="POST" style="display: inline-block;">
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
                                {{ $payement->links() }}
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
