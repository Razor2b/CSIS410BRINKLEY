<?php
    function Employee_Login() {
        // INITIALIZE VARIABLES
            $username = "";
            $password = "";
            $usernameerror = "";
            $passworderror = "";
            $messageerror = "";
        
        // if request method is post, store username as username variable and then store variable is session array
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            ValidateEmployeeVariables();        
        } elseif (!isset($_SESSION['user'])) {
            ShowEmployeeForm($username, $password, $usernameerror, $passworderror, $messageerror);
            
        }
        
    }

    function ValidateEmployeeVariables() {
        // ASSIGN VALUES TO VARIABLES
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            $username = NULL;
            $usernameerror = "Please enter username.";
        }

        if (empty($password)) {
            $password = NULL;
            $passworderror = "Please enter password.";
        }

        if (((!empty($username)) && (!empty($password))) && ((((strtolower($username)) != 'admin') && ($password != 'admin')) xor (((strtolower($username)) != 'publisher') && ($password != 'publisher')) xor (((strtolower($username)) != 'customer') && ($password != 'customer')))) {
            $username = NULL;
            $password = NULL;
            $messageerror = "Invalid username and/or password. Please try again.";
        }

        if (!($username && $password)) {
            showOwenForm($username, $password, $usernameerror, $passworderror, $messageerror);
        }

        if ($username && $password) {
            $username = $_POST['username'];
            $_SESSION['user'] = $username;
        }
    }
        
    function ShowEmployeeForm($username, $password, $usernameerror, $passworderror, $messageerror) {
        echo "You must login in order to view/edit content.";
        print <<<FORM
            <form action="" method="post">
                        <p>Username: <input type="text" name="username" size="20" value="$username"/></p>
                        <p class="error">$usernameerror</p>
                        <p>Password: <input type="text" name="password" size="20" value="$password"/></p>
                        <p class="error">$passworderror</p>
                        <!--SUBMIT BUTTON-->
                        <input type="submit" name="submit" formaction="">
            </form>
FORM;
    }
    
    function Employee_Role() {
        require("Variables.php");
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user'] == "customer") {
                $_SESSION['role'] = "customer";
                echo $data;
            }
            if ($_SESSION['user'] == "customer") {
                $_SESSION['role'] = "customer";
                echo $data;
                echo $form;
            }
            else {
                echo "";
            }
        }
        
    }
    
?>