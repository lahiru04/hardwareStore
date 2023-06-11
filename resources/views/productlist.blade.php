<?php ?>
<?php $page="productlist";?>

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
											<a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
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
											<th>Create #</th>
											<th>Qty(sqm)</th>
											<th>Location</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										
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
												<a href="javascript:void(0);">Verde Alpi Green</a>
											</td>
											<td>VAP61305</td>
											<td>Marble</td>
											<td>Polished</td>
											<td>610*305*10</td>
											<td>MDB068</td>
											<td>33.489</td>
											<td>C2092R1</td>
											<td>
												<a class="me-3" href="product-details">
													<img src="assets/img/icons/eye.svg" alt="img">
												</a>
												<a class="me-3" href="editproduct">
													<img src="assets/img/icons/edit.svg" alt="img">
												</a>
												<a class="confirm-text" href="javascript:void(0);">
													<img src="assets/img/icons/delete.svg" alt="img">
												</a>
											</td>
										</tr>
									
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- /product list -->
				
@endsection

@section('jScript')
<script >




    $(document).ready(function() {
        // AJAX request to load data into the table
        $.ajax({
            url: "{{ route('loadAllProducts') }}",
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                // Iterate through the response data and add rows to the table
                $.each(response, function(index, product) {
//                    var row = '<tr>' +
//                        '<td>' + product.id + '</td>' +
//                        '<td>' + product.name + '</td>' +
//                        '</tr>';
                
                   var row = '<tr>' +
        '<td>' +
        '<label class="checkboxs">' +
        '<input type="checkbox">' +
        '<span class="checkmarks"></span>' +
        '</label>' +
        '</td>' +
        '<td class="productimgname">' +
        '<a href="{{ url('/product-details') }}?productID='+product.id+'" class="product-img">' +
        '<img src="assets/img/product/product2.jpg" alt="product">' +
        '</a>' +
        '<a href="{{ url('/product-details') }}?productID='+product.id+'">' + product.name + '</a>' +
        '</td>' +
        '<td>' + product.code + '</td>' +
        '<td>Marble</td>' +
        '<td>Polished</td>' +
        '<td>610*305*10</td>' +
        '<td>MDB068</td>' +
        '<td>33.489</td>' +
        '<td>C2092R1</td>' +
        '<td>' +
        '<a class="me-3" href="product-details">' +
        '<img src="assets/img/icons/eye.svg" alt="img">' +
        '</a>' +
        '<a class="me-3" href="editproduct">' +
        '<img src="assets/img/icons/edit.svg" alt="img">' +
        '</a>' +
        '<a class="confirm-text" href="javascript:void(0);">' +
        '<img src="assets/img/icons/delete.svg" alt="img">' +
        '</a>' +
        '</td>' +
        '</tr>';
                
                    $('#productTable tbody').append(row);
                });
            }
        });
    });


</script>
@endsection