$def with (recipies,ingredients)

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>A Tribute to Cookie Wedsnesday</title>
	<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="screen" href="../static/main.css" />
</head>

<body>

	<div class='wrapper'>
		<div class='sidebar'>
			<div class='sidebar-title'>
			<h1>Ingredients</h1>
			</div>
			<div class='sidebar-contents'>
				<span class='ingr'>
				<ul>
					$for ingredient in ingredients:
						<li>$ingredient.amount $ingredient.ititle  </li>
				</ul>
				</span>
			</div>
		</div>
		
		<div class='recipe_instr'>
			<div class='recipe_title'>
			$for recipe in recipies:
				 <span id="t$recipe.rid"><h1>$recipe.rtitle </h1></span>
			</div>
			<div id="t$recipe.rid" class = 'instruction'> $recipe.instruction 
			</div>
		</div>
	</div>

</body>
</html>
