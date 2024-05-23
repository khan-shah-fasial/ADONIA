@extends('backend.layouts.app')

@section('page.name', 'Contact Page')

@section('page.content')
<div class="col-12">
    <div class="card widget-inline">
        <div class="card-body p-0">

            <!-----==================== contact banner ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Banner Section</b></h4>
                        <hr>
                    </div>

                    <form id="contact_banner_form" action="{{ url(route('contact.banner')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-10">
                                <div class="form-group mb-3">
                                    <label>Banner 1 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="Banner[]">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-1" style="float: right;">
                            <div class="form-group d-grid mb-3 text-end">
                                <button type="submit" class="btn btn-block btn-primary">Save</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

            <!-----==================== contact banner ==========----------------------->


            <!-----==================== contact section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Contact section</b></h4>
                        <hr>
                    </div>

                    <form id="contact_intro_form" action="{{ url(route('contact.intro')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Address 1<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Address 1" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Address 2<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Address 2" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Email<span class="red">*</span></label>
                                    <input type="email" class="form-control" placeholder="Insert Email" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Website URL<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Website URL" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Phone 1<span class="red">*</span></label>
                                    <input type="number" class="form-control" placeholder="Insert Phone 1" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Phone 2<span class="red">*</span></label>
                                    <input type="number" class="form-control" placeholder="Insert Phone 2" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Facebook URL<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Facebook URL" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>LinkedIn URL<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert LinkedIn URL" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Twitter URL<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Twitter URL" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Instagram URL<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Instagram URL" name="title[]"
                                        value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-1" style="float: right;">
                            <div class="form-group d-grid mb-3 text-end">
                                <button type="submit" class="btn btn-block btn-primary">Save</button>
                            </div>
                        </div>

                </div>
            </div>




            </form>

        </div>
    </div>

    <!-----==================== contact intro section ends  ==========----------------------->


</div>
</div>
<!-- end card-box-->
</div>
@endsection

@section('page.scripts')
<script>
$(document).ready(function() {
    initValidate('#contact_intro_form');
    initValidate('#contact_banner_form');

    initTrumbowyg('.trumbowyg');
});

$("#contact_intro_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#contact_banner_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}
</script>
@endsection