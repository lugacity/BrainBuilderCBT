<?php
session_start();
include 'config.php';
if(!isset($_SESSION['reg_no'])){
  header('location:loginstart.php');
}
else{
  $reg_no = $_SESSION['reg_no'];
  $select = mysqli_query($conn, "Select * from user where reg_no = '$reg_no' ");
  if(mysqli_num_rows($select) > 0)
  while($row = mysqli_fetch_assoc($select)){
    $fullname = $row['fullname'];
  }
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBT Exam</title>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
        .pagination {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}

.page-content {
  display: none;
  max-width: 600px;
  text-align: justify;
}

.page-content.active {
  display: block;
}

.page-links {
  display: flex;
  justify-content: center;
  margin-top: 20px;
}

.page-link {
  display: inline-block;
  padding: 10px;
  margin: 0 5px;
  color: #333;
  text-decoration: none;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.page-link.active {
  background-color: #007bff;
  color: #fff;
  border-color: #007bff;
}
/* Top  */
.header {
			display: flex;
			justify-content: flex-end;
			align-items: center;
			height: 80px;
			background-color: whitesmoke;
			padding: 0 20px;
		}

		.header h5 {
			margin-right: 20px;
			font-size: 15px;
			color: #333;
		}

		.header button {
			background-color: #333;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			font-size: 16px;
			cursor: pointer;
    }
    </style>
</head>
<body>
<header class="header">
		<h5> <?php 
           echo $fullname;
          ?></h5>
          <form action="logout.php">
            <button>Logout</button>
          </form>
	</header>
    <div class="pagination">
        <div class="page-content active" data-page="1">
          <h2>Page 1 Content</h2>
          <h2>HOw far mariam</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus felis eget nunc luctus euismod. Nulla facilisi. Suspendisse potenti.</p>
        </div>
        <div class="page-content" data-page="2">
          <h2>Page 2 Content</h2>
          <p>Integer a mi non felis hendrerit tincidunt. Sed quis nibh sit amet eros pulvinar feugiat vel sed nulla. Donec sit amet tincidunt lacus, at ultricies nisi. </p>
        </div>
        <div class="page-content" data-page="3">
          <h2>Page 3 Content</h2>
          <p>Curabitur ullamcorper elit et elit rutrum, eget imperdiet risus lacinia. Morbi ullamcorper, nunc eget euismod gravida, ipsum urna vestibulum leo, sed vestibulum risus ante non enim.</p>
        </div>
        <div class="page-links">
          <a href="#" class="page-link active" data-page="1">1</a>
          <a href="#" class="page-link" data-page="2">2</a>
          <a href="#" class="page-link" data-page="3">3</a>
        </div>
      </div>
      

      <script>

const pagination = document.querySelector('.pagination');
const pageLinks = document.querySelectorAll('.page-link');
const pageContents = document.querySelectorAll('.page-content');

pageLinks.forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const currentPage = document.querySelector('.page-link.active');
    const currentContent = document.querySelector('.page-content.active');
    const nextPage = document.querySelector(`[data-page="${link.dataset.page}"]`);
    currentPage.classList.remove('active');
    currentContent.classList.remove('active');
    nextPage.classList.add('active');
    link.classList.add('active');
  });
});

      </script>
</body>
</html>