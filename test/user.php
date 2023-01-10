<?php
/**
* @license
* classes-php
* Copyright (c) 2023 Abraham Ukachi
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
* @name User MYSQL - Test
* @file user.php
* @author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* @version: 0.0.1
*
* Usage:
*   1-|> open http://localhost/classes-php/test/user.php;
*
*/


/*
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * MOTTO: I'll always do more 😜!!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */


// Require/Import [once] the user file
require_once '../user.php';

// Create shortcut of the `ClassesPhp` namespace  as `cp`.
use ClassesPhp as cp;

// Initialize some variables
$login = 'abraham-ukachi';
$password = 'jesuschrist';
$email = 'abraham.ukachi@laplateforme.io';
$firstname = 'Abraham';
$lastname = 'Ukachi';


// Define some test functions

/**
 * Prints the responses for testing purposes
 *
 * @param string $funcName - Name of the test function
 * @param object $user
 */
function printResponses($funcName, $user) {
  // Get the response message
  $responseSuccess = $user->getResponseSuccess();
  $responseStatus = $user->getResponseStatus();
  $responseMessage = $user->getResponseMessage();

  // DEBUG [4dbsmaster]: tell me about it ;)
  printf("\n\n\n\x1b[36m--- Print Responses ---\x1b[0m\n\n");

  if ($responseSuccess) :
    printf("\x1b[2m[$funcName](1):\x1b[0m responseSuccess => \x1b[32m%s\x1b[0m\n", $responseSuccess);
    printf("\x1b[2m[$funcName](2):\x1b[0m responseStatus => \x1b[32m%s\x1b[0m\n", $responseStatus);
    printf("\x1b[2m[$funcName](3):\x1b[0m responseMessage => \x1b[32m%s\x1b[0m\n", $responseMessage);
  else :
    printf("\x1b[2m[$funcName](1):\x1b[0m responseSuccess => \x1b[31m%s\x1b[0m\n", $responseSuccess);
    printf("\x1b[2m[$funcName](2):\x1b[0m responseStatus => \x1b[31m%s\x1b[0m\n", $responseStatus);
    printf("\x1b[2m[$funcName](3):\x1b[0m responseMessage => \x1b[31m%s\x1b[0m\n", $responseMessage);
  endif;

  
};


/**
 * Tests the `register()` method of `User` class
 */
$testRegister = function() use ($login, $password, $email, $firstname, $lastname) {
  // METHOD 1: Instantiate the `User` class as `user` with all the fields for registration
  $user = new cp\User($login, $password, $email, $firstname, $lastname);

  // METHOD 2
  

  // Print the resonses
  printResponses('testRegister', $user);

};




/**
 * Tests the `connect()` method of `User` class
 */
$testConnect = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  
  printf("\n[testConnect]: user->firstname %s\n", $user->firstname);

  // METHOD 2

  // Print the resonses
  printResponses('testConnect', $user);

};


/**
 * Tests the `disconnect()` method of `User` class
 */
$testDisconnect = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);

  // check [BEFORE] connection
  printf("\n\x1b[2m[testDisconnect]:\x1b[0m [BEFORE] isConnected() ? \x1b[34m%s\x1b[0m\n", 
    json_encode($user->isConnected()));

  // Disconnect the user,
  // and assign the result to `userDisconnected`
  $userDisconnected = $user->disconnect();
  
  printf("\n\x1b[2m[testDisconnect]:\x1b[0m userDisconnect ? \x1b[35m%s\x1b[0m\n", json_encode($userDisconnected));


  // check [AFTER] connection
  printf("\n\x1b[2m[testDisconnect]:\x1b[0m [AFTER] isConnected() ? \x1b[34m%s\x1b[0m\n", 
    json_encode($user->isConnected()));

  
  

  // METHOD 2
  

  // Print the resonses
  printResponses('testDisconnect', $user);

};


/**
 * Tests the `delete()` method of `User` class
 */
$testDelete = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  $user->delete();

  // METHOD 2

  // Print the resonses
  printResponses('testDelete', $user);

};

/**
 * Tests the `updateLogin()` method of `User` class
 */
$testUpdateLogin = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  $user->updateLogin('abraham-ukachi');

  // METHOD 2

  // Print the resonses
  printResponses('testUpdateLogin', $user);

};


/**
 * Tests the `updatePassword()` method of `User` class
 */
$testUpdatePassword = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  $user->updatePassword('ilovenasa');
  
  // METHOD 2

  // Print the resonses
  printResponses('testUpdatePassword', $user);

};


/**
 * Tests the `updateEmail()` method of `User` class
 */
$testUpdateEmail = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  $user->updateEmail('abraham.ukachi@laplateforme.io');

  // METHOD 2

  // Print the resonses
  printResponses('testUpdateEmail', $user);

};


/**
 * Tests the `updateFirstname()` method of `User` class
 */
$testUpdateFirstname = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  $user->updateFirstname('Will');

  // METHOD 2

  // Print the resonses
  printResponses('testUpdateFirstname', $user);

};


/**
 * Tests the `updateLastname()` method of `User` class
 */
$testUpdateLastname = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  $user->updateLastname('Smith');

  // METHOD 2

  // Print the resonses
  printResponses('testUpdateLastname', $user);

};


/**
 * Tests the `update()` method of `User` class
 */
$testUpdate = function() use ($login, $password) {
  // METHOD 1: Instantiate the `User` class as `user` with login and password
  $user = new cp\User($login, $password);
  // $user->update('abilasco', 'Abilascolovesjames1!', null, 'Abraham', 'Smith');
  $user->update('abilasco', null, null, null, null);

  // METHOD 2

  // Print the resonses
  printResponses('testUpdate', $user);

};
/* ==== TEST ZONE ;) ==== */

// Instantiate the `User` class as `user`

// Uncomment the code below, to test the `register()` method of `User` class
// $testRegister();

// Uncomment the code below, to test the `connect()` method of `User` class
$testConnect();

// Uncomment the code below, to test the `disconnect()` method of `User` class
// $testDisconnect();

// Uncomment the code below, to test the `delete()` method of `User` class
// $testDelete();


// Uncomment the code below, to test the `updateLogin()` method of `User` class
// $testUpdateLogin();

// Uncomment the code below, to test the `updatePassword()` method of `User` class
// $testUpdatePassword();

// Uncomment the code below, to test the `updateEmail()` method of `User` class
// $testUpdateEmail();

// Uncomment the code below, to test the `updateFirstname()` method of `User` class
// $testUpdateFirstname();

// Uncomment the code below, to test the `updateLastname()` method of `User` class
// $testUpdateLastname();


// Uncomment the code below, to test the `update()` method of `User` class
$testUpdate();



/* ==== END of TEST ZONE ==== */
