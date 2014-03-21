<?php

namespace Mayhem\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    public function accueilAction()
    {
    	
		$articles = array(
			array('img_url'=>'http://www.infojeune41.org/wp-content/uploads/ulule_gros.png', 'titre' => 'Pourquoi ulule ?','contenue'=>'Campagne exaltait oh et mamelons de dissiper. Le au peine neige en linge. En un paraissait lumineuses tristement qu. Vent on xv pere bete ah te. Ah je je seulement militaire boulevard le gendarmes. Et importe la le pendant ecarter galoper falloir donnent. Son atteindra sur sacrifice peu suspendue enfantent ses. Allumait physique on fillette or ai. Du se magasins arsenaux relevent cherirai tu joyeuses mettions. Roc pied bete est murs nees.'),
			array('img_url'=>'http://tpe-smc-handicap.e-monsite.com/medias/images/handicape-1.jpg', 'titre' => 'Handicape','contenue'=>'Meconnais enfantent et apprendre je metairies. Convertir defensive ete ifs une ere poussiere distribua redoutait. Il style drape au mines vecut. Par net peut par agir vont. Tiendrons le tu echangent sentiment xv cartouche. Garnison cavernes du etendues je quelques mourants ne exaltait en. Ras son tenait sommes brumes. Seulement oh neanmoins eu causaient tranchees on toutefois tu laidement. Pris donc son dut tout que.'),
			array('img_url'=>'http://i.dailymail.co.uk/i/pix/2011/01/14/article-0-0CC19B52000005DC-846_634x542.jpg', 'titre' => 'Reaper project cest quoi ?','contenue'=>'Meme fin ont suit oui vive epis vous. Penser lieues parees ifs ere. Des sol aux foret louis motif celui coupe carre. Je je laissa eu poussa appris ah tuiles. Ici cadeaux ere enfants donnent non une. Enfantent prenaient la cesserent si convertir. Cranes canons je oh soeurs.'),
			array('img_url'=>'', 'titre' => 'Que ans avez deja dur pile nez','contenue'=>'Donc hein que ils chez meme aux ete. Qu creerent premiere ca retablir en imberbes oh penetrer ennemies. Seule corps berce le du abris toute ponts. Signe peu ras coups subit. Et cantines xv on kolbacks hataient etranges adjudant. Connu nuits etais on la. Un exasperer boulevard detourner tu dernieres on tu printemps sentiment. Ai en garde pente je prime desir on.'),
		);
		
        return $this->render('MayhemMainBundle:Main:accueil.html.twig',array(
        	'articles' => $articles
		));
    }

	public function quiAction()
	{
		
		$qui = array(
			array('id'=>1,'photo_url'=>'/mayhem/web/img/Didier-Oignon.jpg','prenom'=>'Pourquoi', 'nom' => 'ulule','bio'=>'Campagne exaltait oh et mamelons de dissiper. Le au peine neige en linge. En un paraissait lumineuses tristement qu. Vent on xv pere bete ah te. Ah je je seulement militaire boulevard le gendarmes. Et importe la le pendant ecarter galoper falloir donnent. Son atteindra sur sacrifice peu suspendue enfantent ses. Allumait physique on fillette or ai. Du se magasins arsenaux relevent cherirai tu joyeuses mettions. Roc pied bete est murs nees.'),
			array('id'=>2,'photo_url'=>'/mayhem/web/img/Mickael-Lafront','prenom'=>'Handicape', 'nom' => 'Ledemoi','bio'=>'Meconnais enfantent et apprendre je metairies. Convertir defensive ete ifs une ere poussiere distribua redoutait. Il style drape au mines vecut. Par net peut par agir vont. Tiendrons le tu echangent sentiment xv cartouche. Garnison cavernes du etendues je quelques mourants ne exaltait en. Ras son tenait sommes brumes. Seulement oh neanmoins eu causaient tranchees on toutefois tu laidement. Pris donc son dut tout que.'),
			array('id'=>3,'photo_url'=>'/mayhem/web/img/Patrick-Lepont.jpg','prenom'=>'Reaper', 'nom' => 'project','bio'=>'Meme fin ont suit oui vive epis vous. Penser lieues parees ifs ere. Des sol aux foret louis motif celui coupe carre. Je je laissa eu poussa appris ah tuiles. Ici cadeaux ere enfants donnent non une. Enfantent prenaient la cesserent si convertir. Cranes canons je oh soeurs.'),
			array('id'=>4,'photo_url'=>'/mayhem/web/img/Sangta-Close.jpg','prenom'=>'Quelgue', 'nom' => 'anluigui','bio'=>'Donc hein que ils chez meme aux ete. Qu creerent premiere ca retablir en imberbes oh penetrer ennemies. Seule corps berce le du abris toute ponts. Signe peu ras coups subit. Et cantines xv on kolbacks hataient etranges adjudant. Connu nuits etais on la. Un exasperer boulevard detourner tu dernieres on tu printemps sentiment. Ai en garde pente je prime desir on.')
		);
		
        return $this->render('MayhemMainBundle:Main:qui.html.twig',array(
        	'qui' => $qui
		));		
	}

	public function calendrierAction(){
		$evenements = array(
			array('date'=>'','titre'=>'','contenu'=>''),
			array('date'=>'','titre'=>'','contenu'=>''),
			array('date'=>'','titre'=>'','contenu'=>''),
		);
		
        return $this->render('MayhemMainBundle:Main:calendrier.html.twig',array(
        	'evenements' => $evenements
		));			
	}
}