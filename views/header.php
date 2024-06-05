<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Image gallery</title>
    <style>
    .deck {
        display: flex;
        flex-flow: wrap;
        align-items: center;
        justify-content: center;
        margin: auto;
    }

    .card {
        border: 3px solid gray;
        border-radius: 10px;
        margin: 10px;
        width: 250px;
        align-self: flex-start;
        position: relative;
    }

    .cardTitle {
        margin-top: -20px;
        text-align: center;
        text-decoration: underline;
        height: 20px;
    }

    .cardBody {
        margin-top: 50px;
        width: 100%;
        margin-bottom: -7px;
    }
    </style>
</head>

<body>
    <header>
        <a href="gallery.php">
            <h1>Image gallery</h1>
        </a>
        <p>Capturing Moments &bull; Creating Memories</p>
    </header>
    <main>