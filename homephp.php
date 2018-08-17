<?php

  echo 'Hello world';

  $html = '
    <html>
        <body>
            <ul id="one">
                <li>hello</li>
                <li>hello2</li>
                <li>hello3</li>
                <li>hello4</li>
            </ul>
        </body>
      </html>';
      libxml_use_internal_errors(true);
      $doc = new DOMDocument();
      $doc->loadHTML($html);
      //get the element you want to append to
      $descBox = $doc->getElementById('one');
      //create the element to append to #element1
      $appended = $doc->createElement('li', 'This is a test element.');
      //actually append the element
      $descBox->appendChild($appended);
      echo $doc->saveHTML();

    /*$html = file_get_contents('index.html');
  $doc = new DOMDocument();
  libxml_use_internal_errors(true);

  $doc->loadHTML($html);
  $descBox = $doc->getElementById('feed');

  echo htmlspecialchars($descBox);
  */
?>
