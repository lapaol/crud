<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>CRUD</title>
</head>

<body>
     <div class="container">
      <div class="row">
       <div class="col">
        <h1>Pequisar</h1>

    <nav class="navbar navbar-light bg-light">
        <form class="d-flex" action="pesquisar.php" method="POST">
            <input class="form-control me-2" type="search" placeholder="pesquise um nome" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Pequisar</button>
        </form>
    </nav>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome     </th>
                <th>Endereço </th>
                <th>Telefone </th>
                <th>E-mail   </th>
            <tr>
        </thead>

        <tbody>
           <tr>
                <td>Luis Felipe          </td>
                <td>Rua Santos Fontes    </td>
                <td>(21) 9 5588-0033     </td>
                <td>luisfelipe@gmail.com </td>
           <tr>
        </tbody>
       </table>
      </div>
      
     </div>
    </div>
   </body>

</html>


