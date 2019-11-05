<?php


namespace App\Controllers\Backend;

require "vendor/autoload.php";

use App\Models\StoryManager;

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
    function editStoryPage()
    {
        $editStory = new StoryManager;
        $displayEditStory = $editStory->editStory($_GET['StoryId']);



        require 'App/Views/Backend/EditStory.php';
    }
}
