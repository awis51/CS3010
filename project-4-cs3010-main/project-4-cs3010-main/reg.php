<?php
include 'insertData.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title", "Registration"); ?>
    <title><?php echo title; ?></title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/form_valid.js"></script>
    <style>
        body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
        .w3-row-padding img {margin-bottom: 12px}
        /* Set the width of the sidebar to 120px */
        .w3-sidebar {width: 120px;background: #222;}
        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        #main {margin-left: 120px}
        /* Remove margins from "page content" on small screens */
        @media only screen and (max-width: 600px) {#main {margin-left: 0}}
    </style>
</head>
<body class="w3-black" onload="registerHandlers();">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
    <!-- Diamond Icon in top left corner -->
    <i class="fa fa-diamond w3-xxlarge" style="padding-bottom: 10px; padding-top: 10px;"></i>
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
    </a>
    <a href="reg.php" class="w3-bar-item w3-button w3-padding-large w3-black">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>REGISTRATION</p>
    </a>
    <a href="animations.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
        <i class="fa fa-cogs w3-xxlarge"></i>
        <p>ANIMATIONS</p>
    </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="home.html" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="reg.php" class="w3-bar-item w3-button" style="width:25% !important">REGISTRATION</a>
        <a href="animations.html" class="w3-bar-item w3-button" style="width:25% !important">ANIMATIONS</a>
    </div>
</div>
<!-- Page Content -->
<div class="w3-padding-large" id="main">
    <!-- Header/Home -->
    <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
        <h1 class="w3-jumbo"> Fill out the form below.</h1>
        <i class="fa fa-diamond w3-xxxlarge"></i>
    </header>
    <!-- Form Section -->
    <div class="container p-4 border w3-grey rounded">
        <form novalidate method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row">
                <div class="col border rounded w3-dark-grey mb-3">
                    <div class="form-group">
                        <label for="user" class="form-label">Username</label>
                        <p><input class="form-control p-2" type="text" id="user" placeholder="Username" required name="Username" value="<?php echo $user;?>"/></p>
                        <div class="text-danger"><?php echo $usrErr;?></div>
                        <div id="usrErr" class="alert alert-danger text-danger d-none">Please Enter a Username between 6-50 Characters. </div>
                    </div>
                    <div class="form-group">
                        <label for="pass" class="form-label">Password</label>
                        <p><input class="form-control p-2" type="password" id="pass" placeholder="Password" required name="Password" value="<?php echo $pass;?>"></p>
                        <div class="text-danger"><?php echo $passErr;?></div>
                        <div id="passErr" class="alert alert-danger text-danger d-none"> Please enter a password between 8-50 characters containing at least
                            one capital, one lowercase, one digit, and one special character.</div>
                    </div>
                    <div class="form-group">
                        <label for="pass1" class="form-label">Password again</label>
                        <p><input class="form-control p-2" type="password" id="pass1" placeholder="Enter Password Again" required name="pass1" value="<?php echo $pass1;?>"></p>
                        <div class="text-danger"><?php echo $pass1Err;?></div>
                        <div id="pass1Err" class="alert alert-danger text-danger d-none">Please enter a password that matches the first!</div>
                    </div>
                </div>
                <div class="col border rounded w3-dark-grey mb-3">
                    <div class="form-group">
                        <label for="fname" class="form-label">First Name</label>
                        <p><input class="form-control p-2" type="text" id="fname" placeholder="First Name" required name="fname" value="<?php echo $fname;?>"></p>
                        <div class="text-danger"><?php echo $fnameErr;?></div>
                        <div id="fnameErr" class="alert alert-danger text-danger d-none">Please enter a first name less than 50 characters.</div>
                    </div>
                    <div class="form-group">
                        <label for="lname" class="form-label">Last Name</label>
                        <p><input class="form-control p-2" type="text" id="lname" placeholder="Last Name" required name="lname" value="<?php echo $lname;?>"></p>
                        <div class="text-danger"><?php echo $lnameErr;?></div>
                        <div id="lnameErr" class="alert alert-danger text-danger d-none">Please enter a last name less than 50 characters.</div>
                    </div>
                    <div class="form-group">
                        <label for="pnum" class="form-label">Phone Number</label>
                        <p><input class="form-control p-2" type="tel" id="pnum" placeholder="123-456-7890" onkeydown="phoneNumberFormatter()"  required name="pnum" value="<?php echo $pnum;?>"></p>
                        <div class="text-danger"><?php echo $numErr;?></div>
                        <div id="numErr" class="alert alert-danger text-danger d-none">Please enter a valid phone number.</div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <p><input class="form-control p-2" type="text" id="email" placeholder="Email" required name="Email" value="<?php echo $email;?>"></p>
                        <div class="text-danger"><?php echo $emailErr;?></div>
                        <div id="emailErr" class="alert alert-danger text-danger d-none">Please enter a valid email.</div>
                    </div>
                </div>
                <div class="col border rounded w3-dark-grey mb-3">
                    <div class="form-group">
                        <label for="addr1" class="form-label">Address 1</label>
                        <p><input class="form-control p-2" type="text" id="addr1" placeholder="Address 1" required name="Address1" value="<?php echo $addr1;?>"></p>
                        <div class="text-danger"><?php echo $addr1Err;?></div>
                        <div id="addr1Err" class="alert alert-danger text-danger d-none">Please enter an Address between 1-100 characters.</div>
                    </div>
                    <div class="form-group">
                        <label for="addr2" class="form-label">Address 2</label>
                        <p><input class="form-control p-2" type="text" id="addr2" placeholder="Address 2" required name="Address2" value="<?php echo $addr2;?>"></p>
                        <div class="text-danger"><?php echo $addr2Err;?></div>
                        <div id="addr2Err" class="alert alert-danger text-danger d-none">Please Enter Valid Address.</div>
                    </div>
                    <div class="form-group">
                        <label for="city" class="form-label">City</label>
                        <p><input class="form-control p-2" type="text" id="city" placeholder="City" required name="City" value="<?php echo $city;?>"></p>
                        <div class="text-danger"><?php echo $cityErr;?></div>
                        <div id="cityErr" class="alert alert-danger text-danger d-none">Please enter a city less than 50 characters.</div>
                    </div>
                    <div class="form-group">
                        <label for="state" class="form-label">State</label>
                        <p><select class="form-select p-2" id="state" name="State" required>
                                <option value="" disabled selected> Select State</option>
                                <option value="Alabama"> Alabama </option>
                                <option value="Alaska"> Alaska </option>
                                <option value="Arizona"> Arizona </option>
                                <option value="Arkansas"> Arkansas </option>
                                <option value="California"> California </option>
                                <option value="Colorado"> Colorado </option>
                                <option value="Connecticut"> Connecticut </option>
                                <option value="Delaware"> Delaware </option>
                                <option value="Florida"> Florida </option>
                                <option value="Georgia"> Georgia </option>
                                <option value="Hawaii"> Hawaii </option>
                                <option value="Idaho"> Idaho </option>
                                <option value="Illinois"> Illinois </option>
                                <option value="Indiana"> Indiana </option>
                                <option value="Iowa"> Iowa </option>
                                <option value="Kansas"> Kansas </option>
                                <option value="Louisiana"> Louisiana </option>
                                <option value="Maine"> Maine </option>
                                <option value="Maryland"> Maryland </option>
                                <option value="Massachusetts"> Massachusetts </option>
                                <option value="Michigan"> Michigan </option>
                                <option value="Minnesota"> Minnesota </option>
                                <option value="Mississippi"> Mississippi </option>
                                <option value="Missouri"> Missouri </option>
                                <option value="Montana"> Montana</option>
                                <option value="Nebraska"> Nebraska</option>
                                <option value="Nevada"> Nevada</option>
                                <option value="New Hampshire"> New Hampshire</option>
                                <option value="New Jersey"> New Jersey</option>
                                <option value="New Mexico"> New Mexico</option>
                                <option value="New York"> New York</option>
                                <option value="North Carolina"> North Carolina</option>
                                <option value="Ohio"> Ohio</option>
                                <option value="Oklahoma"> Oklahoma</option>
                                <option value="Oregon"> Oregon</option>
                                <option value="Pennsylvania"> Pennsylvania</option>
                                <option value="Rhode Island"> Rhode Island</option>
                                <option value="South Carolina"> South Carolina</option>
                                <option value="South Dakota"> South Dakota</option>
                                <option value="Tennessee"> Tennessee </option>
                                <option value="Texas"> Texas </option>
                                <option value="Utah"> Utah </option>
                                <option value="Vermont"> Vermont </option>
                                <option value="Virginia"> Virginia </option>
                                <option value="Washington"> Washington </option>
                                <option value="West Virginia"> West Virginia </option>
                                <option value="Wisconsin"> Wisconsin </option>
                                <option value="Wyoming"> Wyoming </option>
                            </select></p>
                        <div class="text-danger"><?php echo $stateErr;?></div>
                        <div id="stateErr" class="alert alert-danger text-danger d-none">Please select a state!</div>
                    </div>
                    <div class="form-group">
                        <label for="zip" class="form-label">Zip Code</label>
                        <p><input class="form-control p-2" type="text" id="zip" placeholder="Zip Code" required name="zip" value="<?php echo $zip;?>"></p>
                        <div class="text-danger"><?php echo $zipErr;?></div>
                        <div id="zipErr" class="alert alert-danger text-danger d-none">Please enter a zip code between 5-10 characters without hyphen.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col border rounded w3-dark-grey mb-3" id="gender">
                    <h4>Select a Gender:</h4>
                    <label for="male" class="form-check-label">Male</label>
                    <input class="form-check-input" type="radio" id="male" name="gender" <?php if ($gender=="male"){echo "checked";} ?> value="male" required>

                    <label for="female" class="form-check-label">Female</label>
                    <input class="form-check-input" type="radio" id="female" name="gender" <?php if ($gender=="female"){echo "checked";} ?> value="female" required>

                    <label for="other" class="form-check-label">Other Gender</label>
                    <input class="form-check-input" type="radio" id="other" name="gender" <?php if ($gender=="other"){echo "checked";} ?> value="other" required>
                    <div class="text-danger"><?php echo $genderErr; ?></div>
                    <div id="genderErr" class="alert alert-danger text-danger d-none">Please select an option.</div>
                </div>
                <div class="col border rounded w3-dark-grey mb-3" id="marital">
                    <h4>Select Marital Status:</h4>
                    <label for="married" class="form-check-label">Married</label>
                    <input class="form-check-input" type="radio" id="married" name="marital" <?php if ($marital=="married"){echo "checked";} ?> value="married" required>

                    <label for="divorced" class="form-check-label">Divorced</label>
                    <input class="form-check-input" type="radio" id="divorced" name="marital" <?php if ($marital=="divorced"){echo "checked";} ?> value="divorced" required>

                    <label for="single" class="form-check-label">Single</label>
                    <input class="form-check-input" type="radio" id="single" name="marital" <?php if ($marital=="single"){echo "checked";} ?> value="single" required>
                    <div class="text-danger"><?php echo $maritalErr; ?></div>
                    <div id="martialErr" class="alert alert-danger text-danger d-none">Please select an option.</div>
                </div>
                <div class="col border rounded w3-dark-grey mb-3">
                    <h3>Pick Date of Birth:</h3>
                    <label for="date" class="form-label"></label>
                    <input type="date" id="date" name="date" required>
                    <div class="text-danger"><?php echo $dateErr; ?></div>
                    <div id="dateErr" class="alert alert-danger text-danger d-none">Please select a date.</div>
                </div>
            </div>
            <div class="container w3-center">
                <button class="btn btn-light" type="submit" id="submit" >
                    <i class="fa fa-paper-plane"></i> SUBMIT
                </button>
                <button class="btn btn-light" id="reset" type="reset">
                    <i class="fa fa-refresh"></i> RESET
                </button>
            </div>
        </form>

        <!-- End Form Section -->
    </div>

    <!-- Footer -->
    <footer class="w3-content w3-padding-16 w3-text-grey w3-xlarge">
        <a href="https://www.facebook.com" target="_blank" class="fa fa-facebook-official"></a>
        <a href="https://github.com/awis51" target="_blank" class="fa fa-github"></a>
        <a href="https://www.linkedin.com/in/austin-wisness-098a17170/" target="_blank" class="fa fa-linkedin"></a>
        <!-- End footer -->
    </footer>
    <!-- END PAGE CONTENT -->
</div>
</body>
</html>
