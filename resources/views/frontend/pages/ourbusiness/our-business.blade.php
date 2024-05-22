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

<section class="buisness_banner_img inner_banner_section">
    <div class="container">
        <div class="heading_inner">
            <h1 class="heading_inner_text">OUR BUSINESS</h1>
        </div>
    </div>
</section>
<div class="our_buisness_section pt-5 pb-5">
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left buisness_section_img_left">
            <img src="/assets/images/ports.jpg" />
        </div>
        <div class="aboutports_right paddright50 fadeup top40s">
            <h3 class="buinsness_hed">1. Ports</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Design Engineering</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Third Party Inspections (TPI)</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Marine Warranty Surveys</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup1" class="work__link">Read More</a>
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right paddright50 fadeup paddingleft120 top40s">
            <h3 class="buinsness_hed">2. VESSEL OWNERS</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Ship Design / Retrofitting</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Audits & Inspections</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Feasibility Studies</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup2" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="/assets/images/Vessel-Owners.jpg" />
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left buisness_section_img_left">
            <img src="/assets/images/SHIPYARD.jpg" />
        </div>
        <div class="aboutports_right paddright50 fadeup top40s">
            <h3 class="buinsness_hed">3. SHIP YARDS</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Design Engineering</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>JH 143 Audits</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Operation & Safety Audits</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup3" class="work__link">Read More</a>
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right paddright50 fadeup paddingleft120 top40s">
            <h3 class="buinsness_hed">4. LOGISTICS/ HEAVY LIFT</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Port Captaincy</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Marine Warranty Surveys</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Lifting / Loading / Lashing Calculations </p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup4" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="/assets/images/Logistics-&-heavy-Lift.jpg" />
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left  buisness_section_img_left ">
            <img src="/assets/images/Insurance_img.jpg" />
        </div>
        <div class="aboutports_right paddright50 fadeup top40s">
            <h3 class="buinsness_hed">5. INSURANCE</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Claim Assessment</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Marine Warranty Surveys</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Draft and Bunker Quantification Survey</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup5" class="work__link">Read More</a>
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right fadeup paddright50 paddingleft120 top40s">
            <h3 class="buinsness_hed">6. OIL AND GAS</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Transportation and Installation (T&I) Engineering</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Marine Warranty Surveys (MWS)</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Third Party Inspections (TPI)</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup6" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="/assets/images/oil-gas.jpg" />
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left  buisness_section_img_left">
            <img src="/assets/images/banks.jpg" />
        </div>
        <div class="aboutports_right paddright50 fadeup top40s">
            <h3 class="buinsness_hed">7. BANKS</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Lenders Independent Engineer (LIE)</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Due Diligence</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Valuation (Vessels, Yards, Ports etc.)</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup7" class="work__link">Read More</a>
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right paddright50 fadeup paddingleft120 top40s">
            <h3 class="buinsness_hed">8. SHIP RECYCLING</h3>
            <div class="buisness_list">
                <div class="col-12">
                    <div>
                        <span>1</span>
                        <p>Development of Inventory of Hazardous Materials (IHM)</p>
                    </div>
                </div>
                <div class="col-12">
                    <div>
                        <span>2</span>
                        <p>Preparation of SRFP & SRP</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup8" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="/assets/images/Ship-Recycling.jpg" />
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left  buisness_section_img_left">
            <img src="/assets/images/SUBSEA.jpg" />
        </div>
        <div class="aboutports_right paddright50 fadeup subsea">
            <h3 class="buinsness_hed">9. SUBSEA</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Underwater for Videography, </p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Inspection and Repairs </p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup9" class="work__link">Read More</a>
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right paddright50 fadeup paddingleft120 top40s">
            <h3 class="buinsness_hed">10. SALVAGE</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Salvors</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Salvage Consultancy</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup10" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="/assets/images/Salvage.jpg" />
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_left">
        <div class="aboutports_left  buisness_section_img_left">
            <img src="/assets/images/GEOTECHNICAL-&-COASTAL-ENGINEERING.jpg" />
        </div>
        <div class="aboutports_right paddright50 fadeup top40s">
            <h3 class="buinsness_hed">11. GEOTECHNICAL & COASTAL ENGINEERING</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Port Masterplan</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Dredging PMC and Monitoring</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>3</span>
                        <p>Traffic Study and Transaction Advisory</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup11" class="work__link">Read More</a>
        </div>
    </div>
    <div class="display_flex align_center section-fadeup buisness_section_container_right">
        <div class="aboutports_right paddright50 fadeup paddingleft120 top40s">
            <h3 class="buinsness_hed">12. ENVIRONMENT MANAGEMENT</h3>
            <div class="buisness_list">
                <div class="col-md-5">
                    <div>
                        <span>1</span>
                        <p>Environment Impact Assessment</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <span>2</span>
                        <p>Read More copy 16</p>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" href="#modal_popup12" class="work__link">Read More</a>
        </div>
        <div class="aboutports_left buisness_section_img_right">
            <img src="/assets/images/environment.jpg" />
        </div>
    </div>
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