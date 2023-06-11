<div class="page-header">
    @if(!Route::is(['chart-apex','chart-c3','chart-flot','chart-js','chart-morris','chart-peity','clipboard','counter','data-tables',
    'drag-drop','form-basic-inputs','form-fileupload','form-horizontal','form-input-groups','form-mask','form-select2','form-validation',
    'form-vertical','form-wizard','icon-feather','icon-flag','icon-fontawesome','icon-ionic','icon-material','icon-pe7','icon-simpleline',
    'icon-themify','icon-typicon','icon-weather','lightbox','notification','popover','rangeslider','rating','ribbon','scrollbar',
    'spinner','stickynote','sweetalerts','tables-basic','text-editor','timeline','toastr','tooltip']))
    <div class="page-title">
        <h4>{{ $title }}</h4>
        <h6>{{ $title_1 }}</h6>
    </div>
    @endif
    @if(Route::is(['brandlist']))
    <div class="page-btn">
        <a href="{{url('addbrand')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}"  class="me-2" alt="img">Add Brand</a>
    </div>
    @endif
    @if(Route::is(['categorylist']))
    <div class="page-btn">
        <a href="{{url('addcategory')}}" class="btn btn-added">
            <img src="{{ URL::asset('/assets/img/icons/plus.svg')}}"  class="me-1" alt="img">Add  Category
        </a>
    </div>
    @endif
    @if(Route::is(['countrieslist']))
    <div class="page-btn">
        <a href="{{url('newcountry')}}" class="btn btn-added">
            <img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add Country
        </a>
    </div>
    @endif
    @if(Route::is(['currencysettings']))
    <div class="page-btn">
        <a  class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addpayment"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Currency</a>
    </div>
    @endif
    @if(Route::is(['customerlist']))
    <div class="page-btn">
        <a href="{{url('addcustomer')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img">Add Customer</a>
    </div>
    @endif
    @if(Route::is(['expensecategory']))
    <div class="page-btn">
        <a href="{{url('createexpense')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img">Add EXPENSES CATEGORY</a>
    </div>
    @endif
    @if(Route::is(['expenselist']))
    <div class="page-btn">
        <a href="{{url('createexpense')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" class="me-2" alt="img">Add New Expense</a>
    </div>
    @endif
    @if(Route::is(['grouppermissions']))
    <div class="page-btn">
        <a  class="btn btn-added" href="{{url('createpermission')}}" ><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add Group Permission</a>
    </div>
    @endif
    @if(Route::is(['paymentsettings']))
    <div class="page-btn">
        <a  class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addpayment"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add Payment Settings</a>
    </div>
    @endif
    @if(Route::is(['productlist']))
    <div class="page-btn">
        <a href="{{url('addproduct')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Product</a>
    </div>
    @endif
    @if(Route::is(['purchaselist']))
    <div class="page-btn">
        <a href="{{url('addpurchase')}}" class="btn btn-added">
            <img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img">Add New Purchases
        </a>
    </div>
    @endif
    @if(Route::is(['purchasereturnlist']))
    <div class="page-btn">
        <a href="{{url('createpurchasereturn')}}" class="btn btn-added">
            <img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add Purchase Return
        </a>
    </div>
    @endif
    @if(Route::is(['quotationlist']))
    <div class="page-btn">
        <a href="{{url('addquotation')}}" class="btn btn-added">
            <img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2"> Add Quotation
        </a>
    </div>
    @endif
    @if(Route::is(['saleslist']))
    <div class="page-btn">
        <a href="{{url('add-sales')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add Sales</a>
    </div>
    @endif
    @if(Route::is(['salesreturnlist','salesreturnlists']))
    <div class="page-btn">
        <a href="{{url('createsalesreturn')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add New Sales Return</a>
    </div>
    @endif
    @if(Route::is(['statelist']))
    <div class="page-btn">
        <a href="{{url('newstate')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add State</a>
    </div>
    @endif
    @if(Route::is(['storelist']))
    <div class="page-btn">
        <a href="{{url('addstore')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add Store</a>
    </div>
    @endif
    @if(Route::is(['subcategorylist']))
    <div class="page-btn">
        <a href="{{url('subaddcategory')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}"  class="me-2" alt="img"> Add Sub Category</a>
    </div>
    @endif
    @if(Route::is(['supplierlist']))
    <div class="page-btn">
        <a href="{{url('addsupplier')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img">Add Supplier</a>
    </div>
    @endif
    @if(Route::is(['taxrates']))
    <div class="page-btn">
        <a  class="btn btn-added" data-bs-toggle="modal" data-bs-target="#addpayment"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-1">Add New Tax Rates</a>
    </div>
    @endif
    @if(Route::is(['transferlist']))
    <div class="page-btn">
        <a href="{{url('addtransfer')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add Transfer</a>
    </div>
    @endif
    @if(Route::is(['userlist']))
    <div class="page-btn">
        <a href="{{url('adduser')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img" class="me-2">Add User</a>
    </div>
    @endif
    @if(Route::is(['userlists']))
    <div class="page-btn">
        <a href="{{url('newuser')}}" class="btn btn-added"><img src="{{ URL::asset('/assets/img/icons/plus.svg')}}" alt="img">Add User</a>
    </div>
    @endif
    @if(Route::is(['chart-apex','chart-c3','chart-flot','chart-js','chart-morris','chart-peity','clipboard','counter','data-tables',
    'drag-drop','form-basic-inputs','form-fileupload','form-horizontal','form-input-groups','form-mask','form-select2','form-validation',
    'form-vertical','form-wizard','icon-feather','icon-flag','icon-fontawesome','icon-ionic','icon-material','icon-pe7','icon-simpleline',
    'icon-themify','icon-typicon','icon-weather','lightbox','notification','popover','rangeslider','rating','ribbon','scrollbar',
    'spinner','stickynote','sweetalerts','tables-basic','text-editor','timeline','toastr','tooltip']))
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">{{ $title }}</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('index')}}">{{ $li_1 }}</a></li>
                <li class="breadcrumb-item active">{{ $li_2 }}</li>
            </ul>
        </div>
    </div>
    @endif
</div>

