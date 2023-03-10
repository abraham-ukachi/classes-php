# `classes-php`
> IMPORTANT: This is a working progress and subject to major changes until the specified deadline below.

A school project "introducing" me to PHP's classes and methods using **MYSQLI** and **PDO**. 

I'd already used PHP's classes and methods in a [previous project](https://github.com/abraham-ukachi/module-connexion), and intended to implement more of those in upcoming jobs. However, as of right now, I've not yet used an **OOP Class** to establish a database connection and/or execute some **CRUD** operations via `mysqli` and `pdo` 😉. So, I can't wait to start this project; I'm sure I'll learn something new 😍.

> TO MY TEACHERS (i.e. [Ruben](?), [Nicolas](?), [Aurélie](?) and co.): thanks for these amazingly intuitive projects; they light up a fire in me 🔥🔥, and make me excited `&&` happy to get outta bed every morning - **You Guys Rock !!!** 🙏❤️ 😘. P.S. tnx 4 naming the methods (names + params) in `en`.

> BTW: **HAPPY NEW YEAR 2023 !!!** This is the first project of the year ! Hooray !!! 🥳 🎉🎊 

## Description 
> Original text in French: Vous allez devoir créer une classe ainsi que ces méthodes associées. 

You need to create a class and their corresponding methods. 

> NOTE: See the source files, for a more detailed description.

## Requirements

These are a couple of the main requirements for this school project:

1. You need to create 2 OOP PHP classes named **`User`** and **`Userpdo`** with the methods below:

### List of methods to create

| No. | Type | Name | Params | Description |
|:----|:-----|:-----|:-------|:------------|
| 1 | *public* | **&#95;&#95;construct()** | None (*optional*) | Is called **automatically** when initializing your object. Initializes the different attributes of your object |
| 2 | *public* | **register()** | `$login`, `$password`, `$email`, `$firstname`, `lastname` | Creates the database user in the “users” table. Returns a table containing all the information of the same user |
| 3 | *public* | **connect()** | `$login`, `$password` | Connects the user, and gives the attributes of the class the values corresponding to those of the connected user |
| 4 | *public* | **disconnect()** | None | Disconnect the user |
| 5 | *public* | **delete()** | None | Delete and disconnect a user |
| 6 | *public* | **update()** | `$login`, `$password`, `$email`, `$firstname`, `lastname` | Updates the attributes of the object, and modifies the information in the database |
| 7 | *public* | **isConnected()** | None | Returns a **boolean** (true or false) to know if a user is logged in or not |
| 8 | *public* | **getAllInfos()** | None | Returns an **array** containing all user information |
| 9 | *public* | **getLogin()** | None | Returns the user’s **`login`** |
| 10 | *public* | **getEmail()** | None | Returns the user’s **`email`** |
| 11 | *public* | **getFirstname()** | None | Returns the user’s **`firstname`** |
| 12 | *public* | **getLastname()** | None | Returns the user’s **`lastname`** |


## Jobs
> MOTTO: I'll always do [**more**](#More) 😜

The official deadline of the jobs below - according to [intra](https://intra.laplateforme.io) - was **07-01-2023 at 06:25 AM**. There are **2 Jobs** in this project aptly named [**Etape 01: Classe avec Mysqli**](#Etape-01:-Classe-avec-Mysqli) and [**Etape 02: Classe avec PDO**](#Etape-02:-Classe-avec-PDO), which I detail below:


### Etape 01: Classe avec Mysqli

Here is a list of all the names and files (i.e. `php`) to be submitted as well as their corresponding / current **status** for this job:

| No. | Name | File | Status |
|:----|:-----|:-----|:-------|
| 1 | *`User - MYSQLI`* | **user.php** | [Done](./user.php)\* |

> NOTE: (\*) = still needs to be updated. And for more info on this job including **Job Description**, see the source files.


### Etape 02: Classe avec PDO

Here is a list of all the names and files (i.e. `php`) to be submitted as well as their corresponding / current **status** for this job:

| No. | Name | File | Status |
|:----|:-----|:-----|:-------|
| 1 | *`User - PDO`* | **user-pdo.php** | [Done](./user-pdo.php)\* |

> NOTE: (\*) = still needs to be updated. And for more info on this job including **Job Description**, see the source files.


## Structure

The folder & file structure of this project:
  
- LICENSE
- README.md
- [test](./test)
- - ...
- - *user.php*
- - *user-pdo.php*
- - ...
- [demo](./demo)
- - ...
- - *user.php*
- - *user-pdo.php*
- ...
- **user.php**
- **user-pdo.php**
- Database.php
- ResponseHandler.php

> NOTE: This is just a snippet.


## Installation
> IMPORTANT: Make sure you have `XAMPP` already installed & launched in your Linux machine before proceeding.

1. Clone this project's repository

```sh
git clone https://github.com/abraham-ukachi/classes-php.git
```

> NOTE: There's no need to change the current working directory to **classes-php**


2. Now, create a symbolic link of **classes-php** in the `XAMPP`'s **htdocs** folder:

```sh
ln -s "$(pwd)/classes-php" /opt/lampp/htdocs/classes-php
```

3. Open the **classes-php** folder in your default browser:

```sh
open http://localhost/classes-php
```



---

## Browser Support / Testing

| Browser | Version | Status | Date | Time
|:--------|:--------|:-------|:-----|:-----
| *`Brave`* | **1.46.144** | [Tested](./test/user-pdo.php) | 12-01-2023 | 12:37:00
| *`Chrome`* | **-** | *Pending* | - | -
| *`Firefox`* | **-** | *Pending* | - | -
| *`Safari`* | **-** | *Pending* | - | -
| *`Opera`* | **-** | *Pending* | - | -
| *`Edge`* | **-** | *Pending* | - | -
| *`IE`* | **-** | *Pending* | - | -

> NOTE: *`IE`* = Internet Explorer = 👎🏽


## More 

These are some of the things I did or plan to do, in addition to this project's [job requirements](#Requirements):

| No. | Name | File | Status |
|:----|:-----|:-----|:-------|
| 1 | *`User - MYSQLI - Demo`* | **demo/user.php** | Pending |
| 2 | *`User - PDO - Demo`* | **demo/user-pdo.php** | Pending |
| 3 | *`Database`* | **Database.php** | [Done](./Database.php)\* |
| 4 | *`Database - MYSQL - Test`* | **test/database.php** | [Done](./test/database.php)\* |
| 5 | *`Database - PDO - Test`* | **test/database-pdo.php** | [Done](./test/database-pdo.php)\* |
| 6 | *`Response Handler - Trait`* | **ResponseHandler.php** | [Done](./ResponseHandler.php)\* |
| 7 | *`User - MYSQLI - Test`* | **test/user.php** | [Done](./test/user.php) |
| 8 | *`User - PDO - Test`* | **test/user-pdo.php** | [Done](./test/user-pdo.php) |

> NOTE: (\*) = still needs to be updated. <br>
> There's certainly a couple of file I must've forgot or not added yet,so I'll keep the above list updated obv. :)

## TODOs

- [ ] Optimize all `.php` files
- [ ] Remove unnecessary comments
- [x] Add screenshots

---

## Some Random Screenshots

### PHP Method testing 

| NAME | SUCCESS | FAILED  | 
|:-------|:--------|:--------|
| **`register`** | ![Register Successful - Screenshot](./screenshots/register_successful.png) | ![Register Failed - Screenshot](./screenshots/register_failed.png)
| **`connect`** | ![Login Successful - Screenshot](./screenshots/login_successful.png) | ![Login Failed - Screenshot](./screenshots/login_failed.png)
| **`update`** | ![Update Successful - Screenshot](./screenshots/update_successful.png) | ![Update Failed - Screenshot](./screenshots/update_failed.png)


### On Mobile

None

### On Laptop

None


