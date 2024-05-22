@extends('backend.layouts.app')

@section('page.name', 'Home Page')

@section('page.content')
    <div class="col-12">
        <div class="card widget-inline">
            <div class="card-body p-0">

                <!-----==================== home banner ==========----------------------->

                <div class="card m-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Banner Section</b></h4>
                            <hr>
                        </div>

                        <form id="home_banner_form" action="{{ url(route('home.banner')) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group mb-3">
                                        <label>Banner 1 <span class="red">*</span> <span class="font-size11">(Max file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" type="file" id="image" name="Banner[]">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- @if (get_settings('Banner_1')) 
                                    <img src="{{ asset('storage/' . get_settings('Banner_1')) }}" class="img-thumbnail"> 
                                @endif --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group mb-3">
                                        <label>Banner 2 <span class="red">*</span> <span class="font-size11">(Max file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" type="file" id="image" name="Banner[]">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- @if (get_settings('Banner_1')) 
                                    <img src="{{ asset('storage/' . get_settings('Banner_1')) }}" class="img-thumbnail"> 
                                @endif --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group mb-3">
                                        <label>Banner 3 <span class="red">*</span> <span class="font-size11">(Max file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" type="file" id="image" name="Banner[]">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- @if (get_settings('Banner_1')) 
                                    <img src="{{ asset('storage/' . get_settings('Banner_1')) }}" class="img-thumbnail"> 
                                @endif --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group mb-3">
                                        <label>Banner 4 <span class="red">*</span> <span class="font-size11">(Max file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" type="file" id="image" name="Banner[]">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- @if (get_settings('Banner_1')) 
                                    <img src="{{ asset('storage/' . get_settings('Banner_1')) }}" class="img-thumbnail"> 
                                @endif --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group mb-3">
                                        <label>Banner 5 <span class="red">*</span> <span class="font-size11">(Max file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" type="file" id="image" name="Banner[]">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- @if (get_settings('Banner_1')) 
                                    <img src="{{ asset('storage/' . get_settings('Banner_1')) }}" class="img-thumbnail"> 
                                @endif --}}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="form-group mb-3">
                                        <label>Banner 6 <span class="red">*</span> <span class="font-size11">(Max file
                                                size 80kb - 1125*196)</span></label>
                                        <input class="form-control" type="file" id="image" name="Banner[]">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    {{-- @if (get_settings('Banner_1')) 
                                    <img src="{{ asset('storage/' . get_settings('Banner_1')) }}" class="img-thumbnail"> 
                                @endif --}}
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

                <!-----==================== home banner ==========----------------------->


                <!-----==================== home intro ==========----------------------->

                <div class="card m-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Intro Section</b></h4>
                            <hr>
                        </div>

                        <form id="home_intro_form" action="{{ url(route('home.intro')) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <textarea class="trumbowyg form-control" name="intro" rows="5" required></textarea>

                            <div class="col-sm-1 mt-2" style="float: right;">
                                <div class="form-group d-grid mb-3 text-end">
                                    <button type="submit" class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

                <!-----==================== home banner ==========----------------------->

                <!-----==================== home Marque ==========----------------------->

                <div class="card m-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Marque Section</b></h4>
                            <hr>
                        </div>

                        <form id="home_marque_form" action="{{ url(route('home.marque')) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="marque[]" value="" required>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="marque[]" value="" required>
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="marque[]" value="" required>
                            </div>


                            <div class="col-sm-1 mt-2" style="float: right;">
                                <div class="form-group d-grid mb-3 text-end">
                                    <button type="submit" class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

                <!-----==================== home Marque ==========----------------------->

                <!-----==================== home Business ==========----------------------->

                <div class="card m-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Business Section</b></h4>
                            <hr>
                        </div>

                        <form id="home_business_form" action="{{ url(route('home.business')) }}" method="post"
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
                                                            <input class="form-control" style="margin-bottom: 5px;"
                                                                type="file" id="image" name="icon[]">
                                                        </div>

                                                        <div class="col col-sm-6">
                                                            <input class="form-control" name="icon_name[]"
                                                                placeholder="Enter Icon Name here...">
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


                            </div>

                            <div class="col-sm-1 mt-2" style="float: right;">
                                <div class="form-group d-grid mb-3 text-end">
                                    <button type="submit" class="btn btn-block btn-primary">Save</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

                <!-----==================== home Business ==========----------------------->


                <!-----==================== home Counter ==========----------------------->

                <div class="card m-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Counter Section</b></h4>
                            <hr>
                        </div>

                        <form id="home_counter_form" action="{{ url(route('home.counter')) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="number[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="name[]" value="" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="number[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="name[]" value="" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="number[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="name[]" value="" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="number[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-5">
                                    <input type="text" class="form-control" name="name[]" value="" required>
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

                <!-----==================== home Marque ==========----------------------->

                <!-----==================== home project ==========----------------------->

                <div class="card m-3">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h4 class="header-title"><b>Project Section</b></h4>
                            <hr>
                        </div>

                        <form id="home_project_form" action="{{ url(route('home.project')) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="text" class="form-control" name="title[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="date" class="form-control" name="date[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="file" class="form-control" name="image[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-12">
                                    <textarea class="trumbowyg form-control" name="description[]" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="text" class="form-control" name="title[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="date" class="form-control" name="date[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="file" class="form-control" name="image[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-12">
                                    <textarea class="trumbowyg form-control" name="description[]" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="text" class="form-control" name="title[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="date" class="form-control" name="date[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="file" class="form-control" name="image[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-12">
                                    <textarea class="trumbowyg form-control" name="description[]" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="text" class="form-control" name="title[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="date" class="form-control" name="date[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="file" class="form-control" name="image[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-12">
                                    <textarea class="trumbowyg form-control" name="description[]" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="text" class="form-control" name="title[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="date" class="form-control" name="date[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="file" class="form-control" name="image[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-12">
                                    <textarea class="trumbowyg form-control" name="description[]" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="text" class="form-control" name="title[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="date" class="form-control" name="date[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-3">
                                    <input type="file" class="form-control" name="image[]" value="" required>
                                </div>
                                <div class="form-group mb-3 mx-2 col-md-12">
                                    <textarea class="trumbowyg form-control" name="description[]" rows="5" required></textarea>
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

                <!-----==================== home project ==========----------------------->

            </div>
        </div>
        <!-- end card-box-->
    </div>
@endsection

@section('page.scripts')
    <script>
        $(document).ready(function() {
            initValidate('#home_project_form');
            initValidate('#home_counter_form');
            initValidate('#home_business_form');
            initValidate('#home_marque_form');
            initValidate('#home_intro_form');
            initValidate('#home_banner_form');

            initTrumbowyg('.trumbowyg');
        });

        $("#home_project_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        $("#home_counter_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        $("#home_business_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        $("#home_marque_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        $("#home_intro_form").submit(function(e) {
            var form = $(this);
            ajaxSubmit(e, form, responseHandler);
        });

        $("#home_banner_form").submit(function(e) {
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
    
                        <div class="col col-sm-6">
                        <input class="form-control" style="margin-bottom: 5px;" type="file" id="image" name="icon[]">
                        </div>
    
                        <div class="col col-sm-6">
                            <input class="form-control" name="icon_name[]" placeholder="Enter Icon Name here...">
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
    </script>

@endsection
