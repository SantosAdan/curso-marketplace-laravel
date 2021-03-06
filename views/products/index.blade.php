@extends('layouts.master')

@section('header_title')
<div class="container">
<h1>
  {{-- <i class="fa fa-bullhorn"></i> Anúncios --}}
</h1>

<div class="col-md-5 col-md-offset-3 col-xs-12">
  <a href="{{route('products.create')}}" class="btn btn-block btn-flat btn-primary">
      <i class="fa fa-plus"></i> <b>Anunciar Produto</b>
  </a>
</div>

</div>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Produtos</a></li>
  <li class="active">Anúncios</li>
</ol>
@stop

@section('content')
<div class="container-fluid">

  <section class="row" style="margin-top: 2%; margin-right: 1%;">
    @foreach($products as $product)
    <div class="col-md-4">
        <a href="#">
          <div class="box box-solid">
            <div class="box-header with-border">
              <a href="{{route('products.show', [$product->id])}}"><h3 class="box-title">{{ $product->name }}</h3></a>
            </div>

            <div class="box-body no-padding" style="
                        background-image: url({{ route('images', [$product->photos->first()->path, 170]) }});
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: 50% 50%;
                        min-height: 170px;
            ">
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="{{route('products.bycategory', [$product->category->name])}}"><span class="label label-info pull-left" style="font-size: 0.8em;"><b>{{ $product->category->name }}</b></span></a>
              <span class="pull-right"><b>R$ {{ $product->price }}</b></span>
            </div>
          </div>
          <!-- /.box -->
        </a>
    </div>
    @endforeach
  </section>

  <section class="row">
    <div class="col-md-4 col-md-offset-4">
      {!! $products->render() !!}
    </div>
  </section>

</div>
@stop