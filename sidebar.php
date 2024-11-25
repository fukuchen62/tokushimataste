<<<<<<< HEAD
<div>
	<section>
		<div class="column_box">
			<h3>コラム　一覧</h3>
			<?php
			$column_type_terms = get_terms(['taxonomy' => 'column_type']);
			// if (!empty($column_type_terms)):
=======
		<?php
		// ウィジェットエリアの呼び出し
		dynamic_sidebar('my-widget');
		?>
		<!-- サイドバー -->
		<div class="side-bar">
>>>>>>> 9cf6131abb5655a9b6ce916ad2e2e17277e03645

			// echo '<pre>';
			// var_dump($column_type_terms);
			// echo '<pre>';
			?>
			<?php foreach ($column_type_terms as $column_type):
				// echo '<pre>';
				// var_dump($column_type);
				// echo '<pre>';
			?>

				<a href="<?php echo get_term_link($column_type); ?>"><?php echo $column_type->name; ?></a>
			<?php endforeach ?>
			<!-- <a href="#">インタビュー</a>
                <a href="#">体験談</a>
                <a href="#">取材日記</a> -->
		</div>
	</section>
</div>
