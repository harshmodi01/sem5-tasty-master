<?php
$connection = mysqli_connect("localhost", "root", "", "newproject");

    if ($connection) {
        echo "Connection done!";
    } else {
        die("Not connected" . mysqli_connect_error());
    }

    if (isset($_GET['email']) && isset($_GET['token'])) {
        echo "//data get from link";
        date_default_timezone_set('Asia/Kolkata');
        $date = date("Y-m-d");
        $query = "SELECT * FROM users WHERE email='$_GET[email]' ";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo " no error generated";
            if (mysqli_num_rows($result) > 0) {
                echo "user found";
                
                if (isset($_POST['submit'])) { // Check if the form was submitted
                    $password = $_POST['password'];
                    $confirm_password = $_POST['confirm_password'];

                    if ($password == $confirm_password) {

                        $query = "SELECT * FROM demo_reg WHERE email='$_GET[email]' ";
                        $result = mysqli_query($connection, $query);
                        $row = mysqli_fetch_assoc($result);
                        $pass = $row['pass'];
                        
                        if($pass == $password){
                            echo "<script>
                                swal('Error!', 'Can\'t enter the same password!', 'error');
                                    </script>";
                    }
                    else{
                        if ((strlen($password) >= 5 && preg_match('/[0-9]/', $password) && preg_match('/[a-zA-Z]/', $password))) {
                            $updateQuery = "UPDATE demo_reg SET pass='$password' WHERE email='$_GET[email]'";
                            $updateResult = mysqli_query($connection, $updateQuery);

                            if ($updateResult) {
                                echo "<script>alert('Password updated successfully!');</script>";
                                echo "<script>window.location.href='login.php'</script>";
                            } else {
                                echo "Password update failed: " . mysqli_error($connection);
                            }
                        } else {
                            echo "<script>
                                swal('Error!', 'Password length must be at least 5 characters and contain both numbers and alphabets', 'error');
                            </script>";
                        }
                    }
                    } else {
                        echo "<script>
                            swal('Error!', 'Passwords do not match!', 'error');
                        </script>";
                    }
                }
            } else {
                echo "no user found";
                echo "<script>window.location.href='xyz.php'</script>";
            }
        } else {
            echo "error somewhere";
        }
    
    }
?>