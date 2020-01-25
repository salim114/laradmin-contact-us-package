<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laradmin Us</title>
	<link rel="stylesheet" href="">
</head>
<body>
    <h1>Contact Us any time</h1>
    <form action="{{route('laradmin')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name Please">
        <input type="email" name="email" placeholder="Your Valid Email">
        <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>