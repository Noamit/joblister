<?php include_once 'config/init.php'; ?>

<?php

$job = new Job();

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])) {
    $data = array();
    $data['job_title'] = $_POST['job_title'];
    $data['company'] = $_POST['company'];
    $data['category_id'] = $_POST['category'];
    $data['description'] = $_POST['description'];
    $data['location'] = $_POST['location'];
    $data['salary'] = $_POST['salary'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];

    if($job->updateJob($job_id, $data)) {
        redirect('index.php', 'edit - success', 'success');
    } else {
        redirect('index.php', 'edit - error', 'error');
    }
} 

$template = new Template('templates/job-edit.php');
$template->categories = $job->getCategories();
$template->job = $job->getJob($job_id);
echo $template;

