<!DOCTYPE html>
<html lang="PT-BR">
    
<!-- Página base para todas as demais do projeto -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
      /*Importando fonte do google fonts*/
      @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;400&display=swap');

      /* Escolhi um mix de css interno e inline para esse projeto.
      Por ser um projeto curto sem muita estilização.*/

      body{
        background-color: rgb(241, 241, 241);
        color: black;
        font-family: 'Inter', sans-serif;
      }

      h1 {
        font-size: 3rem; 
        text-align: center;
      }

      label {
        font-size: 1.5em;
        font-family: 'Inter', sans-serif;
      }

      main {
        font-family: 'Inter', sans-serif;
        color: black;
        min-width: 300px;
        max-width: 800px;
        padding: 20px;
        margin: auto;
        margin-bottom: 30px;
        background-color: rgba(189, 189, 189, 0.445);
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.418);
        border-radius: 0px 0px 10px 10px;
        margin-top: 100px;
      }

      a{
        color: #000;
        font-size:1em;
        font-weight: bold; 
      }

      div {
        display: flex; 
        flex-direction:row; 
        align-items:center; 
        flex-wrap: wrap; 
        justify-content: center;
      }

      div#colunas {
        display: flex; 
        flex-direction:column; 
        align-items:center; 
        flex-wrap: wrap; 
        justify-content: center;
      }

      input {
        width: 12rem;
        height: 1.8rem;
      }

      th {
        border: 1px solid #000;
        padding: 5px; 
      }

      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center; /* Centraliza horizontalmente */
        text-align: center;
        height: 30vh;
        justify-content: center; /* Centraliza verticalmente */
      }

    </style>
</head>
<body>
  <!-- Navbar bootstrap --> 
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-size: 1.8em">Minha agenda!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{ route('agendas.create')}}">Cadastrar</a>
            </li> &nbsp;&nbsp;
            <li class="nav-item">
              <a href="{{ route('agendas.index')}}">Listar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    {{$slot}}

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>