<?php
// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragrafo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime numquam, enim facilis fugiat nam aut veritatis ratione ut voluptas? Assumenda doloribus culpa ad voluptatibus ullam dolore consequuntur accusamus fugiat impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa officiis alias non asperiores perspiciatis modi at vero distinctio fuga iste nobis harum, necessitatibus deleniti ipsam commodi dicta rerum earum laboriosam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum itaque corrupti deserunt voluptatem architecto sequi ratione iure provident nostrum sit, odit, incidunt eos! Expedita odit impedit recusandae adipisci ex ea? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni provident laboriosam quos eum! Neque commodi atque, error ea cumque dolore quae, unde nulla nisi est iure illum delectus iste sapiente! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae earum aperiam iusto, minus commodi doloremque illo, aliquid necessitatibus vero enim saepe repellat cum optio amet ut aspernatur, accusantium iste veritatis!';

$paragrafoDiviso = str_replace(".", ".<br>", $paragrafo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <p><?php echo $paragrafoDiviso; ?></p>
</body>
</html>