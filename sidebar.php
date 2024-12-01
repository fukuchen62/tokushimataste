    <?php echo 'これはサイドバーです。'; ?>

    <aside class="side-menu">
    	<ul class="side_bar side_bar_col">
    		<li>
    			<!-- サイドバーメニュー -->
    			<div class="category-list-outer">
    				<div class="category-list">
    					<h3>コラム一覧</h3>
    				</div>
    			</div>
    		</li>

    		<li class="cat-item">
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
    				<a href="<?php echo get_term_link($column_type); ?>"><?php echo $column_type->name; ?>
    				</a>
    			<?php endforeach ?>
    			<!-- <a href="#">インタビュー</a>
                <a href="#">体験談</a>
                <a href="#">取材日記</a> -->
    		</li>
    	</ul>
    </aside>
