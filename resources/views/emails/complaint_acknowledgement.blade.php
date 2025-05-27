<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>complaint ack</title>
</head>
<body>
	
	<!-- resources/views/emails/complaint_acknowledgement.blade.php -->
	<h1>Dear {{ e($name) }},</h1>
	<p>{{ e($email_body) }}</p>
	<p>Best regards,<br>Abhinandan Bank</p>

</body>
</html>