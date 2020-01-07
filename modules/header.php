<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navar-brand" href="#">Mio Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chi_sono.html" target="_blank">Chi sono</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                <?php if (isLogged()) {?>
                    <li class="nav-item">
                    <a class="btn btn-success px-5">Login</a>
                    <a class="btn btn-primary px-5" href="post.html" target="_blank">Post</a>
                    </li>
                <?php } else { ?>
                <a class="btn btn-danger px5">Logout</a>
                <?php } ?>
                </ul>
            </div>
        </nav>