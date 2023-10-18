@extends('tablar::page')

@section('title', 'View Product')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        View
                    </div>
                    <h2 class="page-title">
                        {{ __('Product ') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('products.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Product List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Product Details</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Codigo:</strong>
{{ $product->codigo }}
</div>
<div class="form-group">
<strong>Articulo:</strong>
{{ $product->articulo }}
</div>
<div class="form-group">
<strong>Lote:</strong>
{{ $product->lote }}
</div>
<div class="form-group">
<strong>Marca:</strong>
{{ $product->marca }}
</div>
<div class="form-group">
<strong>Stock Total:</strong>
{{ $product->stock total }}
</div>
<div class="form-group">
<strong>Talar:</strong>
{{ $product->talar }}
</div>
<div class="form-group">
<strong>Outlet:</strong>
{{ $product->outlet }}
</div>
<div class="form-group">
<strong>Quilmes:</strong>
{{ $product->quilmes }}
</div>
<div class="form-group">
<strong>Preparacion:</strong>
{{ $product->preparacion }}
</div>
<div class="form-group">
<strong>Ciclico:</strong>
{{ $product->ciclico }}
</div>
<div class="form-group">
<strong>Marmoleria Deposito:</strong>
{{ $product->marmoleria deposito }}
</div>
<div class="form-group">
<strong>Marmoleria Fabrica:</strong>
{{ $product->marmoleria fabrica }}
</div>
<div class="form-group">
<strong>Ext Mepano:</strong>
{{ $product->ext mepano }}
</div>
<div class="form-group">
<strong>Parq Ind Pilar:</strong>
{{ $product->parq ind pilar }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


