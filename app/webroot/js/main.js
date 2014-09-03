//合計金額を取得する
var sum = $("#sum").html();
sum = new Array(sum.split( '円' ));
sum = sum[0][0];
sum = Number(sum);

$(function(){
	//ボタンのDOMを取得する
	var button = $("#button").children(".btn");
	//アイテムのDOMを取得する
	var product = $(".productsrow").children(".product");
	//見積表のDOMを取得する
	var line = $(".line");
	//アイテムの金額を取得する
	var price = $(".product").find(".active").find(".badge").clone(true);
	price = $(price).text();
	price = new Array(price.split( '円' ));
	price = price[0];
	for(var i = 0; i < price.length; i++) {
		price[i] = Number(price[i]);
	}

	//アイテムのカテゴリーを取得する
	var category = [];
	$("button").each(function() {
		category.push($(this).text());
	});
	category.shift();
	//アイテムのDOMを全て非表示にする
	for(var i =0; i < product.length; i++) {
    	$(product[i]).css("display", "none");
    	$(line[i]).css("display", "none");
    }
	//ボタンを押すと、対象のボタンの色が変わる
	function change_button_color(i) {
		$(button[i]).click(function(){
			$(product[i]).toggle();
			$(line[i]).toggle();

		    if($(this).hasClass("btn-default")) {
				$(button[i]).removeClass("btn-default");
				$(button[i]).addClass("btn-primary");
				sum = sum + price[i];
				$("#sum").text(sum);
			} else {
				$(button[i]).removeClass("btn-primary");
				$(button[i]).addClass("btn-default");
				sum = sum - price[i];
				$("#sum").text(sum);
			}
		});
	}
	for(i=0; i<button.length; i++){
		change_button_color(i);
	}

});	

function clear_display() { 
	//ボタンのDOMを取得する
	var button = $("#button").children(".btn");
	//アイテムのDOMを取得する
	var product = $(".productsrow").children(".product");
	//見積表のDOMを取得する
	var line = $(".line");
	$(product).css("display", "none");
	$(line).css("display", "none");
	$("#sum").html("0");
	sum = 0;
	$(button).removeClass("btn-primary");
	$(button).addClass("btn-default");
}


//①クリックされたアイテムを検知する（何がクリックされたか。テレビなのか洗濯機なのか）
//②jsのオブジェクトの中から、クリックされたアイテムがキーのurlを選択する（どうする？？）
//③上記のurlをセットして、ajax通信を始める
//④成功したら、今表示しているアイテムのhtmlを書き換える（名前と値段とsrcの画像urlと商品名）

//アイテムのキーを全部取得
var items = [];
$("a.change").each(function() {
    items.push($(this).next("div.menu-category").attr('id'));
});
var items = $.grep(items, function(e){return e !== undefined;});
//アイテムの単体を取得
var item =  $('a.change').next("div").attr("id");

$(document).ready(function(){
    $('a').click(function(e){
        e.preventDefault();
    	//①クリックされたアイテムのidを検知する
		var clicked_item = $(this).attr('id');
		clicked_item = clicked_item.slice(0, -1);
		//②jsのオブジェクトの中から、クリックされたアイテムがキーのurlを選択する（どうする？？）
		var access_url = js_url[clicked_item];
		//③書き換える対象の変数を定義する
        var new_price = $(this).children('.active').children('span');
        var new_image = $(this).children('.product-image').children('img');
        var new_name = $(this).next('a');
        //④アイテムがクリックされた回数をカウントする
        var click_count = 0;
		$(this).click(function(){
				click_count++;
		});
		//⑤ajax通信を始める
        $.ajax({
            url: access_url,
            dataType: 'jsonp', // 追加
            success: function(json) {
            	var data = json["ResultSet"][0]["Result"];
            	delete data['Request']; 
            	delete data['Modules'];
            	delete data['_container'];
            	//値段と画像を定義する
            	console.log(data[15]['Name']);//名前
            	console.log(data[15]['ExImage']['Url']);//画像
            	console.log(data[15]['Price']['_value']);//値段
            	//これをhtmlを書き換える
            	$(new_price).html(data[15]['Price']['_value']);
            	$(new_image).attr("src",data[15]['ExImage']['Url']);
            	$(new_name).html(data[15]['Name']);
            	//


            },
            error: function(json) {
                alert('データが読み込まれませんでした');
            }
        });		







    });
});
