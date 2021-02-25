<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>課題1-3</title>
</head>
<body>
  <?php
    $question["問題"] = "日本の首都は？";
    $answer["回答1"] = "大阪";
    $answer["回答2"] = "北海道";
    $answer["回答3"] = "箱根";
    $answer["回答4"] = "東京";
  ?>
  <h1><?php
    foreach($question as $key=>$value) {
      echo $key . '　' . $value;
    }
  ?></h1>
  <h2><?php
    foreach($answer as $keys=>$values) {
      echo $keys . '　' . $values . '<br/>';
    }
  ?></h2>
  </body>
</html>
