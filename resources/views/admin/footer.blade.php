<!-- /.content-wrapper -->

</div>
<!-- /.wrapper -->
<!-- Start Core Plugins
         =====================================================================-->
<!-- jQuery -->
<script src="{{ asset('admin_assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="{{ asset('admin_assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<!-- lobipanel -->
<script src="{{ asset('admin_assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
<!-- Pace js -->
<script src="{{ asset('admin_assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin_assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"> </script>
<!-- FastClick -->
<script src="{{ asset('admin_assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
<!-- CRMadmin frame -->
<script src="{{ asset('admin_assets/dist/js/custom.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/dist/js/inputtag.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/dist/js/fSelect.js')}}" type="text/javascript"></script>

<script src="{{ asset('admin_assets/plugins/summernote/summernote.js')}}" type="text/javascript"></script>

<script src="{{ asset('admin_assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
<script src="{{ asset('admin_assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('admin_assets/plugins1/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin_assets/plugins1/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin_assets/plugins1/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin_assets/plugins1/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin_assets/plugins1/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="{{ asset('admin_assets/plugins/bootstrap-toggle/bootstrap-toggle.min.js')}}" type="text/javascript">
</script>
<!-- End Page Lavel Plugins
         =====================================================================-->
<!-- Start Theme label Script
         =====================================================================-->
<!-- Dashboard js -->
<script src="{{ asset('admin_assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
<!-- End Theme label Script
         =====================================================================-->
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>


    <script>
	var base_path='@php echo url('/'); @endphp';
    $(document).ready(function () {
        $('.data-table').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "{{ url('admin/users') }}",
                     "dataType": "json",
                     "type": "get",
				   },
				 
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'email', name: 'email'},
                    {data: 'otp', name: 'otp'},
                    {data: 'status', name: 'status', searchable: false},
                ],
        });
		$('body').on('click', '.edit-user', function () {
		var formAction=$(this).attr('action');
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var status = $(this).attr('status');
        var user_id = $(this).data('id');
			  $.ajax({
				  type: "get",
				  url: base_path+'/'+formAction,
				  data: {
						'status': status,
						'user_id': user_id
					},
				  success: function (data) {
				  var oTable = $('.data-table').dataTable(); 
				  oTable.fnDraw(false);
				  toastr.success(data.success);
				  },
				  error: function (data) {
					  console.log('Error:', data);
					  toastr.error(data.error);
				  }
			  });
		});
    });
	
	
	//products
	$(document).ready(function () {
        $('.products').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
			"ajax":{
                     "url": "{{ url('admin/products/products') }}",
                     "dataType": "json",
                     "type": "get",
				   },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'country_of_origion', name: 'country_of_origion'},
                    {data: 'stock', name: 'stock'},
                    {data: 'sku', name: 'sku'},
                    {data: 'price', name: 'price'},
                    {data: 'cate_title', name: 'cate_title'},
					{data: 'feturestatus', name: 'feturestatus'},
					{data: 'quick_products', name: 'quick_products'},
					{data: 'status', name: 'status'},
					{data: 'action', name: 'action'},
                ]
        });
		$('body').on('click', '.edit-product', function () {
		var formAction=$(this).attr('action');
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var status = $(this).attr('status');
        var user_id = $(this).data('id');
			  $.ajax({
				  type: "get",
				  url: base_path+'/'+formAction,
				  data: {
						'status': status,
						'user_id': user_id
					},
				  success: function (data) {
				  var oTable = $('.products').dataTable(); 
				  oTable.fnDraw(false);
				  toastr.success(data.success);
				  },
				  error: function (data) {
					  console.log('Error:', data);
					  toastr.error(data.error);
				  }
			  });
		});
    });
	
	//coupon code ajax data-table
	$(document).ready(function () {
        $('.coupon').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
			"ajax":{
                     "url": "{{ url('admin/products/coupon') }}",
                     "dataType": "json",
                     "type": "get",
				   },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'start_date', name: 'start_date'},
                    {data: 'end_date', name: 'end_date'},
                    {data: 'coupon_code', name: 'coupon_code'},
                    {data: 'discount', name: 'discount'},
					{data: 'image', name: 'image'},
					{data: 'status', name: 'Active /Inactive'},
					{data: 'action', name: 'action'},
                ]
        });
		$('body').on('click', '.edit-coupon', function () {
		var formAction=$(this).attr('action');
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var status = $(this).attr('status');
        var user_id = $(this).data('id');
			  $.ajax({
				  type: "get",
				  url: base_path+'/'+formAction,
				  data: {
						'status': status,
						'user_id': user_id
					},
				  success: function (data) {
				  var oTable = $('.coupon').dataTable(); 
				  oTable.fnDraw(false);
				  toastr.success(data.success);
				  },
				  error: function (data) {
					  console.log('Error:', data);
					  toastr.error(data.error);
				  }
			  });
		});
		
	//contact ajax
	$('.contact').DataTable({
        dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "{{ url('admin/contact') }}",
                     "dataType": "json",
                     "type": "get",
				   },
				 
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'email', name: 'email'},
                    {data: 'message', name: 'message'},
                    {data: 'action', name: 'action', searchable: false},
                ],
        });
		//bulk enquiry
		$('.enquiry').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "{{ url('admin/bulk-enquiry') }}",
                     "dataType": "json",
                     "type": "get",
				   },
				 
                columns: [
                    {data: 'id', name: 'id'},
					{data: 'company_name', name: 'company_name'},
                    {data: 'contact_person', name: 'contact_person'},
                    {data: 'email', name: 'email'},
					{data: 'phone', name: 'phone'},
                    {data: 'message', name: 'message'},
                    {data: 'action', name: 'action', searchable: false},
                ],
        });
		
		//Login activity
		$('.activity').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
            "ajax":{
                     "url": "{{ url('admin/login-activity') }}",
                     "dataType": "json",
                     "type": "get",
				   },
				 
                columns: [
                    {data: 'id', name: 'id'},
					{data: 'name', name: 'name'},
					{data: 'mobile', name: 'mobile'},
                    {data: 'email', name: 'email'},
					{data: 'created_at', name: 'created_at'},
                ],
        });
		
		//sales details ajax
		$('.sales').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
			"ajax":{
                     "url": "{{ url('admin/sales') }}",
                     "dataType": "json",
                     "type": "get",
				   },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'mobile', name: 'mobile'},
                    {data: 'order_id', name: 'order_id'},
					{data: 'date', name: 'date'},
					{data: 'sub_total', name: 'sub_total'},
					{data: 'address', name: 'address'},
					{data: 'payment_type', name: 'payment_type'},
					{data: 'status', name: 'status'},
					{data: 'action', name: 'action'},
                ]
        });
		
		//blog datatable ajax
		
		 $('.blog').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'pageLength',
                'csv'
            ],
            "processing": true,
            "serverSide": true,
			"ajax":{
                     "url": "{{ url('admin/blogs/blog') }}",
                     "dataType": "json",
                     "type": "get",
				   },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'image', name: 'image'},
                    {data: 'name', name: 'name'},
					{data: 'status', name: 'Active /Inactive'},
					{data: 'action', name: 'action'},
                ]
        });
		$('body').on('click', '.edit-blog', function () {
		var formAction=$(this).attr('action');
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var status = $(this).attr('status');
        var user_id = $(this).data('id');
			  $.ajax({
				  type: "get",
				  url: base_path+'/'+formAction,
				  data: {
						'status': status,
						'user_id': user_id
					},
				  success: function (data) {
				  var oTable = $('.blog').dataTable(); 
				  oTable.fnDraw(false);
				  toastr.success(data.success);
				  },
				  error: function (data) {
					  console.log('Error:', data);
					  toastr.error(data.error);
				  }
			  });
		});
		
    });
	
</script>

<script>
$(document).ready(function() {
    $('#example2').dataTable({
        dom: 'Bfrtip',
        lengthMenu: [
            [10, 25, 50, -1],
            ['10 rows', '25 rows', '50 rows', 'Show all']
        ],
        buttons: [
            'pageLength',
            'csv'
        ]
    });
});




(function($) {
    $(function() {
        $('.test').fSelect();
    });
})(jQuery);

$('#startDate').datepicker({
    dateFormat: 'dd-mm-yy',
    changeYear: true,
    minDate: '-D'
});
$('#endDate').datepicker({
    dateFormat: 'dd-mm-yy',
    changeYear: true,
    minDate: '-D'
});
$('.date').datepicker({
    dateFormat: 'dd-mm-yy',
    yearRange: "-60:+0",
    changeYear: true,
});
</script>
<script>
//Summernote
function sumnote() {
    var note = $('#summernote');
    $(note).summernote({
        height: 200, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: true // set focus to editable area after initializing summernote
    });
}
sumnote();
</script>
<script>
$(document).ready(function() {
    // show the alert
    window.setTimeout(function() {
        $(".alert").show(5, function() {
            toastr.options = {
                "closeButton": true,
                "newestOnTop": true,
                "positionClass": "toast-top-right"
            };
            @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @elseif(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
            @endif
        });
    }, 10);
});


// add attributs of products
var i = 0;

$("#add").click(function() {

    ++i;

    $("#dynamicTable").append(
        '<tr><td><input required type="text" name="color[]" placeholder="Enter Products Color" class="form-control" /></td><td><input type="text" name="size[]" placeholder="Enter Products Color" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>'
        );
});

$(document).on('click', '.remove-tr', function() {
    $(this).parents('tr').remove();
});


function previewImages() {

    var preview = document.querySelector('#preview');

    if (this.files) {
        [].forEach.call(this.files, readAndPreview);
    }

    function readAndPreview(file) {

        // Make sure `file.name` matches our extensions criteria
        if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
            return alert(file.name + " is not an image");
        } // else...

        var reader = new FileReader();

        reader.addEventListener("load", function() {
            var image = new Image();
            image.height = 100;
            image.title = file.name;
            image.src = this.result;
            preview.appendChild(image);
            $("#preview").append(
                '<input type="text" required style="width: 70%;margin: 10px;display: inline;" name="imageorder[]" placeholder="Enter Image Order Ex. 1,2,3" class="form-control" />'
                );

        });

        reader.readAsDataURL(file);
    }

}
document.querySelector('#file-input').addEventListener("change", previewImages);

//drag and drop image code


function loadFile() {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
}
</script>
<script>
ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });
</script>

<script>
    var base_path='@php echo url('/'); @endphp';
$(function() {
    $('.toggle-class').change(function() {
        var formAction=$(this).attr('action');
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
        var status = $(this).prop('checked') == true ? 1 : 0;
        var user_id = $(this).data('id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: base_path+'/'+formAction,
            data: {
                'status': status,
                'user_id': user_id
            },
            success: function(data) {
                console.log(data.success)
                toastr.success(data.success);
            }
        });
    })
})
</script>
</body>

</html>