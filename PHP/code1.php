<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My frist PHP Document</title>
    <meta name="description" content="This is the introduction to using PHP">
    <meta name="robots" content="noindex, nofollow">
  </head>
  <body>
    <!-- one things that is really nice about php is that we can inject it anywhere we want to in a Document.in order to add PHP we simply need to add the php tag.just like the below example. -->
    <?php
      //this is how we comment in php.
      //inside of the opening and closing php tag is where we add the php we ant to use.Let`s start with something simple!
      echo"<h1>Hello World</h1>";
      //next lets say we are not sure what type of server config we are working with.we can check it with the follow pre-made function,
      phpinfo();
      echo "<section>";
        echo"<h2>Section Title</h2>";
        echo"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
      echo"</section>";
      echo(pi());
      echo"</br>";
      echo(sqrt(64));
      echo"</br>";
      echo 5 * 5;
      echo"</br>";
      echo 3 + 5 / 2;
      echo"</br>";
      echo (3 + 5) / 2 * 10 + 50 - 4 / 2;
      echo"</br>";
     ?>
  </body>
</html>
