@extends('inventory.layout')
@section('title', __('Add Product'))
@section('content')
    <div class="container-fluid">
    	<div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-headphones bg-blue"></i>
                        <div class="d-inline">
                            <h5>{{ __('Add Product') }}</h5>
                            <span>{{ __('Add new product in inventory') }}</span>
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
                                <a href="{{ route('products.index') }}">{{ __('Products') }}</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">{{ __('Add Product') }}</a>
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
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-body">
                        <form class="forms-sample" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="name">{{ __('Name') }}<span class="text-red">*</span></label>
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ __('Enter product Name') }}" required="">
                                        @error('name')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="code">{{ __('Code') }}</label>
                                        <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" placeholder="{{ __('Enter product Code') }}" >
                                        @error('code')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Description') }}</label>
                                        <textarea class="form-control" rows="9" name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="sku">{{ __('SKU') }}</label>
                                        <input id="sku" type="text" class="form-control" name="sku" value="{{ old('sku') }}" placeholder="{{ __('Enter Product SKU') }}" >
                                        @error('sku')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">{{ __('Price') }}</label>
                                        <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" placeholder="{{ __('Enter product price') }}" >
                                        @error('price')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror


                                    </div>
                                    <div class="form-group">
                                        <label for="purchase_price">{{ __('Purchase Price') }}</label>
                                        <input id="purchase_price" type="number" class="form-control" name="cost" value="{{ old('cost') }}" placeholder="{{ __('Purchase Price') }}" >
                                        @error('cost')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="qty">{{ __('Qty') }}</label>
                                        <input id="qty" type="number" class="form-control" name="quantity" value="{{ old('quantity') }}" placeholder="{{ __('Enter Product Qty') }}" >
                                        @error('quantity')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="stock_alert">{{ __('Stock Alert') }}<span class="text-red">*</span></label>
                                        <input id="stock_alert" type="number" class="form-control" name="quantity_alert" value="{{ old('quantity_alert') }}" placeholder="{{ __('Enter Stock Alert') }}" required="">
                                        @error('quantity_alert')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">


                                    <div class="form-group">
                                        <label>{{ _('Category') }}<span class="text-red">*</span></label>
                                        <select class="form-control"name="category_id" required="">
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id?'selected':'' }}>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>{{ __('Unit') }}<span class="text-red">*</span></label>
                                        <select class="form-control" name="unit_id" required="">
                                            @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}" {{ old('unit_id') == $unit->id?'selected':'' }}>{{ $unit->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('unit_id')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('Product Images') }}</label>
                                        <input id="image" type="file" value="{{ old('image') }}" class="form-control" name="image">
                                        @error('image')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>{{ __('Product Status') }}</label>
                                        <div class="custom-control custom-checkbox" >
                                            <input type="checkbox" class="custom-control-input" id="active" value="1" {{ (!old() || old('active') == '1') ? 'checked' : '' }} name="active">
                                            <label class="custom-control-label" for="active">{{ __('Active') }}</label>
                                        </div>
                                        @error('active')
                                            <div class="help-block with-errors text-warning">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-5 pt-5">
                                        <div class="form-group text-right">
                                            <button type="submit" class="btn btn-primary my-1">{{ __('Submit') }}</button>
                                        </div>
                                     </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
