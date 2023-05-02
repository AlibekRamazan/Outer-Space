<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="registrationpage.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="con1">
        
        <header>Registration page</header>  
		<form action="reg.php" id="form" name="form" method="post">
            <?php
        if($_COOKIE['user'] == ''):
        ?>
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="every_field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required name="fullname">
                        </div> 

                        <div class="every_field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date" required name="dateofbirth">
                        </div>

                        <div class="every_field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email" id="email" name="email" data-reg="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$"  required>
                        </div>

                        <div class="every_field">
                            <label>Mobile Number</label>
                            <input type="number" placeholder="Enter mobile number" id="mobile" name="mobile" data-reg="^((\+7|7|8)+([0-9]){10})$"  required>
                            
                        </div>

                        <div class="every_field">
                            <label>Gender</label>
                            <select required name="gender">
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="every_field">
                            <label>Create a password</label>
                            <input type="text" placeholder="Enter a password" id="password" name="password" data-reg="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">

                        </div>

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">University Identity Details</span>

                    <div class="fields">
                        <div class="every_field">
                            <label>Your course</label>
                            <select required name="yourcourse">
                                <option disabled selected>Select the course</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>

                        <div class="every_field">
                            <label>UNI ID Number</label>
                            <input type="number" placeholder="Enter ID number" required name="uniid">
                        </div>

                        <div class="every_field">
                            <label>Degree Level</label>
                            <select required name="degreelevel">
                                <option disabled selected>Select the degree</option>
                                <option>Bachelor's Degree</option>
                                <option>Master's Degree</option>
                                <option>Doctoral Degree</option>
                            </select>
                        </div>

                        <div class="every_field">
                            <label>Speciality</label>
                            <select required name="speciality">
                                <option disabled selected>Select the speciality</option>
                                <option>Information Technologies</option>
                                <option>Information Security</option>
                                <option>Computer Engineering</option>
                            </select>
                        </div>

                        <div class="every_field">
                            <label>Number of Group</label>
                            <input type="text" placeholder="Enter your number of group" required name="numberofgroup">
                        </div>

                        <div class="every_field">
                            <label>Language of instruction</label>
                            <select required name="language">
                                <option disabled selected>Select the language</option>
                                <option>English</option>
                                <option>Kazakh</option>
                                <option>Russian</option>
                            </select>
                        </div>
                    </div>

                    <button class="button">
                            <span class="btnText">Submit</span>
                            <!--<i class="uil uil-navigator"></i>-->
                    </button>
                </div> 
            </div>
        </form>
        <?php else: ?>

            <p>Hello, <?=$_COOKIE['user']?>. To log out, click <a href="exit.php">here</a>.</p>
    <?php 
       endif;
       ?>
	</div>
<!--<script src="registrationpage.js"></script>-->
</body>
</html>