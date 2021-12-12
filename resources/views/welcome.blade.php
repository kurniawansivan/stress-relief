<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <!-- CSS -->
    <link rel="stylesheet" href="../css/app.css">
    <title>Stress Relief</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap');

        @import url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');

        :root {
            --primaryColor: #fff;
            --navColor1: #21292c;
            --navColor2: #aa3e39;
            --navColor3: #aa6e39;
            --navColor4: #236267;
            --navColor5: #2c8437;
        }

        html,
        body {
            height: 100%;
        }

        html {
            display: inline-block;
        }

        body {
            font-family: 'Montserrat', sans-serif;
        }

        section {
            width: 100%;
            height: 100vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--primaryColor);
        }

        section#home a {
            position: absolute;
            z-index: 2;
            top: 1.5rem;
            left: 1.5rem;
            text-decoration: none;
            font-size: 0.8rem;
            padding-bottom: 5px;
            color: var(--primaryColor);
            border-bottom: 1px solid var(--primaryColor);
        }

        section#about {
            background-color: var(--navColor2);
        }

        section#skills {
            background-color: var(--navColor3);
        }

        section#projects {
            background-color: var(--navColor4);
        }

        section#contact {
            background-color: var(--navColor5);
        }

        blockquote {
            width:85%;
            text-align:center;
            margin:0 auto;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- Title -->
    <div class="h-100 row align-items-center">
        <div class="col" style="text-align:center;">
            <h1>Title</h1>
            <p>Kelompok 4</p>
        </div>
    </div>
    <!-- Text -->
    <div class="text-container">
        <div class="text-title"></div>
        <div class="text-paragraph"></div>
    </div>

    <!-- Sections -->
    <section class="h-100 row align-items-center" id="about">
        <div class="col" style="text-align:center;">
            <h1>Learn More About Me</h1>
            <blockquote>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio ea dicta vel, facilis, obcaecati asperiores quaerat, deserunt molestias provident sit reiciendis voluptatem sed magni ad debitis aliquam necessitatibus numquam suscipit.</p>
            </blockquote>
        </div>
    </section>
    <section class="h-100 row align-items-center" id="skills">
        <div class="col" style="text-align:center;">
            <h1>Learn More About Me</h1>
            <blockquote>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio ea dicta vel, facilis, obcaecati asperiores quaerat, deserunt molestias provident sit reiciendis voluptatem sed magni ad debitis aliquam necessitatibus numquam suscipit.</p>
            </blockquote>
        </div>
    </section>
    <section class="h-100 row align-items-center" id="projects">
        <div class="col" style="text-align:center;">
            <h1>Learn More About Me</h1>
            <blockquote>
                <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio ea dicta vel, facilis, obcaecati asperiores quaerat, deserunt molestias provident sit reiciendis voluptatem sed magni ad debitis aliquam necessitatibus numquam suscipit.</p>
            </blockquote>
        </div>
    </section>
    <section class="h-100 row align-items-center" id="contact">
        <div class="col" style="text-align:center;">
            <h1>test</h1>
            <blockquote>
                <p class="lead">Test!.</p>
            </blockquote>
        </div>
    </section>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
    <!-- AOS.js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            delay: 200,
            duration: 1500,
            once: false,
            mirror: false
        });
    </script>
    <script>
        function toggleNavbar(collapseID) {
            document.getElementById(collapseID).classList.toggle("hidden");
            document.getElementById(collapseID).classList.toggle("block");
        }
    </script>
</body>

</html>