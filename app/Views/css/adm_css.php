<style>
body{
--bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
  height: 100%;
}


.sidebar {
  width: 20%;
  height: 100vh; 
  position: absolute;
}

.sidebar-section button{
    width: 14em;
    text-align: left;
    color:  #212529;
}

.sidebar-section button:hover{
--bs-bg-opacity: 1;
color:  #212529;
background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.sidebar-section .active{
  border: 1px solid #212529;
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.sidebar-section .active .icon{
  fill: white;
}


.sidebar-section .active:hover{
  --bs-bg-opacity: 1;
  color:  #212529;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;

}

.sidebar-section button:hover .icon{
  fill: black;
}

.adm-tab{
    margin-left: 30%;
}

.tab-content{
    padding-top: 4%;
}

.tab{
  padding-right: 10%;
}

.col-md-5 {
  padding-bottom: 3%;
}

.col-md-10 {
  padding-bottom: 3%;
}

.btn-dark{
  margin: auto;
}



.admin {
  margin-top: 120%;
  margin-left: 0%;
}

.adm-menu .icon{
    fill: #212529;
}

.adm-menu button{
  background-color: white;
  border: none;
}


/* User settings */

#nav-tab {
 margin-top: 0.5%;
}

.nav-tabs .nav-link {
    
    border: none;
    color: #212529;
}

.nav-tabs .nav-link .active{
  
    border-bottom: 1em solid #198754;
    
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
  font-weight: bold;
    border-bottom: 0.2em solid #198754;
    color: #212529;
}





/* check password  */

#password-feedback-lenght {

color: #343a40;
font-size: 80%;
}

#password-confirm-feedback{
color: #343a40;
font-size: 80%;
}







</style>