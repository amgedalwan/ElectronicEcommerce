<div class="mx-auto  my-4 py-2 col-md-12 col-sm-12 col-xs-12 text-center text-light">
    <h3 class="titel">Product Details</h3>
</div>
<?php $rows=$data['product'];
  //to do pro imgs
  foreach($rows as $row){
   
  
    ?>
<div class="container mt-4">

    <div class="row">
        <div class="col-md-6">
            <!--Gallery Thumbs-->
            <!-- Gallery -->
            <div id="js-gallery" class="gallery">

                <!--Gallery Hero-->
                <div class="gallery__hero">



                    <img src="../<?php echo $row->main_img ?>" width="100%">
                </div>
                <!--Gallery Hero-->

                <!--Gallery Thumbs-->
                <div class="gallery__thumbs">
                    <a href="../<?php echo $row->main_img ?>" data-gallery="thumb" class="is-active">
                        <img src="../<?php echo $row->main_img ?>">
                    </a>
                    <?php
  $imgs=explode(',',$row->pro_imgs);
  
  foreach( $imgs as $img){
  ?>
                    <a href="../<?php echo $img ?>" data-gallery="thumb">
                        <img src="../<?php echo $img ?>">
                    </a>
                    <?php
  }
  ?>
                </div>
                <!--Gallery Thumbs-->

            </div>
            <!--.gallery-->
        </div>
        <div class="col-md-5 m-2 bx-2 pro-text">
            <div class="product-dtl">
                <div class="product-info">
                    <div class="product-name  mb-3">
                        <?php echo $row->pro_name;?>
                    </div>

                    <div>
                        <h4>
                            <?php echo $row->pro_price;?> $
                        </h4>
                    </div>
                </div>
                <div class="product-size border-bottom">
                    <h5 class="d-inline-block mr-1">Categories : </h5>

                    <div class="quantity d-inline-block">
                        <?php echo $row->cat_name; ?>

                    </div>

                </div>
                <div class="product-size border-bottom">
                    <h5 class="d-inline-block mr-1"> <?php echo $row->tag_name; ?> : </h5>
                    <div class="quantity  d-inline-block">
                        <?php echo $row->tag_data; ?>
                    </div>
                    <div class="row productCardbtns mx-0">
                        <a title="add to wishlist" id="'.$row->pro_id.'"
                            class="mdi mdi-heart-outline addTowish mx-auto"></a>
                        <a title="add to compare" id="'.$row->pro_id.'"
                            class="fas fa-exchange-alt addTocompare mx-auto"></a>
                        <a title="add to cart" id="'.$row->pro_id.'"
                            class="attToCart mdi  mdi-cart-outline mx-auto"></a>
                    </div>
                    <div class="product-info-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                <?php echo $row->pro_details; ?>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>

    </div>

</div>
<?php
  }
  ?>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-zoom/1.7.21/jquery.zoom.js'></script>
<script>
    var App = (function () {

        //=== Use Strict ===//
        'use strict';

        //=== Private Variables ===//
        var gallery = $('#js-gallery');
        $('.gallery__hero').zoom();


        //=== Gallery Object ===//
        var Gallery = {
            zoom: function (imgContainer, img) {
                var containerHeight = imgContainer.outerHeight(),
                    src = img.attr('src');

            },
            switch: function (trigger, imgContainer) {
                var src = trigger.attr('href'),
                    thumbs = trigger.siblings(),
                    img = trigger.parent().prev().children();

                // Add active class to thumb
                trigger.addClass('is-active');

                // Remove active class from thumbs
                thumbs.each(function () {
                    if ($(this).hasClass('is-active')) {
                        $(this).removeClass('is-active');
                    }
                });


                // Switch image source
                img.attr('src', src);
            }
        };

        //=== Public Methods ===//
        function init() {


            // Listen for clicks on anchors within gallery
            gallery.delegate('a', 'click', function (event) {
                var trigger = $(this);
                var triggerData = trigger.data("gallery");

                if (triggerData === 'zoom') {
                    var imgContainer = trigger.parent(),
                        img = trigger.siblings();
                    Gallery.zoom(imgContainer, img);
                } else if (triggerData === 'thumb') {
                    var imgContainer = trigger.parent().siblings();
                    Gallery.switch(trigger, imgContainer);
                } else {
                    return;
                }

                event.preventDefault();
            });
        }

        //=== Make Methods Public ===//
        return {
            init: init
        };

    })();

    App.init();
</script>