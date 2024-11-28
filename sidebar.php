 <div>
 	<section>
 		<div class="column_box">
 			<h3>
 				<?php
					$column_type_terms = get_terms(['taxonomy' => 'column_type']);
					// if (!empty($column_type_terms)):

					// echo '<pre>';
					// var_dump($column_type_terms);
					// echo '<pre>';
					?></h3>
 			<?php foreach ($column_type_terms as $column_type):
					// echo '<pre>';
					// var_dump($column_type);
					// echo '<pre>';
				?>
 				<li class="cat-item cat-item-33">
 					<a href="<?php echo get_term_link($column_type); ?>"><?php echo $column_type->name; ?></a>
 				<?php endforeach ?>
 				<!-- <a href="#">インタビュー</a>
                <a href="#">体験談</a>
                <a href="#">取材日記</a> -->
 		</div>
 	</section>
 </div>
