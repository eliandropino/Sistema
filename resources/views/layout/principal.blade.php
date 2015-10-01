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
<nav class="navbar navbar-inverse">
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
    <div class="col-lg-3">
        <div id="sidebar">
            <ul class="nav nav-stacked">
                <li><h3 class="highlight">Funções <i class="glyphicon glyphicon-dashboard pull-right"></i></h3></li>
                <li> {!! link_to_action('IndexController@getContato', $title ='Form Contato')!!} </li>

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
                            <p>{!! link_to_action('IndexController@index', $title ='Clique Aqui')!!} sera mostrado form para preenche seu nome</p>
                            @yield('formnome')
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                            Lista com Dependencia

                        </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <p>{!! link_to_action('IndexController@lista', $title ='Clique Aqui')!!} sera mostrado lista pré-definida</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
    <div class="col-lg-9">
        <div class="panel">
            <h1>Novidades ao Apresentar Conteúdo no Laravel</h1>

            <div class="row">
                <div class="col col-sm-8">
                    @yield('listainjection')
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxIHEhMRDxIREhERFxgTERQXFxUXHBIUFxIWFhUdEx8YHSggJBslGxkXIjIiJSkrLi4uFyAzODMsNzQ5LisBCgoKDg0OGxAQGzQlHyUtMiwvLC8tLC0uLCw2LCwsNDcsMiw0MiwsLC0vLCwsLCwsLC4sLCwsLCwsLCwsLCwsLP/AABEIALwBDQMBEQACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABQYCAwQBB//EAEUQAAIBAgMEBwMHCQcFAAAAAAABAgMEBREhBhIxQRMiMlFhgZFxobEVIzNCUnPBBxQWYnKCs9HwNDWissLh8VOSk6PS/8QAGgEBAAMBAQEAAAAAAAAAAAAAAAMEBQIGAf/EADIRAQACAQIDBQcDBAMAAAAAAAABAgMEERIhMQUTMkHwUXGBkaGx0RRh4RUzQsEiI1L/2gAMAwEAAhEDEQA/APuIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeZgegAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAi9oq9W2pOdF5OLW9on1fPxyIs02iu9VrSUpfJw3QOGfneLpuNzu7rykuDWngivTvMkbxZoZ/02nmInHu7P0cuKnbvKnlvf/R33F562Rfr8MeHFH0/A9klLtV6snyzy48s88x+ljzmT+qTHSkQ0bKX8rapO0rN7yb3M+TXFLwa1Xmc6e81mcdknaOCt6RqMfTz9fSVtLjGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABhWpqtFxlqpJp+xnyY3jZ9raazvCkYVWeCXbpz7MnuS9j7D+HqUcc93k2lu6isanTcdesc/yvRfYIBUttLB0nG7paSg0ptcsn1JeunoU9VSY2vDa7LzxaJwX6T0/3CewXEVilKNRcXpNfZkuK/rvLGLJF67s3VaecGWaT8Pc7yRXAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABUtuLDs14/sT/ANL+K9Cnqqf5NjsrNznHPvhMbN4h8oUYtvrx6k/aufmifDfjpupa3B3OWYjpPOEqSqjXcUY3EZQks4yTjJd6aPkxExtLqlppaLV6wo+DV5bOXcreo/m5tLP29iX4P/YoY5nDk4J6S9BqqRrNNGWnij1Mf7hfDQedAAADVdXMbSLnUe7GPF92uXI+WtFY3l3jx2yWitY3mUHX2vtqfZ6Sfsjl/maK86rHC/TsrPPXaPj+HK9q6lx9BbTl4vN/5V+Jx+ptPhql/plKf3MkQ6cJx+dSp0N1TVKctafFJ+Dz5nePNM24bxtKHUaKkY+8w24ojqsRZZwAAAAAAAAAAAAAAAAAAAAAAA57+1V7TnTlwksvY+T9Tm1eKNpSYsk47xePJSdl7t4XculU0U3uS8Jp9V/h5lDBbgvwy3tfijPgjJXy5/BfjRedAK1tthX55S6WC69LV/rQ+t6cfUq6rFxV4o6w1eytV3eTgt0t9/XJv2Qxb5So7snnUpZRl+svqy8/ijrTZeOvPrCPtLS9xl3jwzzj8J4sM4AAYVqUa8XGaTjJZNPmmfJiJjaXVbTWYtHWFMtYrZu56OtGMqNX6Oo0m492uXLg/JlGu2HJtbpPm3MkzrdPx0n/AJV6x7fXl8l1j4F9gozH8IWK08uFSOtOXc+5+DIsuKLx+61pNVOC+/lPWHLs3i8rnOhX6txS0kn9dLn7f+TjDlm3/G3WE2t0sU2yY+dJ+ieLDPAAAAAAAAAAAAAAAAAAAAAAAFG23sfzepGvHRT0b7px4eq+BQ1VNrcUN/srNx0nFPl9lowHEPlKjCf1uzP9pcf5+ZbxX46xLJ1eDucs08vL3JEkVnjWYHz64jLZW8Uop9DLVLvpt9Ze2L+CM22+DLv5PTY5jX6XhnxR9/5X+lUVVKUWnGSTT70+BoxO/N5qYms7SzPr4AAI/G8Lji1J05aS4wl9mXLy7yPLji9dpWdLqbafJF4+Me2ENspi0oN2dxpVpaQz5pcvJcO9EGnyz/bt1he7R0tZiNRi8M9fXrmmrvGbez+kqwT7s836LUntlpXrKhj0mbJ4ayp20OM0LqcKtvvxrQfbySUkuGebz9xSzZaWmLV6tvR6TNSk0y7cM+S4YFiDxOjGo4uMuElrlmucfAu4r8dd2JqsHc5JpE7pAkVwAAAAAAAAAAAAAAAAAAAAACPx2w+UaM6fPLOP7S1X9eJHlpx1mFjS5u5yxf5+5UNicQ/NKzoy0VXReE1w9dV6FLS34bcM+ba7Uwd5ijJXy+y/mi86AQ21OFfKlFqK+ch1qfi+a8178iDPj46fuvaDU9xliZ6Tyn1+yK2FxXpIu2m+tDWnnzjzXk/c/Ah0mXeOCVztfTbW76vSevv/AJW1vIusVHXePW1n260M+5PefpHNkVs2OvWVrFotRk8NJ+33Ql3t1Rp/RU6k33vKC/F+4r21tY6Q0MXYmW3jtEfX180d+k19ielvSyXfGDl/iloR/qM1/DC1/TdHg/u33987fSObmvNn764jKvWycorNpyTm0uSUVlw5ZnFsGW0cVkuLX6Okxix9Pdy+vN07KYHbYrDflObnF5Tp5qKXc9NWmd6fDjvG8oe0dbqMF+GIiInpK32mDW9n9HSgn3tZv1epdripXpDEyarNk8VpdyWRIrvQAAAAAAAAAAAAAAAAAAAAAAAD51tdZPDbjpIaKp85F90k9ffr5mZqacF+KHpuzcsZsHBby5fBdcLxOF5RhWcoxzXWzaWUl2veX6ZItWLMHPp7Y8s49mi62ktbbjVUn3Rzl8NDm2ox180mPs/UX6V+fJE3W28I/RUpS8ZNR+GZDbWR5Qu4+x7z47be7mqlW8m6ruKa6OTk5JxzyjJrXLPv19SnN54uOOTarip3fc2neNvNJ2uD3mPRVSVTOEuDnNvhp2Vn+BLXFlyxvM8lTJq9LpLcEV5x7I/3KWtNhKcPpas5eEUor8WTV0VY8UqWXtvJPgrEe/mm7PZ61s+xRhn3y6z/AMWZYrgx16Qz8uu1GTxXn7fZJpbvAlVHoFHxy1ns3cK7oL5qbyqQ5JvivY+K7mUMtZw37yvTzb+ky11uGdPl8UdJ9ezz9sLhY3kL6EalN5xks1+Kfii7S0WjeGJlxWxXmlusOg6RgAAAAAAAAAAAAAAAAAAAAAAABD7T4U8VouMcuki96GfN815ohz4+8rtHVc0Op7jLxT0nlKnW2yd3X0lFQX60l7ksyjXS5J68m7ftTTV5xO8/tH5TNnsPGP01Vvwgsve8yeujj/KVHL2zafBXb3pu02dtrXhSi2ucut8dCeuDHXyZ+TX6jJ1t8uTdi+GRxCjKlklpnB/ZkuD/AK5M6yY4vXhcafUWw5YyfP3KnsfiDw+rK3q6KbySf1ai0y8+HtyKemvNLcE+pbPaeCM2OM1PL6x/C9mg88AAAGm8owuYShUScJLKWfcc2iJjaXeO9qXi1OsKHgeJrZ64nQlUjUt5S7aaai3wk8vSXsM/Fk7q8133j16l6LVaadZgjLFdrxHT2+vJ9BTzNJ5p6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAApO2+GdDJXMNFJpVMuUl2X+Hkijqse08cN7srUcVZw2+Hu84WHZzFPlSipPtx6tRePf58Sxhycdd2ZrdN3GWa+U84SjeRMqIjENpbaxzTqKcl9WHWfqtF5shvqMdfNdw9n6jL0rtHtnkrWIbc1J6UKcYL7Uus/RafEqX1k/wCMNbD2LSOeS2/u5I+OH3+PvOfSOL51HuR8l/JEfd5svX6rM6jRaTlXbf8AbnPz/lO4dsJTp63FRzf2Y9VevH4FimirHindnZ+28luWKu37zzn8LdTgqaUVokkku5LRFyI2YszMzvLI+vgAAAAAAAAAAAAAAAAAAAAAAAAAAAABovLaN5CVOazjNZP/AG8Tm1YtG0u8eS2O8Xr1h84pXVbZyrUhFpS7LzWaa4xa/rmZkWthtMQ9TbHi1mKtp6df4ZZXmPf9WpF/uw/CJ9/7cv7/AGfN9JpfZE/Ofyl7DYdy1r1Mv1Yfzf8AImpo/wD1Klm7Z8sVfjP4WTD8Dt8P1p0o732n1n6ss0w0p0hlZtZmzeO3L2eSRJVYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADmuLGlcyUp04SlHg3FNo5mlZneYSUzZKRtW0xDoSyOkb0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGqFzCcnBTg5x1lFNNx9q480BtAAAAAAAAAAAGutWjbrenKMIri5NJLzYGcJKaTTTT1TWqafDID0AAAAAAAAAAAAAAAAAAAAAAAAoezv8AfeIfdx+FECw45tVa4G1CvU+ceqpxTlLLlouHmBqwbbKzxifRUqjVV8ITi4N89M9G/ACQxLGaGFypQrT3JV5blLST3nmlq0slxWrA5cI2otcaq1KNvPpJUlvSaT3cs8uq3x1A48R27sbCbpupKpOOklThKe61xza0AksD2gtsdTdtUU93tRyalHPhmnr5gZYRjlDGHUVCe86L3aicZRcXqtVJLufoB7jWNUMDgp3M9yMpbsdJSblk3oopvkBsxTFaOE0+luKipw73nm33JcW/ACFsNvbG9mqaquEpaRdSMoKXsb09QNX5UdcOre2n/FiBObO/2S2+5pfw4gSAAAAAAAAAAAAAAAAAAAAAAAABQ9nv77xD7uPwogZXF9h+z19XrSnVr3dbJShGPSOlpwhurTTLRtvRAQm02MfK13h9SNrXt92vFKpVhuOp85T0XPJf6gJT8qVsr2th1KWajUqyhLLulKlF5eTAutOwpWdJ06UY0YKLjnFKO6suOfvzYFKwHHsP2dg7eyjc3TUm5zp0t9zbfOSSTSXDloBzbLXX51jNaaoTtlOg26cluy40utJLm+IHVRj+j+NtcKWIQbXd0nH13k//ACAZ49H5fxa3tuNKzj09Xu3s1JJ/+v1YEXtPi1F4vFXilO3tILcpqLmnUlFSzaXtX/agOnavauwx21qUdys57rdFujLq1Eurk+S5PwYGvErqd5s/GVTNzW5Bt8XuV1FZ5+CQF82e/stt9zS/hxAkAAAAAAAAAAAAAAAAAAAAAAAACibPQaxq/eTydOOTy0elICK2bxWlshdXkMQUqdSrUc6dZxlJTg5SeSaWeTzz/wCANO2OPPEqtndKlVhZW9aPz04uO/JyjKTiuO6lDR82BL7b11f1sIq0s5QnWU4vJ9lzotN58NO8C1bU2k760uKVL6SdOUYrhm2uHnw8wKbsfthZ4Lawt60alK4p5qdJU5OU5bz1WS4vxyA5cMxd0MY6e8pzt1dUlChGSbbUpQjT3suDe68+7PUCwflMsZToU7qkn0tnUjVjlx3d5Z+9RfkBj+Ti2lcK4v60Wql5VbSf1acW0l7M81+6gOXaShU2exCGJRpzqW84dHcqCzcNEt7Lu0i/3WBtxTb6neU3SwzpK91U6sEqcsqbfOW8stPTv0Ay24o1o4RKNeXSV/muklFJZy6SLeSiuC4eQFm2eWVrbfc0v4cQJAAAAAAAAAAAAAAAAAAAAAAAAAAYzpqfFJ5d6zASgpLJpNdzA9SyA9Ax6NZ55LPvy1ASgpZNpNrh4ewDIAAyAxhTUOCSz7kkBkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD/2Q==" class="img-responsive">

                </div>
                <div class="col col-sm-4">
                    <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQPEBIUEBIVFBQWFRUWGBcUFBUVFxgUFRUWFxUYFBUYHCogGBwlGxQVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGCwkHCYsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLP/AABEIAJ8BPgMBIgACEQEDEQH/xAAcAAAABwEBAAAAAAAAAAAAAAAAAwQFBgcIAgH/xABOEAACAQICBAkIBgcFBwUBAAABAgMABAURBhIhMQcTQVFhcYGRoRQiMlJicpKxCCNCgqLBM0OTssLR0hUWU2NzNFSDo7PD4URVlOLwF//EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACIRAAICAgICAwEBAAAAAAAAAAABAhEDEiExQVETIjIEI//aAAwDAQACEQMRAD8AvGhQoUAChQoUAChQoUAChQoUAChSTEcShtl1p5UiXndgufQM956BUKxbhUt48xbRvOec/VJ3sNb8NNRb6E2kWBXEsqoCzsFA3liAO0mqSxPhEvp8wjrAvNEozy6XfM9oyqNXTyTtrTSPK3PI7OewsdlarC/JLmi8b/Tuwh33SOeaLWl8UBA7TUevOFqBc+Jt5pOlykYPix8Kq1banOw0fnn/AEUEjjnCkL8R2eNX8KXZO7JLdcK9036K3hT3y8nyK003PCDiMm6dY/cij/jDGnGy4Orl8tfi4h7T6x7kBHjT1a8GSD9LcsehIwvixPyo/wA0H2ZBJ9Jr6T0ryf7rlP3MqRvf3Lelczt708p+bVblvwfWS+kJH96TL9wCnCHRGxTdbIfeLt+8TRvBeA1ZRj67ek7nrZj8zRZts60CmAWa7rSD9kh+Yo0YRbDdbQfsY/5UvlXoejM8rARuzHVRySSr6Msg6nYfI1oBsHtTvtYP2Mf8qIfR2zbfaQdkaj5Cj5Y+g1ZRqYpdL6N3cjqnlHyal0OluIR+jeS/e1X/AH1NWzNoZYv/AOnA915F8A2VN1zwdWjeg0qdTqw/EpPjT3g/AtZEIt+EjEE3vFJ78Q/7ZWne04Wph+mtEbpSRk8GDfOlN3wZf4VyD0PGR+JSflTHe6AXce5FkH+W4Pg2R8KKxsLkiX2XCraPsljmi6SodfwEnwqRYdpbZXGQiuoiTuVm1GPUj5Hwqjr3CpITlLG6H21K92Y20je26KHhXgN2aYBoVnDD8RuLX/Z55IwORXOr2ofNPaKleF8KF3FkJ0jnHPlxT/EoK/hrN4WilNFyUKhuEcJVlPkJGa3bmlHm/tFzUD3sql8MyyKGRgynaCpBBHQRvrNprspOzuhQoUhgoUKFAAoUKFAAoUKFAAoUKFAAoUKFAAoU245jsFjHr3EgQfZG9mPMijafy5aqnSThGuLrNLbO3i3Zg/WsOlx6HUu3pNVGDl0JySLL0h0utbDZNJnJyRR+dIebzdy9bECq3xzhMuZ81tlFunPseQjrI1V7AeuoYkOZzO0naSd5J3kmlMcFdEcKRm5sImLyuXldpHO9nYs3edtdpb1IMI0blnyIGonrN/CN5+XTUzwvRuCDIleMf1n2jsXcPE9NaNqJNNkEwvR2e4y4uM6vrN5q9539mdSvDdAFGRuJSfZjGQ+Ntp7hUtD10JKzc5PopRQnw/BLa3y4uFAR9phrt8TZkU6cZSTjKHGVm1fZQs4yveMpHxlDjKWoWLOMocZSTjK7hOswHORRQ7FSkncCeyusm9U9xoy/vktkDPnlmFGQ5cifypv/AL0Qe38I/nUWOhWSRvB7q44yj8OxFLgMUzyByOYy25Z0iujquwFOPImHcZQ4yknGUOMqqFYq4yhxlJOMocZRqFil2BGRyI5jtHdTHiGi9pNnnEEPPH5ngPNPaKcuMocZTSa6Ag2JaAsMzBKG9lxqnsYbD4VFMQweSA5SxsnWNh6mGw9lXEXouXJgQwBB3gjMHrBrRTfklxRSL29G4biE9o2tbSvEd51T5p95D5rdoNWLiuiUMmZi+qbmG1D93k7O6obimCyW5+sXZyMNqnqP5GtFrInlEowLhUZclvotYf4kOw/ejJyPWD2VYuEYxBeJr28qyLy5HaOhlO1T0ECs+yQVxbySQOJIXaNxuZCVPVmOTo3VlLCvBSmaUoVVujPCgRlHiC5jdx0a/wDUjHzX4eWrMtLpJkV4nV0YZhlIII6CKwlFx7NE0w6hQoVIwUKFCgAUKFCgAVBtNOEFLQtDa5Sz7id8cZ9rL0m9kbuUjcWXhA0+LFraxfIDNZJlO3mKRHk6W7ueq5iiraGK+WRKXoOvLqS5kMk7tI53sx8ANwHQNldRQ13FFTlYWJkYKvaeQDnNdSiZWEWdk0jBUXMnkH58wqY4Po8kWTSZO/N9kdQ5es0fh1osK5KNvKeU9f8AKlwepbb6GkLFeuw9IhJTvhmFGVdZm1VO7LeenorN0uylyJuMr3jKd/7CT128P5V4cDXkdu3I1G8R6satevdenWHBVHpsT1bBSn+y4vV/E386TnEerGLXr3Xp2mwdT6JK+I/nTTd2zRHJh1EbjTUkxNNA16W4UNaQdAJ/L86a9anjAE2O3UPzPzFEuEC7GPhBvdUwx58jOfAL/FUQ8rrvhDxhTfyKXUcWqJtYD7OsfFzUWbG4h+uj/aL/ADrA0Lr0MjytFb12ZvHVHgooieXWZjzk084ba8VbxR7tWNV7QoBPfXKYXGN4J6yfyq4tLsTVjLr15r09vhcZ3AjqJ/Om+9wtkGaHWHiP51akmTTEmvXmvRBena1wfWUF2Iz5BydZNU2l2Jcjfr15r07/ANip6zeH8q5kwMZea5z6QD8sqW8R0xpMlecZT1FgqD0iW8B4bfGjjhMXqfib+dLeIasjpei5cmBBAIO8HaD1inu4wIEfVsQeZto7948aYbmNo21XGR+fSDy1cWpdEu0RnGNGgc2g2H1Du+6Tu6jUTntyCQRkRvB2HtqymemrFsOWcZ7nG48/Q3RWqfslor+WGluj+kFxh0mtA/mk5tG21H6xyH2ht7NlGXNsVJDDIikMsVOUbEmXhonpbDiSeZ5kqjz4mI1h0qftL0jty3VIKzTDK8LrJExR1OaspyIP/wC5Nxq5dA9NVxBeKmyS5UbQNiyAb2Tp515OquWeOuUaxlZMaFChWRYKrThR0wMednbNk5H1zg7VUj9Gp5GI3nkBy5dkt010gGH2jyjIyHzIgeWRgciRygAFj0LVAhi7FnJZmJZidpLE5kk85JrXFC+WRJnUMdLIo64hSlkKV1pGTDYIcyAN5qU4fAIlyG/lPOaZ8MjyOfYKdlkqmhIXq9diSkIkrsSUqHYtElS3GrryPD5XByMUBy98Lkv4sqiWFJxk0a87jPqBzPgDRvDdigt8M1ScuOmjj7FzlPZ9WB21zZ/CNIEA/v5ff70/wx/00/aKcILxmaS+uHkVUASIBdZ5GbeMgMgApzJ2DW58qp2TGlG7Nur/AM0dgYusRuEt7RAZH7lUb2djsCjny7yQK5zQsfHOEO6uidWQwR8iREqcvak9InuHRUVuNKApza4Yt0OzHPrBqzMI4ErYIPLp5riQ79VuLjB9lRt7SduW4bqjWn/AoIIHnw15H1AWeCTJmKjaTEwAzIG3VOZPIc8gQBiwrheuLRhqF50z2pM2YI9ljmy9mzoNXvoxpBb4xZiaE+a3mupy1o5ABmrdIzBB5QQax3VmcAWPNbYoICTxd0hQjk4xAXjbwdfv0AWviEUkUjIzHZuI2Zg7jsqV6NRalspP2izHPryHgBSHS23z4twOdT81/ir3TC88hwm6cHIx2zhT7ZTUT8RFbzncERFUzKGkuI+V3lzPmSJZpZBnn6LOSo28wIHZR2h0KPiFoJWVIxNG0jOwVREjB5MyfZVqZ6FYFl2ab8OTEtFhShV3eUSLmx6Y4m2AdLZ+6KqvEdKr25Yme8nfPkMr6vYoOQHQBVmaCcCLXEazYm7whhmsCZCTLkMjMCE93LPbtIOypHpLwG2jQObFpI51UlQ766Ow26rZjMZ7swdme40AUdhuk95bMGgu50IOeyV8j1qTkw6CK0FwQ8JJxUNb3WQuo11tZRksqAgFgNysMxmBsOeY5QM0EZVK+Cm5aLGbErvMoQ+7IpRvBjQBpLFrYpcxBQNWVh2HMa3Zkc++k3CjpGcOsDIshjd5Y41YDMgkljsyP2UYdtSee3DtGx3oxPerL+Y7qpb6SuI7LK3B5ZJWHVqoh8ZKqUrSElQ2Q8Il2/oXhbqEf9NSjAeEcwWsj3MjXE7SERx+aAqKq+c7AeaCSecnLtrPANS7QDAbzFbjirdskXIyySZlI1J2Z8pY5HJRvyO4AkSMmmLab3d0Trzsi+pETGoHNsObfeJpqXFpAcxK4POHYHvzq1bLgks1QCV5pHy2trhBn7KqNg6DnUG4Q9AHwxPKLd2ltwQH1steLM5KWIADKSQM8gRmN+0gAV6OcJFxbMBOxni5QxzkA50c7Sehs+zfVtNxV/bK8TBlddaNxydfKOYjo5xWWvK6tvgJx4sbi0Y5gATxjPdtCSgdGZjPWTz006AeJc1JVhkQSCOkb6KZ6c9L4tS4zG51Ddo80/Id9MRkruj9lZzvhiXFrUSDMekPEc1RqWOpU70yX8WTHLl21aQhkljpMjtE6vGxR1IZWXYQRuIpylSkUq1LQ0XdoJpUuIwedks8eQkUeDqPVOR6iCOkyas5aP4w9hcxzx7dU5OvrxnLXXwzHMQDyVoezuVmjSSM6yOoZSOVWGYPjXHkjqzaLsprhbxbj74Qg+ZbqBl/mSAMx+HUHYaiMK13i1zx11cSE5680jdhckeGQoQ10QVIzkxXCtLYVpJDS6EVujNi62bIUpWWkkdHLV0IUiWuxLSdaMWkMkmhUZe5zO5EY9pyUeBPdUD+kriWctlbg+ikkrD32CIT+zfvqztAYMklfnZV+EZn94d1UHw3Yj5RjVwM81iEcS/dQFh8bPXBndzN4dEDrR/0ftGxb2Bu2X625Y5EjaIUYqoGe7NgzdI1eas4VsnD7byLDYo0/U2yIOtYwM+vPbWK5LGfGsad5CsblUU5DVORYjeSRyU/aO3TSwAucyCVz5TlkRn31CFFTbRqHUt1z+0S3Yd3gBXTlilGjOLbZkvTWxW2xK9iQAIlxKFA3BNc6oHUMhXegcpTFLArv8qtx2GVQfAmk+lV+Lm/u5lOayXEzqfZaRivhlSzg9tjLi1gq7/KYW7EcO3gprmNDW2JQcYEH+Yh7Bv8M6r76QWI8VhPF8s80afdTOUnvjXvqzCKoT6SmJa1xZ24PoRvKR/qMFXP9k3fTsCmKtrgB0RW7uXvJ1DR25AjBGYM584N9wZHrZTyVUtaq4F8L8lwW2zGTS607dPGN5h/ZhKQEjxnEjH5kfpcp5h0dNGXF55NZPNISeLheViTn6KFzn3UzMONk95vmaQ8NGI+TYLc5HJpNSFenXYa4+APWk0kkiVyzKzsSSTtJOZ6zU74EbAzY1bHLZEJJW6lQqv4mWoHV1fRrw3Oa9uCPRSOJT77F3A6uLTvrMovmsv8PGI8fjMqjdDHFF+HjD4ykdlagrGGlGJeV3t1ODmJZpHGfqs5KjsXIdlADXWteDTR9cKwuFWGq7Jx0x5ddl1iD7oyX7tZg0TshcX9nEwzWS4hRh7LSKGz7Ca1tpTLq2zAfaKr2Z5nwFOKt0JukRe/xuaRyyuyDPzVUkADkzy3nrqUTwi9sHSUAiaBlb76EHq31BWqbYpc+Q4ZLI36m2dj7yxk5DrOyujMkkqIg22Y6SVhuJqxuAi9b+2YgT6UUy9mqH+aCq2qyeAC218ZVv8ADglfv1U/7lcxoXXwgbOIP+oP3KhrS1LuEJ9sC9Dn90D5GoY1ehgX0Rzz/R60lI7o50e1ES1tRA3zLSKZacJqRTCs2UhumFW1wN4uZbaS3Y5mBs1/05MyB2MH7xVUTU+aAY15FdO5OxoWXLkz14yPke+sMitFxfJG9QqzKd4JB6wcjSuE0r0ysDbYjdRndxrOvuy/WLl1a2XZSGFqqLExwhNLoTTdC1LYWrZEMcI6OWk0TUoU1Yg1aMWilNGoM9g3nZ20mBZGisQis0J2ZhnJ6CSQfhyrIeOX5urq4nP62WSTb7blvzrVunl4LHBrtgctS2ManmZ1ESH4mFZEry5O22dSVIFbLw65F/h8UkZ2TQKw6CyA5HqOw9VY0qy+C7hTbCU8nuUaW1zJXUy14iTm2oCQGUnbq5jaSc+QpcDLescGlkk1WRkAPnEjIAcuR5T1UfwqaRLhmFylDqySLxEIByOs4yLD3V1m6wBy0y4hw4YdHHrRCaZ8tiCPU2+0zHIDpGdUXpvphPjFxxtwQqrmI4lz1I0PIOdjszbly5AABc5uRKjRHatL6PeBmfEmuCPMtoyQf82UFFHw8YewVWljZvcSpFCheR2Cqq7yx3AVrLg/0XTBsPWIka/6SZxuMhA1sj6oACjqz3moKJVWU+GfEvKMausjmsZSFeji0AcfGXrUNrcfVcY+wEFz0LtI/DlWMcVvTcXE0zb5ZHkPW7Fj86GARDEXZVUZsxCgDlJOQHfWzo7dbSzSJNixRJEvUqhF/Ksr8F2G+VYxYpyCYSHqhBlOfQdTLtrUmkc2rGB6zeA2/PKqirYn0IcHXWmXozPhl8yKrn6SuJZQ2VuPtPJMeji1CJs6eNfuqzdGUzLt1AfM/lVA8P2JcdjDIDsghjj6MyDKf+oB2U8nYo9Fb1prgBw3icHWTlnmlk7FIiA6vqie2sy1szRDDfJLC0gO+OCNW98KNc/FnUFBem+I+S4beTA5MkEhUn1ypCfiK1jetM/SAxHicIMfLPNHH2LnKT3xgdtZmoAdtEr4W2IWcznJY7iF2PMiyKW8M61zpDaGaAhNpBDADly35dhNYwq5uDnhmFrCltiSu6oAscyAMwQbllUnbkNmsNuWWw76adOxNWWTgOCu8qtIhVFOfnAgkjcADyZ1G/pCaSiCySzRvrLghmAO0Qo2eZ5tZwoHOFavcf4dLKKM+RxyXEhGzWXiowfaJ848+QG3nFUJpBjc2IXD3Fy+vI56gANyqORQOSqnNydhFUN1X19G/AysV1eMP0hWGPZ9lPOkI5wSUHWhqnNFdHpcTuo7aAec52tlmqIPSd+YAd5yG8itYW1vDhFgkUQySFAiA5Zu/OcuVmJYnpJqUrdIZFdM7njLpgNyKqdvpHxbLsqPtRs0hZizHMsSSeck5k0Sxr04RpJHK3bOGoiU0cxpNM1UISzGkUxpVM1IZmrNlISzUXa2rSuVTPPInZzAgfmK9maptwPYUJrm4lcZokQTbuLSOG8BGfirGbpWXFDvwzYEWWO8QehlHLl6hP1bdjEj745qq+F601d2yzRvHIoZHUqyncVYZEHsrPel2jj4ZcmNszG2bROftJnuJ9ZcwD2HlFZYpeCpryJoXpbC9NMUlLYpK6UzNjtE9K0amqKSlkUlapkC1TTpo7Dxl1Cvtg9iecf3aZ0apXwfwa1yz8iRn4mIA8A1TkdRbHFWxv8ApD4jxWFpEDtmnQEewgZz+IR1m6rh+kliGvd2kA/VwtIeuZ8su6Ed9U9XmHUXPwQaCwYnhF75QpBlnVUkA85DCmaume/bM4PPtHVA9LuD2+wx242FniGZE8Sl4yo5WI/R9TZbjlmNtaH4J7EWuCWYP2ojMT/qs0g/CwHZTjZ6WwOBr60Z6QWHYV/MCqUW+kJtIx5T/o5obe4iyi1tpGU/rGBSIDPaTI3m9gzPMDWr/wC0bQnW14c+c6uf86JudKIE9Elz7Kn5nIUKEn4DZEc4NeDSHB142Qia6IyMmXmxg71iB3dLHaegbKccexfjjxcR8zPafWPJ2Cm/FcfkuPN9BPVB3+8eXqptD10Y8NcszlO+iWadmSPCbtbeN5JDA0SLEjO5Mg4sFVUEnLWz6Mqy5/c3Ef8A268/+LP/AE1qKx0pTVAmVgw3lQCD079lKv7zwe38NYPHL0XsinuAXRS5gxCWe6tpoVSAqnHQvHm7so80uBnkqtu56tTSqf6xF5lz7WP/ANRSuTSiEDzQ7HmyA8SajF7emaRnbeeTmA2AVpixu7ZMpKiX6OR5QA+sWPjl/DWZNL9H8QvL+7nGH3hEk0jKfJZ/Q1iE+z6oWr/wTHhAupICVzzBXLMZ7xkd4p3/ALzQe18NTPHK3wNSVGZdF9Bb2S9tVmsblIjNHxjSW8qqI9ca5ZmXIDVzrWdMp0ng9v4f/NKsIxHykOwXVUHVGe8kDMk947qhwklbRVopb6SuI5zWVuD6KSSsPfYIh/5b99UrU64bMR8oxq525rEI4l+6gLA/fZ6g8cZYhVBJJAAG8k7ABUjL3wXgwTEtHrMZiK6Akmjky2ESuWCSZbSpUJt3g7RntBqLSPRK8w5it1bugByD5Fo25tWQeaerPPburWcSrh9lGoGawRRxgZ5ZhAqAZ91E2+k9u/pMUPM6n5jMVSi2rSFaMbVMNFeDa/xFl1IGiiO+WYGNAOdQRm/3QeytOjErRfOEkIPONXPw20ivNMYEH1YaQ9A1R2ltvhTWOT6QOSQn0L0PtsDtmCHNiAZp3ADOR0fZUZ7FHidpj+kmNG6k2ZiNfRHPzsek+HfRGMY1JdH6w5KNyL6I6ek9JpsZq68WHXl9mM53wjxjXDGgTRTvXQZnkjUjleupZKRyyUmxo4mekUr0ZLJSOWSsmykFTPV+8H2AmwsY0cZSv9ZJ0OwGS/dUKvWDVfcFmiZuZRdzr9TG31YP6yVT6Xuoe9h0Grmrlyyvg1gvIKa9JMBixCBoZhsO1WHpI43Mp5/mMwd9OlCsSzOGkOAzYdNxU42HMo4HmSKOVeY7s13jqyJSRS1ozGcJhvImiuEDoe8HkZTvUjnFUrpfoLPhxLpnNb7+MA85B/mqN3vDZ1bq6YZL7MpRGiKWlkUtMkU1K45q3UiGh7ilqyeDaH6iWT1nC9iL/NjVTRzVcPB1cK9ggUjNWcOOUMXLDP7pFRnl9B419jO3DBiXlONXhBzVHEQ6OKUIw+MP31ErS3aWRI0GbOyoo9piAPE1oW/4DLaeWSV7u41pHZ22R+k7Fjyc5o7BeBK1tbmGcXEzmKRJArBMiUYMAchuzAriNyc4yBa2DIuwJEsS9RAjHgargNU04QrwLDHGD5zPrEeyoO/tI7jUEDV3fzx+lmGR8ioNXQakweug9bUQKQ1dB6TB66D0qAUh6916TB6916KAU69e69Jtehr0qGKdevNek+vQ16KAP16nujaCO0QtszDOT0Ekg/DlVdF6saOFbuw4tHKLJAY9Zciyayahyz5V29orD+j8ovH2Y+xm+8puZ5iMjLLJJl/qOW/Onrgzw7ynF7GPk45XPSsOcrDuQ1b3/wDArT/e7juj/pp+0K4KLfCboXMc0sjBGUBwmQ1sgTsG/LMdtchsP+nFxq26r67juUE/MLUDLVI9PrwNNHGD6CknoLkbD2KD21FS9d+CNQRzzfIYWrgtXBauC1b0Qdlq4LUU0tEST0AHPLSWWWiZJqSyTVLkNIMllpJLLRcs1JXkJIAzJJyAG0kncAOU1m5FJHUstSbQXQp8ScSSgpaqdrbjKQdqR9HIW5Nw27nvQzg0aQrNiAKpvWDczc3GkeiPZG3ny3G2YowihUAVQAAFAAAGwAAbhXNPJ4RpGPs8toFiRUjUKigKqqMgFAyAAoyhQrA0BQoUKABQIoUKAIDpVwZQ3JMloRbynaVy+qY9Kj0D0rs6DVW4zg1xYPq3MTJtyDb0b3XGw9W/orSFF3ECyKUkVXVhkVYBlI5iDsNaRyNEuKZmmOenPDMYlt21oZGjJ36pyzHSNx7asfHuCy3mza0c27+rteIn3Sc17DkOaq+xnQ29sszJCXQfbhzkXrIA1l7QK3jkTM3Fodk04vf94PwRf00cuml4d9wfgj/pqDx3PTShLirSj6RPPskUt+0jFpGLMd5Y5nvrpZqY0uKPS5rVSJoehJXQemlbmjVuaq0KhzD10HpvW5rsXFPgBdr17r0jE4roTCgBVr17r0l42hxtFAKtevNek3G15x1FAKtelNlissGfFSMue8DaM+o7KazMK5M4pNJ9hZIf703X+Mfhj/priTSe6IyM7dgQHvAzqPm4otrmp0h6Q7fsXSSkkkkknaSTmSek0W0lIGuaKe5qrQqF7T0Q9xSB7iiHuKlyHQukuKTyT0ie4olZC7BUBZjuVQWY9SjaahyKoUyT0mlnqVYLwc3t1kZFFsh5Zdr5dEQ29jFasTR7g8s7MhmTj5B9ubIgH2Y/RHQciRz1jLKkWoMq3RzQ27xDJkTi4j+tkBCkewu9+zZ0ira0V0ItsOyZRxk2W2WQAt0hBuQdW3nJqTUKwlNstRSBQoUKgoFChQoAFChQoAFChQoAFChQoAFChQoAZcZ0UtLzMz26Mx+2o1JPjTInqJqGYpwSKcza3LL7Myhx1B1yIHYas2hVKTXQmkyhsR0BxC3/AFIlHrQsH/Ccm8Kj9xrwtqzI8bc0ish7mANaZriWJXGTqGB5GAI7jWizPyTojNK3NGrc1ed7oRYTelaRr0xgxH/lkUx3fBRaN+jknj6A6sPxKT41azInQq1bmjFuqm1zwRuP0V4D0PCR+IP+VNk/BdfL6L27j33U9xTLxq1mXsWjI+LquhdUvn0AxFN1uG6Vmi/iYUgn0cvI/TgI/wCJEfk9V8i9i1PfKq98qpumt5U9NMu1T8jSZpyN9VuLUevKq88qpnWYndSyGxmf0Y8/vIPmaNw1FRuq5N1R8Git9J6FuT/xYR83pfBwd4i++JE9+VP4Can5V7HqxmNzRbXNS234Krxv0k0CdRkc92oB4052vBEP1t4T0RxBfFmPyqXmXsejK6a5op7rpq47PgusU9PjpffkK/8ATC0/2GitnBkYrWEEbmKBm+Nsz41DzIehQljZT3P+zwyy9KIzL2sBkO01JcN4Nb6bIyCOBf8AMcM2XQqZjvIq7QK9rN5mUoIr3CuCi2TI3Msk55QPqk7lOt+KppheDwWi6tvDHEOXUUAn3m3t20uoVm5N9lJJAoUKFIYKFChQAKFChQAKFChQB//Z" class="img-responsive">
                    <h4>Aside</h4>
                    <hr>
                    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS35BakuoyX3fyUEtCe6JI9zFluJkKCS1wtMoqbAH5lc1EE-asqmw" class="img-responsive">
                    <h4>Aside 2</h4>
                </div>
            </div>



            <hr>
            <h4><a href="/">Laravel</a></h4>
            <hr>
        </div>
    </div>
</div>



<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>