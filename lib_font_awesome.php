<?php
namespace LIB;
class lib_font_awesome extends \LIB\lib_css{
    public static function get_class(){
        return self::class;}
    public static function css_path(){
        return new \SYSTEM\PLIB('font_awesome/lib/css/font-awesome.min.css');}
    public static function version(){
        return '<a href="https://github.com/FortAwesome/Font-Awesome/commit/8e8e659341916ad8a551835c43b30395cd90f489">commit 8e8e659341916ad8a551835c43b30395cd90f489</a>';}
}