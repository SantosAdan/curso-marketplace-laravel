@extends('layouts.master')
@section('header_title')
    <h1>
        <i class="fa ion-android-cart fa-fw fa-2x"></i>
        Meus Pedidos
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>
        <li class="active">Meus Pedidos</li>
      </ol>
      </br>
@stop

@section('content')
<style type="text/css">
  .info-box-icon-img {
    height: 120px !important;
    width: 120px !important;
    line-height: 110px !important;
  }
  a {
    color:#000;
  }
</style>
    <div class="container-fluid">
      <div class="row">
        @if($orders->isEmpty())
            <div class="col-md-12 col-sm-6 col-xs-12">
              <div class="callout callout-info">
               <h4>Você não realizou nenhuma compra ainda.</h4>

               <p><a href="">Comece a comprar agora!</a></p>
             </div>
         </div>
         @else
            @foreach($orders as $order)
              <a href="">
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="info-box" style="min-height: 120px !important;">
                    <span class="info-box-icon bg-aqua info-box-icon-img" style="
                          background-image: url();
                          background-size: cover;
                          background-repeat: no-repeat;
                          background-position: 50% 50%;
                          min-height: 120px;">
                      {{-- <img src="{{ route('images', [$order->product->photos->first()->path, 120])}}" > --}}
                    </span>

                    <div class="info-box-content" style="margin-left: 120px !important;">
                      <span class="info-box-text pull-right">
                        <span class="label bg-red" style="font-size: 0.7em;">Pedido #</span>
                      </span>
                      <span class="info-box-text" style="font-size: 1.2em; font-weight: 800;"></span>
                      <span class="info-box-text">Preço Unitário: R$ </span>
                      <span class="info-box-text">Quantidade: </span>
                      <span class="info-box-text">Vendedor: </span>
                      <span>
                        <span class="label bg-green"></span>
                      </span>
                      <span class="info-box-number pull-right">R$ </span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              </a>
              <!-- /.col -->
            @endforeach
        @endif
      </div>
    </div>
@stop

@section('inline_scripts')
<script>
  $(document).ready(function() {

  });
</script>
@stop
