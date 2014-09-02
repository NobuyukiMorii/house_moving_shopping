console.log(js_access_url);

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
	var price = $(".product").children(".menu-category-name").children(".badge").clone(true);
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