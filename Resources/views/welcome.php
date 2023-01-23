<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/reset.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/output.css">
    <title>Template PHP Project - Welcome</title>
</head>
<body class="bg-gray-500">
    <main>
       <section class="container">
        <img
                src="assets/img/Illustration.png"
                alt="cogip logo"
                class="illustration">
            <h1>Welcome to <?php echo $name; ?></h1>
            <p>This base project is provided by Pierre</p>
            <ul>
                <li><a href="https://github.com/bramus/router" target="_blank">Bramus/Router</a></li>
                <li><a href="https://github.com/filp/whoops" target="_blank">Flip/Whoops</a></li>
                <li>dd() function</li>
                <li>redirect() function</li>
            </ul>
       </section>
    </main>
</body>
</html>