<!-- Para usar la plantilla Listado de recibo deben cumplirse los siguientes requerimientos
    *El controlador deve devolver con esta vista un objeto
        $data [
            titulo = el titulo a mostrar en la plantilla,
            recibos = un array con los recibos a ser mostrados
            ]
    *El modelo del recibo dene contener los siguientes metodos
        public funtion getConsumoFormateado(void) : String
        public funtion getSaldoFormateado(void) : String
-->

@extends('plantillas.master')
@section('barra_lateral')
    @include('partes.aside_bar')
@endsection
@section('contenido_principal')
    @if(isset($data))
        <div class="card">
            <div class="card-body">
                <h4 class="box-title">{{$data['titulo']}}</h4>
                <table class="table table-hover">
                    <thead>
                    <tr class="">
                        <th>Año</th>
                        <th>Mes</th>
                        <th>Consumo</th>
                        <th>Importe</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($data['recibos'] as $recibo)
                        <tr>
                            <td>{{$recibo->year}}</td>
                            <td>{{$recibo->mes}}</td>
                            <td><span>{{$recibo->getConsumoFormateado()}}</span></td>
                            <td><span>{{$recibo->getSaldoFormateado()}}</span></td>
                            <td class="d-flex">
                                <div class="mx-auto">
                                    <a href="#" class="text-white btn-sm btn-info"><i class="far fa-eye"></i></a>
                                    <a href="#" class="btn-sm  btn-secondary"><i
                                            class="text-white fas fa-pen-fancy"></i></a>
                                    <a href="#modalConfirmDelete"
                                       data-toggle="modal"
                                       data-form=""
                                       data-msj=""
                                       class="btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-danger">Vacio</td>
                            <td class="text-danger">Vacio</td>
                            <td class="text-danger">Vacio</td>
                            <td class="text-danger">Vacio</td>
                            <td class="text-center text-danger">Sin Acciones</td>
                        </tr>

                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-danger" role="alert">
            <p><strong>Error!!!</strong> <span>Los metadatos no puedieron cargarse con exito</span><a
                    href="{{route('web.index')}}">Volver al inicio</a></p>
        </div>
    @endif
@endsection
