@extends('welcome')
@section('title', "Ordem")

@section('content')

<div class="px-4">
    <div class="card px-4">
        <h4 class="mt-2">
            Ordem Serviço
        </h4>
        <div class="row py-2">
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Data de</label>
                    <input type="date" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Data Até</label>
                    <input type="date" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Nome Pasciente</label>
                    <input type="text" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Status</label>
                    <input type="text" name="nome" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 justify-content-end">
        <div class="col-3 text-end">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Adicionar Modelos</button>
        </div>
    </div>
    <div class="card">
        <div class="row">
            <div class="mt-3">
                <div class="table-responsive">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-6">

        paginação
    </div>
    <!-- <div class="col">

    </div> -->
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Adicionar Modelo</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <form method="POST" action="/cadastros/modelos">
                @csrf
                <div class="col-12">
                    <div class="input-group input-group-static mb-4">
                        <label>Nome do Pasciente</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group input-group-static mb-4">
                        <label>Tipo de impressao</label>
                        <input type="text" name="servico_id" class="form-control" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="input-group input-group-static mb-4">
                        <label>Arquivo</label>
                        <input type="file" name="arquivo" class="form-control" required>
                    </div>
                </div>
                <button type="subimit" class="btn bg-gradient-primary">Salvar</button>
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Fechar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
    .status-Recebido {
        background-color: #f2dfb1 !important;
        color: black !important /* ou a cor que desejar para Recebido */
    }
    .status-Pronto {
        background-color: #d1e389 !important;
        color: black !important /* ou a cor que desejar para Recebido */
    }
    .status-Processando {
        background-color: #a9e4cf !important;
        color: black !important /* ou a cor que desejar para Recebido */
    }
    .status-Postado {
        background-color: #b6deb9 !important;
        color: black !important /* ou a cor que desejar para Recebido */
    }
    .status-Pago {
        background-color: #5faae6 !important;
        color: black !important /* ou a cor que desejar para Recebido */
    }
</style>

@endsection