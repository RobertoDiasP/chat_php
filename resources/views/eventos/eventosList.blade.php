@extends('welcome')
@section('title', "Lista de Eventos")

@section('content')


<div class="container">
    <div class="row justify-content-end">
      <div class="col-3 text-end">
          <button type="button" class="btn btn-success">Novo</button>
      </div>
    </div>
    <div class="row">
        <div class="card">
            <h6> Lista de eventos</h6>
            <div class="row">
                <div class="col-6">
                    <div class="input-group input-group-static mb-4">
                        <label>Nome do Evento</label>
                        <input type="text" name="nome" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group input-group-static mb-4">
                        <label>de</label>
                        <input type="date" name="nome" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="input-group input-group-static mb-4">
                        <label>até</label>
                        <input type="date" name="nome" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card mt-3">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-9">
                                Id</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9 ps-2">Nome
                            </th>
                            <th class="text-uppercase ps-1 text-secondary text-xxs font-weight-bolder opacity-9">
                                Descriçao</th>
                            <th class="text-uppercase ps-1 text-secondary text-xxs font-weight-bolder opacity-9 ">Data
                                Inicio</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dados as $dado)
                        <tr>
                            <td>
                                <p class="text-xs text-center text-secondary mb-0">{{ $dado->id }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0">{{ $dado->nome }}</p>
                            </td>
                            <td>
                                <p class="text-xs text-secondary mb-0">{{ $dado->descricao }}</p>
                            </td>
                            <td>
                                <p class="text-xxs text-secondary mb-0">{{ $dado->datainicio }} </p>
                            </td>
                            <td class="align-middle">

                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

</div>
@endsection