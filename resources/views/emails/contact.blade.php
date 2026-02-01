<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] }}</p>
    @if(isset($data['marketing']) && $data['marketing'])
        <p><em>User agreed to receive marketing messages.</em></p>
    @endif
</body>
</html>
