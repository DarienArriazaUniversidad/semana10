<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">PORTADA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/noticias">NOTICIAS</a>
          </li>
      </div>
    </nav>
  </header>
@extends('layouts.app')

@section('template_title')
    {{ $noticia->name ?? 'Show Noticia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Noticia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('noticias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Categoria Noticia:</strong>
                            {{ $noticia->Categoria_Noticia }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Noticia:</strong>
                            {{ $noticia->Nombre_Noticia }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar Noticia:</strong>
                            {{ $noticia->Lugar_Noticia }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Noticia:</strong>
                            {{ $noticia->Fecha_Noticia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<style>
        body{
            background-color:#8A9197;
        }
        h1{
            color:white;
            font-size: 50px;
            text-align: center;
        }
        h2{
            font-size: 40px;
            text-align: center;
        }
        h3{
            font-size: 40px;
            text-align: center;
        }
    </style>
</body>
</html>
