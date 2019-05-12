<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="/home">{{config('app.name','CarDealer')}}</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Accueil</a></li>
            <li><a href="/services" >Équipe</a></li>
            <li><a href="/about">Á Propos</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div>
</nav>
