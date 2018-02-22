<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <title>to do write here</title>
    </head>
    <body>
        <form id="myphotoform" action="form.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="form-group">
                    <label for="name"><b>NAME</b></label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name"> 
                </div>
                <div class="form-group">
                    <label for="age"><b>AGE</b></label>
                    <input type="text" class="form-control" name="age">
                </div>
                <div class="form-group">
                    <label for="photo"><b>PHOTO</b></label>
                    <input type="file" class="form-control" name="photo">
                </div>
                <div class="form-group">
                    <label for="sub"><b>SUBJECT</b></label>
                    <input type="text" class="form-control" name="sub">
                </div>
                <div class="form-group">
                    <label for="image"><b>PHOTO 2</b></label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label for="mobile"><b>MOBILE</b></label>
                    <input type="text" class="form-control" name="mobile">
                </div>
                <button type="submit" class="btn btn-danger">OK</button>
            </div>                
        </form>
        
        <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        
        
    </body>
</html>
