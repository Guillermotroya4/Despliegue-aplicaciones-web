<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mi Blog</title>
    <style>
        header {
            background-color: black;
            color: white;
            text-align: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 20% auto;
            gap: 10px;
        }

        .grid-container>div {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid black;
            text-align: center;
            font-size: 30px;
            width: 80%;
        }

        #menu {
            background-color: #e2e6d1;
            height: 100%;
        }
    </style>
</head>

<body>


    <nav id="header">
        <header>
            <?php
            echo "<h1>Mi Blog</h1>";

            ?>

        </header>
    </nav>

    <div class="grid-container">
        <div>
            <nav id="menu">
                <?php
                "<ul>";
                echo "<li>Inicio</li>";
                echo "<br>";
                echo "<li>Sobre mi</li>";
                echo "<br>";
                echo "<li>Blog</li>";
                echo "<br>";
                echo "<li>Contacto</li>";
                "</ul>";
                ?>
            </nav>
        </div>
        <div>


            <?php

            class Post
            {
                private string $title;
                private string $content;
                private array $tags;

                public function __construct(string $title, string $content, $tags = [])
                {
                    $this->title = $title;
                    $this->content = $content;
                    $this->tags = $tags;
                }

                public function getTitle()
                {
                    return $this->title;
                }
                public function getContent()
                {
                    return $this->content;
                }

                public function getTags()
                {
                    return $this->tags;
                }
            }

            class Tags
            {

                private $tags;


                public function __construct(string $tags)
                {
                    $this->tags = $tags;
                }

                public function getTags()
                {
                    return $this->tags;
                }
            }


            function generarPost(): void
            {


                $posts = [
                    new Post("Titulo del primer post", "Este es el contenido del primer post de mi blog. Aquí puedes escribir sobre cualquier tema que te interese.", [new Tags("#Tecnología"), new Tags("#Programación"), new Tags("#HTML")]),
                    new Post("Titulo del segundo post", "Este es el segundo post. Puedes escribir sobre temas diferentes y ofrecer tu opinión o experiencias.", [new Tags("#Viajes"), new Tags("#Aventura"), new Tags("#Fotografía")]),
                    new Post("Titulo del segundo post", "Este es el segundo post. Puedes escribir sobre temas diferentes y ofrecer tu opinión o experiencias.", [new Tags("#Salud"), new Tags("#Bienestar"), new Tags("#EstiloDeVida")])
                ];


                foreach ($posts as $Post) {
                    echo "<div>";
                    echo  $Post->getTitle();
                    echo '<br>';
                    echo  $Post->getContent();
                    echo '<br>';
                    foreach ($Post->getTags() as $Tags) {
                        echo  $Tags->getTags() . " ";
                        
                    }
                    echo '<br>';
                    echo "<br>";
                    echo "</div>";
                }
            }



            echo generarPost();
            ?>

        </div>
    </div>


</body>

</html>