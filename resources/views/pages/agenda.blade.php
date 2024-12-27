@extends('template')

@section('conteudo-site')
<div class="contents">
    <div class="dm-page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Calendário</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="uil uil-estate"></i>Início</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Calendário</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row calendar-grid justify-content-center">
                <div class="col-xxl-3 col-xl-5 col-md-6 col-sm-8">
                    <div class="dm-calendar-left">
                        <button class="btn btn-primary btn-lg btn-create-event" data-bs-toggle="modal" data-bs-target="#c-event-modal">
                            <img class="svg" src="img/svg/plus.svg" alt="">Criar Novo Evento
                        </button>
                        <div class="card card-md mb-4">
                            <div class="card-body px-10">
                                <div class="date-picker">
                                    <div class="date-picker__calendar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-md mb-4">
                            <div class="card-body">
                                <div class="draggable-events" id="draggable-events">
                                    <div class="draggable-events__top d-flex justify-content-between">
                                        <h6>Meus Calendários</h6>
                                        <a href="#">
                                            <img class="svg" src="img/svg/plus.svg" alt=""></a>
                                    </div>
                                    <ul class="draggable-event-list">
                                        <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                            <span class="badge-dot badge-primary"></span>
                                            <span class="event-text">Eventos Familiares</span>
                                        </li>
                                        <li class="draggable-event-list__single d-flex align-items-center" data-class="secondary">
                                            <span class="badge-dot badge-secondary"></span>
                                            <span class="event-text">Lançamento de Produto</span>
                                        </li>
                                        <li class="draggable-event-list__single d-flex align-items-center" data-class="success">
                                            <span class="badge-dot badge-success"></span>
                                            <span class="event-text">Reunião de Equipe</span>
                                        </li>
                                        <li class="draggable-event-list__single d-flex align-items-center" data-class="primary">
                                            <span class="badge-dot badge-primary"></span>
                                            <span class="event-text">Tarefas de UI/UX</span>
                                        </li>
                                        <li class="draggable-event-list__single d-flex align-items-center" data-class="warning">
                                            <span class="badge-dot badge-warning"></span>
                                            <span class="event-text">Atualização de Projeto</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-7">
                    <div class="card card-default card-md mb-4">
                        <div class="card-body">
                            <div id='full-calendar'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade c-event-modal" id="c-event-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg c-event-dialog" role="document">
            <div class="modal-content">
                <!-- Cabeçalho -->
                <div class="modal-header">
                    <h5 class="modal-title">Agendar Consulta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <!-- Corpo -->
                <div class="modal-body">
                    <form action="#" method="POST">
                        <!-- Seleção do Paciente -->
                        <div class="mb-3 row align-items-center">
                            <label for="patient" class="col-sm-3 col-form-label">Paciente</label>
                            <div class="col-sm-9">
                                <select id="patient" name="patient_id" class="form-select">
                                    <option value="">Selecione o Paciente</option>
                                    <option value="1">João Silva</option>
                                    <option value="2">Maria Santos</option>
                                </select>
                            </div>
                        </div>
    
                        <!-- Título -->
                        <div class="mb-3 row align-items-center">
                            <label for="title" class="col-sm-3 col-form-label">Título</label>
                            <div class="col-sm-9">
                                <input type="text" id="title" name="e-title" class="form-control" placeholder="Consulta Nutricional" required>
                            </div>
                        </div>
    
                        <!-- Início -->
                        <div class="mb-3 row align-items-center">
                            <label for="start-date" class="col-sm-3 col-form-label">Início</label>
                            <div class="col-sm-9">
                                <input type="text" id="start-date" name="s-date" class="form-control flatpickr" placeholder="Selecione a Data e Hora" required>
                            </div>
                        </div>
    
                        <!-- Término -->
                        <div class="mb-3 row align-items-center">
                            <label for="end-date" class="col-sm-3 col-form-label">Término</label>
                            <div class="col-sm-9">
                                <input type="text" id="end-date" name="e-date" class="form-control flatpickr" placeholder="Calculado automaticamente">
                            </div>
                        </div>
    
                        <!-- Observações -->
                        <div class="mb-3 row align-items-center">
                            <label for="description" class="col-sm-3 col-form-label">Observações</label>
                            <div class="col-sm-9">
                                <textarea id="description" name="e-description" class="form-control" placeholder="Ex.: Foco na perda de peso"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Rodapé -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>    
    
    

    <script>
        document.addEventListener("DOMContentLoaded", function () {
    flatpickr("#start-date", {
        enableTime: true, 
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        time_24hr: true
    });

    flatpickr("#end-date", {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
        minDate: "today",
        time_24hr: true
    });
});

    </script>

@endsection