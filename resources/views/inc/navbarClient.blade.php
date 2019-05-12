<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="/home">{{config('app.name','CarDealer')}}</a>
          </div>
          <ul class="nav navbar-nav">
            <li ><a href="/home">Accueil</a></li>
            <li ><a href="/Client/recherche">Recherche</a></li>
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown" id="markAsRead" onclick="markNotificationAsRead()">
                <a href="#" class ="dropdown-item" data-toggle="dropdown" role="button" aria-expanded="false">
                  <span class="glyphicon glyphicon-globe"></span> Notifications <span class="badge">{{count(auth()->user()->unreadNotifications)}}</span>
                </a>
                <ul class="dropdown-menu">
                  @forelse (auth()->user()->unreadNotifications as $notification)
                    @include('notifications.'.snake_case(class_basename($notification->type)))
                    @empty
                      Pas de notifications.
                  @endforelse
                    </ul>
              </li>
              <li><a class="dropdown-item" href="{{ route('profile_client') }}"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="{{ route('logout') }}"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>
          </ul>
        </div>
</nav>