<!DOCTYPE html>
<html lang="en">
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
<!--template-->
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container" style="">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sell</a>
        </div>
        <div class="collapse navbar-collapse" style="">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="" style="">Explore</a>

                </li>
                <li><a href="#" class="">Looks</a>

                </li>
                <li><a href="#" class="">Style</a>

                </li>
                <li><a href="#" class="">About</a>

                </li>
                <li><a href="#" class="" contenteditable="false">Sign in</a>

                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</div>

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
                        <tr><th>合計</th><th style='text-align: right'><span id="sum">0</span>円</th></tr>
                        <?php foreach($data as $key => $value) {

                            echo "<tr class='line'><td>".$value['0']['Category']."</td>
                                <td>
                                <button type='button' class='btn btn-default btn-xs plus' id=".$key."4>
                                <span class='glyphicon glyphicon-plus'></span>
                                </button>
                                <button type='button' class='btn btn-default btn-xs minus' id=".$key."5>
                                <span class='glyphicon glyphicon-minus'></span></button>
                                </td>
                                <td>1つ</td>
                                <td id=".$key."3 style='text-align: right'>".number_format($value['0']['Price'])."円</td></tr>";
                        }
                        ?>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<!--/template-->
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