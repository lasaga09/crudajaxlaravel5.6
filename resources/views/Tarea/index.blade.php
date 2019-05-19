<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>



    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
      
 





     <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
add
</button>
<br>

<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


  <form id="frm">
    <meta name="token" content="{{ csrf_token() }}" />
  <div class="form-group">
    <label for="exampleInputEmail1">Tarea</label>
    <input type="text" class="form-control" id="tarea" name="tarea"  placeholder="tarea">
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">descripcion</label>
    <input type="text" class="form-control" id="descripcion" name="descripcion"  placeholder="descripcion">
    
  </div>
   <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
</form>


     
      </div>
      
    </div>
  </div>
</div>


<br>



<!-- Modal edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


  <form id="frm">
    <meta name="tokenup" content="{{ csrf_token() }}" />
    <input type="text" id="idup" hidden="">
  <div class="form-group">
    <label for="exampleInputEmail1">Tarea</label>
    <input type="text" class="form-control" id="tareaup" name="tarea"  placeholder="tarea">
    
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">descripcion</label>
    <input type="text" class="form-control" id="descripcionup" name="descripcion"  placeholder="descripcion">
    
  </div>
   <button type="button" class="btn btn-primary" id="btnUpdate">Save</button>
</form>


     
      </div>
      
    </div>
  </div>
</div>




<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tarea</th>
      <th scope="col">descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($datos as $value)
    
   
        <tr>
        <th scope="row">{{$value->id}}</th>
        <td>{{$value->tarea}}</td>
        <td>{{$value->descripcion}}</td>
        <td>
        <button data-toggle="modal" data-target="#edit" id="btnEdit" idtarea='{{$value->id}}'>edit</button>
        <button id="btnEliminar" idtareaup='{{$value->id}}' token='{{ csrf_token() }}' >x</button>
        
        </td>
        </tr>
     @endforeach
  </tbody>








   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
    <script src="js/tarea.js"></script>
  </body>
</html>