<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="/form" method="post">
    <label for="email">Email</label>
    <input name="email" type="email" id="email">

    <label for="amount">Amount</label>
    <input name="amount" type="number" id="amount">

    <button type="submit">Get offer</button>
</form>

</body>
</html>