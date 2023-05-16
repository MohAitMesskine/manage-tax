@extends('admin.layout')
@section('title', 'Acceuil')
@section('content')
<!-- push external head elements to head -->
@push('head')

<link rel="stylesheet" href="{{ asset('plugins/weather-icons/css/weather-icons.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/chartist/dist/chartist.min.css') }}">
@endpush

<div class="container-fluid">
    <div class="row">
        <!-- page statustic chart start -->
        <div class="col-xl-6 col-md-12">
            <div class="card card-red text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="mb-0">{{$redevable}}</h4>
                            <p class="mb-0">redevable</p>
                        </div>
                        <div class="col-4 text-right">
                            <i class="ik ik-user"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart1" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="card card-blue text-white">
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">

                            <h4 class="mb-0">{{$autorisation}}</h4>

                            <p class="mb-0">{{ __('Autorisation')}}</p>
                        </div>
                        <div class="col-4 text-right">
                            <i height="30px" width="30px" class="ik ik-list"></i>
                        </div>
                    </div>
                    <div id="Widget-line-chart2" class="chart-line chart-shadow"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- page statustic chart end -->
    <!-- sale 2 card start -->

    <!-- sale 2 card end -->

    <!-- product and new customar start -->
    <div class="col-xl-4 col-md-4">
        {{-- col-xl-4 col-md-6" --}}
        <div class="card new-cust-card">
            <div class="card-header">
                <h3>{{ __('Les redevable plus de Autorisation')}}</h3>
                {{-- <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="ik ik-chevron-left action-toggle"></i></li>
                                <li><i class="ik ik-minus minimize-card"></i></li>
                                <li><i class="ik ik-x close-card"></i></li>
                            </ul>
                        </div> --}}
            </div>
            @foreach ($auto as $auto )
            <div class="card-block">
                <div class="align-middle mt-0 ">
                    {{-- <img src="../img/users/1.jpg" alt="user image" class="rounded-circle img-40 align-top mr-15"> --}}

                    <div class="d-inline-block">
                        <a href="#!">
                            <b>{{$auto->nom}}</b>
                        </a>
                        <p class="text-muted mb-0">{{ __($autorisat )}}autorisation</p>
                        {{-- <span class="status active"></span> --}}
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>


    <!-- push external js -->
    @push('script')
    <script src="{{ asset('plugins/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('plugins/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
    <!-- <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script> -->
    <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
    <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>

    <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
    <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
    <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>


    <script src="{{ asset('js/widget-statistic.js') }}"></script>
    <script src="{{ asset('js/widget-data.js') }}"></script>
    <script src="{{ asset('js/dashboard-charts.js') }}"></script>

    @endpush
    @endsection
