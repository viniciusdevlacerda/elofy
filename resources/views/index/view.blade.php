@extends('layout.layout')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                <div id="table-persons" class="bg-white table-responsive p-sm-5">
                    @if(!empty($people))

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-custom-outline-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-filter"></i> Filtro</button>
                                <div class="dropdown-menu px-2">
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="peso1" name="peso" class="custom-control-input" value="acima">
                                        <label class="custom-control-label" for="peso1">Acima do Peso</label>
                                    </div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="peso2" name="peso" class="custom-control-input" value="ideal">
                                        <label class="custom-control-label" for="peso2">No peso Ideal</label>
                                    </div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="peso3" name="peso" class="custom-control-input" value="abaixo">
                                        <label class="custom-control-label" for="peso3">Abaixo do Peso</label>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="altura1" name="altura" class="custom-control-input">
                                        <label class="custom-control-label" for="altura1">Altas</label>
                                    </div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="altura2" name="altura" class="custom-control-input">
                                        <label class="custom-control-label" for="altura2">Medianas</label>
                                    </div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="altura3" name="altura" class="custom-control-input">
                                        <label class="custom-control-label" for="altura3">Baixas</label>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="lactose" name="lactose" class="custom-control-input">
                                        <label class="custom-control-label" for="lactose">Intolerantes a Lactose</label>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="custom-control custom-radio dropdown-item">
                                        <input type="radio" id="atletas" name="atletas" class="custom-control-input">
                                        <label class="custom-control-label" for="atletas">Pessoas Atletas</label>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                </div>
                            </div>
                        </div>
                        <table id="tablePeople" class="table table-hover w-100">
                            <thead>
                            <tr>
                                <th></th>
                                <th>NOME</th>
                                <th>ALTURA</th>
                                <th>LACTOSE</th>
                                <th>PESO</th>
                                <th>ATLETA</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($people as $person)
                                    <tr>
                                        <td></td>
                                        <th>{{$person->no_people}}</th>
                                        <td>{{$person->nu_altura}}m</td>
                                        <td>
                                            @if($person->bl_lactose)
                                                <button class="btn btn-success btn-sm rounded-50 border-0 px-3"><i class="fas fa-circle"></i> Sim</button>
                                            @else
                                                <button class="btn btn-danger btn-sm rounded-50 border-0 px-3"><i class="fas fa-circle"></i> Não</button>
                                            @endif
                                        </td>
                                        <td>{{$person->nu_peso}}Kg</td>
                                        <td>
                                            @if($person->bl_atleta)
                                                <button class="btn btn-success btn-sm rounded-50 border-0 px-3"><i class="fas fa-circle"></i> Sim</button>
                                            @else
                                                <button class="btn btn-danger btn-sm rounded-50 border-0 px-3"><i class="fas fa-circle"></i> Não</button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
