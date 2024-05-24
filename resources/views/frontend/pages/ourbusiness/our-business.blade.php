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

<section class="inner_banner_section" style="background-image: url('@isset($businessDetails->banners){{ asset('storage/' . $businessDetails->banners) }}@endisset')">
    <div class="container">
        <div class="heading_inner">
            <h1 class="heading_inner_text">OUR BUSINESS</h1>
        </div>
    </div>
</section>
<div class="our_buisness_section pt-5 pb-5">
@foreach ($businessSteps as $index => $steps)
    @php
        $isOdd = ($index + 1) % 2 != 0;
    @endphp
    @if ($isOdd)
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left buisness_section_img_left">
            <img src="@isset($steps['image']){{ asset('storage/' . $steps['image']) }}@endisset" />
        </div>
        <div class="aboutports_right paddright50 fadeup top40s">
            @if (isset( $steps['title'] ))
            <h3 class="buinsness_hed">{{ $index + 1 }}. {{ $steps['title'] }}</h3>
            @endif
            <div class="buisness_list">

                @if (isset( $steps['text1'] ))
                    <div class="col-md-5">
                        <div>
                            <span>1</span>
                            <p>{{ $steps['text1'] }}</p>
                        </div>
                    </div>
                @endif
                @if (isset( $steps['text2'] ))
                    <div class="col-md-5">
                        <div>
                            <span>2</span>
                            <p>{{ $steps['text2'] }}</p>
                        </div>
                    </div>
                @endif
                @if (isset( $steps['text3'] ))
                    <div class="col-md-5">
                        <div>
                            <span>3</span>
                            <p>{{ $steps['text3'] }}</p>
                        </div>
                    </div>
                @endif    

            </div>
            <a data-bs-toggle="modal" href="#modal_popup{{ $index + 1 }}" class="work__link">Read More</a>
        </div>
        
    </div>
    @else
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right paddright50 fadeup paddingleft120 top40s">
            @if (isset( $steps['title'] ))
                <h3 class="buinsness_hed">{{ $index + 1 }}. {{ $steps['title'] }}</h3>
            @endif
            <div class="buisness_list">
                @if (isset( $steps['text1'] ))
                    <div class="col-md-5">
                        <div>
                            <span>1</span>
                            <p>{{ $steps['text1'] }}</p>
                        </div>
                    </div>
                @endif
                @if (isset( $steps['text2'] ))
                    <div class="col-md-5">
                        <div>
                            <span>2</span>
                            <p>{{ $steps['text2'] }}</p>
                        </div>
                    </div>
                @endif
                @if (isset( $steps['text3'] ))
                    <div class="col-md-5">
                        <div>
                            <span>3</span>
                            <p>{{ $steps['text3'] }}</p>
                        </div>
                    </div>
                @endif
          

            </div>
            <a data-bs-toggle="modal" href="#modal_popup{{ $index + 1 }}" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="@isset($steps['image']){{ asset('storage/' . $steps['image']) }}@endisset" />
        </div>
    </div>
    @endif
    <!-- POPUP MODAL -->
    <div class="modal_popup1 modal fade" id="modal_popup{{ $index + 1 }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel{{ $index + 1 }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel{{ $index + 1 }}">{{ $steps['title'] }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{ $steps['description'] }}
                </div>
            </div>
        </div>
    </div>
    <!-- POPUP MODAL -->
@endforeach


</div>

<!--POPUP MODAL 1-->
<div class="modal_popup1 modal fade" id="modal_popup1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">PORTS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Design Engineering</li>
                    <li>Third Party Inspections (TPI)</li>
                    <li>Marine Warranty Surveys</li>
                    <li>Feasibility Study</li>
                    <li>Valuation of assets</li>
                    <li>Chartered Engineering Services</li>
                    <li>JH 143 Audit (For Insurance Risk Management)</li>
                    <li>National Safety In Ports Committee (NSPC) Compliance and Approvals</li>
                    <li>Oil Spill Response Equipment & Coast Guard Clearance</li>
                    <li>ISPS / IRS Compliance</li>
                    <li>Hydrography Survey (NHO)</li>
                    <li>Ministry Of Home Affairs (MOHA) Clearances</li>
                    <li>Customs Clearances</li>
                    <li>VTS / Radio Control / Wireless Equipment – Procurement and Installation</li>
                    <li>AIDS to Navigation (Buoys, lights) – Procurement and Installation</li>
                    <li>Port Management Services & Harbor Craft Leasing</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 1-->
<!--POPUP MODAL 2-->
<div class="modal_popup1 modal fade" id="modal_popup2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">VESSEL OWNERS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Ship Design / Retrofitting</li>
                    <li>Audits & Inspections</li>
                    <li>Feasibility Studies</li>
                    <li>Plans & Manuals</li>
                    <li>Dynamic Positioning (DP) Services</li>
                    <li>Workshop support</li>
                    <li>Dry Dock/ New build supervision</li>
                    <li>Bunker / Draft Survey</li>
                    <li>Marine Warranty Services</li>
                    <li>Insurance Claims Consulting</li>
                    <li>Underwater Videography, Inspection and Repairs</li>
                    <li>Green Recycling</li>
                    <li>Valuation</li>
                    <li>Port Captaincy</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 2-->
<!--POPUP MODAL 3-->
<div class="modal_popup1 modal fade" id="modal_popup3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">SHIP YARDS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Design Engineering</li>
                    <li>JH 143 Audits</li>
                    <li>Operation & Safety Audits</li>
                    <li>Third Party Inspections (TPI)</li>
                    <li>Marine warranty surveys for yard infrastructure and equipment</li>
                    <li>Valuation (Vessels, Yards, Ports etc.)</li>
                    <li>Lenders Independent Engineer (LIE)</li>
                    <li>Feasibility study for yard infrastructure</li>
                    <li>Transportation Engineering (Loadout, Sail-away etc.)</li>
                    <li>Deputation of Naval Architects / Design Engineers / QA / QC etc</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 3-->
<!--POPUP MODAL 4-->
<div class="modal_popup1 modal fade" id="modal_popup4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">LOGISTICS / HEAVY LIFT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Port Captaincy</li>
                    <li>Marine Warranty Surveys</li>
                    <li>Lifting / Loading / Lashing Calculations</li>
                    <li>Loading / Lashing / Dimension Check Survey</li>
                    <li>Transportation Engineering (Loadout, Sea-fastening, Sail-away etc.)</li>
                    <li>Route Surveys</li>
                    <li>Chartered Engineering Services</li>
                    <li>Workshop support</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 4-->
<!--POPUP MODAL 5-->
<div class="modal_popup1 modal fade" id="modal_popup5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">INSURANCE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Claims</li>
                    <li>Marine Warranty Surveys</li>
                    <li>Draft and Bunker quantification survey</li>
                    <li>Oil Contamination / Pollution</li>
                    <li>Salvage Consultancy</li>
                    <li>Incident Investigation</li>
                    <li>Condition & Valuation (C&V)</li>
                    <li>Risk Management</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 5-->
<!--POPUP MODAL 6-->
<div class="modal_popup1 modal fade" id="modal_popup6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">OIL AND GAS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Transportation and Installation (T&I) Engineering</li>
                    <li>Marine Warranty Surveys (MWS)</li>
                    <li>Third Party Inspections (TPI)</li>
                    <li>Pipeline Engineering</li>
                    <li>Mooring / Motion Analysis</li>
                    <li>Chartered engineering services</li>
                    <li>Third party inspection for rigs, platforms and vessels</li>
                    <li>Suitability surveys for oil field vessels</li>
                    <li>Valuation of offshore assets</li>
                    <li>Towage warranty surveys</li>
                    <li>Risk Management – HAZID / HAZOP</li>
                    <li>Audits & Inspections</li>
                    <li>Valuation</li>
                    <li>Chartered Engineering Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 6-->
<!--POPUP MODAL 7-->
<div class="modal_popup1 modal fade" id="modal_popup7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">BANKS</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Lenders Independent Engineer (LIE)</li>
                    <li>Due Diligence</li>
                    <li>Valuation (Vessels, Yards, Ports etc.)</li>
                    <li>Risk Management</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 7-->
<!--POPUP MODAL 8-->
<div class="modal_popup1 modal fade" id="modal_popup8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">SHIP RECYCLING</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Development of Inventory of Hazardous Materials (IHM)</li>
                    <li>Preparation of SRFP & SRP</li>
                    <li>Compliance Monitoring Team (CMT)</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 8-->
<!--POPUP MODAL 9-->
<div class="modal_popup1 modal fade" id="modal_popup9" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">SUBSEA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li> Underwater Videography, Inspection and Repairs</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 9-->
<!--POPUP MODAL 10-->
<div class="modal_popup1 modal fade" id="modal_popup10" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">SALVAGE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li> Salvors</li>
                    <li> Salvage consultants</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 10-->
<!--POPUP MODAL 11-->
<div class="modal_popup1 modal fade" id="modal_popup11" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">GEOTECHNICAL & COASTAL ENGINEERING </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li>Port Masterplan</li>
                    <li>Dredging PMC and Monitoring</li>
                    <li>Traffic Study and Transaction advisory</li>
                    <li>Shoreline protection and structures</li>
                    <li>Decision support for flood control</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 11-->
<!--POPUP MODAL 12-->
<div class="modal_popup1 modal fade" id="modal_popup12" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">ENVIRONMENT MANAGEMENT</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="modal_popup_list">
                    <li> Environment Impact Assessment</li>
                    <li> Waste management</li>
                    <li> Environmental Monitoring and Audit</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--POPUP MODAL 12-->



@endsection