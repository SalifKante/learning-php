<?php
  interface ContentInterface{
    public function display();
    public function edit();
  }

  //When a class implement an Interface it should implement all the method inside
  class Article implements ContentInterface{
    private $title;
    private $content;

    public function __construct($title, $content){
      $this->title = $title;
      $this->content = $content;
    }
    public function display(){
      echo "<h2>{$this->title}</h2>";
      echo "<h2>{$this->content}</h2>";
    }
    public function edit(){
      echo "Editing the article '{$this->title}'";
    }
  }

  class Video implements ContentInterface{
    private $title;
    private $url;


    public function __construct($title, $content){
      $this->title = $title;
      $this->url = $content;
    }
    public function display(){
      echo "<h2>{$this->title}</h2>";
      echo "<iframe src='{$this->url}'></h2>";
    }
    public function edit(){
      echo "Editing the video '{$this->title}'";
    }

  }

$article = new Article('Introduction to PHP', 'PHP is a vertisile scripting language');
$video = new Video('PHP for Beginers', 'https://www.youtube.com/embed/watch?v=d_l3M9KA1Ho&list=PLlxQJeQRaKDRlWW9QXcxhcKo2Ni_CV6fp&ab_channel=LESTEACHERSDUNET');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">

  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>


  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?= $article->display() ?>
      <?= $article->edit() ?>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?= $video->display() ?>
      <?= $video->edit() ?>
    </div>
  </div>

</body>

</html>