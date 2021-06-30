<?php
/**
 * The template for displaying search forms
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form class="searchForm" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
    <div class="searchForm-holder">
        <input type="text" size="18" name="s" id="s" placeholder="Search site" onfocus="if (this.value === this.defaultValue)
                this.value = '';" onblur="if (this.value == '')
                            this.value = this.defaultValue;"/>
    </div>
</form>
