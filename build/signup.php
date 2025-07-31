<?php require_once "includes/header.php"; ?>

  <section class="2xl:px-16 xl:px-16 2xl:py-20 xl:py-20 lg:px-10 lg:py-16">
        <div class="pop flex flex-col lg:flex-row justify-between items-center 2xl:gap-24 bg-white md:rounded-3xl 2xl:px-32 md:px-16 w-full">
            <div class="2xl:py-56 xl:py-36 lg:w-1/2 w-full pt-10">
              <!-- <img src="assets/img/blacklogo.png" class="dark:block hidden 2xl:h-[322px] xl:h-[222px] lg:h-[122px] lg:w-[332px] xl:w-[532px] 2xl:w-[732px]" alt="">
              <img src="assets/img/risslogo.png.png" class="dark:hidden block 2xl:h-[322px] xl:h-[222px] lg:h-[122px] lg:w-[332px] xl:w-[532px] 2xl:w-[732px]" alt=""> -->
                <p class="xl:text-2xl md:text-xl text-lg font-semibold 2xl:pl-20 text-center lg:text-left text-black px-5">Create Your Account and Unlock Exciting Features</p>
            </div>
            <div class="lg:w-1/2 w-full px-5 lg:px-0">

                <form action="" method="" class="md:py-20 py-10">
                    <div class="bg-white shadow-xl border border-black rounded-3xl 2xl:px-10 py-10 md:px-5 md:py-20">
                        <div class="text-center pt-5 lg:pt-0 text-black">
                            <h2 class="2xl:text-4xl md:text-lg font-bold">Join Us Today </h2>
                            <p class="2xl:text-sm md:text-xs font-medium 2xl:pt-2 md pt-1 text-xs text-black">Already have an account? <a href="login.php"><span class="text-sm font-bold hover:underline">Login</span></a></p>
                        </div>
                        <div class="space-y-4 2xl:pt-20 md:pt-10 pt-5 px-2 md:px-0">
                            
                            <div class="space-y-2">
                                <label class=" mb-2 text-sm font-semibold text-black">
                                  Name
                                </label>
                                <input class="focus:bg-white focus:text-black border border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full 2xl:px-3 2xl:py-4 md:px-2 md:py-2 px-1 py-2" placeholder="Enter your name" id="name" type="text">
                              </div>

                              <div class="space-y-2">
                                <label class=" mb-2 text-sm font-semibold text-black">
                                  Email
                                </label>
                                <input class="focus:bg-white focus:text-black border border-gray-200 text-gray-900 sm:text-sm rounded-lg block w-full 2xl:px-3 2xl:py-4 md:px-2 md:py-2 px-1 py-2" placeholder="Enter your email" id="name" type="text">
                              </div>
                             
            <!-- Password Field with Show/Hide -->
            <div class="space-y-2" x-data="{ show: false }">
              <label class="mb-2 text-sm font-semibold text-black">Password</label>
              <div class="relative">
                  <input :type="show ? 'text' : 'password'" class="focus:text-black dark:text-white border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full 2xl:px-3 2xl:py-4 md:px-2 md:py-2 px-1 py-2 pr-10" placeholder="Enter your password" id="password">
                  <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 flex items-center px-3">
                      <i :class="show ? 'fa fa-eye' : 'fa fa-eye-slash'" class="text-gray-500 dark:text-gray-600"></i>
                  </button>
              </div>
          </div>
                              <div>
                                <a href="dashboard.html">
                              <button class="text-base font-semibold 2xl:py-3 md:py-1 py-1 bg-white hover:bg-black text-black w-full hover:text-white border rounded-lg mt-5">Sign up</button>
                            </a>
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