<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <p class="heading center space equivalence">COOPERACY ADMIN BOARD </p>
    <p class="subheading center space up" >Welcome {{Auth::user()->name}}</p>

    <p class="base center">
    <ul>
        <li><a href="{{ route('projects-list') }}">View projects</a></li>
        <li><a href="{{ route('member-list') }}">View members</a></li>
        <li><a href="{{ route('new-project') }}">Insert a new project</a></li>
        <li><a href="{{ route('newsmanage') }}">Manage news</a></li>
        <li><a href="{{ route('createplan') }}">Create subscription plan</a></li>
    </ul>
    </p>
  </div>
  <div class="col-md-2"></div>
</div>
