<?php
function highlightedWord($word, $sentence) {
    $id = rand(0, 1000);

    if(!empty($word) && str_contains($sentence, $word)) {
        $original = explode($word, $sentence);
        $insertion = array( '<span class="gradient">'.  $word, '</span>' );
        array_splice( $original, 1, 0, $insertion );
        $sentence = implode($original);
    }
    
    return $sentence;
}