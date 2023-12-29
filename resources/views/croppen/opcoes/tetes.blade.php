@extends('welcome')
@section('title', "Opções")

@section('content')

<div class="px-4">
    <div class="card px-4">
       <h1>Opções</h1>
       
       <div class="nav-wrapper position-relative end-0">
            <ul class="nav nav-pills nav-fill p-1" role="tablist">
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#profile-tabs-icons" role="tab" aria-controls="preview" aria-selected="true">
                        <span class="material-icons align-middle mb-1">
                            badge
                        </span>
                        Serviços
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#dashboard-tabs-icons" role="tab" aria-controls="code" aria-selected="false">
                        <span class="material-icons align-middle mb-1">
                        laptop
                        </span>
                        Dashboard
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content">
        <!-- Aba 1: My Profile -->
            <div class="tab-pane fade show active" id="profile-tabs-icons" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Conteúdo da aba My Profile -->
               
                <form action="">
                    <h4 class="text-center mt-3">Serviços</h4>
                     
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Pesquisar</label>
                                <input type="text" id="inputpesquisa" name="inputpesquisa" class="form-control">
                                <div id="resultadosPesquisa"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <button type="button" onclick="carregarDadosDoServico()" class="btn btn-primary btn-sm">Pesquisar</button>
                        </div>
                    
                    </form>

                    <div class="card">
                        <div class="row mt-3">
                            <form id="updateForm">
                                @csrf
                                @method('PUT')
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Id</label>
                                            <input type="text" name="id" id="id" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Nome</label>
                                            <input type="text" name="nome" id="nome" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Valor</label>
                                            <input type="number" name="valor" id="valor" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group input-group-static mb-4">
                                            <label>Descrição</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                
                                    <div class="col-6">
                                        <button type="button" onclick="atualizarRegistro()" class="btn btn-primary btn-sm">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Aba 2: Dashboard -->
                <div class="tab-pane fade" id="dashboard-tabs-icons" role="tabpanel" aria-labelledby="dashboard-tab">
                    <!-- Conteúdo da aba Dashboard -->
                    <p>Conteúdo da aba Dashboard...</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
function carregarDadosDoServico() {
    var inputPesquisa = $('#inputpesquisa').val();

    $.ajax({
        url: '/servicoP/' + inputPesquisa,
        type: 'GET',
        success: function(response) {
            if (response.length > 0) {
                var servico = response[0];

                // Atualize os campos do formulário com os dados recebidos
                $('#id').val(servico.id);
                $('#nome').val(servico.nome);
                $('#valor').val(servico.valor);
            } else {
                console.log('Nenhum serviço encontrado para a pesquisa.');
            }
        }
    });
}

function atualizarRegistro() {
    var formData = $('#updateForm').serialize();

    $.ajax({
        url: '/sua-rota-de-atualizacao', // Substitua com sua rota de atualização
        type: 'PUT',
        data: formData,
        success: function(response) {
            console.log('Registro atualizado com sucesso.');
        },
        error: function(error) {
            console.log('Erro ao atualizar o registro.');
        }
    });
}
</script>

@endsection
