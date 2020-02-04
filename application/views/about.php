<style>
    .clients table {
        border-collapse: collapse;
        width: 100%;
    }


    .clients table td {
        padding: 5px 15px;
    }
    .first-title{
        background-color: #fff;
        color: #d57d3d !important;
        padding: 0 2%;
        position:absolute;
        left: -10.3%;
        font-weight: bold;
        top: 44%;
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }
    .second-title{
        background-color: #fff;
        color: #d57d3d !important;
        padding: 0 2%;
        position:absolute;right: -6.2%;
        font-weight: bold;
        top: 40%;
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
    }
    .aboutContent{
        border-left: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
    }
    .secondContent{
        border-right: 2px solid #000;padding: 10px 9%; position:relative; min-height: 250px
    }

    @media (min-width: 320px) and (max-width: 1024px) {
        .first-title{
            text-align: center;
            position:relative;
            left: 0;
            font-weight: bold;
            top: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .second-title{
            text-align: center;
            position:relative;
            top: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
        }
        .aboutContent{
            border-left: none; position:relative;
           /*text-align: justify;*/
        }
        .secondContent{
            border-right: none; position:relative;
           /* text-align: justify;*/
        }

    }
    .orange-text{
        text-align: center;
        padding: 10px;
        margin: 53px -30px 49px;
        background: #f7771b;
        color: white;
    }

    .orangeText
    {
        color:#f7771b;
        font-size: 23px;
        font-weight: bold;
    }
    .blackText
    {
        color:black;
        font-size: 23px;
        font-weight:bold;
    }

    .about-para li{
      margin-bottom:8px;
      font-weight: 500;
      font-size: 15px;
    }
    .about-para p{
        font-size: 15px;
        font-weight: 500;
    }
    .aboutContent {
    border-left: 2px solid #00000012;
    
}
    .secondContent {
        border-right: 2px solid #00000012;
        font-size: 18px;
        
    }


    .clients:after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(120deg,#c1c1bfed,#ffffff);
    background-color: #f3f1f100;
    opacity: .7;
   
}

.clients > * {
    z-index: 100;
}

.clients {
    position: relative;
    min-height: 60vh;
    background-color: #e4eaea;
    background-size: cover;
    display: flex;
  
}

h1 {
    margin: auto;  
}
body {
    margin: 10px;
}


</style>



<div class="container-fluid">
    <div class="row about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 pull-right">
                        <h3>About us</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 link">
            <a href="<?= site_url() ?>">Home</a> > About
        </div>
    </div>
</div>

<br>
<br>
    <div class="container-fluid">

        <div class="row">
                    <div class="col-lg-8">
                    <img src="http://localhost:8081/assets/images/about us-01.jpg" class="" alt="Table Setting" style=" width: 100%;">
                    </div>
                
            
        <div class="col-lg-4">
            <div class="row">
            <div class="col-lg-12">
                <h1 class="" style="text-align: center;">WHO ARE WE....?</h1><br>
                <div class="about-para">
                <p>The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu. <p>
                </div>
                <div style="position: absolute;bottom: 10px; right: 5px; position: absolute;width: 100%"><a class="btn btn-primary" style="border-radius: 0; "  href="">Read More</a>
                                        </div>
                <br>
                <br>
               
                
                </div>
                
                <div class="col-lg-12">
                <div class="orange-text">
                <div class="link">
                <h4>Home--> About-us</h4>
            </div>
        
                </div>
                
                </div>
            </div>
    </div>

<!-- Second -->
  <div class="container">

       <div class="row">
            <div class="col-lg-8">
            <span class="orangeText">SERVICES &nbsp;</span>&nbsp;<span class="blackText">WE OFFER</span>
           <br>
           <br>
           <div class="about-para">
           <ul>
                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</li>

                </ul>  

                </div> 
               
            </div>
            
        
            <div class="col-lg-4">
                <img src="http://localhost:8081/assets/images/about us-02.jpg" class="" alt="Table Setting" style=" width: 100%;">
            </div>
           
             
        </div>
</div>

<br>
<br>
<br>
<!-- Third -->
<div class="container">
     <div class="row">
                <div class="col-lg-4">
                    <img src="http://localhost:8081/assets/images/about us-03.jpg" class="" alt="Table Setting" style="width: 80%;">
                </div>
                
            
            <div class="col-lg-8">
             <div class="about-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages
                . Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu. <p>
                </div>
               
                <br>
                
                <br>
                <div class="about-para">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                </div>
                
              
            </div>
    </div>
    </div>


    <!-- End of third -->


    <!-- Fourth -->
    <div class="container">
    <div class="row about-content">
        <div class="col-sm-12">
           

        <div class="aboutContent text-center" >
                <h3 class="first-title">Our Vision</h3>
               <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</p>
                <br><br>
                <!--<a href="<?= $this->aboutUs_model->getOption('first_facebook') ?>"><i class="fa fa-facebook"></i></a>
                <a href="<?= $this->aboutUs_model->getOption('first_twitter') ?>"><i class="fa fa-twitter"></i></a>
                <a href="<?= $this->aboutUs_model->getOption('first_google') ?>"><i class="fa fa-google-plus"></i></a>-->
            </div>
        </div>
        <div class="clearfix"></div>

      
        <div class="clearfix"></div>

        <div class="col-sm-12">
            <div class=" secondContent text-center">
                <h3 class="second-title">OUR Mission</h3>
               <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and </p>
                <br><br>
               
            </div>
        </div>
    </div>
</div>
<!-- End of Fourth -->

<!-- Six -->
<div class="container">
    <div class="row about-content">
            <div class="col-sm-12">
            <p>test</p>
            </div>
    </div>
</div>
<!-- End of Fifth -->


<!-- Fifth -->
 <div class="container">

       <div class="row">
            <div class="col-lg-8">
            <span class="blackText">OUR CORE</span><span class="orangeText">&nbsp;VALUES </span>
           <br>
           <br>
           <div class="about-para">
           <ul>
                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and .</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</li>

                <li>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</li>

                </ul>  

                </div> 
               
            </div>
            
        
            <div class="col-lg-4">
                <img src="http://localhost:8081/assets/images/about us-03.jpg" class="" alt="Table Setting" style=" width: 80%;">
            </div>
           
             
        </div>
</div>

<br>
<br>
<br>
<!-- End of Fifth -->

 <section class="container">
    <div class="row">
        <div class="clients">
            <div class="row">
                <div class="col-sm-12">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                          <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s500s, when an unknown pem Ipsum has been the.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
                            n unknown printer took a galley.</p>
                        </div>
                        <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                           <span style="font-weight: 500;font-size: 17px;">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</span>
                        </div>
                    </div>  
                    <div class="text-center">
                        <div class="" style="word-break: break-all;word-wrap: break-word">
                           <span style="font-weight: 400;font-size: 17px;">Lorem Ipsum has been </span>
                        </div>
                    </div>  
                   
                </section>  
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
      <br>          

    
    <div class="clearfix"></div>
    <!--<div class="row img-section">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><?= $this->aboutUs_model->getOption('closer_look_title') ?></h2>
                <?php
                if (($images = $this->aboutUs_model->getWhere(array('name' => 'closer_look_images'),
                        'about_us_images')) != null) {
                    if (isset($images[0]) && $images[0]) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                               <img src="<?=base_url($images[0]->image)?>" class="img-responsive" style="display: inline-block; width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold; text-align: left"><?=$images[0]->title?></h2>
                        </div>
                        <?php
                    }
                    if (isset($images[1]) && $images[1]) {
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                            <img src="<?=base_url($images[1]->image)?>" class="img-responsive" style="display: inline-block; width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold; text-align: right"><?=$images[1]->title?></h2>
                        </div>
                        <?php
                    }
                    if (isset($images[2]) && $images[2]) {
                        ?>
                        <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="margin-top: -10%; margin-bottom: -9%">
                            <img src="<?=base_url($images[2]->image)?>" class="img-responsive" style="display: inline-block; width: 400px;height: 250px" />
                            <h2 style="color: #fff;font-weight: bold"><?=$images[2]->title?></h2>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </div>
    </div>  -->
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='http://embed.tawk.to/5c877834c37db86fcfcd4ad0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+918342063684 ", // WhatsApp number
            call: "+918342063684 ", // Call phone number
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,call", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->