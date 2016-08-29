$(document).ready(function () {


        $("#logreg").hide();
        $("#logregs").hide();
        getcartcount();
        getcarttotal();
        getcartdata();
        $('[data-toggle="tooltip"]').tooltip();

        $(document).keydown(function (e) {
                // ESCAPE key pressed
                if (e.keyCode == 27) {
                        $(".cart_box").fadeOut(500);
                }
        });

        /*                  * cart remove funciton . remove individual item from cart
         */
        $("#cart_box").on("click", ".drop_cart>.cart_item>.remove_item", function () {

                var cartid = $(this).attr('cartid');
                var canname = $(this).attr('canname');
                removecart(cartid, canname);


        });


  $('.product-detail').slick({
                        slidesToShow: 5,
                        autoplay: false,
                        autoplaySpeed: 4000,
                        slidesToScroll: 1,
                        pauseOnHover: false,
                        prevArrow: '<i id="prev_slide_3"><img src="images/prev.png"></i>',
                        nextArrow: '<i id="next_slide_3"><img src="images/next.png"></i>',
                        responsive: [
                                {
                                        breakpoint: 1000,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 3
                                        }
                                },
                                {
                                        breakpoint: 800,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 2
                                        }
                                },
                                {
                                        breakpoint: 480,
                                        settings: {
                                                centerMode: false,
                                                slidesToShow: 1
                                        }
                                }
                        ]
                });

                $(".btn").on("click", function() {

                        var $button = $(this);
                        var oldValue = $("#after").val();

                        if ($button.text() == "+") {
                                var newVal = parseFloat(oldValue) + 1;
                        } else {
                                // Don't allow decrementing below zero
                                if (oldValue > 0) {
                                        var newVal = parseFloat(oldValue) - 1;
                                        if (newVal == 0)
                                        {
                                                newVal = 1;
                                        }
                                } else {
                                        newVal = 1;
                                }
                        }
                        $("#after").val(newVal);
                });


                $("#after").keydown(function(e) {
                        // Allow: backspace, delete, tab, escape, enter and .
                        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                                // Allow: Ctrl+A, Command+A
                                        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                                        // Allow: home, end, left, right, down, up
                                                (e.keyCode >= 35 && e.keyCode <= 40)) {
                                        // let it happen, don't do anything
                                        return;
                                }
                                // Ensure that it is a number and stop the keypress
                                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                                        e.preventDefault();
                                }
                        });

                /***************   function related to Cart     ***********************/

                $(".add_to_cart").click(function() {
                        //var baseurl = "<?php echo Yii::app()->baseUrl; ?>";
                        var id = $(this).attr('id');
                        var canname = $("#cano_name_" + id).val();
                        var qty = $("#after").val();//qnty
                         $.ajax({
                                type: "POST",
                                //url: 'http://localhost/dealssupermarket/index.php/Cart/Buynow',
                                url: baseurl + 'Cart/Buynow',
                                data: {cano_name: canname, qty: qty},
                                success: function(data)
                                {

                                        getcartcount();
                                        getcarttotal();
                                        // alert(data);
                                        // $('.option_errors').html("").hide();
                                        $(".cartbox").show();

                                        $(".cartbox").html(data);
                                        $("html, body").animate({scrollTop: 0}, "slow");


                                }
                               
                        });
                });


});


function login() {
        document.getElementById("form_id").submit();
}
function getcartcount() {

        $.ajax({
                type: "POST",
                cache: 'false',
                async: false,
                url: baseurl + 'Cart/Getcartcount',
                data: {}
        }).done(function (data) {
                $(".cart_items").html(data);
                hideLoader();
        });
}
function getcarttotal() {

        $.ajax({
                type: "POST",
                cache: 'false',
                async: false,
                url: baseurl + 'Cart/Getcarttotal',
                data: {}
        }).done(function (data) {
                $(".amount").html(data);
                hideLoader();
        });
}
function removecart(cartid, canname) {

        $.ajax({
                type: "POST",
                cache: 'false',
                async: false,
                url: baseurl + 'Cart/Removecart',
                data: {cartid: cartid, cano_name: canname}
        }).done(function (data) {
                getcartcount();
                getcarttotal();
                //$(".cart_box").html(data);
                //alert(data);
                if (data == 'Cart box is Empty') {
                        window.location.href = baseurl + "Cart/Mycart";
                } else {
                        location.reload();
                }
                hideLoader();
        });
}

function getcartdata() {
        $.ajax({
                type: "POST",
                cache: 'false',
                async: false,
                url: baseurl + 'Cart/Selectcart',
                data: {}
        }).done(function (data) {
                $(".cart_box").html(data);
                //$(".cart_box").show('fast');
                hideLoader();
        });
}
function showLoader() {
        $('.over-lay').show();
}
function hideLoader() {
        $('.over-lay').hide();
}



  

              
               



       


