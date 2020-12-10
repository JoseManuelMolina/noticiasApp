@extends('layouts.masterbackend')

@section('nav')
    <a class="nav-link" href="{{url('backend')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Noticias</span></a>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Atrás</a>
                <a href="{{ url('backend') }}" class="btn btn-primary">Noticias</a>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('backend') }}" method="post" id="createNoticiaForm">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="titulo">Titulo</label>
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" maxlength="20" minlength="2" required class="form-control" id="titulo" placeholder="Titulo de la noticia" name="titulo" value="{{ old('titulo') }}">
        </div>
        <div class="form-group">
            <label for="texto">Texto</label>
            @error('texto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <textarea name="texto" minlength="15" maxlength="200" required class="form-control" id="texto" placeholder="Contenido de la noticia">{{old('texto')}}</textarea>
        </div>
        <div class="form-group">
            <label for="imagen">Imagen</label>
            @error('imagen')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="file" class="form-control" id="imagen"  name="imagen" accept="image/png, image/jpg, image/jpeg">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            @error('autor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" maxlength="50" minlength="5" required class="form-control" id="autor" placeholder="Autor" name="autor" value="{{ old('autor') }}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            @error('fecha')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br>
            <input type="date" name="fecha" id="fecha" min="1980-01-01" max="2020-12-31"/>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection