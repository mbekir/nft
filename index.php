
<?php
$db = mysqli_connect("localhost", "root", "", "nft");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Six || Nuron - NFT Marketplace Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <!-- CSS 
    ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="template-color-1">

    <!-- start header area -->
    <!-- Start Header -->
     <?php
     include("menu.php");
     ?>
    <!-- ENd Header Area -->

    <!-- start banner area -->
    <div class="rn-banner-area rn-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="slider-style-6 wide-wrapper slick-activation-06 slick-arrow-between">

                        <!-- Start Single Portfolio  -->
                        <div class="slide bg_image bg_image--19">
                            <div class="banner-read-thumb-lg">
                                <h4>The way to find any <br> Digital content</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita beatae
                                    exercitationem quasi ullam esse?</p>
                                <div class="button-group">
                                    <a href="create.html" class="btn btn-large btn-primary mr--15">Get Started</a>
                                    <a href="create.html" class="btn btn-large btn-primary-alta">Create</a>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                        <!-- Start Single Portfolio  -->
                        <div class="slide bg_image bg_image--18">
                            <div class="banner-read-thumb-lg">
                                <h4>The way to find any <br> Digital content</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita beatae
                                    exercitationem quasi ullam esse?</p>
                                <div class="button-group">
                                    <a href="create.html" class="btn btn-large btn-primary mr--15">Get Started</a>
                                    <a href="create.html" class="btn btn-large btn-primary-alta">Create</a>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->



                        <!-- Start Single Portfolio  -->
                        <div class="slide bg_image bg_image--20">
                            <div class="banner-read-thumb-lg">
                                <h4>The way to find any <br> Digital content</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores expedita beatae
                                    exercitationem quasi ullam esse?</p>
                                <div class="button-group">
                                    <a href="create.html" class="btn btn-large btn-primary mr--15">Get Started</a>
                                    <a href="create.html" class="btn btn-large btn-primary-alta">Create</a>
                                </div>
                            </div>
                        </div>
                        <!-- Start Single Portfolio  -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start banner area End -->


    <!-- collection area Start -->
    <div class="rn-collection-area rn-section-gapTop">
        <div class="container">
            <div class="row mb--50 align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h3 class="title mb--0" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Top Collection</h3>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="view-more-btn text-start text-sm-end" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">
                        <a class="btn-transparent" href="#">VIEW ALL<i data-feather="arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- start single collention -->
<?php

$result = mysqli_query($db, "SELECT * from user u,produit p WHERE u.id = p.user_id");

   while ($ligne = mysqli_fetch_array($result)) {
    $id=$ligne["id_prod"];
    $result1 = mysqli_query($db, "SELECT * from image WHERE type='premiere' and produit_id ='$id'");
    $num1 = mysqli_num_rows($result1);
    $result2 = mysqli_query($db, "SELECT * from image WHERE type='seconde' and produit_id ='$id'");
    $num2 = mysqli_num_rows($result2);
    $result3 = mysqli_query($db, "SELECT * from image WHERE type='troiseme' and produit_id ='$id'");
    $num3 = mysqli_num_rows($result3);


?>




                <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="col-lg-4 col-xl-3 col-md-6 col-sm-6 col-12">
                    <a href="produit-details.php?id=<?php echo $id; ?>" class="rn-collection-inner-one">
                        <div class="collection-wrapper">
                            <div class="collection-big-thumbnail">
                                <?php
                                     while ($ligne1 = mysqli_fetch_array($result1)) {
                                 echo " <img   src='image/".$ligne1['image']."' >";
                            }
                            if ($num1 == 0){
                             echo  "<img src='assets/images/collection/collection-lg-02.jpg' alt='Nft_Profile'>" ;

                            }

                             ?>
                            </div>
                            <div class="collenction-small-thumbnail">
                                    <?php
                                     while ($ligne2 = mysqli_fetch_array($result2)) {
                                 echo " <img   src='image/".$ligne2['image']."' >";
                            }
                            if ($num2 == 0){
                             echo  "<img src='assets/images/collection/collection-lg-04.jpg' alt='Nft_Profile'>" ;

                            }

                             ?>

                            </div>
                            <div class="collection-profile">

                            <?php if ($ligne['photo']){
                                echo " <img   src='assets/images/client/".$ligne['photo']."' >";

                            }
                            else{
                                echo  "<img src='assets/images/collection/collection-lg-04.jpg' alt='Nft_Profile'>" ;
                            }   
                            ?>

                                
                            </div>
                            <div class="collection-deg">
                                <h6 class="title"><?php echo $ligne["nom_produit"]; ?></h6>
                                <span class="items"><?php echo $ligne["nom"]; ?></span>
                            </div>
                        </div>
                    </a>
                </div>

<?php



}

?>
                <!-- End single collention -->

                <!-- End single collention -->
            </div>
        </div>
    </div>
    <!-- collection area End -->
    <!-- Start product area -->
    <div class="rn-product-area rn-section-gapTop masonary-wrapper-activation">
        <div class="container">
            <div class="row mb--30 align-items-center">
                <div class="col-lg-4">
                    <div class="section-title">
                        <h3 class="title mb--0">Explore Product</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="button-group isotop-filter filters-button-group d-flex justify-content-start justify-content-lg-end mt_md--30 mt_sm--30">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Items</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">Art</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">Music</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">Vedio</span></button>
                        <button data-filter=".cat--4"><span class="filter-text">Collectionable</span></button>
                        <button data-filter=".cat--5"><span class="filter-text">Highest</span></button>
                        <button data-filter=".cat--6"><span class="filter-text">Lowest</span></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="grid-metro5 mesonry-list">
                    <div class="resizer"></div>
                    <!-- start single product -->

<?php

$rslt = mysqli_query($db, "SELECT * from user u,produit p WHERE u.id = p.user_id");

   while ($l = mysqli_fetch_array($rslt)) {
    $id=$l["id_prod"];
    $prod1 = mysqli_query($db, "SELECT * from image WHERE type='premiere' and produit_id ='$id'");
    $num_prod1 = mysqli_num_rows($prod1);
    $prod2 = mysqli_query($db, "SELECT * from image WHERE type='seconde' and produit_id ='$id'");
    $num_prod2 = mysqli_num_rows($prod2);



?>

                    <div class="grid-metro-item cat--1 cat--3">
                        <div class="product-style-one no-overlay">
                            <div class="card-thumbnail">
                                <a href="produit-details.php?id=<?php echo $id; ?>">

                                                  <?php
                                     while ($p = mysqli_fetch_array($prod1)) {
                                 echo " <img   src='image/".$p['image']."' >";
                            }
                            if ($num_prod1 == 0){
                             echo  "<img src='assets/images/portfolio/portfolio-01.jpg' alt='Nft_Profile'>" ;

                            }

                             ?>

                                </a>
                            </div>
                            <div class="product-share-wrapper">
                                <div class="profile-share">
                                    <a href="author.html" class="avatar" data-tooltip="Takur">
                                        <?php echo " <img   src='assets/images/client/".$l['photo']."' >";  ?>
                                    </a>

                                    <a class="more-author-text" href="#"><?php echo $l['nom']; ?></a>
                                </div>
                                <div class="share-btn share-btn-activation dropdown">
                                    <button class="icon" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg viewBox="0 0 14 4" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN hOiKLt">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 2C3.5 2.82843 2.82843 3.5 2 3.5C1.17157 3.5 0.5 2.82843 0.5 2C0.5 1.17157 1.17157 0.5 2 0.5C2.82843 0.5 3.5 1.17157 3.5 2ZM8.5 2C8.5 2.82843 7.82843 3.5 7 3.5C6.17157 3.5 5.5 2.82843 5.5 2C5.5 1.17157 6.17157 0.5 7 0.5C7.82843 0.5 8.5 1.17157 8.5 2ZM11.999 3.5C12.8274 3.5 13.499 2.82843 13.499 2C13.499 1.17157 12.8274 0.5 11.999 0.5C11.1706 0.5 10.499 1.17157 10.499 2C10.499 2.82843 11.1706 3.5 11.999 3.5Z" fill="currentColor"></path>
                                        </svg>
                                    </button>

                                    <div class="share-btn-setting dropdown-menu dropdown-menu-end">
                                        <button type="button" class="btn-setting-text share-text" data-bs-toggle="modal" data-bs-target="#shareModal">
                                            Share
                                        </button>
                                        <button type="button" class="btn-setting-text report-text" data-bs-toggle="modal" data-bs-target="#reportModal">
                                            Report
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <a href="product-details.html"><span class="product-name"><?php echo $l['nom_produit']; ?></span></a>
                            <span class="latest-bid">Highest bid 1/20</span>
                            <div class="bid-react-area">
                                <div class="last-bid"><?php echo $l['prix']; ?>  wETH</div>
                                <div class="react-area">
                                    <svg viewBox="0 0 17 16" fill="none" width="16" height="16" class="sc-bdnxRM sc-hKFxyN kBvkOu">
                                        <path d="M8.2112 14L12.1056 9.69231L14.1853 7.39185C15.2497 6.21455 15.3683 4.46116 14.4723 3.15121V3.15121C13.3207 1.46757 10.9637 1.15351 9.41139 2.47685L8.2112 3.5L6.95566 2.42966C5.40738 1.10976 3.06841 1.3603 1.83482 2.97819V2.97819C0.777858 4.36443 0.885104 6.31329 2.08779 7.57518L8.2112 14Z" stroke="currentColor" stroke-width="2"></path>
                                    </svg>
                                    <span class="number"><?php echo $l['like']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single product -->
<?php } ?>
     
                    <!-- end single product -->
                </div>
            </div>
        </div>
    </div>
    <!-- end product area -->
    <div class="rn-creator-title-area rn-section-gapTop">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <h2 class="title mb--0">Our Best Creators</h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_mobile--15">
                    <div class="shortby-default text-start text-sm-end">
                        <label class="filter-leble">SHOT BY:</label>
                        <select>
                            <option data-display="Top Rated">Top Rated</option>
                            <option value="1">Best Seller</option>
                            <option value="2">Recent Added</option>
                            <option value="3">Varified</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--30 creator-list-wrapper">
                <!-- start single top-seller -->
<?php

$rsl = mysqli_query($db, "SELECT * from user");

   while ($users = mysqli_fetch_array($rsl)) {

?>


                <div class="creator-single col-lg-3 col-md-4 col-sm-6">
                    <div class="top-seller-inner-one explore">
                        <div class="top-seller-wrapper">
                            <div class="thumbnail varified">
                                <a href="author.html">
                                    <?php 
                                    if($users["photo"]){
                                        echo " <img   src='assets/images/client/".$users['photo']."' >";
                                    }

                                    else{

                                       echo  "<img src='assets/images/client/client-0.png' alt='Nft_Profile'>";
                                    }
                                    

                                     ?>
                                </a>
                            </div>
                            <div class="top-seller-content">
                                <a href="author.html">
                                    <h6 class="name"><?php echo $users["nom"]; ?></h6>
                                </a>
                                <span class="count-number">
                                <?php echo $users["balance"]; ?> NFT
                            </span>
                            </div>
                        </div>
                        <a class="over-link" href="author.html"></a>
                    </div>
                </div>

            <?php } ?>
       
            
                <!-- End single top-seller -->
            </div>
        </div>
    </div>
    <!-- start service area -->
    <div class="rn-service-area rn-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12 mb--50">
                    <h3 class="title" data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Create and sell your NFTs</h3>
                </div>
            </div>
            <div class="row g-5">
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" class="rn-service-one color-shape-7">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-7.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-01</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Set up your wallet</a></h4>
                                <p class="description">Powerful features and inclusions, which makes Nuron standout,
                                    easily customizable and scalable.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="200" data-sal-duration="800" class="rn-service-one color-shape-1">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-1.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-02</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Create your collection</a></h4>
                                <p class="description">A great collection of beautiful website templates for your need.
                                    Choose the best suitable template.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="250" data-sal-duration="800" class="rn-service-one color-shape-5">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-5.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-03</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Add your NFT's</a></h4>
                                <p class="description">We've made the template fully responsive, so it looks great on
                                    all devices: desktop, tablets and.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
                <!-- start single service -->
                <div class="col-xxl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div data-sal="slide-up" data-sal-delay="300" data-sal-duration="800" class="rn-service-one color-shape-6">
                        <div class="inner">
                            <div class="icon">
                                <img src="assets/images/icons/shape-6.png" alt="Shape">
                            </div>
                            <div class="subtitle">Step-04</div>
                            <div class="content">
                                <h4 class="title"><a href="#">Sell Your NFT's</a></h4>
                                <p class="description">I throw myself down among the tall grass by the stream as I
                                    lie close to the earth NFT's.</p>
                                <a class="read-more-button" href="#"><i class="feather-arrow-right"></i></a>
                            </div>
                        </div>
                        <a class="over-link" href="#"></a>
                    </div>
                </div>
                <!-- End single service -->
            </div>
        </div>
    </div>
    <!-- End service area -->
    <!-- Modal -->
    <div class="rn-popup-modal share-modal-wrapper modal fade" id="shareModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content share-wrapper">
                <div class="modal-header share-area">
                    <h5 class="modal-title">Share this NFT</h5>
                </div>
                <div class="modal-body">
                    <ul class="social-share-default">
                        <li><a href="#"><span class="icon"><i data-feather="facebook"></i></span><span class="text">facebook</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="twitter"></i></span><span class="text">twitter</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="linkedin"></i></span><span class="text">linkedin</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="instagram"></i></span><span class="text">instagram</span></a></li>
                        <li><a href="#"><span class="icon"><i data-feather="youtube"></i></span><span class="text">youtube</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="rn-popup-modal report-modal-wrapper modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i data-feather="x"></i></button>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content report-content-wrapper">
                <div class="modal-header report-modal-header">
                    <h5 class="modal-title">Why are you reporting?
                    </h5>
                </div>
                <div class="modal-body">
                    <p>Describe why you think this item should be removed from marketplace</p>
                    <div class="report-form-box">
                        <h6 class="title">Message</h6>
                        <textarea name="message" placeholder="Write issues"></textarea>
                        <div class="report-button">
                            <button type="button" class="btn btn-primary mr--10 w-auto">Report</button>
                            <button type="button" class="btn btn-primary-alta w-auto" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
     <?php
     include("footer.php");
     ?>
    <!-- End Footer Area -->
    <!-- Start Footer Area -->

    <!-- End Footer Area -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Start Top To Bottom Area  -->
    <div class="rn-progress-parent">
        <svg class="rn-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS ============================================ -->
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/jquery-ui.js"></script>
    <script src="assets/js/vendor/modernizer.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/waypoint.js"></script>
    <script src="assets/js/vendor/wow.js"></script>
    <script src="assets/js/vendor/particles.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/count-down.js"></script>
    <script src="assets/js/vendor/counter-up.js"></script>
    <script src="assets/js/vendor/isotop.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/backtoTop.js"></script>
    <script src="assets/js/vendor/scrolltrigger.js"></script>
    <script src="assets/js/vendor/jquery.custom-file-input.js"></script>

    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>