<script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    console.log('ok');

    /* ---- FORM REGISTER ACTIONS ---- */
    var fieldCheck = false;
    $('#password-field').keyup(function () {
        var valuePw = $('#senha-cadastro').val()
        var valuePwConfirm = $('#confirma-senha-cadastro').val()

        if (valuePw.length < 6) {
            $('#senha-cadastro').removeClass('is-valid');
            $('#senha-cadastro').addClass('is-invalid');
            var elemento = document.getElementById("password-feedback-lenght");
            elemento.style.color = '#dc3545';
            

        } else {
            
            var elemento = document.getElementById("password-feedback-lenght");
            elemento.style.color = '#198754';
            $('#senha-cadastro').removeClass('is-invalid');
            $('#senha-cadastro').addClass('is-valid');


        }
        if (valuePw !== valuePwConfirm || valuePw.length < 6) {
            
            var elemento = document.getElementById("password-confirm-feedback");
            elemento.style.color = '#dc3545';
            $('#confirma-senha-cadastro').removeClass('is-valid');
            $('#confirma-senha-cadastro').addClass('is-invalid');
            fieldCheck = false;

        } else {
            
            var elemento = document.getElementById("password-confirm-feedback");
            elemento.style.color = '#198754';
            $('#confirma-senha-cadastro').removeClass('is-invalid');
            $('#confirma-senha-cadastro').addClass('is-valid');
            
            fieldCheck = true;

        }
        
});

$('#validation-btn').click(function () {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')


    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()  
          }

          if (!fieldCheck) {
            event.preventDefault()
            event.stopPropagation()       
          }
          
          
          form.classList.add('was-validated')
         
        }, false)
      })
 
  })()

});

</script>


  



