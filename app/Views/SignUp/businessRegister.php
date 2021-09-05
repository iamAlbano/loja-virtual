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
                <input type="text" class="form-control" name="cnpj" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
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
                <option value="Alimentação">Alimentação</option>
                <option value="Aúdio">Aúdio</option>
                <option value="Aúdiovisual">Aúdiovisual</option>
                <option value="Eletrodomésticos">Eletrodomésticos</option>
                <option value="Estética">Estética</option>
                <option value="Informática">Informática</option>
                <option value="Infantil">Infantil</option>
                <option value="PET">PET</option>
                <option value="Vestuário">Vestuário</option>
                <option value="Outro">Outro</option>
            </select>
            <div class="invalid-feedback"></div>        
        </div>

        <div class="col-md-1" >
            <label for="exampleColorInput" class="form-label">Cor</label>
            <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
        </div>
    </div>
    <div class="col-12"><button class="btn btn-dark btn-lg"  type="submit">Próximo</button></div>
</div>