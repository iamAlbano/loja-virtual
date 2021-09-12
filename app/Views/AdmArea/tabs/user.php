<div class="adm-tab">
<div class="container-sm">
 
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">

          <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Informações gerais</button>
          <button class="nav-link" id="nav-pass-tab" data-bs-toggle="tab" data-bs-target="#nav-pass" type="button" role="tab" aria-controls="nav-pass" aria-selected="false">Alterar senha</button>
        
        </div>
      </nav>


  <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <form name="adminUpdate" method="post" action="/lojaVirtual/public/AdmArea/updateAdmin" >
              <div class="row justify-content-center">
                  <div class="col-md-5">
                      <label for="validationCustomName"  class="form-label">Primeiro nome</label>
                          <input type="text" name="firstName"  value="<?=$a->firstName?>" placeholder="<?=$a->firstName?>" class="form-control" id="validationCustomName"  required>   
                  </div>

                  <div class="col-md-5">
                      <label for="validationCustomSurname" class="form-label">Sobrenome</label>
                      <input type="text" name="lastName" value="<?=$a->lastName?>" placeholder="<?=$a->lastName?>" class="form-control" id="validationCustomSurname"  required>         
                  </div>

              </div>
                
              <div class="row justify-content-center">
                    <div class="col-md-5">
                        <label for="validationCustomEmail" class="form-label">E-mail</label>
                        <div class="input-group has-validation">
                            <input type="email" name="email"  value="<?=$a->email?>" placeholder="<?=$a->email?>"  class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required> 
                        </div>
                    </div>
                   
                    <div class="col-md-5">
                        <label for="validationCustomCPF" class="form-label">CPF</label>
                        <div class="input-group has-validation">
                            <input type="text" name="cpf" value="<?=session()->cpf?>" placeholder="<?=$a->cpf?>" class="form-control cpf-mask" id="validationCustomCPF"  aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>

              </div>  

              <div class="d-flex justify-content-center">
                <button class="btn btn-dark" type="submit">Salvar alterações</button>
              </div>

           
              
            </form>
      </div>
       

      <div class="tab-pane fade show" id="nav-pass" role="tabpanel" aria-labelledby="nav-pass-tab">
          <div class="row justify-content-center" id="password-field">
            <form method="post" action="#">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <label  class="form-label">Senha atual</label>
                            <input type="password" name="actual-password" class="form-control" required>
                        </div>
                      </div>
                  

                    <div class="row justify-content-center">

                        <div class="col-md-5">
                            <label for="senha-cadastro" class="form-label">Nova senha</label>
                            <input type="password" name="password" class="form-control" id="senha-cadastro" required>
                            <div id="password-feedback-lenght">
                              A senha deve possuir no mínimo 6 caracteres
                            </div>

                        </div>

                        <div class="col-md-5">

                            <label for="confirma-senha-cadastro" class="form-label">Confirmar nova senha</label>
                            <input type="password" class="form-control"  id="confirma-senha-cadastro" required>
                            <div id="password-confirm-feedback">
                              As senhas devem ser iguais
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button class="btn btn-dark" type="submit">Salvar alterações</button>
                    </div>
    
            </form>

          </div>


      </div>
     
  </div>


</div> 
</div>
