<?php

class ErrorController
{
  public function html()
  {
    echo $this->errorMessage();
  }

  public function errorMessage($reason = NULL)
  {
    return $this->pageNotFound($reason);
  }

  /**
   * @param string $reason [optional]
   * @return string A \<p\> tag that shows an error message (404).
   */
  private function pageNotFound(string $reason = NULL): string
  {
    $result = '';
    $text = 'Error 404. La página que buscas no existe. ';
    if (is_string($reason) and !empty(trim($reason))) $result = HTMLBuilder::createAPTag($text . trim($reason), 'color-red centered growed');
    else $result = HTMLBuilder::createAPTag(trim($text), 'color-red centered growed');
    return $result;
  }
}
