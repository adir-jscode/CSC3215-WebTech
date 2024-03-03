<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<h1>Registration</h1>
<form action="Reg.php" method="post" novalidate >
    <div class="table-1">
    <table>
         <tr>
            <td>
                <table>
                    <tr>
                        <td>
                            <fieldset>
                                <legend>General Information</legend>
                            
                                    <table>
                                        <tr>
                                            <th><label for="fname">First name:</label></th>
                                            <td><input type="text" id="fname" name="fname" value="<?php echo isset($_SESSION['FirstName']) ? $_SESSION['FirstName'] : ""; ?>"></td>
                                            <?php echo isset($_SESSION['firstNameErrMsg']) ? $_SESSION['firstNameErrMsg'] : ""; ?>
                                        </tr>
                                        <tr>
                                            <th><label for="lname">Last name:</label></th>
                                            <td> <input type="text" id="lname" name="lname" value="<?php echo isset($_SESSION['LastName']) ? $_SESSION['LastName'] : ""; ?>"><br></td>
                                            <?php echo isset($_SESSION['LastNameErrMsg']) ? $_SESSION['LastNameErrMsg'] : ""; ?>

                                        </tr>
                                          
                                        <tr>
                                            <th><label for="gender">Gender:</label></th>
                                            <td>
                                                <input type="radio" id="Male" name="male" value="Male">
                                                <label for="Male">Male</label>
                                                <input type="radio" id="Female" name="female" value="Female">
                                                <label for="Female">Female</label>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <th><label for="faname">Father's name:</label></th>
                                                <td><input type="text" id="faname" name="faname" value="<?php echo isset($_SESSION['fatherName']) ? $_SESSION['fatherName'] : ""; ?>"></td>
                                                <?php echo isset($_SESSION['fatherNameErrMsg']) ? $_SESSION['fatherNameErrMsg'] : ""; ?>
                                        </tr>
                                        <tr>
                                            <th><label for="mname">Mother's name:</label></th>
                                            <td><input type="text" id="mname" name="mname" value="<?php echo isset($_SESSION['motherName']) ? $_SESSION['motherName'] : ""; ?>"></td>
                                            <?php echo isset($_SESSION['motherNameErrMsg']) ? $_SESSION['motherNameErrMsg'] : ""; ?>
                                        </tr>
                                        <tr>
                                            <th><label for="blood">Blood Group:</label></th>
                                                <td>
                                                    <select name="bloods" id="blood">
                                                        <option value="A+">A+</option>
                                                        <option value="Ab+">Ab+</option>
                                                        <option value="B+">B+</option>
                                                        <option value="O+">O+</option>
                                                      </select>
                                                </td>
                                                <?php echo isset($_SESSION['bloodErrMsg']) ? $_SESSION['bloodErrMsg'] : ""; ?>
                                        </tr>

                                        <tr>
                                            <th><label for="religion">Religion:</label></th>
                                                <td>
                                                    <select name="religions" id="religion">
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Others">Others</option>
                                                    
                                                  </select>
                                                </td>
                                                <?php echo isset($_SESSION['religionsErrMsg']) ? $_SESSION['religionsErrMsg'] : ""; ?>
                                        </tr>
                                          
                                          
                                          
                                    </table>          
                            
                                 
                                
                            </fieldset>    
                        </td>
                        <td>
                            <fieldset>
                                <legend>Contact Information</legend>
                                <table>
                                   <tr>
                                    <th><label for="email">Email:</label></th>
                                    <td><input type="email" id="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ""; ?>"></td>
                                    <?php echo isset($_SESSION['emailErrMsg']) ? $_SESSION['emailErrMsg'] : ""; ?>
                                   </tr>
                                   <tr>
                                    <th><label for="phone">Phone/Mobile:</label></th>
                                    <td><input type="text" id="phone" name="phone" value="<?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : ""; ?>"></td>
                                    <?php echo isset($_SESSION['phoneErrMsg']) ? $_SESSION['phoneErrMsg'] : ""; ?>
                                   </tr>
                                   <tr>
                                    <th><label for="website">Website:</label></th>
                                    <td><input type="text" id="website" name="website" value="<?php echo isset($_SESSION['website']) ? $_SESSION['website'] : ""; ?>"></td>
                                    <?php echo isset($_SESSION['websiteErrMsg']) ? $_SESSION['websiteErrMsg'] : ""; ?>
                                   </tr>
                                   <tr>
                                    <th>Address:</th>
                                    
                                    <td>
                                        <table>
                                            <tr>
                                                <fieldset>
                                                
                                                    <legend>Present Addrress:</legend>
                                                
                                                <select name="country" id="country">
                                                    <option value="Bangladesh">Bangladesh</option>
                                                
                                                  </select>
                                                 
                                                  
                                                  <select name="city" id="city">
                                                      <option value="Dhaka">Dhaka</option>
                                                      
                                                      
                                                    </select>
                                                   
                                                    <br>
                                                    <br>
                                                    <textarea id="road" name="road" rows="4" cols="50" placeholder="Road/Street/City" value="<?php echo isset($_SESSION['road']) ? $_SESSION['road'] : ""; ?>"></textarea>
                                                    <?php echo isset($_SESSION['roadErrMsg']) ? $_SESSION['roadErrMsg'] : ""; ?>
                                                    <br>
                                                    <input type="text" id="postcode" name="postcode" placeholder="Post Code" value="<?php echo isset($_SESSION['postcode']) ? $_SESSION['postcode'] : ""; ?>"></td>
                                                    <?php echo isset($_SESSION['postcodeErrMsg']) ? $_SESSION['postcodeErrMsg'] : ""; ?>
                                                </fieldset>
                                            </tr>
                                        </table>
                                        
                                        
                                    </td>
                                    
                                   </tr>  
                                 </table>
                               </fieldset>
                               
                        </td>
    
                        <td>
                            <fieldset>
                                <legend>Account Information</legend>
                            
                                    <table>
                                        <tr>
                                            <th><label for="username">Username:</label></th>
                                            <td><input type="text" id="username" name="username" value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?>"></td><br>
                                            <?php echo isset($_SESSION['usernameErrMsg']) ? $_SESSION['usernameErrMsg'] : ""; ?>
                                          </tr>
                                          <tr>
                                            <th><label for="password">Password:</label></th>
                                            <td> <input type="password" id="password" name="password" value="<?php echo isset($_SESSION['password']) ? $_SESSION['password'] : ""; ?>"><br></td>
                                            <?php echo isset($_SESSION['passwordErrMsg']) ? $_SESSION['passwordErrMsg'] : ""; ?>
                                            
                                           
                                          </tr>
                                          
                                          <tr>
                                            <th><label for="cpassword">Confirm Password:</label></th>
                                            <td><input type="password" id="cpassword" name="cpassword" value="<?php echo isset($_SESSION['cpassword']) ? $_SESSION['cpassword'] : ""; ?>"></td>
                                            <?php echo isset($_SESSION['cpasswordErrMsg']) ? $_SESSION['cpasswordErrMsg'] : ""; ?>
                                            
                                          </tr>
                                          
                                          
                                          
                                    </table>          
                            
                                 
                                
                            </fieldset>
                            <br>
                            <button type="submit">Register</button>
                               
                            
                            
                        </td>


                        
                       
                    </tr>
                    
                </table>
               
            </td>
            
        </tr>
    </table>
        
</div>
    
</form>   

    
    
    







<!-- <table>
    <tr>
    <td>
        <table>
            <tr>
                <td>Table 1</td>
            </tr>
        </table>
    </td>
    <td><table><tr><td>Table 2>/td></tr></table>
    </td>
    </tr>
</table> -->

</body>
</html>