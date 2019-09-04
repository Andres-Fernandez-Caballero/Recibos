<!-- esta plantilla se usara para crear todos los tipos de recibos
    *
    * esta plantilla debe recibir un objeto 'data' con el siguiente contenido
    * data = [
    *    'titulo' => el titulo a mostrar en la tarjeta,
    *    'icono' => la clase del icono a mostrar (font-awesome),
    *   'logo' => asset(ruta de la imagen a mostrar como logo),
    *  'action' => ruta de store del controlador Ej: route('luz.store')
    *   ]
    *
 -->

@extends('plantillas.master')

@section('barra_lateral')
    @include('partes.aside_bar')
@endsection
@section('contenido_principal')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @if(isset($data))
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Recibo</strong>
                    </div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center"><i class="far {{$data['icono']}}"></i> <span>{{$data['titulo']}}</span></h3>
                        </div>
                        <hr>
                        <form action="{{$data['action']}}" method="post">
                            @csrf
                            <div class="form-group text-center">
                                <img class="list-inline-item" src="{{$data['logo']}}"
                                     height="50"
                                     alt="logo de la empresa de recibos">
                            </div>
                            <div class="form-group">
                                <label for="consumo" class="control-label mb-1">Consumo</label>
                                <input id="consumo" name="consumo" type="number" class="form-control"
                                       aria-required="true" aria-invalid="false">
                            </div>
                            <div class="form-group has-success">
                                <label for="saldo" class="control-label mb-1">Importe</label>
                                <input id="saldo" name="saldo" type="number"
                                       class="form-control cc-name valid"
                                       data-val="true" data-val-required="Please enter the name on card"
                                       autocomplete="cc-name" aria-required="true" aria-invalid="false"
                                       aria-describedby="cc-name">
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name"
                                      data-valmsg-replace="true"></span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="mes" class="control-label mb-1">Mes</label>
                                        <select class="form-control custom-select" id="mes" name="mes">
                                            @foreach(App\Http\classes\ArraysEstaticos::MESES_DEL_ANO as $mes)
                                                <option class="" value="{{$mes}}">{{$mes}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="x_card_code" class="control-label mb-1">Año</label>
                                    <select id="year" name="year" class="form-control custom-select">
                                        <option>2019</option>
                                        <option>2018</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button id="payment-button" type="submit"
                                        class="btn btn-lg btn-info btn-block text-white">
                                    <i class="fas fa-save fa-lg"></i>&nbsp;
                                    <span id="payment-button-amount">Guardar</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        @else
            <div class="alert alert-danger" role="alert">
                <p><strong>Error!!! </strong> <span>No se pudo cargar los metadatos</span></p>
            </div>
        @endif
    </div>
@endsection
