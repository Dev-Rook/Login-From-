<?php
include "serverlogin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Styles/Login/Login.css">
    <title>Login</title>
</head>

<body>
    <div class="Header_Container">
        <img src="./Assets/Images/Brown-Topography-Map.jpg" alt="" class="Header_Image">
    </div>
    <nav class="Nav">
        <ul class="NavLink_Container">
            <li class="NavLink_Item">
                <a href="./Views/Home.html" class="NavLink">
                    Home
                </a>
            </li>
            <li class="NavLink_Item">
                <a href="../Views/About.html" class="NavLink">
                    About
                </a>
            </li>
            <li class="NavLink_Item">
                <a href="./Views/PrivacyPolicy.html" class="NavLink">
                    Privacy & Policy
                </a>
            </li>
            <li class="NavLink_Item">
                <a href="../index.html" class="NavLink">
                    Login
                </a>
            </li>

            <div class="Search_Container">
                <img src="./Assets/Icons/Search-Icon.png" alt="" class="SearchIcon">
                <input placeholder="Search..." type="text" class="Search">
            </div>

            <img onclick="toggle()" src="./Assets/Icons/Menu-Icon.png" alt="" class="MenuIcon">
        </ul>

        <div class="SideMenu">
            <img onclick="toggle()" src="./Assets/Icons/Close-Icon.png" alt="" class="CloseIcon">

            <h1 class="Brand">Module 6</h1>

            <ul class="MobileLink_Container">
                <li class="MobileLink_Item">
                    <a href="./Views/Home.html" class="MobileLink">
                        Home
                    </a>
                </li>
                <li class="MobileLink_Item">
                    <a href="./Views/About.html" class="MobileLink">
                        About
                    </a>
                </li>
                <li class="MobileLink_Item">
                    <a href="./Views/PrivacyPolicy.html" class="MobileLink">
                        Privacy & Policy
                    </a>
                </li>
                <li class="MobileLink_Item">
                    <a href="./index.html" class="MobileLink">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="Form_Container">
        <form action="" class="Login_Form">
            <fieldset>
                <input placeholder="Username..." type="text" class="Input" name="username">
                <input placeholder="Password..." type="password" class="Input" name="password">
            </fieldset>

            <button type="submit" class="Login_Button">
                Login
            </button>
        </form>

        <div class="Form_Image_container">
            <img src="./Assets/Images/Skull-Bones.jpg" alt="" class="Form_Image">
        </div>
    </div>



    <script src="./index.js"></script>
</body>

</html>