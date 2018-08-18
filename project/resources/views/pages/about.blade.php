@extends('layouts.app')

@section('content')
    <h1><?php echo $title; ?></h1>
    <p>This is the about page</p>
    <hr/>
    <p>Hi I am Marlon Tamo from Baguio City Philippines</p>
   <br/>
  
    <form action="" method="post">
   
    	<input type="text" placeholder="Username" name="Username">
    	<input type="Email" placeholder="Email" name="email">
    	<textarea name="message" class="message textarea" ></textarea>
    	<input type="submit" value="validate" class="btn-warning btn btn-sm" name="submit"/>

    </form>
    
@endsection