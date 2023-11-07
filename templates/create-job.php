<?php include 'inc/header.php'; ?>

      <div class="jumbotron">
        <h1>Create Job Listing</h1>
        <form method="post" action ="create.php" >
            <div class = 'form-group'>
                <label> Company </label> 
                <input type="text" class="form-control" name="comapny">
            </div>
            <div class = 'form-group'>
                <label> Category </label> 
                <select name="category" class="form-control">
                    <option value="0" selected>select category</option>
                    <?php foreach($categories as $category):?>
                    <option value="<?php echo $category->id;?>"><?php echo $category->name;?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class = 'form-group'>
                <label> Job Title </label> 
                <input type="text" class="form-control" name="job_title">
            </div>
            <div class = 'form-group'>
                <label> Description </label> 
                <input type="text" class="form-control" name="description">
            </div>
            <div class = 'form-group'>
                <label> Salary </label> 
                <input type="text" class="form-control" name="salary">
            </div>

            <div class = 'form-group'>
                <label> Location </label> 
                <input type="text" class="form-control" name="location">
            </div>
            <div class = 'form-group'>
                <label> Contact User </label> 
                <input type="text" class="form-control" name="contact_user">
            </div>
            <div class = 'form-group'>
                <label> Contact Email </label> 
                <input type="text" class="form-control" name="contact_email">
            </div>
          <input type="submit" class="btn btn-lg btn-success" value="submit" name="submit">
        </form>
      </div>


    
<?php include 'inc/footer.php'; ?>