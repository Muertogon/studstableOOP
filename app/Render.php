<?php
namespace ProductsApp;

class Render{
    static public function Show($data){
        foreach($data as $item){
            echo '<th>'.$item.'</th>';
        }
    }
}