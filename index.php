<?php
include('include/header.php');

//
//$curl = curl_init();
//
//curl_setopt_array($curl, array(
//    CURLOPT_URL => 'https://shop.packman.app/api/products?force=0&query=%7B%22where%22%3A%7B%22AND%22%3A%5B%7B%22store%22%3A%2261dbcea243eb310026a732c2%22%7D%5D%7D%2C%22limit%22%3A15%2C%22sort%22%3A%7B%22featured%22%3A-1%2C%22createdAt%22%3A-1%7D%7D%0A',
//    CURLOPT_RETURNTRANSFER => true,
//    CURLOPT_ENCODING => '',
//    CURLOPT_MAXREDIRS => 10,
//    CURLOPT_TIMEOUT => 0,
//    CURLOPT_FOLLOWLOCATION => true,
//    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//    CURLOPT_CUSTOMREQUEST => 'GET',
//    CURLOPT_HTTPHEADER => array(
//        'Accept: application/json',
//        'Content-Type: application/json'
//    ),
//));
//
//$response = curl_exec($curl);
//
//curl_close($curl);
//$response = json_decode($response);
//$data = $response->data;


?>


<!--Body Content Started-->
<main class="main-body">
    <section style="background-image: url('images/banner2.webp');" class="default-section banner-section">
        <div class="container">
            <div class="row h-100 align-items-center">
                <div class="col-lg-9" style='color:#5e2a2b; background-color:white;'>
                    <h1 class="h2">Wild Nut brings you deliciously wholesome products born out of a healthy lifestyle
                        and a passion for GOOD FOOD.</h1>
                    <p> From the earth's bounty and through a selection of its best and finest ingredients we pack-up
                        rich, delectable & incredibly nutritious foods to be savoured and to fuel you up at any time of
                        day.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="default-section our-story-section section-top-border pt-0 pb-4" id="our-story">
        <div class="container">
            <div class="logo-w text-center mb-3"><img alt="" src="images/logo-w.png" width="86" height="103"></div>
            <div class="row">
                <div class="col-lg-10 m-auto text-center">
                    <h2 class="title-section mb-4 pb-2">A Wild Story</h1>
                        <p>Our story is quite simple actually. We are proud Syrian girls who got the privilege of
                            traveling all around the world and trying all kinds of foods. Coming back to Syria made us
                            realize that nutritious and wholesome foods can be grown in our rich soiled lands. </p>
                        <p>With this, we decided to create a local brand made from the love our land to share with the
                            world. Our mission is to create an inspiring sustainable brand that is responsible and
                            environment friendly. This is something we live and work by every day.</p>
                </div>
            </div>
        </div>
    </section>


    <section style="background-image: url('images/banner.jpg');" class="default-section profile-section py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="profile-card">
                        <div class="profile-photo">
                            <img alt="Gida Hussami" src="images/profile-3.png" width="224" height="239">
                        </div>
                        <h3>Gida Hussami</h3>
                        <p class='profile-txt'>Food lover, combination advocate, ocean child and a hazelnut maniac</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="profile-card">
                        <div class="profile-photo">
                            <img alt="Aya Ajami" src="images/profile-1.png" width="224" height="239">
                        </div>
                        <h3>Aya Ajami</h3>
                        <p class='profile-txt'>Wild child at heart, sports enthusiast and a crunch addict</p>
                    </div>
                </div>

                <!-- <div class="col-md-4">
                 <div class="profile-card">
                  <div class="profile-photo">
                      <img alt="Nadia Nahhas" src="images/profile-2.png" width="224" height="239">
                  </div>
                  <h3>Nadia Nahhas</h3>
                  <p class='profile-txt'>Adventure seeker and a peanut butter admirer</p>
                 </div>
              </div>
               </div> -->
            </div>
    </section>


    <section class="default-section our-products-section section-top-border pt-0 pb-5" id="our-products">
        <div class="container">
            <div class="logo-w text-center mb-3"><img alt="" src="images/logo-w.png" width="86" height="103"></div>
            <h2 class="title-section mb-4 pb-2 text-center">Products</h2>
                <div class="row justify-content-center" id="products">

                </div>
        </div>
    </section>

    <section class="default-section our-approach-section section-top-border pt-0 pb-0" id="our-approach">
        <div class="container">
            <div class="logo-w text-center mb-3"><img alt="" src="images/logo-w.png" width="86" height="103"></div>
            <div class="row mb-5">
                <div class="col-lg-10 m-auto text-center">
                    <h2 class="title-section mb-4 pb-2">Approach</h1>
                        <p>The Wild Nut kitchen is located in the heart of Damascus. We push to hire underprivileged
                            women, not only because we believe women and mothers have a delicate taste and familiarity
                            in the kitchen but also for these women to stand up on their feet, be independent and lead a
                            better life. We teach them skills which they master over time to become essential members of
                            our handmade goods.
                        </p>
                        <p>We are strong advocates of “you are what you eat”. This is why our products are nutritious,
                            with zero empty calories and ranging from gluten-free, sugar-free & dairy-free to
                            keto-friendly. We support all types of bodies to get the energy and nutrition they need with
                            clean and natural ingredients. We believe that we are all on to something great - keeping
                            fit & healthy is a key ingredient!</p>
                </div>
            </div>
        </div>
        <div class="single-img-div">
            <img alt="" src="images/threechococups-bg.webp" width="1366" height="604" class="w-100"
                 style='background-image: contain'>
        </div>
    </section>

    <section class="default-section gallery-section section-top-border pt-0 pb-5" id="gallery" style='padding:50px'>
        <div class="container-fluid p-0">
            <div class="logo-w text-center mb-3"><img alt="" src="images/logo-w.png" width="86" height="103"></div>
            <h2 class="title-section mb-5 pb-2 text-center">Gallery</h1>
                <script type="text/javascript"
                        src="https://www.juicer.io/embed/wildwildnut/embed-code.js?per=9&truncate=30" async
                        defer></script>
                <!-- Swiper -->
                <!-- <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-1.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-2.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-3.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-4.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-5.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-6.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-7.jpg">
                    </div>
                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-8.jpg">
                    </div>

                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-9.jpg">
                    </div>

                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-10.jpg">
                    </div>

                    <div class="swiper-slide">
                      <img alt="" src="images/gallery/p-11.jpg">
                    </div>

                  </div>
                  <div class="swiper-button-next"></div>
                 <div class="swiper-button-prev"></div> -->
        </div>
        </div>
    </section>

    <section class="default-section contact-us-section section-top-border pt-0 pb-4" id="order-yours">
        <div class="container">
            <div class="logo-w text-center mb-3"><img alt="" src="images/logo-w.png" width="86" height="103"></div>
            <div class="row mb-5">
                <div class="col-lg-10 m-auto text-center">
                    <h2 class="title-section mb-4 pb-2">Contact Us</h1>
                        <p>We always love to hear from you!</p>
                        <p>Don't be shy! Do reach out for any feedback, thoughts or suggestions - or just to say hello
                            ;) </p>
                        <p>
                            <img alt="" src="images/contact-icon-4.png">
                            <a href="mailto:info@wildnut.co">info@wildnut.co</a>
                        </p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="contact-card me-lg-3">
                        <h2 class="text-center">Syria</h2>
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon">
                                <img alt="" src="images/contact-icon-1.png">
                            </div>
                            <div class="text">
                                <a href="tel:+963 11 223 2100">+963 11 223 2100</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  mb-3">
                            <div class="icon">
                                <img alt="" src="images/contact-icon-2.png">
                            </div>
                            <div class="text">
                                <a href="https://web.whatsapp.com/" target="_blank">+963 968 400 885</a>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="icon">
                                <img alt="" src="images/contact-icon-3.png">
                            </div>
                            <div class="text">
                                <a href="https://www.instagram.com/wildwildnut/" target="_blank">@wildwildnut</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-card ms-lg-3">
                        <h2 class="text-center">UAE</h2>
                        <div class='contat-list'>
                            <div class="d-flex align-items-center mb-3">
                                <div class="icon">
                                    <img alt="" src="images/contact-icon-1.png">
                                </div>
                                <div class="text">
                                    <a href="tel:+971 58 599 7180">+971 50 800 6448</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mb-3">
                                <div class="icon">
                                    <img alt="" src="images/contact-icon-2.png">
                                </div>
                                <div class="text">
                                    <a href="https://web.whatsapp.com/" target="_blank">+971 50 800 6448</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon">
                                    <img alt="" src="images/contact-icon-3.png">
                                </div>
                                <div class="text">
                                    <a href="https://www.instagram.com/wildnutarabia/"
                                       target="_blank">@wildnutarabia</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

</main>
<!--Body Content StarEndted-->


<?php include('include/footer.php') ?>
