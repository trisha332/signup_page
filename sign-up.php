
<?php require("config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Registration</title>
</head>
<body>

<?php
require('../fixed_navber/index1.php');
    
    
?>
 
    <div class="container">
        <div class="row  justify-content-center align-items-center" >
        <div class="col-6 mt-5" style=" padding-top:100px;">
            <h1>User Registration</h1>
            <form name="frm" method="post">
                <div class="form-group">
                    <label for="reg_first">Enter First Name</label>
                    <input type="text" name="reg_first" class="form-control border-primary">
                </div>
                <div class="form-group">
                    <label for="reg_last">Enter Last Name</label>
                    <input type="text" name="reg_last" class="form-control border-primary">
                </div>
                
                
                <div class="form-group">
                    <label for="reg_email">Enter Student Email</label><span id="msg" class="text-danger ml-3"></span>
                    <input type="email" name="reg_email" id="reg_email" class="form-control border-primary">
                </div>
                <div class="form-group">
                    <label for="reg_pwd">Enter Student Password</label>
                    <input type="password" name="reg_pwd" class="form-control border-primary">
                </div>
                <input type="submit" name="ok" value="Save" class="btn btn-primary">
            </form>
        </div>

<?php
            if(isset($_POST['ok'])){
                $reg_first=$_POST['reg_first'];
                $reg_last=$_POST['reg_last'];
                $reg_email=$_POST['reg_email'];
                $reg_pwd=$_POST['reg_pwd'];
                $src="SELECT reg_email FROM reg_table WHERE reg_email='$reg_email'";
                $rs=mysqli_query($con, $src);
                if(mysqli_num_rows($rs)>0){
                    ?>
                    <div class="alert alert-danger">
                        You are already registered
                    </div>
                    <?php
                }else{
                    $sql="INSERT INTO reg_table (reg_first,reg_last, reg_email, reg_pwd) VALUES ('$reg_first','$reg_last','$reg_email','$reg_pwd')";
                    $res=mysqli_query($con, $sql);
                    if($res==1){
                        ?>
                        <div class="alert alert-success">
                            Registration is successfull
                        </div>
                        <?php
                    }else{
                        ?>
                        <div class="alert alert-danger">
                            Registration is unsuccessfull
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- <script>
        $(document).ready(function () {
            $("#semail").blur(function () { 
                let semail=$("#semail").val()
                $.ajax({
                    type: "POST",
                    url: "checkEmail.php",
                    data: {"semail":semail},
                    success: function (resp) {
                        $("#msg").html(resp)
                    }
                });
                
            });
        });
    </script> -->
       
</body>
</html>