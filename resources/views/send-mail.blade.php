<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Verification</title>
</head>
<body>
    <form action="{{ route('send.mail') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
    
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="4" required></textarea>
    
        <button type="submit">Send</button>
    </form>
</body>
</html>