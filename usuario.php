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
    <link rel="stylesheet" href="./css/user_page/nav_user.css">
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
    </header>

    <br><br><br><br><br><br><br><br><br><br><br>

    <h1>Você é um Usuário</h1>

    <script src="./js/user_page/nav_user.js"></script>
</body>
</html>