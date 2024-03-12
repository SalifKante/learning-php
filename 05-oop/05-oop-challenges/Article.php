<?php
//Challenge 1
class Article{
    //Properties
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function publish(){
        $this->published = true;
    }

    public function isPublished(){
        return $this->published;
    }
}

$article1 = new Article("Article 1", "content 1");
$article1->publish();
echo var_dump($article1->isPublished());
echo '<br>';
$article2 = new Article("Article 2", "content 2");
echo var_export($article2->isPublished());
echo '<br>';