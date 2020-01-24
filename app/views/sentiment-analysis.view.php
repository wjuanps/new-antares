<?php include_once 'app/views/partials/head.php'; ?>

    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">O que as pessoas estão dizendo sobre empresas, produtos ou serviços</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form method="get" action="/sentiment-analysis">
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input 
                                    name="q"
                                    id="q"
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    placeholder="Pesquisar por..."
                                    required />
                            </div>
                            <div class="col-12 col-md-3">
                                <button 
                                    type="submit" 
                                    class="btn btn-block btn-lg btn-primary">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section class="features-icons bg-light text-center">
        <div class="container">
            <h2 class="text-info mb-5">Análise de Sentimentos para '<span id="search"></span>'</h2>

            <div class="row data hidden">
                <div class="col-md-6">
                    <canvas id="chart" class="mb-5 mb-lg-0 mb-md-0"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="chartPie"></canvas>
                </div>
            </div>

            <div class="row">
                <lottie-player
                    class="loading"
                    src="https://assets6.lottiefiles.com/datafiles/U3Syk2Pr9tUE0zY/data.json"
                    background="transparent"
                    speed="1"
                    style="width: 100%; height: 300px;"
                    loop autoplay >
                </lottie-player>
            </div>
        </div>
    </section>

    <section class="features-icons" style="background-color: #ffffff">
        <div class="container">
            <div class="row data hidden">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr>
                            <th style="border-top: none;" colspan="2">
                                <h3 class="text-info"><i class="fa fa-bar-chart"></i>&nbsp;Resumo da análise</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sentimento predominante</td>
                            <td><span id="sentimentText"></span></td>
                        </tr>
                        <tr>
                            <td>Pontuação sentimento</td>
                            <td><span id="sentimentNumber"></span></td>
                        </tr>
                        <tr>
                            <td>Pontuação Positivas</td>
                            <td><span id="sentimentPositive"></span></td>
                        </tr>
                        <tr>
                            <td>Pontuação Negativas</td>
                            <td><span id="sentimentNegative"></span></td>
                        </tr>
                        <tr>
                            <td>Porcentagem Positivas</td>
                            <td><span id="percentPositive"></span></td>
                        </tr>
                        <tr>
                            <td>Porcentagem Negativas</td>
                            <td><span id="percentNegative"></span></td>
                        </tr>
                        <tr>
                            <td>Total de Tweets análisados</td>
                            <td><span id="total"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <lottie-player
                    class="loading"
                    src="https://assets6.lottiefiles.com/datafiles/U3Syk2Pr9tUE0zY/data.json"
                    background="transparent"
                    speed="1"
                    style="width: 100%; height: 300px;"
                    loop autoplay >
                </lottie-player>
            </div>
        </div>
    </section>

    <section class="features-icons bg-light">
        <div class="container">
            <div class="row table-responsive data hidden">
                <table class="table table-hover table-striped" id="table">
                    <thead>
                        <tr>
                            <th style="border-top: none;" colspan="3">
                                <h3 class="text-info"><i class="fa fa-twitter"></i>  Alguns tweets analisados</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <lottie-player
                    class="loading"
                    src="https://assets6.lottiefiles.com/datafiles/U3Syk2Pr9tUE0zY/data.json"
                    background="transparent"
                    speed="1"
                    style="width: 100%; height: 300px;"
                    loop autoplay >
                </lottie-player>
            </div>
        </div>
    </section>

<?php include_once 'app/views/partials/footer.php'; ?>
