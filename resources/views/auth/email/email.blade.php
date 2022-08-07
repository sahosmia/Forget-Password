<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Link</title>
    <style>
        a{
            color: #fff;
            background: #727CF5;
            border: none;
            text-transform: capitalize;
            padding: 10px 30px;
            border-radius: 2px;
            text-decoration: none;
        }
        .full{
            text-align: center;
            width: 40%;
            margin: 0 auto;
            background: rgba(0, 102, 255, 0.151);
            padding: 20px;
            top: 50%;
            transform: translateY(50%);
            border-radius: 2px;
        }

    </style>
</head>
<body>
    <div class="full">
        <h1>Sahos Vai</h1>
        <p>Tempore maxime voluptatum nostrum sunt laborum veniam aperiam, voluptas nisi earum voluptatibus perspiciatis libero recusandae soluta! Accusantium ullam corrupti dignissimos officiis pariatur iste maxime!</p>
        <a href="{{ url('reset-password') }}/{{ $details['email'] }}" class="btn btn-danger"> dadu</a>

    </div>
    {{-- <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p> --}}
</body>
</html>




