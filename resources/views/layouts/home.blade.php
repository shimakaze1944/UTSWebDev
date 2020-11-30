<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>UTS - WebDev</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin" />
    <link rel="stylesheet" href="{{asset('assets/css/Footer-Dark.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/Navigation-with-Button.css')}}" />
    <link rel="stylesheet" href="styles.css" />
</head>

<body>

    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="color: #F08710;background-color: #F08710;">
        <div class="container"><a class="navbar-brand text-capitalize" href="#" style="color: #A25B0C;filter: blur(0px) brightness(100%) grayscale(0%);margin-left: -10%;margin-right: 5%;">Cafe</a><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li role="presentation" class="nav-item"><a class="nav-link" href="{{ route('bean.index') }}" style="color: rgb(255,255,255);font-weight: bold;">Add Coffee Bean</a></li>
                    <li role="presentation" class="nav-item"><a class="nav-link" href="{{ route('note.index') }}" style="color: rgb(255,255,255);font-weight: bold;">Add Cupping Notes</a></li>
                </ul><span class="navbar-text actions"></span></div>
        </div>
    </nav>

    <div data-ride="carousel" class="carousel slide" id="carousel-1" style=width:100%>
        <div class="carousel-inner">
            <div class="carousel-item active"><img class="w-100 d-block" src="{{asset('assets/img/a.jpg')}}" alt="Slide Image" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('assets/img/b.jpg')}}" alt="Slide Image" /></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('assets/img/c.jpg')}}" alt="Slide Image" /></div>
        </div>
        <div><a href="#carousel-1" data-slide="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" data-slide="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1" ></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
</body>

</html>


