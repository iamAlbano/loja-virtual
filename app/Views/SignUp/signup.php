
</head>
<body class="text-center">
    
<main class="form-signup shadow-lg p-3 mb-5 bg-body rounded">
    <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link <?= $parameter['home'];?>" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Início</button>
        <button class="nav-link <?= $parameter['user'];?>" id="nav-user-tab" data-bs-toggle="tab" data-bs-target="#nav-user" type="button" role="tab" aria-controls="nav-user" aria-selected="false">Usuário</button>
        <button class="nav-link <?= $parameter['business'];?>" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="false">Negócio</button>
        <button class="nav-link <?= $parameter['contact'];?>" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contato</button>
    </div>
    </nav>
        
<form class="row g-3 needs-validation" action="#" novalidate>

<div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade show <?= $parameter['home'];?>" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<!-- Configuração inicial -->

<div class="container-sm">
 <h1 class="h4 mb-3 fw-normal ">Bem-vindo!</h1>
    <div class="row">
        <div class="col-md-8">
        <p class="text-center">Olá, seja bem-vindo ao <b><i>minha loja virtual</i></b>! Parece que você ainda não configurou
            seu negócio online, vamos começar?</p>
        </div>

        
        <div class="col-md-5">
        
        <img src="https://img-premium.flaticon.com/png/512/1213/premium/1213206.png?token=exp=1630709084~hmac=258a5e6265c9ef88b8ef882890fa8ea9"
         width="57.5%" class="img-fluid" alt="Icon by Freepik on Flaticon"/>
            
        </div>
        <div class="col-12">
            <a href="lojaVirtual/public/public/login"><button class="btn btn-dark btn-lg start" >Começar</button></a></div>
    </div>
     

    
</div>

</div>






<!-- User settings -->

<div class="tab-pane fade show<?= $parameter['user'];?>" id="nav-user" role="tabpanel" aria-labelledby="nav-user-tab">

<div class="container-sm">
 <h1 class="h4 mb-3 fw-normal ">Dados de usuário</h1>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Primeiro nome</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            
            <label for="validationCustom02" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="validationCustom02"  required>
            <div class="valid-feedback"></div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div>
      </div>
       

        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">CPF</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control cpf-mask" id="validationCustomUsername"  aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom03" class="form-label">Senha</label>
            <input type="password" class="form-control" id="validationCustom03" required>
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


<!-- Business settings -->

<div class="tab-pane fade show <?= $parameter['business'];?>" id="nav-business" role="tabpanel" aria-labelledby="nav-business-tab">

<div class="container-sm">
    <h1 class="h4 mb-3 fw-normal ">Dados do negócio</h1>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Nome da empresa</label>
                <input type="text" class="form-control" id="validationCustom01"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            
            <label for="validationCustom02" class="form-label">Nome fantasia (opcional)</label>
            <input type="text" class="form-control" id="validationCustom02">
            <div class="valid-feedback"></div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div>
      </div>
       

        <div class="col-md-5">
            <label for="validationCustomUsername" class="form-label">CNPJ</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
        

    <div class="row">

        <div class="col-md-5">

       
                <label for="formFile" class="form-label">Logomarca</label>
                <input class="form-control" type="file" id="formFile">
             
        </div>

        <div class="col-md-4">
        <label for="validationCustom04" class="form-label">Tipo de negócio</label>
            <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Escolha...</option>
                <option value="Vestuário">Vestuário</option>
                <option value="Informática">Informática</option>
                <option value="Outros">Outros</option>
            </select>
            <div class="invalid-feedback"></div>        
        </div>

        <div class="col-md-1" >
            <label for="exampleColorInput" class="form-label">Cor</label>
            <input type="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
        </div>
    </div>
    <div class="col-12"><button class="btn btn-dark btn-lg" type="submit">Próximo</button></div>
</div>

</div>


<!-- contact settings -->

<div class="tab-pane fade show <?= $parameter['contact'];?>" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

<div class="container-sm">
    <h1 class="h4 mb-3 fw-normal ">Dados de contato</h1>
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustom01" class="form-label">Telefone 1</label>
                <input type="text" class="form-control cel-sp-mask" id="validationCustom01"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            
            <label for="validationCustom02" class="form-label">Telefone 2 (opcional)</label>
            <input type="text" class="form-control cel-sp-mask" id="validationCustom02">
            <div class="valid-feedback"></div>
            
        </div>
    </div>
        
    <div class="row">
        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>

        </div>

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>

        <div class="col-md-2">
            <label for="validationCustom03" class="form-label">Número</label>
            <input type="number" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="row">

        <div class="col-md-4">
            <label for="validationCustom03" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback"></div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom04" class="form-label">Estado</label>
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
            <label for="validationCustom05" class="form-label">CEP</label>
            <input type="text" class="form-control cep-mask" id="validationCustom05" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="col-12"><button class="btn btn-dark btn-lg" type="submit">Finalizar</button></div>
    </div>
    
</div>

</div>


</div>


<div class="progress fixed-bottom">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: <?= $parameter['progress'];?>"></div>
</div>
</form>


</main>
</body>
</html>
<footer>
