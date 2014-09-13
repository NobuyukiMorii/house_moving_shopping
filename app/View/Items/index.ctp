
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- FBのshare関連のメタタグ -->
    <meta property="og:site_name" congtent="Think Shop" />
    <meta property="og:title" content="Thnk Shop" />
    <meta property="og:url" content="http://mory.weblike.jp/house_moving_shopping/Items/main" />
    <meta property="og:description" content="引っ越しの買い物って、新生活に必要なものをリストアップしたり、予算内でどうやって物を揃えるのか悩んだり、結構頭使いますよね。Think Shopを使えば、リストアップしながら費用や予算の計算が出来て、とっても簡単。引っ越しには Think Shop。" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://mory.weblike.jp/house_moving_shopping/img/shopping_cart.jpg" />
    <!-- FBのshare関連のメタタグここまで -->
    <link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico');?>">

    <title>Think Shop</title>
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->script('ie-emulation-modes-warning.js');?>
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    <div> 
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
          <div class="item active">
            <div class="col-md-5 col-sm-12">
              <img src="<?php echo $this->Html->url('/img/hatena.jpg');?>" class="img-responsive" align="right">
            </div>
            <div class="col-md-7 col-sm-12">
              <div style="color: green;" align="center">
                <h1 style="margin: 20% 0% 0% 0%;">引っ越しってなに買うんだっけ？</h1>
                <p style="margin: 10% 0% 0% 0%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="container marketing">

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">新生活のアイテムを簡単に</span>リストアップ</h2>
          <p class="lead">「引っ越しって何が必要なの？」<br />Think Shopは、引っ越しに必要なアイテムをクリックしていくだけで、あなたが必要としているアイテムだけが並ぶショップが完成します。</p>
          <p><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
        </div>
        <div class="col-md-5">
          <img style="margin-top: 6%;" class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/item_button.png'); ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img style="margin-top: 4%;" class="featurette-image img-responsive" src="<?php echo $this->Html->url('/img/analystic2.png'); ?>" alt="Generic placeholder image">
          <img class="featurette-image img-responsive" src="<?php echo $this->Html->url('/img/analystic3.png'); ?>" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">リストアップしながら</span>予算感がつかめます</h2>
          <p class="lead">「引っ越しって、いくらかかるの？」<br />引っ越しが初めての時って、いくらかかるのか検討もつきませんよね。Think Shopなら、リストアップしながら、大体の予算間がつかめます。</p>
        </div>
        <div class="col-md-10">
          <img style="margin-top: 1%;" class="featurette-image img-responsive" src="<?php echo $this->Html->url('/img/rate.png'); ?>" alt="Generic placeholder image">
        </div>
        <div class="col-md-1">
          <p  align="right"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">商品価格の予算に対する</span>割合<span class="text-muted">が分かります</span></h2>
          <p class="lead">「限られた予算の中で、何を買おう？」<br />Think Shopなら、リストアップした商品が予算の何％か簡単に分かります。何にお金をかけて、何にお金をかけないか、あなたの判断をサポートします。</p>
          <p style="margin-top: 13%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/line.png'); ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <h2 class="featurette-heading"><span class="text-muted">スクリーンショット</span></h2>
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/sample3.png'); ?>" alt="Generic placeholder image">
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/screenshot3.png'); ?>" alt="Generic placeholder image">
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-body">
              <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/user_image.png'); ?>" alt="Generic placeholder image">
            </div>
          </div>
      </div>

      <hr class="featurette-divider">

      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Think Shop</p>
      </footer>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    <?php echo $this->Html->script('docs.min.js');?>
    <?php echo $this->Html->script('ie10-viewport-bug-workaround.js');?>
  </body>
</html>
