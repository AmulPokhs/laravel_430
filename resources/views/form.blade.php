<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<link rel="stylesheet" href="css/app.css">
<body>
<center>
    <br>
    <form>
        Name: <input type = 'text'><br><br>
        Phone: <input type = 'text'><br><br>
        <input type = 'submit' value = 'submit' >

        <div class="col-12">
            <a href = "{{ Route('list') }}">Back</a>
        </div>
    </form>


</center>
<br>
<br>

<div class ="col-12">
    <img src="form.jpg" style = "width:800px;">
</div>

</body>
</html>