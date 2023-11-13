<?php
  include 'check_login.php';

  if($_SESSION['nivel'] != "A"){
        header('location:index.php?erro_login=true');
        exit;
  }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/774e56aade.js" crossorigin="anonymous"></script>
    <title>FitBurguer</title>
</head>
<body>
    <header>
    <div class ="lg-adm">
        <h1>pagina do cliente<h1>
            <p>usuario logado:
                <?php echo $usuario; ?>
            </p>
        
            <a href="logout.php">Sair</a>
    </div>        
        <div class="icon-social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram-square"></i></a>
        </div>
        <div class="logo">
            <img src="imagens/branco.png" alt="FitLunches" width="250" height="280">
        </div>
        <div>
            <ul class="item-menu">
                <li>Quem somos.</li>
                <li>Destaques.</li>
                <li>Refeiçoes</li>
                <li>Contato</li>
            </ul>
        </div>
    </header>
    <section>
        <div class="about">
            <p>
                Bem-vindo à FitLunch - Sua Página de Lanche Fitness!

                No mundo acelerado de hoje, manter uma dieta saudável e equilibrada é essencial para garantir que tenhamos energia suficiente para enfrentar o dia a dia. Aqui, na FitLunch, nossa lanchonete dedicada aos lanches fitness, você encontrará uma variedade de opções deliciosas que não comprometem seus objetivos de saúde e bem-estar.
                
                Nossos lanches são cuidadosamente preparados para atender às necessidades dos entusiastas do fitness, pessoas ativas e todos que buscam uma alternativa nutritiva aos petiscos tradicionais. De barras de proteína saborosas a smoothies energizantes, oferecemos opções que são ricas em nutrientes, baixas em calorias vazias e deliciosas ao mesmo tempo.
                
                Se você está procurando um impulso pós-treino, um lanche saciante para o escritório ou uma opção saudável para satisfazer aquela vontade de comer algo gostoso, a FitLunch é o lugar certo. Explore nosso menu diversificado e descubra como é possível manter o equilíbrio entre sabor e saúde.
                
                Nossos ingredientes frescos e receitas criativas garantem que cada mordida seja uma experiência prazerosa e nutritiva. Aqui, acreditamos que comer bem não deve ser chato. Portanto, deixe-se encantar por nossa seleção de lanches que não só nutrem o seu corpo, mas também satisfazem o seu paladar.
                
                Na FitLunch, a sua jornada de alimentação saudável começa com escolhas inteligentes e saborosas. Junte-se a nós e descubra como é possível desfrutar de lanches que fazem bem para o corpo e para a mente. Estamos aqui para apoiá-lo em sua busca por um estilo de vida ativo e saudável!
            </p>
        </div>
        <img src="imagens/marmitas cortada.jpg" alt="marmitas veganas" class="image-about imagem-foco">
        <img src="imagens/marmitas 2.jpg" alt="lanches fit" class="image-about imagem-foco" width="170" height="255">
        <img src="imagens/marmitas 3.jpg" alt="marmitas dia a dia" class="image-about imagem-foco" width="250" height="250">
        <img src="imagens/sobremesa fit.jpeg" alt="sobremesas fit" class="image-about imagem-foco" width="250" height="250">
    </section>


   
</body>
</html>