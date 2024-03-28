<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12 footer-area">
                <div class="footer-logo"><h3>KULTUREWIN</h3></div>
                <div class="footer-links">
                    <a href="{{ route("home") }}"  class="{{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
                    <a href="{{ route("about") }}"  class="{{ request()->routeIs('about') ? 'active' : '' }}">OUR STORY</a>
                    <a href="{{ route("services") }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">WHAT WE DO</a>
                    <a href="{{ route("book.artist") }}" class="{{ request()->routeIs('book.artist') ? 'active' : '' }}">BOOK ARTIST</a>
                    {{-- <a href="#">BLOGS</a> --}}
                    <a href="{{ route("contact") }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
                    <a href="#">UPCOMING EVENTS/TICKETS</a>
                </div>
                <div class="footer-socials">
                    <div class="social-icon">
                        <a href="https://www.instagram.com/kulturewin?igsh=MWg2ZTZzeGlydDJkZA=="><i class="fa fa-instagram"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/share/Z859kmp6S3WFRNmv/?mibextid=WC7FNe"><i class="fa fa-facebook"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.linkedin.com/in/kulture-win-0799a62ba?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="https://x.com/kulturewin?s=21"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="social-icon">
                        <a href="https://www.youtube.com/@kulturewin"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
                <div class="footer-info-txt">
                    <p>Terms & Conditions - Privacy Policy 2024</p>
                    <p>All Rights Reserved <span>@ Kulturewin</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
<script src="{{ asset('assets/js/accordions.js') }}"></script>
<script src="{{ asset('assets/js/datepicker.js') }}"></script>
<script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/imgfix.min.js') }}"></script> 
<script src="{{ asset('assets/js/slick.js') }}"></script> 
<script src="{{ asset('assets/js/lightbox.js') }}"></script> 
<script src="{{ asset('assets/js/isotope.js') }}"></script> 

<!-- Global Init -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

// Blog slider
$(".dir-arrow .fa-long-arrow-right").on("click", function (e) {
    e.preventDefault();

    if (! $(".blog-menu-area").hasClass("show-last")) {
        countSetBlogItemsCount();

        $(".blog-menu-area").addClass("show-last");
        $(".first-arrow").fadeIn();

        reduceBlogItemsCount();
    }else{
        let clickCount = $(".blog-area").data("postcount");
        
        if (clickCount >= 1) {
            // get the int value of the margin
            let currentMargin = $(".show-last").css("margin-left");
            currentMargin = currentMargin.replace('-','').replace('px','');
            let newMargin = "-" + (Number(currentMargin) + 200) + "px";
            
            // set the new margin to simulate sliding
            $(".show-last").css("margin-left", newMargin);

            // reduce the items count for clicks
            reduceBlogItemsCount();
        }else {
            $(".sec-arrow").fadeOut();
        }
    }
});

$(".dir-arrow .fa-long-arrow-left").on("click", function (e) {
    e.preventDefault();
    
    $(".sec-arrow").fadeIn();

    // reduce margin to slide back
    let clickCount = $(".blog-area").data("postcount");
    let constCount = $(".blog-area").data("postconstcount");

    if (clickCount != constCount) {
        // get the int value of the margin
        let currentMargin = $(".show-last").css("margin-left");
        currentMargin = currentMargin.replace('-','').replace('px','');
        let newMargin = (Number(currentMargin) + 400) + "px";
        console.log(currentMargin, newMargin);  
        // set the new margin to simulate sliding
        $(".show-last").css("margin-left", newMargin);

        // increase the items count for clicks
        increaseBlogItemsCount();
    }else {
        $(".first-arrow").fadeOut();
    }
});  

function countSetBlogItemsCount()
{
    let postsCount = $(".blog-menu").length;
    let clickCount = postsCount/4; //4 is the number that can be viewed per click

    $(".blog-area").data("postcount", Math.round(Number(clickCount))); // can be changed while code is exec
    
    if ($(".blog-area").data("postconstcount") === null) {
        $(".blog-area").data("postconstcount", Math.round(Number(clickCount))); // cannot be changed while code is exec
    }
}

function reduceBlogItemsCount()
{
    let blogCount = $(".blog-area").data("postcount");
    $(".blog-area").data("postcount", Number(blogCount) - 1);
}

function increaseBlogItemsCount()
{
    let blogCount = $(".blog-area").data("postcount");
    $(".blog-area").data("postcount", Number(blogCount) + 1);
}

$(".assoc-btn").click(function(){
    let val = $(this).val();

    if (val === true || val === 'true') {
        $("#artist-label-field").removeClass('hidden-field');
    }else{
        $("#artist-label-field").addClass('hidden-field');
    }
});

//Event partial
$(document).ready(function(){
    $('.event-menu').each(function() {
        let img = $(this).data('bg-img');
        let bgImg = "url('" +img+ "')";

        $(this).css('background', bgImg)
    });
});

$(".book-ticket-btn").click(function(e){
    e.preventDefault();

      let eventID = $(this).data('id');
      let url = $(this).attr('href');

      $.ajax({
        url: url,
        type: 'GET',
        headers: {
          'Accept': 'application/json' // Specify the desired Accept header value
        },
      success: function(response) {
        fillModalWith(response.event)
      },
      error: function(xhr, status, error) {
        console.log(xhr, status, error);
      }
    });

      $('#exampleModal').modal('show');
    });

    $(".close").click(function(){
      $('#exampleModal').modal('hide');
    });

    $("#ticket-qty").on("change", function() {
        var maxValue = parseInt($(this).attr('max'));
        var enteredValue = parseInt($(this).val());
        
        if (enteredValue > maxValue) {
            $(this).val(maxValue);
            alert('Only '+ maxValue +'ticket(s) remaining');
        }

        let price = parseInt($("#unit-price").val());
        let qty = parseInt($(this).val());
        let totalAmount = price * qty;

        $("#ticket-amount").val(totalAmount);
    });

    $(".pay-event-btn").click(function(){
      $('#buy-ticket-form').submit();
    });

    function fillModalWith(event)
    {
        // console.log($('#unit-price').val(), event.ticket.price);
        $('#event').val(event.title);
        $('#unit-price').val(event.ticket.price);
        $('#event-id').val(event.id);
        $('#event-title').text(event.title);
        $("#ticket-qty").attr('max', event.ticket.qty);
    }

    // If you want to pause the animation on hover
    const clientArea = document.querySelector('.client-area');

    clientArea.addEventListener('mouseenter', () => {
        clientArea.style.animationPlayState = 'paused';
    });

    clientArea.addEventListener('mouseleave', () => {
        clientArea.style.animationPlayState = 'running';
    });

    $(".menu-trigger").click(function(){
      $('#events-link').removeClass('hide-nav-item');
    });
</script>
</body>
</html>