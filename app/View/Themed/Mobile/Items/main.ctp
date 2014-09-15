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
        <meta property="og:description" content="引っ越しの買い物って必要なアイテムをリストアップしたり、予算内でどう見繕うか悩んだり、結構頭使いますよね。Think Shopを使えば、引っ越しの思考が簡単になります。" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://mory.weblike.jp/house_moving_shopping/img/hatena.jpg" />
        <!-- FBのshare関連のメタタグここまで -->
        <?php echo $this->Html->css('bootstrap.min.css');?>
        <?php echo $this->Html->css('styles.css');?>
        <link rel="shortcut icon" href="<?php echo $this->Html->url('/favicon.ico');?>">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	</head>

	<body>
    <!--Main-->
        <div class="col-sm-12" id='page_title'>
            <h1 style="text-align : center">Think Shop</h1>
            <p class="lead" style="text-align : center">「考えて買う」をスマートに</p>
        </div>

        <div class="col-sm-12 col-xs-12" style='text-align: center;'>
            <div class="btn-group" style='margin : 5px; width:100%;'>
                <button type="button" id="genre" class="btn btn-primary btn-lg">ジャンル</button>
                <button type="button" id="analist_block_button" class="btn btn-default btn-lg">お見積</button>
                <button type="button" id="budget-change-button" class="btn btn-default btn-lg">予算</button>
                <button type="button" id="detail" class="btn btn-default btn-lg">詳細</button>
            </div>
        </div> 

        <div class="col-sm-12 col-xs-12" style='margin-top: 20px;' style='margin-bottom: 0px;'>
            <div class="text-left" id="button">
                <label>ジャンル</label><br />
                <?php foreach($data as $key => $value) {
                    echo "<button type='button' id=".$key."_button class='btn btn-default btn-' style='margin : 5px; width : 130px';>".$value['0']['Category']."</button>";
                }
                ?>
            </div>
        </div>

        <div>
            <div class="col-sm-12 col-xs-12">
                <div id="cart">
                    <div class="productsrow">
                        <label>アイテム</label><br />
                        <?php foreach($data as $key => $value) {
                            echo "<div class='col-sm-4 col-xs-4' style='padding: 0px;'>";
                            echo "<a href = '' class='change' id='".$key."2'>";
                            echo    "<div class='product menu-category' id=".$key." style='margin: 5px  5px 5px 5px;'>";
                            echo        "<div class='menu-category-name list-group-item active col-sm-12' style='background-color:#f5f5f5; border-color:#ddd;'>

                                                <span class='price_html' style='font-size : 10pt;'>".number_format($value['0']['Price'])."円</span>";
                            echo        "</div>";
                            echo        "<div class='product-image'>";
                            echo            "<img class='product-image menu-item list-group-item' src=".$value['0']['ImageUrl'].">";
                            echo        "</div>";
                            echo        "<a href=".$value['0']['Url']." class='menu-item list-group-item' target='_new'><button type='button' class='btn btn-default btn-block'>購入する</button></a>";
                            echo    "</div>";
                            echo "</a>";
                            echo "</div>";

                        } ;?>
                    </div>
                </div>
            </div>
        </div>

        <div id="analist_block">
            <div class="col-sm-12 col-xs-12" style='margin : 5px;'>
                <label>御見積もり</label>
                <table class="table table-bordered">
                    <tr bgcolor="#f5f5f5">
                        <th>割合</th><th>合計額</th><th>残り予算</th>
                    </tr>
                    <tr>
                        <td style='text-align: center'><h6 id="sum_percentage">0%</h6></td>
                        <td style='text-align: center'><h6><span id="sum">0</span>円</h6></td>
                        <td style='text-align: center'><h6><span id="rest">0</span>円</h6></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="col-sm-12 col-xs-12" style='margin-bottom: 5px;' id="select_budget_control" style='margin-top : 5px;'>
            <label>予算</label><br />
            <select name="budget" class="form-control" id="select_box">
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

        <div class="col-sm-12 col-xs-12">
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
        </div>

        <div class="col-sm-12 col-xs-12" id='table'>
            <label>詳細</label>
            <table class="table table-bordered" style='margin : 5px;'>
                <tr bgcolor="#f5f5f5"><th>ジャンル</th><th>価格</th><th>数量</th><th>小計</th><th>割合</th></tr>
                <?php foreach($data as $key => $value) {

                    echo "<tr class='line'>
                        <td>".$value['0']['Category']."</td>
                        <td id='".$key."3' style='text-align: right'>".number_format($value['0']['Price'])."円</td>
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
        </div> 

        <div class="col-sm-12 col-xs-12">
            <div>
                <a href=javascript:location.reload()>
                    <button type="button" id="clear" class="btn btn-info btn-lg btn-block" style='margin : 5px;'>クリア</button>
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