<!DOCTYPE html>
<html lang="en">

<head>

    <!----------Meta Information---------->
    @include('frontend.partials.meta')

    <!-----------Stylesheets------------>
    @include('frontend.partials.css')

</head>

<body>



    <!---========Header======----->

        @include('frontend.partials.header')

    <!---========end Header======----->

    <!---======== page content ====-------->

        @yield('page.content')

    <!---======== page content ===== -------->

    <!-----------------------Footer Start------------------------------------------->

        @include('frontend.partials.footer')

    <!--Footer Ends-->


    <!--javascript-->
    @include('frontend.partials.js')
    @yield('page.scripts')
    @yield('component.scripts')

</body>

</html>


<a data-bs-toggle="modal" href="#modal_popup100" class="work__link">Read More</a>
<!--POPUP MODAL 1-->
<div class="modal_popup1 modal fade" id="modal_popup100" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
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