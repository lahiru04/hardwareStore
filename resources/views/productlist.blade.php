<?php ?>
<?php $page = "productlist"; ?>

@extends('layout.mainlayout')
@section('content')

<div class="page-header">
    <div class="page-title">
        <h4>Product List</h4>
        <h6>Manage the Products</h6>
    </div>
    <div class="page-btn">
        <a href="addproduct" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-1">Add New Product</a>
    </div>
</div>


<!-- /product list -->
<div class="card">
    <div class="card-body">
        <div class="table-top">
            <div class="search-set">
                <div class="search-path">
                    <a class="btn btn-filter" id="filter_search">
                        <img src="assets/img/icons/filter.svg" alt="img">
                        <span><img src="assets/img/icons/closes.svg" alt="img"></span>
                    </a>
                </div>
                <div class="search-input">
                    <a class="btn btn-searchset"><img src="assets/img/icons/search-white.svg" alt="img"></a>
                </div>
            </div>
            <div class="wordset">
                <ul>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                    </li>
                    <li>
                        <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
                    </li>
                    <li>
                        <a id="print" data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /Filter -->
        <div class="card mb-0" id="filter_inputs">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Choose Product</option>
                                        <option>Macbook pro</option>
                                        <option>Orange</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Choose Category</option>
                                        <option>Computers</option>
                                        <option>Fruits</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Choose Sub Category</option>
                                        <option>Computer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Brand</option>
                                        <option>N/D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg col-sm-6 col-12 ">
                                <div class="form-group">
                                    <select class="select">
                                        <option>Price</option>
                                        <option>150.00</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-1 col-sm-6 col-12">
                                <div class="form-group">
                                    <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Filter -->
        <div class="table-responsive">
            <table class="table  datanew" id="productTable">
                <thead>
                    <tr>
                        <th>
                            <label class="checkboxs">
                                <input type="checkbox" id="select-all">
                                <span class="checkmarks"></span>
                            </label>
                        </th>
                        <th>Product Name</th>
                        <th>Code</th>
                        <th>Category </th>
                        <th>Finish</th>
                        <th>Size</th>
                        <th>Crate #</th>
                        <th>Qty(sqm)</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    for($i=0;$i<count($products);$i++){
                                 $product =  $products[$i];  

                                 @endphp

                                 <tr>
                    <td>
                        <label class="checkboxs">
                            <input type="checkbox">
                            <span class="checkmarks"></span>
                        </label>
                    </td>
                    <td class="productimgname">
                        <a href="javascript:void(0);" class="product-img">
                            <img src="assets/img/product/product2.jpg" alt="product">
                        </a>
                        <a href="javascript:void(0);">{{$product->name}}</a>
                    </td>
                    <td>{{$product->name}}</td>
                    <td>{{$categories[$product->categoryId-1]}}</td>
                    <td>{{$product->finish}}</td>
                    <td>{{$product->size}}</td>
                    <td>{{$product->crate}}</td>
                    <td>{{$product->qtySqm}}</td>
                    <td>{{$product->location}}</td>
                    <td>
                        <a class="me-3" href="product-details?productID={{$product->id}}">
                            <img src="assets/img/icons/eye.svg" alt="img">
                        </a>
                        <a class="me-3" href="editproduct?productID={{$product->id}}">
                            <img src="assets/img/icons/edit.svg" alt="img">
                        </a>
                        <a class="confirm-text" href="javascript:deleteProduct({{$product->id}});">
                            <img src="assets/img/icons/delete.svg" alt="img">
                        </a>
                    </td>
                    </tr>

                    @php

                    } 
                    @endphp
                    </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /product list -->

@endsection

@section('jScript')
<script >




    $(document).ready(function () {
        var categories = $.makeArray(["Travertine", "Granite", "Marble", "Limestone", "Bluestone", "Mosaics"]);

        $('#print').click(function () {
            var printWindow = window.open('test1', 'test2');

            var table = document.getElementById('productTable');
            var clonedTable = table.cloneNode(true);

            // Remove the "Action" column and checkbox column
            var headerRow = clonedTable.querySelector('thead tr');
            headerRow.removeChild(headerRow.cells[0]); // Remove checkbox column
            headerRow.removeChild(headerRow.cells[8]); // Remove "Action" column

            var rows = clonedTable.querySelectorAll('tbody tr');
            rows.forEach(function (row) {
                row.removeChild(row.cells[0]); // Remove checkbox column
                row.removeChild(row.cells[8]); // Remove "Action" column
            });

            var content = `<h1>Printed Product List</h1>`;
            content += clonedTable.outerHTML;

            // Calculate total quantity
            var totalQty = 0;
            rows.forEach(function (row) {
                totalQty += parseFloat(row.cells[6].textContent); // Assuming the quantity is in the 8th column
            });

            content += `<p>Total Quantity: ${totalQty.toFixed(2)} sqm</p>`;

            printWindow.document.write(content);
            printWindow.document.close();
            printWindow.print();

        });



    });

    function deleteProduct(productId)
    {

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            confirmButtonClass: "btn btn-primary",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: !1,
        }).then(function (t) {

            let email = $('#email').val();
            let password = $('#password').val();


            $.ajax({
//            url: '/login', // Replace with the actual URL
                url: "{{ url('/sign-in') }}",
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    email: email,
                    password: password
                }

                ,
                success: function (response) {
                    // Handle the response from the server
                    console.log(response);


                }

                ,
                error: function (xhr, status, error) {
                    // Handle any errors that occurred during the Ajax call
                    console.log(error);
                }
            });

            /* t.value &&
             Swal.fire({
             type: "success",
             title: "Deleted!",
             text: "Your file has been deleted.",
             confirmButtonClass: "btn btn-success",
             });*/
        });
    }

</script>
@endsection