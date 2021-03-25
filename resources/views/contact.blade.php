<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <form action="/mail-send" method="post" class="container mt-5">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com">
          </div>
        <div class="form-group">
            <label for="mail">Contactez-nous</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mail"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>    
	<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

