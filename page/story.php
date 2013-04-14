<div id="titleIndex" class="font15 margin15 fontW700 width70P marginAuto">

	
<div class="fontElfique" class="fontW700 font26 marginLeft45"> Les Royaumes d\'Ar&eacute;lidon</div>

<div class="heigth15"></div>
<?php
$str = array();
$str['1'] = " En l'an 1153, une f�te devait avoir lieu  prochainement pour f�ter les 40 ann&eacute;es de r�gne du roi Haudan sur l'immense royaume d'Ar&eacute;lidon, royaume que le roi avait r&eacute;ussi avec peine � pacifier lors de nombreuses guerres contre des provinces &eacute;loign&eacute;es.";
$str['2'] = "Le royaume d'Ar&eacute;lidon bord&eacute; � l'ouest par la mer comprenait &eacute;galement 3 grandes �les qui avaient &eacute;t&eacute; donn&eacute;es par le roi � ses 3 h&eacute;ritiers le Prince Nudric, le Prince Umodus et la Princesse Adoma. Chaque h&eacute;ritier pr&eacute;parait en secret, avec leurs partisans, la succession du roi en esp&eacute;rant, par les armes, �tre le seul � r&eacute;gner sur le royaume � sa mort.
Le royaume d'Ar&eacute;lidon avait pu r&eacute;sister � plusieurs tentatives d'invasions car il &eacute;tait prot&eacute;g&eacute; sur ses 3 autres fronti�res par de hautes montagnes et seules quelques routes permettaient de les traverser.";


$str['3'] = "Alors qu'il restait quelques jours avant le d&eacute;but de la f�te dans le ch�teau qui dominait la ville d'Horecan, capitale de son royaume, des nouvelles alarmantes arriv�rent au roi lui annon�ant que de nombreux navires approchaient des c�tes du royaume et que dans le m�me temps dans des provinces &eacute;loign&eacute;es de nombreux monstres &eacute;taient apparus semant la mort sur leur passage.";

$str['4'] = "Malgr&eacute; une r&eacute;sistance acharn&eacute;e la ville d'Horecan tomba aux mains des assaillants et le roi Haudan fut tu&eacute;. Les 3 h&eacute;ritiers fuirent dans leurs �les avec leurs partisans et se pr&eacute;par�rent � affronter les ennemis du royaume tout en se pr&eacute;parant � combattre les 2 autres h&eacute;ritiers. Le prince Nudric se retira dans l'�le d'Onali avec ses partisans les Nudriciens. Le Prince Umodus partit dans son �le d'Asumar avec ses partisans les Umodiens. Quant � la princesse Amoda, qui resta au c�t&eacute; du roi jusqu'� sa mort, elle se retrouva avec ses partisans les Amodiens dans son �le de Kaledan.";

$str['5'] = "Pendant plusieurs mois les Nudriciens, les Umodiens et les Amodiens s'entra�n�rent pour pouvoir affronter leurs nombreux ennemis tout en se pr&eacute;parant &eacute;galement � s'affronter entre eux pour qu'un jour leur prince ou leur princesse puisse r�gner sur le royaume d'Ar&eacute;lidon.";


for($i=1;$i<=5;$i++)
{
	
	if($i == 1)
		$display = "block";
	else
		$display = "nodisplay";
		
	echo '<div id="story_page_'.$i.'" class="'.$display.'">';
		$content = $str[$i];
		$content .= '<div class="marginTop20 center width80P">';
			$content .= '<img src="pictures/story/'.$i.'.jpg" alt="" />';
		$content .= '</div>';
		
		$content .= '<div>';
			if($i > 1)
			{
				$content .= '<div class="left">';
			
				$content .= '</div>';				
			}
			
			//$('#GraphicTypeQuestions').show(400);
			if($i < 5)
			{
				$i_more = $i + 1;
				$onclick = "$('#story_page_".$i."').hide(1800);";
				$onclick .= "$('#story_page_".$i_more."').show(1800);";
				$content .= '<div class="left marginLeft70P marginTop15 fontBlack" onclick="'.$onclick.'">';
					$pre_content = '<div class="paddingLeft55">Suivant</div>';
					$content .= createBox160($pre_content,true);
				$content .= '</div>';				
			}
			
		$content .= '</div>';
		
		echo $content;
		
	echo '</div>';	
}
?>
<div class="heigth10"></div>

</div>