@extends('admin.layout')

@section('page-css')
    <link rel="stylesheet" href="/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="/assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/assets/vendor/dropzone/css/basic.css" />
    <link rel="stylesheet" href="/assets/vendor/dropzone/css/dropzone.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <link rel="stylesheet" href="/assets/vendor/summernote/summernote.css" />
    <link rel="stylesheet" href="/assets/vendor/summernote/summernote-bs3.css" />
    <link rel="stylesheet" href="/assets/vendor/codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="/assets/vendor/codemirror/theme/monokai.css" />
@endsection

@section('header-content')
    <header class="page-header">
        <h2>Advanced Forms</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="index.html">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Forms</span></li>
                <li><span>Advanced</span></li>
            </ol>
        </div>
    </header>
@endsection

@section('body-content')
    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Select Replacement</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Basic select</label>
                            <div class="col-md-6">
                                <select data-plugin-selectTwo class="form-control populate">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Multi-select</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label">With Search</label>
                            <div class="col-md-6">
                                <select class="form-control" multiple="multiple" data-plugin-multiselect
                                        data-plugin-options='{ "enableCaseInsensitiveFiltering": true }'
                                        id="ms_example6">
                                    <optgroup label="Mathematics">
                                        <option value="analysis">Analysis</option>
                                        <option value="algebra">Linear Algebra</option>
                                        <option value="discrete">Discrete Mathematics</option>
                                        <option value="numerical">Numerical Analysis</option>
                                        <option value="probability">Probability Theory</option>
                                    </optgroup>
                                    <optgroup label="Computer Science">
                                        <option value="programming">Introduction to Programming</option>
                                        <option value="automata">Automata Theory</option>
                                        <option value="complexity">Complexity Theory</option>
                                        <option value="software">Software Engineering</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Masked Inputs</h2>
                    <p class="panel-subtitle">
                        Input masks allows a user to more easily enter fixed width input where you would like them to
                        enter the data in a certain format (dates,phones, etc).
                    </p>
                </header>
                <div class="panel-body">
                    <div class="form-body">
                        <form class="form-horizontal form-bordered">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date</label>
                                <div class="col-md-6">
                                    <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-calendar"></i>
															</span>
                                        <input id="date" data-plugin-masked-input data-input-mask="99/99/9999"
                                               placeholder="__/__/____" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Phone</label>
                                <div class="col-md-6 control-label">
                                    <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-phone"></i>
															</span>
                                        <input id="phone" data-plugin-masked-input data-input-mask="(999) 999-9999"
                                               placeholder="(123) 123-1234" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Product Key</label>
                                <div class="col-md-6 control-label">
                                    <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-tag"></i>
															</span>
                                        <input id="product-key" data-plugin-masked-input data-input-mask="(aa) 99-999"
                                               placeholder="(ab) 12-123" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="fc_inputmask_1">SSN</label>
                                <div class="col-md-6">
                                    <div class="input-group">
															<span class="input-group-addon">
																<i class="fa fa-plus"></i>
															</span>
                                        <input id="fc_inputmask_1" data-plugin-masked-input
                                               data-input-mask="999-99-9999" placeholder="___-__-____"
                                               class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Date Picker</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">

                        <div class="form-group">
                            <label class="col-md-3 control-label">Default Datepicker</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                    <input type="text" data-plugin-datepicker class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Date range</label>
                            <div class="col-md-6">
                                <div class="input-daterange input-group" data-plugin-datepicker>
														<span class="input-group-addon">
															<i class="fa fa-calendar"></i>
														</span>
                                    <input type="text" class="form-control" name="start">
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="form-control" name="end">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">Time Pickers</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">24 Hour Mode Time Picker</label>
                            <div class="col-md-6">
                                <div class="input-group">
														<span class="input-group-addon">
															<i class="fa fa-clock-o"></i>
														</span>
                                    <input type="text" data-plugin-timepicker class="form-control"
                                           data-plugin-options='{ "showMeridian": false }'>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">MaxLength Control</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered form-bordered" action="#">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Input</label>
                            <div class="col-md-6">
                                <input class="form-control" data-plugin-maxlength maxlength="20"/>
                                <p>
                                    <code>max-length</code> set to 20.
                                </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="textareaDefault">Textarea</label>
                            <div class="col-md-6">
                                <textarea class="form-control" rows="3" data-plugin-maxlength
                                          maxlength="140"></textarea>
                                <p>
                                    <code>max-length</code> set to 140.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">File Upload Drag'n Drop</h2>
                </header>
                <div class="panel-body">
                    <form action="/upload" class="dropzone dz-square" id="dropzone-example"></form>
                </div>
            </section>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <section class="panel">
                <header class="panel-heading">
                    <div class="panel-actions">
                        <a href="#" class="fa fa-caret-down"></a>
                        <a href="#" class="fa fa-times"></a>
                    </div>

                    <h2 class="panel-title">WYSIWYG Editors</h2>
                </header>
                <div class="panel-body">
                    <form class="form-horizontal form-bordered">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Summernote</label>
                            <div class="col-md-9">
                                <div class="summernote" data-plugin-summernote
                                     data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'>
                                    Start typing...
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('page-js')
    <script src="/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="/assets/vendor/select2/select2.js"></script>
    <script src="/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
    <script src="/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="/assets/vendor/fuelux/js/spinner.js"></script>
    <script src="/assets/vendor/dropzone/dropzone.js"></script>
    <script src="/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
    <script src="/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
    <script src="/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
    <script src="/assets/vendor/codemirror/lib/codemirror.js"></script>
    <script src="/assets/vendor/codemirror/addon/selection/active-line.js"></script>
    <script src="/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
    <script src="/assets/vendor/codemirror/mode/xml/xml.js"></script>
    <script src="/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="/assets/vendor/codemirror/mode/css/css.js"></script>
    <script src="/assets/vendor/summernote/summernote.js"></script>
    <script src="/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="/assets/vendor/ios7-switch/ios7-switch.js"></script>
@endsection
