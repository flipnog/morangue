<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="stylelogin.css">
    <link rel="shortcut icon" href="logo2.png" type="image/x-icon">
    <title>CEMPTRA - Login</title>
</head>
<body>

    <div class="login">
        <img src="logo2.png" alt="logo">
        <h3>Bem-vindo(a)! Junte-se</h3>
        <h2>ao CEMPTRA</h2>
        <form class="login-form" method="post" action="cadastrar.php">
            <input type="text" placeholder="Usuário" id="usuario" name="usuario" required>
            <input type="email" placeholder="E-mail" id="email" name="email" required>
            <input type="password" placeholder="Senha" id="senha" name="senha" required>
            <button type="submit" id="login_button" href="principal.html">Acessar</button>
            <a href="#">Esqueceu sua senha?</a>
            <a href="login.html">Já tem uma conta?</a>
        </form>
    </div>

    <main>
        
    </main>
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Contatos</h1>
                <p>Desenvolvido por: <b>Felipe Diniz</b></p>

                <div id="footer_social_media">
                    <a href="https://www.instagram.com/felipe.nogs" target="_blank" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="https://wa.link/jcgl8g" target="_blank" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <ul class="footer-list">
                <li>
                    <h3>Outros sites</h3>
                </li>
                <li>
                    <a href="https://mostracultural.info" target="_blank" class="footer-link">Mostracultural</a>
                </li>
                <li>
                    <a href="https://flipeixes.netlify.app" target="_blank" class="footer-link">Flipeixes</a>
                </li>
                <li>
                    <a href="https://cardsteste.netlify.app" target="_blank" class="footer-link">Cards (Beta)</a>
                </li>
            </ul>
        </div>

        <div id="footer_copyright">
            &#169
            2023 Nenhum direito reservado :)
        </div>
    </footer>
</body>
</html>