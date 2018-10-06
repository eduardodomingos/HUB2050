<?php
/**
 * Custom walker that wraps the footer menu items in a <span> instead of an <li>.
 * This modification makes styling much easier.
 * https://wordpress.stackexchange.com/questions/33175/get-menu-links-only
 */
class Waker_Footer_Menu extends Walker
{
    public function walk( $elements, $max_depth )
    {
        $list = array ();
        foreach ( $elements as $item )
            $list[] = "<span><a href='$item->url'>$item->title</a></span>";
        return join( "\n", $list );
    }
}