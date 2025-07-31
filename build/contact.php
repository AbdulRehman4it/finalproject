
<?php require_once "includes/header.php"; ?>
	
  
	<!-- <div class="about-section section-padding admission-section">
		<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Our Address</strong></h4>
                    <?php echo get_school_address(); ?>
                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Nerashte+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
                </div>
               <div class="col-md-6">
                   <form action="" method="post">
                       <div class="form-group">
                           <label for="">Name</label>
                           <input type="text" name="Your name" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Email</label>
                           <input type="text" name="Your email" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="">Message</label>
                           <textarea name="Your message" id="" cols="30" rows="10" class="form-control"></textarea>
                       </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-success" name="contact-form" value="Send">
                       </div>
                   </form>
               </div>
            </div>
        </div>
    </div>  -->


    <section class="lg:py-20 py-10 xl:px-20 lg:px-10 px-5">

    <div class="flex lg:flex-row flex-col items-center xl:pt-20 pt-10 ">
            
        <div class="space-y-4 lg:w-1/2 w-full">
            <h1 class="text-4xl font-semibold">Contact</h1> 
            <p class="text-black text-lg "><i class="fa-solid fa-location-dot"></i>&nbsp; Lahore, Pakistan</p>
            <p class="text-black text-lg "><i class="fa-solid fa-envelope"></i>&nbsp; learninghub@gmail.com</p>
            <p class="text-black text-lg "><i class="fa-solid fa-phone"></i>&nbsp; 0562929978</p>
            <p class="text-black text-lg "><i class="fa-solid fa-clock"></i>&nbsp; Mon - Fri 8:00 AM to 5:00 PM</p>
        </div>

        <div class="lg:w-1/2 w-full">
             <form action="your-server-endpoint" method="POST" class="space-y-4">
      <div>
        <input type="text" name="name" placeholder="Your Name" required 
               class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black">
      </div>
      <div>
        <input type="email" name="email" placeholder="Your Email" required 
               class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black">
      </div>
      <div>
        <input type="text" name="subject" placeholder="Subject" required 
               class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black">
      </div>
      <div>
        <textarea name="message" rows="5" placeholder="Your Message" required 
                  class="w-full px-4 py-4 border border-black rounded-md focus:outline-none focus:ring-1 focus:ring-black"></textarea>
      </div>
      <button type="submit" 
              class="w-full bg-black hover:bg-white border border-black text-white py-3 rounded-sm hover:text-black transition duration-300">
        Send Message
      </button>
    </form>
        </div>
    </div>
</section>

<?php require_once "includes/footer.php"; ?>