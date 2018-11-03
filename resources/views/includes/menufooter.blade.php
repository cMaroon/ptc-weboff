<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Not Available">
      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Not Available">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen" onclick="openFullscreen();">
      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true" ></span>
    </a>

    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('logout') }}"  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    </a>
  </div>
  <!-- /menu footer buttons -->