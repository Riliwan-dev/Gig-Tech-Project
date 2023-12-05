 <?php

session_start();
if($_SESSION['loginadmin'] !="true"){
  header('location: login.php');
}
?> 



<!DOCTYPE html>r\
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application-form</title>
    <link rel="stylesheet" href="css/application.css">
</head>
<body>
    <div class="wrapper">

        <section-one>
            <div class="row">

                <div class="col-4">
                    <img src="images/gig.png" alt="">
                </div>

                <div class="col-4 text">
                    <h4>GIGS-TECH</h4>
                    <h5>SOLUTIONS AND CONSULT</h5>
                    <h6>WE CREATE, WE INSPIRE AND EXPLORE</h6>
                    <p>APPLICATION FORM</p>
                </div>

                <div class="col-4">
                    <img src="" alt="">
                </div>

            </div>
        </section-one>

        <section-two>

            <div class="row">
                
            <h6>PERSONAL INFORMATION</h6>

    <form action="" method="post">

      <div class="form-group">
                    <div class="form-input">
                        <label for="Name">NAME</label>
                            <div class="input-form">
                                <input type="text" name="name" required placeholder="Enter your name">
                            </div>
                    </div>

                    <div class="form-input">
                        <label for="MIDDLE NAME">MIDDLE NAME</label>
                            <div class="input-form">
                                <input type="text" name="middlename" required placeholder="Enter your middle name">
                            </div>
                    </div>

                     <div class="form-input">
                        <label for="LAST NAME">LAST NAME</label>
                            <div class="input-form">
                                <input type="text" name="lastname" required placeholder="Enter your last name">
                            </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-input">
                        <label for="Name">EMAIL ADDRESS</label>
                            <div class="input-form">
                                <input type="text" name="email" required placeholder="Enter your email address">
                            </div>
                    </div>

                    <div class="form-input">
                        <label for="Name">PHONE NUMBER</label>
                            <div class="input-form">
                                <input type="number" name="number" required placeholder="Enter your phone number">
                            </div>
                    </div>

                     <div class="form-input">
                        <label for="Name">CONTACT INFORMATION</label>
                            <div class="input-form">
                                <input type="text" name="contactInfo" required placeholder="Enter your contact information">
                            </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-input">
                        <label for="Name">STATE</label>
                            <div class="input-form">
                                <input type="text" name="state" required placeholder="Enter your state">
                            </div>
                    </div>

                    <div class="form-input">
                        <label for="Name">LGA</label>
                            <div class="input-form">
                                <input type="text" name="localGovt" required placeholder="Enter your LGA">
                            </div>
                    </div>

                     <div class="form-input">
                        <label for="Name">GENDER</label>
                            <div class="input-form">
                               <select name="gender">
                                <option value="male">male</option>
                                <option value="female">female</option>
                                <option value="others">others</option>
                               </select>
                            </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-input">
                        <label for="Name">DATE OF BIRTH</label>
                            <div class="input-form">
                                <input type="text" name="dob" required placeholder="Enter your Date of birth">
                            </div>
                    </div>

                    <div class="form-input">
                        <label for="Name">RELIGION</label>
                            <div class="input-form">
                                <input type="text" name="religion" required placeholder="Enter your Religion">
                            </div>
                    </div>

                     <div class="form-input">
                        <label for="Name">MARITAL STATUS</label>
                            <div class="input-form">
                                <div class="input-form">
                                    <select name="maritalstatus">
                                     <option value="male">single</option>
                                     <option value="female">married</option>
                                     <option value="others">others</option>
                                    </select>
                            </div>
                    </div>
                </div>

            </div>

        </section-two>

        <section-two>

            <div class="row">
                
            <h6>SPONSOR INFORMATION</h6>


                <div class="form-group">
                    <div class="form-input">
                        <label for="Fullname">FULLNAME</label>
                            <div class="input-form">
                                <input type="text" name="fullname" required placeholder="Enter your full name">
                            </div>
                    </div>

                    <div class="form-input">
                        <label for="Relationship">RELATIONSHIP</label>
                            <div class="input-form">
                                <input type="text" name="relationship" required placeholder="Enter your relationship">
                            </div>
                    </div>

                     <div class="form-input">
                        <label for="Address">ADDRESS</label>
                            <div class="input-form">
                                <input type="text" name="address" required placeholder="Enter your address">
                            </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-input">
                        <label for="E-mail Address">EMAIL ADDRESS</label>
                            <div class="input-form">
                                <input type="text" name="email_address" required placeholder="Enter your email-address">
                            </div>
                    </div>

                    <div class="form-input">
                        <label for="Phone-number">PHONE NUMBER</label>
                            <div class="input-form">
                                <input type="number" name="text" required placeholder="Enter your phone number">
                            </div>
                    </div>

                     <div class="form-input">
                        <label for="Occupation">OCCUPATION(optional)</label>
                            <div class="input-form">
                                <input type="text" name="occupation" placeholder="Enter your occupation (optional)">
                            </div>
                    </div>
                </div>


            </div>
            
        <div class="paragraph">
            <p>N:B Our training requires that a person who wants to train in our establishment provides
                a credible, responsible and acceptable person as gurantee subject to training
                confirmation, if you are willing to stand as a gurantor for the said applicant, kindly
                complete
            </p>


            <p>
                Pleae note that it is dangerous to stand as a gurantor for someone whom you do not
                know. Gurantor can either to be parent or a very close relative. We warned that any false 
                declaration on this form will attract severe consequences which may include prosecution
             </p>

            <p>
             Mr/Mrs/Miss <input class="border" type="text" name="mr_mrs_miss" required>who is considered for training his given
             your name as his/her gurantor. Please confirm your willingness to guranty him/her
             against any loss by completing this form. 
            </p>

                <ol> 
                        <li>Is this trainee well known to you? <input class="border" type="text" name="trainer" required> </li> 
                        <li>What is your relationship with him/her <input class="border" type="text" name="text" required> </li> 
                        <li>How long have you known him/her <input class="border" type="text" name="text" required> </li> 
                        <li>Please state your Occupation <input class="border" type="text" name="sponsor_occupation" required> </li> 
                </ol>

            <p>
            I, Dr/Mr/Miss<input class="border" type="text" name="dr_mr_miss" required> of Home address <input class="border" type="text" name="home_address" required>
           

            
            <!-- <input class="border" type="text" name="text" required>  -->
            and Work address <input class="border" type="text" name="work_address" required>
            <!-- <input class="border" type="text" name="text" required> -->
            
            
            Stated as gurantor to Mr/Mrs/Miss <input class="border" type="text" name="gurantor" required> who is 
            considered for training at GIGS-TECH SOLUTIONS AND CONSULTS.
            </p>
        </div>
            <div class="row">

                <h6>ATTESSTATION</h6>
                <p>That i irrevocably and unconditionally guranteeto indemnify the center against the following </p>

                <ol>
                    <li>Any loss suffered as a result of Mr/Mrs/Miss<input class="border" type="text" name="any_loss" required> action while in the center training</li>
                    <li>Any action arising from Mr/Mrs/Miss<input class="border" type="text" name="any_action" required> desertion of the center for any offence committed or arising from his/training</li> 
                </ol>


              

                <p class="bottom">Note: Training days are Mondays,Wednesdays, and Fridays while other days are meant for 
                    personal development. Our Establishment opens 9am, trainee should at list be here by 9am or latest 9:30am.</p>
                
                <p>Failure to be here at required time for three consecutive period without a prior notice may 
                    lead to withdrawal from class 
                </p>

            </div>
            <button type="submit" name="application_form">Submit </button>
        
        </section-two>

    </form>
<?php include("include/validate.php");?>

    </div>
</body>
</html>