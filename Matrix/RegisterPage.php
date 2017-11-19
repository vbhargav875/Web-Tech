<!DOCTYPE HTML>

<html>
    <head>
        <title>Register | Matrix</title>
        <link rel="stylesheet" href="registerpage.css">
        <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Rokkitt" rel="stylesheet">
    </head>

    <body>
        <ul class = 'navigation'>
            <li>
                <a href="index.php"><b>Home</b></a>
            </li>
            <li>
                <a href="#"><b>Learn</b></a>
            </li>
            <li>
                <a href="#"><b>Test Yourself</b></h2>
            </li>
            <li>
                <a href="#"><b>About Us</b></h2>
            </li>
        </ul>
        <form id = "registerform">
            <fieldset>
                <h2 class = "fs-title">Make an Account!</h2>
                <h2 class = "fs1-title">Step 1</h2>
                <input type = 'text' name = "Email" placeholder="Email"/>
                <input type = "password" name = "password" placeholder= "Password"/>
                <input type = "password" name = "password" placeholder= "Confirm Password"/>
                <br>
        <!--        <input type = 'button' name = 'next' class = 'next action-button' value = 'Log In'/> -->
                <h2 class = "fs1-title">Step 2</h2>
                <h2 class = "fs-title">Your Social Media Presence</h2>
                <input type = "text" name = "twitter" placeholder="Twitter"/>
                <input type = "text" name = "facebook" placeholder="Facebook"/>
                <input type = "text" name = "google" placeholder="Google Plus"/>
                <br>
                <h2 class = "fs1-title">Step 3</h2>
                <h2 class = "fs-title">Personal Details</h2>
                <input type = "text" name = "fname" placeholder="First Name"/>
                <input type = "text" name = "lname" placeholder="Last Name"/>
                <input type = 'text' name = "phone" placeholder = "Phone Number"/>
                <textarea name = "address" placeholder="Address"></textarea>
                 <input type = 'button' name = 'next' class = 'next action-button' value = 'Sign Up!'/>
            </fieldset>
        </form>


    </body>


</html>
