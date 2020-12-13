

<?php


function validEmail ($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = "SELECT * FROM User_ID WHERE id=1";
            $result = $GLOBALS['conn']->query($sql);
            if (mysqli_num_rows($result)==0){
                return false;
            }else{
                return true;
            }

        }else{
            echo '<script>alert("Email format Invalid")</script>';
            return false;
        }
}

    function validPassword($password, $password2){
        if (strlen($password)<7){
            echo '<script>alert("Password short")</script>';
        }else{
            if($password===$password2) {
                return true;
            }else{
                echo '<script>alert("Passwords do not match")</script>';
                return false;
            }
        }
    }

    function checkLogin ($email, $password){
        //check with db if user and password exist and match
    }

    function Registration($email, $password, $password2, $age, $fName, $lName, $address=""){
        if (validEmail($email)==true && validPassword($password, $password2) ==true){

        }
    }


?>


<!--function checkLogin(email,password){-->
<!--    //check if user in DB and password-->
<!--}-->
<!---->
<!--function Registration(email, password, age, FName, LName, address="") {-->
<!--    if (validEmail(email,password)){-->
<!--        //send info to DB-->
<!--        //account created successfully alert-->
<!--    }-->
<!--}-->
