<style>
    .card-link,.card-link:hover{
        text-decoration: none;
        color: inherit;
    }
    .dropbtn {
        background-color: #629ed2;
    color: white;
    padding: 6px 17px;
    font-size: 17px;
    border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #ffffff;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {
    background-color: #487bbd;}
</style>
<div class="container-fluid">
    <div class="row about-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-12 pull-right">
                        <h3>BLOGS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 link">
            <a href="<?= site_url() ?>">Home</a> > Blogs
        </div>
    </div>
</div>
<br />
<br />
<div class="container">
    <div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    </div>
    </div>
    <br />
<br />
    <div class="row">
        <?php
        foreach ($blogs as $i => $blog) {
            ?>

            <div class="col-sm-4 col-md-4 col-lg-4">
                <a href="<?=site_url("blog/$blog->slug")?>"  target="_blank"  class="card-link">
                    <div class="card">
                        <img class="card-img-top" style="height: 250px;background-color: #333" src="<?=base_url(($blog->image && is_file(FCPATH.'uploads/blog_images/'.$blog->image)) ? 'uploads/blog_images/'.$blog->image : 'assets/img/logo.png')?>">
                        <div class="card-block" style="min-height: 270px;margin-bottom: 5px;position: relative;">
                            <h4 class="card-title mt-3"><?=$blog->title?></h4>
                            <?=substr(strip_tags($blog->content),0,200)?>..

                            <div style="position: absolute;bottom: 10px; right: 5px; position: absolute;width: 100%">
                                <hr />
                                <a class="btn btn-primary pull-right" style="border-radius: 0; " target="_blank"  href='<?=site_url("blog/$blog->slug")?>'>Read More <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php

            if (($i+1) % 3 === 0) {
                ?>
                <div class="clearfix"></div><br />
                <?php
            }
        }
        ?>
        <div class="clearfix">
        
        </div>
        <br>
    </div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c877834c37db86fcfcd4ad0/default';
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