<!-- ***** Menu Area Starts ***** -->
<section class="section faq-section-box" id="">
    <div class="faq-area">
        <h3>Any questions? Check out the FAQ</h3>
        <p>We're a team of passionate experts dedicated to pushing boundaries and exceeding expectations.</p>
        <img src="{{ asset('assets/images/arrow.png')}}">
    </div>
    <div class="faq-container2">
        @foreach ($faqs as $faq)
        <div class="faq-item">
            <div class="faq-question">{{ $faq->question }}</div>
            <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
        </div>
        <div class="faq-answer">
            {{ $faq->answer }}
        </div>
        @endforeach
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->
<script>

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
</script>