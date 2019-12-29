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
                                    type="text" 
                                    class="form-control form-control-lg" 
                                    value="<?= $q ?>" 
                                    placeholder="Pesquisar por..." />
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
            <h2 class="text-info mb-5">Análise de Sentimentos para '<?= $q ?>'</h2>

            <div class="row">
                <div class="col-md-6">
                    <canvas id="chart" class="mb-5 mb-lg-0 mb-md-0"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="chartPie"></canvas>
                </div>
            </div>
        </div>
    </section>

    <section class="features-icons" style="background-color: #ffffff">
        <div class="container">
            <div class="row">
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
                            <td>Negativo</td>
                        </tr>
                        <tr>
                            <td>Pontuação sentimento</td>
                            <td>-0.15474567475675467</td>
                        </tr>
                        <tr>
                            <td>Pontuação Positivas</td>
                            <td>0.1447556753685678365</td>
                        </tr>
                        <tr>
                            <td>Pontuação Negativas</td>
                            <td>-0.154673546734683468</td>
                        </tr>
                        <tr>
                            <td>Porcentagem Positivas</td>
                            <td>25%</td>
                        </tr>
                        <tr>
                            <td>Porcentagem Negativas</td>
                            <td>75%</td>
                        </tr>
                        <tr>
                            <td>Total de Tweets análisados</td>
                            <td>255</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="features-icons bg-light">
        <div class="container">
            <div class="row table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="border-top: none;" colspan="2">
                                <h3 class="text-info"><i class="fa fa-twitter"></i>  Alguns tweets analisados</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi quas unde voluptatum nam a? Doloremque...</td>
                            <td>Positivo</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repellat eligendi eius autem a accusamus ...</td>
                            <td>Negativo</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia sed, consectetur similique libero assumenda iste ...</td>
                            <td>Negativo</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi voluptates harum aut corrupti earum vel ...</td>
                            <td>Negativo</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quibusdam dolorum consectetur nobis autem minima ...</td>
                            <td>Negativo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

<?php include_once 'app/views/partials/footer.php'; ?>
