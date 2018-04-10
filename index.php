<!doctype html>
<html>
	<head>
	<?php 
		$title = "Новости обо всем";
		require_once "blocks/head.php"; 
		$news = getNews (4);
		?>
	</head>
	<body>
	<?php require_once "blocks/header.php" ?>
		<div id="wrapper">
			<div id="leftcol">
			<?php
				for ($i = 0; $i < count($news); $i++) {
					if($i ==0)
						echo "<div id=\"bigArticle\">";
					else	
						echo "<div class=\"article\">";
					echo '<img src="/img/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" type="Статья '.$news[$i]["id"].'">
			 	<h2>'.$news[$i]["title"].'</h2>
			 	<p>'.$news[$i]["intro_text"].'</p>
			 	<a href="/article1.php"><div>Далее</div>
			 	</a>
			 </div>';
					if($i == 0)
						echo "<div class=\"clear\"><br></div>";
				}
				?>
			</div> 
	<?php require_once "blocks/rightcol.php" ?>
		</div>	
	<?php require_once "blocks/footer.php" ?>
	</body>
</html>