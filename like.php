<?php
// Path to the JSON file storing likes
$likes_file = 'likes.json';

// Check if the likes JSON file exists, if not, create it with an empty object
if (!file_exists($likes_file)) {
    file_put_contents($likes_file, json_encode([]));
}

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Load the existing likes data from the JSON file
$likes_data = json_decode(file_get_contents($likes_file), true);

// Check if title_id is provided in the request
if(isset($_POST['title_id'])) {
    $title_id = $_POST['title_id'];
    
    // Check if the title_id already exists in the likes data
    if (array_key_exists($title_id, $likes_data)) {
        // Check if the device's IP address has already liked the post
        if (!in_array($user_ip, $likes_data[$title_id])) {
            // Add the device's IP address to the list of likes for the post
            $likes_data[$title_id][] = $user_ip;
        }
    } else {
        // Initialize the likes count for the title_id with an array containing the device's IP address
        $likes_data[$title_id] = [$user_ip];
    }
    
    // Save the updated likes data back to the JSON file
    file_put_contents($likes_file, json_encode($likes_data));
    
    // Return the updated likes count for the title_id
    echo count($likes_data[$title_id]);
} else {
    echo "Error: title_id parameter is missing";
}
?>