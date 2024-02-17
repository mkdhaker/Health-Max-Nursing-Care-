<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Health Max Nursing Care</title>
    </head>
<body>
	
	   <div class="spinner" id="spinner"> </div>
    
<header>
    	
  <img src="logo-colour1.png" alt="Health Max Nursing Care Logo" id="logo">
  	<nav>
            <ul>
                <li><a href="index.php"class=active >Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
 </header>

    <section class="main-content">
    	
  <style>
  	
 .slideshow-container {
      max-width: 600px;
      position: relative;
      margin: auto;
      overflow: hidden;
    }

    .mySlides {
      display: none;
    }

    .dot {
      height: 5px;
      width: 5px;
      margin: 0 2px;
      background-color: transparent;
      border: 2px solid #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .custom-active {
      background-color: #717171;
    }

    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: 10px;
      padding: 10px;
      margin-top: -15px;
      color: white;
      font-weight: bold;
      font-size: 15px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
      user-select: none;
      background: transparent;
    }

    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }
    
    .btn {
    padding: 10px;
    background-color: #FF0000;
    color: white;
    border: none;
    border-radius: 15px;
    cursor: pointer;
    text-decoration: none;
    }
    
    
/* comments section */
  
        .comments-section {
            margin-top: 20px;
            border-top: 2px solid #ccc;
            border-bottom: 1px solid #ccc; /* Divider between main content and comments section */
            padding-top: 50px;
        }

.comments-heading {
    font-size: 25px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
    margin-top: -30px;
    opacity: 0;
    transform: translateY(50px);
            transition: opacity 0.9s ease, transform 0.9s ease;
}

.comments-heading.active {
    opacity: 1;
    transform: translateY(0);
}


        .comment {
            margin-bottom: 10px;
            padding-top: 0px; /* Adjust the top padding to reduce the height */
    padding-bottom: 0px; /* Adjust the bottom padding to reduce the height */
    padding-left: 10px; /* Keep the left padding unchanged */
    padding-right: 10px; /* Keep the right padding unchanged */
            background-color: #f9f9f5;
            border: 1px solid #ddd;
            border-radius: 20px;
            margin-left: 10px;
            margin-right: 10px;
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.9s ease, transform 0.9s ease;

        }
        
        .comment.active {
    opacity: 1;
    transform: translateY(0);
}

 
          .comment-box {
            margin-top: 5px; /* Add space above the comment box */
        }
        
        
        
        
        
           .health-blog-section {
    margin-top: 20px;
    border-top: 2px solid #ccc;
    border-bottom: 1px solid #ccc; /* Divider between main content and health blog section */
    padding-top: 50px;
}

.health-blog-heading {
    font-size: 25px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 30px;
    margin-top: -30px;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.health-blog-heading.active {
    opacity: 1;
    transform: translateY(0);
}

.blog-post {
    margin-bottom: 10px;
    padding-top: 0px; /* Adjust the top padding to reduce the height */
    padding-bottom: 0px; /* Adjust the bottom padding to reduce the height */
    padding-left: 10px; /* Keep the left padding unchanged */
    padding-right: 10px; /* Keep the right padding unchanged */
    background-color: #f9f9f5;
    border: 1px solid #ddd;
    border-radius: 20px;
    margin-left: 10px;
    margin-right: 10px;
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.9s ease, transform 0.9s ease;
}

.blog-post.active {
    opacity: 1;
    transform: translateY(0);
}

.blog-image-box {
    margin-top: 5px; /* Add space above the blog image */
}
        
  </style>
</head>
<body>

<div class="slideshow-container">
  <div class="mySlides">
    <img src="image1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="image2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <img src="image3.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
</div>

<script>
  let slideIndex = 1;

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");

    if (n > slides.length) {
      slideIndex = 1;
    }

    if (n < 1) {
      slideIndex = slides.length;
    }

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" custom-active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " custom-active";
  }

  function showNextSlide() {
    plusSlides(1);
    setTimeout(showNextSlide, 3000); // Change slide every 3 seconds
  }

  showSlides(slideIndex);
  showNextSlide();
  

// Show spinner when page starts loading
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("spinner").style.display = "block";
        });

        // Hide spinner when page finishes loading
        window.addEventListener("load", function() {
            document.getElementById("spinner").style.display = "none";
        });
       
       
       // animations for comments
       document.addEventListener("DOMContentLoaded", function() {
    var comments = document.querySelectorAll('.comment');

    function isInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function animateComments() {
        comments.forEach(function(comment) {
            if (isInViewport(comment)) {
                comment.classList.add('active');
            }
        });
    }

    animateComments();

    window.addEventListener('scroll', function() {
        animateComments();
    });
});


// animations for comment heading
document.addEventListener("DOMContentLoaded", function() {
    var commentsHeading = document.querySelector('.comments-heading');

    function isInViewport(element) {
        var rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function animateCommentsHeading() {
        if (isInViewport(commentsHeading)) {
            commentsHeading.classList.add('active');
        }
    }

    animateCommentsHeading();

    window.addEventListener('scroll', function() {
        animateCommentsHeading();
    });
});



// animation for blog section

// Function to check if an element is in the viewport
function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to handle scroll events
function handleScroll() {
    var healthBlogElements = document.querySelectorAll('.health-blog-section > *');
    healthBlogElements.forEach(function(element) {
        if (isInViewport(element)) {
            element.classList.add('active');
        }
    });

    // Remove the scroll event listener once all elements are animated
    if (document.querySelectorAll('.health-blog-section > *:not(.active)').length === 0) {
        window.removeEventListener('scroll', handleScroll);
    }
}

// Add scroll event listener to trigger animation
window.addEventListener('scroll', handleScroll);

</script>

</body>
          
<a href="login-signup.html" class="login-btn">Login / Sign Up</a> 


   <h2 style="color: 0000ff;">🏥HEALTH MAX NURSING CARE</h2>

<p>👋🏼 At Health Max Nursing Care, we extend a warm and compassionate welcome to you and your loved ones. 💕 Your well-being is at the heart of everything we do. ❤️ As a dedicated nursing care center, we strive to provide exceptional healthcare services tailored to your unique needs. 🙌🏼</p>

<p>👩🏽‍⚕️👨🏻‍⚕️ Our team of experienced and caring nurses is committed to delivering the highest quality of care with a focus on your comfort, recovery, and overall health. 🌟 Whether you’re seeking skilled nursing services, personalized treatment plans, or compassionate end-of-life care, we are here to support you every step of the way. 🤝🏼</p>

<p>👉🏼 Explore our website to learn more about the comprehensive nursing care services we offer. 🌐 Trust Health Max Nursing Care to be your reliable partner in health, where excellence meets empathy, and your journey to well-being begins. 🌈</p>
        
    
         <a href="login.html" class="login-btn">Login</a> 
        
     <a href="signup.html" class="login-btn">Sign Up</a>  

<h2 style="color: 0000ff;">Want to Start Your Carrier with Health Max Nursing Care - </h2> 

<h1 style="color:5c3317;">Go As - Nursing Officer Panel</h1> <a href="no-login-signup.html" class="btn">Nursing Officer</a>  
</body>
</section>




<section class="health-blog-section">
    <h2 class="health-blog-heading">Health Blogs</h2>

    <?php
// Function to get list of JSON files in a directory
function getJsonFiles($dir) {
    $files = glob($dir . '/*.json');
    return $files;
}

// Function to generate blog box HTML
function generateBlogBox($json_file) {
    $json_data = json_decode(file_get_contents($json_file), true);
    $title = $json_data['title'];
    $blogs = $json_data['blogs'];
    $date = $json_data['date'];
    
    // Limit title to two lines
    $title_lines = explode("\n", wordwrap($title, 30, "\n", true), 2);
    $title = $title_lines[0];
    if (count($title_lines) > 1) {
        $title .= '...';
    }

    // Limit blog content to two lines
    $blog_lines = explode("\n", wordwrap($blogs, 50, "\n", true), 2);
    $blogs = $blog_lines[0];
    if (count($blog_lines) > 1) {
        $blogs .= '...';
    }

    // Get the filename without extension
    $file_basename = pathinfo($json_file, PATHINFO_FILENAME);

    // Get all files with the same basename but different image extensions
    $health_blogs_dir = 'health_blogs';
    $image_files = glob($health_blogs_dir . '/' . $file_basename . '.*');

    // Use the first image file found or default image if none found
    if (!empty($image_files)) {
        $image_filename = $image_files[0];
    } else {
        // Default image if no image file is found
        $default_image = 'health_blogs/default.jpg'; // Replace with your default image filename and path
        $image_filename = file_exists($default_image) ? $default_image : '';
    }

    // Generate HTML for blog box
    $html = "<div class='blog-post'>";
    $html .= "<a href='blogs.php?title_id={$file_basename}' style='text-decoration: none; color: inherit;'>";
    $html .= "<img src='{$image_filename}' alt='{$title}' width='60' height='60' style='float: left; margin-right: 20px; margin-top: 20px;'>"; // Adjust width, height, and margin as needed
    $html .= "<h3 style='font-size: 16px;'>{$title}</h3>";
    $html .= "<p class='blog-content' style='font-size: 14px;'>{$blogs}</p>";
    $html .= "<p class='blog-date' style='font-size: 11px; color: grey;'>Date: {$date}</p>";
    $html .= "<div style='clear: both;'></div>"; // Clear the float after content
    $html .= "</a>";
    $html .= "</div>";

    return $html;
}

// Get list of JSON files in health_blogs directory
$health_blogs_dir = 'health_blogs';
$json_files = getJsonFiles($health_blogs_dir);

// Sort JSON files based on date in descending order
usort($json_files, function($a, $b) {
    $date_a = json_decode(file_get_contents($a), true)['date'];
    $date_b = json_decode(file_get_contents($b), true)['date'];
    return strtotime($date_b) - strtotime($date_a);
});

// Display blog posts
$posts_per_page = 3; // Change this to adjust number of posts per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($page - 1) * $posts_per_page;
$end_index = $start_index + $posts_per_page - 1;
$total_pages = ceil(count($json_files) / $posts_per_page);

for ($i = $start_index; $i <= $end_index && $i < count($json_files); $i++) {
    echo generateBlogBox($json_files[$i]);
}

// Display next button if there are more pages
if ($page < $total_pages) {
    $next_page = $page + 1;
    echo "<a href='?page={$next_page}' style='font-size: 14px; text-decoration: none;' >Show more..</a>";
}
?>

</section>



<section class="comments-section">
    <h2 class="comments-heading">Testimonials & Reviews</h2>

    <?php
    // Read the contents of the JSON file
    $json_data = file_get_contents('comments.json');

    // Decode the JSON data into an array
    $comments = json_decode($json_data, true);

    // Reverse the order of comments to fetch the last 3 comments first
    $comments = array_reverse($comments);

    // Initialize a counter for the number of displayed comments
    $displayed_comments = 0;

    // Check if there are comments to display
    if (!empty($comments)) {
        // Iterate over each comment and display it
        foreach ($comments as $comment) {
            // Check if the comment contains offensive words (you need to implement this part)
            if (checkForOffensiveWords($comment['comment'])) {
                continue; // Skip this comment
            }

            // Extract the data for each comment
            $user_username = $comment['user_username'];
            $comment_text = $comment['comment'];
            $timestamp = date('Y-m-d', strtotime($comment['timestamp'])); // Fetch only the date portion

            // Display the comment with user's name as heading, followed by comment and timestamp
            echo "<div class='comment'>";
            echo "<h3 style='color: blue; font-size:15px;'>$user_username</h3>";
            echo "<p style='font-size:14px;' class='comment-p'>$comment_text</p>";
            echo "<p class='comment-date' style='font-size: 11px; color: grey;'>Date: $timestamp</p>";
            echo "</div>";

            // Increment the counter for displayed comments
            $displayed_comments++;

            // Check if we have displayed 3 comments, if so, break the loop
            if ($displayed_comments >= 3) {
                break;
            }
        }
    } else {
        echo "<p>No comments found.</p>";
    }

    // Function to check for offensive words (you need to implement this part)
    // Function to check for offensive words (you need to implement this part)
// Function to check for offensive words
function checkForOffensiveWords($comment) {
    // List of common offensive words
    $offensive_words = array(
    'fuck', 'shit', 'bitch', 'asshole', 'dick', 'cunt', 'pussy', 'cock', 'suck', 'slut', 'whore', 'ass', 'faggot', 'nigger', 'retard', 'rape', 'bastard', 'cunt', 'damn', 'douchebag', 'fag', 'jerk', 'moron', 'perv', 'prick', 'scumbag', 'slut', 'twat', 'wanker', 'whore', 'chutiya', 'gaandu', 'madarchod', 'bhosdiwale', 'harami', 'behenchod', 'gandu', 'kutta', 'randi', 'randwa', 'lund', 'gand', 'ma ki chut', 'sala', 'bhosdike', 'chu', 'bhagwaan ke liye', 'maaki', 'teri maa ki', 'gandmasti', 'chakka', 'kinnar', 'hijra', 'laude', 'jhaant', 'gali', 'raandi', 'chakke', 'hawas', 'haramkhor', 'bhosadike', 'lundiya', 'maa ki aankh', 'maadarjaat', 'suvar', 'suvarnase', 'gandu', 'lavda', 'chinal', 'saala', 'chutiye', 'maaki', 'bhenchod', 'hawaldar', 'kuttiya', 'gandu', 'kameena', 'chamar', 'bhenchod', 'bhen ke lode', 'bhosdike', 'teri maa ki', 'gandmasti', 'bhosadike', 'laude', 'bapuji ki phad di', 'chinal', 'jhaant', 'randi rona', 'tharki', 'gandu sala', 'gand faad dunga', 'gandi naali ka keeda', 'kutte ki aulaad', 'haramzada', 'behen ka loda', 'madar chod', 'madarjaat', 'kuttiya', 'hijre ki aulad', 'hijra', 'hijde', 'chakka', 'chakke', 'khota', 'khota sikka', 'sali randi', 'randi ki aulaad', 'lauda', 'laude', 'maa ke lode', 'maa chod dunga', 'bhosdika', 'bhosadi', 'maa chuda', 'lund faad dunga', 'lulli', 'gand marwa dunga', 'gaandu', 'haraami', 'chakke chuda', 'behen ke takke', 'gaand mara', 'bhadwa', 'gandi naali ka keeda', 'chakka chuda', 'bhadve', 'bhagwaan ke liye chhod de', 'khota sikka', 'chamar chodu', 'chut ke baal', 'loda lassan', 'gand faad doonga', 'lund chus', 'lund choos', 'kutti', 'kutte', 'kutiya', 'bhosad', 'bhagwaan ke saath chhod de', 'laude lag gaye', 'lund khajoor', 'maa ki chut', 'randi khana', 'harami kutta'
);

        // Convert the comment to lowercase for case-insensitive comparison
        $comment_lower = strtolower($comment);

        // Check if any of the offensive words are present in the comment
        foreach ($offensive_words as $word) {
            if (strpos($comment_lower, $word) !== false) {
                // Offensive word found, return true
                return true;
            }
        }

        // No offensive words found, return false
        return false;
    }
    ?>

    <!-- "Show more" button -->
    <p><a href=" " style="text-decoration: none; font-size: 14px;">Show more...</a></p>
</section>

    <footer>
    <!-- Social media links -->
    <div class="social-media">
        <a href="https://www.facebook.com/yourpage" target="_blank" rel="noopener noreferrer">
            <img src="facebook-icon.png" alt="Facebook">
        </a>
        <a href="https://twitter.com/unboxing_gad25" target="_blank" rel="noopener noreferrer">
            <img src="twitter-icon.png" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/man_ish.dhaker?igsh=ZHo5NWVjYnlmbTdq" target="_blank" rel="noopener noreferrer">
            <img src="instagram-icon.png" alt="Instagram">
        </a>
    </div>

    <!-- Additional Links -->
    <div class="additional-links">
        <a href="admin_login.html">Admin Panel</a> <span> | </span>
        <a href="privacy-policy.html">Privacy Policy</a> <span> | </span>
        <a href="terms-of-service.html">Terms of Services</a>
        <!-- Add more links as needed -->
    </div>
    
    <!-- Copyright Notice -->
    <p>&copy; 2024 Health Max Nursing Care. All rights reserved.</p>
    
    <!-- Google Translate Widget Code -->
  <div id="google_translate_element"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,gu,hi,mr,bn,te,ta,kn,ur,ml', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <!-- End Google Translate Widget Code -->
  	
</footer>
</html>