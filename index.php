
<?php get_header(); ?>


<style>


.section-subtitle {
  margin: 0 auto 5% auto;   /* centraliza horizontalmente */
  max-width: 90%;           /* evita encostar nas bordas em celulares */
  text-align: center;       /* centraliza o texto */
  font-size: 16px;          /* tamanho padrão */
  line-height: 1.4;         /* melhor leitura */
}


.carousel-wrapper {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  overflow: hidden;
}

.carousel {
  overflow: hidden;
  width: 100%;
}

.carousel-track {
  display: flex;
  transition: transform 0.5s ease-in-out;
  gap: 20px;
}


.card {
   flex: 0 0 calc(100% - 40px); /* ocupa quase toda a tela menos o espaço das setas */
  min-width: 220px;           /* nunca menor que isso */
  max-width: 300px;           /* no desktop continua bonitinho */
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
  overflow: hidden;
  transition: transform 0.3s ease;
}

.card:hover {
  transform: translateY(-5px);
}

.card a {
  color: inherit;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.image-wrapper {
  width: 100%;
  height: 160px;
  overflow: hidden;
}

.image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-content {
  padding: 16px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  flex: 1;
}

.card-title {
  font-size: 18px;
  font-weight: 600;
  color: #7e0000; /* vermelho escuro */
  margin: 0 0 8px;
}

.card-description {
  font-size: 14px;
  color: #555;
  margin-bottom: 12px;
  line-height: 1.4;
}



.price-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;   /* se não couber, joga para linha de baixo em vez de cortar */
  gap: 8px;          /* espaço entre elementos ao quebrar linha */
}



.price {
  font-size: 16px;
  color: #000;
  white-space: nowrap;   /* mantém tudo numa linha só */
  overflow: visible;     /* impede de cortar texto */
  text-overflow: unset;  /* remove '...' automáticos */
}

.from-label {
  background-color: #d2981b; /* mostarda */
  color: #fff;
  padding: 4px 10px;
  border-radius: 6px;
  font-size: 13px;
}

.price {
  font-size: 16px;
  color: #000;
}

.arrow {
  background: none;
  border: none;
  font-size: 30px;
  cursor: pointer;
  padding: 10px;
}



/* Por padrão escondemos o botão */
.btn-doacao-mobile {
    display: none;
    background: #7e0000;
    width: 100%;
    margin-top: -50px;
}

/* Só mostramos em telas mobile */
@media (max-width: 767px) {
    .btn-doacao-mobile {
        display: block;
    }
}


</style>
  
  
<?php get_template_part('template-parts/menu-mobile'); ?>
<!--Fim Header-->





    <section class="video-corporativo">
      <div class="video-container">
        
        <!-- VÃ­deo Desktop -->
        <video class="video-desktop" autoplay muted loop playsinline>
          <source src="<?php echo get_template_directory_uri(); ?>/assets/img/DESKTOP VALE ESTE.mp4" type="video/mp4">
          Seu navegador não suporta vídeo HTML5.
        </video>

        <!-- VÃ­deo Mobile -->
        <video class="video-mobile" autoplay muted loop playsinline>
          <source src="<?php echo get_template_directory_uri(); ?>/assets/img/ESTANDE INSTITUTO_mobile_V4.mp4" type="video/mp4">
          Seu navegador não suporta vídeo HTML5.
        </video>

      </div>
    </section>



   <div class="transforme-vidas-com-bem-estar">

     <h2>BEM-ESTAR QUE TRANSFORMA VIDAS</h2>
</div>

<section class="container">

      <p style="margin-top: -2%;" class="transforme-vidas-com-bem-estar-texto">
        O bem-estar transforma o momento, o dia e a vida das pessoas. Movido por esta convicção 
        e alinhado aos Objetivos de Desenvolvimento Sustentável (ODS), o Instituto Buddha Spa, 
        juntamente com sua rede voluntária, organizações, empresas parceiras e doadores,
         promove projetos de bem-estar com foco em ações sociais, capacitação profissional e inserção no mercado de trabalho.
      </p>

      <p class="saiba-mais">
          <a href="quemsomos.php">Saiba Mais</a>
      </p>
          <img style="display: flex; margin-left: 30%; width: 40%; margin-top: -2%;" class="divisoria"
		src="<?php echo get_template_directory_uri(); ?>/assets/img/arquivos_marketing/Divisória_02.png" alt="Divisória decorativa">
</section>

<!-- ============================
       SEÃ‡ÃƒO: O QUE FAZEMOS
  ============================= -->

  <section>
  <div class="o-que-fazemos">
    <div class="container">
      <h2>PROJETOS</h2>
      <p>
        Os projetos Formação de Terapeutas e Bem-Estar para Todos unem propósito social, 
        oportunidade profissional e cuidado integral gratuitamente para pessoas em vulnerabilidade social.
        Já o Bem-Estar Corporativo leva experiências de cuidado para empresas, promovendo qualidade de vida
        nas equipes e gerando renda com impacto social.
      </p>

    </div>

  </div>



  </section>

<!--Fim Section o que fazemos-->

    
<!-- ============================
       SEÃ‡ÃƒO: CARDS BEM-ESTAR PARA TODOS
  ============================= -->
  <section class="cards-bem-estar-todos">
    <div class="container">
      <div class="grid" style="margin-left: 5%">


      
        <div class="card">
          <h3>Terapeutas Bem-Estar</h3>
           <p>
            Formação profissional gratuita de 16 horas, voltada a pessoas em situação de vulnerabilidade 
            que desejam ingressar no mercado de trabalho. Com certificado e inserção no banco de talentos Buddha Spa.
          </p>
        </div>


        <div class="card">
          <h3>Bem-Estar para Todos</h3>
          <p>
            Em parceria com instituições sociais e públicas, as terapeutas formadas pelo Instituto Buddha Spa realizam 
            sessões de massagem gratuita em hospitais, clínicas de recuperação, centros de reabilitação e em ações sociais.
          </p>
          
        </div>


         <div class="card">
          <h3>Bem-Estar Corporativo</h3>
          <p>
            Mais do que um momento de relaxamento, o Bem-Estar Corporativo promovido pelo Instituto Buddha Spa é 
            uma maneira de levar bem-estar para sua empresa e eventos gerando impacto social. 
          </p>
          
        </div>

      </div>
    </div>
  </section>

       <p class="saiba-mais-projetos">
          <a href="quefazemos.php">Saiba Mais</a>
      </p>

       <img style="display: flex; margin-left: 34%; width: 32%; margin-top: -5%" 
       class="divisoria" src="<?php echo get_template_directory_uri(); ?>/assets/img/arquivos_marketing/Divisória_02.png" alt="Divisória decorativa">


     


<!--Fim Section cards bem estar para todos-->


<!-- ============================
       SEÇÃO: IMPACTO SOCIAL
  ============================= -->
  <div class="impacto-social">
    <div class="container">
   
      <p style="margin-top: 5%;">
        Os projetos do Instituto Buddha Spa promovem avanços significativos em áreas-chave
        para o desenvolvimento social e econômico das comunidades que atende.
        Conheça os Objetivos de Desenvolvimento Sustentável da ONU que guiam nossas ações.
      </p>
      <div class="quadro-ods">
        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ods_quadro_3.png" alt="ODS 3: Saúde e Bem-Estar"></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ods_quadro_4.png" alt="ODS 4: Educação de Qualidade"></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ods_quadro_5.png" alt="ODS 5: Igualdade de Gênero"></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ods_quadro_8.png" alt="ODS 8: Trabalho Decente e Crescimento Econômico"></figure>
        <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/ods_quadro_10.png" alt="ODS 10: Redução das Desigualdades"></figure>
      </div>
    </div>
  </div>

<!--Fim Section impacto Social-->




<!-- ============================
       SEÃ‡ÃƒO: NÃšMEROS DE ATENDIMENTOS
  ============================= -->
  <div class="numeros-atendimentos">
    <div class="container">
      <h2>
       NÚMEROS DE ATENDIMENTOS REALIZADOS
        <img class="divisoria" src="<?php echo get_template_directory_uri(); ?>/assets/img/arquivos_marketing/Divisória_02.png" alt="Divisória decorativa">
      </h2>
      <div class="cards">

        <div  class="card-1">
          <div style="display:none" class="contador" data-max="31">0</div>
          <h3 style="display:none" >Capacitados Profissionalmente</h3>
        </div>

        <div style="margin-left:9%" class="card">
          <div class="contador" data-max="1404">0</div>
          <h3>Atendimento nas Ações Sociais</h3>
          <img class="ornamento" src="<?php echo get_template_directory_uri(); ?>/assets/img/arquivos_marketing/Ornamento.png" alt="Ornamento decorativo">
        </div>

         <div  class="card-3">
          <div style="display:none" class="contador" data-max="26">0</div>
         <h3 style="display:none" >Voluntários</h3>
        </div>

      </div>
    </div>
  </div>

<!--Fim contadores atendimentos-->
  

<!-- ============================
       SeÃ§Ã£o historias transformacao \
  ============================= -->
  
<section class="depoimentos">
  <h2>DEPOIMENTOS</h2>

  <div class="swiffy-slider slider-nav-round slider-nav-dark slider-nav-visible slider-nav-autohide">
    <ul class="slider-container">
      <li>
        <div class="depoimento">
          
         
          <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/testemunhal1.jpeg" alt="Foto de Juliana M." class="avatar-depoimento" />
           <p>"Eu fico muito feliz, adoro a massagem que elas fazem. Muito Obrigada!"</p><br><br>
          <span>Neide Spadaro, 77 anos, residente do ILPI Casa Ondina Lobo.</span>

        </div>
      </li>

      <li>
        <div class="depoimento">
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testemunhal3.jpeg" alt="Foto de Juliana M." class="avatar-depoimento" />
          <p>"Só tenho a agradecer pela oportunidade e por todo o conhecimento transmitido!"</p> <br>
          <span>Antonia Marciara Gomes de Souza - Terapeuta Bem-Estar</span>
         
        </div>
      </li>

      <li>
        <div class="depoimento">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testemunhal2.jpeg" alt="Foto de Juliana M." class="avatar-depoimento" />
            <p>"Recebi uma massagem relaxante que eu me entreguei totalmente, agora estou relaxada realmente. Muito Obrigada!" </p><br>
          <span>Maria Salete Caxeado, 73 anos, residente do ILPI Novo Horizonte.</span>
        </div>
      </li>

         <li>
        <div class="depoimento">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testemunhal4.jpg" alt="Foto de Juliana M." class="avatar-depoimento" />
            <p>"A equipe do Instituto Buddha Spa proporcionou um momento de cuidado e relaxamento únicos, 
                demonstrando sensibilidade e profissionalismo em cada atendimento. 
                A iniciativa foi um gesto generoso que fez toda a diferença no bem-estar dos colaboradores e idosos." </p>
          <span>Sandra Macedo, Assistente Social do ILPI Vila Mariana Casa Santa Luiza.</span>
        </div>
      </li>
      <!-- Adicione mais depoimentos aqui -->
    </ul>

    <!-- Indicadores e setas -->
    <button type="button" class="slider-nav" aria-label="Anterior"></button>
    <button type="button" class="slider-nav slider-nav-next" aria-label="Próximo"></button>

   
  </div>

</section>
 <!--Fim section historias transformacao-->


 <!-- ============================
       SEÃ‡ÃƒO: TRANSFORME VIDAS
  ============================= -->


<?php
// Conexão com o banco
try {
  $pdo = new PDO("mysql:host=localhost;dbname=loja_instituto_buddhaspa", "root", "RedBull@2025");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $pdo->query("SELECT * FROM produtos");
  $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
  exit;
}
?>


<div class="container" id="componente">
  <div class="section-title" style="font-size:2rem; color:#7e0000;">No Instituto BUDDHASPA cada doação é convertida em aprendizado, afeto e impacto social duradouro.</div>

 
  <div class="section-subtitle">
 
</div>


  <div class="carousel-wrapper">
    <button class="arrow" id="prev">&#8592;</button>

    <div class="carousel">
      <div class="carousel-track" id="carousel-track">
        <?php foreach ($produtos as $produto): ?>
         <div class="card">
  <a href="produto.php?id=<?php echo $produto['id']; ?>">
    <div class="image-wrapper">
      <img src="uploads/<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['titulo']); ?>">
    </div>
    <div class="card-content">
      <h3 class="card-title"><?php echo htmlspecialchars($produto['titulo']); ?></h3>
      <p class="card-description"><?php echo htmlspecialchars($produto['descricao']); ?></p>
      <div class="price-row">
        <span class="from-label">A partir de</span>
        <span class="price">R$<?php echo number_format($produto['preco'], 2, ',', '.'); ?></span>
      </div>
    </div>
  </a>
</div>
        <?php endforeach; ?>
      </div>
    </div>

    <button class="arrow" id="next">&#8594;</button>
  </div>
</div>

<!-- fim section transforme vidas-->


<!--Inicio section contato -->

 <section style="margin-top: 10%; background-color:#fff" class="contate-nos">
    <div class="container">
      <ul class="contato-lista">
        <li class="contato-info">
          <h3>FALE CONOSCO</h3>
           <p>
            Endereço de correspondência: <br>
            Avenida Angélica, 634 - Santa Cecília, <br>
            São Paulo - SP, 01227-000
          </p>

          <a href="#">E-mail contato@institutobuddhaspa.org</a>
        </li>


        <li class="formulario">

          <div class="form-container">
       
           <form id="formContato" method="post">
  <input style="border-radius: 0px;" class="input-nome" type="text" name="nome" placeholder="Nome:" required>
  <input style="border-radius: 0px;" class="input-email" type="email" name="email" placeholder="Email:" required>
  <input style="border-radius: 0px;" class="input-telefone" type="tel" name="telefone" placeholder="Telefone:" required>
  <textarea style="border-radius: 0px;" name="mensagem" placeholder="Mensagem:" required></textarea>

  <!-- anti-spam invisível -->
  <input type="text" name="site" style="display:none">

  <button style="border-radius: 0px;" type="submit" class="btn-submit" id="btnEnviar">
    ENVIAR
  </button>

  <div id="retornoContato" style="margin-top:15px;"></div>
</form>


          </div>
        </li>


      </ul>
    </div>
  </section>

<!--Fim section contato -->

<!--Inicio section Mapa -->
<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.
  575384174018!2d-46.666673024842986!3d-23.547769878809085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
  1!3m3!1m2!1s0x94ce598e65b9aa43%3A0xc3d696368098eac8!2sBuddha%20Spa%20College!5e0!3m2!1sen!2sbr!4v1749487915878!5m2!1sen!2sbr" 
  width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

<!--Fim section Mapa -->


<script>
  document.addEventListener("DOMContentLoaded", function () {
    const track = document.getElementById('carousel-track');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    const cards = track.querySelectorAll('.card');

    let currentIndex = 0;

    function updateCarousel() {
      const cardWidth = cards[0].offsetWidth + 20; // Inclui gap de 20px
      track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }

    nextBtn.addEventListener('click', () => {
      const maxIndex = cards.length - Math.floor(track.parentElement.offsetWidth / (cards[0].offsetWidth + 20));
      if (currentIndex < maxIndex) {
        currentIndex++;
        updateCarousel();
      }
    });

    prevBtn.addEventListener('click', () => {
      if (currentIndex > 0) {
        currentIndex--;
        updateCarousel();
      }
    });

    window.addEventListener('resize', updateCarousel);
  });
</script>
<script>
document.getElementById('formContato').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = this;
  const btn = document.getElementById('btnEnviar');
  const retorno = document.getElementById('retornoContato');

  btn.disabled = true;
  btn.innerText = 'ENVIANDO...';

  fetch(window.location.origin + '/institutoBuddhaSpa/enviar_email.php', {
    method: 'POST',
    body: new FormData(form)
  })
  .then(async response => {
    const texto = await response.text();

    try {
      return JSON.parse(texto);
    } catch (e) {
      throw new Error(texto);
    }
  })
  .then(data => {
    if (data.status === 'sucesso') {
      retorno.innerHTML = `<div style="background:#e8f7ee;color:#1b7f3a;padding:12px;border-radius:4px;">${data.mensagem}</div>`;
      form.reset();
    } else {
      retorno.innerHTML = `<div style="background:#fdecea;color:#b00020;padding:12px;border-radius:4px;">${data.mensagem}</div>`;
    }
  })
  .catch(error => {
    retorno.innerHTML = `
      <div style="background:#fdecea;color:#b00020;padding:12px;border-radius:4px;">
        <strong>Erro técnico:</strong><br>
        <pre style="white-space:pre-wrap;">${error.message}</pre>
      </div>
    `;
  })
  .finally(() => {
    btn.disabled = false;
    btn.innerText = 'ENVIAR';
  });
});
</script>

<?php get_footer(); ?>

