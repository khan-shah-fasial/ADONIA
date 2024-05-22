<?php include 'header.php';?>

    <section class="contact_banner inner_banner_section">
        <div class="container">
      <div class="heading_inner">
        <h1 class="heading_inner_text">Contact Us</h1>
      </div>
      </div>
    </section> 

    <div class="anim-text negative-mt js-main-screen-text pt-md-5 pt-4">
      <div class="container">
        <div class="anim-text__desc js-animated-text translation-block font-28 padd200">We're Social, so if you'd like to talk about your project, get in touch </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="text-center font-28 mb-22 main_about_heading">
          <h3 class="js-split-words2">ADONIA OFFSHORE CONSULTANTS PVT. LTD.</h3>
        </div>
        <div class="rightlinks">
          <ul>
            <li>
              <i class="fa-solid fa-phone"></i>
              <a href="tel:+91 22 4962129"> +91 22 4962129</a> / <a href="tel:+91 22 4962129">+91-9920148497</a>
            </li>
            <li>
              <i class="fa-solid fa-map-marker-alt"></i>
              <a href="mailto:info@adoniaoffshore.com">info@adoniaoffshore.com</a>
            </li>
            <li>
              <i class="fa-solid fa-globe"></i>
              <a href="www.adoniaoffshore.com">www.adoniaoffshore.com</a>
            </li>
          </ul>
        </div>
        <div class="contact_address col-md-6">
          <div class="footerleft">
            <div>
              <i class="fa-solid fa-map-marker-alt"></i>
            </div>
            <span>
              <strong>Head Office: </strong>105, Raheja Plaza, <br> Shah Industrial Estate, Off New Link Rd, <br> Andheri West, Mumbai-400053, India </span>
          </div>
          <div class="footerleft">
            <div>
              <i class="fa-solid fa-map-marker-alt"></i>
            </div>
            <span>
              <strong>Branch Office: </strong>1066, Heera Panna Shopping Center, Hiranandani Gardens, Powai, Mumbai - 400076, India </span>
          </div>
        </div>
      </div>
    </div>
    <div id="contact_us_form" class="display_flex formpage align_center section-fadeleft buisness_section_container_left">
      <div class="col-md-6">
        <div class="contactform fadeleft">
          <form action="">
            <input type="text" id="fname" name="fname" placeholder="Full Name">
            <input type="tel" id="lname" name="lname" placeholder="Contact No.">
            <input type="email" id="mail" name="mail" placeholder="Email Id">
            <textarea type="text" id="message" name="message" placeholder="Message" rows="4"></textarea>
            <button class="custom_button">Submit</button>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="reveal">
          <div class="image-wrap">
            <img class="height100" src="img/contact_Image.jpg">
          </div>
        </div>
      </div>
    </div>
    
    <?php include 'footer.php';?>
    
     <script>
        document.addEventListener("DOMContentLoaded", function () {
  const options = {
    root: null,
    rootMargin: "0px",
    threshold: 0.4
  };

  // IMAGE ANIMATION

  let revealCallback = (entries) => {
    entries.forEach((entry) => {
      let container = entry.target;

      if (entry.isIntersecting) {
        console.log(container);
        container.classList.add("animating");
        return;
      }

      if (entry.boundingClientRect.top > 0) {
        container.classList.remove("animating");
      }
    });
  };

  let revealObserver = new IntersectionObserver(revealCallback, options);

  document.querySelectorAll(".reveal").forEach((reveal) => {
    revealObserver.observe(reveal);
  });
  
        });


    </script>
    