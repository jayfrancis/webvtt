<?php
namespace JayFrancis\WebVTT;

class Caption
{
  private $_startSecond;
  private $_endSecond;
  private $_text;

  function __construct($startSecond, $endSecond, $text)
  {
    $this
    ->setStartSecond($startSecond)
    ->setEndSecond($endSecond)
    ->setText($text);
  }

  public function render()
  {
    $startTime = gmdate("i:s.000", $this->getStartSecond());
    $endTime = gmdate("i:s.000", $this->getEndSecond());

    $caption = sprintf(
      '%s --> %s%s%s%s',
      $startTime,
      $endTime,
      PHP_EOL,
      $this->getText(),
      PHP_EOL
    );

    return $caption;
  }

  /**
   * @param $startSecond
   *
   * @return Caption
   */
  public function setStartSecond($startSecond)
  {
    $this->_startSecond = $startSecond;

    return $this;
  }

  public function getStartSecond()
  {
    return $this->_startSecond;
  }

  /**
   * @param $endSecond
   *
   * @return Caption
   */
  public function setEndSecond($endSecond)
  {
    $this->_endSecond = $endSecond;

    return $this;
  }

  public function getEndSecond()
  {
    return $this->_endSecond;
  }

  /**
   * @param $text
   *
   * @return Caption
   */
  public function setText($text)
  {
    $this->_text = $text;

    return $this;
  }

  public function getText()
  {
    return $this->_text;
  }
}
