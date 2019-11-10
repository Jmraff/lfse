<?php


namespace App\Controllers\Backend;

require "vendor/autoload.php";

use App\Models\StoryManager;
use App\Models\UserManager;

class BackendController
{

    public function adminHome()
    {

        require 'App/Views/Backend/AdminHome.php';
    }
    public function listStories()
    {

        $list = new StoryManager;
        $listStories = $list->listStories();
        require 'App/Views/Backend/ListStories.php';
    }
    public function editStoryPage()
    {
        $editStory = new StoryManager;
        $displayEditStory = $editStory->editStory($_GET['StoryId']);



        require 'App/Views/Backend/EditStory.php';
    }
    public function listUsers()
    {




        $listUsers = new UserManager;
        $nbUsers  = $listUsers->nbUsers();


        $usersPerPage = 10;
        $totalPages = ceil($nbUsers / $usersPerPage);

        if (isset($_GET['page']) && $_GET['page'] > 0 && $_GET['page'] <= $totalPages) {
            $currentPage = $_GET['page'];
        } else {
            $currentPage = 1;
        }





        $start = (($currentPage - 1) * $usersPerPage);
        $list = $listUsers->listUsers($start, $usersPerPage);





        require 'App/Views/Backend/ListUsers.php';
    }
    public function deleteUser($userId)
    {
        $delete = new UserManager;
        $deleteUser  = $delete->deleteUser($userId);
        header("Location: index.php?action=adminListUsers");
    }
}
