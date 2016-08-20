@extends('layouts.master')
@section('header_title')
    <h1>
        <i class="fa fa-check"></i>
        Confirme seus dados
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="">Produtos</a></li>
        <li class="active">Comprando Produto</li>
      </ol>
      </br>
@stop

@section('content')
    <div class="container-fluid">
      <div class="row">

          <!-- Endereço -->
          <div class="col-xs-4">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Endereço</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <p><i class="fa fa-road fa-fw"></i> Rua: , </p>
                <p><i class="fa fa-road fa-fw"></i> Bairro: </p>
                <p><i class="fa fa-road fa-fw"></i> Cidade:  - </p>
                <p><i class="fa fa-road fa-fw"></i> CEP: </p>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
                <a href="" class="btn btn-flat btn-sm btn-success">Alterar Endereço</a>
              </div>
            </div>
          </div>

          <!-- Dados do Pedido -->
          <div class="col-xs-8">
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Detalhes do Pedido</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <section class="row">
                  <div class="col-md-4">
                    <img class="attachment-img" src="" />
                  </div>
                  <div class="col-md-8">
                    <p>Nome: </p>
                    <p>Quantidade: </p>
                    <p>Valor Unitário: R$ </p>
                  </div>
              </section>
              <span style="font-size: 1.2em;" class="label label-danger pull-right">Total: R$ </span>
              </div>
              <!-- /.box-body -->
              <div class="box-footer clearfix">
             {{-- Cabeçalho FORM --}}
                {!! Form::hidden('quantity', $quantity) !!}
                <button type="submmit" class="btn btn-flat btn-success pull-right"><b>Prosseguir <i class="fa fa-shopping-cart"></i></b></button>
              {{-- Fim do FORM --}}
              </div>
            </div>
          </div>
      </div>
    </div>
@stop

@section('inline_scripts')
<script>
  $(document).ready(function() {

  });
</script>
@stop