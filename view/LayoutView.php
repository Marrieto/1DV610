<?php


class LayoutView {
  

  /*
    One render function to render everything to
     ther client in the beginning
  */
  public function render() {
    echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Login Example</title>
        </head>
        <body>
          <h1>Assignment 2</h1>
          
          <div class="container">
              ' . "Empty container" . '
          </div>
         </body>
      </html>
    ';
  }
}
