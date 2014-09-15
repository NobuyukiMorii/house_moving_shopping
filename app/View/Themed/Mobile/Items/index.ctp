
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
    <meta property="og:description" content="引っ越しの買い物って必要なアイテムをリストアップしたり、予算内でどう見繕うか悩んだり、結構頭使いますよね。Think Shopを使えば、引っ越しの思考が簡単になります。" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://mory.weblike.jp/house_moving_shopping/img/hatena.jpg" />
    <!-- FBのshare関連のメタタグここまで -->
    <link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico');?>">

    <title>Think Shop</title>
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->script('ie-emulation-modes-warning.js');?>
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body style="margin-top: 5%;">

    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <h4 style="color: green;" class="text-center">引っ越しってなに買うんだっけ？</h4>
        <img src="<?php echo $this->Html->url('/img/hatena.jpg');?>" class="img-responsive">
          <p style="margin-top: 8%;" class="text-center"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
      </div>
    </div>

    <div class="container" style="margin: 5%;">

      <hr class="featurette-divider">
      <h4 style="color: green;">ふつうの引っ越し</h4>
      <div class="row">
        <div class="col-sm-6 col-xs-6">
          <img class="img-responsive" src="<?php echo $this->Html->url('/img/hatena.jpg'); ?>" alt="Generic placeholder image" align="center">
        </div>
        <div class="col-sm-6 col-xs-6">
          <p>何を買うのか、いくらかかるのか分かりません。</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-xs-6">
          <img class="img-responsive" src="<?php echo $this->Html->url('/img/yosan.jpg'); ?>" alt="Generic placeholder image" align="center">
        </div>
        <div class="col-sm-6 col-xs-6">
          <p>お店やインターネットで情報収集するのは、大変です。</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-xs-6">
          <img class="img-responsive" src="<?php echo $this->Html->url('/img/nayami.jpg'); ?>" alt="Generic placeholder image" align="center">
        </div>
        <div class="col-sm-6 col-xs-6">
          <p>予算内に収めるのは、とても頭を使います。</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <h4 style="color: green;">Think Shopを使えば</h4>
      <div class="row featurette">
        <div class="col-sm-12 col-xs-12">
          <h3 class="featurette-heading">新生活のアイテムはリストアップ済み</h3>
          <p class="lead">引っ越しに必要なアイテムをクリックしていくだけで、あなたが必要としているアイテムだけが並ぶショップが完成します。</p>
        </div>
        <div class="col-sm-12 col-xs-12">
          <img style="margin-top: 6%;" class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/item_button.png'); ?>" alt="Generic placeholder image">
        </div>
      </div>

      <div class="row featurette">
        <div class="col-sm-12 col-xs-12">
          <h3 class="featurette-heading">あなたの買い物の決断をサポート</h3>
          <p class="lead">商品の予算ごとの割合をビジュアルで把握することで、予算と相談しながら買い物をすることが可能です。</p>
        </div>
        <div class="col-sm-12 col-xs-12">
          <img style="margin-top: 1%;" class="featurette-image img-responsive" src="<?php echo $this->Html->url('/img/rate.png'); ?>" alt="Generic placeholder image">
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
