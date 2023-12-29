@extends('welcome')
@section('title', "login")

@section('content')

<div class="container">
    <div class="card p-5">
        <form>
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="row justify-content-center">
                        <h3 class="text-center">
                            Login
                        </h3>
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
                        <div class="col-6 justify-content-center">
                            
                            <button type="button" class="btn btn-primary">Login</button>
                           
                            <button type="button" class="btn btn-primary">Criar conta</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection