<?php


/**
 * Keep the code clean and add comment when needed
 * Use placeholder content/image if needed  
 * https://www.lipsum.com/
 * https://placehold.jp/en.html 
 */


/**
 * Primary Color: #30A9BC
 * Primary Lite Color: #D6EEF2
 * Text Color: #000000 / #ffffff
 * Footer Color: #000000
 */ 


/**
 * Use the below array to generate the menu
 */

$menus = [
'TEFL COURSES',	
'TECH ONLINE',
'INTERNSHIPS',
'TEFL JOBS',
'SCHOOL ELECTIVE',
'JOURNAL',
'ABOUT'
];


/**
 * Use below variable to generate heading
 * 
 */ 
$heading ="BEST FOR ENTRY LEVEL JOB";
$heading_1 = "120 hour Advanced TEFL Course International Standard 2114";
$price = "₹105.00";

/**
 * Use below values to genrate list item
 */

$body_menu = [
'What Will I Learn',
'Course Content',
'Course Benefits',
'Accreditation',
'Why Us',
'FAQs'
];
 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TEFL</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Write your code here -->
<!-- Topheader -->
<header class="topheader">
	<a href="#" class="logo"><i class="ri-home-line"></i><span>TELF INSTITUTE LONDON</span></a>
	
	<ul class="nav">
		<li><a href="#">GIVE US A CALL</a></li>
		<li><a href="#">+ 098 1223 1324</a></li>
		<li><a href="#">BROCHURE</a></li>
		<li><a href="#">CALL BACK</a></li>
		<li><a href="#">STUDENT LOGIN</a></li>
	</ul>

	<div class="main">
		<a href="#" class="globe"><i class="ri-global-line"></i></a>
		<a href="#" class="user"><i class="ri-user-line"></i></a>
		<a href="#" class="cart"><i class="ri-shopping-bag-line"></i></a>
		<a href="#" class="search"><i class="ri-search-line"></i></a>
		<div class="bx bx-menu" id="menu-icon"></div>
	</div>
</header>

<!-- SubNav -->
<?php include 'subnav.php' ?>

<!-- About Tab -->
<div class="container-fluid about-tab">
	<div class="row about">
  		<div class="col-4">
			<div class="personal">
			<h5 ><i class="ri-checkbox-circle-line"></i>Personal Job Coach </h5>
			<p>Live TELF job coaching seminars</p>
			</div>
		</div>
  		<div class="col-4">
			<h5> <i class="ri-checkbox-circle-line"></i>Global Recognition</h5>
			<p>Earn ne of the most trusted cetificates in the world</p>
		</div>
  		<div class="col-4">
			<h5> <i class="ri-checkbox-circle-line"></i>TEFL jobs board Membership</h5>
			<p>Lifetime access to our TEFL jobs platform</p>
		</div>
	</div>
</div>
<!-- Heading -->
<section class="services">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
  		<div class="col-lg-5 section">
			<span style="letter-spacing: 7px;"><?php echo $heading ?></span>
			<h3><?php echo $heading_1 ?></h3>
			<p style="font-size: 1.6rem;font-weight:700;"><?php echo $price ?>  was <span style="font-size: 1rem;text-decoration: line-through;"> ₹409.00</span> </p>
			
			<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit ab modi a necessitatibus alias rem est, assumenda laboriosam recusandae officia, odio ipsam minus saepe consequatur deserunt, perferendis quo quia impedit eveniet velit magnam earum tempora labore blanditiis. Maxime quas quos maiores illum enim, rem provident odit nam voluptatem iste voluptate?</p>
		
			<button type="button" class="btn btn-dark">ENROLL NOW</button>
			<button type="button" class="btn">ASK US A QUESTION</button>
			<hr>
		</div>
  		<div class="col-lg-7">
		  <img src="https://placehold.jp/320x420.png">
		  </div>
	</div>
	</div>
	</div>
</div>
</section>

<section class="learning">
<div class="container-fluid">
	<div class="row">
  		<div class="col-6">
			<ul class="list">
			<?php foreach ($body_menu as $body) 
    		{
				echo '<li>'.$body.'<i class="ri-arrow-right-line"></i></li> <hr>';
		
    		}
    		?>
				<!-- <li>What Will I Learn <i class="ri-arrow-right-line"></i></li>
				<hr>
				<li>Course Content <i class="ri-arrow-right-line"></i></li>
				<hr>
				<li>Course Benefits <i class="ri-arrow-right-line"></i></li>
				<hr>
				<li>Accreditation <i class="ri-arrow-right-line"></i></li>
				<hr>
				<li>Why Us? <i class="ri-arrow-right-line"></i></li>
				<hr>
				<li>FAQs <i class="ri-arrow-right-line"></i></li> -->
			</ul>
		</div>
  		<div class="col-6 list2">
		  <h1>What will I learn</h1><br>
		  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure odio dicta rerum et laudantium dolores fuga expedita eaque perspiciatis magni, qui eveniet esse ullam commodi ipsum blanditiis, in eos natus! Facilis quae tenetur veritatis sint blanditiis odio reiciendis, nobis fugit nam voluptas quia at iure. Voluptas dolores veniam adipisci quibusdam.</p>
		</div>
	</div>
</div>
</section>
<hr style="border-style:dotted;">

<div class="container-fluid learning2">
	<div class="row">
		<div class="col-6">
			<div class="english">
			<h1>ENGLISH LEVEL TEST</h1><br>
			<p style="color: #000000;">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>

			<button type="button" class="btn btn-dark" style="font-size:0.7rem;">TAKE THE TEST</button>
			</div>
		</div>
		<div class="col-6">
			<div class="best-for">
			<h3>Best for</h3><br>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, ab.</p>
			<ul class="list3">
				<li><i class="ri-arrow-right-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing.</li>
				<li><i class="ri-arrow-right-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, ut?</li>
				<li><i class="ri-arrow-right-line"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi officia, quae distinctio exercitationem dignissimos quisquam?</li>
				<li><i class="ri-arrow-right-line"></i>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Inventore, nam!</li>
			</ul>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid learning3">
	<div class="row">
		<div class="col-6">
			<div class="flexible">
			<h3>Flexible and Engaging</h3><br>
			<p style="color: #000000;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas esse unde accusantium itaque ut quidem mollitia doloribus, numquam illum optio distinctio inventore aliquid consequuntur saepe quos corrupti minus, harum dolorem!</p>
			</div>
		</div>
		<div class="col-6">
			<div class="easy-employer">
			<h3>Easy employer Verification</h3><br>
			<p style="color: #000000;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit nam iure saepe atque, possimus consectetur at? Labore natus necessitatibus incidunt, officia obcaecati itaque maiores? Cupiditate tempore reprehenderit ducimus maiores molestiae!</p>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid learning4">
	<div class="row">
		<div class="col-6">
			<div class="competitve-salary">
			<h3>Competitve salary,secure employement</h3><br>
			<p style="color: #000000;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam beatae pariatur fuga dignissimos quod optio corrupti natus voluptates dicta, at aperiam illo magni itaque perspiciatis enim architecto exercitationem nemo eius officiis error odio placeat! Magnam eius molestias esse eveniet repudiandae consectetur cupiditate deleniti impedit, a numquam consequatur architecto, enim iusto!</p>
			</div>
		</div>
		<div class="col-6">
			<div class="check">
			<ul>
				<li><i class="ri-checkbox-circle-line"></i>Online TELF course</li>
				<li><i class="ri-checkbox-circle-line"></i>100% Online,available 24/7</li>
				<li><i class="ri-checkbox-circle-line"></i>97% pass rate</li>
				<li><i class="ri-checkbox-circle-line"></i>Risk Free Guarantee</li>
			</ul>
			</div>
		</div>
	</div>
</div>

<hr style="border-style:dotted;">

<!-- Student Review -->
<section class="verified-student-review">
	<div class="container">
		<div class="row">
			<div class="col-6">
			<img src="https://placehold.jp/250x250.png">
			</div>
			<div class="col-6">
				<h4>Verified Student Review</h4>
				<div class="reviews-average">
                    <div class="rating-div">
					<i class="ri-star-fill"></i>
					<i class="ri-star-fill"></i>
					<i class="ri-star-fill"></i>
					<i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i> &nbsp; (4.9)
                                
                    </div>
                    <div class="total-count-text">Out of 1570 global reviews</div>
                </div>
				<div class="people-review">
					<h4 style="padding-top: 14px;">Ide m.</h4>
					<div class="reviews-average">
                    <div class="rating-div">
					<i class="ri-star-fill"></i>
					<i class="ri-star-fill"></i>
					<i class="ri-star-fill"></i>
					<i class="ri-star-fill"></i>
                    <i class="ri-star-half-fill"></i>
                    </div>
					<p><i style="color: black;">5 days ago</i></p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, perspiciatis exercitationem dicta placeat quisquam quaerat quia facere, aliquam consequatur, neque eum nesciunt. Veritatis praesentium commodi doloribus perspiciatis at fugiat dolorum, qui exercitationem vel numquam accusantium impedit deserunt error sed asperiores pariatur necessitatibus molestiae expedita. Rerum, ad. Modi, nihil! Quidem, debitis.</p>
				</div>
				<div class="verified-student-reviews-section__review-summary">
                    <div class="review-status">
                    	<div class="progress-text">5 Star</div>
                            <div class="progress">
                                <div class="progress-bar" percent="94"></div>
                            </div>
                            <div class="progress-value">94%</div>
					</div>
                    <div class="review-status">
                        <div class="progress-text">4 Star</div>
                            <div class="progress">
                                <div class="progress-bar" percent="4"></div>
                            </div>
                            <div class="progress-value">4%</div>
                    </div>
                    <div class="review-status">
                        <div class="progress-text">3 Star</div>
                            <div class="progress">
                                <div class="progress-bar" percent="1"></div>
                            </div>
                            	<div class="progress-value">1%</div>
                    </div>
                    <div class="review-status">
                        <div class="progress-text">2 Star</div>
                            <div class="progress">
                                <div class="progress-bar" percent="0"></div>
                            </div>
                            <div class="progress-value">0%</div>
                    </div>
                    <div class="review-status">
                        <div class="progress-text">1 Star</div>
                            <div class="progress">
                            	<div class="progress-bar" percent="1"></div>
                            </div>
                            <div class="progress-value">1%</div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
</section>

<!-- Meet-your-Instructor -->
<section class="meet-your-instructor">
	<div class="container">
	<div class="Mentorship">
		<p>DEDICATED MENTORSHIP</p>
		<h1>Meet Your Instructor</h1>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam illum, aliquam dolorum eos dolore voluptate fuga, pariatur in quibusdam quos eligendi quis labore necessitatibus nam! Odit dolore eos consequatur est?</p>
	</div>
<div class="row">
	<div class="col-md-12">
		<div class="row">
	<div class="col-md-3">
		<div class="container">
		<img src="https://placehold.jp/150x150.png">
		<div class="container">
    		<h5>Luke</h5>
    		<p style="color: #000000;">Academic Assessor</p>
  		</div>
		</div>
    </div>
    <div class="col-md-3">
	<div class="container">
		<img src="https://placehold.jp/150x150.png">
		<div class="container">
    		<h5>Rachel</h5>
    		<p style="color: #000000;">Academic Assessor</p>
  		</div>
		</div>
    </div>
    <div class="col-md-3">
	<div class="container">
		<img src="https://placehold.jp/150x150.png">
		<div class="container">
    		<h5>Sian</h5>
    		<p style="color: #000000;">Academic Assessor</p>
  		</div>
		</div>
    </div>
    <div class="col-md-3">
	<div class="container">
		<img src="https://placehold.jp/150x150.png">
		<div class="container">
    		<h5>Jacob</h5>
    		<p style="color: #000000;">Academic Assessor</p>
  		</div>
		</div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>

<div class="container start-teach">
	<h3>Start teaching in as little as four week.Discover how much you can earn <button type="button" class="btn btn-light enrol">ENROL NOW</button></h3>
	
</div>

<section class="certificates">
	<div class="container certificate">
		<div class="row">
			<div class="col-lg-6">
		<div class="container img1">
			<img src="https://placehold.jp/240x240.png"><br>
			<button class="btn btn-dark preview" type="button">PREVIEW CERTIFICATE</button>
			<p>Employee Verification</p>
		</div>
		</div>
		<div class="col-lg-6">
		<div class="container img2">
			<img src="https://placehold.jp/240x240.png"><br>
			<button class="btn btn-dark preview" type="button">REGISTER NOW</button>
			<p>Support Center</p>
		</div>
		</div>
		</div>
	</div>
</section>

<!-- footer -->
<?php include 'footer.php' ?>



	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
	<script src="global.js?v=>?php echo time(); ?>"></script>

	
</body>
</html>