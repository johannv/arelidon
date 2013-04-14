<?php
/*
 * Created on 10 nov. 2009
 *
 */
require_once(absolutePathway().'utils/utils.php');
require_once(absolutePathway().'utils/fight.php');

if(!empty($_GET['classe_desc']))
    $classe_desc = $_GET['classe_desc'];
else
    $classe_desc = '';
?>

<div>	
<!-- Div qui va afficher les persos -->
    <div class="left marginTop100 marginLeft30 width150">';
 	<?php
 	 	$text = '<div class="center"><b>' .
 	 			'<a href="index.php?page=classes&classe_desc=1" class="nodecoration">' .
 	 			' Guerrier ' .
 	 			'</a></b>' .
 	 			'</div>';
		createBox160($text);
		
		$text = '<div class="center"><b>' .
 	 			'<a href="index.php?page=classes&classe_desc=2" class="nodecoration">' .
 	 			' Archer ' .
 	 			'</a></b>' .
 	 			'</div>';
		createBox160($text);
		
		$text = '<div class="center"><b>' .
 	 			'<a href="index.php?page=classes&classe_desc=3" class="nodecoration">' .
 	 			' Mage ' .
 	 			'</a></b>' .
 	 			'</div>';
		createBox160($text);
		
		$text = '<div class="center"><b>' .
 	 			'<a href="index.php?page=classes&classe_desc=4" class="nodecoration">' .
 	 			' Pr�tre ' .
 	 			'</a></b>' .
 	 			'</div>';
		createBox160($text);
         ?>
	<br /><br />

	
 	 </div>
 	 
 	 
 	  
 	 
<!-- 	  contient les infos et descriptifs-->
 	 <div class="left marginLeft20 marginTop30 border0black">
 	   
 	 
<!-- 	  Affichage dans le parchemin-->

		<div class="center marginTop10">
	
<!--	// Haut du parchemin			-->
		<div class="hautparchemin"></div>';

<!--// Div qui contiendra les infos de l'�tape / qu�te s�l�ctionn�e			-->
			<div id="quete_container" class="quetecontenaire">
				 <div class="heigth20"></div>
				<div id="desc"  class="fontElfique etapequete">
				<?php
				 switch($classe_desc)
			 	 {
			 	 	case 1 :
			 	 		    echo '<div class="center"> Le Guerrier </div><br />';
			 	 			echo "Tel le chevalier en qu�te perp�tuel, le seigneur de guerre local, le champion du roi, le fantassin d��lite, le mercenaire endurci tous sont des guerriers. Ils peuvent �tre le d�fenseur de la veuve et de l�orphelin ou bien de simples mercenaires aux services de ceux qui peuvent s�offrir leurs services.<br /><br />" .
			 	 					" Certains sont parmi les plus nobles h�ros du pays toujours pr�s � risquer milles morts, tandis que d�autres ne faisant que peu de cas de la vie humaine tuent par int�r�t ou par pur plaisirs.<br /><br />" .
			 	 					" Rompu � la manipulation de quasiment toutes les armes et armures connues, ils ne sont pas connus pour �tre de grands amateurs sur les questions de la magie mais peuvent s�associer pleinement durant leurs missions avec des alli�s profanes. Les missions dangereuses seront mieux appr�ci�s car le danger inh�rents au combat leurs donneront plus d�excitation. ";
			 	 	break;
			 	 	case 2 :
							echo '<div class="center"> L\'archer </div><br />';
							echo "L�art de l�arc est consid�r� par certains comme un accomplissement spirituel et par d�autres comme un art philosophique. Pour certains c�est un v�ritable mode de vie et pour d�autres encore cela sera consid�r� comme une vrai religion. Naturellement beaucoup consid�rerons que le fait de tuer avec un arc est une comp�tence importante dans un monde aussi dangereux.<br /><br />
									La voie de l�arc est un art martial, c�est une question de pr�cision et de discipline, tout est question de fusion entre soi m�me son arc et l�ennemi � abattre bien entendu. Quand on lui demande ce qu�est la v�rit� � un ma�tre archer, il prend son arc, d�coche une fl�che et sans dire un mot, laisse sa ma�trise parler pour lui et ainsi vous faire constater sa v�rit�. 
								  ";
					break;
			 	 	case 3 :
					 	 	echo '<div class="center"> Le Mage </div><br />';
					 	 	echo "Mage sp�cialis� dans la magie noire et offensive. C�est souvent un �rudit ayant appris ses sortil�ges dans de vieux livres �crits dans une langue ancestrale, ou ayant fait l�apprentissage aupr�s d�un autre sorcier.<br /><br />" .
					 	 			" Portant en g�n�ral une robe et une cape a capuche sombres, il ma�trise l��nergie des �l�ments et leur donne la forme qu�il souhaite gr�ce � des formules magiques ainsi qu�un b�ton qui leur permet de canaliser leur �nergie. Intelligent, il poss�de un grand savoir du monde.";
			 	 	break;
			 	 	case 4 :
					 	 	echo '<div class="center"> Le Pr�tre </div><br />';
					 	 	echo "L��uvre des dieux est en tout choses, aussi bien dans les arm�es de croyant que dans les temples les plus majestueux. Comme dans le c�ur du plus humbles des fid�les.<br /><br /> ".
								 "Les pr�tres partent � l�aventure pour soutenir la cause de leur dieu, du moins est ce la raison la plus souvent indiqu�. Les bons pr�tres aiderons le commun des mortels dans leur vie en les soulageant, les plus mal�fiques accro�trons leurs pouvoirs personnels afin d��tre craint.<br /><br />".
								 "Les pr�tres sont les maitres de la magie divine particuli�rement pour les soins ou pour leur pendant mal�fiques d�truire leur ennemis. Les pr�tres sont amener � manipuler un peu les armes mais jamais aussi bien qu�un guerrier.";
			 	 	break;
			 	 }  
                                 ?>
			</div>
			</div>
<!--// Bas du parchemin-->
			<div class="basparchemin"></div>
		</div>
 
 	 </div>
 	 
 	 <div class="left marginLeft5 marginTop80">
             <?php
			if($classe_desc > 0)
			{
                            ?>
				<img src="pictures/classe/'.$classe_desc.'/1.gif" /><br /><br /><br />
				<img src="pictures/classe/'.$classe_desc.'/2.gif" /><br />
                                <?php					
			}?>
		</div>
 </div>