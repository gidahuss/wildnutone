<?php


$signed_up = false;
if (isset($_SESSION['signed_up'])) {
    $signed_up = $_SESSION['signed_up'];
    unset($_SESSION['signed_up']);
}

?>


<!--Main Footer Started-->
<footer class="main-footer">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-lg-7">
                <div class="d-lg-flex align-items-center">
                    <div class="footer-logo">
                        <p>a product of..</p>
                        <a href="index.php" aria-label="logo"><img alt="" src="images/Wild-foods-logo-white.png"
                                                                   width="94"></a>
                    </div>
                    <ul>
                        <li>
                            <a href="privacy-policy.php">Privacy policy</a>
                        </li>
                        <li>
                            <a href="terms-and-condition.php">Terms & conditions</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-5 d-sm-flex justify-content-center justify-content-lg-end mt-2 mt-lg-0">
                <div class="text-center">© Wild Nut L.L.C</div>
                <div class="footer-social-icon">
                    <a href="https://www.facebook.com/wildwildnut/" target="_blank" aria-label="face"><img alt=""
                                                                                                           src="images/social/facebook.png"
                                                                                                           width="32"
                                                                                                           height="32"></a>
                    <a href="https://www.instagram.com/wildwildnut/" target="_blank" aria-label="insta"><img alt=""
                                                                                                             src="images/social/instagram.png"
                                                                                                             width="32"
                                                                                                             height="32"></a>
                    <a href="https://vm.tiktok.com/ZSe2McK8n/" target="_blank" aria-label="tiktok"><img alt=""
                                                                                                        src="images/social/tiktok.png"
                                                                                                        width="32"
                                                                                                        height="32"></a>
                    <a href="https://www.youtube.com/channel/UCUfkeRXSqFsisgsf8BEdGgg" target="_blank"
                       aria-label="youtube"><img alt=""
                                                 src="images/social/youtube.png"
                                                 width="32"
                                                 height="32"></a>
                </div>
            </div>
<!--            <div class="row justify-content-center align-items-center">-->
<!--                <ul class="col-12">-->
<!--                    <li style="display: table;margin: 0 auto">-->
<!--                        <a href="#" data-bs-toggle="modal" data-bs-target="#subscription" class="sub-footer-a">Subscribe to our latest news!</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
        </div>
    </div>
</footer>
<!--Main Footer Started-->

</div>
<button class="sub-footer-btn hide" data-bs-toggle="modal" data-bs-target="#subscription">
    Subscribe to our latest news!
</button>
<div class="modal fade" id="subscription" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" style="visibility: hidden;" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                <h5 class="modal-title" id="exampleModalToggleLabel" style="margin: 0 auto">Sign up for our mailing
                    list </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form action="./forms/subscription.php" method="post">
                    <small>Join our wild community by leaving your email address to stay on top of product launches and
                        access exclusive offers! </small>
                    <div class="mb-3">

                        <label for="exampleFormControlInput1" class="form-label"></label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="w-100 text-center">
                        <button type="submit" class="btn btn-primary">Become a member</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="confirm_message" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <b>You're in!</b><br>
                <small>You'll be first to know our juicy offers and exciting new products! </small>
            </div>

        </div>
    </div>
</div>

<div class="floating_btn hide" >
    <a href="#" onclick="event.preventDefault();$('#wa_widget-content').show();" aria-label="whatsapp">
        <div class="contact_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp"
                 viewBox="0 0 16 16">
                <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
        </div>
    </a>
    <!--    <p class="text_icon">Talk to us?</p>-->
</div>
<div id="wa-widget-wrapper" style="position: fixed; z-index: 999999; bottom: 126px; right: 20px;">
    <div id="wa_widget-content" style="display: none">
        <div class="wa_widget-brand-container" style="background: #5e2a2b">
            <div><img class="wa_widget-brand-image"
                      src="https://uploads-ssl.webflow.com/5f68a65cd5188c058e27c898/6204c4267b92625c9770f687_whatsapp-chat-widget-dummy-logo.png">
            </div>
            <div class="wa_widget-brand-info">
                <h4 style="color: white">Wild Nut</h4>
                <p style="color: white">We will reply asap!</p>
            </div>
            <div class="wa_widget-close-btn" id="wa-widget-close-btn" onclick="$('#wa_widget-content').hide();">
                <svg height="12" width="12" viewport="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <line x1="1" y1="11" x2="11" y2="1" stroke="white" stroke-width="2"></line>
                    <line x1="1" y1="1" x2="11" y2="11" stroke="white" stroke-width="2"></line>
                </svg>
            </div>
        </div>
        <div class="wa_widget-message-container">
            <div class="wa_widget-message">
                <h4>Wild Nut</h4>
                <p>Hi there!
                    How can I help you?</p>
            </div>
        </div>
        <div class="wa_widget-button-container">

            <a target="_blank" href="https://wa.me/971508006448" class="wa_widget-button" id="wa-widget-button"
               aria-label="whatsapp"
               style="background: #5e2a2b; padding: ; border-radius: 40px">
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.1225 14.9458C17.8183 14.7895 16.3033 14.0473 16.0215 13.9469C15.7397 13.8409 15.5332 13.7907 15.3295 14.1032C15.123 14.4129 14.5371 15.102 14.3529 15.3113C14.1744 15.5178 13.993 15.5429 13.6889 15.3894C11.8808 14.4854 10.695 13.7767 9.50361 11.7315C9.18832 11.1874 9.8189 11.2265 10.4076 10.0518C10.5081 9.84534 10.4578 9.66956 10.3797 9.51331C10.3016 9.35706 9.68776 7.84478 9.43106 7.22815C9.18274 6.62826 8.92604 6.71197 8.7391 6.70081C8.56053 6.68965 8.35684 6.68965 8.15037 6.68965C7.9439 6.68965 7.61187 6.76777 7.33006 7.0719C7.04825 7.38161 6.25305 8.12659 6.25305 9.63887C6.25305 11.1511 7.35517 12.616 7.50584 12.8225C7.66209 13.0289 9.67381 16.1316 12.7625 17.4681C14.7157 18.3107 15.4802 18.3833 16.4567 18.2382C17.051 18.1489 18.2759 17.496 18.5298 16.7734C18.7837 16.0535 18.7837 15.4369 18.7084 15.3085C18.6331 15.1718 18.4266 15.0937 18.1225 14.9458Z"
                        fill="white"></path>
                    <path
                        d="M24.0292 7.65625C23.3986 6.15792 22.4946 4.81306 21.3422 3.65792C20.198 2.50948 18.8395 1.5966 17.3439 0.970982C15.8093 0.326451 14.1798 0 12.5002 0H12.4444C10.7535 0.00837054 9.11567 0.343192 7.57549 1.00167C6.09267 1.63371 4.74699 2.54821 3.61344 3.6942C2.47226 4.84654 1.57661 6.18583 0.95719 7.67857C0.315449 9.22433 -0.00821224 10.8677 0.000158294 12.5586C0.00962607 14.4963 0.468048 16.4054 1.33944 18.1362V22.3772C1.33944 22.7176 1.47467 23.0441 1.71537 23.2848C1.95607 23.5255 2.28253 23.6607 2.62293 23.6607H6.86679C8.59752 24.5321 10.5067 24.9905 12.4444 25H12.5029C14.1743 25 15.7954 24.6763 17.3216 24.043C18.8097 23.4248 20.163 22.5226 21.306 21.3867C22.4583 20.2455 23.3651 18.9118 23.9985 17.4247C24.657 15.8845 24.9918 14.2467 25.0002 12.5558C25.0085 10.8566 24.6793 9.20759 24.0292 7.65625ZM19.8132 19.8772C17.8573 21.8136 15.2624 22.8795 12.5002 22.8795H12.4527C10.7702 22.8711 9.09893 22.4526 7.62293 21.6657L7.38855 21.5402H3.45998V17.6116L3.33442 17.3772C2.54759 15.9012 2.12906 14.2299 2.12069 12.5474C2.10953 9.76562 3.17259 7.15402 5.12293 5.18694C7.07047 3.21987 9.67371 2.1317 12.4555 2.12054H12.5029C13.898 2.12054 15.2513 2.39118 16.5264 2.9269C17.7708 3.44866 18.8869 4.19922 19.8467 5.15904C20.8037 6.11607 21.5571 7.23493 22.0788 8.47935C22.6201 9.76841 22.8908 11.1356 22.8852 12.5474C22.8685 15.3265 21.7775 17.9297 19.8132 19.8772Z"
                        fill="white"></path>
                </svg>
                <p style="color: white; margin-left: ">Start Whatsapp Chat</p>
            </a>


        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/scripts.js"></script>

<script>
    var signed_up = "<?php echo $signed_up; ?>";
    var myModal = new bootstrap.Modal(document.getElementById('subscription'), {
        keyboard: false
    })


    // get
    let modal_storage = localStorage.getItem('modal');
    if (!modal_storage) {
        myModal.toggle();
        localStorage.setItem('modal', 'true');  // set
    }

    if (signed_up) {
        var confirm = new bootstrap.Modal(document.getElementById('confirm_message'), {
            keyboard: false
        })
        confirm.toggle();

    }

    $(document).ready(function () {

        $.ajax({
            type: "GET",
            dataType: "json",
            data: {name: name},
            url: "https://shop.packman.app/api/products?force=0&query=%7B%22where%22%3A%7B%22AND%22%3A%5B%7B%22store%22%3A%2261dbcea243eb310026a732c2%22%7D%5D%7D%2C%22limit%22%3A100%2C%22sort%22%3A%7B%22featured%22%3A-1%2C%22createdAt%22%3A-1%7D%7D%0A",
            success: function (data) {
                let dataArray = data.data;
                for (let i = 0; i < dataArray.length; i++) {
                    let desc = dataArray[i].tagline.substring(0, 50) + '...'
                    let imageUrl = dataArray[i].image.src;
                    $('#products').append('<div class="col-sm-6 col-md-4" id="p_' + i + '"> ' +
                        '<a href="https://shop.wildnut.co/en/shop/' + dataArray[i].slug + '" style="text-decoration: none;"><div class="products-card"> <div class="img-div"> <img alt="" loading="lazy" src="images/product-spot.png" width="317" height="317"> </div> <h2>' + dataArray[i].name + '</h2> <p>' + desc + '</p> </div> </a> </div>')

                    $('#p_' + i + ' .img-div').css("background-image", "url(" + imageUrl + ")");
                }

            }

        });


    });
    $('#gallery').on('DOMSubtreeModified', function (f) {
        let links = $('.j-poster a');
        links.each(function (l) {
            $(this).attr('aria-label', 'insta').attr('href', '#');
        })


    });

</script>


</body>
</html>