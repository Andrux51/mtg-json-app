var sets = [{
	code: "DGM",
	name: "Dragon's Maze"
}, {
	code: "GTC",
	name: "Gatecrash"
}, {
	code: "M14",
	name: "Magic 2014 Core Set"
}, {
	code: "RTR",
	name: "Return to Ravnica"
}, {
	code: "THS",
	name: "Theros"
}];

$(document).ready(function() {
	for (var i in sets) {
		console.log(i);
		$("#navTabs").append((parseInt(i) === 0 ? '<li class="active">' : '<li>') + '<a id="tab-' + sets[i].code + '" href="#' + sets[i].code + '" data-toggle="tab">'+sets[i].name+'</a></li>');
		startLoadingSet(sets[i].code);
	}
	// $("#tab-"+sets[0].code).tab('show'); // part of the php stuff
});

function startLoadingSet(set) {
	$.ajax({
		url: "AllSets-" + set + ".json",
		dataType: "json",
		error: function() {
			console.log('Error. Check $.ajax() call.');
		},
		success: function(data) {
			// console.log(data);
			displaySet(data[set]);
		}
	})
}

function displaySet(data) {
	// console.log(data);
	var html = "<div class='tab-pane' id='"+data.code+"'>"+
		"<table class='table table-condensed'><thead>"+
		"<th class='card-thumbnail'>Thumbnail</th>"+
		"<th class='card-name'>Name</th>"+
		"<th class='card-cost'>Mana Cost</th>"+
		"<th class='card-type'>Type</th>"+
		"<th class='card-ptl'>P/T</th>"+
		"<th class='card-rules'>Rules Text</th>"+
		"<th class='card-flavor'>Flavor Text</th>"+
		"<th class='card-rarity'>Set/Rarity</th>"+
		'</thead><tbody id="tbody-'+data.code+'"></tbody></table>';
	$("#tabContent").append(html);

	for(var i in data.cards) {
		var card = data.cards[i];
		// console.log(card);
		$("#tbody-"+data.code).append('<tr><td>Card '+i+'</td></tr>');
	}
}

function showCardModal(cardName, cardSet, cardImage) {
	$("#mTitle").html(cardName);
	$("#cardImage").attr('src', 'images/sets/' + cardSet + '-original/' + cardImage + '.jpg');
}