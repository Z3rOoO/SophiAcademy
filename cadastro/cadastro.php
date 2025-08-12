<?php
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$senha = $_POST['senha'];
$csenha = $_POST['csenha'];



$i = 0;
if ($i == 0) {
    $users = "Users.txt"; // Nome do arquivo que será criado
    $users_ler = file_get_contents($users); // Lê o conteúdo do arquivo
    $proc = "Nome: '{$nome}'"; // Dado a ser procurado
    if (strpos($users_ler, $proc) !== false) { // Verifica se o dado existe no conteúdo
        $i = 1;
    } elseif ($i == 0) {
        $users = "Users.txt";
        $users_ler = file_get_contents($users);
        $proc = "CPF: '{$cpf}'";
        if (strpos($users_ler, $proc) !== false) {

            $i == 1;
        } elseif ($i == 0) {
            $users = "Users.txt"; // Nome do arquivo que será criado
            $users_ler = file_get_contents($users); // Lê o conteúdo do arquivo
            $proc = "Email: '{$email}'"; // Dado a ser procurado
            if (strpos($users_ler, $proc) !== false) { // Verifica se o dado existe no conteúdo

                $i = 1;
            } elseif ($i == 0) {
                $users = "Users.txt";
                $users_ler = file_get_contents($users);
                $proc = "Celular: '{$celular}'";
                if (strpos($users_ler, $proc) !== false) {

                    $i == 1;
                } elseif ($i == 0 && $senha == $csenha) {
                    $users = "Users.txt";
                    $print = "Nome: '{$nome}' CPF: '{$cpf}' Email: '{$email}' Celular: '{$celular}' Senha: '{$senha}' \n";
                    $users_op = fopen($users, "a"); // "w" para sobreescrever o arquivo, "a" para adicionar

                    if ($users) {
                        fwrite($users_op, $print);
                        fclose($users_op);
                        header("Location: ./index/index.html");
                    }
                }
            }
        }
    }

}



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SophiAcademy | Cursos Online</title>
    <link rel="stylesheet" href="./erro.css">
    <link rel="shortcut icon" href="./img/black/sophiAcademy.png" type="image/x-icon">

</head>

<body>
    
        <input type="checkbox" id="escolher_tema" name="escolher_tema" checked>
  
    <div class="tema">
        <label for="escolher_tema">
            <div class="sol" id="sol"></div>
            <div class="lua" id="lua"></div>
        </label>
    </div>
    <header id="header">

        <div class="logo_header" id="logo_header">
            <div class="logo_header_w"></div>
            <div class="logo_header_b"></div>
        </div>
        <div class="logo_header_comp" id="logo_header_comp">
            <div class="logo_header_w_comp"></div>
            <div class="logo_header_b_comp"></div>
        </div>
        <div class="nav_header" id="nav_header">
            <nav class="nav_header">
                <a href="./index.html" class="link_a">Home</a>
                <a href="./catalogo/catalogo.html" class="link_a">
                Catalogo
                </a>
                <a href="./login/login.html" class="link_a">
                    Entrar
                </a>
                <a href="./cadastro.html" class="link_a">
                    Cadastrar
                </a>
            </nav>
        </div>
        <div class="search_header">
            <input type="text" class="text" placeholder="Procurar" autofocus required>
            <input type="submit" class="submit">
        </div>



    </header>
    <!--Cadastro-->

    <div class="content">
        <div class="loginfume">


        </div>
        <div class="erro">
            <div class="txt1">
                <p>Erro ao logar</p>
            </div>
            <div class="txt2">
                <p>Verificar dados e tentar novamente</p>
            </div>
            <div class="txt3">
                <p>se já tem uma contra <a href="./login/login.html">clique aqui!</a></p>
            </div>
            <a href="./cadastro.html" class="button"><button class="button">voltar</button></a>
        </div>


    </div>












    <footer>
        <!--Logo Grande do Footer-->
        <div class="logo-footer">
            <img src="./img/White/sophiAcademy.png" alt="Logo">
        </div>
        <!--Informações de Contato do Footer-->
        <div class="footer-info">
            <div class="footer-SobreNos">
                <h1 class="footer-tituloseccoes">Sobre Nós</h1>
                <div class="footer-nav">
                </div>

                <a href="https://www.instagram.com/">
                    <h3>Nos conheça melhor </h3>
                </a><br>
                <h3>Endereço:Rua Quatro, 550, São Caetano - SP (Brasil)</h3><br>
                <h3>Telefone: (55) 11 9999-9999</h3><br>
                <h3>Atendimento: 8hr - 22hr </h3>
                <h3>de segunda à sexta</h3>
            </div>

            <!--Login e Cadastro-->
            <div class="footer-conta">
                <div class="footer-contaa">
                    <h1 class="footer-tituloseccoes">Informações</h1>
                    <div class="footer-nav">
                        <nav>
                            <a href="./login/login.html" target="_blank">
                                <h3>Login</h3><br>
                            </a>
                            <a href="./cadastro.html">
                                <h3>Cadastro</h3>
                            </a>
                            <br>
                            <h3>Política de Privacidade</h3><br>
                            <h3>Direitos autorais</h3><br>
                            <h3>FAQ</h3><br>

                        </nav>

                    </div>
                </div>
            </div>

            <!--Redes Sociais no Footer-->
            <div class="footer-Redes">

                <h1 class="footer-tituloseccoes">Redes Sociais</h1>
                <div class="footer-nav">

                    <nav>
                        <div class="footer-r">
                            <a href="https://www.instagram.com/">
                                <img src="./img/White/instagram.png" class="imgredes">
                            </a>
                        </div>

                        <div class="footer-r">
                            <a href="https://x.com/?lang=pt">
                                <img src="./img/White/x.png" class="imgredes">
                            </a>
                        </div>

                        <div class="footer-r">
                            <a href="https://www.youtube.com/">
                                <img src="./img/White/yt.png" class="imgredes">
                            </a>
                        </div>


                    </nav>
                </div>
            </div>
            <!--Forma de Contato no footer-->
            <div class="footer-Contato">
                <h1 class="footer-tituloseccoes">Nos Contate</h1><br>
                <h3>Alguma dúvida? Algum comentário? Nos mande um e-mail!</h3><br><br>
                <div style="display: flex; width: 30dvh;">
                    <div class="footer-email">
                        <input type="email" placeholder="Seu e-mail">
                        <div class="footer-ButtonContato">
                            <input type="submit" value="enviar">
                        </div>

                    </div><br>


                </div>
            </div>
        </div>


    </footer>
    <script src="./padrões/script.js"></script>
</body>

</html>