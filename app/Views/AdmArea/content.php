<div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show <?php if($active =='home'){echo 'active';}?>" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <?php include('tabs/homeAdm.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='adm'){echo 'active';}?>" id="v-pills-adm" role="tabpanel" aria-labelledby="v-pills-adm-tab">
                <?php include('tabs/adminTab.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='customer'){echo 'active';}?>" id="v-pills-customers" role="tabpanel" aria-labelledby="v-pills-customers-tab">
                <?php include('tabs/customers.php');?>
            </div>
            
            <div class="tab-pane fade show tab <?php if($active =='products'){echo 'active';}?>" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
                <?php include('tabs/products.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='sales'){echo 'active';}?>" id="v-pills-sales" role="tabpanel" aria-labelledby="v-pills-sales-tab">
                <?php include('tabs/sales.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='layout'){echo 'active';}?>" id="v-pills-layout" role="tabpanel" aria-labelledby="v-pills-layout-tab">
            <?php include('tabs/layout.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='business'){echo 'active';}?>" id="v-pills-business" role="tabpanel" aria-labelledby="v-pills-business-tab">
                <?php include('tabs/business.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='contact'){echo 'active';}?>" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                <?php include('tabs/contact.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='address'){echo 'active';}?>" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                <?php include('tabs/address.php');?>
            </div>

            <div class="tab-pane fade show tab <?php if($active =='user'){echo 'active';}?>" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
                <?php include('tabs/user.php');?>
            </div>

           

        
</div>