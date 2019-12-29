<?php include_once 'app/views/partials/head.php'; ?>

  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">O que as pessoas estão dizendo sobre empresas, produtos ou serviços</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-lg" placeholder="Pesquisar por..." />
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <section class="features-icons text-center" style="background-color: #ffffff;">
    <div class="container">
      <div class="row" class="text-center">
        <div class="col-md-12 mb-3">
          <h2 class="text-uppercase">Mais pesquisados</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class=" m-auto text-primary" href=""><i class="fa fa-external-link"></i></a>
            </div>
            <h3>Samsung note 10 plus</h3>
            <p class="lead mb-0">55 consultas nas últimas 4 semanas</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class=" m-auto text-primary" href=""><i class="fa fa-external-link"></i></a>
            </div>
            <h3>Mi note 10</h3>
            <p class="lead mb-0">43 consultas nas últimas 4 semanas</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <a class=" m-auto text-primary" href=""><i class="fa fa-external-link"></i></a>
            </div>
            <h3>Iphone 11 pro max</h3>
            <p class="lead mb-0">41 consultas nas últimas 4 semanas</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-info">Como funciona o Antares</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('public/img/bg-girl-with-laptop.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Input dos dados</h2>
          <p class="lead mb-0">O processo se inicia com a partir da entrada de qualquer produto, serviço ou empresa informada pelo usuário ou pela escolha entre os termos mais pesquisados.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('public/img/bg-technology.png');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Cálculo do Sentimento</h2>
          <p class="lead mb-0">Com base na pesquisa do usuário, o Antares faz uma busca nas redes sociais e utilizando Machine Learning faz cáculos heurísticos para verificar a tendencia de cada sentimento presente nos textos coletados.</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('public/img/bg-success.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Visualização dos resultados</h2>
          <p class="lead mb-0">Ao fim de todas as etapas, o sistema exibe ao usuário os resultados de todo o processo em forma de gráficos e tabelas com um resumo dos textos encontrados, bem como o sentimento atrelado a cada um deles.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Pronto para começar? Faça sua busca!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="text" class="form-control form-control-lg" placeholder="Pesquisar por..." />
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Buscar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include_once 'app/views/partials/footer.php'; ?>
