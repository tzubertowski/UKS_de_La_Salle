<?php
class TemporaryData {
    public static function getNavItems(){
        $menuarray = array();
        $menucategorylabel = 'O klubie';
        $menucontent = "<li id=glowna>Informacje</li><li id=podstrona1>Historia</li><li id=podstrona2>Kontakt</li><li id=podstrona3>Zarząd</li>";
        array_push($menuarray, array('label' => $menucategorylabel, 'content' => $menucontent, 'active' => true));
        $menucategorylabel = 'Piłka nożna';
        $menucontent = "<li id=glowna>Strona Główna</li><li id=podstrona1>podstrona1</li><li id=podstrona2>podstrona2</li><li id=podstrona3>podstrona3</li>";
        array_push($menuarray, array('label' => $menucategorylabel, 'content' => $menucontent));
        $menucategorylabel = 'Siatkówka';
        array_push($menuarray, array('label' => $menucategorylabel, 'content' => $menucontent));
        $menucategorylabel = 'Lekkoatletyka';
        array_push($menuarray, array('label' => $menucategorylabel, 'content' => $menucontent));
        return $menuarray;
    }
    public static function getLatestFiveNews(){
        $latestnewsarray = array();
        array_push($latestnewsarray,array('autor'=> 'Anonim', 'label' => 'UKS de La Salle znowu najlepsze!','caption' => 'Po raz kolejny okazaliśmy się bezkonkurencyjni w biegach narciarskich w stylu klasycznym.', 'image'=> 'http://telewizjaox.pl/photoreports/1_rok_2011/uks/duze/002.jpg','date_added'=>'2013-12-27'));
        array_push($latestnewsarray,array('autor'=> 'Prezes', 'label' => 'Wesołych świąt życzy zarząd UKS de La Salle','caption' => 'Aby przy świątecznym stole nie zabrakło światła i ciepła rodzinnej atmosfery, a Nowy Rok niósł ze sobą szczęście i pomyślność.', 'image'=> 'http://us.123rf.com/400wm/400/400/iprostocks/iprostocks1109/iprostocks110900004/10685931-wesolych-swiat-tlo.jpg','date_added'=>'2013-09-17'));
        array_push($latestnewsarray,array('autor'=> 'Jasio', 'label' => 'UKS de La Salle znowu najlepsze!','caption' => 'Po raz kolejny okazaliśmy się bezkonkurencyjni w biegach narciarskich w stylu klasycznym.', 'image'=> 'http://telewizjaox.pl/photoreports/1_rok_2011/uks/duze/002.jpg','date_added'=>'2013-12-27'));
        array_push($latestnewsarray,array('autor'=> 'Staszek', 'label' => 'Wesołych świąt życzy zarząd UKS de La Salle','caption' => 'Aby przy świątecznym stole nie zabrakło światła i ciepła rodzinnej atmosfery, a Nowy Rok niósł ze sobą szczęście i pomyślność.', 'image'=> 'http://us.123rf.com/400wm/400/400/iprostocks/iprostocks1109/iprostocks110900004/10685931-wesolych-swiat-tlo.jpg','date_added'=>'2013-09-17'));
        array_push($latestnewsarray,array('autor'=> 'Piotr', 'label' => 'Wesołych świąt życzy zarząd UKS de La Salle','caption' => 'Aby przy świątecznym stole nie zabrakło światła i ciepła rodzinnej atmosfery, a Nowy Rok niósł ze sobą szczęście i pomyślność.', 'image'=> 'http://appacz.net/wp-content/uploads/2012/12/Święta-Appacz.net_-1024x475.jpg','date_added'=>'2013-05-22'));
        return $latestnewsarray;
    }
}

?>