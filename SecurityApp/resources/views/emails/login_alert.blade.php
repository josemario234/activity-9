<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alert</title>
</head>
<body>
    <h1>Login Alert for SecurityApp</h1>

    <p> Hello {{ $user->name }},</p>

    <p>We detected a login to your SecurityApp account.</p>

    <p>Login Time: {{ $loginTime->format('Y-m-d H:i:s') }}</p>

    <p>If this wasn't you, please contact support inmediately.</p>

</body>
</html>