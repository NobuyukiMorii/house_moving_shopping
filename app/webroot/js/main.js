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
		price[i] = delComma1(price[i]);
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
    //カンマ区切りにする関数
	function addFigure(str) {
	var num = new String(str).replace(/,/g, "");
	while(num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
	return num;
	}
	//カンマを削除する関数
	function delComma1(w) {
	    var z = w.replace(/,/g,"");
	    return (z);
	}
	//ボタンを押すと、対象のボタンの色が変わる
	function change_button_color(i) {
		$(button[i]).click(function(){
			$(product[i]).toggle();
			$(line[i]).toggle();
			//押されたボタンのキーを取得する
			var pushed = $(this).attr("id");
			pushed = pushed.slice(0, -7);
			//pushedと同じキーを持ったラインか、アイテムの料金を取得する
	    	var target = pushed + '3';
	    	var line_price = $('.line').find('#' + target);
	    	//引く金額を取得する
	    	var control_price = $(line_price).html();
	    	control_price = new Array(control_price.split( '円' ));
	    	control_price = control_price[0][0];
	    	control_price = delComma1(control_price);
	    	control_price = Number(control_price);
		    if($(this).hasClass("btn-default")) {
				$(button[i]).removeClass("btn-default");
				$(button[i]).addClass("btn-primary");
				sum = sum + control_price;
				sum_comma = addFigure(sum);
				$("#sum").text(sum_comma);
			} else {
				$(button[i]).removeClass("btn-primary");
				$(button[i]).addClass("btn-default");
				sum = sum - control_price;
				sum_comma = addFigure(sum);
				$("#sum").text(sum_comma);
			}
		});
	}
	for(i=0; i<button.length; i++){
		change_button_color(i);
	}

});

//①クリックされたアイテムを検知する（何がクリックされたか。テレビなのか洗濯機なのか）
//②jsのオブジェクトの中から、クリックされたアイテムがキーのurlを選択する（どうする？？）
//③上記のurlをセットして、ajax通信を始める
//④成功したら、今表示しているアイテムのhtmlを書き換える（名前と値段とsrcの画像urlと商品名）

$(document).ready(function(){
    $("a.change").click(function(e){
        e.preventDefault();
		//アイテムのキーを全部取得
		var items = [];
		$("a.change").each(function() {
		    items.push($(this).next("div.menu-category").attr('id'));
		});
		var items = $.grep(items, function(e){return e !== undefined;});
    	//①クリックされたアイテムのidを検知する
		var clicked_item = $(this).attr('id');
		clicked_item = clicked_item.slice(0, -1);
		//②jsのオブジェクトの中から、クリックされたアイテムがキーのurlを選択する（どうする？？）
		var access_url = js_url[clicked_item];
		//③書き換える対象の変数を定義する
        var new_price = $(this).children('.active').children('span');
        var new_image = $(this).children('.product-image').children('img');
        var new_name = $(this).next('a');
    	//値段の表示を置き換える(new price)のclassを見つける
    	var target = clicked_item + '3';
    	var line_price = $('.line').find('#' + target);
    	//引く金額を取得する
    	var subtraction = $(new_price).html();
    	subtraction = new Array(subtraction.split( '円' ));
    	subtraction = subtraction[0][0];
    	subtraction = delComma1(subtraction);
    	subtraction = Number(subtraction);

        //④アイテムがクリックされた回数をカウントする
        if(typeof click_count === "undefined") {
        	click_count = [];
        }
        if(typeof click_count[clicked_item] === "undefined") {
        	click_count[clicked_item] = 0; 
        }
        if(click_count[clicked_item] < items.length) {
			click_count[clicked_item] = click_count[clicked_item] + 1;
		} else {
			click_count[clicked_item] = 0;
		}
		//カンマ区切りにする関数
		function addFigure(str) {
		var num = new String(str).replace(/,/g, "");
		while(num != (num = num.replace(/^(-?\d+)(\d{3})/, "$1,$2")));
		return num;
		}
		//カンマを削除する関数
		function delComma1(w) {
		    var z = w.replace(/,/g,"");
		    return (z);
		}
        function get_twenty_item() {
            //作家情報と通信する
            var yahoo_connect = $.ajax({
                url : access_url,
             	dataType: 'jsonp', // 追加
            });
            //通信後に実行する処理
            $.when(yahoo_connect).done(function(json){
            	var data = json["ResultSet"][0]["Result"];
            	delete data['Request']; 
            	delete data['Modules'];
            	delete data['_container'];
            	//合計金額の書き替え
		    	sum = sum + Number(data[click_count[clicked_item]]['Price']['_value']);
		    	sum = sum - subtraction;
				sum_comma = addFigure(sum);
				$("#sum").text(sum_comma);
				//jsonで引いてきた価格をカンマ付きの文字列にする
				price_comma = addFigure(data[click_count[clicked_item]]['Price']['_value']) + '円';
            	//これをhtmlを書き換える
            	$(new_price).html(price_comma);
            	$(new_image).attr("src",data[click_count[clicked_item]]['ExImage']['Url']);
            	$(new_name).html(data[click_count[clicked_item]]['Name'] + "<br /><button type='button' class='btn btn-default'>購入する</button>");
            	$(new_name).attr("href",data[click_count[clicked_item]]['Url']);
		    	$(line_price[0]).html(price_comma);
            });

        }
	   	var data = get_twenty_item();
    });

});
