<?php require_once "includes/header.php"; ?> 
<!-- <div class="home-banner section-padding text-center text-light home-banner-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="display-table banner-min-height">
						<div class="display-table-cell">
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-section section-padding">
	<div class="container">
	<div class="row">
	<div class="col-md-6">
	<div class="single-about">
						<CENTER><h3>HISTORY OF THE SCHOOL</h3></CENTER>
						<img src="assets/images/banner-1.jpg" alt="">
						<?php
						$query = "SELECT * FROM page_contents WHERE page_name='about_page'";
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_assoc($result);
						$page_text = $row['page_text'];
						$first_para = substr($page_text, strpos($page_text, "<p"), strpos($page_text, "</p>")+4);
						echo $first_para;
						?>
						<a href="about.php" class="btn btn-success">Read more</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-about">
						<center><h3>TEACHERS</h3></center>
						<img src="assets/images/banner-3.jpg" alt="">
						<?php
						$query = "SELECT * FROM page_contents WHERE page_name='teacher_page'";  
						$result = mysqli_query($conn, $query);
						$row = mysqli_fetch_assoc($result);
					
						?>
						<br />
						<br />
						<p><a href="teachers.php" class="btn btn-success">View Teachers</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="about-section section-padding theme-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="single-about single-notice">
						<h3>Announcements</h3>
						<?php 
							$query = "SELECT * FROM notice ORDER BY id DESC LIMIT 5";
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($result)) {
								$notice_id = $row['id'];
								$notice_title = $row['notice_title'];
								echo "<p><i class='fa fa-hand-o-right'><a href='notice.php?id=$notice_id'>$notice_title</a></i></p>";
							}
						?>
						
						<a href="notice.php" class="btn btn-success">View more</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-about single-notice">
						<h3>Events</h3>
						<?php 
							$query = "SELECT * FROM event ORDER BY id DESC LIMIT 5";
							$result = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($result)) {
								$event_id = $row['id'];
								$event_title = $row['event_title'];
								echo "<p><i class='fa fa-hand-o-right'><a href='event.php?id=$event_id'>$event_title</a></i></p>";
							}
						?>
						<a href="event.php" class="btn btn-success">View more</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
<center>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>

	<div class="section-padding section-count">
	</center>
		<div class="container">
			<div class="row">
				<div class="col-md-4">				
				
</div>
		</div>
	</div> -->



	
<section class="h-96 bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('./assets/images/banner\ img.webp');">
  <div class="h-96 flex items-center justify-center bg-black bg-opacity-80">
    <h1 class="md:text-4xl text-2xl font-bold text-white">Learning Hub</h1>
  </div>
</section>
<!-- hero section  -->
<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10">
  <div class="flex justify-center text-center">

  <div class="lg:w-3/4 w-full">
    <h1 class="text-black xl:text-6xl lg:text-5xl text-3xl font-medium">Education from Home</h1>
    <p class="xl:text-lg text-base pt-4 text-[#666666]">Boost up your skills with a new way of learning .Best educational plateform that is providing best services to you anywhere anytime.we aim to empower students to change the world with unlock his skills.</p>

    <div class="pt-10">
      <a href="signup.php">
      <button class="bg-black py-2 px-6 text-white hover:bg-white hover:text-black border border-black">Sign Up</button>
      </a>
    </div>
  </div>
      
  </div>
</section>

<!-- featurs  -->

<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10">
  <div class="text-center">
    <h1 class="text-black xl:text-4xl md:text-3xl text-2xl font-medium">Awesome Features</h1>
    <p class="xl:text-lg text-base pt-4 text-[#666666]">the main feature that we are providing to our users</p>
  </div>
  <div class="flex lg:flex-row flex-col justify-center gap-5 lg:pt-12 pt-8">
    <div class="border border-black rounded-xl py-4 px-8">
      <h1 class="text-black lg:text-2xl text-lg font-semibold"> <i class="fas fa-graduation-cap"></i> Scholership facility</h1>
      <p class="2xl:text-base text-sm pt-2 text-[#666666]">We are providing the facility of Scholership to our student for features</p>
    </div>

     <div class="border border-black rounded-xl py-4 px-8">
      <h1 class="text-black lg:text-2xl text-lg font-semibold"> <i class="fa-solid fa-certificate"></i> Online Courses</h1>
      <p class="2xl:text-base text-sm pt-2 text-[#666666]">We are providing the facility of online courses to our student free</p>
    </div>

     <div class="border border-black rounded-xl py-4 px-8">
      <h1 class="text-black lg:text-2xl text-lg font-semibold"> <i class="fas fa-award"></i> Provide Certification</h1>
      <p class="2xl:text-base text-sm pt-2 text-[#666666]">We are providing the facility of certification to our student for features</p>
    </div>
  </div>
</section>

<!-- why chooes us  -->
 
<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10">
  <div class="flex flex-col lg:flex-row justify-center items-center xl:gap-20 gap-10">
    <div class="lg:w-1/2 w-full">
      <img src="./assets/images/choose.jpg" class="w-full" alt="">
    </div>
    <div class="lg:w-1/2 w-full">
      <h1 class="text-black lg:text-4xl text-2xl font-semibold">
        Why Choose Us?
      </h1>
      <p class="2xl:text-base text-sm pt-4 2xl:leading-10 leading-7 text-[#666666]">
        Education underpins all social progress. Our aim is to harness technology to make all education and skills training available to anyone, anywhere for free.We believe that free education, more than anything, has the power to break through boundaries and transform lives. <br>

Education underpins all social progress. Our aim is to harness technology to make all education and skills training available to anyone, anywhere for free.We believe that free education, more than anything, has the power to break through boundaries and transform lives.
      </p>

        <div class="pt-10">
          <a href="">
      <button class="bg-black py-2 px-6 text-white hover:bg-white hover:text-black border border-black">Learn More</button>
      </a>
    </div>
    </div>
  </div>
</section>


<!-- Teacher  -->

<section class="xl:px-20 lg:px-10 px-5 xl:py-20 py-10">
  <div>
    <h1 class="text-black lg:text-4xl text-2xl font-semibold">
        Our Expert Teacher
      </h1>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:pt-8 pt-5">
    
    <!-- Teacher Card 1 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="./assets/images/team1.png" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Ali Ahmad</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Digital Marketing</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
         5+ years in SEO & social media marketing.
        Helps brands grow through online strategies.
      </p>
    </div>

    <!-- Teacher Card 2 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="./assets/images/team3.png" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Shahmeer Ali</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Game Development</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
        8+ years of experience in Unity & Unreal Engine.
        Expert in creating interactive game worlds.
      </p>
    </div>

    <!-- Teacher Card 3 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="./assets/images/team2.png" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Maham Jabeen</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Graphic Desingning</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
        7+ years in creative design & branding.
        Pro in Photoshop, Illustrator & Figma.
      </p>
    </div>

    <!-- Teacher Card 4 -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <img src="./assets/images/team1.png" alt="" class="w-20 h-20 rounded-full mx-auto mb-4 border-4 border-white object-cover">
      <h3 class="2xl:text-xl text-lg font-semibold text-center group-hover:text-white">Ali Ahmad</h3>
      <p class="text-center text-[#666666] group-hover:text-[#666666]">Front End Development</p>
      <p class="mt-4 text-sm text-[#666666] group-hover:text-[#666666] text-center">
        6+ years building responsive UIs.
        Specialist in React, Tailwind, and Vue.
      </p>
    </div>

  </div>
</section>

<!-- testimonials  -->
<section class="xl:py-20 py-10 xl:px-20 lg:px-10 px-5">
  <h2 class="text-4xl font-bold text-center text-black mb-12">Testimonials</h2>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    
    <!-- Testimonial Card -->
    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "Learn2Earn Hub made me a confident frontend developer. The instructors are amazing and the content is very practical!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="./assets/images/team1.png" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-white">Mahmoud Mohamed</h4>
          <p class="text-sm text-gray-400 group-hover:text-[#666666]">Frontend Developer</p>
        </div>
      </div>
    </div>

    <!-- Repeat for other testimonials -->

    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "The graphic designing course helped me build a strong portfolio. Highly recommend for creative learners!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="./assets/images/team1.png" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-white">Sara Ahmed</h4>
          <p class="text-sm text-gray-400 group-hover:text-[#666666]">Graphic Designer</p>
        </div>
      </div>
    </div>

    <div class="bg-white p-6 rounded-lg shadow-md hover:bg-black transition duration-300 group">
      <p class="text-[#666666] group-hover:text-[#666666] mb-6 text-sm">
        "With Learn2Earn's digital marketing course, I grew my freelance career. Great mentorship and support!"
      </p>
      <div class="flex items-center space-x-4">
        <img src="./assets/images/team1.png" alt="User" class="w-14 h-14 rounded-full object-cover border-2 border-white">
        <div>
          <h4 class="text-lg font-semibold text-black group-hover:text-gray-300">Usman Raza</h4>
          <p class="text-sm text-gray-400 group-hover:text-gray-300">Digital Marketer</p>
        </div>
      </div>
    </div>

  </div>
</section>


<?php require_once "includes/footer.php"; ?>