<?php

namespace App\Livewire;

use Livewire\Component;

class UsersReview extends Component
{
    public $users = [
        [
            "id" => 1,
            "name" => "Brittan Wheeler",
            "image" => "Brittan_Wheeler.png",
            "rank" => "Consultant",
            "comment" => '"You made it so simple."',
            "rating" => 4
        ],
        [
            "id" => 2,
            "name" => "Alexa Popen",
            "image" => "Alexa_Popen.png",
            "rank" => "CEO",
            "comment" => '"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us."',
            "rating" => 3
        ],
        [
            "id" => 3,
            "name" => "Leslie Alexander",
            "image" => "Leslie_Alexander.png",
            "rank" => "Founder",
            "comment" => '"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us."',
            "rating" => 5
        ],
        [
            "id" => 4,
            "name" => "Leslie Alexander",
            "image" => "Leslie_Alexander.png",
            "rank" => "Founder",
            "comment" => '"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us."',
            "rating" => 5
        ],
        [
            "id" => 5,
            "name" => "Leslie Alexander",
            "image" => "Leslie_Alexander.png",
            "rank" => "Founder",
            "comment" => '"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us."',
            "rating" => 5
        ],
        [
            "id" => 6,
            "name" => "Leslie Alexander",
            "image" => "Leslie_Alexander.png",
            "rank" => "Founder",
            "comment" => '"You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us."',
            "rating" => 5
        ],
    ];
    public function render()
    {
        return view('livewire.users-review');
    }
}
