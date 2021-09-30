<?php

function getWonders($db): array {
    $query = $db->prepare("SELECT `name`, `location`, `yearmade`, `yearvisit`, `images` FROM `wonders`");

    $query->execute();
    return $query->fetchAll();

}

function formatWonders(array $allWonders): string {
    $str =  '<div class="ihatethiscontainer">';

    foreach ($allWonders as $wonder) {
        $str .= '<div class="ihatethis">';
        $str .= '<div class="imagecontainer">';
        $str .= '<img src="' . getImagePath($wonder["images"]) . '"/>';
        $str .= '</div>';
        $str .= '<p class="nameinfo">' . $wonder["name"] . '</p>';
        $str .= '<p class="locationinfo">' . $wonder["location"] . '</p>';
        $str .= '<p class="yearmadeinfo">' . $wonder["yearmade"] . '</p>';
        $str .= '<p class="yearvisitinfo">' . $wonder["yearvisit"] . '</p>';
        $str .= '</div>';
    }
    $str .= '</div>';
    return $str;
}

function getImagePath(string $imagePath): string {
    $path = '';
    $imageStartsWith = substr($imagePath, 0, strlen('http'));
    if (!$imageStartsWith) {
        $path = 'https://via.placeholder.com/350/150';
    } elseif ($imageStartsWith === 'http') {
        $path = $imagePath;
    } else {
        $path = 'images/' . $imagePath;
    }
    return $path;
}

function addNewWonder(PDO $db, array $newWonder)
{
    $query = $db->prepare
        ('INSERT INTO `wonders` (`name`, `location`, `yearmade`, `images`)' .
            ' VALUES (:name, :location, :yearmade, "wondersofworld.jpg");'
    );
    return $query->execute($newWonder);
}


