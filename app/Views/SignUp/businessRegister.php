
</head>
<body class="text-center">
    
<main class="form-signup shadow-lg p-3 mb-5 bg-body rounded">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link disabled" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Início</button>
        <button class="nav-link  disabled" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user" type="button" role="tab" aria-controls="nav-user" aria-selected="false">Usuário</button>
        <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="true">Negócio</button>
        <button class="nav-link  disabled" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</button>
    </div>
    </nav>
        
<form class="row g-3 needs-validation" action="/lojaVirtual/public/signup/contact" novalidate>

<div class="tab-content" id="nav-tabContent">


</div>




<!-- Business settings -->

<div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-business-tab">

<div class="container-sm">
    <h1 class="h4 mb-3 fw-normal ">Dados do negócio</h1>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Nome da empresa</label>
                <input type="text" class="form-control" name="businessName" id="validationCustom01"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            
            <label for="validationCustom02" class="form-label">Nome fantasia (opcional)</label>
            <input type="text" class="form-control" name="fantasyName" id="validationCustom02">
            <div class="valid-feedback"></div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <input type="email" class="form-control" name="businessEmail"id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div>
      </div>
       

        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">CNPJ</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="CNPJ" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
        

    <div class="row">

        <div class="col-md-5">

       
                <label for="formFile" class="form-label">Logomarca</label>
                <input class="form-control" name="logo" type="file" id="formFile">
             
        </div>

        <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Tipo de negócio</label>
            <select class="form-select" id="validationCustom04" name="type" required>
            <option selected disabled value="">Escolha...</option>
                <option value="Vestuário">Vestuário</option>
                <option value="Informática">Informática</option>
                <option value="Outros">Outros</option>
            </select>
            <div class="invalid-feedback"></div>        
        </div>

        <div class="col-md-1" >
            <label for="exampleColorInput" class="form-label">Cor</label>
            <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
        </div>
    </div>
    <div class="col-12"><button class="btn btn-dark btn-lg" type="submit">Próximo</button></div>
</div>

</div>




</div>


</div>


<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
</div>
</form>


</main>
</body>
</html>
<footer>
