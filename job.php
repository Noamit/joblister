<?php include_once 'config/init.php'; ?>

<?php

$job = new Job();
$template = new Template('templates/job-single.php');

// if(isset($_POST['del_id'])) {
//     $job_id = $_POST['del_id'];
//     if($job->delete($job_id)) {
//         echo '<div class="alert alert-success">' . 'success' . '</div>';
//     }
//     else {
//         echo '<div class="alert alert-danger">' . 'error' . '</div>'; 
//     }
// }

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

$template->job = $job->getJob($job_id);

echo $template;

