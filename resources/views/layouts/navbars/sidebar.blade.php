<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://reclamex.com/" class="simple-text logo-normal">
      {{ __('RECLAMEX') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('TABLERO') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'reclamos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('reclamos.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Reclamos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'promocions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('promocions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Promociones') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
