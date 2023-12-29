@extends('welcome')
@section('title', "Cadastro Entidades")

@section('content')


<div class="card p-4">
    <form method="POST" action="{{ $cliente->id ? route('pessoaPut', ['id' => $cliente->id]) : route('pessoaPost') }}">
    @csrf
    @if($cliente->id)
        @method('PUT')
    @endif
    <h3>Cadastro Pessoa</h3>
    <h6 class="mt-2">{{$cliente->razao}}</h6>

        <div class="row mt-5">
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Razão/Nome</label>
                    <input type="text" name="razao" id="razao" class="form-control" value="{{ $cliente->razao }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" class="form-control" value="{{ $cliente->cnpj }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>CEP</label>
                    <input type="text" name="cep" id="id" class="form-control" value="{{ $cliente->cep }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control" value="{{ $cliente->estado }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" value="{{ $cliente->cidade }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Bairro</label>
                    <input type="text" name="bairro" id="bairro" class="form-control" value="{{ $cliente->bairro }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Rua</label>
                    <input type="text" name="rua" id="rua" class="form-control" value="{{ $cliente->rua }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ $cliente->email }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $cliente->telefone }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $cliente->descricao }}" required>
                </div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </div>
           
        </div>
    </form>

</div>

@endsection