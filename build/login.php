<?php require_once "includes/header.php"; ?>

    
    <?php
        // if(is_user_logged_in()) {
        //     header("Location: index.php");
        // }
    ?>
  
	<!-- <div class="about-section section-padding admission-section">
		<div class="container">
            <div class="row">
               <div class="col-md-4 col-md-offset-4">
                <?php $login_error = user_login(); ?>
                   <h4><strong>Log in</strong></h4>
                   <?php
                    if(!empty($login_error)) {
                      echo "<h3 class='bg-danger'>{$login_error}</h3>";
                    }
                   ?>
                   <form action="" method="post">
                       <div class="form-group">
                           <label for="">Username</label>
                            <input type="email" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                                <label for="">Password</label>
                                 <input type="password" class="form-control" name="user_password">
                             </div>
                       <div class="form-group">
                            <label for="">User Role</label>
                           <select name="user_role" id="" class="form-control">
                               <option value="">Select your role</option>
                               <option value="administrator">Administrator</option>
                               <option value="teacher">Teacher</option>
                               <option value="student">Student</option>
                           </select>
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-success" name="user_login" value="Log in">
                       </div>
                   </form>
               </div>
            </div>
        </div>
    </div> -->


    <section class="2xl:px-16 xl:px-16 2xl:py-20 xl:py-20 lg:px-10 lg:py-16">
        <div class="pop flex flex-col lg:flex-row justify-between items-center 2xl:gap-24 lg:gap-10 bg-white md:rounded-3xl 2xl:px-32 md:px-16 w-full">
            <div class="2xl:py-56 xl:py-36 lg:w-1/2 w-full pt-10">
              <!-- <img src="assets/img/blacklogo.png" class="dark:block hidden 2xl:h-[322px] xl:h-[222px] lg:h-[122px] lg:w-[332px] xl:w-[532px] 2xl:w-[732px]" alt="">
              <img src="assets/img/risslogo.png.png" class="dark:hidden block 2xl:h-[322px] xl:h-[222px] lg:h-[122px] lg:w-[332px] xl:w-[532px] 2xl:w-[732px]" alt=""> -->
                <p class=" xl:text-2xl md:text-xl text-lg font-semibold 2xl:pl-20 text-center lg:text-left text-black px-5">Create Your Account and Unlock Exciting Features</p>
            </div>
            <div class="lg:w-1/2 w-full px-5 lg:px-0">
              <?php $login_error = user_login(); ?>
                   <!-- <h4><strong>Log in</strong></h4> -->
                   <?php
                    if(!empty($login_error)) {
                      echo "<h3 class='bg-danger'>{$login_error}</h3>";
                    }
                   ?>
                <form action="" method="post" class="lg:py-20 py-10">
                    <div class="bg-white shadow-xl border border-black rounded-3xl 2xl:px-10 py-10 md:px-5 md:py-20">
                        <div class="text-center pt-5 lg:pt-0 text-black">
                            <h2 class="2xl:text-4xl md:text-lg font-bold">Welcome Back!</h2>
                            <p class="2xl:text-sm md:text-xs font-medium 2xl:pt-2 md pt-1 text-xs text-black">Don’t have an account? <a href="signup.php"><span class="text-sm font-bold hover:underline">Sign Up</span></a></p>
                        </div>
                        <div class="space-y-4 2xl:pt-20 md:pt-10 pt-5 px-2 md:px-0">
                            
                              <div class="space-y-2">
                                <label class=" mb-2 text-sm font-semibold text-black">
                                  Email
                                </label>
                                <input class="focus:bg-white focus:text-black border border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full 2xl:px-3 2xl:py-4 md:px-2 md:py-2 px-1 py-2" placeholder="Enter your email" id="name" type="text" name="username">
                              </div>
                             
            <!-- Password Field with Show/Hide -->
            <div class="space-y-2" x-data="{ show: false }">
              <label class="mb-2 text-sm font-semibold text-black">Password</label>
              <div class="relative">
                  <input :type="show ? 'text' : 'password'" class="focus:text-black border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full 2xl:px-3 2xl:py-4 md:px-2 md:py-2 px-1 py-2 pr-10" placeholder="Enter your password" id="password" name="user_password">
                  <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 flex items-center px-3">
                      <i :class="show ? 'fa fa-eye' : 'fa fa-eye-slash'" class="text-gray-500 dark:text-gray-600"></i>
                  </button>
              </div>
          </div>

          <div class="flex flex-col">
                            <label for="" class=" mb-2 text-sm font-semibold text-black">User Role</label>
                           <select name="user_role" id="" class="focus:bg-white focus:text-black border border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full 2xl:px-3 2xl:py-4 md:px-2 md:py-2 px-1 py-2">
                               <option value="">Select your role</option>
                               <option value="administrator">Administrator</option>
                               <option value="teacher">Teacher</option>
                               <option value="student">Student</option>
                           </select>
                       </div>
                              <div>
                                <input type="submit" class="text-base font-semibold 2xl:py-3 md:py-1 py-1 bg-white hover:bg-black text-black w-full hover:text-white border rounded-lg mt-5" name="user_login" value="Log in">
                                <!-- <a href="dashboard.html">
                              <button class="text-base font-semibold 2xl:py-3 md:py-1 py-1 bg-white hover:bg-black text-black w-full hover:text-white border rounded-lg mt-5">Log in</button>
                            </a> -->
                            </div>
                            <div class="flex items-center gap-3">
                              <input class="-mt-6 md:-mt-0 w-5 h-5 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 bg-gray-700 border-gray-600 focus:ring-primary-600 ring-offset-gray-800 accent-black" type="checkbox" aria-describedby="terms" id="terms">
                              <p class="md:text-xs text-[8px] pb-5 md:pb-0 text-[#666666]">By clicking Create account, I agree that I have read and accepted the <a href="" class="font-semibold hover:underline text-black">Terms of Use</a> and <a href="" class="font-semibold text-black hover:underline">Privacy Policy.</a> </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
