<?php include 'inc/header.php'; ?>

<div class="row marketing">
    <h4>
        <?php echo $job->job_title; ?>
    </h4>
    <?php foreach ($job as $key => $value): ?>
    <p>
        <?php echo $key . ' : ' . $value; ?>
    </p>
    <?php endforeach; ?>
</div>
<div>
    <a href="index.php">
        Return Home
    </a>
    <br>
    <a href="edit.php?id=<?php echo $job->id; ?>" type="button" class="btn btn-secondary">
        Edit
    </a>

    <form style="display:inline;" method="POST" action="job.php">
        <input type="hidden" name="del_id" value=<?php echo $job->id; ?>>
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>


<?php include 'inc/footer.php'; ?>