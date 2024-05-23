@extends('backend.layouts.app')

@section('page.name', 'Project Page')

@section('page.content')
<div class="col-12">
    <div class="card widget-inline">
        <div class="card-body p-0">

            <!-----==================== project banner ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Banner Section</b></h4>
                        <hr>
                    </div>

                    <form id="project_banner_form" action="{{ url(route('project.banner')) }}" method="post"
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

            <!-----==================== project banner ==========----------------------->


            <!-----==================== project Completed project section ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Complete project section</b></h4>
                        <hr>
                    </div>

                    <form id="project_intro_form" action="{{ url(route('project.intro')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <div id="replace_key_add_more" style="">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group mb-3 mx-2 col-md-3">
                                                    <label>Insert Image:</label>
                                                    <input type="file" class="form-control" placeholder="Insert Image" name="image[]" value=""
                                                        required>
                                                </div>
                                                <div class="form-group mb-3 mx-2 col-md-3">
                                                    <label>Insert Title:</label>
                                                    <input type="text" class="form-control" placeholder="Insert Title" name="title[]" value=""
                                                        required>
                                                </div>
                                                <div class="form-group mb-3 mx-2 col-md-3">
                                                    <label>Select Date:</label>
                                                    <input type="date" class="form-control" placeholder="Insert Date" name="date[]" value=""
                                                        required>
                                                </div>
                                                <div class="form-group mb-3 mx-2 col-md-12">
                                                    <label>Insert Description:</label>
                                                    <textarea class="trumbowyg form-control" placeholder="Insert Description" name="description[]"
                                                        rows="5" required></textarea>
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

            <!-----==================== project banner ==========----------------------->

            <!-----==================== project Certificate ==========----------------------->

            <div class="card m-3">
                <div class="card-body">
                    <div class="col-md-12">
                        <h4 class="header-title"><b>Certificate Section</b></h4>
                        <hr>
                    </div>

                    <form id="project_certificate_form" action="{{ url(route('project.certificate')) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <div id="replace_key_add_more2" style="">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="row">
                                                <div class="form-group mb-3 mx-2 col-md-3">
                                                    <label>Insert Image:</label>
                                                    <input type="file" class="form-control" placeholder="Insert image" name="image[]" value=""
                                                        required>
                                                </div>
                                                <div class="form-group mb-3 mx-2 col-md-3">
                                                    <label>Insert Title:</label>
                                                    <input type="text" class="form-control" placeholder="Insert Title" name="title[]" value=""
                                                        required>
                                                </div>
                                                <div class="form-group mb-3 mx-2 col-md-3">
                                                    <label>Select a Pdf:</label>
                                                    <input type="file" class="form-control" placeholder="Insert pdf" name="file"
                                                        accept=".pdf" required />
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

                        <div class="col-sm-1 mt-2" style="float: right;">
                            <div class="form-group d-grid mb-3 text-end">
                                <button type="submit" class="btn btn-block btn-primary">Save</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
    <!-- end card-box-->
</div>
@endsection

@section('page.scripts')
<script>
$(document).ready(function() {
    initValidate('#project_certificate_form');
    initValidate('#project_intro_form');
    initValidate('#project_banner_form');

    initTrumbowyg('.trumbowyg');
});

$("#project_certificate_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#project_intro_form").submit(function(e) {
    var form = $(this);
    ajaxSubmit(e, form, responseHandler);
});

$("#project_banner_form").submit(function(e) {
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
                        <div class="form-group mb-3 mx-2 col-md-3">
                            <label>Insert Image:</label>
                            <input type="file" class="form-control" placeholder="Insert Image" name="image[]" value="" required>
                        </div>
                        <div class="form-group mb-3 mx-2 col-md-3">
                            <label>Insert Title:</label>
                            <input type="text" class="form-control" placeholder="Insert Title" name="title[]" value="" required>
                        </div>
                        <div class="form-group mb-3 mx-2 col-md-3">
                            <label>Insert Date:</label>
                            <input type="date" class="form-control" placeholder="Insert Date" name="date[]" value="" required>
                        </div>
                        <div class="form-group mb-3 mx-2 col-md-12">
                            <label>Insert Description:</label>
                            <textarea class="trumbowyg form-control" placeholder="Insert Description" name="description[]" rows="5" required></textarea>
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

    var new_replace_key = `
                <div class="replace_key form-group">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <label>Insert Image:</label>
                                    <input type="file" placeholder="Insert Image" class="form-control" name="image[]" value=""
                                        required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <label>Insert Title:</label>
                                    <input type="text" placeholder="Insert Title" class="form-control" name="title[]" value=""
                                        required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <label>Select a Pdf:</label>
                                    <input type="file" class="form-control" placeholder="Insert pdf" name="file"
                                        accept=".pdf" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"><i style="font-size: 25px; color: red; cursor: pointer; margin-left: 10px;" class="ri-delete-bin-2-fill" onclick="remove_replace_key($(this));"></i></div>
                    </div>
                    </br>
                </div>
            `;

    $("#replace_key_add_more2").append(new_replace_key);
});
</script>

@endsection