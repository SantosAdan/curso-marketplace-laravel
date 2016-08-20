@extends('layouts.master')

@section('header_title')
<div class="container">
<h1>
  <i class="fa fa-bullhorn"></i>
</h1>
@if(Auth::check())
<a href="" class="btn btn-xs btn-flat btn-primary pull-left">
    <i class="fa fa-plus"></i> <b>Anunciar Produto</b>
</a>
@endif
</div>
<ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <a href=""><h3 class="box-title"></h3></a>
            </div>

            <div class="box-body no-padding" style="
                        background-image: url();
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-position: 50% 50%;
                        min-height: 170px;
            ">
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href=""><span class="label label-info pull-left" style="font-size: 0.8em;"><b></b></span></a>
              <span class="pull-right"><b>R$ </b></span>
            </div>
          </div>
          <!-- /.box -->
        </a>
    </div>
    @endforeach
  </section>

  <section class="row">
    <div class="col-md-4 col-md-offset-4">

    </div>
  </section>

</div>
@stop