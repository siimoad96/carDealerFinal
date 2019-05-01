<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">{{config('app.name','CarDealer')}}</a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="/Admin/accueil">Accueil</a></li>
            <li><a href="/Admin/gererClient">Clients</a></li>
            <li><a href="/Admin/gererPartenaire">Partenaires</a></li>
            <li><a href="/Admin/gererAnnonce">Annonces</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="dropdown-item" href="{{ route('profile_admin') }}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
          </ul>
        </div>
</nav>
