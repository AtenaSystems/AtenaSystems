<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-... (hash)" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="favicon/android-chrome-512x512.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="js/script.js"></script>

    <!-- icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <title>Atena Systems</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a onclick="pageScrollatenasystems()" class="navbar-brand">
                    <img src="img/Cópia de Prancheta 33_1.png" alt="Atena Systems" style="max-width: 190px;"
                        class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a onclick="pageScrollatenasystems()" class="nav-link" aria-current="page">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="pageScrollnossosservicos()">NOSSOS SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="pageScrollsobrenos()">SOBRE NÓS</a>
                        </li>
                        <div class="nav-item ">
                            <button class="nav-link btn-contato" id="" onclick="pageScrollcontato()">CONTATO</button>
                        </div>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>
    <section class="home-page">
        <div class="home-page-content">
        <p class="" style="font-size: clamp(14px, 1.5vw, 1.2rem);">DESENVOLVA <span class="efeito-cor">SEU SOFTWARE</span></p>
            <p style="font-size: clamp(26px, 3vw, 2.5rem);max-width: 900px;">soluções e desenvolvimento de software
                para sua empresa.</p>
            <a onclick="pageScrollnossosservicos()">Saiba mais <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <div>
            <img src="img/Cópia de Prancheta 1_3.png" alt="" style="max-width:200px;" class="logo">
        </div >

    </section>
    <div id="nossos-servicos" class="d1">
    </div>

    <section class="nossos-servicos" id="nossos-servicos">
        <h1 class="nossos-servicos-h1">NOSSOS SERVIÇOS</h1>
        <div class="content-1">

            <div class="nossos-servicos-content">
            <!-- <i class="icons fa-solid fa-code fa-xl" style="color: #005eff;"></i>     -->
                <div>
                
                <h3>  <span style="color: #1B59DE; font-size: clamp(26px,2vw, 1.5em); ">01 </span>  Desenvolvimento de Aplicativos</h3>
                <p>Criação de aplicativos para dispositivos móveis, computadores e tablets, usando as mais recentes
                    tecnologias para melhorar a experiência do usuário.</p>
                </div>
            </div>
            <!-- <div class="d2">
                <div class="divisor2"></div>
            </div> -->
            <div class="nossos-servicos-content">
            <!-- <i class="icons fa-regular fa-window-restore fa-xl"></i>  -->
                <div>
                
                <h3>  <span style="color: #1B59DE; font-size: clamp(26px,2vw, 1.5em);">02 </span>  Desenvolvimento de Sites</h3>
                <p>Desenvolvimento de sites responsivos, seguros e escaláveis, usando as melhores práticas de
                    programação e design.</p>
                </div>
            </div>

            
            
            <div class="nossos-servicos-content">
            <!-- <i class="icons fa-solid fa-headset fa-xl" style="color: #38588f;"></i>    -->
            <div> 
            
                <h3>  <span style="color: #1B59DE; font-size: clamp(26px,2vw, 1.5em);">03 </span>  Suporte à Aplicação</h3>
                <p>Manutenção da aplicação para garantir o melhor desempenho, correção de bugs e implementação de novos
                    recursos.</p>
                </div>
            </div>
            <div class="nossos-servicos-content">
            <!-- <i class=" icons fa-solid fa-shield-halved  fa-xl" style="color: #305697;"></i> -->
                <div>
                    <h3>  <span style="color: #1B59DE; font-size: clamp(26px,2vw, 1.5em);">04 </span>  Segurança</h3>
                    <p>Protegemos seus sistemas com criptografia avançada e autenticação robusta.
                     Nossa equipe especializada identifica e corrige vulnerabilidades, garantindo a segurança contínua.</p>
                </div>
                    </div>
        </div>
 
    </section>
    <section class="sobre-nos ">
        <h1 class="sobre-nos-h1"> SOBRE NÓS </h1>
        <div class="sobre-nos-content">
            <p id="sobre-nos">A Atena Systems é uma software house em Campinas - SP, fundada por sete talentosos programadores do
                renomado Colégio Técnico "Bento Quirino".
                Oferecemos soluções personalizadas para o desenvolvimento de sites e sistemas, simplificando e
                otimizando as operações das empresas.
                Nossa equipe altamente capacitada busca constantemente inovação e atualização tecnológica.
                Valorizamos o atendimento personalizado e estamos prontos para enfrentar desafios e transformar ideias
                em realidade.
                Contamos com serviços de alta qualidade para impulsionar o crescimento das empresas. Estamos ansiosos para
                colaborar com você e construir uma parceria de sucesso!</p>
    </section>

    <!-- <section id="mapa">
        <div class="mapa">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.0915763313055!2d-47.0622623596467!3d-22.909992879339207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8ca99d7d933%3A0x6532f8818a526bc7!2sR.%20Jos%C3%A9%20de%20Alencar%2C%20442%20-%20Centro%2C%20Campinas%20-%20SP%2C%2013013-040!5e0!3m2!1sen!2sbr!4v1685287165694!5m2!1sen!2sbr"
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="texto-sobreposto">
            <h2><i class="fa-solid fa-location-dot"></i> Localização</h2>
            <P>R. José de alencar, 442 - Centro, Campinas - SP, Brasil</P>
          </div>
          <style>
            .mapa {
              position: relative;
              width: 100%;
              height: 450px;
            }
  
            .mapa iframe {
              width: 100%;
              height: 100%;
              border: 1px solid #797979;
              box-shadow: 0 0 3px #999;
  
            }
  
            .texto-sobreposto {
              position: absolute;
              top: 10px;
              left: 10px;
              background-color: #fff;
              padding: 20px;
              padding-bottom: 2.15em;
              border-radius: 6px;
              font-size: 1.3em;
              line-height: 1em;
              height: 5em;
              box-shadow: 0 0 3px #999;
            }
  
            .texto-sobreposto p {
              color: #868686;
            }
  
            .texto-sobreposto h2 {
              padding: 10px 5px 10px 0px;
              color: #27272a;
            }
          </style>
        </div>
      </section> -->


    <section class="contato">
        <h1 id="contato">CONTATO</h1>
        <div class="contato-content">
            
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $destinatario = "atenasystemtcc@gmail.com";
                $assunto = isset($_POST["assunto"]) ? $_POST["assunto"] : "";
                $mensagem = isset($_POST["mensagem"]) ? $_POST["mensagem"] : "";
                $email = isset($_POST["email"]) ? $_POST["email"] : "";

                $smtpHost = "smtp.gmail.com";
                $smtpPort = 587;
                $smtpUser = "atenasystemtcc@gmail.com"; 
                $smtpPassword = "atenasystemtcc27"; 

                $headers = "From: $email\r\n";
                $headers .= "Reply-To: $email\r\n";
                $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

                $emailEnviado = mail($destinatario, $assunto, $mensagem, $headers, "-f $email");
            }
        ?>

        <div class="form-contato">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <!-- Campo Nome e Email lado a lado -->
                        <input type="text" id="email" name="email" placeholder="Seu email" required>
                        <input type="assunto" id="assunto" name="assunto" placeholder="Seu nome" required>
                <!-- Campo Comentário abaixo -->
                    <textarea id="mensagem" name="mensagem" placeholder="Comentário" required></textarea>
                
                <!-- Botão de envio -->
                    <button type="submit" class="btn-form">Enviar</button>
            </form>
        </div>

        <?php
if (isset($emailEnviado)) {
    if ($emailEnviado) {
        echo "<p id='success-message' class='success-message'>E-mail enviado com sucesso.</p>";
    } else {
        echo "<p id='error-message'>Ocorreu um erro ao enviar o e-mail.</p>";
    }
}
?>

<script>
    
    setTimeout(function() {
        var successMessage = document.getElementById('success-message');
        var errorMessage = document.getElementById('error-message');
        
        if (successMessage) {
            successMessage.style.display = 'none';
        }
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 4000); 
</script>

            <div class="contato-redes">
                <h3>REDES</h3>
                <a href="mailto:tccSystems@gmail.com" target="_blank" class="btn-redes"> <img src="img/icons/at-solid.svg"> EMAIL </a>
                <a href="https://www.instagram.com/atenasystem/" target="_blank" class="btn-redes"> <img src="img/icons/instagram.svg"> INSTAGRAM </a>
                <a href="https://github.com/AtenaSystems" target="_blank" class="btn-redes"> <img src="img/icons/github.svg"> GITHUB </a>
            </div>
        </div>

    </section>
    <footer>
        <p class="direitos">
        © 2023 AtenaSystems Inc. Todos os direitos reservados.
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

<script>
        window.addEventListener("scroll", function() {
            const scrollPosition = window.scrollY;

            // Defina a altura em que deseja que a mudança de cor ocorra (em pixels)
            const alturaMudancaDeCor = 200;

            const navbar = document.querySelector(".navbar");

            if (scrollPosition > alturaMudancaDeCor) {
                // Altere a cor de fundo da barra de navegação quando a página for rolada para baixo
                navbar.style.backgroundColor = "#e5eaf5"; // Nova cor de fundo
            } else {
                // Volte à cor de fundo da barra de navegação padrão
                navbar.style.backgroundColor = "transparent"; // Cor de fundo inicial
            }
        });
</script>


</html>