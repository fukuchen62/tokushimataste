<?php
if (function_exists('bcn_display')):

?>
    <div class="breadcrumb">
        <div class="breadcrumb_inner">
            <?php bcn_display(); ?>
        </div>
    </div>

<?php endif; ?>

<!-- パンくずリスト必要なところに -->
<?php //get_template_part('template-parts/breadcrumb'); 
?>
