<?php
// Template Name: Contato
?>
<?php include 'mailer.php'; ?>
<?php get_header() ?>
    <header class="section has-background-black-ter is-medium">
      <div class="container">
        <h1 class="title has-text-weight-normal is-size-4 has-text-white mb-4">
          <?php the_field('titulo') ?>
        </h1>
        <p class="is-size-6 intro has-text-white">
        <?php the_field('sub_titulo') ?>
        </p>
      </div>
    </header>
    <section class="section is-medium">
      <div class="container">
        <div class="columns">
        <div class="column">
            <?php echo $alert; ?>
            <form action="" method="POST" enctype="multipart/form-data">
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
                  placeholder="Telefone com DDD" required pattern="^[0-9]{10,}"
                />
              </div>
              <label for="empresa">Empresa</label>
              <div class="field form-control">
                <input
                  name="empresa"
                  class="input"
                  type="text"
                  placeholder="Nome da sua empresa"
                />
              </div>
              <div class="field">
                <div class="g-recaptcha" data-sitekey="<?php the_field('client_key') ?>"></div>
              </div>
              <div class="field">
                <button type="submit" name="submit" class="button is-small is-rounded is-link" disabled>
                  Enviar
                </button>
              </div>
            </form>
          </div>
          <div class="column contato-icons">
            <div class="map mb-5">
              <iframe
                width="100%"
                height="300"
                id="gmap_canvas"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.062950094737!2d-51.20345902351833!3d-30.035051830842775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9519784a72d3fd4f%3A0xb0542a16b7a1cb90!2sR.%20Dona%20Leonor%2C%20415%20-%20Rio%20Branco%2C%20Porto%20Alegre%20-%20RS%2C%2090420-180%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1727727988169!5m2!1spt-BR!2sus"
                frameborder="0"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
              ></iframe>
            </div>
            <span class="icon-text">
              <span class="icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/local-icon.svg" alt="" />
              </span>
              <span>R. Dona Leonor, 415 - Rio Branco - Porto Alegre/RS - Brasil</span>
            </span>
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
            <span class="icon-text">
              <span class="icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/phone-icon.svg" alt="" />
              </span>
              <span
                >(51) 99641-8491</span
              >
            </span>
            <a
              href="https://www.instagram.com/abajurpropaganda/"
              target="_blank"
              class="icon-text"
            >
              <span class="icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/instagram-icon.svg" alt="" />
              </span>
              <span>abajurpropaganda</span>
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
            <a
              href="https://www.facebook.com/AbajurPropaganda"
              target="_blank"
              class="icon-text"
            >
              <span class="icon">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/facebook-icon.svg" alt="" />
              </span>
              <span>AbajurPropaganda</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer() ?>
