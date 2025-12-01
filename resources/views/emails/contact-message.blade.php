<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Message</title>
</head>

<body>
  <h2>New Contact Message</h2>

  <p><strong>First Name:</strong> {{ $messageData->first_name }}</p>
  <p><strong>Last Name:</strong> {{ $messageData->last_name }}</p>
  <p><strong>Email:</strong> {{ $messageData->email }}</p>
  <p><strong>Phone:</strong> {{ $messageData->phone }}</p>
  <p><strong>Company:</strong> {{ $messageData->company }}</p>
  <p><strong>Service:</strong> {{ $messageData->service }}</p>
  <p><strong>Budget:</strong> {{ $messageData->budget }}</p>

  <hr>

  <p><strong>Message:</strong></p>
  <p>{{ $messageData->message }}</p>

</body>

</html>