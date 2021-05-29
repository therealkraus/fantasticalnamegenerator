<nav class="navbar navbar-expand-md navbar-dark bg-darker">
  <a class="navbar-brand" href="index.php">
    <img src="images/logo.png" width="24" height="24" class="logo">
    <span>Fantastical Names Generator</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item px-3 <?php if ($CURRENT_PAGE == "Alchemy") { ?>active<?php } ?>">
        <a class="nav-link" href="alchemy.php">Alchemy Shop</a>
      </li>
      <li class="nav-item px-3 <?php if ($CURRENT_PAGE == "Blacksmith") { ?>active<?php } ?>">
        <a class="nav-link" href="blacksmith.php">Blacksmith</a>
      </li>
      <li class="nav-item px-3 <?php if ($CURRENT_PAGE == "General") { ?>active<?php } ?>">
        <a class="nav-link" href="general.php">General Shop</a>
      </li>
      <li class="nav-item px-3 <?php if ($CURRENT_PAGE == "Magic") { ?>active<?php } ?>">
        <a class="nav-link" href="magic.php">Magic Shop</a>
      </li>
      <li class="nav-item px-3 <?php if ($CURRENT_PAGE == "Stable") { ?>active<?php } ?>">
        <a class="nav-link" href="stable.php">Stables</a>
      </li>
      <li class="nav-item px-3 <?php if ($CURRENT_PAGE == "Tavern") { ?>active<?php } ?>">
        <a class="nav-link" href="tavern.php">Tavern</a>
      </li>
    </ul>
  </div>
</nav>