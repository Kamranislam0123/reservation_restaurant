<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email </title>
</head>
<body>
    @if (session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>

        @endif
    <h3>here is your mail sent notification </h3>
    <p>{{ $data['body']}}</p>
</body>
</html>