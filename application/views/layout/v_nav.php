<ul class="nav navbar-nav navbar-left navbar-top-links">
  <li><a href="<?= base_url('') ?>"><i class="fa fa-home fa-fw"></i> Home</a></li>
  <li><a href="<?= base_url('home/global') ?>"><i></i> Global</a></li>
  <li><a href="<?= base_url('home/pemetaan') ?>"><i></i> Pemetaan</a></li>
</ul>

<ul class="nav navbar-right navbar-top-links">
  <li class="dropdown navbar-inverse">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-alerts">
      <li>
        <a href="#">
          <div>
            <i class="fa fa-comment fa-fw"></i> New Comment
            <span class="pull-right text-muted small">4 minutes ago</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
            <span class="pull-right text-muted small">12 minutes ago</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            <i class="fa fa-envelope fa-fw"></i> Message Sent
            <span class="pull-right text-muted small">4 minutes ago</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            <i class="fa fa-tasks fa-fw"></i> New Task
            <span class="pull-right text-muted small">4 minutes ago</span>
          </div>
        </a>
      </li>
      <li>
        <a href="#">
          <div>
            <i class="fa fa-upload fa-fw"></i> Server Rebooted
            <span class="pull-right text-muted small">4 minutes ago</span>
          </div>
        </a>
      </li>
      <li class="divider"></li>
      <li>
        <a class="text-center" href="#">
          <strong>See All Alerts</strong>
          <i class="fa fa-angle-right"></i>
        </a>
      </li>
    </ul>
  </li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      <i class="fa fa-user fa-fw"></i> Alam <b class="caret"></b>
    </a>
    <ul class="dropdown-menu dropdown-user">
      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
      </li>
      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
      </li>
      <li class="divider"></li>
      <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
      </li>
    </ul>
  </li>
</ul>
<!-- /.navbar-top-links -->


</nav>

<!-- Page Content -->
<div id="wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <br>
        <h1 class="page-header"><?= $title ?></h1>