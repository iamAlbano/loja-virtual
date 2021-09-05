
</head>
<body class="text-center">
    
<main class="form-signup shadow-lg p-3 mb-5 bg-body rounded">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link <?=$p['home']?>" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Início</button>
    <button class="nav-link  <?=$p['user']?>" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user" type="button" role="tab" aria-controls="nav-user" aria-selected="false">Usuário</button>
    <button class="nav-link <?=$p['business']?>" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="true">Negócio</button>
    <button class="nav-link <?=$p['contact']?>" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</button>
    </div>
    </nav>
        
<form class="row g-3 needs-validation" id="register" method="post" action="<?=$p['action']?>" novalidate>

<div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade show <?=$p['home']?>" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


<!-- Configuração inicial -->

<?php if($p['home'] == 'active'){ include('welcome.php'); } ?>
</div>


<!-- User settings -->

<div class="tab-pane fade show <?=$p['user']?>" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">

<?php if($p['user'] == 'active'){ include('adminRegister.php'); }?>

</div>


<!-- Business settings -->

<div class="tab-pane fade show <?=$p['business']?>" id="nav-business" role="tabpanel" aria-labelledby="nav-business-tab">

<?php if($p['business'] == 'active'){ include('businessRegister.php'); }?>

</div>



<!-- contact settings -->

<div class="tab-pane fade show <?=$p['contact']?>" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

<?php if($p['contact'] == 'active'){ include('contactRegister.php'); }?>

</div>


</div>




</div>


</div>


<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: <?=$p['progress']?>"></div>
</div>
</form>


</main>
</body>
</html>
<footer>
