@extends('welcome')
@section('title', "Meus Eventos")

@section('content')


<div class="container">
    <div class="card p-5">
        <h3 class="">
            Novo Evento
        </h3>
        <form method="POST" action="/meusEventos">
            @csrf
            <div class="row mt-5 d-flex">
                <div class="col-12">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="input-group input-group-static mb-4">
                                <label>Nome do Evento</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-static mb-4">
                                <label>Data Inicial</label>
                                <input type="datetime-local" name="datainicio" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group input-group-static mb-4">
                                <label>Data Final</label>
                                <input type="datetime-local" name="datafim" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">Descrição</label>
                                <input type="text" name="descricao" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">Local(Recinto)</label>
                                <input type="text" name="local" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">Endereço</label>
                                <input type="text" name="enderecoevento" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">N°</label>
                                <input type="text" name="numeroevento" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">Cidade</label>
                                <input type="text" name="enderecoevento" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">Estado</label>
                                <input type="text" name="enderecoevento" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">CEP</label>
                                <input type="text" name="CEP" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-static mb-4">
                                <label class="form-label">Valor</label>
                                <input type="text" name="Valor" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="col-6 justify-content-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection