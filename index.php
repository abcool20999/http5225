<!doctype html>
<html>
  <head>
    
    <title>PHP and Creating Output</title>
    
  </head>
  <body>
  
    <?php echo '<h1>PHP and Creating Output</h1>'; ?>
  
    <?php echo '<p>The PHP echo command can be used to create output.</p>'; ?>

    <?php echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>'; ?>
    
    <?php echo '<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>'; ?>
    
    <?php echo '<h2>More HTML to Convert</h2>'; ?>

    <?php echo '<p>PHP says "Hello World!"</p>'; ?>

    <?php echo '<p>Can you display a sentence with \' and "?</p>'; ?>


<a href="<?php echo $imageUrl; ?>">
<img src="<?php echo $imageUrl; ?>" alt="Its a just a placeholder">
</a>



    <?php
    
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$linkName.'</h1>';

    ?>
    <?php 

    $person['first'] = 'Jane';
    $person['last'] = 'Doe';
    $person['email'] = 'jane.doe@email.com';
    $person['age'] = 30;

    ?>

    <!--PHP variables-->

    

    <?php echo '<h1>Hello ' . $person['first'] . ' ' . $person['last'] . '<h1>';?>



  </body>
</html>