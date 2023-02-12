<?php
	

	$booksJson = file_get_contents('books.json');
	$books = json_decode($booksJson, true);
	
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


<div class="container">
  

<br>

<br>

<a href="/addBook.php" class="btn btn-primary" style="float:right;">Add New Book</a>

<br>

<center><h1>Book List </h1></center>

<br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Available</th>
      <th scope="col">Pages</th>
       <th scope="col">Isbn</th>
    </tr>
  </thead>
  <tbody>

  	<?php foreach($books as $book): ?>

	    <tr>

	      <td><?php echo $book['title']; ?></td>
	      <td><?php echo $book['author']; ?></td>
	      <td><?php echo $book['available']; ?></td>
	      <td><?php echo $book['pages']; ?></td>
	      <td><?php echo $book['isbn']; ?></td>

	    </tr>

    <?php endforeach ?>
   
  </tbody>
</table>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>