<!DOCTYPE html>
<html>
<head>
</head>
<body>
 	<p>Hello {{ $data['customer_name'].' '.$data['customer_name'] }},</p>
 	<p>Thanks for cotacting Us, Our Team will contanct you soon.</p><br><br>
 	<table>
 		<tr>
 			<td>Name</td>
 			<td>{{ $data['customer_name'].' '.$data['customer_name'] }}</td>
 		</tr>
 		<tr>
 			<td>Email</td>
 			<td>{{ $data['email'] }}</td>
 		</tr>
 		<tr>
 			<td>Comment</td>
 			<td> {{ $data['cdetails'] }} </td>
 		</tr>
 	</table>
 	<br><br>
 	<p>Thanks & Regards,</p>
 	<p>Abhinandan Urban Co-Op Bank Ltd</p>
 	<small>Prabhat Chowk, near Prabhat Theater, Amravati, Maharashtra 444601</small>
</body>
</html>