<div id="carousel" class="carousel slide home-slider" data-ride="carousel">
    <div class="carousel-inner">
        <?php $i = 0;
        foreach ($sliders as $slider) { ?>
            <div class="<?= $i ? '' : 'active' ?> item fadeInRight animated"
                 style="background: url(<?= base_url('uploads/sliders/' . $slider->image) ?>);">
                <div class="carousel-caption fadeInUp animated">
                    <h1><b><?= $slider->title ?></b></h1>
                    <p><?= $slider->heading ?></p>
                </div>
            </div>
            <?php $i++;
        } ?>
    </div>
</div>
<!-- contact form start -->
<div class="floating-form" id="contact_form">
    <div class="contact-opener">Speak to Our Expert!</div>
    <div class="floating-form-heading">Speak to Our Expert!</div>
    <div id="contact_results"></div>
    <form action="<?= site_url('home/sendmail')?>" method="post">
        <div id="contact_body">
            <div class="logo_cont text-center">
                <img style="display: inline-block;"
                     src="<?php echo base_url('assets/img/logo.png'); ?>"
                     alt="fullbasket"/>
            </div>
            <div class="alert alert-danger" role="alert" id="error_message" style="display:none;">...</div>
            <div class="alert alert-success" role="alert" id="success_message" style="display:none;">...</div>
            <label><span>Name <span class="required">*</span></span>
                <input type="text" class="form-control" id="username" name="name" required>
            </label>
            <label><span>Email <span class="required">*</span></span>
                <input type="email" name="email" class="form-control" id="email" required>
            </label>
            <label><span>Phone <span class="required">*</span></span>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </label>
            <label><span>Message<span class="required">*</span></span>
                <input type="text" class="form-control" id="Message" name="message" required>
            </label>
            <div>
                <div class="g-recaptcha" style="transform:scale(0.66);-webkit-transform:scale(0.66);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
            </div>
            <label>
                <span>&nbsp;</span>
                <button type="submit"  class="btn btn-success">Connect Me</button>
            </label>


        </div>
    </form>
</div>
<!-- contact form end -->
<div class="container">
    <div class="row">
        <div class="col-sm-12 search-area">
            <form action="<?= site_url('searchListing') ?>" method="post">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="text" name="keyword" placeholder="Key Word" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select class="form-control" name="city" id="filter_city">
                                <option selected="" disabled="">Select Your City</option>
                                <?php
                                foreach ($cities as $city) { ?>
                                    <option value="<?= $city->id ?>" <?= $this->session->userdata('city') == $city->name ? 'selected' : '' ?>><?= $city->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select class="form-control" name="location" id="filter_location">
                                <option selected="" disabled="">Select Your Location</option>
                                <?php
                                foreach ($locations as $location) { ?>
                                    <option value="<?= $location->id ?>"><?= $location->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="form-control" name="property_type">
                                <option selected="" disabled="">Property Type</option>
                                <?php
                                foreach ($property_types as $property) { ?>
                                    <option value="<?= $property->id ?>"><?= $property->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="form-control">
                                <option selected="" disabled="">-Status-</option>
                                <?php
                                if (($property_status = $this->properties_model->getPropertyStatus()) != null) {
                                    foreach ($property_status as $status) {
                                        ?>
                                        <option value="<?= $status->id ?>"><?= $status->name ?></option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <label>Price Range(₹):</label>
                        <input id="price" data-min="<?= $price_range->min ?>" data-max="<?= $price_range->max ?>"
                               name="price" type="text"/><br/>
                        <span class="pull-left">₹<?= $price_range->min ?></span>
                        <span class="pull-right">₹<?= $price_range->max ?></span>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label>BHK(No Of Bedrooms)</label>
                        <input id="property" name="bhk" type="text"/><br/>
                        <span class="pull-left">1</span>
                        <span class="pull-right">4</span>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                    <div class="col-sm-4">
                        <label>Size(In Sqft)</label>
                        <input id="baths" name="baths" type="text"/><br/>
                        <span class="pull-left">1</span>
                        <span class="pull-right">120</span>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($amenities as $k => $amenity) { ?>
                        <div class="col-sm-3 amenity-group  <?= $k > 9 ? 'hide' : '' ?>">
                            <div class="mb10">
                                <input type="checkbox" name="amenities[]" value="<?= $amenity->id ?>"
                                       class="price_range"> <?= $amenity->name ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row text-center <?= count($amenities) < 11 ? 'hide' : '' ?>">
                    <button type="button" onclick="$('.amenity-group').removeClass('hide');$(this).remove()"
                            class="btn btn-primary"><i class="fa fa-chevron-down"></i> Show All Amenities
                    </button>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <button class="btn btn-submit" type="submit"><img src="<?= base_url('assets/img/home.png') ?>">
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="clearfix"></div><br><br><br>
<div class="container">
    <div class="row section2">
        <div class="col-sm-12 text-center">
            <h2 class="h2">TOP SUBMITTED PROPERTY</h2>
            <p>Best Hand Picked Property for You across<br> Bengaluru| Pune | Hyderabad</p>
        </div>
        <div class="clearfix"></div>
        <br>
        <div class="row">
            <?php foreach ($properties

            as $property) { ?>
            <div class="col-md-3 col-sm-4">
                <div class="property-list">
                    <div class="list-city">
                        <?= $property->city_name ?>
                    </div>
                    <a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug") ?>" style="text-decoration: none;">
                        <div class="property-img"
                             style="background-image: url(<?= base_url('uploads/' . $property->slug . '/' . $property->image) ?>)"></div>
                        <div class="property-details">
                            <h4><?= $property->title ?></h4>
                            <div class="down"></div>
                            <p class="pull-left"><b>Area</b> : <?= $property->area ?></p>
                            <p class="pull-right">₹<?= $property->budget ?> /-</p>
                    </a>
                    <div class="clearfix"></div>
<!--                    <div class="sharethis-inline-share-buttons"></div>-->
                    <a target="_blank" href="<?= site_url(url_title($property->city_name)."/".( url_title($property->area) )."/$property->slug")?>" class="btn btn-primary btn-block" style="border-radius: 0">View</a>
                </div>
            </div>
        </div>
        <?php } ?>

        <div class="col-md-3 col-sm-8">
            <div class="all_prop text-center">
                <i class="fa fa-th" href="#" data-toggle="modal" data-target="#exampleModal"></i>
                <h3>CAN'T DECIDE ?</h3>
                <p>Show all properties</p>
                <a target="_blank" href="<?= site_url('allcities') ?>" class="btn btn-prop">All Properties</a>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div><br><br><br>
<div class="container-fluid">
    <div class="row section3">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="propertyImg"
                             style="background-image: url('<?= base_url('uploads/display_images/' . $display_images->builders) ?>');">
                            <p><b>Builders</b></p>
                            <span><?= $builder_count ?> Builders</span>
                        </div>
                        <a href="<?= site_url('listing') ?>">
                            <div class="propertyImg"
                                 style="background-image: url('<?= base_url('uploads/display_images/' . $display_images->projects) ?>');">
                                <p><b>Projects</b></p>
                                <span><?= $project_count ?> Projects</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="<?=site_url('blog')?>">
                            <div class="propertyImg-center"
                                 style="background-image: url('<?= base_url('uploads/display_images/' . $display_images->blogs) ?>');">
                                <p><b>Blogs</b></p>
                                <span><?= $blog_count ?> Blogs</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <div class="propertyImg"
                             style="background-image: url('<?= base_url('uploads/display_images/' . $display_images->cities) ?>');">
                            <p><b>Cities</b></p>
                            <span><?= $city_count ?> Cities</span>
                        </div>
                        <div class="propertyImg"
                             style="background-image: url('<?= base_url('uploads/display_images/' . $display_images->locations) ?>');">
                            <p><b>Locations</b></p>
                            <span><?= $location_count ?> Locations</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-sm-6">	
                        <img src="<?= base_url('assets/img/bg.jpg') ?>" class="img-responsive bg-img">
                    </div>
                    <div class="col-sm-1">
                        <div class="logo">
                            <img src="<?= base_url('assets/img/logo.png') ?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-5 fac-section">
                        <div class="col-sm-6">
                            <a href="#">
                                <div class="any_prop">
                                    <i class="icon ion-ios-home-outline"></i>
                                    <div class="clearfix"></div><br>
                                    <p>ANY PROPERTY</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">
                                <div class="more_clients">
                                    <i class="icon ion-person-stalker"></i>
                                    <div class="clearfix"></div><br>
                                    <p>MORE CLIENTS</p>
                                </div>
                            </a>
                        </div>
                        <div class="clearfix"></div><br>
                        <div class="col-sm-6">
                            <a href="#">
                                <div class="easy_to_use">
                                    <i class="icon ion-ios-bookmarks-outline"></i>
                                    <div class="clearfix"></div><br>
                                    <p>EASY TO USE</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="#">
                                <div class="any_help">
                                    <i class="icon ion-person-stalker"></i>
                                    <div class="clearfix"></div><br>
                                    <p>ANY HELP</p>
                                </div>
                            </a>
                        </div>
                        <div class="dot hidden-xs"></div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="h2">OUR CUSTOMERS SAID <a href="<?=site_url('testimonials')?>" class="btn btn-primary btn-xs pull-right">View All</a> </h2>
        </div>
        <div class="clearfix"></div>
        <br><br>
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php foreach ($testimonials as $testimonial) { ?>
                    <div class="item">
                        <div class="testi">
                            <p><?= $testimonial->comment ?></p>
                            <p><b><?= $testimonial->name ?></b>, <?= $testimonial->job_desc ?></p>
                        </div>
                        <div class="testi-img">
                            <img src="<?= base_url('uploads/testimonials/' . $testimonial->image) ?>"
                                 class="img-responsive img-circle center-block">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div><br>
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center">
            <h2 class="h2">YOU CAN TRUST US</h2>
        </div>
        <div class="clearfix"></div>
        <br><br><br>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center trust-section">
                <div class="icons">
                    <img src="<?= base_url('assets/img/trust1.png') ?>">
                </div>
                <div class="clearfix"></div>
                <br><br>
                <h4 class="count"><b>1008</b></h4>
                <p class="trust"><span class="border-left"></span>HAPPY CUSTOMER<span class="border-right"></span></p>
            </div>
            <div class="col-md-3 col-sm-6 text-center trust-section">
                <div class="icons">
                    <img src="<?= base_url('assets/img/trust2.png') ?>">
                </div>
                <div class="clearfix"></div>
                <br><br>
                <h4 class="count"><b>1300</b></h4>
                <p class="trust"><span class="border-left"></span>PROPERTIES IN STOCK<span class="border-right"></span>
                </p>
            </div>
            <div class="col-md-3 col-sm-6 text-center trust-section">
                <div class="icons">
                    <img src="<?= base_url('assets/img/trust3.png') ?>">
                </div>
                <div class="clearfix"></div>
                <br><br>
                <h4 class="count"><b>7</b></h4>
                <p class="trust"><span class="border-left"></span>CITY REGISTERED<span class="border-right"></span></p>
            </div>
            <div class="col-md-3 col-sm-6 text-center trust-section">
                <div class="icons">
                    <img src="<?= base_url('assets/img/trust4.png') ?>">
                </div>
                <div class="clearfix"></div>
                <br><br>
                <h4 class="count"><b>1023</b></h4>
                <p class="trust"><span class="border-left"></span>COMPANIES WE SERVED<span class="border-right"></span>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div><br><br><br>
<div class="container-fluid">
    <div class="row faq-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="h2">OUR ACHIEVEMENTS</h2>
                </div>
            </div>
            <div class="clearfix"></div>
            <br>
            <div class="row">
                <ul id="achievments">
                    <?php foreach ($achievements as $k => $achievement) { ?>
                        <li>
                            <a href="#achievment_<?= $k ?>" class="ach_modal_opener">
                                <div class="achievemnts">
                                    <div style="background-image:url(<?= base_url('uploads/achievements/' . $achievement->image) ?>);background-size: contain;width: 100%;background-repeat: no-repeat;height: 195px;background-position: center;"
                                         class="img-responsive"></div>
                                    <p class="<?= $achievement->comment ? '' : 'hide' ?>"><?= substr(strip_tags($achievement->comment),
                                            0, 20) ?>...</p>
                                    <div class="hide comment"><?= $achievement->comment ?></div>
                                    <p class="hide image"><?= base_url('uploads/achievements/' . $achievement->image) ?></p>
                                </div>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <!-- <div class="col-sm-12 col-md-6">
            <div class="faq col-sm-11">
                <div class="col-sm-2">
                    <i class="fa fa-search"></i>
                </div>
                <div class="col-sm-10">
                    <h4>ARE YOU LOOKING FOR A PROPERTY?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt</p>
                </div>
            </div>
            <div class="col-sm-1 faq_next text-center">
                <a href="#"><i class="icon ion-ios-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="faq col-sm-11">
                <div class="col-sm-2">
                    <i class="fa fa-dollar"></i>
                </div>
                <div class="col-sm-10">
                    <h4>DO YOU WANT TO SELL A PROPERTY?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt</p>
                </div>
            </div>
            <div class="col-sm-1 faq_next text-center">
                <a href="#"><i class="icon ion-ios-arrow-right"></i></a>
            </div>
        </div>
        <div class="col-sm-12 text-center qn-section">
            <p>QUESTIONS? CALL US : +3-123-424-5700</p>
        </div> -->
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enter the details
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </h5>
            </div>
            <div class="content-box-large">
                <div class="panel-body">
                    <form role="form" method="post" action="<?= site_url('home/sendmail') ?>">
                        <h4 class="text-uppercase"><b>Contact Form</b></h4>
                        <div class="form-group">
                            <input type="text" name="name" required placeholder="Your Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" required placeholder="Your Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" required placeholder="Your Phone Number"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message" name="message" required
                                      style="min-height: 150px;"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" style="" data-sitekey="6LfZsEcUAAAAALbbDR0af-jvqVSD1MLjDLgQyN1f"></div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">SEND</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="achievement_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title">Achievement</h4>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img src="" class="img-responsive ach_image" style="display: inline-block"/>
                </div>
                <br/>
                <div class="ach_comment"></div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script type="text/javascript">
    var lightSlider = true;
</script>