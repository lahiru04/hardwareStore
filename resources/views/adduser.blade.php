<?php ?>
<?php $page = "adduser"; ?>

@extends('layout.mainlayout')
@section('content')


<div class="page-header">
    <div class="page-title">
        <h4>User Management</h4>
        <h6>Add/Update User</h6>
    </div>
</div>
<!-- /add -->
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>Name</label>
                    <input id="fullName" type="text" >
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <div class="pass-group">
                        <input id="password" type="password" class=" pass-input">
                        <span class="fas toggle-password fa-eye-slash"></span>
                    </div>
                </div>

                <div class="form-group">
                    <label>Role</label>
                    <select class="select">
                        <option>Select</option>
                        <option>Role</option>
                        <option>Role1</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">

                <div class="form-group">
                    <label>Email</label>
                    <input id="email" type="text" >
                </div>


                <div class="form-group">
                    <label>Confirm  Password</label>
                    <div class="pass-group">
                        <input id="rePassword" type="password" class=" pass-inputs">
                        <span class="fas toggle-passworda fa-eye-slash"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="form-group">
                    <label>	Profile Picture</label>
                    <div class="image-upload image-upload-new">
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
                <a href="home" class="btn btn-cancel">Cancel</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('jScript')
<script>
    $(document).ready(function() {
    $('#submitButton').click(function() {
        let fullName = $('#fullName').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let rePassword = $('#rePassword').val();
       
        $.ajax({
            url: "{{ url('/registerUser') }}", // Replace with the actual URL
            
            type: 'POST',
            data: {
                // Specify the data you want to send
                "_token": "{{ csrf_token() }}",
                fullName: fullName,
                email: email,
                password: password,
                rePassword: rePassword
            }

            ,
            success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                    var jsonString = JSON.stringify(response);
                    var jsonObject = JSON.parse(jsonString);
                    
                    if(jsonObject.type === 0)
                    {
                         Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: jsonObject.message,
                    confirmButtonColor: '#FF9F43',
                     });
                    }else
                    {
                           Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: jsonObject.message,
                    confirmButtonColor: '#FF9F43',
                     }); 
                    }

                   
                }

                ,
            error: function(xhr, status, error) {
                // Handle any errors that occurred during the Ajax call
                console.log(error);
            }
        });

    });

});


    $(document).ready(function() {
    $('#btnSignUp').click(function() {
        let fullName = $('#fullName').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let rePassword = $('#rePassword').val();
       
        $.ajax({
            url: "{{ url('/registerUser') }}", // Replace with the actual URL
            
            type: 'POST',
            data: {
                // Specify the data you want to send
                "_token": "{{ csrf_token() }}",
                fullName: fullName,
                email: email,
                password: password,
                rePassword: rePassword
            }

            ,
            success: function(response) {
                    // Handle the response from the server
                    console.log(response);
                    var jsonString = JSON.stringify(response);
                    var jsonObject = JSON.parse(jsonString);
                    
                    if(jsonObject.type === 0)
                    {
                         Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: jsonObject.message,
                    confirmButtonColor: '#FF9F43',
                     });
                    }else
                    {
                           Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: jsonObject.message,
                    confirmButtonColor: '#FF9F43',
                     }); 
                    }

                   
                }

                ,
            error: function(xhr, status, error) {
                // Handle any errors that occurred during the Ajax call
                console.log(error);
            }
        });

    });

});


</script>
<!-- /add -->
@endsection