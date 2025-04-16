<?php
if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/nav_lateral.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>teste</title>
</head>
<body>
    
    <header class="header" id="header">
        <nav class="nav container">
           <a href="#" class="nav__logo">Logo</a>

           <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                 <li class="nav__item">
                    <a href="#" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Home</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="#" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Sobre nós</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="#" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Contatos</span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="#" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span><?php echo $_SESSION['nome']; ?></span>
                    </a>
                 </li>

                 <li class="nav__item">
                    <a href="#" class="nav__link">
                       <i class="ri-arrow-right-up-line"></i>
                       <span>Log Out</span>
                    </a>
                 </li>
              </ul>

              <!-- Close button -->
              <div class="nav__close" id="nav-close">
                 <i class="ri-close-large-line"></i>
              </div>
           </div>

           <!-- Toggle button -->
           <div class="nav__toggle" id="nav-toggle">
              <i class="ri-menu-line"></i>
           </div>
        </nav>

        <nav class="menu-lateral">

            <div class="btn-expand">
                <i class="bi bi-list" id="btn-expand"></i>
            </div>

            <ul>
                <li class="item-menu ativo">
                    <a href="#">
                        <span class="icon"><i class="bi bi-house-fill"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#categoria">
                        <span class="icon"><i class="bi bi-columns-gap"></i></span>
                        <span class="txt-link">Categorias</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#footer">
                        <span class="icon"><i class='bx bxs-phone'></i></span>
                        <span class="txt-link">Contatos</span>
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#">
                        <span class="icon"><i class="bi bi-person-circle"></i></span>
                        <span class="txt-link">Usuário</span>
                    </a>
                </li>

            </ul>

        </nav>
    </header>

    <br><br><br><br><br><br><br><br><br><br><br>

    <h1>Você é um Usuário</h1>

    <script src="./js/nav.js"></script>
    <script src="./js/nav_lateral.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>