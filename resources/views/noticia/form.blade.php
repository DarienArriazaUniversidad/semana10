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
<!-- <header class="header">
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
  </header> -->
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Categoria_Noticia') }}
            {{ Form::text('Categoria_Noticia', $noticia->Categoria_Noticia, ['class' => 'form-control' . ($errors->has('Categoria_Noticia') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Noticia']) }}
            {!! $errors->first('Categoria_Noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre_Noticia') }}
            {{ Form::text('Nombre_Noticia', $noticia->Nombre_Noticia, ['class' => 'form-control' . ($errors->has('Nombre_Noticia') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Noticia']) }}
            {!! $errors->first('Nombre_Noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Lugar_Noticia') }}
            {{ Form::text('Lugar_Noticia', $noticia->Lugar_Noticia, ['class' => 'form-control' . ($errors->has('Lugar_Noticia') ? ' is-invalid' : ''), 'placeholder' => 'Lugar Noticia']) }}
            {!! $errors->first('Lugar_Noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_Noticia') }}
            {{ Form::text('Fecha_Noticia', $noticia->Fecha_Noticia, ['class' => 'form-control' . ($errors->has('Fecha_Noticia') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Noticia']) }}
            {!! $errors->first('Fecha_Noticia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
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