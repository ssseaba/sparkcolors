const URL = "https://apiprint.ru/api/calculate"

let data = {
	"part":                       "leaflets",                        //С‚РёРї РїСЂРѕРґСѓРєС†РёРё
	"param[density]":             "1",                               //РїР»РѕС‚РЅРѕСЃС‚СЊ Р±СѓРјР°РіРё
	"param[format]":              "74-105",                          //С„РѕСЂРјР°С‚ РїСЂРѕРґСѓРєС†РёРё РІ СЂР°Р·Р»РѕР¶РµРЅРЅРѕРј РІРёРґРµ, РµСЃР»Рё РµСЃС‚СЊ СЃР»РѕР¶РµРЅРёСЏ
	"param[circulation]":         "100",                             //С‚РёСЂР°Р¶ РІ С€С‚.
	"param[color]":               "4+0",                             //РѕРґРЅРѕСЃС‚РѕСЂРѕРЅРЅСЏСЏ РёР»Рё РґРІСѓСЃС‚РѕСЂРѕРЅРЅСЏСЏ РїРµС‡Р°С‚СЊ
	"param[postprint_drilling]":  "0",                               //СЃРІРµСЂР»РµРЅРёРµ
	"param[postprint_skr_corn]":  "0",                               //СЃРєСЂСѓРіР»РµРЅРёРµ СѓРіР»РѕРІ
	"param[postprint_lam_11]":    "0",                               //РґРІСѓСЃС‚РѕСЂРѕРЅРЅСЏСЏ Р»Р°РјРёРЅР°С†РёСЏ
	"param[postprint_perf]":      "0",                               //РїРµСЂС„РѕСЂР°С†РёСЏ
	"param[postprint_falc_auto]": "0",                               //Р°РІС‚РѕРјР°С‚РёС‡РµСЃРєР°СЏ С„Р°Р»СЊС†РѕРІРєР°
	"param[postprint_big_hand]":  "0",                               //Р±РёРіРѕРІРєР°
	"key":                        "2273e6f010377a791b177ee609891f77" //РўРµСЃС‚РѕРІС‹Р№ РєР»СЋС‡
}

$("select").on( "change", function(e) {
	
	$('select').prop('disabled', false);
	$('select option').prop('disabled', false);
	
	if (data[e.target.name]) {
		data[e.target.name] = e.target.value
	} else {
		data[`param[${e.target.name}]`] = e.target.value
	}
	if (e.target.name === "part" && e.target.value === "cards") {
		$('select[name="density"]').val('3').prop('disabled', 'disabled');
		$('select[name="postprint_perf"]').val('0').prop('disabled', 'disabled');
		$('select[name="postprint_falc_auto"]').val('0').prop('disabled', 'disabled');
		$('select[name="postprint_big_hand"]').val('0').prop('disabled', 'disabled');
		
		data["param[density]"] = "3"
		data["param[postprint_perf]"] = "0"
		data["param[postprint_falc_auto]"] = "0"
		data["param[postprint_big_hand]"] = "0"
	}
	
	if (e.target.name === "part" && e.target.value === "booklets") {
		$(`select[name="format"] option[value="74-105"], select[name="format"] option[value="210-98"], 
		   select[name="format"] option[value="100-70"], select[name="format"] option[value="150-70"]`)
		.prop('disabled', 'disabled');
		
		let format = data["param[format]"]
		if (format === "74-105" || format === "210-98" || format === "100-70" || format === "150-70") {
			$('select[name="format"]').val('105-148')
			data["param[format]"] = "105-148"
		}
		
		$(`select[name="postprint_big_hand"] option[value="1"], select[name="postprint_big_hand"] option[value="2"], 
		   select[name="postprint_big_hand"] option[value="3"], select[name="postprint_big_hand"] option[value="4"],
		   select[name="postprint_big_hand"] option[value="5"], select[name="postprint_big_hand"] option[value="6"]`)
		.prop('disabled', 'disabled');
		
		if (data["param[postprint_big_hand]"] !== "0") {
			$('select[name="postprint_big_hand"]').val('0')
			data["param[postprint_big_hand]"] = "0"
		}
		
		$(`select[name="postprint_falc_auto"] option[value="1"], select[name="postprint_falc_auto"] option[value="2"], 
		   select[name="postprint_falc_auto"] option[value="3"], select[name="postprint_falc_auto"] option[value="4"],
		   select[name="postprint_falc_auto"] option[value="5"], select[name="postprint_falc_auto"] option[value="6"]`)
		.prop('disabled', 'disabled');
		
		if (data["param[postprint_falc_auto]"] !== "0") {
			$('select[name="postprint_falc_auto"]').val('0')
			data["param[postprint_falc_auto]"] = "0"
		}
	}
	getPriceAPI()
})

function getPriceAPI() {
	$.ajax({
	  url: URL,
	  data: data,
	  dataType: "json",
	  success: function(res) {
		getInnerPrice(res)
	},
});
}

function getInnerPrice(res) {
	let result = ""
	if (!!res.result?.calculate[0]?.price) {
		let price = res.result?.calculate[0]?.price
		price = Math.round(price + (price/2)) + 350
		result = "итог: " + price + " "
	} else {
		result = ""
	}
	$("#price").html(result)
}
		getPriceAPI()
		
function newValueOfPart(part) {
	if (part === "leaflets") return "leaflets"
	if (part === "cards") return "cards"
	if (part === "booklets") return "booklets"
	
	return part
}
		
function newValueOfDensity(density) {
	if (density === "1") return "130"
	if (density === "2") return "170"
	if (density === "3") return "karton"
	
	return density
}
		
function newValueOfFormat(format) {
	if (format === "74-105") return "A7, 74*105"
	if (format === "105-148") return "A6, 105*148"
	if (format === "148-210") return "A5, 148*210"
	if (format === "210-297") return "A4, 210*29"
	if (format === "297-420") return "A3, 297*420"
	if (format === "210-98") return "210*98"
	if (format === "150-70") return "150*70"
	if (format === "100-70") return "100*70"
	
	return format
}
		
function newValueOfColor(color) {
	if (color === "4+0") return "односторонняя"
	if (color === "4+4") return "Двусторонняя"
	
	return color
}
		
function createReadlyData(data) {
		data.map(elem => {
			if (elem.name === "part") {
				elem.value = newValueOfPart(elem.value)
			}
			if (elem.name === "density") {
				elem.value = newValueOfDensity(elem.value)
			}
			if (elem.name === "format") {
				elem.value = newValueOfFormat(elem.value)
			}
			if (elem.name === "circulation") {
				elem.value = elem.value + " шт"
			}
			if (elem.name === "color") {
				elem.value = newValueOfColor(elem.value)
			}
			if (elem.name === "postprint_skr_corn") {
				elem.value = newValueOfColor(elem.value)
			}
		})
		return data
}

$(function() {
	$("#form").submit(function(e) {
		e.preventDefault();
	    let data = createReadlyData($("#form").serializeArray());
		data.push({
			name: "price",
			value: $("#price").text()
		})
		return $.ajax({
			url: "/site/mail",
			type: "POST",
			data: data,
			success: function() {
				$("#modal-thanks").addClass("activeModal")
			}
		}), !1 
	})
})

$.ajax({
			url: "https://33775_xmlexport:zX0WFJ9V@api2.gifts.ru/export/v2/catalogue/product.xml",
			type: "GET",
			success: function(res) {
				console.log(res)
			}
})