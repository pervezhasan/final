<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xEditable and laravel 5. Inline and bulk editing examples.</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    Oops! We have some erros
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::has('message'))
                <div class="alert alert-success">
                  {!!Session::get('message')!!}
                </div>
            @endif
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            
            <h2>Bulk edit</h2>
            {!! Form::open(['action' => 'TestController@bulk_update', 'method' => "POST", "class"=>"form-inline"]) !!}
            <div class="form-group">
                <label for="lead_status">For selected rows change filed </label>
                {!! Form::select('bulk_name', $test_columns, [], ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for="lead_status">equal to</label>
                {!! Form::text('bulk_value', null, ['class' => 'form-control'])!!}
            </div>
            <button class="btn btn-default">Save</button>
            <hr>
            <table class="table table-striped">
            @foreach($test as $t)
                <tr>
                    <td><td width="10px"><input type="checkbox" name="ids_to_edit[]" value="{{$t->id}}" /></td></td>
                    <td>{{$t->id}}</td>
                    <td><a href="#" class="testEdit" data-type="text" data-column="name" data-url="{{route('test/update', ['id'=>$t->id])}}" data-pk="{{$t->id}}" data-title="change" data-name="name">{{$t->name}}</a></td>
                    <td><a href="#" class="testEdit" data-type="text" data-column="value"  data-url="{{route('test/update', ['id'=>$t->id])}}" data-pk="{{$t->id}}" data-title="change" data-name="value">{{$t->value}}</a></td>
                    <td><a href="#" class="testEdit" data-type="text" data-column="date"  data-url="{{route('test/update', ['id'=>$t->id])}}" data-pk="{{$t->id}}" data-title="change" data-name="date">{{$t->date}}</a></td>
                </tr>
            @endforeach
            </table>
            {!! Form::close() !!}
            
            
        </div>
    </div>
</div>

<script>
$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {
    $('.testEdit').editable({
        params: function(params) {
            // add additional params from data-attributes of trigger element
            params.name = $(this).editable().data('name');
            return params;
        },
        error: function(response, newValue) {
            if(response.status === 500) {
                return 'Server error. Check entered data.';
            } else {
                return response.responseText;
                // return "Error.";
            }
        }
    });
});
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
 </body>
 </html>