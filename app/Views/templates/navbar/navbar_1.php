<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"  crossorigin="anonymous">
</head>


<div class="bg-white fixed-top ">
    
      <header class="menu d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3  border-bottom">
      
      <div >
        <a class="navbar-brand " style="color: <?=$p->color;?>" href="#">
           <b> <?=$p->name;?></a> </b>
      </div>
    
        
    <div class="col-md-2 justify-content-center">
      <div class="input-group input-group-sm" style="width:25em;">
          <input type="text" class="form-control"  id="inputGroup-sizing-sm"placeholder="O que você está procurando?" aria-label="Recipient's username" aria-describedby="button-addon2">
          <button class="btn btn-dark" type="button" id="button-addon2">
          pesquisar
          </button>
      </div>
    </div>  
       
      <div class="col-md-4 text-center">
        <button type="button" class="btn btn-sm btn-outline-dark me-2"
        data-bs-toggle="modal" data-bs-target="#modalSignin">Entrar</button>

        <button type="button" class="btn btn-sm btn-dark"
        data-bs-toggle="modal" data-bs-target="#modalSignin">Cadastre-se</button>
        <button type="button" class="btn btn-sm shop-cart">
          <img width="80%" src="https://cdn-icons-png.flaticon.com/512/748/748065.png"></button>
      </div>

     
        
     

  </header>


</div>