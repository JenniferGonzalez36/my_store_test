<?php

class HTMLBuilder
{
  /**
   * @param mixed $text The content of the \<p\> tag.
   * @param string $classes [optional] The classes of th \<p\> tag. 
   *  You need to separate the classes using a whitespace
   *  in case you need more than one class.
   * @return string. Returns a \<p\> tag.
   */
  public static function createAPTag($text = '', string $classes = NULL): string
  {
    $result = '<p';
    if (is_string($classes) and !empty(trim($classes)))
      $result .= ' class="' . trim($classes) . '"';
    $result .= '>' . trim($text) . '</p>';
    return $result;
  }
}
