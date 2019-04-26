<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">{{config('app.name','CarDealer')}}</a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="/Admin/accueil">Accueil</a></li>
            <li><a href="/Admin/gererclient">Clients</a></li>
            <li><a href="/Admin/gererpartenaire">Partenaires</a></li>
            <li><a href="/Admin/gererpannonce">Annonces</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/Admin/profil"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
          </ul>
        </div>
</nav>
