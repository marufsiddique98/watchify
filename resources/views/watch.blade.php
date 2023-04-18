<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Material Icons -->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/home.css" />
    <title>Watchify - Watch</title>
  </head>
  <body>
    <x-navbar/>

    <!-- Main Body Starts -->
    <div class="p-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 col-xxl-9">
                <div>
                    <img src="https://img.youtube.com/vi/PpXUTUXU7Qc/maxresdefault.jpg" class="video_watch" alt="" />
                    <div class="video__details">
                        <div class="author">
                            <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
                        </div>
                        <div class="title">
                            <a href="/">
                                <h3>FutureCoders</h3>
                            </a>
                            <span>10M Views • 10M Likes • 1 years Ago</span>
                        </div>
                    </div>
                </div>

                <div class="comments">
                    <form action="" method="post">
                        @csrf
                        <textarea style="width: 100%;" name="" id="" cols="30" rows="10"></textarea>
                        <div style="display: flex; justify-content:flex-end;">
                            <input class="submit" type="submit" value="Comment">
                        </div>
                    </form>
                    <div class="comment">
                        <div class="author">
                            <img src="http://aninex.com/images/srvc/web_de_icon.png" alt="" />
                        </div>
                        <div class="title">
                            <a href="/"><h3>FutureCoders</h3></a>
                            <span style="margin-left: 15px;">Such a nice content</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 col-xxl-3">
                <h3>Related</h3>
                <div class="related">
                    <div class="related-content">
                        <div style="width:50%;"><img src="https://img.youtube.com/vi/PpXUTUXU7Qc/maxresdefault.jpg" alt="" /></div>
                        <div style="width:50%; padding-left: 10px;">
                            <h3 style="margin-left: 0px;">Related</h3>
                            <span>Such a nice content</span> <br>
                            <div style="display: inline; color:white;">
                                <i class="fa-solid fa-thumbs-up"></i> 10
                                <i class="fa-solid fa-comment"></i>10
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/home.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- Main Body Ends -->
  </body>
</html>
