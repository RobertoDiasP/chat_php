@extends('welcome')
@section('title', "Dashboard")

@section('content')

<div class="px-4">
    <div class="card px-4">
        <h3>
            Dashboard
        </h3>
       
    </div>
    <div class="row mt-4 justify-content-end">
      
    </div>
    <div class="card">
        <div class="row">
            <h6 class="mt-3 ms-3">Relaçõa de tipos de Amostras</h6>
            <div class="col-4 mt-3">
                <h6 class="text-center" >Tipos de Amostra este mês</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="pie-chart-amostrames" class="chart-canvas" height="150px" width="150px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <h6 class="text-center" >Tipos de Amostra este Semestre</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="pie-chart-amostrasemestre" class="chart-canvas" height="150px" width="150px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <h6 class="text-center" >Tipos de Amostra este Ano</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="pie-chart-amostraano" class="chart-canvas" height="150px" width="150px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-2">
        <div class="row">
            <h6 class="mt-3 ms-3">Relação Status de amostras</h6>
            <div class="col-4 mt-3">
                <h6 class="text-center" >Amostras Recebidas/Concluidas Mês</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="pie-chart-relacaomes" class="chart-canvas" height="150px" width="150px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <h6 class="text-center" >Amostras Recebidas/Concluidas Semestre</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="pie-chart-relacaosemestre" class="chart-canvas" height="150px" width="150px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4 mt-3">
                <h6 class="text-center" >Amostras Recebidas/Concluidas Ano</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="pie-chart-relacaoano" class="chart-canvas" height="150px" width="150px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-2">
        <div class="row">
            <h6 class="mt-3 ms-3">Faturamento</h6>
            <div class="col mt-3">
                <h6 class="text-center" >Faturamento este Ano</h6>
                <div class="card mb-3">
                    <div class="card-body p-3">
                        <div class="chart">
                        <canvas id="bar-chart-faturamentoano" class="chart-canvas" height="50px" width="300px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../assets/js/plugins/chartjs.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de pizza
        var pieData = {
            labels: ["Nematologia", "Fitopatologia", "Entomologia"],
            datasets: [{
                data: [30, 40, 30],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
            }]
        };

        // Configuração do gráfico
        var pieOptions = {
            responsive: true,
            maintainAspectRatio: false // Desativa a manutenção da proporção
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("pie-chart-amostrames").getContext("2d");

        // Cria o gráfico de pizza
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de pizza
        var pieData = {
            labels: ["Nematologia", "Fitopatologia", "Entomologia"],
            datasets: [{
                data: [30, 40, 30],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
            }]
        };

        // Configuração do gráfico
        var pieOptions = {
            responsive: true,
            maintainAspectRatio: false // Desativa a manutenção da proporção
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("pie-chart-amostrasemestre").getContext("2d");

        // Cria o gráfico de pizza
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de pizza
        var pieData = {
            labels: ["Nematologia", "Fitopatologia", "Entomologia"],
            datasets: [{
                data: [30, 40, 30],
                backgroundColor: ["#FF6384", "#36A2EB", "#FFCE56"]
            }]
        };

        // Configuração do gráfico
        var pieOptions = {
            responsive: true,
            maintainAspectRatio: false // Desativa a manutenção da proporção
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("pie-chart-amostraano").getContext("2d");

        // Cria o gráfico de pizza
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de pizza
        var pieData = {
            labels: ["Pendentes", "Concluidas"],
            datasets: [{
                data: [30, 40],
                backgroundColor: ["#d2b4de", "#8e44ad"]
            }]
        };

        // Configuração do gráfico
        var pieOptions = {
            responsive: true,
            maintainAspectRatio: false // Desativa a manutenção da proporção
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("pie-chart-relacaomes").getContext("2d");

        // Cria o gráfico de pizza
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de pizza
        var pieData = {
            labels: ["Pendentes", "Concluidas"],
            datasets: [{
                data: [30, 40],
                backgroundColor: ["#d2b4de", "#8e44ad"]
            }]
        };

        // Configuração do gráfico
        var pieOptions = {
            responsive: true,
            maintainAspectRatio: false // Desativa a manutenção da proporção
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("pie-chart-relacaosemestre").getContext("2d");

        // Cria o gráfico de pizza
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });
    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de pizza
        var pieData = {
            labels: ["Pendentes", "Concluidas"],
            datasets: [{
                data: [30, 40],
                backgroundColor: ["#d2b4de", "#8e44ad"]
            }]
        };

        // Configuração do gráfico
        var pieOptions = {
            responsive: true,
            maintainAspectRatio: false // Desativa a manutenção da proporção
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("pie-chart-relacaoano").getContext("2d");

        // Cria o gráfico de pizza
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: pieData,
            options: pieOptions
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        // Dados de exemplo para o gráfico de barras
        var barData = {
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
            datasets: [{
                label: 'Vendas Mensais',
                data: [50, 30, 40, 70, 80, 65, 55, 45, 60, 75, 90, 85], // Substitua esses valores pelos dados reais
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Cor de fundo das barras
                borderColor: 'rgba(75, 192, 192, 1)', // Cor da borda das barras
                borderWidth: 1 // Largura da borda das barras
            }]
        };

        // Configuração do gráfico
        var barOptions = {
            responsive: true,
            scales: {
                x: {
                    beginAtZero: true
                },
                y: {
                    beginAtZero: true
                }
            }
        };

        // Obtém o contexto do elemento canvas
        var ctx = document.getElementById("bar-chart-faturamentoano").getContext("2d");

        // Cria o gráfico de barras
        var barChart = new Chart(ctx, {
            type: 'bar',
            data: barData,
            options: barOptions
        });
    });
</script>

@endsection