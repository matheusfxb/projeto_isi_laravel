<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Employeers CRUD</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body> 
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="\">Laravel CRUD</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           <li><a href="\">Início</a></li>
           <li><a href="\add">Adicionar</a></li>
           <li><a href="\view">Listar</a></li>
           <li><a href="#">Ajuda</a></li>
          </ul>
         </div>
        </div>
       </nav>
       <div id="main" class="container-fluid">
           <h2>1</h2>
        <h3 class="page-header">Adicionar Item</h3>
        {!! Form::open(['action' => 'EmployeeController@store', 'method' => 'POST'])!!}
          <div class="form-group col-md-4">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', '', ['class' => "form-control", 'id' => "campo1"])}}
          </div>
          <div class="form-group col-md-4">
            {{Form::label('idade', 'Idade')}}
            {{Form::text('nome', '', ['class' => "form-control", 'id' => "campo2"])}}
          </div>
          <div class="form-group col-md-4">
            {{Form::label('funcao', 'Funcao')}}
            {{Form::text('nome', '', ['class' => "form-control", 'id' => "campo3"])}}
          </div>
          {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {{!! Form::close() !!}}
        <form action="index.html">
                <div class="row">
                        
                        <div class="form-group col-md-4">
                          <label for="campo3">Função</label>
                          <input type="text" class="form-control" id="campo3">
                        </div>
                       </div>
            <hr />
            <div id="actions" class="row">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.html" class="btn btn-default">Cancelar</a>
              </div>
            </div>
          </form>
       </div>
 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>