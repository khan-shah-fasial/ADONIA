@extends('backend.layouts.app')

@section('page.name', 'Products Page')

@section('page.content')
<div class="col-12">
    <div class="card widget-inline">
        <div class="card-body p-0">

            <!-----==================== Products banner ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Banner Section</b></h4>
                        <hr>
                    </div>

                    <form id="products_banner_form" action="{{ url(route('products.banner')) }}" method="post"
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

            <!-----==================== Products Banner Ends ==========----------------------->

            <!-----==================== Poducts Radio & Communication section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Radio & Communication Section</b></h4>
                        <hr>
                    </div>

                    <form id="products_radioncomm_form" action="{{ url(route('products.radio-n-comm')) }}" method="post"
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
                                                            <label>Title <span class="red">*</span></label>
                                                            <input required class="form-control" name="title[]"
                                                                placeholder="Enter  here...">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-12">
                                                        <div class="form-group mb-3">
                                                            <label>Description <span class="red">*</span></label>
                                                            <textarea class="trumbowyg form-control"
                                                                name="description[]" rows="5" required></textarea>
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

                            <div class="form-group mb-3">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">

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

            <!-----==================== Products Radio & Communication section Ends ==========----------------------->


            <!-----==================== Poducts Oil & Spill section section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Oil & Spill Section</b></h4>
                        <hr>
                    </div>

                    <form id="products_oilnfill_form" action="{{ url(route('products.oil-n-spill')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">

                            <div class="form-group mb-3">
                                <div id="replace_key_add_more2" style="">
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
                                                            <label>Title <span class="red">*</span></label>
                                                            <input required class="form-control" name="title[]"
                                                                placeholder="Enter  here...">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-12">
                                                        <div class="form-group mb-3">
                                                            <label>Description <span class="red">*</span></label>
                                                            <textarea class="trumbowyg form-control"
                                                                name="description[]" rows="5" required></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-1"><i
                                                    style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;"
                                                    class="ri-add-circle-fill" id="add_replace_key2"></i></div>
                                        </div>
                                        </br>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">

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

            <!-----==================== Products Oil & Spill section Ends ==========----------------------->


            <!-----==================== Poducts Aids to navigation section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Aids To Navigation Section</b></h4>
                        <hr>
                    </div>

                    <form id="products_aidstonav_form" action="{{ url(route('products.aids-to-nav')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">

                            <div class="form-group mb-3">
                                <div id="replace_key_add_more3" style="">
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
                                                            <label>Title <span class="red">*</span></label>
                                                            <input required class="form-control" name="title[]"
                                                                placeholder="Enter  here...">
                                                        </div>
                                                    </div>
                                                    <div class="col col-sm-12">
                                                        <div class="form-group mb-3">
                                                            <label>Description <span class="red">*</span></label>
                                                            <textarea class="trumbowyg form-control"
                                                                name="description[]" rows="5" required></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-1"><i
                                                    style="font-size: 25px; color: #0b0; cursor: pointer; margin-left: 10px;"
                                                    class="ri-add-circle-fill" id="add_replace_key3"></i></div>
                                        </div>
                                        </br>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">

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

            <!-----==================== Products Radio & Communication section Ends ==========----------------------->


        </div>
    </div>
    <!-- end card-box-->
</div>
@endsection

@section('page.scripts')
<script>
$(document).ready(function() {
    initValidate('#products_aidstonav_form');
    initValidate('#products_oilnspill_form');
    initValidate('#products_radioncomm_form');
    initValidate('#products_banner_form');

    initTrumbowyg('.trumbowyg');
});

$("#products_project_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#products_counter_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#products_business_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#products_marque_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#products_intro_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#products_banner_form").submit(function(e) {
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
                                        <label>Title <span class="red">*</span></label>
                                        <input required class="form-control" name="title[]"
                                            placeholder="Enter  here...">
                                    </div>
                                </div>
                                <div class="col col-sm-12">
                                    <div class="form-group mb-3">
                                        <label>Description <span class="red">*</span></label>
                                        <textarea id="trumbowyg_${textareaIdCounter}" class="trumbowyg form-control"
                                            name="description[]" rows="5" required></textarea>
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

var textareaIdCounter2 = 0;
$("#add_replace_key2").on("click", function() {
    textareaIdCounter2++;

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
                                        <label>Title <span class="red">*</span></label>
                                        <input required class="form-control" name="title[]"
                                            placeholder="Enter  here...">
                                    </div>
                                </div>
                                <div class="col col-sm-12">
                                    <div class="form-group mb-3">
                                        <label>Description <span class="red">*</span></label>
                                        <textarea id="trumbowyg__${textareaIdCounter2}" class="trumbowyg form-control"
                                            name="description[]" rows="5" required></textarea>
                                    </div>
                                </div>

                                </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

    $("#replace_key_add_more2").append(new_replace_key);
    initTrumbowyg(`#trumbowyg__${textareaIdCounter2}`);

});

var textareaIdCounter3 = 0;
$("#add_replace_key3").on("click", function() {
    textareaIdCounter3++;

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
                                        <label>Title <span class="red">*</span></label>
                                        <input required class="form-control" name="title[]"
                                            placeholder="Enter  here...">
                                    </div>
                                </div>
                                <div class="col col-sm-12">
                                    <div class="form-group mb-3">
                                        <label>Description <span class="red">*</span></label>
                                        <textarea id="trumbowyg___${textareaIdCounter3}" class="trumbowyg form-control"
                                            name="description[]" rows="5" required></textarea>
                                    </div>
                                </div>

                                </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

    $("#replace_key_add_more3").append(new_replace_key);
    initTrumbowyg(`#trumbowyg___${textareaIdCounter3}`);
    

});

</script>
@endsection