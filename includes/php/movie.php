<?php
class movie {
  private $title;
  private $image;
  private $description;
  private $path;

  public function __construct($title, $image, $description, $path) {
    $this->title = $title;
    $this->image -> $image;
    $this->description = $description;
    $this->path = $path;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getImage() {
    return $this->image;
  }

  public function getDescription() {
    return $this->description;
  }

  public function getPath() {
    return $this->path;
  }
}