<?php
$month = date('n');
if ($month >= 2 && $month <= 4) {
    $season = "spring";
} else if ($month >= 5 && $month <= 7) {
    $season = "summer";
} else if ($month >= 8 && $month <= 9) {
    $season = "rainy";
} else if ($month >= 10 && $month <= 11) {
    $season = "autumn";
} else {
    $season = "winter";
}

$seasonData = [
    "spring" => [
        "title" => "🌼 Spring Season",
        "time" => "February - April",
        "weather" => ["Mild heat", "Blooming flowers", "Gentle breeze"],
        "info" => "Ideal for planting summer vegetables and harvesting late winter crops.",
        "image" => "spring.jpg"
    ],
    "summer" => [
        "title" => "☀️ Summer Season",
        "time" => "May - July",
        "weather" => ["High temperature", "Occasional thunderstorms", "Humidity"],
        "info" => "Perfect for tropical fruits like Mangoes, Jackfruit, and Aus rice.",
        "image" => "summer.jpg"
    ],
    "rainy" => [
        "title" => "🌧️ Rainy Season",
        "time" => "August - September",
        "weather" => ["Heavy rainfall", "High humidity", "Flood risks"],
        "info" => "Best time for Aman rice cultivation and jute soaking.",
        "image" => "rainy.jpg"
    ],
    "autumn" => [
        "title" => "🌾 Fall (Autumn) Season",
        "time" => "October - November",
        "weather" => ["Moderate temperature", "Clear blue skies", "Good soil moisture"],
        "info" => "Ideal for short-duration crops, vegetables, pulses, and oilseeds.",
        "image" => "autumn.jpg"
    ],
    "winter" => [
        "title" => "❄️ Winter Season",
        "time" => "December - January",
        "weather" => ["Cool and dry", "Morning fog", "Low rainfall"],
        "info" => "The peak season for Boro rice and a wide variety of winter vegetables.",
        "image" => "winter.jpg"
    ]
];

$current = $seasonData[$season];
?>
