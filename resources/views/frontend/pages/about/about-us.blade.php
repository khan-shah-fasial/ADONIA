@extends('frontend.layouts.app')

@section('page.title', '')

@section('page.description', '')

@section('page.type', 'website')

@section('page.content')

<style>
footer {
    background: #bdbec2 !important;
}
</style>

<section class="about_banner_img inner_banner_section">
    <div class="container">
        <div class="heading_inner">
            <h1 class="heading_inner_text">ABOUT US</h1>
        </div>
    </div>
</section>
<div class="wrapp">
    <section class="intro_partner">
        <div class="container">
            <div class="anim-text negative-mt js-main-screen-text main_about_heading">
                <div class="fw-container fw-container-floattext">
                    <div class="anim-text__title js-split-words2">INTRODUCTION</div>
                    <div class="anim-text__desc js-animated-text translation-block text_fotns"> At ADONIA, we navigate
                        the depths to deliver unparalleled marine solutions tailored to meet your every maritime need.
                        With a steadfast commitment to precision, professionalism, and safety, we stand as your trusted
                        partner in the vast expanse of the marine industry. </div>
                </div>
            </div>
            <div class="anim-text negative-mt js-main-screen-text main_about_heading">
                <div class="anim-text__title js-split-words2">YOUR PARTNER</div>
                <div class="anim-text__desc js-animated-text translation-block text_fotns"> Whether you require a
                    comprehensive vessel inspection, expert guidance on regulatory compliance, or support in mitigating
                    risks, ADONIA is here to steer you in the right direction. With a steadfast dedication to excellence
                    and a passion for the sea, we are your trusted partner on <br>
                    <br> the high seas.
                </div>
                <div class="anim-text__desc js-animated-text translation-block text_fotns"> Embark on a journey of
                    excellence with ADONIA. Let us navigate the way to success together. </div>
            </div>
        </div>
    </section>
    <section id="year_pole">
        <!--<div class="row">
            <div class="col-md-12">
                <div class="main-timeline">
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <h3 class="title">Web Designing</h3>
                            <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="#" class="timeline-content">
                            <div class="timeline-year">2022</div>
                            <h3 class="title">Web Development</h3>
                            <p class="description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus lorem, et condimentum neque commodo Integer males uada tellus lorem, et condimentum neque commodo </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="">
            <div class="year_pole_1">
                <div class="row">
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="/assets/images/2013.png">
                    </div>
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">
                            Wins "Leadership Award"
                        </p>
                        <p class="year_pole_content">
                            Founder wins the award in multi-domain forum covering various challengers of industry in
                            India.
                        </p>
                    </div>

                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="/assets/images/2016.png">
                    </div>
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">
                            Adonia Offshore Consultants (AOC)
                        </p>
                        <p class="year_pole_content">
                            Adonia Group starts its dedicated offshore technical consulting company.
                        </p>
                    </div>

                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="/assets/images/2021.png">
                    </div>
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">
                            NEW HORIZONS
                        </p>
                        <p class="year_pole_content">
                            New stakeholders add strength to services provided by AOC.
                        </p>
                    </div>
                </div>
            </div>
            <div class="year_pole_img_div">
                <img class="year_pole_img steps_line" src="/assets/images/year_pole.webp">
            </div>
            <div class="year_pole_2">
                <div class="row">
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">
                            Adonia Group Journey Begins....
                        </p>
                        <p class="year_pole_content">
                            Adonia started as Design Engineering company providing design support services.Company wins
                            the award amongst various consultancy companies in India.
                        </p>
                    </div>
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="/assets/images/2015.png">
                    </div>

                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">
                            Wins "Marine & Offshore Design Consultants on the Year" Award"
                        </p>
                        <p class="year_pole_content">
                            Company wins the award amongst various consultancy companies in India.
                        </p>
                    </div>
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="/assets/images/2018.png">
                    </div>

                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">
                            AOC awarded MWS Project
                        </p>
                        <p class="year_pole_content">
                            Mumbai Trans Harbour Link (MTHL) – Atal Setu Project
                        </p>
                    </div>
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="/assets/images/2023.png">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="year_pole_carousel" class="steps_mobile">
        <div id="pole_carousel" class="owl-carousel owl-theme">
            <div class="item col-md-2 year_pole_img_div">
                <img class="year_pole_img" src="/assets/images/2013_mobile.png" alt="2013">
                <p class="blue_color year_pole_heading">Adonia Group Journey Begins.... </p>
                <p class="year_pole_content">Adonia started as Design Engineering company providing design support
                    services.Company wins the award amongst various consultancy companies in India. </p>
            </div>
            <div class="col-md-2 year_pole_text_div">
                <img class="year_pole_img" src="/assets/images/2015_mobile.png">
                <p class="blue_color year_pole_heading">Wins "Leadership Award"</p>
                <p class="year_pole_content">Founder wins the award in multi-domain forum covering various challengers
                    of industry in India.</p>
            </div>
            <div class="item col-md-2 year_pole_img_div">
                <img class="year_pole_img" src="/assets/images/2016_mobile.png" alt="2016">
                <p class="blue_color year_pole_heading">Wins "Marine & Offshore Design Consultants on the Year" Award"
                </p>
                <p class="year_pole_content">Company wins the award amongst various consultancy companies in India. </p>
            </div>
            <div class="col-md-2 year_pole_text_div">
                <img class="year_pole_img" src="/assets/images/2018_mobile.png">
                <p class="blue_color year_pole_heading">Adonia Offshore Consultants (AOC)</p>
                <p class="year_pole_content">Adonia Group starts its dedicated offshore technical consulting company.
                </p>
            </div>
            <div class="item col-md-2 year_pole_img_div">
                <img class="year_pole_img" src="/assets/images/2021_mobile.png" alt="2021">
                <p class="blue_color year_pole_heading">AOC awarded MWS Project</p>
                <p class="year_pole_content">Mumbai Trans Harbour Link (MTHL) – Atal Setu Project</p>
            </div>
            <div class="col-md-2 year_pole_text_div">
                <img class="year_pole_img" src="/assets/images/2023_mobile.png">
                <p class="blue_color year_pole_heading">NEW HORIZONS</p>
                <p class="year_pole_content">New stakeholders add strength to services provided by AOC.</p>
            </div>
        </div>
    </section>
    <section class="team_sections">
        <div class="career_below_font main_about_heading">
            <h4 class="pbtm0 js-split-words2">Not One Man show</h4>
        </div>
        <div class="main_about_heading spacing41">
            <h4 class="team_fonts1 pbtm0 js-split-words2 team_work">
                <span>Team Work</span>
            </h4>
        </div>
        <div class="career_below_font main_about_heading">
            <h4 class="pbtm0 js-split-words2 blue_color">EXPERTS / SPECIALISTS</h4>
        </div>
        <div class="container expert_specialist_container">
            <div class="row expert_specialist_section">
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">SALVAGE MASTERS</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">OFFSHORE OIL & GAS MASTERS</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">NEW BUILDINGS</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">CARGO SPECIALISTS</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">PORTS</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">INSURANCE</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">SHIP RECYCLING</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="career_below_font main_about_heading">
            <h4 class="pbtm0 js-split-words2 blue_color">DESIGNERS</h4>
        </div>
        <div class="container designers_container">
            <div class="row designers_section">
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">NAVAL ARCHITECTS</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">STRUCTURAL</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">MECHANICAL/ MARINE</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">ELECTRICAL</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team_work_div">
                        <span class="team_work_text">DRAFTSMAN</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="career_below_font main_about_heading">
        <h4 class="pbtm0 js-split-words2"> We are excited about <br> the new beginnings and new ways to serve you </h4>
    </div>
    <section class="platform_abouts gray_bgg">
        <div class="container">
            <div class="display_flex align-items-center">
                <div class="aboutports_left aboutports_left_text-1 padding_60">
                    <ul>
                        <li>Ports <br> Ship Yards </li>
                        <li>Oil and Gas <br> Heavy Lift </li>
                        <li>Salvage <br> Subsea </li>
                        <li>P&I / H&M <br> MWS / TPI </li>
                        <li>Offshore <br> Design Engineering </li>
                        <li>Ship Recycling <br> PMC </li>
                    </ul>
                </div>
                <div class="aboutports_right aboutports_right_img-1">
                    <img src="/assets/images/about_ports.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="platform_abouts platform_abouts_2">
        <div class="main_about_heading padding50">
            <h4 class="js-split-words2">VISION & MISSION </h4>
        </div>
        <div class="display_flex">
            <div class="aboutports_left aboutports_right_text-2">
                <div class="reveal">
                    <div class="image-wrap">
                        <img src="/assets/images/Vision.jpg">
                    </div>
                </div>
                <div class="vission_icons">
                    <img src="/assets/images/mission_icons_white.webp" />
                </div>
            </div>
            <div class="aboutports_right aboutports_right_text-2 paddleft50">
                <p class="text_fotns">
                    <b>VISION</b><br>
                    Benchmarking the standard for excellence, innovation, and reliability in the maritime industry.
                    We envision a world where every voyage is safeguarded, every asset is protected,
                    and every maritime operation is conducted with precision and integrity.
                </p>
                <p class="text_fotns">
                    <b>MISSION</b><br>
                    Our mission is to provide unparalleled marine solutions that exceed the expectations of our clients
                    while upholding the highest standards of professionalism, safety, and environmental stewardship.
                    We are committed to delivering comprehensive, accurate, and timely services tailored to the unique
                    needs of each client, empowering them to navigate the complexities of the maritime landscape with
                    confidence and success. Through continuous innovation, strategic partnerships, and a steadfast
                    dedication to quality, we strive to be the trusted partner of choice for all maritime needs,
                    ensuring the safety, efficiency, and sustainability of maritime operations worldwide.
                </p>
            </div>
        </div>
        <div class="main_about_heading padding50">
            <h4 class="js-split-words2">Our Values </h4>
        </div>
        <div class="platform_abouts_3">
            <div class="display_flex">
                <div class="aboutports_right aboutports_right_text-2 paddright50 paddingleft53">
                    <p class="text_fotns">
                        <b>Uncompromising Quality</b><br>
                        Quality is not just a commitment but a way of life for us at ADONIA. We adhere to the highest
                        industry
                        standards and employ cutting-edge technology to ensure that every project we undertake is
                        executed with
                        precision and integrity. Our unwavering dedication to quality sets us apart and ensures that
                        your assets
                        are safeguarded with the utmost care.
                    </p>
                    <p class="text_fotns">
                        <b>Client - Centric Approach</b><br>
                        Understanding the unique needs of our clients is at the heart of what we do.
                        We believe in fostering strong, collaborative partnerships built on trust, transparency,
                        and open communication. Whether you operate in shipping, offshore energy, or marine insurance,
                        our tailored solutions are designed to address your specific challenges and drive success.
                    </p>
                </div>
                <div class="aboutports_left aboutports_right_text-2">
                    <div class="reveal">
                        <div class="image-wrap">
                            <img src="/assets/images/Our-Values.jpg">
                        </div>
                    </div>
                    <div class="vission_icons values_icons left50">
                        <img src="/assets/images/vission_icons_white.webp" />
                    </div>
                </div>
            </div>
        </div>
        <div class="platform_abouts_4 paddingleft53 paddleft50">
            <p class="text_fotns">
                <b>Innovation And Adaptability</b><br>
                In a dynamic and ever-evolving industry, innovation and adaptability are paramount.
                At ADONIA, we embrace change and continuously strive to innovate our processes and services.
                By staying ahead of the curve, we empower our clients with the insights and solutions needed
                to navigate the complexities of the maritime landscape effectively.
            </p>
            <p class="text_fotns">
                <b> Committed To Safety</b><br>
                Safety is non-negotiable in the marine industry, and we prioritize it above all else.
                From our rigorous safety protocols to our ongoing training initiatives, we are unwavering
                in our commitment to ensuring the well-being of our team, our clients,
                and the environment in which we operate.
            </p>
        </div>
    </section>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
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
    $("#owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true, // Show navigation buttons
        autoplay: true, // Autoplay
        autoplayTimeout: 3000, // Autoplay interval in milliseconds
        autoplayHoverPause: true, // Pause autoplay on hover
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});
</script>

@endsection