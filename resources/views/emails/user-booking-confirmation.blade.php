<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking Confirmation</title>
</head>

<body style="margin:0;padding:0;background:#f5f5f5;font-family:Arial, Helvetica, sans-serif;
-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f5f5f5;padding:20px 10px;">

<tr>
<td align="center">

<table cellpadding="0" cellspacing="0"
style="background:#ffffff;border-radius:8px;max-width:600px;width:100%;overflow:hidden;">

<!-- HEADER -->
<tr style="background:#f8c63f;">
<td align="center" style="padding:20px;">
<img src="https://fenlake.in/assets/img/logo-Fenlake-default.png"
style="max-width:160px;width:100%;height:auto;">
</td>
</tr>

<!-- TITLE -->
<tr>
<td style="padding:25px;text-align:center;">

<h2 style="margin:0;color:#0a7b3c;font-size:20px;line-height:32px;">
Booking Confirmed
</h2>

<p style="color:#555;margin-top:12px;font-size:13px;line-height:24px;">
Hi {{ $booking->name }}, <br> your booking has been confirmed successfully.
</p>

</td>
</tr>

<!-- BOOKING DETAILS -->
<tr>
<td style="padding:0 25px 25px 25px;">

<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;font-size:15px;">

<tr>
<td style="padding:10px;border-bottom:1px solid #eee;"><strong>Package</strong></td>
<td style="padding:10px;border-bottom:1px solid #eee;">{{ $booking->package->name }}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #eee;"><strong>Duration</strong></td>
<td style="padding:10px;border-bottom:1px solid #eee;">{{ $booking->duration}}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #eee;"><strong> Date</strong></td>
<td style="padding:10px;border-bottom:1px solid #eee;">
 {{ date('d/m/Y', strtotime($booking->booking_date)) }}
</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #eee;"><strong>Guests</strong></td>
<td style="padding:10px;border-bottom:1px solid #eee;">{{ $booking->people }}</td>
</tr>
<tr>
<td style="padding:10px;border-bottom:1px solid #eee;"><strong>Boats Required</strong></td>
<td style="padding:10px;border-bottom:1px solid #eee;">{{ $booking->boats_required}}</td>
</tr>

<tr>
<td style="padding:10px;border-bottom:1px solid #eee;"><strong>Total Amount</strong></td>
<td style="padding:10px;border-bottom:1px solid #eee;color:#0a7b3c;font-weight:bold;font-size:16px;">
₹{{ $booking->price }}
</td>
</tr>

</table>

</td>
</tr>



<!-- FOOTER -->
<tr>
<td style="padding:20px;text-align:center;font-size:13px;color:#777;line-height:20px;">

Fenlake Boating Club<br>
Poovar – Uchakkada Bypass Road, Poovar<br>

Need help? Call us:<br>
<strong>
<a href="tel:+919778500322" style="color:#000;text-decoration:none;">
+91 97785 00322
</a>
</strong>
<br>

Visit our website:<br>
<a href="https://fenlakeboatingclub.com" target="_blank" style="color:#000;text-decoration:none;">
fenlakeboatingclub.com
</a>

</td>
</tr>

</table>

</td>
</tr>

</table>

</body>
</html>