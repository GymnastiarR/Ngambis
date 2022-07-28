<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/particle.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="h-24 flex justify-between px-8 bg-slate-500">
        <ul>
            <li>
                <h2>Ngambis</h2>
            </li>
        </ul>
        <ul class="flex">
            <li>SignIn</li>
            <li>Register</li>
        </ul>
    </header>
    <main>
        <section>
            <!-- particles.js container --> <div id="particles-js"></div>
            <!-- particles.js lib - https://github.com/VincentGarreau/particles.js --> 
            <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
            <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
        </section>
        <section>

        </section>
    </main>
    <footer></footer>
    <script src="js/particle.js"></script>
</body>
</html>