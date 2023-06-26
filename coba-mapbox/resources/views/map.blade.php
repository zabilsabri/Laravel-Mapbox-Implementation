<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <title>Map | Maroon 5</title>
</head>
<body>
    <x-mapbox id="mapId" style="height: 500px; width: 500px;"
        :center="['long' => 119.423790, 'lat' => -5.135399]"
        :markers="[['lat' => -5.185922, 'long' => 119.418743, 'description' => 'Rumah Zabil'], ['lat' => -5.171804, 'long' => 119.416492, 'description' => 'Sekolah Zabil']]" />
</body>
</html>