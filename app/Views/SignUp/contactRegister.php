
</head>
<body class="text-center">
    
<main class="form-signup shadow-lg p-3 mb-5 bg-body rounded">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link disabled" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Início</button>
        <button class="nav-link disabled" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user" type="button" role="tab" aria-controls="nav-user" aria-selected="false">Usuário</button>
        <button class="nav-link disabled" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="false">Negócio</button>
        <button class="nav-link active" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="true">Contato</button>
    </div>
    </nav>
        
<form class="row g-3 needs-validation" action="/lojaVirtual/public/signup/config" novalidate>

<div class="tab-content" id="nav-tabContent">


<!-- contact settings -->

<div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

<div class="container-sm">
    <h1 class="h4 mb-3 fw-normal ">Dados de contato</h1>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" name="phone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control cel-sp-mask" id="validationCustom01"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            
            <label for="validationCustom02" name="phone2" class="form-label">Telefone 2 (opcional)</label>
            <input type="text" class="form-control cel-sp-mask" id="validationCustom02">
            <div class="valid-feedback"></div>
            
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-4">
            <label for="validationCustom03" name="street" class="form-label">Rua</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>

        </div>

        <div class="col-md-4">
            <label for="validationCustom03" name="neighborhood" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>

        <div class="col-md-2">
            <label for="validationCustom03" name="number" class="form-label">Número</label>
            <input type="number" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <label for="validationCustom03" name="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom04" name="state" class="form-label">Estado</label>
            <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
            </select>

            <div class="invalid-feedback"></div>
        </div>

        <div class="col-md-2">
            <label for="validationCustom05" name="cep" class="form-label">CEP</label>
            <input type="text" class="form-control cep-mask" id="validationCustom05" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-12"><button class="btn btn-dark btn-lg" type="submit">Finalizar</button></div>
    </div>
    
</div>

</div>


</div>


<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
</form>


</main>
</body>
</html>
<footer>
