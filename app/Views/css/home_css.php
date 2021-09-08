<style>

#myCarousel {
 
}

#custom-cards {
    margin-top: 4rem;
}

.menu{
    padding-bottom: 0%;
}

.navbar-brand {
   padding-left: 5em;
   
}

.shop-cart {
   margin-left: 1em;
   width: 3.5em;
}

.categories li{
        margin-top: 4.5rem;
        text-align: center;
        width: 10em;
}

.nav-item{
    border-bottom: 0.2em solid white;
    transition: border-bottom 1s;
    
}

.nav-item:hover{
    border-bottom: 0.2em solid <?=$p->color;?>;
}

.nav-tabs .nav-link {
    border: none;
    color: #212529;
}

.nav-tabs .nav-link .active{
    border-bottom: 1em solid <?=$p->color;?>;
    
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
    
    border-bottom: 0.2em solid <?=$p->color;?>;
    color: <?=$p->color;?>;
}




</style>