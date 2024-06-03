<?php include("cabecalho.php") ?>

<!-- Carrossel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/foto1.jpg" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Evento 1</h5>
                <p>Data do Evento</p>
                <p>Local do Evento</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/foto2.jfif" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Evento 2</h5>
                <p>Data do Evento</p>
                <p>Local do Evento</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/foto6.jfif" class="d-block " alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Evento 3</h5>
                <p>Data do Evento</p>
                <p>Local do Evento</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
<!-- Seção de Cards -->
<div class="container mt-4">
    <h1>Proximos Eventos</h1>
    <div class="row">
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="img/foto1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">Descrição do card 1.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="img/foto2.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Descrição do card 2.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="img/foto6.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">Descrição do card 3.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="img/foto1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 4</h5>
                    <p class="card-text">Descrição do card 4.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="img/foto2.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 5</h5>
                    <p class="card-text">Descrição do card 5.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
                <img src="img/foto6.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card 6</h5>
                    <p class="card-text">Descrição do card 6.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include ("rodape.php")?>