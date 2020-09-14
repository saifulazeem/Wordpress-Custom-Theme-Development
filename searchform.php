<?php

?>


<!-- <form class="row " method="GET" action="<?php //echo home_url( '/' ); ?>" >
        <div class="col-2"></div>
        <input style="height:50px;"  type="text" class="col-6 form-control" id="mysearch" aria-describedby="searchHelp" placeholder="Search Files here...">
         <div class="col-1"></div> 
        <button class="col-1 btn btn-primary" style="">Search</button>
        </form> -->




        <form role="search" method="get" class=" row search-form form-inline mb-2" action="<?php echo home_url( '/' ); ?>">
        <div class="col-2"></div>
                        <label class=" col-8 label-cl">
                            <input style="height:50px; width:100%;" type="search" class=" search-field form-control" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
                            <input  type="hidden" name="post_type" value="post" />
                        </label>
 </form>


