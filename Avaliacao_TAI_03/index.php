<!--Estudantes: Julia Pavan, Viória & Willian Bongiovanni
Turma: Informática III
Unidade Curricular: Tópicos avançados em Informática 
-->
<? 
include "./database/conexao.php"
?>
<!DOCTYPE html>

<html>

<head>

  <meta charset='UTF-8'/>

  <title>Avaliação TAI</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<link rel='stylesheet' href='style.css' />

</head>

<body>

  <div class='menu-navBar'>
    <div class='menu' id="navBar">
      <div class='home'><a href="#">HOME</a></div>

      <div class='about'><a href="#about">
          <i class=iconeAbout>
          </i>
          ABOUT</a></div>

      <div class='portfolio'><a href="#portfolio">
          <i class=iconePorfolio>
          </i> PORTFOLIO</a></div>

      <div class='contact'><a href="#contact">
          <i class=iconeContact>
          </i>
          CONTACT</a></div>
          <div class='contact'><a href="./screen/login/login_user/login.php">
            <i class=iconeContact>
            </i>
            ENTRAR</a></div>

      <div class='pesquisar'>
        <a href="#">
          <i class=iconePesquisar>
          </i>
        </a>
      </div>
    </div>
  </div>
<!--         

 -->
  <div class="fundo-container" id="home">
    <div class='fundo'>
  <!--Título -->
  <span class="titulo">
  MY
  <span class="tituloWebsite">TRAVELS</span>
  
    </span>
  </div>
  <div class="capa2">
    <!--Colocar em cima da imagem-->
    <span class="tagCapa2">15 Adr street, 5015</span>
  </div>
  <div class="capa">
    <!--Colocar em cima da imagem-->
    <div class="horario"> <span class="tagCapa">Open from 8am to 6pm</span>
    </div>
  </div>
  </div>
<!--
Novamente, o fechamento das tags está sendo disposto em ordem de abrangência, ou seja, a primeira <div> aberta deve ser a última a ser fechada, para que o espaço de montagem das informações encontradas não esteja desconfigurado.
  -->  

<!-- Parte 03 --> 
  
<!--
  Nessa seção, estaremos desenvolvendo o container "ABOUT ME". Para isso, novamente foi criado um escopo maior e, depois foram criados escopos menores para inserir as informações em partes. Esses escopos são delimitados pelas tags <div>.
 Além de que, faz-se necessário comentar a utilização do  id="about". Esse ID serve para especificar que essa seção será selecionada ao ser clicada na parte ABOUT da barra de navegação.
-->  
  
<!--Container About-->
  <div class="about-container" id="about">
    
<!--Título-->
    <div class="titulo-about">
     ABOUT ME
    </div>
    
<!--Subtítulo:
    
a)Ao invés de utilizar uma classe, utilizamos a tag <p>, isto é, um parágrafo. Em HTML, parágrafos são usados para agrupar conteúdos relacionados de qualquer tipo, como imagens e campos de um formulário. Basicamente, é um elemento em linha, ao contrário da <div>, um elemento em bloco.

b)O elemento <em> geralmente é utilizado para aplicar o estilo itálico.
--> 
  <p class="textCentro">
    <em>I love photography</em>
  </p>
    
 
      <p>
        We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    
  <div class="perfil">
    <div class="imgperfil">
 
      <p>
   
      <b>

        
        <i class="iconePerfil">
        </i>
        My name
      </b>
      </p>
<!-- 
A tag <br> sinaliza uma quebra de linha.
-->
      <br>

<!--Imagem:
A tag <img> representa a inserção de uma imagem no documento.

Elementos dessa tag:
      
      a) src = "" -> especifica o caminho para a imagem
      b) alt = "" -> especifica um texto alternativo para a imagem, se a imagem por motivo não pode ser exibido algum outro motivo, como por exemplo, para pessoas com necessidades especiais ou, algum tipo de deficiência visual.

Enquanto isso, as propriedades height e width são usadas para definir a altura e a largura de um elemento, respectivamente.
-->      
      <img src="./img/perfil.webp" class="imagemDoPerfil" alt="Imagem de Perfil" width="500" height="333">
    </div>
    <div class="textLado">
      <p>
        The My travel was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.
      </p>
    </div>
    <div class="texto">

          <p>
            <i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new
              sweet."</i>
          </p>
          <p>Chef, Coffeeist and Owner: Liam Brown</p>
        </div>
      
  </div>
<br>
<br>
<br>

<section class="section-center">
    <!-- image -->
    <article class="gift-img">
      <img src="./img/promo.webp" alt="gift" />
    </article>
    <!-- info -->
    <article class="gift-info">
      <h3>Promoção relâmpago para Paris</h3>
      <h4 class="giveaway">
        giveaway ends on Sunday, 24 April 2020, 8:00am
      </h4>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        Reprehenderit molestiae cum libero atque ut voluptate qui consectetur
        aliquid incidunt voluptatem quos, dolore, non commodi quaerat aliquam
        eligendi, quisquam totam blanditiis.
      </p>
      <div class="deadline">
        <!-- days -->
        <div class="deadline-format">
          <div>
            <h4 class="days">34</h4>
            <span>days</span>
          </div>
        </div>
        <!-- end of days -->
        <!-- days -->
        <div class="deadline-format">
          <div>
            <h4 class="hours">34</h4>
            <span>hours</span>
          </div>
        </div>
        <!-- end of days -->
        <!-- minutes -->
        <div class="deadline-format">
          <div>
            <h4 class="minutes">34</h4>
            <span>mins</span>
          </div>
        </div>
        <!-- end of days -->
        <!-- minutes -->
        <div class="deadline-format">
          <div>
            <h4 class="seconds">34</h4>
            <span>secs</span>
          </div>
        </div>
        <!-- end of days -->
      </div>
      <br>
      <div class="ver_promo">
        <button  class="btn btn-light"> 
        VEJA A PROMOÇÃO
       </button> 
     </div>
    </article>
  </section>
<!--Parte 05-->
<!-- 
Nessa seção do ABOUT ME, estaremos organizando as porcentagens de como o ser responsável pela página se caracteriza.

    Primeiramente, definimos o título através de uma <div>, em sequência montamos as partes do subtítulos de cada barra de porcentagem e os ícones.
-->
  <div class="tituloPorcentagem">
     Principais serviços da empresa
  </div>
    
<!-- 
A tag <p> está sendo utilizada para construir o título dessa porcentagem em questão, além disso, utiliza-se da tag <i> para dispor de um ícone em conjunto à escrita. Em ambas as 3 características da pessoa do site a regra que utilizamos é a mesma.
-->
  <p class="photography">
  <i class="iconeCamera">
  </i>
      Passsagens aereas
    </p>
 <!-- 
Nesta parte, construimos a barra de porcentagem. Para isso criamos um escopo (<div>), primeiramente, para a barra de porcentagem inteira, após, outra <div> para o preenchimento dessa barra. Novamente, nas 3 barras construídas o recurso utilizado foi o mesmo.
-->
  <div class="barraPorcentagem1">
    <div class="preenchimento1">
      90%
    </div>
  </div>

  <p class="webDesign">
     <i class="iconeComputador">
  </i>
      Hotéis
  </p>
  
  <div class="barraPorcentagem2">
    <div class="preenchimento2">
      85%
    </div>
  </div>

  <p class="photoshop">
      <i class="iconePintura">
  </i>
      Pacotes de viagens
  </p>
 
  <div class="barraPorcentagem3">
    <div class="preenchimento3">
      75%
    </div>
  </div>
  </div>

<!--Parte 06
Barra das Informações--->

<!--
Nessa seção, montamos a faixa cinza das informações dispostas no site. Para isso, criamos um escopo maior/classe mãe, para após inserir as infromações, cada qual em sua <div>, ou seja, no seu espaço da classe/escopo.
-->
  <div class="informacoes">
    
    <div class="partnerts">
<!--
Utilizamos a tag <span> por se tratar de um elemento de linha, ao contrário da <div>
-->
      <span class="numPartnerts">14+</span>
<!--
O elemento <br> se trata proporciona uma quebra de linha
-->
      <br>
      Partners
    </div>

    <div class="projects">
      <span class="numProjects">55+</span>
<!--
O elemento <br> se trata proporciona uma quebra de linha
-->
      <br>
      Projects Done
    </div>

    <div class="clients">
      <span class="numClients">89+</span>
<!--
O elemento <br> se trata proporciona uma quebra de linha
-->      
      <br>
      Happy Clients
    </div>

    <div class="meetings">
      <span class="numMeetings">150+</span>
<!--
O elemento <br> se trata proporciona uma quebra de linha
-->
      <br>
      Meetings
    </div>
  </div>

<!--Parte 07
Imagem do Portfolio-->

<!--
Primeiramente, delimitamos a classe mãe dessa seção, com um escopo maior. Nessa classe será inserida a imagem. Após, será definida a <div> do título, com uma tag <span> por ser elemento de linha.
-->
<br>
<br>
  <div class="imgPortfolio">
<!--Título-->
    <div class="tituloPortfolio">
      <span class="port">
        PORTFOLIO
        <br>
      </span>
    </div>
  </div>

<!--Parte 08
Container MY WORK-->  

 <!--Em primeiro plano, cria-se uma <div> que englobe todo o escopo da seção para após ser subdivida em partes, ou seja, outras <div>.
Imagem do Portfolio--> 
  <br>
  <br>
  <div class="myWork" id="portfolio">
       
    
    <h3 class="tituloMyWork">NOSSOS TRABALHOS</h3>
    
   
    <p class="subtituloMyWork">
      <em>
        Here are some of my latest lorem work ipsum tipsum.
  
        <br>
        Click on the images to make them bigger
      </em>
    </p>
 
    <br>
    
<div class='imagens'>
    <div class='grupoimagens'>   
      
        <div class="imagens-item">
          <img src="./img/img4.jpg" class="small_img"  >
        </div>
  
        <div class="imagens-item">
          <img src="./img/img5.jpg" class="small_img"  >
        </div>
  
        <div class="imagens-item">
          <img src="./img/img6.jpg" class="small_img" >
        </div>
  
    </div>
      <div class='grupoimagens2'>
        <div class="imagens-item">
          <img src="./img/img7.jpg" class="small_img"  >
        </div>
  
        <div class="imagens-item">
          <img src="./img/img8.jpg" class="small_img" >
        </div>
  
        <div class="imagens-item">
          <img src="./img/img9.png" class="small_img">
        </div>
  
      </div>
     <div class="botaoLOAD">
         <button  class="btn btn-light"> 
          LOAD MORE
        </button> 
      </div>
  </div>
    </div>
      </div>
  
<!--Parte 10
Imagem do Contact-->  
<section class="questions">
        <!-- title -->
        <div class="title">
          <h2>general questions</h2>
        </div>
        <!-- questions -->
        <div class="section-center">
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>do you accept all major credit cards?</p>
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>do you suppport local farmers?</p>
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
          <!-- single question -->
          <article class="question">
            <!-- question title -->
            <div class="question-title">
              <p>do you use organic ingredients?</p>
              <!-- button -->
              <button type="button" class="question-btn">
                <span class="plus-icon">
                  <i class="far fa-plus-square"></i>
                </span>
                <span class="minus-icon">
                  <i class="far fa-minus-square"></i>
                </span>
              </button>
            </div>
            <!-- question text -->
            <div class="question-text">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                dolore illo dolores quia nemo doloribus quaerat, magni numquam
                repellat reprehenderit.
              </p>
            </div>
          </article>
          <!-- end of single question -->
      </section>
<!--
Primeiramente, delimitamos a classe mãe dessa seção, com um escopo maior. Nessa classe será inserida a imagem. Após, será definida a <div> do título, com uma tag <span> por ser elemento de linha.
-->
<br>
<br>
  <div class="imgContact">
<!--Título-->
  <div class="partContact">
      <span class="tituloContact" id="contact">CONTACT</span>
    </div>
  </div>

<!--Parte 11
Container WHERE I WORK -->  
  <!--Em primeiro plano, criamos uma <div> que abrangia todo o escopo da seção para após ser subdivida em outros escopos, ou seja, outras <div>.
--> 
<div class='where-container'> 
      <div class='where-page'>
      <div class='titulo1'>
        <h3 class="tituloWhere">ONDE NÓS ESTAMOS</h3>

<!--Subtítulos:
Na primeira parte, a utilização do elemento <p> para destacar a escrita do subtítulo como um bloco de linha, e após, o elemento <em> para simbolizar que estamos impondo uma característica do tipo itálico nesse texto.
--> 
    
    <p class="subtitulo1">
      <em>I'd love your feedback!</em>
    </p>
      </div>
      <div class='img-where'>
      <img src="./img/where.jpg" class="imageMap" alt="Mapa"></div>
      <div class='where-text'>
       
  <div class='where-local'>
    
      <div class="localizacao">
        <div class="localizacao-text">
  <!-- 
O elemento <i>  é utilizado para adicionar ícones.
-->
        <i class="bussola">
        </i>
         São Paulo, BR
<!--
O elemento <br> se trata proporciona uma quebra de linha
-->  
        <br>
        <i class="telefone">
        </i>
         Phone: +00 151515
<!--
O elemento <br> se trata proporciona uma quebra de linha
-->  
        <br>

        <i class="email">
        </i>
         Email: mytravels@mail.com
<!--
O elemento <br> se trata proporciona uma quebra de linha
--> 
        <br>
      
 <!--     
A utilização do elemento <p> faz-se pela necessidade de escrever um breve texto, ou seja, dessa forma, estamos aplicando um elemento de linha --> 
      <p>
        Swing by for a cup of
 <!-- 
O elemento <i>  é utilizado para adicionar ícones.
-->
        <i class="iconeCafe"></i>
        , or leave me a note:

      </p>
        </div>
<!--Container - Formulário
O elemento <form> é usado para criar um formulário HTML para entrada do usuário.
  a)O atributo <target> especifica um nome ou uma palavra-chave que indica onde exibir a resposta recebida após o envio do formulário. Neste caso, está em branco.
-->      
      <form action="contato.php" method="POST" class="form">
        <div class="label" style="margin:5px -16px 8px -16px">

       
          <input id="nome" type="text" placeholder=" Name" required name="nome" value="<?=$nome ?>">
          <input id="email" type="text" placeholder=" Email" required name="email" value="<?=$email ?>">
        <br>
        <textarea id="msg" type="text" placeholder=" Message " required name="msg"><?=$msg ?></textarea>
          <br>
        
        <button id="enviar" type="submit" name="acao"> <i class="enviar"></i> SEND MESSAGE</button>
        <br>
</form>
  </div>
    </div>
      </div>
        </div>
          </div> 
      
<!--Parte 12:
 Footer -->
  
<!-- A tag<footer> define um rodapé para um documento ou seção.-->
  
  <footer class="rodape">
    
<!-- Seguindo, teremos uma âncora de redirecionamento para o topo da página, isto é, a seção HOME, por esse motivo utilizamos a URL hrel="", que simboliza o início da página.--> 
    
    <a class="toTheTop" href="">
  <!-- 
O elemento <i>  é utilizado para adicionar ícones.
-->
      <i class="iconeSeta"></i>
      To the top
    </a>
 <!-- Criamos uma classe para adicionar os ícones das redes sociais no rodapé-->    
    <div class="iconesRedesSociais">
      
<!--  Todos os elementos <i> são utilizados para adicionar ícones.
-->
      <i class="facebook"></i>
      <i class="instagram"></i>
      <i class="snapchat"></i>
      <i class="pinterest"></i>
      <i class="twitter"></i>
      <i class="linkedin"></i>
    </div>
    
<!-- Perto do fim, utilizamos da tag<p>, de parágrafo, para escrever o breve texto final sobre quem foi desenvolvido o site em questão, uma espécie de referência, neste caso, colocamos duas âncores com o link do GitHub de cada aluno, através da URL no href="...", além de que utilizamos do target especificando um nome ou uma palavra-chave, que no caso não existe, ou está em branco.
-->
    <p>
      Powered by
<!-- Links github-->
      <a href="https://github.com/julitaXD" target="_blank" class="powered">Julia</a>
      ,
      <a href="" target="_blank" class="powered">Vitória</a>
      and
      <a href="https://github.com/Will448" target="_blank" class="powered">Willian</a>
    </p>
  </footer>
  
<!-- Perto do fim, utilizamos a tag<p>, de parágrafo, para escrever o breve texto final sobre quem foi desenvolvido o site em questão, uma espécie de referência, neste caso, colocamos duas âncores com o link do GitHub de cada aluno, através da URL no href="...", além de que utilizamos do target especificando um nome ou uma palavra-chave, que no caso não existe, ou está em branco.
-->


 <!-- Para executar o JavaScript na página do site, deve-se criar uma tag <script> chamando a URL src="script.js", que associa-se a outra documento desse projeto em construção. Ou seja, essa tag faz uma ligação entre o HTML e o JavaScrpt
  -->

  <!-- Dessa forma, como a proposta era a tentativa de reprodução do CSS e HTML ao site, o tempalte no caso, não focamos no JavaScript, que realiza algumas funções como a mudança de cor da barra de navegação.
  --> 
  <script src="script.js"></script>
  <script src="script1.js"></script>

</body>

</html>
