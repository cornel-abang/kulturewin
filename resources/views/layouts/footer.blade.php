<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12 footer-area">
                <div class="footer-logo"><h3>KULTUREWIN</h3></div>
                <div class="footer-links">
                    <a href="{{ route("home") }}">HOME</a>
                    <a href="{{ route("about") }}">OUR STORY</a>
                    <a href="{{ route("services") }}">WHAT WE DO</a>
                    {{-- <a href="#">BLOGS</a> --}}
                    <a href="{{ route("contact") }}">CONTACT</a>
                    <a href="#">UPCOMING EVENTS/TICKETS</a>
                </div>
                <div class="footer-socials">
                    <div class="social-icon">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <div class="social-icon">
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="social-icon">
                        <i class="fa fa-linkedin"></i>
                    </div>
                    <div class="social-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="social-icon">
                        <i class="fa fa-youtube-play"></i>
                    </div>
                </div>
                <div class="footer-info-txt">
                    <p>Terms & Conditions - Privacy Policy 2024</p>
                    <p>All Rights Reserved by <span>Kulturewin</span></p>
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

// Accordion
 const faqItems = document.querySelectorAll('.faq-item');

 faqItems.forEach(item => {
   const question = item.querySelector('.faq-question');
   const answer = item.nextElementSibling;
   const icon = item.querySelector('i');

   item.addEventListener('click', (e) => {
    e.preventDefault();

     faqItems.forEach(otherItem => {
       if (otherItem !== item) {
         const otherAnswer = otherItem.nextElementSibling;
        const otherIcon = otherItem.querySelector('i');

        otherAnswer.classList.remove('active');
         otherIcon.classList.remove('active');
         otherAnswer.style.maxHeight = "0";
       }
     });

     answer.classList.toggle('active');
    icon.classList.toggle('active');
     if (answer.classList.contains('active')) {
        console.log(answer);
       answer.style.maxHeight = answer.scrollHeight + "px";
       answer.style.paddingBottom = "50px";
       answer.style.paddingTop = "20px";
       question.style.color = "#F57141";
       item.style.borderBottom = "none";
     } else {
       answer.style.maxHeight = "0";
       answer.style.paddingBottom = "0px";
       answer.style.paddingTop = "0px";
       question.style.color = "#434A57";
       item.style.borderBottom = "0.5px solid #000000 !important";
     }
   });
});

$(".assoc-btn").click(function(){
    let val = $(this).val();

    if (val === true || val === 'true') {
        $("#artist-label-field").removeClass('hidden-field');
    }else{
        $("#artist-label-field").addClass('hidden-field');
    }
});

</script>
</body>
</html>