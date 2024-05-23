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
@php
var_dump($aboutDetails);
@endphp
<section class="inner_banner_section" style=" background-image:url('{{ asset('storage/' . $aboutDetails->banners) }}')">
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
                    <div class="anim-text__desc js-animated-text translation-block text_fotns"> {!!
                        $introduction['intro'] !!} </div>
                </div>
            </div>
            <div class="anim-text negative-mt js-main-screen-text main_about_heading">
                <div class="anim-text__title js-split-words2">YOUR PARTNER</div>
                <div class="anim-text__desc js-animated-text translation-block text_fotns"> {!! $introduction['partner']
                    !!} </div>
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
                        <img class="year_pole_img" src="{{ asset('storage/' . $steps[0]['image']) }}">
                    </div>
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">{!! $steps[1]['title'] !!}</p>
                        <p class="year_pole_content">{!! $steps[1]['description'] !!}</p>
                    </div>

                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="{{ asset('storage/' . $steps[2]['image']) }}">
                    </div>
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">{!! $steps[3]['title'] !!}</p>
                        <p class="year_pole_content">{!! $steps[3]['description'] !!}</p>
                    </div>

                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="{{ asset('storage/' . $steps[4]['image']) }}">
                    </div>
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">{!! $steps[5]['title'] !!}</p>
                        <p class="year_pole_content">{!! $steps[5]['description'] !!}</p>
                    </div>
                </div>
            </div>
            <div class="year_pole_img_div">
                <img class="year_pole_img steps_line" src="/assets/images/year_pole.webp">
            </div>
            <div class="year_pole_2">
                <div class="row">
                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">{!! $steps[0]['title'] !!}</p>
                        <p class="year_pole_content">{!! $steps[0]['description'] !!}</p>
                    </div>
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="{{ asset('storage/' . $steps[1]['image']) }}">
                    </div>

                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">{!! $steps[2]['title'] !!}</p>
                        <p class="year_pole_content">{!! $steps[2]['description'] !!}</p>
                    </div>
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="{{ asset('storage/' . $steps[3]['image']) }}">
                    </div>

                    <div class="col-md-2 year_pole_text_div">
                        <p class="blue_color year_pole_heading">{!! $steps[4]['title'] !!}</p>
                        <p class="year_pole_content">{!! $steps[4]['description'] !!}</p>
                    </div>
                    <div class="col-md-2 year_pole_img_div">
                        <img class="year_pole_img" src="{{ asset('storage/' . $steps[5]['image']) }}">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="year_pole_carousel" class="steps_mobile">
        <div id="pole_carousel" class="owl-carousel owl-theme">
            <div class="item col-md-2 year_pole_img_div">
                <img class="year_pole_img" src="{{ asset('storage/' . $steps[0]['image']) }}" alt="2013">
                <p class="blue_color year_pole_heading">{!! $steps[0]['title'] !!}</p>
                <p class="year_pole_content">{!! $steps[0]['description'] !!}</p>
            </div>
            <div class="col-md-2 year_pole_text_div">
                <img class="year_pole_img" src="{{ asset('storage/' . $steps[1]['image']) }}">
                <p class="blue_color year_pole_heading">{!! $steps[1]['title'] !!}</p>
                <p class="year_pole_content">{!! $steps[1]['description'] !!}</p>
            </div>
            <div class="item col-md-2 year_pole_img_div">
                <img class="year_pole_img" src="{{ asset('storage/' . $steps[2]['image']) }}" alt="2016">
                <p class="blue_color year_pole_heading">{!! $steps[2]['title'] !!}</p>
                <p class="year_pole_content">{!! $steps[2]['description'] !!}</p>
            </div>
            <div class="col-md-2 year_pole_text_div">
                <img class="year_pole_img" src="{{ asset('storage/' . $steps[3]['image']) }}">
                <p class="blue_color year_pole_heading">{!! $steps[3]['title'] !!}</p>
                <p class="year_pole_content">{!! $steps[3]['description'] !!}</p>
            </div>
            <div class="item col-md-2 year_pole_img_div">
                <img class="year_pole_img" src="{{ asset('storage/' . $steps[4]['image']) }}" alt="2021">
                <p class="blue_color year_pole_heading">{!! $steps[4]['title'] !!}</p>
                <p class="year_pole_content">{!! $steps[4]['description'] !!}</p>
            </div>
            <div class="col-md-2 year_pole_text_div">
                <img class="year_pole_img" src="{{ asset('storage/' . $steps[5]['image']) }}">
                <p class="blue_color year_pole_heading">{!! $steps[5]['title'] !!}</p>
                <p class="year_pole_content">{!! $steps[5]['description'] !!}</p>
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
                @isset($teams['expert'])
                    @foreach ($teams['expert'] as $expert)
                    <div class="col-md-4">
                        <div class="team_work_div">
                            <span class="team_work_text">{{ $expert }}</span>
                        </div>
                    </div>
                    @endforeach
                @endisset
            </div>

        </div>
        <div class="career_below_font main_about_heading">
            <h4 class="pbtm0 js-split-words2 blue_color">DESIGNERS</h4>
        </div>
        <div class="container designers_container">
            <div class="row designers_section">
                @isset($teams['expert'])
                    @foreach ($teams['designers'] as $designer)
                    <div class="col-md-4">
                        <div class="team_work_div">
                            <span class="team_work_text">{{ $designer }}</span>
                        </div>
                    </div>
                    @endforeach
                @endisset
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
                {!! $missionVision['mission'] !!}
                
            </div>
        </div>
        <div class="main_about_heading padding50">
            <h4 class="js-split-words2">Our Values </h4>
        </div>
        <div class="platform_abouts_3">
            <div class="display_flex">
                <div class="aboutports_right aboutports_right_text-2 paddright50 paddingleft53"> {!! $ourvalues['values'] !!} </div>
                <div class="aboutports_left aboutports_right_text-2">
                    <div class="reveal">
                        <div class="image-wrap">
                            <img src="{{ asset('storage/' . $ourvalues['img']) }}">
                        </div>
                    </div>
                    <div class="vission_icons values_icons left50">
                        <img src="/assets/images/vission_icons_white.webp" />
                    </div>
                </div>
            </div>
        </div>
        <div class="platform_abouts_4 paddingleft53 paddleft50">
        {!! $ourvalues['values2'] !!}
        
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