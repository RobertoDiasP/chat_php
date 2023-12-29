@extends('welcome')
@section('title', "Cadastro Amostras")

@section('content')


<div class="card p-4">
    <form method="POST" action="{{ $amostras->id ? route('amostraPut', ['id' => $amostras->id]) : route('amostraPost') }}" >
    @csrf
    @if($amostras->id)
        @method('PUT')
    @endif

    <h3>Cadastro Amostras</h3>
    <h6 class="mt-2">{{$amostras->id_interno}}</h6>

        <div class="row mt-5">
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Identificação Interno</label>
                    <input type="text" name="id_interno" id="id_interno" class="form-control" value="{{ $amostras->id_interno }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Identificação Externo</label>
                    <input type="text" name="id_externo" id="id_externo" class="form-control" value="{{ $amostras->id_externo }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Cultura</label>
                    <input type="text" name="cultura" id="cultura" class="form-control" value="{{ $amostras->cultura }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Propriedade</label>
                    <input type="text" name="propriedade" id="propriedade" class="form-control" value="{{ $amostras->propriedade }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>tipo</label>
                    <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $amostras->tipo }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Lote</label>
                    <input type="text" name="lote" id="lote" class="form-control" value="{{ $amostras->lote }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Status</label>
                    <input type="text" name="status" id="status" class="form-control" value="{{ $amostras->status }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Cep</label>
                    <input type="date" name="data" id="data" class="form-control" value="{{ $amostras->data }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Descriçao</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $amostras->descricao }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="input-group input-group-static mb-4">
                    <label>Site</label>
                    <input type="text" name="website" id="website" class="form-control" value="{{ $amostras->website }}" required>
                </div>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </div>
           
        </div>
    </form>

</div>

@endsection