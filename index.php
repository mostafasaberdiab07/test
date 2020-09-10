<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="posts.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"/>
    <title></title>
  </head>
  <body>
    <div class="post-wrapper">
      <div class="username">
        <i class="fa fa-user fa-2x"></i>
        <h1><?php echo $post['username']; ?></h1>
      </div>
      <div class="post-img">
        <img src="img/bg.jpg" alt="">
      </div>
      <div class="post-bottom">
        <div class="post-text">
          <div class="likes">
            <h5>12 likes</h5>
          </div>
          <div class="comment">
            <h5>100 comments</h5>
          </div>
        </div>
        <i class="far fa-heart fa-2x" id="like"></i>
        <i class="far fa-comment fa-2x" id="comment"></i>
        <i class="far fa-paper-plane fa-2x" id="share"></i>
      </div>
    </div>

  </body>
</html>
