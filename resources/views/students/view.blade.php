
@extends('layouts.app')


@section('content')	
<div class="container">
<table class="table table-striped table-bordered" id="editable-datatable">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Age</th>
            <th class="text-center">Session</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($student as $student)
    <tr class="item{{$student->id}}">
        <td>{{$student->id}}</td>
        <td>{{$student->first_name}}</td>
        <td>{{$student->last_name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->gender}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->session}}</td>
        <td><button class="edit-modal btn btn-info"
                data-info="{{$student->id}},{{$student->first_name}},{{$student->last_name}},{{$student->email}},{{$student->gender}},{{$student->age}},{{$student->session}}">
                <span class="glyphicon glyphicon-edit"></span> Edit
            </button>
            <button class="delete-modal btn btn-danger"
                data-info="{{$student->id}},{{$student->first_name}},{{$student->last_name}},{{$student->email}},{{$student->gender}},{{$student->age}},{{$student->session}}">
                <span class="glyphicon glyphicon-trash"></span> Delete
            </button></td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="student_form" action="{{ action('StudentController@editItem') }}">
                <div class="modal-header">
                   <button type="button" class="close" student-dismiss="modal">&times;</button>
                   <h4 class="modal-title">Add Data</h4>
                </div>
                <div class="modal-body">
                    {{csrf_field()}}
                    <span id="form_output"></span>
                    <div class="form-group">
                        <label>Enter First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Enter Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="selectpicker form-control" title="Gender">
                        	<option value="Mail">Mail</option>
                            <option value="Femail">Femail</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="text" name="age" id="age" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Session</label>
                        <input type="text" name="session" id="session" class="form-control" />
                    </div>
                </div>
                <div class="modal-footer">
                     <input type="hidden" name="id" id="student_id" value="" />
                    <button type="button" class="btn actionBtn btn-success edit" data-dismiss="modal">
							<span id="footer_action_button" class="glyphicon glyphicon-check"> Update</span>
						</button>
                    <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection