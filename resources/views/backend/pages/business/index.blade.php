@extends('backend.layouts.app')

@section('page.name', 'Our Business Page')

@section('page.content')
<div class="col-12">
    <div class="card widget-inline">
        <div class="card-body p-0">

            <!-----==================== business banner ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Banner Section</b></h4>
                        <hr>
                    </div>

                    <form id="business_banner_form" action="{{ url(route('business.banner')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-12">
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

            <!-----==================== business banner Ends ==========----------------------->


            <!-----==================== Main section (business list) ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Main section (business list)</b></h4>
                        <hr>
                    </div>

                    <form id="business_main_list_form" action="{{ url(route('business.businesslist')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">

                            <div class="form-group mb-3">
                                <div id="replace_key_add_more" style="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">

                                                    <div class="col col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label>Image <span class="red">*</span> <span
                                                                    class="font-size11">(Max file size 80kb -
                                                                    1125*196)</span></label>
                                                            <input class="form-control" required type="file" id="image"
                                                                name="image[]">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label>Title <span class="red">*</span> </label>
                                                            <input required class="form-control" name="name[]"
                                                                placeholder="Enter Title here">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label>Text 1 <span class="red">*</span> </label>
                                                            <input required class="form-control" name="name[]"
                                                                placeholder="Enter Text 1 here">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label>Text 2 <span class="red">*</span> </label>
                                                            <input required class="form-control" name="name[]"
                                                                placeholder="Enter Text 2 here">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label>Text 3 <span class="red">*</span> </label>
                                                            <input required class="form-control" name="name[]"
                                                                placeholder="Enter Text 3 here">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-12">
                                                        <div class="form-group mb-3">
                                                            <label>Description <span class="red">*</span></label>
                                                            <textarea placeholder="Enter Description here" class="trumbowyg form-control" name="intro" rows="5"
                                                                required></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-1"><i
                                                    style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;"
                                                    class="ri-add-circle-fill" id="add_replace_key"></i></div>
                                        </div>
                                        </br>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-1 mt-2" style="float: right;">
                                <div class="form-group d-grid mb-3 text-end">
                                    <button type="submit" class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>

                    </form>

                </div>
            </div>

            <!-----==================== business Team Work Ends ==========----------------------->


        </div>
    </div>
    <!-- end card-box-->
</div>
@endsection

@section('page.scripts')
<script>
$(document).ready(function() {
    initValidate('#business_main_list_form');
    initValidate('#business_banner_form');

    initTrumbowyg('.trumbowyg');
});

$("#business_intro_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#business_banner_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}

function remove_replace_key(_this) {
    _this.closest(".replace_key").remove();
}

var textareaIdCounter = 0;
$("#add_replace_key").on("click", function() {
    textareaIdCounter++;

    var new_replace_key = `
                <div class="replace_key form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="row">

                                <div class="col col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Image <span class="red">*</span> <span
                                                class="font-size11">(Max file size 80kb -
                                                1125*196)</span></label>
                                        <input class="form-control" required type="file" id="image"
                                            name="image[]">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Title <span class="red">*</span> </label>
                                        <input required class="form-control" name="name[]"
                                            placeholder="Enter Title here">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Text 1 <span class="red">*</span> </label>
                                        <input required class="form-control" name="name[]"
                                            placeholder="Enter Text 1 here">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Text 2 <span class="red">*</span> </label>
                                        <input required class="form-control" name="name[]"
                                            placeholder="Enter Text 2 here">
                                    </div>
                                </div>
                                <div class="col col-sm-6">
                                    <div class="form-group mb-3">
                                        <label>Text 3 <span class="red">*</span> </label>
                                        <input required class="form-control" name="name[]"
                                            placeholder="Enter Text 3 here">
                                    </div>
                                </div>
                                <div class="col col-sm-12">
                                    <div class="form-group mb-3">
                                        <label>Description <span class="red">*</span></label>
                                        <textarea id="trumbowyg_${textareaIdCounter}" placeholder="Enter Description here" class="trumbowyg form-control" name="intro" rows="5"
                                            required></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

    $("#replace_key_add_more").append(new_replace_key);
    initTrumbowyg(`#trumbowyg_${textareaIdCounter}`);

});
</script>

@endsection