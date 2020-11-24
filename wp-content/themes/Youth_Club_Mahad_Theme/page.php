<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/camping.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <!--<p>DONT FORGET TO REPLACE ME LATER</p>-->
      </div>
    </div>
  </div>


      <div class="container container--narrow page-section">
        <?php
          $parentID = wp_get_post_parent_id(get_the_ID());
          if($parentID){ ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($parentID); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentID); ?></a> <span class="metabox__main"><?php the_title();?></span></p>
        </div>


    <?php }?>


    <?php
    $testArray = get_pages(array(
      'child_of'=>get_the_ID(),
    ));
    if ($parentID or $testArray ) { ?>


    <div class="page-links container">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($parentID);?>"><?php echo get_the_title($parentID); ?></a></h2>
      <ul class="min-list">
        <?php
        if ($parentID) {
          $findChildrenOf = $parentID;
        }else{
          $findChildrenOf = get_the_ID();
        }
          wp_list_pages(array(

            'title_li' => NULL,
            'child_of'=> $findChildrenOf,

          ));

        ?>
      </ul>
    </div>

  <?php } ?>


    <div class= "container generic-content">
      <?php the_content(); ?>
    </div>
</div>
      <?php
        if(get_the_ID() == 3583){?>

          <section class="sect" >
            <div class="bg-image"style="background-image: url(<?php echo get_theme_file_uri('/images/trek1.jpg')?>);height: 400px; opacity:.70; background-size: cover;">

            </div>
            <div class="container container-q" >
              <div class="media-container-row" >
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                  <div class="card-wrapper media-container-row media-container-row">
                      <div class="card-box">
                          <h4 class="card-title pb-3 mbr-fonts-style display-5">
                              <img src="<?php echo get_theme_file_uri('/images/phone.png')?>" width="30px" height="30px" alt="phone" style="display: block;margin-left: auto;margin-right: auto; margin-top:4px;" />
                            </h4>
                            <h4>Mr. Santosh Sakpal</h4>
                              <br>
                              <p style="text-align:center">
                                Vice-President
                              </p>
                      </div>
                    </div>
                  </div>

                  <div class="card p-3 col-12 col-md-6 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper media-container-row">
                      <div class="card-box">
                          <h4 class="card-title pb-3 mbr-fonts-style display-5">
                            <img src="<?php echo get_theme_file_uri('/images/phone.png')?>" width="30px" height="30px" alt="phone" style="margin-top:4px;display: block;margin-left: auto;margin-right: auto;" />
                          </h4>
                          <h4>Mr. Sanjeev Mehta</h4>
                            <br>
                            <p style="text-align:center">
                              President
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper media-container-row">
                          <div class="card-box">
                            <h4 class="card-title pb-3 mbr-fonts-style display-5">
                              <img src="<?php echo get_theme_file_uri('/images/phone.png')?>" width="30px" height="30px" alt="phone" style="margin-top:4px;display: block;margin-left: auto;margin-right: auto;" />
                            </h4>
                            <h4>Mr. Makrand Joshi</h4>
                              <br>
                              <p style="text-align:center">
                                Secretory
                              </p>
                          </div>
                        </div>
                      </div>


                  </div>
              </div>

        </section>
        <br>
        <br>
        <!--#########################################-->
        <div class="container">


        <div class="hero-slider">
          <div data-glide-el="track" class="glide__track">
          <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/monal.jpg')?>);">
          <div class="hero-slider__interior container">
            <div class="hero-slider__overlay overlay">
              <h2 class="headline headline--medium t-center">Board Members</h2>
              <h4 class="t-center">Mr. Rajesh Butala</h4>
              <p class="t-center">Jt. Secretory</p>
              <h4 class="t-center">Mr. Ashok Talathi</h4>
              <p class="t-center">Chairman</p>
              <h4 class="t-center">Mr. Uday Payelkar</h4>
              <p class="t-center">Vice Chairman</p>
              <h4 class="t-center">Mr. Sanjay Malvade</h4>
              <p class="t-center">Treasurer</p>
              <h4 class="t-center">Mr. Abhay Pingale</h4>
              <p class="t-center">Jt. Treasure</p>


            </div>
          </div>
        </div>
        <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/hike.jpg'); ?>);">
          <div class="hero-slider__interior container">
            <div class="hero-slider__overlay overlay">
              <h2 class="headline headline--medium t-center">Committee Members</h2>
              <h4 class="t-center">Mr. Ravi Vaidya</h4>
              <h4 class="t-center">Mrs. Swati Pingle</h4>
              <h4 class="t-center">Mrs. Deepa Dharap</h4>
              <h4 class="t-center">Dr. Sameer Butala</h4>
              <h4 class="t-center">Mr. Gireesh Mokal </h4>
              <h4 class="t-center">Mr. Raju Sasane</h4>
              <h4 class="t-center">Mr. C. D. Deshmukh</h4>


            </div>
          </div>
        </div>
        <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/hike2.jpg'); ?>);">
          <div class="hero-slider__interior container">
            <div class="hero-slider__overlay overlay">
              <h2 class="headline headline--medium t-center">Adv. Committee Members</h2>
              <h4 class="t-center">Dr. C.D. Dabhadkar</h4>
              <h4 class="t-center">Mr. Dilip Dharap</h4>
              <h4 class="t-center">Mr. Kashinath Apte</h4>
              <h4 class="t-center">Mr. Rajesh Mehta</h4>

              <h4 class="t-center">Mrs. Leena Shet</h4>
            </div>
          </div>
        </div>
          </div>
            <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]">
            </div>
          </div>
        </div>
      </div>


        <?php
          }
        ?>


        <?php
        if (get_the_ID()==3585) {?>
          <div class="container contain" >
            <div class="row" style="width:100%">
                <div class="col-md-61 col-md-6 col-md-offset-3">
                    <h2>Become Member</h2>
                    <p> Send us your message and we will get back to you as soon as possible </p>
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> First Name:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Last Name:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" maxlength="50">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" required maxlength="50">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="name"> Message:</label>
                                <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="btnSubmit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Post It! </button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Sent your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
            <div class="image-form" style="width:50%;">
              <img src="<?php echo get_theme_file_uri('/images/treking.jpg')?>" alt="trekking" />
            </div>

          </div>

      <?php
      }
        ?>



  <?php }

  get_footer();

  ?>
