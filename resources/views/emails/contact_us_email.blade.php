<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Email</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $data['form_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['form_email'] }}</p>
    <p><strong>Phone:</strong> {{ $data['form_phone'] }}</p>
    <p><strong>Message:</strong> {{ $data['form_message'] }}</p>
</body>
</html>
