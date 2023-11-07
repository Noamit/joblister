<!DOCTYPE html>
<html>
<head>
    <title>JobLister</title>
    <!-- Include the main Bootstrap CSS (from a CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <!-- Include the Bootswatch theme CSS (using a relative path) -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Adjust the path as needed -->
    <link rel="stylesheet" href="css/styles.css"> <!-- Adjust the path as needed -->
</head>
</head>
<body>

<div class="container">
    <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" ><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Create</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE?></h3>
      </div>
      <?php displayMessage(); ?>