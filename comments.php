<section class="comments">
  <?php
  comment_form();
  if (have_comments()) :
  ?>
    <ol class="commentlist">
      <?php
      $wp_list_comments_args = [
        'avater_size' => '50'
      ];
      wp_list_comments($wp_list_comments_args); ?>
    </ol>
  <?php
    $paginate_commnts_links_args = [
      'prev_text' => '←前のコメントページ',
      'next_text' => '次のコメントページ→'
    ];
    paginate_comments_links($paginate_commnts_links_args);
  endif;
  ?>
</section>
