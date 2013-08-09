<?php
namespace JayFrancis\WebVTT;

class WebVTT
{
  /** @var Caption[] */
  private $_captions = array();

  public function addCaption($startSecond, $ensSecond, $text)
  {
    $this->_captions[] = new Caption($startSecond, $ensSecond, $text);

    return $this;
  }

  /**
   * @return Caption[]
   */
  public function getCaptions()
  {
    return $this->_captions;
  }

  public function renderCaptions()
  {
    $captions = ['WEBVTT'];

    foreach($this->getCaptions() as $caption)
    {
      $captions[] = $caption->render();
    }

    header("Content-Type:text/vtt;charset=utf-8");
    echo implode(PHP_EOL, $captions);
  }
}
