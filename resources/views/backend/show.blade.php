@extends('layouts.masterbackend')

@section('nav')
    <a class="nav-link" href="{{url('backend')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Noticias</span></a>
@endsection

@section('content')
<form id="formDelete" action="{{ url('backend/' . $noticia->id) }}" method="post">
    @method('delete')
    @csrf
</form>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('backend') }}" class="btn btn-primary">Noticias</a>
                <a href="{{ url('backend/create') }}" class="btn btn-primary">Nueva noticia</a>
                <a href="#" data-id="{{ $noticia->id }}" data-name="{{$noticia->titulo }}" class="btn btn-danger" id="enlaceBorrar">Eliminar noticia</a>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Field</th>
            <th scope="col">Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Titulo</td>
            {{$noticia->titulo}}
        </tr>
        <tr>
            <td>Contenido</td>
            <td>{{$noticia->texto}}</td>
        </tr>
        <tr>
            <td>Imagen</td>
            <td>{{$noticia->imagen}}</td>
        </tr>
        <tr>
            <td>Autor</td>
            <td>{{$noticia->autor}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$noticia->fecha}}</td>
        </tr>
    </tbody>
</table>
@endsection