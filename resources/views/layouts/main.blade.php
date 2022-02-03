<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Fonte do Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="css/styles.css">
    <script src="/js/scrips.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
           <div class="collapse navbar-collapse" id="navbar">
               <a href="/" class="navbar-brand">
                 <img src="/img/hdcevents_logo.svg" alt="HDC Events">
               </a>
               <ul class="navbar-nav">
                   <li class="nav-item">
                       <a href="/" class="nav-link">Eventos</a>
                   </li>
                   <li class="nav-item">
                       <a href="/create" class="nav-link">Criar Evento</a>
                   </li>
                   <li class="nav-item">
                       <a href="/" class="nav-link">Entrar</a>
                   </li>
                   <li class="nav-item">
                       <a href="/" class="nav-link">Cadastrar</a>
                   </li>
               </ul>
           </div>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
    <footer>
        <p>HDC Events &copy; 2022</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
