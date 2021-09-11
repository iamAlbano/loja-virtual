<div class="adm-tab">
<div class="container-sm">
 
 <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dados de endereço</button>
      
    </div>
  </nav>


<div class="tab-content " id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <form name="adressUpdate" method="post" action="#" >
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
                    <input type="text" name="cpf" value="<?=$a->cpf?>" placeholder="<?=$a->cpf?>" class="form-control cpf-mask" id="validationCustomCPF"  aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback" id="password-feedback"></div>
                </div>
            </div>
            
            <div class="col-5 d-flex justify-content-center">
            <button class="btn btn-dark" type="submit">Salvar alterações</button></div>
      </div>
    </form>

  </div>

    
</div>
  
</div>
  
</div>