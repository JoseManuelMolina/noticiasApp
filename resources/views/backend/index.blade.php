@extends('layouts.masterbackend')

@section('nav')
    <a class="nav-link" href="{{url('backend')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Noticias</span></a>
@endsection

@section('content')
    <h3>Backend Index</h3>
    <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url('backend/create') }}" class="btn btn-primary">Create enterprise</a>
            </div>
        </div>
    </div>
    </div>
    <table class="table table-hover">
    <thead>
        <tr>
            <th>#id</th>
            <th>titulo</th>
            <th>texto</th>
            <th>imagen</th>
            <th>autor</th>
            <th>fecha</th>
            <th>show</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($noticias as $noticia)
        <tr>
            <td>{{ $noticia->id }}</td>
            <td>{{ $noticia->titulo }}</td>
            <td>{{ $noticia->texto }}</td>
            <td>{{ $noticia->imagen }}</td>
            <td>{{ $noticia->autor }}</td>
            <td>{{ $noticia->fecha }}</td>
            <td><a href="{{ url('backend/' . $noticia->id) }}">show</a></td>
            <td><a href="#">edit</a></td>
            <td><a href="#" data-id="#" class="enlaceBorrar" >delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
<form id="formDelete" action="{{ url('backend') }}" method="post">
    @method('delete')
    @csrf
</form>
@endsection