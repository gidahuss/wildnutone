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
                                                                                                           src="images/social/icon-1.png"
                                                                                                           width="32"
                                                                                                           height="32"></a>
                    <a href="https://www.instagram.com/wildwildnut/" target="_blank" aria-label="insta"><img alt=""
                                                                                                             src="images/social/icon-2.png"
                                                                                                             width="32"
                                                                                                             height="32"></a>
                    <a href="https://vm.tiktok.com/ZSe2McK8n/" target="_blank" aria-label="tiktok"><img alt=""
                                                                                                        src="images/social/icon-3.png"
                                                                                                        width="32"
                                                                                                        height="32"></a>
                    <a href="https://www.youtube.com/channel/UCUfkeRXSqFsisgsf8BEdGgg" target="_blank"
                       aria-label="youtube"><img alt=""
                                                 src="images/social/icon-4.png"
                                                 width="32"
                                                 height="32"></a>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <ul class="col-12">
                    <li style="display: table;margin: 0 auto">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#subscription">Subscription with email</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--Main Footer Started-->

</div>
<div class="modal fade" id="subscription" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Subscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./forms/subscription.php" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscript</button>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script>
    var myModal = new bootstrap.Modal(document.getElementById('subscription'), {
        keyboard: false
    })


    // get
    let modal_storage = localStorage.getItem('modal');
    if (!modal_storage) {
        myModal.toggle();
        localStorage.setItem('modal', 'true');  // set
    }


    $(document).ready(function () {

        $.ajax({
            type: "GET",
            dataType: "json",
            data: {name: name},
            url: "https://shop.packman.app/api/products?force=0&query=%7B%22where%22%3A%7B%22AND%22%3A%5B%7B%22store%22%3A%2261dbcea243eb310026a732c2%22%7D%5D%7D%2C%22limit%22%3A15%2C%22sort%22%3A%7B%22featured%22%3A-1%2C%22createdAt%22%3A-1%7D%7D%0A",
            success: function (data) {
                let dataArray = data.data;
                for (let i = 0; i < dataArray.length; i++) {

                    let imageUrl = dataArray[i].image.src;
                    $('#products').append('<div class="col-sm-6 col-md-4" id="p_'+i+'"> ' +
                        '<a href="https://shop.wildnut.co/en/shop/' + dataArray[i].slug + '" style="text-decoration: none;"><div class="products-card"> <div class="img-div"> <img alt="" loading="lazy" src="images/product-spot.png" width="317" height="317"> </div> <h4>' + dataArray[i].name + '</h4> <p>' + dataArray[i].tagline + '</p> </div> </a> </div>')

                    $('#p_'+i+ ' .img-div').css("background-image", "url(" + imageUrl + ")");
                }

            }

        });


        $.ajax({
            type: "GET",
            dataType: "json",
            url: "https://www.instagram.com/mohamad___murad/?__a=1&__d=dis",
            success: function (data) {

                console.log(data);
            }

        });
    });

</script>


</body>
</html>