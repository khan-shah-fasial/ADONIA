@extends('backend.layouts.app')

@section('page.name', 'About Page')

@section('page.content')
<div class="col-12">
    <div class="widget-inline">
        <div class="p-0">

            <!-----==================== about banner ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Banner Section</b></h4>
                        <hr>
                    </div>

                    <form id="about_banner_form" action="{{ url(route('about.banner')) }}" method="post"
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

            <!-----==================== about banner ==========----------------------->


            <!-----==================== about intro ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Intro Section</b></h4>
                        <hr>
                    </div>

                    <form id="about_intro_form" action="{{ url(route('about.intro')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>Intro description <span class="red">*</span></label>
                                    <textarea class="trumbowyg form-control" name="intro" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label>partner description <span class="red">*</span></label>
                                    <textarea class="trumbowyg form-control" name="intro" rows="5" required></textarea>
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

            <!-----==================== about banner ends==========----------------------->

            <!-----==================== about Steps Section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Steps Section</b></h4>
                        <hr>
                    </div>

                    <form id="about_marque_form" action="{{ url(route('about.steps')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Icon 1 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="image[]">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title 1 <span class="red">*</span> </label>
                                    <input class="form-control" type="text" name="steps-section-title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Description 1 <span class="red">*</span> </label>
                                    <textarea class="trumbowyg form-control" name="steps-section-description" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Icon 2 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="image[]">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title 2 <span class="red">*</span> </label>
                                    <input class="form-control" type="text" name="steps-section-title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Description 2 <span class="red">*</span> </label>
                                    <textarea class="trumbowyg form-control" name="steps-section-description" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Icon 3 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="image[]">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title 3 <span class="red">*</span> </label>
                                    <input class="form-control" type="text" name="steps-section-title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Description 3 <span class="red">*</span> </label>
                                    <textarea class="trumbowyg form-control" name="steps-section-description" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Icon 4 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="image[]">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title 4 <span class="red">*</span> </label>
                                    <input class="form-control" type="text" name="steps-section-title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Description 4 <span class="red">*</span> </label>
                                    <textarea class="trumbowyg form-control" name="steps-section-description" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Icon 5 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="image[]">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title 5 <span class="red">*</span> </label>
                                    <input class="form-control" type="text" name="steps-section-title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Description 5 <span class="red">*</span> </label>
                                    <textarea class="trumbowyg form-control" name="steps-section-description" rows="5"
                                        required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Icon 6 <span class="red">*</span> <span class="font-size11">(Max file
                                            size 80kb - 1125*196)</span></label>
                                    <input class="form-control" type="file" id="image" name="image[]">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group mb-3">
                                    <label>Title 6 <span class="red">*</span> </label>
                                    <input class="form-control" type="text" name="steps-section-title">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label>Description 6 <span class="red">*</span> </label>
                                    <textarea class="trumbowyg form-control" name="steps-section-description" rows="5"
                                        required></textarea>
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

            <!-----==================== about Steps Section ends ==========----------------------->

            <!-----==================== about Team work section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Team Work Section</b></h4>
                        <hr>
                    </div>

                    <form id="about_teamwork_form" action="{{ url(route('about.teamwork')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">

                            <div class="form-group mb-3">
                                <label for="Expert">Expert <span class="red">*</span></label>
                                <div id="replace_key_add_more" style="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">

                                                    <div class="col col-sm-12">
                                                        <input required class="form-control" name="name[]"
                                                            placeholder="Enter Expert Name here...">
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
                                <label for="Designers">Designers <span class="red">*</span></label>
                                <div id="replace_key_add_more2" style="">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">

                                                    <div class="col col-sm-12">
                                                        <input class="form-control" required name="name[]"
                                                            placeholder="Enter Designers Name here...">
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
                                        <label>Team Work Image <span class="red">*</span> <span class="font-size11">(Max
                                                file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" required type="file" id="image" name="image[]">
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
        </div>

        <!-----==================== About Team Work Ends ==========----------------------->


        <!-----==================== About Mission & Vision Section ==========----------------------->

        <div class="card m-3">
            <div class="card-body">
                <div class="col-md-12">
                    <h4 class="header-title"><b>Mission & Vision Section</b></h4>
                    <hr>
                </div>

                <form id="about_mnv_section_form" action="{{ url(route('about.mnv_section')) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group mb-3">
                            <label>Mission & Vision Description <span class="red">*</span></label>
                            <textarea class="trumbowyg form-control" name="intro" rows="5" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Mission & Vision Image <span class="red">*</span> <span class="font-size11">(Max
                                    file
                                    size 80kb - 1125*196)</span></label>
                            <input class="form-control" required type="file" id="image" name="image[]">
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

        <div class="card m-3">
            <div class="card-body">
                <div class="col-md-12">
                    <h4 class="header-title"><b>Our Values Section</b></h4>
                    <hr>
                </div>

                <form id="about_our_values_form" action="{{ url(route('about.our_values')) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="form-group mb-3">
                            <label>Description <span class="red">*</span></label>
                            <textarea class="trumbowyg form-control" name="intro" rows="5" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Our Values Image <span class="red">*</span> <span class="font-size11">(Max file
                                    size 80kb - 1125*196)</span></label>
                            <input class="form-control" required type="file" id="our_values_Image" name="image[]">
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

        <!-----==================== about Mission & Vision Ends ==========----------------------->

    </div>
</div>
<!-- end card-box-->
</div>
@endsection

@section('page.scripts')
<script>
$(document).ready(function() {
    initValidate('#about_project_form');
    initValidate('#about_counter_form');
    initValidate('#about_business_form');
    initValidate('#about_marque_form');
    initValidate('#about_intro_form');
    initValidate('#about_banner_form');

    initTrumbowyg('.trumbowyg');
});

$("#about_project_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#about_counter_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#about_business_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#about_marque_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#about_intro_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#about_banner_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

var responseHandler = function(response) {
    location.reload();
}

function remove_replace_key(_this) {
    _this.closest(".replace_key").remove();
}

$("#add_replace_key").on("click", function() {

    var new_replace_key = `
                <div class="replace_key form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col col-sm-12">
                                    <input class="form-control" name="name[]"
                                        placeholder="Enter Experts Name here...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

    $("#replace_key_add_more").append(new_replace_key);

});
$("#add_replace_key2").on("click", function() {

    var new_replace_key2 = `
                <div class="replace_key form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="row">
                                <div class="col col-sm-12">
                                    <input class="form-control" name="name[]" placeholder="Enter Designers Name here...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

    $("#replace_key_add_more2").append(new_replace_key2);

});
</script>
@endsection