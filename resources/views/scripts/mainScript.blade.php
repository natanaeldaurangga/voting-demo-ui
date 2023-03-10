<!-- Bootstrap 4 -->
<script src="{{ url('/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ url('/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ url('/') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ url('/') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('/') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ url('/') }}/dist/js/adminlte.min.js"></script>
{{-- Input Mask --}}
<script src="{{ url('/') }}/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- Page specific script -->
{{-- <script src="{{ url('/') }}/plugins/datetimepicker-master/build/jquery.datetimepicker.min.js"></script> --}}
<script src="{{ url('/') }}/plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>

{{-- Sweet alert2 --}}
<script src="{{ url('/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
{{-- <script src="{{ url('/plugins/sweetalert2/sweetalert2.min.js') }}"></script> --}}

<!-- ChartJS -->
<script src="{{ url('/') }}/plugins/chart.js/Chart.min.js"></script>

<script>
    $(document).ready(function() {

        $(".data-table1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });

        $('.data-table2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        $('.datatable').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'pageLength': 5,
            'lengthMenu': [
                [5, 10, 20, -1],
                [5, 10, 20, "Todos"]
            ]
        });

        // class untuk input mask uang
        $('.input-mask-uang').inputmask({
            prefix: "Rp ",
            groupSeparator: ".",
            alias: "numeric",
            placeholder: "0",
            autoGroup: true,
            digits: 2,
            digitsOptional: false,
            clearMaskOnLostFocus: false
        });

        jQuery.datetimepicker.setLocale('id');

        jQuery('.datetimepicker').datetimepicker({
            // i18n: {
            //     de: {
            //         months: [
            //             'Januar', 'Februar', 'M??rz', 'April',
            //             'Mai', 'Juni', 'Juli', 'August',
            //             'September', 'Oktober', 'November', 'Dezember',
            //         ],
            //         dayOfWeek: [
            //             "So.", "Mo", "Di", "Mi",
            //             "Do", "Fr", "Sa.",
            //         ]
            //     }
            // },
            timepicker: true,
            format: 'Y-m-d H:i'
        });

        //-------------
        //- DONUT CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
        var donutData = {
            labels: [
                'Chrome',
                'IE',
                'FireFox',
                'Safari',
                'Opera',
                'Navigator',
            ],
            datasets: [{
                data: [700, 500, 400, 600, 300, 100],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
            }]
        }
        var donutOptions = {
            maintainAspectRatio: false,
            responsive: true,
        }
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        new Chart(donutChartCanvas, {
            type: 'doughnut',
            data: donutData,
            options: donutOptions
        })

    });
</script>
