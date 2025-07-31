<?php require_once "includes/header.php"; ?> 

<?php
require_once "includes/db.php";

// Show error messages while developing
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Get course ID from URL
if (!isset($_GET['id'])) {
    die("Course ID is missing.");
}

$id = (int) $_GET['id'];
$query = "SELECT * FROM courses WHERE id = $id";
$result = mysqli_query($conn, $query);

if (!$result || mysqli_num_rows($result) === 0) {
    die("Course not found.");
}

$course = mysqli_fetch_assoc($result);
?>


<!-- parralex  -->
   <section class="h-96 bg-fixed bg-center bg-no-repeat bg-cover" style="background-image: url('./assets/images/gamebanner.webp')">
  <div class="h-96 flex items-center justify-center bg-black bg-opacity-80">
    <h1 class="md:text-4xl text-2xl font-bold text-white"><?= htmlspecialchars($course['title']) ?></h1>
  </div>
</section>

<!-- included section  -->
<section class="xl:py-20 py-10 xl:px-20 lg:px-10 px-5">
    <div class="flex flex-col lg:flex-row xl:gap-20 gap-10">
        <div class="lg:w-2/3 w-full">
            <img src="./assets/images/game.jpeg" class="rounded-2xl w-full" alt="">
        </div>
        <div class="lg:w-1/3 w-full">
            <div>
                 <h1 class="text-black xl:text-4xl md:text-3xl text-2xl font-medium">This Course Include:</h1>
                 <div class="pt-4">
                <p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-video text-black"></i> &nbsp; <?= htmlspecialchars($course['hours_video']) ?> hours videos</p>
<p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-newspaper text-black"></i> &nbsp; <?= htmlspecialchars($course['articles']) ?> articles</p>
<p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-cloud-arrow-down text-black"></i> &nbsp; <?= htmlspecialchars($course['downloadable_resources']) ?> downloadable resources</p>
<p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-infinity text-black"></i> &nbsp; <?= htmlspecialchars($course['full_lifetime_access']) ?></p>
<p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-mobile-screen-button text-black"></i> &nbsp; <?= htmlspecialchars($course['access_device']) ?></p>
<p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-paperclip text-black"></i> &nbsp; <?= htmlspecialchars($course['assignments']) ?></p>
<p class="xl:text-lg text-base pt-4 text-[#666666]"><i class="fa-solid fa-trophy text-black"></i> &nbsp; <?= htmlspecialchars($course['certificate']) ?></p>

                 </div>

                  <div class="pt-10">
          <a href="">
      <button class="bg-black py-2 px-6 text-white hover:bg-white hover:text-black border border-black">Enroll Now</button>
      </a>
    </div>
            </div>
        </div>
    </div>
</section>

<!-- courses  -->
<section class="xl:py-20 py-10 xl:px-20 lg:px-10 px-5 pb-4">
    <div class="lg:w-3/5 w-full">
    <div>
        <h1 class="text-black xl:text-5xl md:text-4xl text-2xl font-semibold pb-2">Game Development Course
</h1>
<span class="fa fa-star checked text-orange-500"></span>
<span class="fa fa-star checked text-orange-500"></span>
<span class="fa fa-star checked text-orange-500"></span>
<span class="fa fa-star text-orange-500"></span>
<span class="fa fa-star"></span>
<p class="2xl:text-lg text-base pt-4 text-[#666666] xl:leading-7 leading-6">Game Development is the art of creating games and describes the design, development and release of a game. It may involve concept generation, design, build, test and release. While you create a game, it is important to think about the game mechanics, rewards, player engagement and level design.</p>
    </div>

    <div class="pt-10">
        <h1 class="text-black xl:text-4xl md:text-3xl text-2xl font-semibold">Instructor</h1>
        <div class="flex items-center gap-4 pt-6">
            <img src="./assets/images/instractor.png" class="w-16" alt="">
            <div>
               <h2 class="text-black 2xl:text-xl text-lg font-semibold"><?= htmlspecialchars($course['instructor_name']) ?></h2>
<p class="text-base text-[#666666]"><?= htmlspecialchars($course['instructor_position']) ?></p>

            </div>
        </div>
    </div>
    <div class="pt-5">
    <hr>
    </div>
    </div>
</section>


<!-- courses overview  -->
<section class="xl:pb-20 pb-10 xl:px-20 lg:px-10 px-5">
    <div class="lg:w-3/5 w-full">
    <div>
        <h1 class="text-black xl:text-4xl md:text-3xl text-2xl font-semibold">Course Overview</h1>
    <p class="2xl:text-lg text-base pt-4 text-[#666666] xl:leading-7 leading-6">
    <?= nl2br(htmlspecialchars($course['course_overview'])) ?>
</p>   
    </div>
    <div class="py-6">
    <hr>
    </div>
     <div>
                 <h1 class="text-black xl:text-4xl md:text-3xl text-2xl font-medium">What You Will Learn In This Course</h1>
                 <div class="pt-4">
                <?php
$learn_items = explode("\n", $course['what_you_learn']);
foreach ($learn_items as $item):
?>
    <p class="xl:text-lg text-base pt-4 text-[#666666]">
        <i class="far fa-check-circle text-black"></i> &nbsp; <?= htmlspecialchars($item) ?>
    </p>
<?php endforeach; ?>
                 
                 </div>
            </div>
    </div>
</section>


<?php require_once "includes/footer.php"; ?>