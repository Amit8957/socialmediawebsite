                            <form  action="signup_save.php" method="post" autocomplete="on"> 
                                <h1> Create Account </h1> 
								<hr>
                                <p> 
                                    <label for="usernamesignup" class="uname" > Username</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder=" Enter Username" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" > Password </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder=" Enetr Capital,Small,Number,Symbol letters"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" > First Name </label>
                                    <input id="passwordsignup" name="firstname" required="required" type="text" placeholder=" Enter First Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" > Last Name </label>
                                    <input id="passwordsignup" name="lastname" required="required" type="text" placeholder=" Enter Last Name"/>
                                </p>
								<p> 
                                    <label for="passwordsignup" class="youpasswd" > Gender </label>
									<select id="passwordsignup"  name="gender">
										<option></option>
										<option>Male</option>
										<option>Female</option>
									</select>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already Have a Account 
									<a href="#tologin" class="to_register"> CLick here log in </a>
								</p>
                            </form>