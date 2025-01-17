<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/output.css">
    <title>To Do List</title>
</head>

<body class="bg-slate-900 text-white flex flex-col items-center justify-center min-h-[100vh]">
<?php include '..\Resources\views\shared\header.php'; ?>

    <main>
        <section class="container">
            <img src="assets/img/Illustration.png" alt="cogip logo" class="illustration">
            <h1 class="text-gray-100">Welcome, <?php if (isset($username)) {
                    echo $username;
                } ?>!</h1>
            <p>This base project is provided by Pierre N.</p>
            <ul>
                <li><a href="https://github.com/bramus/router" target="_blank">Bramus/Router</a></li>
                <li><a href="https://github.com/filp/whoops" target="_blank">Flip/Whoops</a></li>
                <li>dd() function</li>
                <li>redirect() function</li>
            </ul>
        </section>
    </main>
<?php include '..\Resources\views\shared\footer.php'; ?>

</body>

</html>