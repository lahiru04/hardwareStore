<?php ?>
<?php $page="sample";?>



@extends('layout.mainlayout')
@section('content')
<div>
	<h1>Welcome to My Page</h1>
	<p>This is my page. Here's an image:</p>
	<img src="{{ asset('assets/img/login.jpg') }}" alt="My Image">

</div>
@endsection

@section('jScript')
<script >
$(document).ready(function() {
    alert("test");
    
});

</script>
@endsection

