<div class="adm-tab">
<div class="container-sm">
 
 <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <button class="nav-link active " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dados de endereço</button>  
    </div>
  </nav>


<div class="tab-content " id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <form name="adressUpdate" method="post" action="/lojaVirtual/public/AdmArea/updateAddress" >
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <label   class="form-label">Rua</label>
                        <input type="text" name="street"  value="<?=session()->street?>" placeholder="<?=session()->street?>" class="form-control" required> 
                </div>

                <div class="col-md-5">
                    <label for="validationCustomNeighborhood" class="form-label">Bairro</label>
                    <input type="text" name="neighborhood" value="<?=session()->neighborhood?>" placeholder="<?=session()->neighborhood?>" class="form-control" id="validationCustomNeighborhood"  required>

                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <label for="validationCustomEmail" class="form-label">Cidade</label>
                    <div class="input-group has-validation">
                        <input type="text" name="city"  value="<?=session()->city?>" placeholder="<?=session()->city?>"  class="form-control" id="validationCustomEmail" aria-describedby="inputGroupPrepend" required> 
                    </div>
                </div>
              

                <div class="col-md-5">
                    <label for="validationCustom04" name="state" class="form-label">Estado</label>
                    <select class="form-select" name="state" id="validationCustom04" required>
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
              </div>

            </div>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <label  class="form-label">Número</label>
                    <input type="number" name="number"  value="<?=session()->number?>" placeholder="<?=session()->number?>" class="form-control" required> 
                </div>

                <div class="col-md-5">
                    <label for="validationCustom05" name="cep" class="form-label">CEP</label>
                    <input type="text" name="cep" value="<?=session()->cep?>" placeholder="<?=session()->cep?>" class="form-control cep-mask" id="validationCustom05" required>       
                </div>
            </div>

                
                <div class="d-flex justify-content-center">
                  <button class="btn btn-dark" type="submit">Salvar alterações</button>
                </div>

          </div>
        </form>

  </div>

    
</div>
  
</div>
  
