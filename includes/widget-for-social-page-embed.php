<?php

class widget_for_social_page_embed extends WP_Widget {
    public function __construct() {
    	parent::__construct('widget_for_social_page_embed', __('Widget for Facebook Page', 'widget-for-social-page'), array(
            'description' => __( 'This is a facebook page widget.', 'widget-for-social-page')
    	));
    }
    
    public function widget( $args, $instance ) { ?>
		
		<div class="facebook-page-widget widget">	
			<?php $title = $instance['title']; 
			if( isset( $title ) && ! $title == '' ) : ?>
    	        <h2 style="margin-bottom:20px;"><?php echo esc_attr( $title ); ?></h2>
    	    <?php endif;  
		    $facebook_feed_link = $instance['facebook_feed_link'];
            $facebook_feed_height = $instance['facebook_feed_height'];
            $facebook_feed_width = $instance['facebook_feed_width'];
            if( isset( $facebook_feed_link ) && ! $facebook_feed_link == '' ) : ?>
                <iframe src="https://www.facebook.com/plugins/page.php?href=
                 <?php echo esc_attr($facebook_feed_link); ?>&tabs=timeline&width=360&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="<?php if( ! $facebook_feed_width == '' ) : echo esc_attr( $facebook_feed_width ); else: echo esc_html('360', 'widget-for-facebook-page'); endif; ?>" height="<?php if( ! $facebook_feed_height == '' ) : echo esc_attr( $facebook_feed_height ); else: echo esc_html('500', 'widget-for-facebook-page'); endif; ?>" style="border:none;overflow:hidden;margin:0;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            <?php endif; ?>
		</div>	
		
    <?php }

    public function form( $instance ) {
        if( isset( $instance['title'] ) ) :
    	    $title = $instance['title'];
        endif;
        if( isset( $instance['facebook_feed_link'] ) ) :
            $facebook_feed_link = $instance['facebook_feed_link'];
        endif;
        if( isset( $instance['facebook_feed_height'] ) ) :
            $facebook_feed_height = $instance['facebook_feed_height'];
        endif;
        if( isset( $instance['facebook_feed_width'] ) ) :
            $facebook_feed_width = $instance['facebook_feed_width'];
        endif;
    ?>

    <P>
        <label for="<?php echo esc_html( $this->get_field_id('title') ); ?>"><?php echo __( 'Title:', 'widget-for-social-page'); ?></label>
    </p>

    <p>
       <input type="text" class="widefat" id="<?php echo esc_html( $this->get_field_id('title') ); ?>" name="<?php echo esc_html( $this->get_field_name('title') ); ?>" value="<?php if( isset( $title ) ) : echo esc_attr( $title ); endif; ?>">
    </p>

    <P>
        <label for="<?php echo esc_html( $this->get_field_id('facebook_feed_link') ); ?>"><?php echo __( 'Facebook Page Link:', 'widget-for-social-page'); ?></label>
    </p>

    <p>
        <input type="url" class="widefat" id="<?php echo esc_html( $this->get_field_id('facebook_feed_link') ); ?>" name="<?php echo esc_html( $this->get_field_name('facebook_feed_link') ); ?>" value="<?php if( isset( $facebook_feed_link ) ) : echo esc_attr( $facebook_feed_link ); endif; ?>">
    </p>

    <P>
        <label for="<?php echo esc_html( $this->get_field_id('facebook_feed_height') ); ?>"><?php echo __( 'Height:', 'widget-for-social-page'); ?></label>
    </p>

    <p>
        <input type="number" class="widefat" id="<?php echo esc_html( $this->get_field_id('facebook_feed_height') ); ?>" name="<?php echo esc_html( $this->get_field_name('facebook_feed_height') ); ?>" value="<?php if( isset( $facebook_feed_height ) ) : echo esc_attr( $facebook_feed_height ); endif; ?>">
    </p>

    <P>
        <label for="<?php echo esc_html( $this->get_field_id('facebook_feed_width') ); ?>"><?php echo __( 'Width:', 'widget-for-social-page'); ?></label>
    </p>

    <p>
        <input type="number" class="widefat" id="<?php echo esc_html( $this->get_field_id('facebook_feed_width') ); ?>" name="<?php echo esc_html( $this->get_field_name('facebook_feed_width') ); ?>" value="<?php if( isset( $facebook_feed_width ) ) : echo esc_attr( $facebook_feed_width ); endif; ?>">
    </p>

    <?php }
}

function widget_for_social_page_embed_function() {
	register_widget('widget_for_social_page_embed');
}

add_action('widgets_init', 'widget_for_social_page_embed_function');
	