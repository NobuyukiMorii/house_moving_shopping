<!DOCTYPE html>
<html lang="ja">
    <!-- OGPを利用 -->
	<head prefix="og: http://ogp.me/ns#  website: http://ogp.me/ns/website#">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Think Shop</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=3, maximum-scale=1">
        <!-- FBのshare関連のメタタグ -->
        <meta property="og:site_name" congtent="Think Shop" />
        <meta property="og:title" content="Thnk Shop" />
        <meta property="og:url" content="http://mory.weblike.jp/house_moving_shopping/Items/main" />
        <meta property="og:description" content="引っ越しの買い物って予算を決めたり、買う物をリストアップしたり、とても大変。Think Shopを使えば、「何を買えばいいのか？いくら位かかるのか？何にお金をかけて？何にお金をかけないか？」などの考え事を、画面を見ながら簡単に出来ます。引っ越しのお供にThink Shop。" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://mory.weblike.jp/house_moving_shopping/img/shopping_cart.jpg" />
        <?php echo $this->Html->css('bootstrap.min.css');?>
        <?php echo $this->Html->css('styles.css');?>
        <link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico');?>">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<body>
    <!--tMain-->
        <div class="col-sm-12" id='page_title'>
            <h1 style="text-align : center">Think Shop</h1>
            <p class="lead" style="text-align : center">「考えて買う」をスマートに</p>
        </div>

        <div id="analist_block">
            <div class="col-sm-3">
                <div class="panel panel-default" style="height :154px">
                    <div class="panel-heading"><h3 class="panel-title" style="text-align : center">パーセンテージ</h3></div>
                    <div class="panel-body">
                        <h2 style='text-align: center'><span id="sum_percentage">0%</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-default" style="height :154px">
                    <div class="panel-heading"><h3 class="panel-title" style="text-align : center">合計額</h3></div>
                    <div class="panel-body">
                        <h2 style='text-align: center'><span id="sum">0</span>円</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="panel panel-default" style="height :154px">
                    <div class="panel-heading"><h3 class="panel-title" style="text-align : center">残り予算</h3></div>
                    <div class="panel-body">
                        <h2 style='text-align: center'><span id="rest">0</span>円</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-3" style="float : right;">
                <div class="panel panel-default" style="height :154px">
                    <div class="panel-heading"><h3 class="panel-title" style="text-align : center">予算</h3></div>
                    <div class="panel-body">
                        <select name="budget" class="form-control" style="height: 50px; font-size: 30px; margin-top: 13px;">
                            <?php
                            for($i=10000; $i<=1000000; $i = $i +10000) {
                                if($i === 200000){
                                    echo "<option selected='selected'>".number_format($i)."円</option>";
                                } else {
                                    echo "<option>".number_format($i)."円</option>";
                                }
                            }
                            ;?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="progress">
                <?php 
                $i = 0;
                foreach($data as $key => $value) {
                    $i++;
                    if($i % 5 === 0) {
                        $data[$key][0]['class'] = 'progress-bar progress-bar-success';
                    } elseif($i % 4 === 0) {
                        $data[$key][0]['class'] = 'progress-bar progress-bar-info';
                    } elseif($i % 3 === 0) {
                        $data[$key][0]['class'] = 'progress-bar progress-bar-warning';
                    } elseif($i % 2 === 0) {
                        $data[$key][0]['class'] = 'progress-bar progress-bar-danger';
                    } else {
                        $data[$key][0]['class'] = 'progress-bar';
                    }
                    echo"<div class='".$data[$key][0]['class']."' style='width: 0%;' id=".$key."8>".$data[$key][0]['Category']."<span id='piece_percentage'></span></div>";
                }
                ;?>
            </div>
            <div class="panel panel-default" id="cart">
            <div class="productsrow">
                <?php foreach($data as $key => $value) {
                    echo "<div class='right'>";
                    echo "<a href = '' class='change' id='".$key."2'>";
                    echo    "<div class='product menu-category' id=".$key.">";
                    echo        "<div class='menu-category-name list-group-item active col-sm-12' style='background-color:#f5f5f5; border-color:#ddd;'>
                                    <div class='text-left col-sm-6'>
                                        <span style='font-size : 10pt;'>".$value['0']['Category']."</span>
                                    </div>
                                    <div class='text-right col-sm-6'>
                                        <span class='price_html' style='font-size : 10pt;'>".number_format($value['0']['Price'])."円</span>
                                    </div>";
                    echo        "</div>";
                    echo        "<div class='product-image'>";
                    echo            "<img class='product-image menu-item list-group-item' src=".$value['0']['ImageUrl'].">";
                    echo        "</div>";
                    echo        "<a href=".$value['0']['Url']." class='menu-item list-group-item' target='_new'>".$value['0']['Name']."<br /><button type='button' class='btn btn-default btn-block'>購入する</button></a>";
                    echo    "</div>";
                    echo "</a>";
                    echo "</div>";

                } ;?>
            </div>
            </div>
        </div>

        <div class="col-sm-3" style="float: right">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title" style="text-align : center">アイテム</h3></div>                
                <div class="panel-body">

                    <div class="text-left" id="button">
                        <?php foreach($data as $key => $value) {
                            echo "<button type='button' id=".$key."_button class='btn btn-default' style='margin : 3px; width : 100px';>".$value['0']['Category']."</button>";
                        }
                        ?>
                    </div>
                </div>
            </div>

            <table class="table table-bordered">
                <tr id='table_header' bgcolor="#f5f5f5"><th>アイテム</th><th>価格</th><th>数量</th><th>小計</th><th>割合</th></tr>
                <?php foreach($data as $key => $value) {

                    echo "<tr class='line'>
                        <td>".$value['0']['Category']."</td>
                        <td id=".$key."3 style='text-align: right'>".number_format($value['0']['Price'])."円</td>
                        <td>
                            <div style='text-align: left'>
                                <button type='button' class='btn btn-default btn-xs plus' id=".$key."4>
                                <span class='glyphicon glyphicon-plus'></span>
                                </button>
                                <button type='button' class='btn btn-default btn-xs minus' id=".$key."5>
                                <span class='glyphicon glyphicon-minus'></span></button>
                                <span id=".$key."6>1</span>
                            </div>
                        </td>
                        <td class='category_sum' id=".$key."7 style='text-align: right'>".number_format($value['0']['Price'])."円</td>
                        <td class='category_sum' id=".$key."9 style='text-align: right'>100%</td>
                       </tr>";
                }
                ?>
            </table>

            <div class="text-right">
                <a href=javascript:location.reload()>
                    <button type="button" id="clear" class="btn btn-info btn-lg btn-block" style='margin : 3px;'>クリア</button>
                </a> 
            </div>
        </div>     

    <!--/Main-->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script type="text/javascript">
            //phpで作成した配列（js_url）をjsに渡す
            var js_url = [];
            <?php 
            foreach($js_url as $key => $value) {
                $js_url = "js_url['".$key."'] = '".$value."'; ";
                echo $js_url;
            }
            ;?>

        </script>
        <?php echo $this->Html->script('yure.js');?>
        <?php echo $this->Html->script('main.js');?>
        <?php echo $this->Html->script('bootstrap.min.js');?>
	</body>
</html>