@extends('layouts.app')


@section('content')	
<div class="container">
	<form id="student-input" action="{{ action('StudentController@addItem') }}" method="post">
    {{csrf_field()}}
        <div class="form-group">
            <label>First Name</label>
            <input name="first_name" value="" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input name="last_name" value="" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" value="" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="selectpicker form-control">
            	<option value="Mail">Mail</option>
                <option value="Femail">Femail</option>
            </select>
        </div>
        <div class="form-group">
            <label>Age</label>
            <input name="age" value="" type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Session</label>
            <input name="session" value="" type="text" class="form-control" />
        </div>
        
       <input type="submit" name="submit" value="submit" class="" />
        
    </form>
</div>
@endsection