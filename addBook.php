<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<div class="container">

<br>

<a href="/index.php" class="btn btn-primary" style="float:right;">All Books</a>

<br>

<br>

<center><h1>Add Book </h1></center>  


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $data=array();

    $data['title'] = $_POST['title'];
    $data['author'] = $_POST['author'];
    $data['available'] = $_POST['available'];
    $data['pages'] = $_POST['pages'];
    $data['isbn'] = $_POST['isbn'];

    $previousBooks = file_get_contents('books.json');
    $previousBooks = json_decode($previousBooks);
    array_push($previousBooks, $data);
    $jsonData = json_encode($previousBooks);
    file_put_contents('books.json', $jsonData);


    echo"<div class='alert alert-primary' role='alert'>Books added successfully</div>";

}
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Author</label>
    <input type="text" class="form-control" name="author" id="exampleInputPassword1" placeholder="author">
  </div>
  <label for="exampleInputPassword1">Available</label>

  <br>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="available" id="inlineRadio1" value="1">
  <label class="form-check-label" for="inlineRadio1">Yes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="available" id="inlineRadio2" value="0">
  <label class="form-check-label" for="inlineRadio2">No</label>
</div>

  <br>

  <br>

  <div class="form-group">
    <label for="exampleInputPassword1">Pages</label>
    <input type="text" class="form-control" name="pages" id="exampleInputPassword1" placeholder="pages">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Isbn</label>
    <input type="text" class="form-control" name="isbn" id="exampleInputPassword1" placeholder="isbn">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
