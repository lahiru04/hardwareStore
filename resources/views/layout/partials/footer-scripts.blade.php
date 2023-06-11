<!-- jQuery -->
<script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Feather Icon JS -->
<script src="{{ URL::asset('assets/js/feather.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{ URL::asset('assets/js/jquery.slimscroll.min.js')}}"></script>

<!-- Datatable JS -->
<script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/datatables/datatables.min.js')}}"></script>

<!-- Select2 JS -->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@if(Route::is(['form-select2']))
<script src="{{ URL::asset('assets/plugins/select2/js/custom-select.js')}}"></script>
@endif
<!-- Datetimepicker JS -->
<script src="{{ URL::asset('assets/js/moment.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@if(Route::is(['calendar']))
<!-- Full Calendar JS -->
<script src="{{ URL::asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/fullcalendar/jquery.fullcalendar.js')}}"></script>
@endif
@if(Route::is(['chart-flot']))
<!-- Chart JS -->
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.fillbetween.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/flot/chart-data.js')}}"></script>
@endif
@if(Route::is(['chart-c3']))
<!-- Chart JS -->
<script src="{{ URL::asset('assets/plugins/c3-chart/d3.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/c3-chart/c3.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/c3-chart/chart-data.js')}}"></script>
@endif      
<!-- Chart JS -->
<script src="{{ URL::asset('assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/apexchart/chart-data.js')}}"></script>
@if(Route::is(['chart-js']))
<!-- Chart JS -->
<script src="{{ URL::asset('assets/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/chartjs/chart-data.js')}}"></script>
@endif
@if(Route::is(['chart-morris']))
<!-- Chart JS -->
<script src="{{ URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/morris/chart-data.js')}}"></script>
@endif
@if(Route::is(['chart-peity']))
<!-- Chart JS -->
<script src="{{ URL::asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/peity/chart-data.js')}}"></script>
@endif
@if(Route::is(['clipboard']))
<!-- Clipboard JS -->
<script src="{{ URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
@endif
@if(Route::is(['counter']))
<!-- Stickynote JS -->
<script src="{{ URL::asset('assets/plugins/countup/jquery.counterup.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/countup/jquery.waypoints.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/countup/jquery.missofis-countdown.js')}}"></script>
@endif
@if(Route::is(['drag-drop']))
<!-- Dragula JS -->
<script src="{{ URL::asset('assets/plugins/dragula/dragula.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/dragula/drag-drop.min.js')}}"></script>
@endif
@if(Route::is(['form-wizard']))
<!-- Wizard JS -->
<script src="{{ URL::asset('assets/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/twitter-bootstrap-wizard/prettify.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/twitter-bootstrap-wizard/form-wizard.js')}}"></script>
@endif
@if(Route::is(['lightbox']))
<!-- Alertify JS -->
<script src="{{ URL::asset('assets/plugins/lightbox/glightbox.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/lightbox/lightbox.js')}}"></script>
@endif
@if(Route::is(['notification']))
<!-- Alertify JS -->
<script src="{{ URL::asset('assets/plugins/alertify/alertify.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/alertify/custom-alertify.min.js')}}"></script>
@endif
@if(Route::is(['rating']))
<!-- Raty JS -->
<script src="{{ URL::asset('assets/plugins/raty/jquery.raty.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/raty/custom.raty.js')}}"></script>
@endif
@if(Route::is(['scrollbar']))
<!-- Plyr JS -->
<script src="{{ URL::asset('assets/plugins/scrollbar/scrollbar.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/scrollbar/custom-scroll.js')}}"></script>
@endif
@if(Route::is(['stickynote']))
<!-- Stickynote JS -->
<script src="{{ URL::asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/stickynote/sticky.js')}}"></script>
@endif
@if(Route::is(['text-editor']))
<!-- Summernote JS -->
<script src="{{ URL::asset('assets/plugins/summernote/dist/summernote-bs4.min.js')}}"></script>
@endif
@if(Route::is(['timeline']))
<!-- Stickynote JS -->
<script src="{{ URL::asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/stickynote/sticky.js')}}"></script>
@endif
@if(Route::is(['toastr']))
<script src="{{ URL::asset('assets/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/toastr/toastr.js')}}"></script>
@endif
@if(Route::is(['rangeslider']))
<!-- Rangeslider JS -->
<script src="assets/plugins/ion-rangeslider/ion.rangeSlider.min.js"></script>
<script src="assets/plugins/ion-rangeslider/custom-rangeslider.js"></script>
@endif
<!-- Owl JS -->
<script src="{{ URL::asset('assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
<!-- Fileupload JS -->
<script src="{{ URL::asset('assets/plugins/fileupload/fileupload.min.js')}}"></script>
<!-- Sweetalert 2 -->
<script src="{{ URL::asset('assets/plugins/sweetalert/sweetalert2.all.min.js')}}"></script>
<script src="{{ URL::asset('assets/plugins/sweetalert/sweetalerts.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{ URL::asset('assets/js/script.js')}}"></script>