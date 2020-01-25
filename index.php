<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>TIENDA</title>
</head>
<body>
<h1>TIENDA</h1>
<br>
<div class="container">
    <div class= "row">
    <div class="col">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="article" onkeyup="busqueda(this.value)"aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="addArticle">Agregar</button>
  </div>
</div>

    </div>
    </div>
    <div class="row">
    <div class="col">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo de Articulo</th>
            <th scope="col">precio</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
      </thead>
      <tbody id="info">


      </tbody>

    </div>
    </div>

</div>

<div  class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">ADD USER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form">
          <p>Nombre <input type="text" name="nombre" placeholder="Nombre" id="nameArticle"></p>
          <p>Tipo de Articulo 
          <select name="tipeArticle" id="tipeArticle">
              <option value=1>refresco</option>
              <option value=2>snacks</option>
          </select></p>
          <p>Precio <input type="number" name="precioArticle"placeholder="Precio" id="precioArticle"></p>
        
        
      </div>
      <div class="modal-footer">

      <img id="iconCheck"src="icons/check.svg" alt="" width="32" height="32" title="check">
        
        <div id="load" >
          <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          </div>
        


          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button id="saved" type="submit" class="btn btn-primary">Save changes</button>
          <button id="Update" class="btn btn-primary">Update</button>
          
        </form>
        
      </div>
    </div>
  </div>
</div>



<script src="js/jquery.js"></script>    
<script src="js/bootstrap.min.js"></script>
<script src="js/modal.js"></script>
</body>
</html>