<?php


class ButtonView {
  

  /*
    One render function to render everything to
     ther client in the beginning.

     Function retuturns 25 buttons.
  */
  public function render() {
    $alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'M', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $alphabetString = '';
    $returnString = '';
    for ($i = 0; $i < count($alphabet); $i++) {

        $alphabetString = '<input name="character" type="submit" value="' . $alphabet[$i] . '">  </input>';
        $returnString .= $alphabetString;
    }

    return $returnString;
  }

}
