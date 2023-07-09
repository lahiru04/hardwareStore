<?php ?>
<?php $page = "editproduct"; ?>

@extends('layout.mainlayout')
@section('content')


<div class="page-header">
    <div class="page-title">
        <h4>Product Edit</h4>
        <h6>Modify Current Product</h6>
         <input id="productId" type="hidden" value="{{ $product->id }}">
    </div>
</div>
<!-- /add -->
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Product Name</label>
                    <input id="productName" type="text" value="{{ $product->name }}"> 
                </div>
            </div> <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Product Code</label>
                    <input id="productCode" type="text"  value="{{ $product->code }}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Category </label> 
                    <select id ="categoryDropdown" class="select">
                         <option value="-1">Select Here</option>
                         @php

                         for($i=0;$i<count($categories);$i++)
                                          {
                                          $category = $categories[$i];

                                          $j =$i+1;

                                          if($j== $product->categoryId)
                             {
                             @endphp
                             <option value="{{$j}}" selected>{{ $category }}</option>
                             @php 
                             }else
                             @endphp
                             <option value="{{$j}}" >{{ $category }}</option>

                             @php
                             {
                             }


                             }
                             @endphp
                       
                        
                  
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Finish</label>
                    <select id="finishDropDown" class="select">
                        <option value="-1">Select Here</option>
                        @php
                        for($i=0;$i<count($finishes);$i++){
                                         $finish =  $finishes[$i];  

                            if($finish==$product->finish)
                            {@endphp
                            <option value="{{$finish}}" selected>{{ $finish }}</option>
                            @php
                            }else
                            {
                            @endphp
                            <option value="{{$finish}}" >{{ $finish }}</option>
                            @php                   }

                            } @endphp
                     
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Size</label>
                    <input id="productSize" type="text" value="{{ $product->size }}">
                    <label id="productSizeWarning" style="font-size: 12px; color: red;"></label>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Crate No</label>
                    <input id="crateNo" type="text" value="{{ $product->crate }}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>QTY (SQM)</label>
                    <input id="qtySqm"  type="number" step=".01" value="{{ $product->qtySqm }}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>QTY (PCS)</label>
                    <input id="qtyPcs" type="number" value="{{ $product->qtyPcs }}">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Location</label>
                    <input id="location" type="text" value="{{ $product->location }}">
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
                <a id="submitButton" class="btn btn-submit me-2">Update</a>
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
                confirmButtonText: "Yes, update it!",
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
        let productId = $("#productId").val();
        let productName = $("#productName").val();
        let productCode = $("#productCode").val();
        let productSize = $("#productSize").val();
        let qtySqm = $("#qtySqm").val();
        let qtyPcs = $("#qtyPcs").val();
        let categoryId = $('#categoryDropdown').val();
        let productFinish = $('#finishDropDown').val();
        let location = $("#location").val();
        let crateNo = $("#crateNo").val();
        let imageUrl = "xxxxxx ";
        
        $.ajax({
            url: "{{ route('updateProduct') }}",
            method: 'GET',
            dataType: 'json',
            data: {
                productId:productId,
                name: productName,
                code: productCode,
                categoryId: categoryId,
                productSize: productSize,
                location: location,
                crateNo: crateNo,
                qtySqm: qtySqm,
                qtyPcs: qtyPcs,
                productFinish: productFinish,
                imageUrl:imageUrl

                        // Add more key-value pairs as needed
            },
            success: function (response) {
                Swal.fire({
                    type: "success",
                    title: "Updated!",
                    text: "Your product has been updated.",
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
</script>    
@endsection