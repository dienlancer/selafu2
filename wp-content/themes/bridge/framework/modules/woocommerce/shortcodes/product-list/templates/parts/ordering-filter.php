<?php if($show_ordering_filter == 'yes'){ ?>
<div class="qode-pl-ordering-outer">
    <h6><?php esc_html_e('Filter','depot'); ?></h6>
    <div class="qode-pl-ordering">
        <div>
            <h5><?php esc_html_e('Sort By','depot'); ?></h5>
            <ul>
                <?php print $ordering_filter_list; ?>
            </ul>
        </div>
        <div>
            <h5><?php esc_html_e('Price Range','depot'); ?></h5>
            <ul class="qode-pl-ordering-price">
                <?php print $pricing_filter_list; ?>
            </ul>
        </div>
    </div>
</div>
<?php } ?>