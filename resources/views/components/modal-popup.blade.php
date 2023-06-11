<!-- Modal -->
<div class="modal fade" id="scanner" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Barcode</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-barcode">
                    <ul>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/barcode1.png')}}" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-print"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">Print</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@if(Route::is(['calendar']))
<!-- Add Event Modal -->
<div id="add_event" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Event Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Event Date <span class="text-danger">*</span></label>
                        <div class="cal-icon">
                            <input class="form-control " type="text">
                        </div>
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Event Modal -->

<!-- Add Event Modal -->
<div class="modal custom-modal fade none-border" id="my_event">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-success save-event submit-btn">Create event</button>
                <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- /Add Event Modal -->

<!-- Add Category Modal -->
<div class="modal custom-modal fade" id="add_new_event">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                    </div>
                    <div class="form-group mb-0">
                        <label>Choose Category Color</label>
                        <select class="form-control form-white select" data-placeholder="Choose a color..." name="category-color">
                            <option value="success">Success</option>
                            <option value="danger">Danger</option>
                            <option value="info">Info</option>
                            <option value="primary">Primary</option>
                            <option value="warning">Warning</option>
                            <option value="inverse">Inverse</option>
                        </select>
                    </div>
                    <div class="submit-section">
                        <button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Category Modal -->
@endif
@if(Route::is(['countrieslist']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 1500.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif
@if(Route::is(['saleslist']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 0.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-groupicon">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <div class="addonset">
                                    <img src="{{ URL::asset('/assets/img/icons/calendars.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="0.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="0.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-groupicon">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <div class="addonset">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="0.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="0.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-0">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif
@if(Route::is(['currencysettings']))
<!-- add Modal -->
<div class="modal fade" id="addpayment" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Add Currency </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Currency Name<span class="manitory">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Currency Code</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Currency Symbol<span class="manitory">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label>Status</label>
                            <select class="select">
                                <option>Choose Status</option>
                                <option> Active</option>
                                <option> InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Confirm</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- edit Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Edit  Currency</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Currency Name<span class="manitory">*</span></label>
                            <input type="text" placeholder="India - Indian rupee">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Currency Code</label>
                            <input type="text" placeholder="INR">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Currency Symbol<span class="manitory">*</span></label>
                            <input type="text" placeholder="₹">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label>Status</label>
                            <select class="select">
                                <option> Active</option>
                                <option> InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Update</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endif
@if(Route::is(['customerlist']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 1500.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif
@if(Route::is(['paymentsettings']))
<!-- add Modal -->
<div class="modal fade" id="addpayment" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Add payment type</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Payment Name</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label>Status</label>
                            <select class="select">
                                <option>Choose Status</option>
                                <option> Active</option>
                                <option> InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-submit">Confirm</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- edit Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Edit payment type</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Payment Name</label>
                            <input type="text" value="Cash">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label>Status</label>
                            <select class="select">
                                <option> Active</option>
                                <option> InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Update</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
@endif
@if(Route::is(['pos']))
<div class="modal fade" id="calculator" tabindex="-1"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" >Define Quantity</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="calculator-set">
                    <div class="calculatortotal">
                        <h4>0</h4>
                    </div>
                    <ul>
                        <li>
                            <a href="javascript:void(0);">1</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">2</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">3</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">4</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">5</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">6</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">7</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">8</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">9</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-closes"><img src="{{ URL::asset('/assets/img/icons/close-circle.svg')}}" alt="img"></a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">0</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn btn-reverse"><img src="{{ URL::asset('/assets/img/icons/reverse.svg')}}" alt="img"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="holdsales" tabindex="-1"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" >Hold order</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="hold-order">
                    <h2>4500.00</h2>
                </div>
                <div class="form-group">
                    <label>Order Reference</label>
                    <input type="text">
                </div>
                <div class="para-set">
                    <p>The current order will be set on hold. You can retreive this order from the pending order button. Providing a reference to it might help you to identify the order more quickly.</p>
                </div>
                <div class="col-lg-12">
                    <a class="btn btn-submit me-2">Submit</a>
                    <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit" tabindex="-1"    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" >Edit Order</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Product Price</label>
                            <input type="text" value="20">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Product Price</label>
                            <select class="select">
                                <option>Exclusive</option>
                                <option>Inclusive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label> Tax</label>
                            <div class="input-group">
                                <input type="text">
                                <a class="scanner-set input-group-text">
                                    %
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Discount Type</label>
                            <select class="select">
                                <option>Fixed</option>
                                <option>Percentage</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Discount</label>
                            <input type="text" value="20">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Sales Unit</label>
                            <select class="select">
                                <option>Kilogram</option>
                                <option>Grams</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a class="btn btn-submit me-2">Submit</a>
                    <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="create"  aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" >Create</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer Name</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Country</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>City</label>
                            <input type="text" >
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" >
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a class="btn btn-submit me-2">Submit</a>
                    <a class="btn btn-cancel" data-bs-dismiss="modal">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="delete" tabindex="-1"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" >Order Deletion</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="delete-order">
                    <img src="{{ URL::asset('/assets/img/icons/close-circle1.svg')}}" alt="img">
                </div>
                <div class="para-set text-center">
                    <p>The current order will be deleted as no payment has been <br> made so far.</p>
                </div>
                <div class="col-lg-12 text-center">
                    <a class="btn btn-danger me-2">Yes</a>
                    <a class="btn btn-cancel" data-bs-dismiss="modal">No</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="recents" tabindex="-1"    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" >Recent Transactions</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tabs-sets">
                    <ul class="nav nav-tabs" id="myTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="purchase-tab" data-bs-toggle="tab" data-bs-target="#purchase" type="button"   aria-controls="purchase" aria-selected="true" role="tab">Purchase</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button"   aria-controls="payment" aria-selected="false" role="tab">Payment</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="return-tab" data-bs-toggle="tab" data-bs-target="#return" type="button"   aria-controls="return" aria-selected="false" role="tab">Return</button>
                        </li>
                        </ul>
                        <div class="tab-content" >
                        <div class="tab-pane fade show active" id="purchase" role="tabpanel" aria-labelledby="purchase-tab">
                            <div class="table-top">
                                <div class="search-set">
                                    <div class="search-input">
                                        <a class="btn btn-searchset"><img src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="wordset">
                                    <ul>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ URL::asset('/assets/img/icons/pdf.svg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ URL::asset('/assets/img/icons/excel.svg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table datanew">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Reference</th>
                                            <th>Customer</th>
                                            <th>Amount	</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>INV/SL0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="payment" role="tabpanel" >
                            <div class="table-top">
                                <div class="search-set">
                                    <div class="search-input">
                                        <a class="btn btn-searchset"><img src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="wordset">
                                    <ul>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ URL::asset('/assets/img/icons/pdf.svg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ URL::asset('/assets/img/icons/excel.svg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table datanew">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Reference</th>
                                            <th>Customer</th>
                                            <th>Amount	</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0102</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0103</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0104</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0105</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0106</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0107</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="return" role="tabpanel" >
                            <div class="table-top">
                                <div class="search-set">
                                    <div class="search-input">
                                        <a class="btn btn-searchset"><img src="{{ URL::asset('/assets/img/icons/search-white.svg')}}" alt="img"></a>
                                    </div>
                                </div>
                                <div class="wordset">
                                    <ul>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="{{ URL::asset('/assets/img/icons/pdf.svg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="{{ URL::asset('/assets/img/icons/excel.svg')}}" alt="img"></a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table datanew">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Reference</th>
                                            <th>Customer</th>
                                            <th>Amount	</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0101</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0102</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0103</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0104</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0105</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0106</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2022-03-07	</td>
                                            <td>0107</td>
                                            <td>Walk-in Customer</td>
                                            <td>$ 1500.00</td>
                                            <td>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/eye.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                                </a>
                                                <a class="me-3 confirm-text" href="javascript:void(0);">
                                                    <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@if(Route::is(['statelist']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 1500.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif
@if(Route::is(['supplierlist']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 1500.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif
@if(Route::is(['taxrates']))
<!-- add Modal -->
<div class="modal fade" id="addpayment" tabindex="-1" role="dialog"   aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Add TAX </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tax Name<span class="manitory">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tax Rate(%)<span class="manitory">*</span></label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label>Status</label>
                            <select class="select">
                                <option>Choose Status</option>
                                <option> Active</option>
                                <option> InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Confirm</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- edit Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" role="dialog"    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Edit  Tax</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tax Name<span class="manitory">*</span></label>
                            <input type="text" value="SGST 4.5%	">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Tax Rate(%)<span class="manitory">*</span></label>
                            <input type="text" value="4.50">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group mb-0">
                            <label>Status</label>
                            <select class="select">
                                <option> Active</option>
                                <option> InActive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Update</button>
                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->
@endif
@if(Route::is(['userlist']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 1500.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif
@if(Route::is(['userlists']))
<!-- show payment Modal -->
<div class="modal fade" id="showpayment" tabindex="-1" aria-labelledby="showpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Show Payments</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Reference</th>
                                <th>Amount	</th>
                                <th>Paid By	</th>
                                <th>Paid By	</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bor-b1">
                                <td>2022-03-07	</td>
                                <td>INV/SL0101</td>
                                <td>$ 1500.00	</td>
                                <td>Cash</td>
                                <td>
                                    <a class="me-2" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/printer.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2" href="javascript:void(0);" data-bs-target="#editpayment" data-bs-toggle="modal" data-bs-dismiss="modal" >
                                        <img src="{{ URL::asset('/assets/img/icons/edit.svg')}}" alt="img">
                                    </a>
                                    <a class="me-2 confirm-text" href="javascript:void(0);">
                                        <img src="{{ URL::asset('/assets/img/icons/delete.svg')}}" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- show payment Modal -->
<div class="modal fade" id="createpayment" tabindex="-1" aria-labelledby="createpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- show payment Modal -->

<!-- edit payment Modal -->
<div class="modal fade" id="editpayment" tabindex="-1" aria-labelledby="editpayment" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Payment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Customer</label>
                            <div class="input-group">
                                <input type="text" value="2022-03-07" class="datetimepicker">
                                <a class="scanner-set input-group-text">
                                    <img src="{{ URL::asset('/assets/img/icons/datepicker.svg')}}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Reference</label>
                            <input type="text" value="INV/SL0101">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Received Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Paying Amount</label>
                            <input type="text" value="1500.00">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-12">
                        <div class="form-group">
                            <label>Payment type</label>
                            <select class="select">
                                <option>Cash</option>
                                <option>Online</option>
                                <option>Inprogress</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-submit">Submit</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- edit payment Modal -->
@endif