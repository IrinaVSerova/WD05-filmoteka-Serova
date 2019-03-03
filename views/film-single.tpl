<div class="title-1">Информация о фильме</div>
	
	<div class="card mb-20">
		<div class="row">
			<div class="col">
				<img src="<?=HOST?>/data/films/14349.jpg" alt="<?=$film['title']?>">
			</div>
			<div class="col">
				<div class="card__header">
					<h4 class="title-4"><?=$film['title']?></h4>
					<div>
						<a href="edit.php?id=<?=$film['id']?>" class="button button--editsmall ">Редактировать</a>
						<a href="index.php?action=delete&id=<?=$film['id']?>" class="button button--removesmall">Удалить</a>
					</div>
				</div>	
				<div class="badge"><?=$film['genre']?></div>
				<div class="badge"><?=$film['year']?></div>
				<div class="user-content">
					<p><?=$film['description']?></p>
				</div>
				<div class="mt-20"></div>
					
			</div>	
		</div>
	</div>
