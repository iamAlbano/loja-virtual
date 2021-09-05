<div class="container-sm">
 <h1 class="h4 mb-3 fw-normal ">Dados de usuário</h1>

    <div class="row">
        <div class="col-md-5">
            <label for="validationCustomName" class="form-label">Primeiro nome</label>
                <input type="text" name="firstName"  class="form-control" id="validationCustomName"  required>
                <div class="valid-feedback"></div>
        </div>

        <div class="col-md-5">
            <label for="validationCustomSurname" class="form-label">Sobrenome</label>
            <input type="text" name="lastName" class="form-control" id="validationCustomSurname"  required>
            <div class="valid-feedback"></div>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-5">
            <label for="validationCustomEmail" class="form-label">E-mail</label>
            <div class="input-group has-validation">
                <input type="email" name="email"  class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                </div>
            </div>
      </div>
       

        <div class="col-md-5">
            <label for="validationCustomCPF" class="form-label">CPF</label>
            <div class="input-group has-validation">
                <input type="text" name="cpf" class="form-control cpf-mask" id="validationCustomCPF"  aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback" id="password-feedback"></div>
            </div>
        </div>
    </div>
        
    <div class="row" id="password-field">
        <div class="col-md-5">
            <label for="senha-cadastro" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="senha-cadastro" required>
            <div id="password-feedback-lenght">A senha deve possuir no mínimo 6 caracteres</div>

        </div>

        <div class="col-md-5">
            <label for="confirma-senha-cadastro" class="form-label">Confirmar senha</label>
            <input type="password" class="form-control"  id="confirma-senha-cadastro" required>
            <div id="password-confirm-feedback">As senhas devem ser iguais</div>
        </div>
        <div class="col-12"><button class="btn btn-dark btn-lg" id="validation-btn"  type="submit">Próximo</button></div>
        
    </div>


    
</div>