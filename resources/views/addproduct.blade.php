<?php ?>
<?php $page = "addproduct"; ?>

@extends('layout.mainlayout')
@section('content')


<div class="page-header">
    <div class="page-title">
        <h4>Product Add</h4>
        <h6>Create New Product</h6>
    </div>
</div>
<!-- /add -->
<div class="card">
    <div class="card-body">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Product Name</label>
                    <input id="productName" type="text" >
                </div>
            </div> <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Product Code</label>
                    <input id="productCode" type="text" >
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Category</label>
                    <select id ="categoryDropdown" class="select">
                        <option value="-1">Select Here</option>
                        <option value="1">Travertine</option>
                        <option value="2">Granite</option>
                        <option value="3">Marble</option>
                        <option value="4">Limestone</option>
                        <option value="5">Bluestone</option>
                        <option value="6">Mosaics</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Finish</label>
                    <select id="finishDropDown" class="select">
                        <option>Select Here</option>
                        <option value="Honed">Honed</option>
                        <option value="Polish">Polished</option>
                         <option value="PAVER_TUMBLED">PAVER_TUMBLED</option>
                        
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Size</label>
                    <input id="productSize" type="text" >
                    <label id="productSizeWarning" style="font-size: 12px; color: red;"></label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Crate No</label>
                    <input id="crateNo" type="text" >
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>QTY (SQM)</label>
                    <input id="qtySqm"  type="number" step=".01">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>QTY (PCS)</label>
                    <input id="qtyPcs" type="number" >
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Location</label>
                    <input id="location" type="text" >
                </div>
            </div>


            <div class="col-lg-12">
                <div class="form-group">
                    <label>Product Image</label>
                    <div class="image-upload">

                        <input type="file" id="productImage" name="productImage">
                        <div class="image-uploads">
                            <img src="assets/img/icons/upload.svg" alt="img">
                            <h4>Drag and drop a file to upload</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <a id="submitButton" class="btn btn-submit me-2">Submit</a>
                <a href="productlist" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
<!-- /add -->
@endsection

@section('jScript')
<script>
    $(document).ready(function () {
        // Button click event handler
        $("#submitButton").click(function () {


            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#198754",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, insert it!",
                confirmButtonClass: "btn btn-primary",
                cancelButtonClass: "btn btn-danger ml-1",
                buttonsStyling: !1,
            }).then(function (t) {
                t.value
                        ? insertDataAlt()
                        : t.dismiss === Swal.DismissReason.cancel &&
                        Swal.fire({
                            title: "Cancelled",
                            text: "",
                            type: "error",
                            confirmButtonClass: "btn btn-success",
                        });
            });



        });

        $('#productSize').on('input', function () {
            // Your action after text edit goes here
            var editedText = $(this).val();
            tileSizeValueValidator(editedText);
        });


        $('#qtySqm').on('input', function () {
            // Your action after text edit goes here
            var editedText = $(this).val();
            calculatePcs(editedText);

        });

        $('#qtyPcs').on('input', function () {
            // Your action after text edit goes here
            var editedText = $(this).val();
            calculateSQM(editedText);

        });
    });


    function insertData()
    {
        let productName = $("#productName").val();
        let productCode = $("#productCode").val();
        let productSize = $("#productSize").val();
        let qtySqm = $("#qtySqm").val();
        let qtyPcs = $("#qtyPcs").val();
        let categoryId = $('#categoryDropdown').val();
        let productFinish = $('#finishDropDown').val();
        let location = $("#location").val();
        let crateNo = $("#crateNo").val();
     
        
        $.ajax({
            url: "{{ route('insertProduct') }}",
            method: 'GET',
            dataType: 'json',
            data: {
                name: productName,
                code: productCode,
                categoryId: categoryId,
                productSize: productSize,
                location: location,
                crateNo: crateNo,
                qtySqm: qtySqm,
                qtyPcs: qtyPcs,
                productFinish: productFinish,
            

                        // Add more key-value pairs as needed
            },
            success: function (response) {
                Swal.fire({
                    type: "success",
                    title: "Inserted!",
                    text: "Your product has been inserted.",
                    confirmButtonClass: "btn btn-success",
                })
                console.log(response);
            }, error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
            }});




    }

    function tileSizeValueValidator(value)
    {

       var pattern = /^\d+\*\d+\*\d+$/;

        if (pattern.test(value)) {
            $('#productSizeWarning').text("");
        } else {
            $('#productSizeWarning').text("Value does not match the format");
        }
    }

    function calculateSQM(qtyS)
    {
        var value = $('#productSize').val();
        var numbers = value.split('*');

        var length = parseInt(numbers[0]);
        var width = parseInt(numbers[1]);

        var qty = parseInt(qtyS);
        var sqm = length * width * qty / 1000000;

        $('#qtySqm').val(sqm);

    }

    function calculatePcs(sqmS)
    {

        var value = $('#productSize').val();
        var numbers = value.split('*');

        var length = parseInt(numbers[0]);
        var width = parseInt(numbers[1]);

        var sqm = parseFloat(sqmS);
        var qty = sqm / (length * width / 1000000);

        $('#qtyPcs').val(qty);
    }
    
    function insertDataAlt() {
    let productName = $("#productName").val();
    let productCode = $("#productCode").val();
    let productSize = $("#productSize").val();
    let qtySqm = $("#qtySqm").val();
    let qtyPcs = $("#qtyPcs").val();
    let categoryId = $('#categoryDropdown').val();
    let productFinish = $('#finishDropDown').val();
    let location = $("#location").val();
    let crateNo = $("#crateNo").val();
    
    // Get the file input element
    let productImage = $("#productImage")[0].files[0];
    
    let formData = new FormData();
    formData.append('name', productName);
    formData.append('code', productCode);
    formData.append('categoryId', categoryId);
    formData.append('productSize', productSize);
    formData.append('location', location);
    formData.append('crateNo', crateNo);
    formData.append('qtySqm', qtySqm);
    formData.append('qtyPcs', qtyPcs);
    formData.append('productFinish', productFinish);
    formData.append('productImage', productImage);
    
    
        // Get the CSRF token value
    let csrfToken = $('meta[name="csrf-token"]').attr('content');

    // Add the CSRF token to the request headers
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken
        }
    });
   

    $.ajax({
        url: "{{ route('insertProductAlt') }}",
        method: 'POST', // Assuming you want to use POST method
        dataType: 'json',
        processData: false,
        contentType: false,
       
        data: formData,
        success: function (response) {
            Swal.fire({
                type: "success",
                title: "Inserted!",
                text: "Your product has been inserted.",
                confirmButtonClass: "btn btn-success",
            });
            console.log(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
        }
    });
}

</script>    
@endsection