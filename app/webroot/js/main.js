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
//プレグレスバーの最大値
var budget = 200000;

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
	//ボタンを押すと、対象のボタンの色が変わる
	function change_button_color(i) {
		$(button[i]).click(function(){
			$(product[i]).toggle();
			$(line[i]).toggle();
			//押されたボタンのキーを取得する
			var pushed = $(this).attr("id");
			pushed = pushed.slice(0, -7);
			//押されたボタンの単価を取得する
			var at_piece = pushed + '3';
			var line_price = $('.line').find('#' + at_piece);
			//現在の数量を把握する
	    	var amount = pushed + '6';
	    	var amount = $('.line').find('#' + amount).html();
	    	var amount = Number(amount);
	    	//合計金額から加算・減算する金額の単価を取得する
	    	var contorol_number = $(line_price).html();
	    	contorol_number = new Array(contorol_number.split( '円' ));
	    	contorol_number = contorol_number[0][0];
	    	contorol_number = delComma1(contorol_number);
	    	contorol_number = Number(contorol_number);
			//現在の合計金額を取得する
			sum = $('#sum').html();
			sum_number = sum.slice(0);
			sum_number = Number(delComma1(sum_number));
			//押されたボタンに対応するプログレスバーを取得する
			var progress = pushed + '8';
			progress = $('.progress').find('#' + progress);
			//予算に体する金額を表示する
			var percentage = Math.round(contorol_number / budget * 100);
			percentage = percentage +'%';

		    if($(this).hasClass("btn-default")) {
		    	//ボタンの色を白から青に
				$(button[i]).removeClass("btn-default");
				$(button[i]).addClass("btn-primary");
				//合計金額の変更
				sum = sum_number + contorol_number * amount;
				sum_comma = addFigure(sum);
				$("#sum").text(sum_comma);
				//プログレスバーのwidthを変更する
				$(progress).width(percentage);

			} else {
				//ボタンの色を青から白に
				$(button[i]).removeClass("btn-primary");
				$(button[i]).addClass("btn-default");
				//合計金額の変更
				sum = sum_number - contorol_number * amount;
				sum_comma = addFigure(sum);
				$("#sum").text(sum_comma);
				//プログレスバーのwidthを変更する
				$(progress).width('0%');
			}
		});
	}
	for(i=0; i<button.length; i++){
		change_button_color(i);
	}

});

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
		//現在の合計金額
		sum = $('#sum').html();
		sum_number = sum.slice(0);
		sum_number = Number(delComma1(sum_number));

        var category_sum = clicked_item + '7';
        var category_sum = $('.line').find('#' + category_sum);
    	//値段の表示を置き換える(new price)のclassを見つける
    	var target = clicked_item + '3';
    	var line_price = $('.line').find('#' + target);
    	//合計金額から引く金額を取得する
    	var contorol_number = $(new_price).html();
    	contorol_number = new Array(contorol_number.split( '円' ));
    	contorol_number = contorol_number[0][0];
    	contorol_number = delComma1(contorol_number);
    	contorol_number = Number(contorol_number);

		//押されたボタンに対応するプログレスバーを取得する
		var progress = clicked_item + '8';
		progress = $('.progress').find('#' + progress);

		//現在の数量を把握する
    	var amount = clicked_item + '6';
    	var amount = $('.line').find('#' + amount).html();
    	var amount = Number(amount);
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
		    	sum = sum_number + Number(data[click_count[clicked_item]]['Price']['_value']) * amount - contorol_number * amount;
				sum_comma = addFigure(sum);
				$("#sum").text(sum_comma);
				//jsonで引いてきた価格をカンマ付きの文字列にする
				price_comma = addFigure(data[click_count[clicked_item]]['Price']['_value']) + '円';
				//数量✖️単価を計算する
				var category_sum_number = Number(data[click_count[clicked_item]]['Price']['_value']) * amount;
				category_sum_text = addFigure(category_sum_number) + '円';
				//予算に体する金額を表示する
				var percentage = Math.round(category_sum_number / budget * 100);
				percentage = percentage +'%';
				console.log(percentage);
            	//これをhtmlを書き換える
            	$(new_price).html(price_comma);
            	$(new_image).attr("src",data[click_count[clicked_item]]['ExImage']['Url']);
            	$(new_name).html(data[click_count[clicked_item]]['Name'] + "<br /><button type='button' class='btn btn-default'>購入する</button><span class='badge' style='font-size : 18pt'>売れ筋" + (click_count[clicked_item] + 1) + "位</span>");
            	$(new_name).attr("href",data[click_count[clicked_item]]['Url']);
		    	$(line_price[0]).html(price_comma);
		    	$(category_sum).html(category_sum_text);
		    	//プログレスバーの長さを変える
		    	$(progress).width(percentage);

            });

        }
	   	var data = get_twenty_item();
    });
	$(".plus").click(function(e){
		//数量を書き換える
		var category = $(this).attr('id');
		category = category.slice(0, -1);
		//現在の数量を把握する
    	var target = category + '6';
    	var amount = $('.line').find('#' + target).html();
    	var amount = Number(amount);
    	var new_amount = amount + 1;
    	$('.line').find('#' + target).html(new_amount);
		//単価を取得する
		var at_piece = category + '3';
		var piece_price = $('.line').find('#' + at_piece);
    	var piece_price_number = $(piece_price).html();
    	piece_price_number = new Array(piece_price_number.split( '円' ));
    	piece_price_number = piece_price_number[0][0];
    	piece_price_number = delComma1(piece_price_number);
    	piece_price_number = Number(piece_price_number);
    	//小計を計算する
    	var category_sum_number = new_amount * piece_price_number;
    	category_sum_text = addFigure(category_sum_number) + '円';

		//押されたボタンに対応するプログレスバーを変更する
		var progress = category + '8';
		progress = $('.progress').find('#' + progress);
		var percentage = Math.round(category_sum_number / budget * 100);
		percentage = percentage +'%';
		$(progress).width(percentage);

		//小計を書き換える
		var category_sum = category + '7';
		var category_sum = $('.line').find('#' + category_sum).html(category_sum_text);
		//合計金額を変える
		sum = $('#sum').html();
		sum_number = sum.slice(0);
		sum_number = Number(delComma1(sum_number));
		//更新後の合計金額を計算する
		new_sum = sum_number + piece_price_number;
		new_sum = addFigure(new_sum);
		$('#sum').html(new_sum);	

	});

	$(".minus").click(function(e){
		//数量を書き換える
		var category = $(this).attr('id');
		category = category.slice(0, -1);
		//現在の数量を把握する
    	var target = category + '6';
    	var amount = $('.line').find('#' + target).html();
    	var amount = Number(amount);
    	if(amount >= 1) { 
    		var new_amount = amount - 1;
    	} else {
    		var new_amount = amount;
    	}
    	$('.line').find('#' + target).html(new_amount);
		//単価を取得する
		var at_piece = category + '3';
		var piece_price = $('.line').find('#' + at_piece);
    	var piece_price_number = $(piece_price).html();
    	piece_price_number = new Array(piece_price_number.split( '円' ));
    	piece_price_number = piece_price_number[0][0];
    	piece_price_number = delComma1(piece_price_number);
    	piece_price_number = Number(piece_price_number);
    	//小計を計算する
    	var category_sum_number = new_amount * piece_price_number;
    	category_sum_text = addFigure(category_sum_number) + '円';

		//押されたボタンに対応するプログレスバーを取得する
		var progress = category + '8';
		progress = $('.progress').find('#' + progress);
		//予算に体する金額を表示する
		var percentage = Math.round(category_sum_number / budget * 100);
		percentage = percentage +'%';
		$(progress).width(percentage);
		//小計を書き換える
		var category_sum = category + '7';
		$('.line').find('#' + category_sum).html(category_sum_text);
		//合計金額を変える
		sum = $('#sum').html();
		sum_number = sum.slice(0);
		sum_number = Number(delComma1(sum_number));
		//更新後の合計金額を計算する
		if(amount >= 1) { 
			new_sum = sum_number - piece_price_number;
		} else {
			new_sum = sum_number;
		}
		new_sum = addFigure(new_sum);
		$('#sum').html(new_sum);	
	});

});