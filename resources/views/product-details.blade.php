<?php ?>
<?php $page = "addproduct"; ?>

@extends('layout.mainlayout')
@section('content')

    <div class="page-header">
        <div class="page-title">
            <h4>Product Details</h4>
            <h6>Full details of a product</h6>
        </div>
    </div>
    <!-- /add -->
    <div class="row">
        <div class="col-lg-8 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="bar-code-view">
                        <img src="assets/img/barcode1.png" alt="barcode">
                        <a class="printimg">
                            <img src="assets/img/icons/printer.svg" alt="print">
                        </a>
                    </div>
                    <div class="productdetails">
                        <ul class="product-bar">
                            <li>
                                <h4>Product</h4>
                                <h6>{{ $product->name }}</h6>
                            </li>
                            <li>
                                <h4>Code</h4>
                                <h6>CARCH122061010</h6>
                            </li>
                            <li>
                                <h4>Category</h4>
                                <h6>Marble</h6>
                            </li>
                            <li>
                                <h4>Finish</h4>
                                <h6>Honed</h6>
                            </li>
                            <li>
                                <h4>Size</h4>
                                <h6>1220*610*10</h6>
                            </li>
                            <li>
                                <h4>Create</h4>
                                <h6>MCP4062</h6>
                            </li>
                            <li>
                                <h4>Qty(sqm)</h4>
                                <h6>44.652</h6>
                            </li>
                            <li>
                                <h4>Qty(pcs)</h4>
                                <h6>60</h6>
                            </li>
                            <li>
                                <h4>Shade</h4>
                                <h6>A</h6>
                            </li>
                            <li>
                                <h4>Per box</h4>
                                <h6>2 PCS</h6>
                            </li>
                            <li>
                                <h4>Location</h4>
                                <h6>C2100R3</h6>
                            </li>
                            <li>
                                <h4>Status</h4>
                                <h6>Mix Create</h6>
                            </li>
                            <li>
                                <h4>Description</h4>
                                <h6>CARRARA GIOIA (RR) / 1 PC BROKEN
                                    (RETURNED)</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="slider-product-details">
                        <div class="owl-carousel owl-theme product-slide">
                            <div class="slider-product">
                                <img src="assets/img/product/product69.jpg" alt="img">
                                <h4>Carrara</h4>
                                <h6>1220*610*10</h6>
                            </div>
                            <div class="slider-product">
                                <img src="assets/img/product/product69.jpg" alt="img">
                                <h4>Carrara</h4>
                                <h6>1220*610*10</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /add -->
@endsection