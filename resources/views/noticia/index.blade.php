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
      <!-- <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
    
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
    Noticia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Noticia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('noticias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Categoria Noticia</th>
										<th>Nombre Noticia</th>
										<th>Lugar Noticia</th>
										<th>Fecha Noticia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noticias as $noticia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $noticia->Categoria_Noticia }}</td>
											<td>{{ $noticia->Nombre_Noticia }}</td>
											<td>{{ $noticia->Lugar_Noticia }}</td>
											<td>{{ $noticia->Fecha_Noticia }}</td>

                                            <td>
                                                <form action="{{ route('noticias.destroy',$noticia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('noticias.show',$noticia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('noticias.edit',$noticia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $noticias->links() !!}
            </div>
        </div>
    </div>
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
    </html5>
