<?php
session_start();
 $con=mysqli_connect("localhost","vaishakhpillai1","9096115174","pisanga_ecomm");

?>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=pisangaweb"></script>
<script >
  function pisangaweb(){
    new google.translate.TranslateElement({PageLanguage:'en'},'xyz')
  }
</script>



<!doctype html>
<html lang="en">
  <head>
   <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pisanga</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets\img\Logo\PNG\Favicon 32 px coloured.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
   <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >

<link rel="stylesheet" href="css/style.css">

    <title>Pisanga Aluminium Extrusions</title>
  </head>
  <body>
      <navbar class="col-md-12">
<?php include("navbarmenu.php"); ?>

      	</navbar>
      	
      	<style>
      	    
.breadcrumb-list > li {
  font-size: 14px;
  list-style: none;
  display: inline;
}
.breadcrumb-list > li a:after {
  content: "/";
  vertical-align: middle;
  margin: 0 5px;
  color: #7a7a7a;
}
.action-wishlist:hover,
.action-wishlist:focus{
  color:#fff;
}
.add-to-cart.action-wishlist {
  width: 50px;
  text-align: center;
  padding: 0;
}
.add-to-cart.action-wishlist i {
  margin-right: 0px;
}
.product-add-to-cart .cart-title,
.product-add-to-cart .cart-title:hover,
.product-list-action .cart-title,
.product-list-action .cart-title:hover {
  background-color: transparent;
  border-bottom: none;
  color: inherit;
}
.product-add-to-cart .pro-add-btn i,
.product-list-action .pro-add-btn i {
  margin-right: 10px;
  font-size: 18px;
}
.add-to-cart {
  display: inline-block;
}
.action-wishlist:hover,
.action-wishlist:focus{
  color:#fff;
}
.add-to-cart.action-wishlist i {
  margin-right: 0px;
}
.product-add-to-cart {
  float: none;
}
.single-product-wishlist{
  display: inline-block;
  position: relative;
  margin-left: 20px;
}
.product-thumbnail .owl-nav  {display: none;}
.breadcrumb-area {
    padding: 30px 0;
    background-color: #f3f3f3;
}
.breadmome-name {
    color: #ff6a00;
    font-size: 24px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 18px;
}
.breadcrumb-content > ul > li {
    display: inline-block;
    list-style: none;
    position: relative;
    font-size: 14px;
    color: #333;
}
.breadcrumb-content > ul > li.active{
    color: #ff6a00;
}
.breadcrumb-content > ul > li:after {
    content: "/";
    vertical-align: middle;
    margin: 0 5px;
    color: #7a7a7a;
}
.breadcrumb-content > ul > li:last-child:after{
    display: none;
}
.mt-80 { margin-top: 80px }.mb-80 { margin-bottom: 80px }
.single-product-name {
    font-size: 22px;
    text-transform: capitalize;
    font-weight: 900;
    color: #444;
    line-height: 24px;
    margin-bottom: 15px;
}
.single-product-reviews {
    margin-bottom: 10px;
}
.single-product-price {
    margin-top: 25px;
}
.single-product-action {
    margin-top: 30px;
    padding-bottom: 30px;
    border-top: 1px solid #ebebeb;
    border-bottom: 1px solid #ebebeb;
    float: left;
    width: 100%;
}
.product-discount {
    display: inline-block;
    margin-bottom: 20px;
}
.product-discount span.price {
    font-size: 28px;
    font-weight: 900;
    line-height: 30px;
    display: inline-block;
    color: #008bff;
}
.product-info {
    color: #333;
    font-size: 14px;
    font-weight: 400;
}
.product-info p {
    line-height: 30px;
    font-size: 14px;
    color: #333;
    margin-top: 30px;
}
.product-add-to-cart span.control-label {
    display: block;
    margin-bottom: 10px;
    text-transform: capitalize;
    color: #232323;
    font-size: 14px;
}
.product-add-to-cart {
    overflow: hidden;
    margin: 20px 0px;
    float: left;
    width: 100%;
}
.cart-plus-minus-box {
    border: 1px solid #e1e1e1;
    border-radius: 0;
    color: #3c3c3c;
    height: 49px;
    text-align: center;
    width: 50px;
    padding: 5px 10px;
}
.product-add-to-cart .cart-plus-minus {
    margin-right: 25px;
}
.cart-plus-minus {
    position: relative;
    width: 75px;
    float: left;
    padding-right: 25px;
}
.add-to-cart {
    background: #008bff;
    border: 0;
    border-bottom: 3px solid #0680e5;
    color: #fff;
    box-shadow: none;
    padding: 0 30px;
    border-radius: 3px;
    font-weight: 400;
    cursor: pointer;
    font-size: 14px;
    text-transform: capitalize;
    height: 50px;
    line-height: 50px;
}
.add-to-cart:hover {
    background: #ff6a00;
    border-color: #e96405;
}
      	</style>
      	
      	
      	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<div class="wrapper">
        <div class="breadcrumb-wrapper">
            <div class="breadcrumb-area breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h1 class="breadmome-name breadcrumbs-title">View For More Details Product </h1>             
                                <nav class="" role="navigation" aria-label="breadcrumbs">
                                    <ul class="breadcrumb-list">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Sport & Outdoor</a><span>Lorem Ipsum is simply dummy text</span></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>
            <div id="shopify-section-product-template" class="shopify-section">
                <div class="single-product-area mt-80 mb-80">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="product-details-large" id="ProductPhoto">
                                    <img id="ProductPhotoImg" class="product-zoom" data-image-id="" alt="12. Aliexpress dropshipping by oberlo" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552">
          
                                </div>
                                <div id="ProductThumbs" class="product-thumbnail owl-carousel">
                                    <a class="product-single__thumbnail active" href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image-id="6995357106246">
                                    <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
          
                                    <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" 
                                    data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" data-image-id="6995358023750">
                                    <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
          
                                    <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" 
                                    data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" data-image-id="6995357302854">
                                    <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
          
                                    <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" 
                                    data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" data-image-id="6995357532230">
                                    <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
          
                                    <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" 
                                    data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" data-image-id="6995357728838">
                                    <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>
          
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="single-product-content">
                                    <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                        <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                        <div class="product-details">
                                            <h1 class="single-product-name">Lorem Ipsum is simply dummy text</h1>
                                            <div class="single-product-reviews">
                                                <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                            </div>
                                            <div class="product-sku">SKU: <span class="variant-sku">YQT71020193</span></div>
                                            <div class="single-product-price">
                                                <div class="product-discount"><span  class="price" id="ProductPrice"><span class=money>$20.66</span></span></div>
                                            </div>
                                            <div class="product-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                          
                                            <div class="single-product-action">
                                                <div class="product-variant-option"> 
                                                    <select name="id" id="productSelect" class="product-single__variants" style="display:none;">   
                                                        <option  selected="selected"  data-sku="YQT71020193" value="19506517377094">Default Title - <span class=money>$20.66 USD</span></option>
                                    
                                                    </select>
                                                    <script>
                                                        jQuery(function() {
                                                          jQuery('.swatch :radio').change(function() {
                                                            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                            var optionValue = jQuery(this).val();
                                                            jQuery(this)
                                                            .closest('form')
                                                            .find('.single-option-selector')
                                                            .eq(optionIndex)
                                                            .val(optionValue)
                                                            .trigger('change');
                                                          });
                                                        });
                                                    </script>
                                                </div>
                                                <style>.product-variant-option .selector-wrapper{display: none;}</style>
                                                <div class="product-add-to-cart">
                                                    <span class="control-label">Quantity</span>
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                                    </div>
                                                    <div class="add">
                                                        <button type="submit" class="add-to-cart ajax-spin-cart" id="AddToCart">
                                                            <i class="ion-bag"></i>
                                                            <span class="list-cart-title cart-title" id="AddToCartText">Add to cart</span>
                                                        </button>
                                                        <script>
                                                            jQuery('#AddToCart').click(function(e) {
                                                            e.preventDefault();
                                                            Shopify.addItemFromFormStart('AddToCartForm', 1912078270534);
                                                             }); 
                                                        </script>

                                                        <div class="single-product-wishlist">                    
                                                            <a class="add-to-cart action-wishlist wishlist" href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="secure-payment"><img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/files/guaranteed_safe_checkout1.png?v=1545216773"></div>                                                                  
                                            </div>                                                        
                                        </div>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style type="text/css">.product-details .countdown-timer-wrapper{display: none !important;}</style>
                                                
                <script>$(document).ready(function() {$('.fancybox').fancybox();});</script>
                <script>function productZoom(){
                        $(".product-zoom").elevateZoom({
                          gallery: 'ProductThumbs',
                          galleryActiveClass: "active",
                          zoomType: "inner",
                          cursor: "crosshair"
                        });$(".product-zoom").on("click", function(e) {
                          var ez = $('.product-zoom').data('elevateZoom');
                          $.fancybox(ez.getGalleryList());
                          return false;
                        });
                        
                        };
                      function productZoomDisable(){
                        if( $(window).width() < 767 ) {
                          $('.zoomContainer').remove();
                          $(".product-zoom").removeData('elevateZoom');
                          $(".product-zoom").removeData('zoomImage');
                        } else {
                          productZoom();
                        }
                      };

                      productZoomDisable();

                      $(window).resize(function() {
                        productZoomDisable();
                      });
                </script>
                <script>
                    $('.product-thumbnail').owlCarousel({
                        loop: true,
                        center: true,
                        nav: true,dots:false,
                        margin:10,
                        autoplay: false,
                        autoplayTimeout: 5000,
                        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                        item: 3,
                        responsive: {
                            0: {
                                items: 2
                            },
                            480: {
                                items: 3
                            },
                            992: {
                                items: 3,
                            },
                            1170: {
                                items: 3,
                            },
                            1200: {
                                items: 3
                            }
                        }
                    });
                </script>
            </div>
        </main>
    </div>
   
      	
 
 
<?php include("footer.php"); ?>
 	
 




<div class="modal" id="logi">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="login-panel.php" method="post">
        
          
          <p>Phone or Email</p>
          <p><input type="text" name="uname" class="form-control"></p>
          <p>Password</p>
          <p><input type="password" name="pass" class="form-control"></p>
          <p><input type="submit" name="save" value="Sign In" class="btn btn-primary"></p>
       </form>
      </div>

      
    </div>
  </div>
</div>

<div class="modal" id="signu">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sign UP</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form action="signup.php" method="post">
         <p>Name<p>
          <p><input type="text" name="name" class="form-control"></p>
          <p>Email:</p>
          <p><input type="email" name="email" class="form-control"></p>
           <p>company Name:</p>
          <p><input type="text" name="company" class="form-control"></p>
          
          <p>Phone:</p>
          <p><input type="text" name="phone" class="form-control"></p>
          
          <p><input type="submit" name="save" value="Sign Up" class="btn btn-success"></p>
       </form>
      </div>

      
    </div>
  </div>
</div>
<script >
  function vali(){
    var pass=document.getElementById("pass").value;
    var cpass=document.getElementById("cpass").value;
    if(pass!=cpass){
      alert("password mismatch");
      return false;
    }
  }
</script>
  </body>
</html>