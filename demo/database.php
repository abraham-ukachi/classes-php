<?php
/**
* @license
* classes-php
* Copyright (c) 2022 Abraham Ukachi
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
*
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*
* @project classes-php
* @name User MYSQLI - Demo
* @file user.php
* @demo demo/user.php
* @author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* @version: 0.0.1
* 
* Usage:
*   1-|> open http://localhost/classes-php/demo/user.php
* 
*/


/*
* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
* MOTTO: I'll always do more 😜!!!
* !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/


require '../user.php';
// Create an object of the User class as `user`
$user = new User();


// Defining some constant variables...

// Methods
define('METHOD_REGISTER', 'register');
define('METHOD_CONNECT', 'connect');
define('METHOD_DISCONNECT', 'disconnect');
define('METHOD_DELETE', 'delete');
define('METHOD_UPDATE', 'update');
define('METHOD_IS_CONNECTED', 'isConnected');
define('METHOD_GET_ALL_INFOS', 'getAllInfos');
define('METHOD_GET_LOGIN', 'getLogin');
define('METHOD_GET_EMAIL', 'getEmail');
define('METHOD_GET_FIRSTNAME', 'getFirstname');
define('METHOD_GET_LASTNAME', 'getLastname');


// Initializing some variables...

$id = -1;
$login = '';
$password = '';
$email = '';
$firstname = '';
$lastname = '';


// Create a short-syntax index array of all the methods
$methods = [
  METHOD_REGISTER,
  METHOD_CONNECT,
  METHOD_DISCONNECT,
  METHOD_DELETE,
  METHOD_UPDATE,
  METHOD_IS_CONNECTED,
  METHOD_GET_ALL_INFOS,
  METHOD_GET_LOGIN,
  METHOD_GET_EMAIL,
  METHOD_GET_FIRSTNAME,
  METHOD_GET_LASTNAME
];





$err = "";
$errMsgHTML = "";

?><!DOCTYPE html>

<!-- HTML -->
<html lang="en">

  <!-- HEAD -->
  <head>
    <!-- Our 4 VIP metas -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="Etape 01: Classe avec Mysqli">
    
    <!-- Title -->
    <title>User MYSQLI - Demo | Abraham Ukachi</title> 

    <!-- Logo - Icon -->
    <link rel="icon" href="favicon.ico">
     
    <!-- Demo Styles -->
    <link rel="stylesheet" href="demo-styles.css">

    <!-- Just a little JS 🙏 -->
    <script src="demo-script.js"></script>
    
  </head>
  <!-- End of HEAD -->


  <!-- BODY -->
  <body class="vertical layout centered" fullbleed>

    <!-- MAIN -->
    <main>
      <!-- Main Container -->
      <div class="container vertical layout">
        <h2>Output / Result:</h2>
        
        <!-- Output - Box -->
        <div id="output" class="box">
          <span><?= $user->msg['message'] ?></span>
        </div>
        <!-- End of Output - Box -->

      </div>
      <!-- End of Main Container -->
    </main>
    <!-- End of MAIN -->


    <!-- Drawer - ASIDE -->
    <aside id="drawer" opened onclick="handleAsideClick(event, this)">
      
      <!-- Aside Container -->
      <div class="container vertical layout center">
        <!-- Handle -->
        <div id="handle" onclick="toggleDrawer(event)"></div>
        
        <!-- H2 Title -->
        <h2>User MYSQLI - Demo</h2>
        <h3>Etape 01: Classe avec Mysqli</h3>


        <!-- Form -->
        <form class="vertical layout" method="get">

          <!-- Inputs-Wrapper -->
          <div class="inputs-wrapper vertical layout">

            <!-- Id - INPUT -->
            <label for="id">ID</label>
            <input type="text" id="id" name="id" placeholder="" value="<?= $id ?>" disabled/> 
            <!-- End of Id - INPUT -->


            <!-- login - INPUT -->
            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="Enter a login" value="<?= $login ?>" autofocus /> 
            <!-- End of login - INPUT -->

            <!-- Password - INPUT -->
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter a password" value="<?= $password ?>" /> 
            <!-- End of Password - INPUT -->

            <!-- Email - INPUT -->
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter an email" value="<?= $email ?>" /> 
            <!-- End of Email - INPUT -->
          
            <!-- Firstname - INPUT -->
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter a first name" value="<?= $firstname ?>" /> 
            <!-- End of Firstname - INPUT -->

            <!-- Lastname - INPUT -->
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" name="lastname" placeholder="Enter a last name" value="<?= $lastname ?>" /> 
            <!-- End of Lastname - INPUT -->
          </div>
          <!-- Inputs-Wrapper -->


          <!-- Type-Wrapper -->
          <div class="type-wrapper horizontal layout center">

            <!-- Type - Select Input-->
            <label for="typeInput">Method: </label>
            <select id="typeInput" name="method">

              <!-- Default - OPTION -->
              <option value="default">------ default ------</option>

              <!-- PHP (1): for each method in the `$methods` array... -->
              <?php foreach ($methods as $method) : ?>
              <!-- PHP (1): ...show the method as an option -->
              
              <option value="<?= $method ?>"><?= $method ?></option>

              <?php endforeach; ?>
              <!-- End of PHP (1) -->

            </select>
            <!-- End of Type - Select Input -->

          </div>
          <!-- End of Type-Wrapper --> 
          
          <!-- Execute - Button -->
          <input type="submit" value="execute">

        </form>
        <!-- End of Form -->

      </div>
      <!-- End of Aside Container -->
    </aside>
    <!-- End of Drawer - ASIDE -->



    
 
    <!-- PHP: If there's an error... -->
    <?php if ($err) : ?>
    <!-- ...show the Toast -->

    <!-- Toast -->
    <div class="toast error">
      <p><?php echo $errMsgHTML ?></p>
    </div>
    <!-- End of Toast -->

    <?php endif; ?>
    <!-- End of PHP: 'If the width *IS NOT* valid...' -->


  </body>
  <!-- End of BODY -->


</html>
<!-- End of HTML -->
