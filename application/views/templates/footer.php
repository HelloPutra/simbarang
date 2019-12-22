<footer class="main-footer">
    <div class="footer-left">
        Copyright &copy; 2019
        <div class="bullet"></div> Design By <a href="https://getbootstrap.com/">Bootstrap</a>
    </div>
    <div class="footer-right">
        4.3
    </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/js/stisla.js')?>"></script>
<!-- Template JS File -->
<script src="<?= base_url('assets/js/scripts.js')?>"></script>
<script src="<?= base_url('assets/js/custom.js')?>"></script>

<script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>

<!-- Data Tables -->
<script src="<?= base_url('assets/datatables/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/datatables/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/colreorder/js/colReorder.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/buttons/js/buttons.colVis.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/datatables/pdfmake/vfs_fonts.js')?>"></script>
<script>
    // - DATA TABLES
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 
                    { extend: 'copy', className: 'btn-primary' },
                    { extend: 'pdf', className: 'btn-danger' },
                    { extend: 'excel', className: 'btn-success' },
                    { extend: 'print', className: 'btn-info' },
                    { extend: 'colvis', className: 'btn-primary' }
                ]
            } );
            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        } );
</script>
<!-- Data -->

</body>
</html>