<!-- app/views/duck-form.blade.php -->
<!doctype html>
<html>
<head>

    <!-- load bootstrap -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <style>
        body    { padding-bottom:40px; padding-top:40px; }
    </style>
</head>
<body class="container">

<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        @include('inc.messages')
        <!-- FORM STARTS HERE -->
        <form method="POST" action="/combine" novalidate>
            @csrf
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" class="form-control" name="firstname" placeholder="First Name">
            </div>
            
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" class="form-control" name="lastname" placeholder="Last Name">
            </div>
            <button type="submit" class="btn btn-success">Combine</button>
        </form>

        @if (session('post'))
       
        <div class="row">
            <hr>
            <div class="col-sm-8">
                @foreach (json_decode(session('post')) as $fullname)                
                    <div class="form-group">
                        <label for="lastname">Full Name: {{ $fullname }}</label>
                    </div>                    
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>