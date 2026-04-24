<?php
require_once __DIR__ . '/wp-load.php';
get_header();
?>

<?php get_template_part('template-parts/menu-mobile'); ?>

<section class="quem-somos">
  <h2 id="testando">Fale Conosco</h2>
</section>

<section class="contate-nos">
  <div class="container">
    <ul class="contato-lista">

      <li class="contato-info">
        <h3>FALE CONOSCO</h3>
        <p>
          Endereço de correspondência: <br>
          Avenida Angélica, 634 - Santa Cecília, <br>
          São Paulo - SP, 01227-000
        </p>

        <a href="mailto:contato@institutobuddhaspa.org">
          E-mail contato@institutobuddhaspa.org
        </a>
      </li>

      <li class="formulario">
        <div class="form-container">
          <p>
            Grande visão sem ótimas pessoas é irrelevante.<br>
            Vamos trabalhar juntos.
          </p>

          <form id="formContato" method="post">
            <input style="border-radius:0px;" class="input-nome" type="text" name="nome" placeholder="Nome:" required>
            <input style="border-radius:0px;" class="input-email" type="email" name="email" placeholder="Email:" required>
            <input style="border-radius:0px;" class="input-telefone" type="tel" name="telefone" placeholder="Telefone:" required>
            <textarea style="border-radius:0px;" name="mensagem" placeholder="Mensagem:" required></textarea>

            <input type="text" name="site" style="display:none;">

            <button style="border-radius:0px;" type="submit" class="btn-submit" id="btnEnviar">
              ENVIAR
            </button>

            <div id="retornoContato" style="margin-top:15px;"></div>
          </form>
        </div>
      </li>

    </ul>
  </div>
</section>

<script>
document.getElementById('formContato').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = this;
  const btn = document.getElementById('btnEnviar');
  const retorno = document.getElementById('retornoContato');

  btn.disabled = true;
  btn.innerText = 'ENVIANDO...';

  fetch('enviar_email.php', {
    method: 'POST',
    body: new FormData(form)
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'sucesso') {
      retorno.innerHTML = `
        <div style="background:#e8f7ee;color:#1b7f3a;padding:12px;border-radius:4px;">
          ${data.mensagem}
        </div>
      `;
      form.reset();
    } else {
      retorno.innerHTML = `
        <div style="background:#fdecea;color:#b00020;padding:12px;border-radius:4px;">
          ${data.mensagem}
        </div>
      `;
    }
  })
  .catch(() => {
    retorno.innerHTML = `
      <div style="background:#fdecea;color:#b00020;padding:12px;border-radius:4px;">
        Erro ao enviar. Tente novamente.
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