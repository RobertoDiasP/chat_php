@extends('welcome')
@section('title', "Empresas")

@section('content')

<div class="px-4">
    <div class="card px-4">
        <h3>
            Empresas
        </h3>
        <div class="row py-2 mt-4">
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Razão Social</label>
                    <input type="text" name="razao_social" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" class="form-control">
                </div>
            </div>
            <div class="col-6">
               
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
            </div>
        </div>
        <div class="col-3">
            <a type="button" class="btn btn-success btn-sm"  href="{{ route('amostraCreate') }}">Nova Empresa</a>
        </div>
    </div>
    <div class="row mt-4 justify-content-end">
      
    </div>
    <div class="card">
        <div class="row">
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-center text-secondary text-xxs font-weight-bolder opacity-9">
                                    Id
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-9 ps-2">
                                    CNPJ
                                </th>
                                <th class="text-uppercase ps-1 text-secondary text-xxs font-weight-bolder opacity-9">
                                    Nome/Razao
                                </th>
                                <th class="text-uppercase ps-1 text-secondary text-xxs font-weight-bolder opacity-9 ">
                                    Telefone
                                </th>
                                <th class="text-secondary opacity-7">
                                    *
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empresa as $iten)
                            <tr>
                                <td>
                                    <p class="text-xs text-center text-secondary mb-0">{{ $iten->id }}</p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0">{{ $iten->cnpj }}</p>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0">{{ $iten->razao }}</p>
                                </td>
                                <td>
                                    <p class="text-xxs text-secondary mb-0">{{ $iten->telefone }} </p>
                                </td>
                                
                                <td>
                                     <a href="{{ route('empresaCadastro', ['id' => $iten->id]) }}">Editar</a>
                                     
                                </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection