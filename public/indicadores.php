<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/public-style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title> Indicadores | Observatorio</title>
</head>

<body>

    <?php include('./components/navbar.html') ?>

    <header class="header-indicadores">
        <h1 class="header-tit text-center">INDICADORES</h1>
    </header>

    <main>
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="justify-content-around">
                        <p class="alert alert-secondary text-center">Selecciona el tipo de indicadores a ver</p>
                        <hr>
                        <ul class="justify-content-around nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-todos-tab" data-bs-toggle="pill" data-bs-target="#pills-todos" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Todos</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-desarrollo-tab" data-bs-toggle="pill" data-bs-target="#pills-desarrollo" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Desarrollo Sostenible</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-ejes-tab" data-bs-toggle="pill" data-bs-target="#pills-ejes" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Ejes De Gobierno</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-2040-tab" data-bs-toggle="pill" data-bs-target="#pills-2040" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Proyecto 2040</button>
                            </li>
                        </ul>
                        <hr>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-todos" role="tabpanel" aria-labelledby="pills-todos-tab">
                                <div class="container">
                                    <div class="row">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-desarrollo" role="tabpanel" aria-labelledby="pills-desarrollo-tab">Desarrollo Sostenible</div>
                            <div class="tab-pane fade" id="pills-ejes" role="tabpanel" aria-labelledby="pills-ejes-tab">Ejes</div>
                            <div class="tab-pane fade" id="pills-2040" role="tabpanel" aria-labelledby="pills-2040-tab">2040</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    include('./components/footer.html');
    include('./components/irArriba.html');
    ?>

</body>

<script src="../js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>