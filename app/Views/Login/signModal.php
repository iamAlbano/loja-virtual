<div class="modal fade modal-signin  bg-transparent py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
     <div class="modal-content rounded-5 shadow">
        <div class="modal-header p-5 pb-4 border-bottom-0">
                  <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active " id="nav-signin-tab" data-bs-toggle="tab" data-bs-target="#nav-signin" type="button" role="tab" aria-controls="nav-signin" aria-selected="true">Entrar</button>
                      <button class="nav-link" id="nav-signup-tab" data-bs-toggle="tab" data-bs-target="#nav-signup" type="button" role="tab" aria-controls="nav-signup" aria-selected="false">Cadastrar</button>
                    </div>
                </nav>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>


                <div class="modal-body p-5 pt-0 tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-signin" role="tabpanel" aria-labelledby="nav-signin-tab">
                      <form id="signin" class="">
                          <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">E-mail</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Senha</label>
                          </div>
                        <hr class="my-4">
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="submit">Entrar</button>
                      
                      </form>
                    </div>

                    <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
                    <form id="signup" class="">
                          <div class="form-floating mb-3">
                                  <input type="text" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
                                  <label for="floatingInput">Nome</label>
                          </div>     
                          <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">E-mail</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Senha</label>
                          </div>
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Confirmar senha</label>
                          </div>
                          <div class="form-floating mb-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                              <label class="form-check-label" for="flexCheckDefault">
                                <small>Li e concordo com os termos de serviço.</small>
                              </label>
                            </div>
                          </div>
                        <hr class="my-4">
                        <button class="w-100 mb-2 btn btn-lg rounded-4 btn-dark" type="submit">Cadastrar</button>
                      
                      </form>

                    </div>
                </div>
     </div>
  </div>
</div>