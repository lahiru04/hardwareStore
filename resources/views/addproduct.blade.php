<?php ?>
<?php $page = "addproduct"; ?>

@extends('layout.mainlayout')
@section('content')


<div class="page-header">
    <div class="page-title">
        <h4>Product Add</h4>
        <h6>Create new Create</h6>
    </div>
</div>
<!-- /add -->
<div class="card">
    <div class="card-body">
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
                    <select class="select">
                        <option>Select Here</option>
                        <option>Travertine</option>
                        <option>Granite</option>
                        <option>Marble</option>
                        <option>Limestone</option>
                        <option>Bluestone</option>
                        <option>Mosaics</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Finish</label>
                    <select class="select">
                        <option>Select Here</option>
                        <option>Honed</option>
                        <option>Polish</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Brand</label>
                    <select class="select">
                        <option>Choose Brand</option>
                        <option>Brand</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Unit</label>
                    <select class="select">
                        <option>Choose Unit</option>
                        <option>Unit</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>SKU</label>
                    <input type="text" >
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Minimum Qty</label>
                    <input type="text" >
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="text" >
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control"></textarea>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Tax</label>
                    <select class="select">
                        <option>Choose Tax</option>
                        <option>2%</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Discount Type</label>
                    <select class="select">
                        <option>Percentage</option>
                        <option>10%</option>
                        <option>20%</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" >
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>	Status</label>
                    <select class="select">
                        <option>Closed</option>
                        <option>Open</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <label>	Product Image</label>
                    <div class="image-upload">
                        <input type="file">
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
          ? insertData()
          : t.dismiss === Swal.DismissReason.cancel &&
            Swal.fire({
              title: "Cancelled",
              text: "",
              type: "error",
              confirmButtonClass: "btn btn-success",
            });
      });
    
            
    
     });
    });
          
    
    function insertData()
    {
          let productName = $("#productName").val();
            let productCode = $("#productCode").val();
            $.ajax({
                url: "{{ route('insertProduct') }}",
                method: 'GET',
                dataType: 'json',
                data: {
                    name: productName, code: productCode, categoryId: 1, size: '120*235*56', location: 'C2123R4'
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

</script>    
@endsection