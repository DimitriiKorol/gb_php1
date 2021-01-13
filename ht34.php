<?php
$letters = [
  'а' => 'a',
  'б' => 'b',
  'в' => 'v',
  'г' => 'g',
  'д' => 'd',
  'е' => 'e',
  'ё' => 'yo',
  'ж' => 'zh',
  'з' => 'z',
  'и' => 'i',
  'й' => 'i',
  'к' => 'k',
  'л' => 'l',
  'м' => 'm',
  'н' => 'n',
  'о' => 'o',
  'п' => 'p',
  'р' => 'r',
  'с' => 's',
  'т' => 't',
  'у' => 'u',
  'ф' => 'f',
  'x' => 'h',
  'ц' => 'c',
  'ч' => 'ch',
  'ш' => 'sh',
  'щ' => 'sh',
  'ь' => '\'',
  'ы' => 'i',
  'ъ' => '\'',
  'э' => 'e',
  'ю' => 'yu',
  'я' => 'ya'
];

$res = "";

$string = "Цыган на цыпочках";

echo $string . "<br>";

for ($i = 0; $i < mb_strlen($string); $i++) {
  $strLetter = mb_substr($string, $i, 1);
  if (isset($letters[mb_strtolower($strLetter)])) {
    if ($strLetter === mb_strtolower($strLetter)) {
      $eng = $letters[$strLetter];
    } else {
      $eng = mb_strtoupper($letters[mb_strtolower($strLetter)]);
    }
  } else {
    $eng = $strLetter;
  }
  
  $res .= $eng;
}

echo $res;

?>
