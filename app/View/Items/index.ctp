
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
  <body style="margin-top: 5%;">

    <div class="row">
      <div class="col-md-5 col-sm-12">
        <img src="<?php echo $this->Html->url('/img/hatena.jpg');?>" class="img-responsive" align="right">
      </div>
      <div class="col-md-7 col-sm-12">
        <div style="color: green;" align="center">
          <h1 style="margin-top: 20%;">引っ越しってなに買うんだっけ？</h1>
          <p class="lead" style="margin-top: 3%;">Think Shopは引っ越しの思考をスマートします。<p>
          <p style="margin-top: 8%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
        </div>
      </div>
    </div>

    <div class="container marketing">

      <hr class="featurette-divider">
      <h1 style="color: green;">ふつうの引っ越し</h1>
      <div class="row" style="margin-top: 3%;">
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo $this->Html->url('/img/hatena.jpg'); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;" align="center">
          <h2>①引っ越しが決まる</h2>
          <p>あなたは２週間後の入居日からすぐに生活出来るように、お買い物をしなければなりません。<br />でも、揃えるものが多すぎて、<strong>何を買うのか、いくらかかる</strong>のか分かりません。</p>
        </div>
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo $this->Html->url('/img/yosan.jpg'); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>②リストアップ</h2>
          <p>あなたはインターネットを検索して、引っ越しに何が必要か調べます。googleで<strong>色々なサイト</strong>を検索し、<strong>沢山のWEBページ</strong>を見て、メモにアイテムをリストアップしていきます。</p>
        </div>
        <div class="col-lg-4">
          <img class="img-responsive" src="<?php echo $this->Html->url('/img/nayami.jpg'); ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>③取捨選択</h2>
          <p>リストアップが終わりました！頑張りましたね！<br />でも、リストアップした商品を全部買ったら予算オーバーです。あなたは<strong>どれかのアイテムを買わないか、より安いものを選ぶ決断</strong>に迫られます。</p>
        </div>
      </div>

      <hr class="featurette-divider">
      <h1 style="color: green;">Think Shopを使えば</h1>
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
          <h1 style="color: green;">Think Shopを使えば</h1>
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
          <h1 style="color: green;">Think Shopを使えば</h1>
          <h2 class="featurette-heading"><span class="text-muted">アイテムの</span>取捨選択<span class="text-muted">が簡単です</span></h2>
          <p class="lead">「限られた予算の中で、何を買おう？」<br />Think Shopなら、リストアップした商品が予算の何％か簡単に分かります。何にお金をかけて、何にお金をかけないか、あなたの取捨選択の判断をサポートします。</p>
          <p style="margin-top: 6%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/line.png'); ?>" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <h1 style="color: green;">使い方</h1>
        <div class="row">
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/sample4.png'); ?>" alt="Generic placeholder image">
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="featurette-heading"><span class="text-muted">スタート</span></h2>
            <p class="lead">アイテムを１つ選んで、Think Shoppingをスタート。</p>
          </div>
            <p style="margin-top: 6%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
        </div>

        <div class="row">
          <div class="col-md-3">
            <h2 class="featurette-heading"><span class="text-muted">カスタマイズ</span></h2>
            <p class="lead">あなたに合わせたオリジナルのショッピングカートを作成しましょう！</p>
            <p style="margin-top: 6%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/practice2.png'); ?>" alt="Generic placeholder image">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/bunseki.png'); ?>" alt="Generic placeholder image">
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="featurette-heading"><span class="text-muted">分析</span></h2>
            <p class="lead">予算と買い物の金額を分析しながら、買い物をしましょう！</p>
            <p style="margin-top: 6%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
          </div>
        </div>


        <div class="row">
          <div class="col-md-3">
            <h2 class="featurette-heading"><span class="text-muted">購入</span></h2>
            <p class="lead">購入する商品が決まったら、「購入する」ボタンを押してアイテムを購入しましょう！</p>
            <p style="margin-top: 6%;"><a class="btn btn-lg btn-default" href="<?php echo $this->Html->url('/Items/main') ;?>" role="button">Think Shop</a></p>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-body">
                <img class="featurette-image img-responsive" align="right" src="<?php echo $this->Html->url('/img/user_image.png'); ?>" alt="Generic placeholder image">
              </div>
            </div>
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
