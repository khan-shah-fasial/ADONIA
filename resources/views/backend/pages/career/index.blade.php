@extends('backend.layouts.app')

@section('page.name', 'Career Page')

@section('page.content')
<div class="col-12">
    <div class="card widget-inline">
        <div class="card-body p-0">

            <!-----==================== career banner ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Banner Section</b></h4>
                        <hr>
                    </div>

                    <form id="career_banner_form" action="{{ url(route('career.banner')) }}" method="post"
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

            <!-----==================== career banner ==========----------------------->


            <!-----==================== career intro section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Introduction section</b></h4>
                        <hr>
                    </div>

                    <form id="career_intro_form" action="{{ url(route('career.intro')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Intro Image <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="Banner[]">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Insert Heading<span class="red">*</span></label>
                                    <input type="text" class="form-control" placeholder="Insert Heading" name="title[]"
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

    <!-----==================== career intro section ends  ==========----------------------->


</div>
</div>
<!-- end card-box-->
</div>
@endsection

@section('page.scripts')
<script>
$(document).ready(function() {
    initValidate('#career_intro_form');
    initValidate('#career_banner_form');

    initTrumbowyg('.trumbowyg');
});

$("#career_intro_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#career_banner_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}
</script>
@endsection