<div class="side_bar side_bar_col side-menu">
	<div class="category-list-outer">
		<div class="category-list">
			<h3>コラム一覧</h3>
		</div>
	</div>

	<ul class="side-menu-li">
		<?php
		$column_type_terms = get_terms(['taxonomy' => 'column_type']);
		// if (!empty($column_type_terms)):

		// echo '<pre>';
		// var_dump($column_type_terms);
		// echo '<pre>';
		?>
		<?php foreach ($column_type_terms as $column_type):
			// echo '<pre>';
			// var_dump($column_type);
			// echo '<pre>';
		?>
			<li class="cat-item cat-item-33">
				<a href="<?php echo get_term_link($column_type); ?>"><?php echo $column_type->name; ?>
				</a>
			<?php endforeach; ?>
			</li>
	</ul>
</div>
