<div class="form form--search">
  <form role="search" method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="form__field form__field--inline">
      <input name="s" placeholder="<?php _e('Szukaj','bluu');?>" value="<?php echo get_search_query();?>"/>
    </div>
    <div class="form__field form__field--inline">
      <button type="submit" class="form__submit-btn form__submit-btn--alt"><?php _e('Szukaj','bluu');?></button>
    </div>
  </form>
</div>