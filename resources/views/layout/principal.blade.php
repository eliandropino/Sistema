<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Sistema laravel Express</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    {!! Html::Style("assets/css/bootstrap.min.css")!!}
    <!--[if lt IE 9]>
    {!! Html::Style("//html5shim.googlecode.com/svn/trunk/html5.js")!!}
    <![endif]-->
    {!! Html::Style("assets/css/styles.css")!!}
</head>
<body>
<nav class="navbar navbar-static">
<div class="container">
    <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="glyphicon glyphicon-chevron-down"></span>
    </a>
    <div class="nav-collapse collase">
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <ul class="nav navbar-right navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                <ul class="dropdown-menu" style="padding:12px;">
                    <form class="form-inline">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="#">About</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
</nav><!-- /.navbar -->

<!-- Begin Body -->
<div class="container">
@yield('conteudo')
<div class="row">
    <div class="col col-sm-3">
        <div id="sidebar">
            <ul class="nav nav-stacked">
                <li><h3 class="highlight">Channels <i class="glyphicon glyphicon-dashboard pull-right"></i></h3></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                            Digite o nome
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                            <p>Clique Aqui, sera mostrado form para preenche seu nome</p>
                            @yield('formnome')
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            Accordion
                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <p>Use @media queries or utility classes to customize responsiveness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col col-sm-9">
        <div class="panel">
            <h1>Novidades ao Apresentar Conteudo no Laravel</h1>

            <div class="row">
                <div class="col col-sm-8">
                    <img src="http://s.bootply.com/assets/example/bg_iphone.png" class="img-responsive">
                </div>
                <div class="col col-sm-4">
                    <img src="//placehold.it/400x180/FF3333/FFF" class="img-responsive">
                    <h4>Aside</h4>
                    <hr>
                    <img src="//placehold.it/400x180/FF3333/FFF" class="img-responsive">
                    <h4>Aside 2</h4>
                </div>
            </div>



            <hr>
            <h4><a href="/">Laravel</a></h4>
            <hr>
        </div>
    </div>
</div>
</div>



<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>