@extends('General.plantilla')

@section('title', 'Primera tabla')

@section('content')
    <div>
        <div class="container text-center">
            <div class="border border-success p-2 mb-2">
                <div class="col">
                    <form action="{{route('datos.view')}}" method="GET">
                        @csrf
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col-2">ID</th>
                                    <th scope="col-3">Nombre</th>
                                    <th scope="col-2">Fecha</th>
                                    <th scope="col-3">Estado</th>
                                    <th scope="col-3">Profesion</th>
                                    <th scope="col-2">Matricula</th>
                                </tr>
                            </thead>
                            @isset($Tabla1)
                                @foreach ($Tabla1 as $tabla1)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{$tabla1->ID}}</th>
                                            <td>{{$tabla1->NOMBRE}}</td>
                                            <td>{{$tabla1->FECHA}}</td>
                                            <td>{{$tabla1->ESTADO}}</td>
                                            <td>{{$tabla1->PROFESION}}</td>
                                            <td>{{$tabla1->MATRICULA}}</td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endisset
                        </table>
                    </form>
                </div>
            </div>
            <div  class="border border-primary p-2 mb-2">
                <div class="col">
                        <h2>Buscar</h2>
                </div>
                <form action="{{route('datos/byid.search')}}"  method="GET">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">ID*</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="id" placeholder="Ingrese ID">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-info col-20">Consultar</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div  class="border border-secondary p-2 mb-2">
                <div class="col">
                    <h2>Insertar</h2>
                </div>
                <form action="{{route('create.create')}}"  method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">ID*</label>
                        </div>
                        <div class="col-2">
                            <input class="form-control" name="id" placeholder="Ingrese ID">
                        </div>
                        <div class="col-2">
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="nombre" placeholder="Ingrese nombre">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">Fecha</label>
                        </div>
                        <div class="col-2">
                            <input class="form-control" name="fecha" placeholder="Ingrese Fecha">
                        </div>
                        <div class="col-2">
                            <label for="floatingInput">Estado</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="estado" placeholder="Ingrese estado">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">Profesion</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="profesion" placeholder="Ingrese profesion">
                        </div>
                        <div class="col-2">
                            <label for="floatingInput">Matricula</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="matricula" placeholder="Ingrese matricula">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="container text-center col-3">
                            <button type="submit" class="btn btn-secondary">Agregar</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div  class="border border-warning p-2 mb-2">
                <div class="col">
                    <h2>Actualizar</h2>
                </div>
                <form action="{{route('update.update')}}"  method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">ID*</label>
                        </div>
                        <div class="col-2">
                            <input class="form-control" name="id" placeholder="Ingrese ID">
                        </div>
                        <div class="col-2">
                            <label for="floatingInput">Nombre</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="nombre" placeholder="Ingrese nombre">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">Fecha</label>
                        </div>
                        <div class="col-2">
                            <input class="form-control" name="fecha" placeholder="Ingrese Fecha">
                        </div>
                        <div class="col-2">
                            <label for="floatingInput">Estado</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="estado" placeholder="Ingrese estado">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">Profesion</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="profesion" placeholder="Ingrese profesion">
                        </div>
                        <div class="col-2">
                            <label for="floatingInput">Matricula</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="matricula" placeholder="Ingrese matricula">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="container text-center col-3">
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div  class="border border-danger p-2 mb-2">
                <div class="col">
                    <h2>Eliminar</h2>
                </div>
                <form action="{{route('delete.delete')}}"  method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-2">
                            <label for="floatingInput">ID*</label>
                        </div>
                        <div class="col-4">
                            <input class="form-control" name="id" placeholder="Ingrese ID">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-danger col-20">Eliminar</button>
                        </div>
                    </div>
                </form>
            </div>        
        </div>
    </div>
@endsection