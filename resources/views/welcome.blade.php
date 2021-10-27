<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset ("css/blog.css") }}>
    <title>Blog</title>
</head>
<body>

<!-- no pueden existir 2 id's iguales
    por el contrario si pueden existir varias class iguales -->

    <header>
        <h1 id="title">My firts blog in HTML</h1>
    </header>

    <!-- los div eran comunes antes pero ahora es preferible utilizar section, article, etc -->

    <!-- <div>
        <p>I'm a text into a div</p>
    </div> -->

    <section class="container">

        <article class="post">
            <h2>Title</h2>
            <p>description</p>
            <img src={{ asset ("img\sky.jpg")}} width="400">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque rem facere
            corporis aspernatur molestiae, quia repellat, doloribus alias eius, quibusdam
            eveniet pariatur temporibus saepe labore aliquam qui voluptatem numquam. Ad!</p>
        </article>

        <article class="post">
            <h2>Title 2</h2>
            <p>description 2</p>
            <img src={{ asset ("img\Naruto-fondo.jpg")}} width="400">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque rem facere
            corporis aspernatur molestiae, quia repellat, doloribus alias eius, quibusdam
            eveniet pariatur temporibus saepe labore aliquam qui voluptatem numquam. Ad!</p>
        </article>

        <article class="post">
            <h2>Title 3</h2>
            <p>description 3</p>
            <img src={{ asset ("img\wolf.jpg")}} width="400" height="225">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque rem facere
            corporis aspernatur molestiae, quia repellat, doloribus alias eius, quibusdam
            eveniet pariatur temporibus saepe labore aliquam qui voluptatem numquam. Ad!</p>
        </article>

    </section>

    <footer>
        <div>
            <a href="mailto:david@gmail.com">Contact me here</a>
            <br>
            <a href="#title">go to the beginning</a>
        </div>
        
        <p>Copyright 2021</p>
    </footer>
</body>
</html>