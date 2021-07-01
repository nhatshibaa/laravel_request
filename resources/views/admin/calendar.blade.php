@extends('admin.layout')

@section('page-css')
    <link rel="stylesheet" href="/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="/assets/vendor/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="/assets/vendor/fullcalendar/fullcalendar.print.css" media="print" />
@endsection

@section('header-content')
    <header class="page-header">
        <h2>Calendar</h2>

        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li>
                    <a href="/layout/index">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li><span>Pages</span></li>
                <li><span>Calendar</span></li>
            </ol>
        </div>
    </header>
@endsection

@section('body-content')
    <section class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-9">
                    <div id="calendar"></div>
                </div>
                <div class="col-md-3">
                    <p class="h4 text-light">Draggable Events</p>

                    <hr />

                    <div id='external-events'>
                        <div class="external-event label label-default" data-event-class="fc-event-default">Default Event</div>
                        <div class="external-event label label-primary" data-event-class="fc-event-primary">Primary Event</div>
                        <div class="external-event label label-success" data-event-class="fc-event-success">Success Event</div>
                        <div class="external-event label label-warning" data-event-class="fc-event-warning">Warning Event</div>
                        <div class="external-event label label-info" data-event-class="fc-event-info">Info Event</div>
                        <div class="external-event label label-danger" data-event-class="fc-event-danger">Danger Event</div>
                        <div class="external-event label label-dark" data-event-class="fc-event-dark">Dark Event</div>

                        <hr />
                        <div>
                            <div class="checkbox-custom checkbox-default ib">
                                <input id="RemoveAfterDrop" type="checkbox"/>
                                <label for="RemoveAfterDrop">remove after drop</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-js')
    <script src="/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="/assets/vendor/fullcalendar/lib/moment.min.js"></script>
    <script src="/assets/vendor/fullcalendar/fullcalendar.js"></script>

    <script src="/assets/javascripts/pages/examples.calendar.js"></script>
@endsection
