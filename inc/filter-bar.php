
<div id="filter-bar">
<div class="col">
  <div id="filter-by">
    <h2>Filter by Neighborhood</h2>
  </div><!--#filter-by-->
  <div id="filter-by-categories">
    <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
      <?php $args = array( 
        'show_option_none' => __( 'Select Neighborhood' ),
        'taxonomy'=>'neighborhood',
        'order'=>'ASC',
        'orderby'=>'term_order',
        'hide_empty'=>0,
        'name' => 'neighborhood',
        'show_count' => 0,
        'echo' => 0,
        'value_field' => 'slug');
      $select  = wp_dropdown_categories( $args ); 
      $replace = "<select$1 onchange='return this.form.submit()' class= 'replace' >";
      $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); 
      echo $select; ?>
    </form>
  </div><!--#filter-by-categories-->
</div><!--.col-->
  <div class="col">
    <div id="filter-by">
      <h2>Filter by Price</h2>
    </div><!--#filter-by-->
    <div id="filter-by-categories">
      <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <?php $args = array( 
          'show_option_none' => __( 'Select Price' ),
          'taxonomy'=>'price',
          'order'=>'ASC',
          'orderby'=>'term_order',
          'hide_empty'=>0,
          'name' => 'orice',
          'show_count' => 0,
          'echo' => 0,
          'value_field' => 'slug');
        $select  = wp_dropdown_categories( $args ); 
        $replace = "<select$1 onchange='return this.form.submit()' class= 'replace' >";
        $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); 
        echo $select; ?>
      </form>
    </div><!--#filter-by-categories-->
  </div><!--.col-->
  <div class="col">
    <div id="filter-by">
      <h2>Filter by Type</h2>
    </div><!--#filter-by-->
    <div id="filter-by-categories">
      <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <?php $args = array( 
          'show_option_none' => __( 'Select Type' ),
          'taxonomy'=>'type',
          'order'=>'ASC',
          'orderby'=>'term_order',
          'hide_empty'=>0,
          'name' => 'type',
          'show_count' => 0,
          'echo' => 0,
          'value_field' => 'slug');
        $select  = wp_dropdown_categories( $args ); 
        $replace = "<select$1 onchange='return this.form.submit()' class= 'replace' >";
        $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); 
        echo $select; ?>
      </form>
    </div><!--#filter-by-categories-->
  </div><!--.col-->
  <div class="col">
    <div id="filter-by">
      <h2>View Virtual Tours</h2>
    </div><!--#filter-by-->
    <div id="filter-by-categories">
      <form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <?php $args = array( 
          'show_option_none' => __( 'Select Virtual Tour' ),
          'taxonomy'=>'virtual-tour',
          'order'=>'ASC',
          'orderby'=>'term_order',
          'hide_empty'=>0,
          'name' => 'virtual-tour',
          'show_count' => 0,
          'echo' => 0,
          'value_field' => 'slug');
        $select  = wp_dropdown_categories( $args ); 
        $replace = "<select$1 onchange='return this.form.submit()' class= 'replace' >";
        $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); 
        echo $select; ?>
      </form>
    </div><!--#filter-by-categories-->
  </div><!--.col-->
  <div class="clear"></div><!--.clear-->
</div><!--#filter-bar-->