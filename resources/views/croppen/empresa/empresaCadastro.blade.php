@extends('welcome')
@section('title', "Cadastro Empresas")

@section('content')


<div class="card p-4">
    <form method="POST" action="{{ $empresas->id ? route('empresaPut', ['id' => $empresas->id]) : route('empresaPost') }}" >
    @csrf
    @if($empresas->id)
        @method('PUT')
    @endif

    <h3>Cadastro Empresa</h3>
    <h6 class="mt-2">{{$empresas->razao}}</h6>

        <div class="row mt-5">
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{ $empresas->nome }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Razao Social</label>
                    <input type="text" name="razao_social" id="razao_social" class="form-control" value="{{ $empresas->razao_social }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" class="form-control" value="{{ $empresas->cnpj }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Telefone</label>
                    <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $empresas->telefone }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $empresas->email }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Rua</label>
                    <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $empresas->endereco }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Cidade</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" value="{{ $empresas->cidade }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Cep</label>
                    <input type="text" name="cep" id="cep" class="form-control" value="{{ $empresas->cep }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Descriçao</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $empresas->descricao }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Site</label>
                    <input type="text" name="website" id="website" class="form-control" value="{{ $empresas->website }}" required>
                </div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </div>
           
        </div>
    </form>

</div>

@endsection