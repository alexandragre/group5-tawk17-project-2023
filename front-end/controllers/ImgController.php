private function addProfilePicture()
<?php

// Check for a defined constant or specific file inclusion
if (!defined('MY_APP') && basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
    die('This file cannot be accessed directly.');
}

require_once __DIR__ . "/../ControllerBase.php";
require_once __DIR__ . "/../../business-logic/AuthService.php";

// Class for handling requests to "home/Auth"

class ImgController extends ControllerBase
{
    {
        private function addRecipeImg()

        $this->requireAuth();
        // Check if a file was uploaded
        if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] === UPLOAD_ERR_OK) {

            // Get the file name and extension
            $filename = $_FILES['profile_pic']['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            // Generate a unique file name
            $unique_filename = uniqid() . '.' . $extension;

            // Set the upload directory and file path
            $upload_directory = realpath(__DIR__ . "/../assets/img/profiles/");
            $file_path = "$upload_directory/$unique_filename";

            // Move the uploaded file to the upload directory
            $x = move_uploaded_file($_FILES['profile_pic']['tmp_name'], $file_path);

            // Get the URL path to the uploaded file
            $url_path = '/assets/img/drink-img/' . $unique_filename;

            // You can now save the URL path to the database or use it in your application as needed
            $this->user->profile_pic_url = $url_path;

            UsersService::updateUser($this->user->user_id, $this->user);

            // Redirect to the profile page or display a success message
            $this->redirect($this->home . "/auth/profile");
            
        } else {
            $this->error();
        }
    }
}

}