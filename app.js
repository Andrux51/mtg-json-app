$(document).ready(function() {

// 	$.ajax({
// 		url: "AllSets-Standard.json",
// 		error: function() {
// 			console.log('error!');
// 		},
// 		success: function(data, textStatus, jqXHR) {
// 			displaySets(data);
// 		}
// 	});

$("#navTabs a:first").tab('show');

});

// function displaySets(data) {
// 	for (var key in data) {
// 		$("#test").append("<li>" + key + "</li>");
// 	}
// }

function showCardModal(cardName,cardSet) {
	$("#mTitle").html(cardName);
	$("#cardImage").attr('src','images/sets/'+cardSet+'-original/'+cardName+'.jpg');
}