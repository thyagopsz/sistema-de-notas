<header>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style-type: none;
            box-sizing: border-box;
        }

        nav{
            position: fixed;
            width: 400px;
            height: 100%;
            background-color: purple;
            display: flex;
            align-items: center;
        }
        .lista-links{
            width: 100%;
        }
        .lista-links li{
            padding-left: 12px;
            display: flex;
            align-items: center;
            font-size: 1.4rem;
            color: white;
        }
        .lista-links a{
            display: block;
            padding: 15px;
            color: white;
            text-decoration: none;
        }
        .selected{
            background-color: #231af3;
        }
    </style>
<header>
<nav>
    <ul class="lista-links">
        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "cadastrar_nota.php" ? "selected" : "") ?>" >
            <i class="fa-solid fa-plus"></i>
            <a href="../paginas/cadastrar_nota.php">Cadastrar Nota</a>
        </li>

        <li class="<?php echo (basename($_SERVER['PHP_SELF']) == "listagem_notas.php" ? "selected" : "") ?>">
            <i class="fa-solid fa-list"></i>
            <a href="../paginas/listagem_notas.php">Lista de Notas</a>
        </li>
    </ul>
</nav>