
</head>
<body class="text-center">
    
<main class="form-signup shadow-lg p-3 mb-5 bg-body rounded">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link disabled" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Início</button>
        <button class="nav-link active" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user" type="button" role="tab" aria-controls="nav-user" aria-selected="true">Usuário</button>
        <button class="nav-link disabled" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="false">Negócio</button>
        <button class="nav-link disabled" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</button>
    </div>
    </nav>
        
<form class="row g-3 needs-validation" method="post" action="/lojaVirtual/public/signup/business" novalidate>

<div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">






<!-- User settings -->

<div class="tab-pane fade show active" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">

<div class="container-sm">
 <h1 class="h4 mb-3 fw-normal ">Dados de usuário</h1>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Primeiro nome</label>
                <input type="text" name="firstName" class="form-control" id="validationCustom01"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            
            <label for="validationCustom02" class="form-label">Sobrenome</label>
            <input type="text" name="lastName" class="form-control" id="validationCustom02"  required>
            <div class="valid-feedback"></div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <input type="email" name="email"class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div>
      </div>
       

        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">CPF</label>
            <div class="input-group has-validation">
                <input type="text" name="cpf" class="form-control cpf-mask" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom03" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>

        </div>

        <div class="col-md-5">
            <label for="validationCustom03" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-12"><button class="btn btn-dark btn-lg" type="submit">Próximo</button></div>
        
    </div>

    
</div>

</div>





</div>


<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
</div>
</form>


</main>
</body>
</html>
<footer>
