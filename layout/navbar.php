<div class="navbar navbar-default">			
                    <div class="container">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="index.php"><img alt="" src="assets/images/logo.png"></a>
                        </div>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                               
                                <li><a href="index.php" title="Home Page"><?php echo $lang['navbar_HomePage']; ?></a></li>
                                <li><a href="TextPage.php" title="Text Page"><?php echo $lang['navbar_TextPage']; ?></a></li>
                                <?php if($_SESSION['ID'] != null){echo '<li><a href="Donorlist.php">'.$lang['navbar_Donorlist'].'</a></li>';}?>
                                <?php if($_SESSION['Type'] != null && $_SESSION['Type'] != "Doner"){echo '<li><a href="Request.php">'.$lang['navbar_Request'].'</a></li>';}?>
                                <?php if($_SESSION['ID'] != null){echo '<li><a href="Requests.php">'.$lang['navbar_Requests'].'</a></li>';}?>

                            </ul>
                            <ul class="nav navbar-nav navbar-right">

                            <?php
                            
                            if($_SESSION['ID'] != null){
                                echo '<li><a href="#">'.$lang['navbar_Account'].' </a>
                                <ul class="drop-down">
                                    <li><a href="Profile.php">'.$lang['navbar_Profile'].'</a></li> 
                                    <li><a href="Verify/logout.php">'.$lang['navbar_Logout'].'</a></li>
                                </ul></li>';
                            }else{
                                echo '<li><a href="#">'.$lang['navbar_Register'].' </a>
                                <ul class="drop-down">
                                    <li><a href="Verify/Hospital_Register.php">'.$lang['navbar_hospital_register'].'</a></li> 
                                    <li><a href="Verify/Donor_Register.php">'.$lang['navbar_donor_register'].'</a></li>
                                    <li><a href="Verify/Patient_Register.php">'.$lang['navbar_patient_register'].'</a></li>
                                </ul></li>
                                
                                <li><a href="#">'.$lang['navbar_Login'].' </a>
                                <ul class="drop-down">
                                    <li><a href="Verify/Hospital_Login.php">'.$lang['navbar_hospital_login'].'</a></li> 
                                    <li><a href="Verify/Donor_Login.php">'.$lang['navbar_donor_login'].'</a></li>
                                    <li><a href="Verify/Patient_Login.php">'.$lang['navbar_patient_login'].'</a></li>
                                </ul></li>
                                ';
                            }
                            
                            ?>
                                <li><a href="#"><?php echo $lang['navbar_language']; ?> </a>
                                    <ul class="drop-down">
                                        <li><a href="#" onclick="UpdateLanguageTo('ar')">العربية</a></li> 
                                        <li><a href="#"  onclick="UpdateLanguageTo('en')">English</a></li>
                                    </ul>
                                </li>
                                <?php 
                                
                                if($_SESSION['Type'] == "Doner"){
                                    echo "<li><a target='_blank' href='Certificate.pdf'>".$lang['navbar_Certificate']."</a></li>";
                                }

                                ?>
                         </ul>
                            
                        </div>
                    </div>
                </div>