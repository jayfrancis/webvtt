WebVTT
======

A package for adding and rendering WebVTT captions.

  $webVtt = new WebVTT\WebVTT();
  $webVtt->addCaption(1, 20, 'Text between 1-20 seconds');
  $webVtt->addCaption(20, 40, 'Text between 20-40 seconds');
  $webVtt->render();
