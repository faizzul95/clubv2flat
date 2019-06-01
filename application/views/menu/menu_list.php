<title>CMS | List Of Menu</title>
    
<!-- Page-header start -->
<div class="page-header">
    <div class="page-header-title">
        <h4> List Of Menu</h4>
    </div>

    <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
            <li class="breadcrumb-item">
                <a href="index.html">
                    <i class="icofont icofont-home"></i>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#!">Menu</a>
            </li>
            <li class="breadcrumb-item"><a href="#!">List Of Menu</a>
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
                        <?php echo anchor(site_url('menu/create'), '<i class="fa fa-wpforms"></i> Add New Menu', 'class="btn btn-info"'); ?>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                         <div class="dt-responsive table-responsive">
                            <table id="mytable" class="table table-striped table-bordered nowrap">

                            <thead>
                                <tr>
                                    <th>No</th>
                        		    <th>Menu Title</th>
                        		    <th>Menu Url</th>
                        		    <th>Menu Icon</th>
                        		    <th>Is Main Menu</th>
                        		    <th>Is Active</th>
                        		    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
            						<th>Menu Title</th>
            						<th>Menu Url</th>
            						<th>Menu Icon</th>
            						<th>Is Main Menu</th>
            						<th>Is Active</th>
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
                    ajax: {"url": "menu/json", "type": "POST"},
                    columns: [
                        {
                            "data": "menu_id",
                            "orderable": false
                        },{"data": "menu_title"},{"data": "menu_url"},{"data": "menu_icon"},{"data": "is_main_menu"},{"data": "is_active"},
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

        <?php if ($this->session->flashdata('message')) { ?>
             <?php if ($this->session->flashdata('message') == "Record Not Found") { ?>
                 <script type="text/javascript">
                   // new PNotify({
                   //          title: 'ERROR !',
                   //          text:  '<?= $this->session->flashdata('message')?>',
                   //          icon: 'icofont icofont-info-circle',
                   //          type: 'error'
                   //      });
                   swal({
                        title: "ERROR !",
                        text: '<?= $this->session->flashdata('message')?>',
                        timer: 1600,
                        showConfirmButton: false,
                        allowOutsideClick: true,
                        type: 'error'
                    });
                </script>
            <?php }else{ ?>
                <script type="text/javascript">
                    setTimeout(function () {
                        swal({
                            title: "Success",
                            text: '<?= $this->session->flashdata('message')?>',
                            timer: 1800,
                            showConfirmButton: false,
                            allowOutsideClick: true,
                            type: 'success'
                        });
                        }, 250);
                </script>
            <?php } ?>
        <?php } ?>

        <script type="text/javascript">
            $('body').on('click', '.delete-btn', function(event){
                 event.preventDefault();
            var url = $(this).attr('href');
            swal({
                title: "Are you sure?",
                text: "Record will permanently deleted !",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes, delete !",
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
                          swal("Deleted!", "Your record has been deleted.", "success");

                     }
                  });
                } 
                 $('#mytable').DataTable().ajax.reload();
              });

            })
        </script>