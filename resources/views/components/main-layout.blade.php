<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Material Icons -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="http://localhost:8000/css/home.css" />
    <script src="https://cdn.jsdelivr.net/npm/agora-rtc-sdk@3.6.11/AgoraRTCSDK.min.js"></script>
    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet" />
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/web3/1.6.1/web3.min.js"
        integrity="sha512-5erpERW8MxcHDF7Xea9eBQPiRtxbse70pFcaHJuOhdEBQeAxGQjUwgJbuBDWve+xP/u5IoJbKjyJk50qCnMD7A=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer">
</script>

    <title>Watchify</title>
  </head>
  <body>
    <x-navbar/>

    {{$slot}}
    <script src="http://localhost:8000/js/home.js"></script>
    <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- Main Body Ends -->
  </body>
</html>
