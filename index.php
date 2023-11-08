<?php include_once 'config/init.php'; ?>

<?php

$job = new Job();
$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if(isset($_POST['del_id'])) {
    $job_id = $_POST['del_id'];
    if($job->deleteJob($job_id)) {
        echo '<div class="alert alert-success">' . 'success' . '</div>';
    }
    else {
        echo '<div class="alert alert-danger">' . 'error' . '</div>'; 
    }
}

if ($category) {
    $template->jobs = $job->getJobsByCategory($category);
    $template->title = 'Jobs In ' . $job->getCategory($category)->name; 
} else {
    $template->title = 'latest job'; 
    $template->jobs = $job->getAllJobs();
}



$template->categories = $job->getCategories();
echo $template;

