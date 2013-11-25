<!doctype html>
<html>
<head>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css"/>
<link rel="stylesheet" href="app.css"/>
</head>
<body>
<?php $j = json_decode(file_get_contents("AllSets-Standard.json"),true); ?>
<ul class="nav nav-tabs" id="navTabs">
	<?php foreach($j as $cardSet) { echo "<li><a href='#".$cardSet['code']."' data-toggle='tab'>".$cardSet['name']."</a></li>"; } ?>
</ul>
<div class="tab-content">
<?php 
	foreach($j as $cardSet) { 
		echo "<div class='tab-pane' id='".$cardSet['code']."'>".
		"<table class='table'><thead>".
		"<th>Thumbnail</th>".
		"<th>Name</th>".
		"<th style='min-width:140px;'>Mana Cost</th>".
		"<th>Type</th>".
		"<th>P/T</th>".
		"<th>Rules Text</th>".
		"<th>Flavor Text</th>".
		"<th>Set/Rarity</th>".
		"</thead>".
		"<tbody>";
		foreach($cardSet['cards'] as $card) {
			echo "<tr>";
			echo "<td><img src='".str_replace("'","%27","images/sets/".$cardSet['code']."/".str_replace(" ","-",$card['imageName']).".jpg")."' /></td>";
			echo isset($card['name']) ? "<td>".$card['name']."</td>" : "<td></td>";
			echo isset($card['manaCost']) ? "<td>".strtr($card['manaCost'],array("{"=>"<img src='images/mana/","}"=>".jpg'/>","/W"=>"-W","/R"=>"-R","/B"=>"-B","/U"=>"-U","/G"=>"-G"))."<br /><br /><em>CMC: ".$card['cmc']."</em></td>" : "<td></td>";
			echo isset($card['type']) ? "<td>".str_replace("—","-",$card['type'])."</td>" : "<td></td>";
			if(isset($card['power'])) {
				echo "<td>".$card['power']."/".$card['toughness']."</td>";
			} elseif(isset($card['loyalty'])) {
				echo "<td><b>&lsaquo;".$card['loyalty']."&rsaquo;</b></td>";
			} else {
				echo "<td></td>";
			}
			echo isset($card['power']) ? "<td>".$card['power']."/".$card['toughness']."</td>" : "<td></td>";
			echo isset($card['text']) ? "<td>".strtr($card['text'],array("{"=>"<img src='images/mana/","}"=>".jpg'/>","/W"=>"-W","/R"=>"-R","/B"=>"-B","/U"=>"-U","/G"=>"-G","—"=>"-","\n"=>"<br />"))."</td>" : "<td></td>";
			echo isset($card['flavor']) ? "<td><em>".strtr($card['flavor'],array("—"=>"-"))."</em></td>" : "<td></td>";
			echo isset($card['rarity']) ? "<td style='text-align:center;'><img src='images/rarity/".$cardSet['code']."-".substr($card['rarity'],0,1).".jpg'/></td>" : "<td></td>";
			echo "</tr>";
		}
		echo "</tbody>".
		"</table>".
		"</div>";
	}
?>
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