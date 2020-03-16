<?php
    if ($this->session->userdata('city')) {
        $cityDetails = $this->home_model->getOneWhere(array('name' => $this->session->userdata('city')), 'cities');
} ?>
<?php if ($this->session->flashdata('message')) : ?>
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php elseif ($this->session->flashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php elseif ($this->session->flashdata('info')) : ?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $this->session->flashdata('info'); ?>
    </div>
<?php endif; ?>
<style>
    .menu-header {
    padding: 0;
    background-color: #fff;
    position: relative;
    z-index: 9;
    margin: 0 0px!important;
}
.navbar-default .navbar-nav > li > a {
    color: #434445 !important;
    padding-right: 26px;
    padding-left: 26px;
    font-family: 'Lato', sans-serif;
    /* font-weight: bold; */
}
    </style>
<div class="container-fluid main-header">
    <div class="row">
        <div class="">
        <div class=" sub-header">
    <div class="row menu-header">
        <div class="col-xs-3 col-sm-12 nopadding">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" onclick="openNav()">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> 
                </div>
                <div class="collapse navbar-collapse nopadding" id="bs-example-navbar-collapse-1">
                    <div class="row" style="margin-top: 10px;">  
                        <div class="col-xs-3 col-sm-3 col-md-2">
                            <a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" style=" float: right; width: 70px;"alt="fullbasketlogo" discription="Full Basket Logo image"></a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7">
                            <ul class="nav navbar-nav">
                            
                                <li class="<?= $this->uri->segment(1) == '' ? 'active' : '' ?>"><a href="<?= site_url() ?>">HOME</a></li>
                                <li class="<?= $this->uri->segment(1) == 'listing' ? 'active' : '' ?>"><a href="<?= site_url('listing') ?>">PROPERTIES</a></li>
                                <li><a href="<?= site_url('about') ?>">ABOUT</a></li>
                                <li><a href="<?=site_url('blog')?>">BLOG</a></li>
                                <li><a href="<?=site_url('contact')?>">CONTACT</a></li>
                                <li class="city_select">
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-city dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $this->session->userdata('city') ? htmlentities($this->session->userdata('city')) : 'Select Location' ?> <span class="fa fa-level-down" style="margin-top: 3px;margin-left: 26px;"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                                            <?php foreach ($cities as $city) { ?>            
                                            <li class="<?= $this->session->userdata('city') == $city->name ? 'active' : '' ?>"><a href="<?= site_url('city/'.$city->url_name) ?>"><?= htmlentities(ucfirst($city->name)) ?></a></li>
                                                <?php } ?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-3" style="    margin-top: 5px;">
                                <div class="mobile-view">
                                     <!-- <div class="contact">
                                    <i class="fa fa-paper-plane pull-left" style="color:black"></i> <span class="pull-left">&nbsp;<a href="tel:<?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?>"style=" color: black"><?= (isset($cityDetails->phone) && $cityDetails->phone) ? $cityDetails->phone : $all_cities->phone ?></a> <br><a style="color: black" href="mailto:<?= (isset($cityDetails->email) && $cityDetails->email) ? $cityDetails->email : $all_cities->email ?>"><?= (isset($cityDetails->email) && $cityDetails->email) ? $cityDetails->email : $all_cities->email ?></a></span>
                                   </div> -->
                                  <?php if ($this->session->userdata('logged_in')) { ?>
                                    <div class="btn-group pull-right  .visible-xs-block hidden-xs " style="margin-top: 5px;">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?= $this->session->userdata('logged_in')['first_name'].' '.$this->session->userdata('logged_in')['last_name'] ?> <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= site_url('profile') ?>">Profile</a></li>
                                            <li><a href="<?= site_url('favourites') ?>">Favourates</a></li>
                                            <li><a href="<?= site_url('user/logout') ?>">Logout</a></li>
                                        </ul>
                                    </div>
                                 <?php } else{ ?>
                                    <div class="" style="color: black">
                                        <a style="color: black" href="<?= site_url('user/login') ?>" class="login">Login</a>
                                        <span class="line"></span>
                                        <a style="color: black" class="signup" data-toggle="modal" href="#submitContact">Submit Property</a>
                                    </div>
                                 <?php
                                 } ?>
                               </div>
                        </div>
                    </div>
                </div>
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" data-dismiss="modal" onclick="closeNav()">&times;</a>
                    <a href="<?= site_url() ?>">HOME</a>
                    <a href="<?= site_url('listing') ?>">PROPERTIES</a>
                    <a href="<?= site_url('about') ?>">ABOUT</a>
                    <a href="<?=site_url('blog')?>">BLOG</a>
                    <a href="<?=site_url('contact')?>">CONTACT</a>
                </div>
            </nav>
        </div>
        <div class="col-xs-9 col-sm-9 nopadding visible-xs">
        <div class="col-xs-3 col-sm-3 col-md-1">
                        <a href="<?= site_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" style=" float: right; width: 70px;"alt="fullbasketlogo" discription="Full Basket Logo image"></a>
                    </div>
                    
            <div class="city_select">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $this->session->userdata('city') ? htmlentities($this->session->userdata('city')) : 'Select City' ?> <span class="fa fa-level-down pull-right" style="margin-top: 3px;"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?= site_url('listing') ?>">All Cities</a></li>
                        <?php foreach ($cities as $city) { ?>            
                        <li class="<?=/* $this->session->userdata('city') ==*/ $city->name ? 'active' : '' ?>"><a href="<?= site_url('city/'.$city->url_name) ?>"><?= htmlentities(ucfirst($city->name)) ?></a></li>
                            <?php
                            $this->session->unset_userdata('city');
                           // $this->session->unset_userdata('content');
                            } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<script>
    $(window).scroll(function () {
     if ($(window).scrollTop() >= 200) {
         $('.sub-header').addClass('fixed-header');
     }
     else {
         $('.sub-header').removeClass('fixed-header');
     }
 });
    </script>
<!-- <div class="fb-login-button" data-max-rows="1" data-size="small" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div> -->