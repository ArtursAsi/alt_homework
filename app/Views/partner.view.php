
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
<a href="/">Home</a>

<form action="/partner" method="get">
    <label for="partner">Partner</label>
    <input name="partner" type="text" id="partner">

    <button type="submit">Submit</button>
</form>

    <?php

    foreach ($users as $user) : ?>
        <?php if ($user['partner'] === strtoupper($_REQUEST['partner']) && $user['status'] === 'ask'): ?>
            <h5><?= $user['email'] ?></h5>
            <ul>
                <li>Amount: <?= $user['amount']; ?></li>
            </ul>

            <form action="<?='/partner/'. $user['id'] ?>" method="post">
                <button type="submit">Offer</button>
            </form>

        <?php endif; ?>
    <?php endforeach; ?>


</body>
</html>
