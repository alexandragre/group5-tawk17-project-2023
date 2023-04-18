<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@500&family=Public+Sans:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Sipper drink recipes website</title>
</head>
<body>
    <nav>
        <div class="navigation">
        <a href="index.html" class="sipper-logo"><p>Sipper.</a></p>
        <ul>
            <li><a href="login.php"></a></li>
        </ul>
        <div class="notification-container">
        <a href="#" class="notification-img"></a>
        </div>  

        <div class="profile-container">
            <a href="#" class="profile-img"></a>
        </div>
    </div>
</nav>

<div class="edit-overview">
<a href="#" class="create-btn">Create new recipe</a>

<section class="overview">
<h3 class="create-h">Created by you</h3>

    <div class="recipes-overview">

    <table>
		<thead>
			<th>Title</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>

		<tbody>
			<?php 
                // loops and output data of each row
                while ($row = $result->fetch_assoc()) { ?>
			<tr>
			<!-- Outputs the title and description-->
			<td class="recipe"><?php echo $row['drink_title']; ?></td>
                
			<td class="update">
			<a href="edit-recipe.php?id=<?php echo $row['drink_title']; ?>" class="edit_btn">
            <button class="btn-trash"><i class="fa fa-trash"></i></button></a>
			</td>

            <td class="delete">
            <button class="btn-pen"><i class="fa fa-pencil" aria-hidden="true"></i> </button>
            </td>

			<?php } ?>
        	</tr>

        <li class="recipe">Recipes</li>
        <li>
            <button class="btn-trash"><i class="fa fa-trash"></i></button>
        </li>
        <li>
            <button class="btn-pen"><i class="fa fa-pencil" aria-hidden="true"></i> </button>
        </li>
    </div>
</section>

</div>
</body>
</html>
