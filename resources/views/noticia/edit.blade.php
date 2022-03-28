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
    Update Noticia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Noticia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('noticias.update', $noticia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('noticia.form')

                        </form>
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
