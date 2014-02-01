<!doctype html>
<html>
<head>
<title>MTG App</title>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="app.css"/>
</head>
<body>
<?php //$j = json_decode(file_get_contents("AllSets-Standard.json"),true); ?>
<ul class="nav nav-tabs" id="navTabs">
	<?php //foreach($j as $cardSet) { echo "<li><a href='#".$cardSet['code']."' data-toggle='tab'>".$cardSet['name']."</a></li>"; } ?>
</ul>
<div class="tab-content" id="tabContent"></div>
<?php
	// function fixString($str) {
	// 	return strtr($str,array("Æ"=>"&AElig;",'\''=>'&apos;',"—"=>"-"));
	// }

	// foreach($j as $cardSet) { 
	// 	echo "<div class='tab-pane' id='".$cardSet['code']."'>".
	// 	"<table class='table table-condensed'><thead>".
	// 	"<th class='card-thumbnail'>Thumbnail</th>".
	// 	"<th class='card-name'>Name</th>".
	// 	"<th class='card-cost'>Mana Cost</th>".
	// 	"<th class='card-type'>Type</th>".
	// 	"<th class='card-ptl'>P/T</th>".
	// 	"<th class='card-rules'>Rules Text</th>".
	// 	"<th class='card-flavor'>Flavor Text</th>".
	// 	"<th class='card-rarity'>Set/Rarity</th>".
	// 	"</thead>".
	// 	"<tbody>";
	// 	foreach($cardSet['cards'] as $card) {
	// 		echo "<tr>";
	// 		echo "<td class='card-thumbnail'><a href='#' data-toggle='modal' data-target='#cardModal' onclick='showCardModal(\"".fixString($card['name'])."\",\"".$cardSet['code']."\",\"".fixString($card['imageName'])."\")'><img src='".strtr("images/sets/".$cardSet['code']."/".$card['imageName'].".jpg",array("'"=>"%27"," "=>"-"))."' /></a></td>";
	// 		echo isset($card['name']) ? "<td class='card-name'><a href='#' data-toggle='modal' data-target='#cardModal' onclick='showCardModal(\"".fixString($card['name'])."\",\"".$cardSet['code']."\",\"".fixString($card['imageName'])."\")'>".fixString($card['name'])."</a></td>" : "<td></td>";
	// 		echo isset($card['manaCost']) ? "<td>".strtr($card['manaCost'],array("{"=>"<img src='images/mana/","}"=>".jpg'/>","/W"=>"-W","/R"=>"-R","/B"=>"-B","/U"=>"-U","/G"=>"-G"))."<br /><br /><em>CMC: ".$card['cmc']."</em></td>" : "<td></td>";
	// 		echo isset($card['type']) ? "<td>".fixString($card['type'])."</td>" : "<td></td>";
	// 		if(isset($card['power'])) {
	// 			echo "<td style='text-align:center'>".$card['power']."/".$card['toughness']."</td>";
	// 		} elseif(isset($card['loyalty'])) {
	// 			echo "<td style='text-align:center'><b>&lsaquo;".$card['loyalty']."&rsaquo;</b></td>";
	// 		} else {
	// 			echo "<td></td>";
	// 		}
	// 		if(isset($card['text']) && strlen($card['text']) === 1) $card['text'] = "{T}: Add {".$card['text']."} to your mana pool.";
	// 		echo isset($card['text']) ? "<td class='card-rules-td'>".strtr($card['text'],array("{"=>"<img src='images/mana/","}"=>".jpg'/>","/W"=>"-W","/R"=>"-R","/B"=>"-B","/U"=>"-U","/G"=>"-G","—"=>"-","Æ"=>"&AElig;","\n"=>"<br />"))."</td>" : "<td></td>";
	// 		echo isset($card['flavor']) ? "<td class='card-flavor-td'><em>".strtr($card['flavor'],array("—"=>"-"))."</em></td>" : "<td></td>";
	// 		echo isset($card['rarity']) ? "<td style='text-align:center;'><img src='images/rarity/".$cardSet['code']."-".substr($card['rarity'],0,1).".jpg'/></td>" : "<td></td>";
	// 		echo "</tr>";
	// 	}
	// 	echo "</tbody>".
	// 	"</table>".
	// 	"</div>";
	// }
?>
</div>

<div class="modal" id="cardModal" tabindex="-1" role="dialog" aria-labelledby="cardModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="mTitle">Modal Title</h4>
			</div>
			<div class="modal-body">
				<img id="cardImage" />
				<p>Stuff goes here...</p>
			</div>
		</div>
	</div>
</div>

<!-- CARD IMAGES
http://mtgimage.com/set/<set code>/<card name>.jpg
http://mtgimage.com/set/ARB/sen triplets.jpg
-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</body>
</html>