<title>CMS | New Application</title>
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-header-title">
            <h4> List Of Application</h4>
        </div>

        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <i class="icofont icofont-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Application</a>
                </li>
                <li class="breadcrumb-item"><a href="#!">List Of Application</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Button table start -->
                <div class="card">
                    <div class="card-header">
                            <?php //echo anchor(site_url('application/create'), '<i class="icofont icofont-ui-add"></i> Create', 'class="btn btn-info"'); ?>
                           <?php echo anchor(site_url('application/excel'), '<i class="fa fa-file-excel-o"></i> Export as Excel', 'class="btn btn-success btn-square"'); ?>
                        <?php echo anchor(site_url('application/word'), '<i class="fa fa-file-word-o"></i> Export as Word', 'class="btn btn-inverse btn-square"'); ?>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                             <div class="dt-responsive table-responsive">
                                <table id="mytable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Application ID</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Application ID</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                            </table>
                         </div>
                    </div>
                </div>
                <!-- Basic Button table end -->
            </div>
        </div>
    </div>
    <!-- Page-body start -->
</div>
<!-- Required Jquery -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/tether/dist/js/tether.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/modernizr/modernizr.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/modernizr/feature-detects/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/classie/classie.js"></script>
<!-- data-table js -->
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/js/jszip.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/jszip.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/vendor/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- pnotify js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/pnotify/dist/pnotify.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/pnotify/dist/pnotify.desktop.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/pages/pnotify/notify.js"></script>
<!-- sweet alert js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modal.js"></script>
<!-- sweet alert modal.js intialize js -->
<!-- modalEffects js nifty modal window effects -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/modalEffects.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/classie.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next/i18next.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/bower_components/jquery-i18next/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script src="<?= base_url(); ?>/vendor/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/vendor/assets/js/script.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
        {
            return {
                "iStart": oSettings._iDisplayStart,
                "iEnd": oSettings.fnDisplayEnd(),
                "iLength": oSettings._iDisplayLength,
                "iTotal": oSettings.fnRecordsTotal(),
                "iFilteredTotal": oSettings.fnRecordsDisplay(),
                "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
            };
        };

        var t = $("#mytable").dataTable({
            oLanguage: {
                sProcessing: "loading..."
            },
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {"url": "../application/newapp", "type": "POST"},

            columns: [
                {
                    "data": "app_id",
                    "orderable": false
                },{"data": "application_id"},{"data": "detail_fullname"},{"data": "detail_phone"},{"data": "detail_address"},
                {
                    "data" : "action",
                    "orderable": false,
                    "className" : "text-center"
                }
            ],
            order: [[0, 'desc']],
            rowCallback: function(row, data, iDisplayIndex) {
                var info = this.fnPagingInfo();
                var page = info.iPage;
                var length = info.iLength;
                var index = page * length + (iDisplayIndex + 1);
                $('td:eq(0)', row).html(index);
            }

        });

        var newcs = $('#new-cons').DataTable();

        new $.fn.dataTable.Responsive(newcs);

        $('#show-hide-mytable').DataTable({
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.childRowImmediate,
                    type: ''
                }
            }
        });
    });



</script>

 <script type="text/javascript">
    $('body').on('click', '.approve-btn', function(event){
         event.preventDefault();
    var url = $(this).attr('href');
    swal({
        title: "Are you sure?",
        text: "Application will be approved",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn btn-danger",
        confirmButtonText: "Yes, approve !",
        cancelButtonText: "Cancel",
        closeOnConfirm: false,
        closeOnCancel: true,
        allowOutsideClick: true  
      },

      function(isConfirm) {
      if (isConfirm) {
         $.ajax({
             url: url,
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  swal("Approved!", "Application has been approve.", "success");

             }
          });
        } 
         $('#mytable').DataTable().ajax.reload();
      });

    })
</script>

<script type="text/javascript">
    $('body').on('click', '.reject-btn', function(event){
         event.preventDefault();
    var url = $(this).attr('href');
    swal({
        title: "Are you sure?",
        text: "Application will be reject",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, reject !",
        cancelButtonText: "Cancel",
        closeOnConfirm: false,
        closeOnCancel: true,
        allowOutsideClick: true  
      },

      function(isConfirm) {
      if (isConfirm) {
         $.ajax({
             url: url,
             error: function() {
                alert('Something is wrong');
             },
             success: function(data) {
                  swal("Rejected!", "Application has been reject.", "success");

             }
          });
        } 
         $('#mytable').DataTable().ajax.reload();
      });

    })
</script>