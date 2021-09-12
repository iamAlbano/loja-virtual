<div class="adm-tab">
<div class="container-sm">
 
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">

          <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="true">Informações gerais da empresa</button>
          
        </div>
      </nav>


  <div class="tab-content" id="nav-tabContent">

      <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <form name="businessUpdate" method="post" action="/lojaVirtual/public/AdmArea/updateBusiness" >
              <div class="row justify-content-center">
                  <div class="col-md-5">
                      <label for="validationCustomName"  class="form-label">Nome da empresa</label>
                          <input type="text" name="businessName"  value="<?=session()->businessName?>" placeholder="<?=session()->businessName?>" class="form-control" id="validationCustomName"  required>   
                  </div>

                  <div class="col-md-5">
                      <label for="validationCustom" class="form-label">Nome fantasia (opcional)</label>
                      <input type="text" name="fantasyName" value="<?=session()->fantasyName?>" placeholder="<?=session()->fantasyName?>" class="form-control"  required>         
                  </div>

              </div>
                
              <div class="row justify-content-center">
                    <div class="col-md-5">
                    <label for="validationCustom04" class="form-label">Tipo de negócio</label>
                    <select class="form-select" id="validationCustom04" name="type" required>
                    <option selected disabled value="">Escolha...</option>
                    <option value="Alimentação">Alimentação</option>
                    <option value="Aúdio">Aúdio</option>
                    <option value="Aúdiovisual">Aúdiovisual</option>
                    <option value="Calçados">Calçados</option>
                    <option value="Eletrodomésticos">Eletrodomésticos</option>
                    <option value="Estética">Estética</option>
                    <option value="Informática">Informática</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Jóias">Jóias e bijuterias</option>
                    <option value="Móveis">Móveis</option>
                    <option value="Petshop">Petshop</option>
                    <option value="Presentes">Presentes</option>
                    <option value="Revistas">Revistas, gibis e mangás</option>
                    <option value="Vestuário">Vestuário</option>
                    <option value="Veículos">Veículos</option>
                    <option value="Outro">Outro</option>
            </select>
                    </div>
                   
                    <div class="col-md-5">
                        <label for="validationCustomCPF" class="form-label">CNPJ</label>
                        <div class="input-group has-validation">
                            <input type="text" name="cnpj" value="<?=session()->cnpj?>" placeholder="<?=session()->cnpj?>"  class="form-control"  aria-describedby="inputGroupPrepend" required>
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
