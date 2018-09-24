<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Inserting data using AJAX </title>
    <!-- Bootstrap Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- Google jquery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="includes/js/my.js"></script>
</head>
<body>

    <div class="container">
        <h1 align="center">Form</h1>
        <div class="col-sm-12">
    <form action="" method="POST" id='form1' class="form-dark">
        <div class="form-group">
        <label for="Firstname">FirstName: </label>
        <input type="text" id="Fname" name="Fname" class="form-control" >
        </div>
        <div class="form-group">
        <label for="Lastname">Lastname: </label>
        <input type="text" id="Lname" name="Lname" class="form-control" >
        </div>
        <div class="form-group">
        <label for="Username">UserName: </label>
        <input type="text" id="Uname" name="Uname" class="form-control">
        </div>
        <div class="form-group">
        <label for="pass">Password: </label>
        <input type="password" id="pwd" name="pwd" class="form-control">
        </div>
        <div class="form-group">
        <input type="button" class="btn btn-outline-success" id="submit" value="Insert Data">
        </div>
    </form>
    </div>
    </div>
</body>
</html>
