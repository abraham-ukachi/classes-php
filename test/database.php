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
* @name Database MYSQL - Test
* @file database.php
* @author: Abraham Ukachi <abraham.ukachi@laplateforme.io>
* @version: 0.0.1
*
*/


/*
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 * MOTTO: I'll always do more 😜!!!
 * !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
 */

// Require/Import [once] the database file
require_once '../Database.php';

// Create shortcut of the `ClassesPhp` namespace as `cp`;
use ClassesPhp as cp;

// Instantiate the `Database` class as `database`
$database = new cp\Database(cp\Database::TYPE_MYSQLI);

// check creation
if ($database->create_errno) {
  echo $database->create_error;
  exit();
}

// DEBUG [4dbsmaster]: tell me about it ;)
print_r("[MYSQLI]: Database safely created !!!" . "</br>");


// check connection
if ($database->connect_errno) {
  echo $database->connect_error;
  exit();
}

// DEBUG [4dbsmaster]: tell me about it ;)
print_r("[MYSQLI]: Database connected successfully !!!" . "</br>");


// Uncomment the code block below, to add a new user to the `utilisateurs` table
// $database->mysqli->query("
// INSERT INTO utilisateurs (login, password, email, firstname, lastname) 
// VALUES ('james', 'love222', 'james@gmail.com', 'James', 'Ukachi')
// ");


  
?>
