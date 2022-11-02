<!-- NAME: DAXIL PATEL -->
<!-- STUDENT ID: 200520270 -->




<!DOCTYPE html>
<html lang="en">
<head>
  <!-- using meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, inital-scale=1">
      <!-- adding title -->
  <title>MASCOTIC PIZZA</title>
  <meta name="description" content="noindex, nofollow">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@300;400;700&family=Tai+Heritage+Pro:wght@400;700&display=swap"      rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
  <body class="flex">
  <!-- using class flex in body -->
  <header>
    <div>
      <a href="index.php"><img src="./img/img-logo.jfif" alt="THIS IS LOGO"></a>
      <!-- adding image sorce for my website -->
    </div>
    <nav>
      <ul>
      <!-- adding links -->
       <li>HOME</li>
       <li>ABOUT</li>
       <li>CONTACT</li>
       <li>SOCIAL</li>
      </ul>
    </nav>
  </header>
  <!-- end of header -->

  <main>
    <!-- adding class in section  -->
    <section class="section1">
     <div>
      <h1>DELICIOUS PIZZA</h1>
      <!-- adding text on image -->
     </div>
    </section>
    <div class="menu">
      <h2>MENU</h2>
    </div>

    <section>
      <!-- using php to capture the data that will be inserted in the form -->
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // using trim to neglect the space in php
                $fname = trim($_POST['F1']);
                $lname = trim($_POST['L1']);
                $email = trim($_POST['E1']);
                $houseno = trim($_POST['H1']);
                $phonenumber = trim($_POST['P1']);
                $city = trim($_POST['C1']);
                $province = trim($_POST['PR1']);
                $zipcode = trim($_POST['Z1']);
                $feedback = trim($_POST['feedback']);

                  //for checkbox
                $toppings1 = "";
                $toppings1Name = $_POST['topings1'];
                foreach ($toppings1Name as $toppings1Value) {
                  $toppings1 .= $toppings1Value;
                }
                $toppings2 = "";
                $toppings2Name = $_POST['topings2'];
                foreach ($toppings2Name as $toppings2Value) {
                  $toppings2 .= $toppings2Value;
                }
                $toppings3 = "";
                $toppings3Name = $_POST['topings3'];
                foreach ($toppings3Name as $toppings3Value) {
                  $toppings3 .= $toppings3Value;
                }
                //for radio button
                $size1 = "";
                $size1Name = $_POST['size1'];
                foreach ($size1Name as $size1Value) {
                  $size1 .= $size1Value;
                }

                $size2 = "";
                $size2Name = $_POST['size2'];
                foreach ($size2Name as $size2Value) {
                  $size2 .= $size2Value;
                }

                $size3 = "";
                $size3Name = $_POST['size3'];
                foreach ($size3Name as $size3Value) {
                  $size3 .= $size3Value;
                }
                //drop down box
                $quantity1 = "";
                $quantity1Name = $_POST['quantity1'];
                foreach ($quantity1Name as $quantity1Value){
                  $quantity1 .=$quantity1Value;
                }

                $quantity2 = "";
                $quantity2Name = $_POST['quantity2'];
                foreach ($quantity2Name as $quantity2Value){
                  $quantity2 .=$quantity2Value;
                }

                $quantity3 = "";
                $quantity3Name = $_POST['quantity3'];
                foreach ($quantity3Name as $quantity3Value){
                  $quantity3 .=$quantity3Value;
                }
                //button
                $button1 = "";
                $button1Name = $_POST['btn1'];
                foreach ($button1Name as $button1Value){
                  $button1 .=$button1Value;
                }
                $button2 = "";
                $button2Name = $_POST['btn2'];
                foreach ($button2Name as $button2Value){
                  $button2 .=$button2Value;
                }
                $button3 = "";
                $button3Name = $_POST['btn3'];
                foreach ($button3Name as $button3Value){
                  $button3 .=$button3Value;
                }

                // using error so that when the value is not inserted in the form the website will display error saying the following things that is written below.
                $error = "";
                if (empty($fname)) {
                  $error = "*First name is required";
                } elseif (empty($lname)) {
                  $error = "*Last name is required";
                } elseif (empty($email)) {
                  $error = "*An email is required";
                } elseif (!preg_match("/^[_.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+.)+[a-zA-Z]{2,6}$/i", $email)) {
                  $error = "please use the correct format";
                } elseif (empty($houseno)){
                  $error = "*House number is required!";
                } elseif (strlen($houseno) !=3) {
                  $error = "the House number must be 3 digits";
                } elseif (empty($phonenumber)){
                  $error = "*Phone Number is required!";
                } elseif (!is_numeric($phonenumber)) {
                  $error = "please use numbers only ";
                } elseif (strlen($phonenumber) != 10) {
                  $error = "the phone number must be 10 characters";
                } elseif (empty($city)){
                  $error = "*City Name is required!";
                } elseif (empty($province)){
                  $error = "*Province is required!";
                } elseif (empty($zipcode)){
                  $error = "*ZipCode is required!";
                }else {
              ?>
                  <script>
                    alert('Your order was received ');
                  </script>

              <?php

                }



          }
      ?>
      <!-- ending php -->
      <!-- starting of form section in which all data is included like dropbox,checkbox,radiobox -->
                                                                            <!-- NAME: DAXIL PATEL -->
                                                                            <!-- STUDENT ID: 200520270 -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <section class="section2">
      <div class="pizza1">

          <figure>
            <h3>🍕Veggie Pizza</h3>
            <!-- adding pizza image with proper fig caption and figure for Veggie pizza -->
            <img src="./img/sample-1.jpg" alt="PIZZA 1">

          </figure>
      </div>
      <div class="pizzatopp1">
        <h3>Veggie`s Toppings:</h3>
        <!--using checkbox to select topings  -->
          <input type="checkbox" id="o1" name="topings1[]" value=" Olives(veggie), ">
          <label for="o1">Olives</label>
          <input type="checkbox" id="j1" name="topings1[]" value=" Jalapeno(veggie), ">
          <label for="j1">Jalapeno</label>
          <input type="checkbox" id="b1" name="topings1[]" value=" Bacon(veggie), ">
          <label for="b1">Bacon</label>
          <input type="checkbox" id="p1" name="topings1[]" value=" Pepper(veggie), ">
          <label for="p1">Pepper</label>
      </div>

      <div class="size1">

        <h3>SIZE:</h3>
        <!-- adding radio button to select size of the pizza -->
        <label for="small1">Small</label>
        <input type="radio" id="small1" name="size1[]" value="SMALL(veggie),">
        <label for="medium1">Medium</label>
        <input type="radio" id="medium1" name="size2[]" value="MEDIUM(veggie),">
        <label for="large1">Large</label>
        <input type="radio" id="large1" name="size3[]" value="LARGE(veggie),">
        <!-- using button for add to cart to  display   -->
        <div class="button1">
          <input type="checkbox" id="btn1" name="btn1[]" value=" button1 ">
          <label for="btn1">ADD CART🛒</label>
        </div>

      </div>
      <div class="Quantity1">
        <!-- adding dropdown button -->
        <label for="drp1">Quantity:</label>
        <br>
        <select  class="quantity" id="drp1" name="quantity1[]">

          <option value="x0(veggie),">0</option>
          <option value="x1(veggie),">1</option>
          <option value="x2(veggie),">2</option>
          <option value="x3(veggie),">3</option>
          <option value="x4(veggie),">4</option>

        </select>
        <br>
      </div>


    </section>

    <section class="section3">
      <div class="pizza2">
        <!-- adding details in pizza 2 -->
          <figure>
            <h3>🍕Extravegan Pizza</h3>
            <!-- adding pizza image with proper fig caption and figure for Exravegan pizza -->
            <img src="./img/sample-2.jpg" alt="PIZZA 2">
              <!-- adding image of pizza -->
          </figure>
      </div>
      <div class="pizzatopp2">
        <h3>Extravegan`s Toppings:</h3>
        <!--using checkbox to select topings  -->
          <input type="checkbox" id="ol1" name="topings2[]" value=" Olives(Extravegan), ">
          <label for="ol1">Olives</label>
          <input type="checkbox" id="ja1" name="topings2[]" value=" Jalapeno(Extravegan), ">
          <label for="ja1">Jalapeno</label>
          <input type="checkbox" id="ba1" name="topings2[]" value=" Bacon(Extravegan),">
          <label for="ba1">Bacon</label>
          <input type="checkbox" id="pe1" name="topings2[]" value=" Pepper(Extravegan), ">
          <label for="pe1">Pepper</label>
      </div>

      <div class="size2">

        <h3>SIZE:</h3>
        <!-- adding size radio button -->
        <label for="small11">SMALL</label>
        <input type="radio" id="small11" name="size2[]" value="SMALL(Extravegan),">
        <label for="medium11">MEDIUM</label>
        <input type="radio" id="medium11" name="size2[]" value="MEDIUM(Extravegan),">
        <label for="large11">LARGE</label>
        <input type="radio" id="large11" name="size3[]" value="LARGE(Extravegan),">


        <div class="button2">
          <input type="checkbox" id="btn2" name="btn2[]" value=" button2 ">
          <label for="btn2">ADD CART🛒</label>
        </div>

      </div>
      <div class="Quantity2">
        <!-- adding quantity dropdown button -->
        <label for="drp11">Quantity</label>
        <br>
        <select  class="quantity" id="drp11" name="quantity2[]">
          <option value="x0(Extravegan),">0</option>
          <option value="x1(Extravegan),">1</option>
          <option value="x2(Extravegan),">2</option>
          <option value="x3(Extravegan),">3</option>
          <option value="x4(Extravegan),">4</option>
        </select>
        <br>
      </div>

      </section>
    <section class="section4">
      <div class="pizza3">

          <figure>
              <h3>🍕BBQ Chicken Pizza</h3>
            <!-- adding pizza image with proper fig caption and figure for BBQ chicken  pizza -->
            <img src="./img/sample-3.jpg" alt="PIZZA 1">

          </figure>
      </div>
      <div class="pizzatopp3">
        <h3>BBQ chicken pizza`s Toppings</h3>
        <!--using checkbox to select topings  -->
          <input type="checkbox" id="oli1" name="topings3[]" value=" Olives(BBQ chicken), ">
          <label for="oli1">Olives</label>
          <input type="checkbox" id="jal1" name="topings3[]" value=" Jalapeno(BBQ chicken), ">
          <label for="jal1">Jalapeno</label>
          <input type="checkbox" id="bac1" name="topings3[]" value=" Bacon(BBQ chicken), ">
          <label for="bac1">Bacon</label>
          <input type="checkbox" id="pep1" name="topings3[]" value=" Pepper(BBQ chicken), ">
          <label for="pep1">Pepper</label>
      </div>

      <div class="size3">

        <h3>SIZE:</h3>
        <!-- adding sixe radio button -->
        <label for="small1111">SMALL</label>
        <input type="radio" id="small1111" name="size3[]" value="SMALL(BBQ chicken),">
        <label for="medium1111">MEDIUM</label>
        <input type="radio" id="medium1111" name="size3[]" value="MEDIUM(BBQ chicken),">
        <label for="large1111">LARGE</label>
        <input type="radio" id="large1111" name="size3[]" value="LARGE(BBQ chicken),">

        <div class="button3">
          <input type="checkbox" id="btn3" name="btn3[]" value=" button3 ">
          <label for="btn3">ADD CART🛒</label>
        </div>
      </div>

      <div class="Quantity3">
        <label>Quantity:</label>
        <br>
        <!-- adding quantity dropdown button -->
        <select  class="quantity" id="drp111" name="quantity3[]">
          <option value="x0(BBQ chicken),">0</option>
          <option value="x1(BBQ chicken),">1</option>
          <option value="x2(BBQ chicken),">2</option>
          <option value="x3(BBQ chicken),">3</option>
          <option value="x4(BBQ chicken),">4</option>
        </select>
        <br>
      </div>

    </section>

    <section class="section5">

          <!-- using form tag to write in textbox  -->
        <div class="information">
           <h3>PERSONAL INFORMATION:-</h3>
           <!-- adding placeholder to initally showing what to write in the box -->
          <label>First Name:</label>
          <input type="text" name="F1" placeholder="First Name">
          <!--adding br tag to break line -->
          <br>
          <br>
          <label>Last Name:</label>
          <input type="text" name="L1" placeholder="Last Name">
          <br>
          <br>
          <label>Email:</label>
          <input type="text" name="E1" placeholder="Your Email">
          <br>
          <br>
          <label>House no:</label>
          <input type="text" name="H1" placeholder="House No.">
          <br>
          <br>
          <label>Phone Number:</label>
          <input type="text" name="P1" placeholder="example +1 (705)1111 111">
          <br>
          <br>
          <label>City:</label>
          <input type="text" name="C1" placeholder="example:barrie">
          <br>
          <br>
          <label>Province:</label>
          <input type="text" name="PR1" placeholder="example:ontario">
          <br>
          <br>
          <label>ZipCode:</label>
          <input type="text" name="Z1" placeholder="Enter PinCode">
          <br>
          <br>
          <p>Drop Your Feedback Here:</p>
          <textarea name="feedback" rows="8" cols="80" placeholder="Write here"></textarea>
          <br>
          <br>
          <input class="order" type="submit" value="Order">
          <input class="reset" type="reset" value="Erase Information">
          <?php echo "<p class ='error'>$error</p>"; ?>
        </div>
        <br>
        <br>


    </section>

    </form>
    <!-- ending form tag -->


    <section>
      <!-- adding the section to display the data provided in the personal information as well as the pizza`s topping ,size,quantity .  -->
      <h3> Order details:</h3>
      <p>Name:<?php echo "$fname $lname"; ?></p>
      <p>Email:<?php echo "$email"; ?></p>
      <p>House NO:<?php echo "$houseno"; ?></p>
      <p>Phone Number:<?php echo "$phonenumber"; ?></p>
      <p>City:<?php echo "$city"; ?></p>
      <p>province:<?php echo "$province"; ?></p>
      <p>zipcode:<?php echo "$zipcode"; ?></p>
      <p>SIZE:<?php echo "$size1 $size2 $size3";?></p>
      <p>Toppings:<?php echo "$toppings1 $toppings2 $toppings3";?></p>
      <p>Quantity:<?php echo "$quantity1 $quantity2 $quantity3";?></p>
      <p>feedback:<?php echo "$feedback"; ?></p>


    </section>
    </section>
    <!-- end of section -->

  </main>
<!-- end of main -->
 <footer>
   <!-- adding footer -->
   <p>THANK YOU</p>
 </footer>
 </body>
 <!-- closing body tag -->
</html>
<!-- closing html tag -->
                                                                        <!--END OF FILE-->
