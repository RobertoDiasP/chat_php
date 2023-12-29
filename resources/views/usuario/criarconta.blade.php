@extends('welcome')
@section('title', "Criar conta")

@section('content')
<div class="container">
    <div class="card p-5">
        <form>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="row justify-content-center">
                        <h3 class="text-center">
                            Criar Conta
                        </h3>
                        <h6 class="text-center">Só vai levar 1 segundo :)</h6>
                        <div class="col-md-12">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nome Completo</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                            <button type="button" class="btn btn-sm btn-primary">Confimar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection