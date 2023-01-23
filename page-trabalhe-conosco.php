<?php
// Template Name: Trabalhe Conosco
?>
<?php include 'mail.php'; ?>
<?php get_header() ?>
    <header class="section has-background-white is-medium">
      <div class="container">
        <h1 class="title has-text-weight-normal is-size-4 has-text-black mb-4">
          Trabalhe Conosco
        </h1>
        <p class="is-size-6 intro">
          Preencha o formulário e deixe sua mensagem. Ou entre em contato
          através das redes abaixo.
        </p>
      </div>
    </header>
    <section class="section is-medium">
      <div class="container">
        <div class="columns">
          <div class="column">
            <?php echo $alert; ?>
            <form action="" method="post">
            <label for="mensagem">Mensagem</label>
              <div class="field">
                <textarea
                  class="textarea"
                  name="mensagem"
                  placeholder="Digite sua mensagem"
                ></textarea>
              </div>
              <label for="nome">Nome</label>
              <div class="field form-control">
                <input
                  name="nome"
                  class="input"
                  type="text"
                  placeholder="Digite seu nome" minlength="6" required
                />
              </div>
              <label for="email">E-mail</label>
              <div class="field form-control">
                <input
                  name="email"
                  class="input"
                  type="email"
                  placeholder="Digite um e-mail válido" required
                />
              </div>
              <label for="telefone">Telefone</label>
              <div class="field form-control">
                <input
                  name="telefone"
                  class="input"
                  type="tel"
                  placeholder="Telefone com DDD" required  minlength="10" 
                />
              </div>
              <label for="linkedin">LinkedIn</label>
              <div class="field form-control">
                <input
                  name="linkedin"
                  class="input"
                  type="text"
                  placeholder="Link para o seu LinkedIn" required minlength="6"
                />
              </div>
              <label for="portfolio">Portfólio</label>
              <div class="field">
                <input
                  name="portfolio"
                  class="input"
                  type="text"
                  placeholder="Link para o seu portfólio"  minlength="6"
                />
              </div>
              <div class="field">
                <a class="icon-text">
                  <span class="icon">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/paperclip-icon.svg" alt="" />
                  </span>
                  <span>Anexar arquivo</span>
                </a>
              </div>
              <div class="field">
                <button type="submit" name="submit" class="button is-small is-rounded is-link" disabled>
                  Enviar
                </button>
              </div>
            </form>
          </div>
          <div class="column contato-icons">
            <a
              href="mailto:contato@abajurpropaganda.com.br"
              target="_blank"
              class="icon-text"
            >
              <span class="icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/mail-icon.svg" alt="" />
              </span>
              <span>contato@abajurpropaganda.com.br</span>
            </a>
            <a
              href="https://www.linkedin.com/company/abajur"
              target="_blank"
              class="icon-text"
            >
              <span class="icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linkedin-icon.svg" alt="" />
              </span>
              <span>company/abajur</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php include 'includes/footer.php' ?>
    <script type="text/javascript">
      if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
  </body>
</html>
