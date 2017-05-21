
<!-- top articles-->
<div class='bgcolor block1 layout'>
	<div class='subheader'>
		<h5>Топ статей по прочитаності </h5>
	</div>
	<?php
		$articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY
		`views` DESC LIMIT 5");
	?>
	<?php
		while ($art = mysqli_fetch_assoc($articles)){
			?>
			<article class='article2 layout'>
				<div  class='img1' style='background-image: url(../img/beginers/<?php echo $art['image']; ?>);'>	</div>

				<a href="/article.php?id=<?php echo $art['id']; ?>" >	<?php echo $art['title'];?>	</a>
				<div>
					<?php
					$art_cat=false;
					foreach ($categories as $cat) {
						if( $cat['id'] ==$art['catigores_id']){
							$art_cat =$cat;
							break;
						}
					}?>
					<small>Категорія: <a href="/articles.php?catigorie=<?php echo $art_cat['id'];?>" >
					<?php echo $art_cat['title']; ?>	</a></small>
				</div>
				<div class='layout'>
					<?php echo mb_substr($art['text'], 0, 100, 'utf-8'), ' ...'; ?>
				</div>
			</article>
			<?php
		}
	?>
</div>
			

<!--top coments-->
<div class='bgcolor block1 layout'>
	<div class='subheader'>
		<h5>Коментарі </h5>
	</div>
	<?php
		$comments = mysqli_query($connection, "SELECT * FROM `coments` ORDER BY
		`id` DESC LIMIT 5");
	?>
	<?php
		while ($comment = mysqli_fetch_assoc($comments)){
			?>
			<article class='articlecoment layout'>
				<div  class='img2' style='background-image: url(https://www.gravatar.com/avatar/<?php echo md5($comment['email']); ?>?s=125);'>	</div>

				<a href="/article.php?id=<?php echo $comment['articls_id']; ?>" >	<?php echo $comment['autor'];?>	</a>
				
				<div class='layout'>
					<?php echo mb_substr($comment['text'], 0, 100, 'utf-8'), ' ...'; ?>
				</div>
			</article>
			<?php
		}
	?>
</div>