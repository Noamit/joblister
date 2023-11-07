<?php include_once 'config/init.php'; ?>

<?php

$job = new Job();

if(isset($_POST['submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['comapny'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    
    if($job->createJob($data)) {
        echo '<div class="alert alert-success">' . 'success' . '</div>';
    }
    else {
        echo '<div class="alert alert-danger">' . 'error' . '</div>'; 
    }
    // redirect('index.php', 'bb', 'bb');
    // if($job->createJob($data)) {
    //     redirect('index.php', 'your job has been listed', 'success');
    // } else {
    //     redirect('index.php', 'Something went wrong', 'error');
    // }
} 

$template = new Template('templates/job-create.php');
$template->categories = $job->getCategories();
echo $template;

