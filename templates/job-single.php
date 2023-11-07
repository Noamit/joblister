<?php include 'inc/header.php'; ?>

<div class="row marketing">
<h4><?php echo $job->job_title?></h4>
<?php foreach($job as $key=> $value): ?>

            <p><?php echo $key . ' : ' . $value?></p>

        
        <?php endforeach; ?>
        </div>

<?php include 'inc/footer.php'; ?>
