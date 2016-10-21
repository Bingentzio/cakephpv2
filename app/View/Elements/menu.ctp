<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bootstrap theme</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meseros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista Meseros', array('controller'=> 'meseros', 'action'=>'index')) ?></a></li>
            <li><?php echo $this->Html->link('Nuevo Mesero', array('controller'=> 'meseros', 'action'=>'nuevo')) ?></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mesas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->Html->link('Lista Meseros', array('controller'=> 'mesas', 'action'=>'index')) ?></a></li>
            <li><?php echo $this->Html->link('Nuevo Mesero', array('controller'=> 'mesas', 'action'=>'nuevo')) ?></a></li>
          </ul>
        </li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
