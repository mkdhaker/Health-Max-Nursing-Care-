<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Blogs - Health Max Nursing Care</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
 <style>

header {
    background-color: white;
    color: blue;
    width:300px;
    padding: 0px;
    text-align: center;
    margin: 0 auto;
    transition: background-color 0.5s ease; /* Smooth background color transition */
    border-radius: 30px;
    font-size: 10px;
    border: 1px solid #ccc;
}

body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin-left: 10px;
  margin-right: 10px;
  padding: 0;
}


#like-count {
    font-size: 0.7em; /* Adjust the font size as needed */
    color: rgba(0, 0, 0, 0.6); /* Adjust the opacity to control the fade effect */
}

</style> 
</head>
<body>
    <header>
    	<h1> Health Max Nursing Care</h1>
  
    </header>
    
    <button onclick="sharePage()">Share Page</button>
   

<?php
// Check if title_id parameter exists
if (isset($_GET['title_id'])) {
    $title_id = $_GET['title_id'];

    // Function to get JSON file path based on title ID
    function getJsonFilePath($title_id) {
        $health_blogs_dir = 'health_blogs';
        $json_file = $health_blogs_dir . '/' . $title_id . '.json';
        return $json_file;
    }

    // Function to display blog content
    function displayBlogContent($json_file) {
        $json_data = json_decode(file_get_contents($json_file), true);
        $title = $json_data['title'];
        $blogs = $json_data['blogs'];
        $date = $json_data['date'];
        $image_filename = '';

        // Get all files with the same basename but different image extensions
        $file_basename = pathinfo($json_file, PATHINFO_FILENAME);
        $image_files = glob('health_blogs/' . $file_basename . '.*');

        // Use the first image file found or default image if none found
        if (!empty($image_files)) {
            $image_filename = $image_files[0];
        } else {
            // Default image if no image file is found
            $default_image = 'health_blogs/default.jpg'; // Replace with your default image filename and path
            $image_filename = file_exists($default_image) ? $default_image : '';
        }

        // Display blog content
        echo "<h2>{$title}</h2>";
        echo "<div style='width: 340px; height: auto; overflow: hidden;'>";
echo "<img src='{$image_filename}' alt='{$title}' style='width: 100%; height: auto;'>";
echo "</div>";
        echo "<p>Date: {$date}</p>";
        
      
// Adding icons below the date
echo "<div>";
echo "<p>"; // Opening paragraph tag for icons
echo "<a href='#' class='icon share-icon'><img src='share.png' alt='Share Icon' style='width: 28px; height: 28px;'></a>"; // Share icon
echo "<a href='#' class='icon whatsapp-icon'><img src='whatsapp.png' alt='WhatsApp Icon' style='width: 28px; height: 28px;'></a>"; // WhatsApp icon
echo "<span class='icon like-icon' id='like-icon'>";
echo "<img src='like.png' alt='Like Icon' style='width: 28px; height: 28px;'>";
echo "<span id='like-count'>0</span>";
echo "</span>";
echo "</p>"; // Closing paragraph tag for icons
echo "</div>";

        echo "<p>{$blogs}</p>";
    }

    // Get JSON file path
    $json_file = getJsonFilePath($title_id);

    // Check if JSON file exists
    if (file_exists($json_file)) {
        // Display blog content
        displayBlogContent($json_file);
    } else {
        // If JSON file doesn't exist, display error message
        echo "<p>Blog not found.</p>";
    }
} else {
    // If title_id parameter is not provided, display error message
    echo "<p>No blog selected.</p>";
}
?>


<script>
$(document).ready(function() {
	
    // WhatsApp Icon functionality
    $('.whatsapp-icon').click(function() {
        var blogURL = window.location.href;
        var whatsappURL = "whatsapp://send?text=" + encodeURIComponent(blogURL);
        window.location.href = whatsappURL;
    });
    
    // Function to fetch the like counts from the likes.json file
    function fetchLikeCounts() {
        $.ajax({
            type: 'GET',
            url: 'likes.json',
            dataType: 'json',
            success: function(likesData) {
                // Get the like counts for the individual blog posts
                var likes = likesData;
                // Assuming $title_id is set in your PHP code
                var titleId = '<?php echo $title_id; ?>';
                // Get the like count for the current blog post
                var likeCount = likes[titleId] ? likes[titleId].length : 0;
                // Update the like count on the page
                $('#like-count').text(likeCount);
            }
        });
    }

    // Call the function to fetch the like counts for the initial page load
    fetchLikeCounts();

    // Like Icon functionality
$('.like-icon').click(function() {
    var titleId = '<?php echo $title_id; ?>'; // Get the unique title ID of the blog post
    $.ajax({
        type: 'POST',
        url: 'like.php', // Endpoint to handle like increment
        data: { title_id: titleId }, // Pass the unique title ID as data
        dataType: 'json', // Expect JSON response from the server
        success: function(response) {
            if (response && response.likes !== undefined) {
                // Update like count
                $('#like-count').text(response.likes);
            }
        },
        error: function(xhr, status, error) {
            // Handle errors here if needed
            console.error("AJAX error:", error);
        },
        complete: function() {
            // Refresh the like count from the server
            fetchLikeCounts();
        }
    });
});

// Function to fetch the like counts from the server
function fetchLikeCounts() {
    $.ajax({
        type: 'GET',
        url: 'likes.json',
        dataType: 'json',
        success: function(likesData) {
            // Get the like counts for the individual blog posts
            var likes = likesData;
            // Assuming $title_id is set in your PHP code
            var titleId = '<?php echo $title_id; ?>';
            // Get the like count for the current blog post
            var likeCount = likes[titleId] ? likes[titleId].length : 0;
            // Update the like count on the page
            $('#like-count').text(likeCount);
        }
    });
}

// Call the function to fetch the like counts for the initial page load
fetchLikeCounts();
});

</script>

<script>
    function sharePage() {
        var shareData = {
            title: document.title,
            url: window.location.href
        };

        if (navigator.share) {
            // If Web Share API is supported, use it for sharing
            navigator.share(shareData)
                .then(function() {
                    console.log('Sharing successful');
                    alert('Sharing successful!');
                })
                .catch(function(error) {
                    console.error('Error sharing:', error);
                    alert('Sharing failed. Please try again.');
                });
        } else {
            // Fallback for browsers that do not support Web Share API
            // Here you can add social media share buttons or copy-to-clipboard functionality
            console.log('Sharing not supported on this device.');
            alert('Sharing not supported on this device. Please try using social media buttons or copy-to-clipboard functionality.');
        }
    }
</script>



	</body>
</html>