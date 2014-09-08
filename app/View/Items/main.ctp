<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>新生活ネット通販みつもり君</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php echo $this->Html->css('bootstrap.min.css');?>
        <?php echo $this->Html->css('styles.css');?>
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
    <!--tMain-->
    <div class="container">
        <div class="col-md-12">
            <div class="center-block text-center">
                <h1>新生活ネット通販みつもり</h1>
                <p class="lead">初めての引っ越し。結局いくらかかるの？？引っ越しに必要なお金をさっさっと御見積します！！</p>
                <ol>
                  <li style="text-align:left">ボタンをクリックすると、アイテムが表示されます。</li>
                  <li style="text-align:left">アイテムをクリックすると、他のアイテムに変わります。</li>
                </ol>
            </div>

            <div class="center-block text-left" id="button">
            <?php foreach($data as $key => $value) {
                echo "<button type='button' id=".$key."_button class='btn btn-default' style='margin : 3px; width : 100px';>".$value['0']['Category']."</button>";
            }
            ?>
            </div>
            <div class="center-block text-left" id="button">
                <a href=javascript:location.reload()>
                <button type='button' id="clear" class='btn btn-info' style='margin : 3px; width : 100px';>クリア</button> 
                </a> 
            </div>

            <div class="center-block text-center">
                <div class="progress" style="background-color:#ffffff;">
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
                        echo"<div class='".$data[$key][0]['class']."' style='width: 0%' id=".$key."8>".$data[$key][0]['Category']."</div>";
                    }
                    ;?>
                </div>
            </div>

            <div class="container">
                <div class="menu row">
                    <div class="col-sm-8">
                        <div class="productsrow">
                            <?php foreach($data as $key => $value) {
                                echo "<a href = '' class='change' id=".$key."2 >";
                                echo    "<div class='product menu-category' id=".$key.">";
                                echo        "<div class='menu-category-name list-group-item active'>
                                                <button type='button' class='btn btn-default'>他の".$value['0']['Category']."を見る</button><span class='badge' style='font-size : 18pt'>".number_format($value['0']['Price'])."円</span>";
                                echo        "</div>";
                                echo        "<div class='product-image'>";
                                echo            "<img class='product-image menu-item list-group-item' src=".$value['0']['ImageUrl'].">";
                                echo        "</div>";
                                echo        "<a href=".$value['0']['Url']." class='menu-item list-group-item' target='_new'>".$value['0']['Name']."<br /><button type='button' class='btn btn-default'>購入する</button><span class='badge' style='font-size : 18pt'>売れ筋1位</span></a>";
                                echo    "</div>";
                                echo "</a>";

                            } ;?>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <table id="calculate" class="table">
                            <h1 style='text-align: right'>合計：<span id="sum">0</span>円</h1>
                            <tr><th>カテゴリー</th><th>単価</th><th>数量</th><th>小計</th></tr>
                            <?php foreach($data as $key => $value) {

                                echo "<tr class='line'>
                                    <td>".$value['0']['Category']."</td>
                                    <td id=".$key."3 style='text-align: right'>".number_format($value['0']['Price'])."円</td>
                                    <td>
                                    <button type='button' class='btn btn-default btn-xs plus' id=".$key."4>
                                    <span class='glyphicon glyphicon-plus'></span>
                                    </button>
                                    <button type='button' class='btn btn-default btn-xs minus' id=".$key."5>
                                    <span class='glyphicon glyphicon-minus'></span></button>
                                    <span id=".$key."6>1</span>
                                    </td>
                                    <td class='category_sum' id=".$key."7 style='text-align: right'>".number_format($value['0']['Price'])."円</td>
                                   </tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
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
        <?php echo $this->Html->script('main.js');?>
        <?php echo $this->Html->script('bootstrap.min.js');?>
	</body>
</html>