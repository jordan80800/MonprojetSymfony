<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Detail;
use App\Entity\Plat;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categorie1 = new Categorie();
        $categorie1->setLibelle("Salade");
        $categorie1->setImage("salade_cat.jpg");
        $categorie1->setActive("Yes");


        $plat1 = new Plat();
        $plat1->setLibelle("Salade césar");
        $plat1->setDescription("La salade César est un plat classique et emblématique de la cuisine internationale, originaire des États-Unis. Elle tire son nom de son créateur, Caesar Cardini, un restaurateur italo-américain.");
        $plat1->setPrix("7.00");
        $plat1->setImage("cesar_salad.jpg");
        $plat1->setActive("yes");

        $plat2 = new Plat();
        $plat2->setLibelle("Salade Niçoise");
        $plat2->setDescription("La salade Niçoise est une spécialité provençale composée de tomates, d'œufs durs, de thon, de haricots verts, d'olives et d'anchois, le tout assaisonné d'une vinaigrette à l'huile d'olive.");
        $plat2->setPrix("8.50");
        $plat2->setImage("salade_nicoise.jpg");
        $plat2->setActive("yes");

        $plat3 = new Plat();
        $plat3->setLibelle("Salade Grecque");
        $plat3->setDescription("La salade grecque est une salade rafraîchissante à base de concombres, de tomates, d'oignons rouges, de poivrons, d'olives kalamata et de fromage feta, le tout arrosé d'huile d'olive et de jus de citron.");
        $plat3->setPrix("6.50");
        $plat3->setImage("salade_grecque.jpg");
        $plat3->setActive("yes");

        $plat4 = new Plat();
        $plat4->setLibelle("Salade de quinoa aux légumes");
        $plat4->setDescription("Cette salade colorée associe le quinoa, un grain riche en protéines, à des légumes frais tels que les poivrons, les concombres, les carottes et les tomates. Elle est agrémentée d'une vinaigrette légère à base d'huile d'olive et de jus de citron.");
        $plat4->setPrix("9.00");
        $plat4->setImage('salade-de-quinoa-aux-legumes-d-ete.jpg');
        $plat4->setActive("yes");

        $plat5 = new Plat();
        $plat5->setLibelle("Salade de poulet grillé");
        $plat5->setDescription("Une délicieuse salade composée de laitue croquante, de morceaux de poulet grillé, de tomates cerises, de concombres et d'avocat. Elle est accompagnée d'une vinaigrette au choix : ranch, miel moutarde ou balsamique.");
        $plat5->setPrix("8.00");
        $plat5->setImage("salade_poulet.jpeg");
        $plat5->setActive("yes");

        $categorie2 = new Categorie();
        $categorie2->setLibelle("Pasta");
        $categorie2->setImage("pasta_cat.jpg");
        $categorie2->setActive("Yes");

        $plat2_1 = new Plat();
        $plat2_1->setLibelle("Spaghetti bolognaise");
        $plat2_1->setDescription("Des spaghetti al dente servis avec une sauce bolognaise maison savoureuse à base de viande hachée, de tomates, d'oignons et d'herbes.");
        $plat2_1->setPrix("9.50");
        $plat2_1->setImage("spaghettis-bolognaise.jpg");
        $plat2_1->setActive("yes");


        $plat2_2 = new Plat();
        $plat2_2->setLibelle("Penne Alfredo");
        $plat2_2->setDescription("Des penne cuites à la perfection et nappées d'une sauce crémeuse à base de parmesan, de beurre et d'ail.");
        $plat2_2->setPrix("8.50");
        $plat2_2->setImage("Penne-Alfredo.webp");
        $plat2_2->setActive("yes");

        $plat2_3 = new Plat();
        $plat2_3->setLibelle("Lasagnes à la bolognaise");
        $plat2_3->setDescription("Des couches de pâtes à lasagne intercalées avec une savoureuse sauce bolognaise, de la béchamel et du fromage fondu, le tout gratiné au four.");
        $plat2_3->setPrix("10.00");
        $plat2_3->setImage("lasagnes_viande.jpg");
        $plat2_3->setActive("yes");

        $plat2_4 = new Plat();
        $plat2_4->setLibelle("Tagliatelles aux fruits de mer");
        $plat2_4->setDescription("Des tagliatelles fraîches accompagnées d'un mélange de fruits de mer comprenant des crevettes, des moules et des calamars, le tout relevé d'une sauce tomate aromatique.");
        $plat2_4->setPrix("12.50");
        $plat2_4->setImage("tagliatelle_fruitdemer.jpeg");
        $plat2_4->setActive("yes");

        $plat2_5 = new Plat();
        $plat2_5->setLibelle("Raviolis aux épinards et à la ricotta");
        $plat2_5->setDescription("De délicieux raviolis faits maison, farcis d'un mélange d'épinards frais et de ricotta crémeuse, servis avec une sauce tomate et saupoudrés de parmesan.");
        $plat2_5->setPrix("9.00");
        $plat2_5->setImage("raviolis_epinard.jpeg");
        $plat2_5->setActive("yes");



        $categorie3 = new Categorie();
        $categorie3->setLibelle("Pizza");
        $categorie3->setImage("pizza_cat.jpg");
        $categorie3->setActive("Yes");

        $plat3_1 = new Plat();
        $plat3_1->setLibelle("Margherita");
        $plat3_1->setDescription("Une pizza classique avec une base de sauce tomate, de la mozzarella fondante et des feuilles de basilic frais.");
        $plat3_1->setPrix("10.00");
        $plat3_1->setImage("pizza-margherita.jpg");
        $plat3_1->setActive("yes");

        $plat3_2 = new Plat();
        $plat3_2->setLibelle("Pepperoni");
        $plat3_2->setDescription("Une pizza garnie de tranches de pepperoni épicé, de sauce tomate et de fromage fondant.");
        $plat3_2->setPrix("11.50");
        $plat3_2->setImage("Pizza_peperoni.jpeg");
        $plat3_2->setActive("yes");

        $plat3_3 = new Plat();
        $plat3_3->setLibelle("Quatre fromages");
        $plat3_3->setDescription("Une pizza délicieusement fromagée avec un mélange de mozzarella, de gorgonzola, de fromage de chèvre et de parmesan, le tout fondant et gratiné.");
        $plat3_3->setPrix("12.00");
        $plat3_3->setImage("pizza_quatrefro.jpeg");
        $plat3_3->setActive("yes");

        $plat3_4 = new Plat();
        $plat3_4->setLibelle("Végétarienne");
        $plat3_4->setDescription("Une pizza colorée et savoureuse avec des légumes frais tels que les poivrons, les champignons, les oignons, les tomates et les olives, le tout sur une base de sauce tomate et de fromage.");
        $plat3_4->setPrix("11.50");
        $plat3_4->setImage("pizza.vege.jpeg");
        $plat3_4->setActive("yes");

        $plat3_5 = new Plat();
        $plat3_5->setLibelle("Hawaïenne");
        $plat3_5->setDescription("Une pizza controversée mais appréciée, garnie de jambon, d'ananas juteux et de fromage fondant, pour une combinaison sucrée-salée.");
        $plat3_5->setPrix("11.00");
        $plat3_5->setImage("pizza.hawaienne.jpeg");
        $plat3_5->setActive("yes");

        $plat3_6 = new Plat();
        $plat3_6->setLibelle("Calzone");
        $plat3_6->setDescription("Une pizza pliée en forme de chausson, farcie de sauce tomate, de fromage, de pepperoni et d'autres ingrédients au choix, puis cuite au four jusqu'à obtenir une croûte croustillante.");
        $plat3_6->setPrix("12.50");
        $plat3_6->setImage("calzone.jpeg");
        $plat3_6->setActive("yes");
        // Répétez le processus pour les autres catégories et leurs plats correspondants





        $categorie4 = new Categorie();
        $categorie4->setLibelle("Sushi");
        $categorie4->setImage("sushis.jpeg");
        $categorie4->setActive("Yes");

        $plat4_1 = new Plat();
        $plat4_1->setLibelle("California Roll");
        $plat4_1->setDescription("Un rouleau de sushi inversé avec du riz vinaigré à l'extérieur, rempli de crabe, d'avocat et de concombre.");
        $plat4_1->setPrix("8.50");
        $plat4_1->setImage("california_roll.jpeg");
        $plat4_1->setActive("yes");

        $plat4_2 = new Plat();
        $plat4_2->setLibelle("Saumon Nigiri");
        $plat4_2->setDescription("Des tranches de saumon cru délicatement posées sur du riz vinaigré, souvent servies avec une touche de wasabi.");
        $plat4_2->setPrix("9.00");
        $plat4_2->setImage("Saumon_nigiri.jpeg");
        $plat4_2->setActive("yes");

        $plat4_3 = new Plat();
        $plat4_3->setLibelle("Thon Sashimi");
        $plat4_3->setDescription("Des fines tranches de thon cru frais, servies seules pour mettre en valeur la qualité du poisson.");
        $plat4_3->setPrix("10.50");
        $plat4_3->setImage("thon_sashimi.jpg");
        $plat4_3->setActive("yes");

        $plat4_4 = new Plat();
        $plat4_4->setLibelle("Maki au concombre");
        $plat4_4->setDescription("Un rouleau de sushi avec du riz vinaigré, du concombre croquant et une fine feuille d'algue nori.");
        $plat4_4->setPrix("7.50");
        $plat4_4->setImage("Sushis_cocombre.jpeg");
        $plat4_4->setActive("yes");

        $plat4_5 = new Plat();
        $plat4_5->setLibelle("Temaki aux crevettes");
        $plat4_5->setDescription("Un cône de sushi fait à la main rempli de riz vinaigré, de crevettes grillées, d'avocat et de légumes.");
        $plat4_5->setPrix("9.50");
        $plat4_5->setImage("temaki-crevette-avocat-crevette.jpg");
        $plat4_5->setActive("yes");

        $plat4_6 = new Plat();
        $plat4_6->setLibelle("Sashimi assorti");
        $plat4_6->setDescription("Une sélection variée de tranches de poisson cru, comprenant du saumon, du thon, du maquereau et d'autres poissons de saison.");
        $plat4_6->setPrix("12.00");
        $plat4_6->setImage("Sashimi_assorti.jpeg");
        $plat4_6->setActive("yes");





        $categorie5 = new Categorie();
        $categorie5->setLibelle("Burger");
        $categorie5->setImage("burger_cat.jpg");
        $categorie5->setActive("Yes");

        // Création des plats de la catégorie "Burger"
        $plat5_1 = new Plat();
        $plat5_1->setLibelle("Burger Classique");
        $plat5_1->setDescription("Un burger classique avec du bœuf juteux, du fromage fondu et des légumes frais.");
        $plat5_1->setPrix("9.50");
        $plat5_1->setImage("burger.jpeg");
        $plat5_1->setActive("yes");

        $plat5_2 = new Plat();
        $plat5_2->setLibelle("Burger Végétarien");
        $plat5_2->setDescription("Un burger délicieux à base de légumes grillés, de fromage fondant et d'une sauce maison.");
        $plat5_2->setPrix("8.50");
        $plat5_2->setImage("burger_vege.jpg");
        $plat5_2->setActive("yes");

        $plat5_3 = new Plat();
        $plat5_3->setLibelle("Burger au Poulet Croustillant");
        $plat5_3->setDescription("Un burger savoureux avec du poulet croustillant, des légumes croquants et une sauce spéciale.");
        $plat5_3->setPrix("10.00");
        $plat5_3->setImage("burger_poulet.png");
        $plat5_3->setActive("yes");

        $plat5_4 = new Plat();
        $plat5_4->setLibelle("Burger BBQ");
        $plat5_4->setDescription("Un burger délicieusement fumé avec du porc effiloché, une sauce barbecue et des oignons croustillants.");
        $plat5_4->setPrix("11.50");
        $plat5_4->setImage("burger_bbc.jpg");
        $plat5_4->setActive("yes");

        $plat5_5 = new Plat();
        $plat5_5->setLibelle("Burger au Fromage Bleu");
        $plat5_5->setDescription("Un burger audacieux avec du bœuf grillé, du fromage bleu crémeux et des champignons sautés.");
        $plat5_5->setPrix("12.00");
        $plat5_5->setImage("burger_fromagebleu.jpeg");
        $plat5_5->setActive("yes");

        $plat5_6 = new Plat();
        $plat5_6->setLibelle("Burger au Saumon");
        $plat5_6->setDescription("Un burger gourmet avec du saumon frais, de l'avocat, des légumes croquants et une sauce citronnée.");
        $plat5_6->setPrix("13.50");
        $plat5_6->setImage("burger_saumon.jpeg");
        $plat5_6->setActive("yes");









        // Création de la catégorie "Soupe"
        $categorie6 = new Categorie();
        $categorie6->setLibelle("Soupe");
        $categorie6->setImage("soupe.jpg");
        $categorie6->setActive("Yes");

        // Création des plats de la catégorie "Soupe"
        $plat6_1 = new Plat();
        $plat6_1->setLibelle("Soupe à l'oignon");
        $plat6_1->setDescription("Une délicieuse soupe à l'oignon gratinée avec du fromage fondant.");
        $plat6_1->setPrix("6.50");
        $plat6_1->setImage("soupe_oignon.jpeg");
        $plat6_1->setActive("yes");

        $plat6_2 = new Plat();
        $plat6_2->setLibelle("Soupe aux légumes");
        $plat6_2->setDescription("Une soupe savoureuse aux légumes frais de saison.");
        $plat6_2->setPrix("7.50");
        $plat6_2->setImage("soupe_legume.jpg");
        $plat6_2->setActive("yes");

        $plat6_3 = new Plat();
        $plat6_3->setLibelle("Soupe Tom Yum");
        $plat6_3->setDescription("Une soupe épicée et acidulée d'inspiration thaïlandaise avec du citronnelle, des crevettes et des champignons.");
        $plat6_3->setPrix("8.50");
        $plat6_3->setImage("soupe_tomyum.jpeg");
        $plat6_3->setActive("yes");

        $plat6_4 = new Plat();
        $plat6_4->setLibelle("Soupe de poisson");
        $plat6_4->setDescription("Une soupe riche et savoureuse à base de poissons frais et d'épices aromatiques.");
        $plat6_4->setPrix("9.50");
        $plat6_4->setImage("soupe_poisson.jpg");
        $plat6_4->setActive("yes");

        $plat6_5 = new Plat();
        $plat6_5->setLibelle("Soupe miso");
        $plat6_5->setDescription("Une soupe japonaise traditionnelle à base de pâte de soja fermentée et de bouillon dashi.");
        $plat6_5->setPrix("7.50");
        $plat6_5->setImage("soupe_miso.jpg");
        $plat6_5->setActive("yes");

        $plat6_6 = new Plat();
        $plat6_6->setLibelle("Soupe de lentilles");
        $plat6_6->setDescription("Une soupe nourrissante à base de lentilles, d'épices et d'aromates.");
        $plat6_6->setPrix("6.50");
        $plat6_6->setImage("soupe_lentille.jpeg");
        $plat6_6->setActive("yes");



        // Création de la catégorie "Dessert"
        $categorie7 = new Categorie();
        $categorie7->setLibelle("Dessert");
        $categorie7->setImage("dessert.jpg");
        $categorie7->setActive("Yes");

        // Création des plats de la catégorie "Dessert"
        $plat7_1 = new Plat();
        $plat7_1->setLibelle("Tarte aux pommes");
        $plat7_1->setDescription("Une délicieuse tarte aux pommes faite maison avec une croûte croustillante et une garniture aux pommes fondantes.");
        $plat7_1->setPrix("5.50");
        $plat7_1->setImage("tarte_pomme.jpeg");
        $plat7_1->setActive("yes");

        $plat7_2 = new Plat();
        $plat7_2->setLibelle("Fondant au chocolat");
        $plat7_2->setDescription("Un dessert divinement chocolaté avec un cœur fondant et une texture riche et moelleuse.");
        $plat7_2->setPrix("6.50");
        $plat7_2->setImage("fondant_choco.jpeg");
        $plat7_2->setActive("yes");

        $plat7_3 = new Plat();
        $plat7_3->setLibelle("Crème brûlée");
        $plat7_3->setDescription("Un classique français avec une crème onctueuse et une croûte caramélisée.");
        $plat7_3->setPrix("7.00");
        $plat7_3->setImage("creme_brule.jpeg");
        $plat7_3->setActive("yes");

        $plat7_4 = new Plat();
        $plat7_4->setLibelle("Cheesecake aux fruits rouges");
        $plat7_4->setDescription("Un cheesecake crémeux garni de délicieux fruits rouges et d'un coulis acidulé.");
        $plat7_4->setPrix("8.50");
        $plat7_4->setImage("cheescake_fruitrouge.jpeg");
        $plat7_4->setActive("yes");

        $plat7_5 = new Plat();
        $plat7_5->setLibelle("Panna Cotta à la vanille");
        $plat7_5->setDescription("Un dessert italien élégant et léger à base de crème, de sucre et d'extrait de vanille.");
        $plat7_5->setPrix("6.00");
        $plat7_5->setImage("pana_cota_vanille.jpeg");
        $plat7_5->setActive("yes");

        $plat7_6 = new Plat();
        $plat7_6->setLibelle("Mousse au chocolat");
        $plat7_6->setDescription("Une mousse aérienne au chocolat noir intense, parfaitement sucrée et délicieusement indulgente.");
        $plat7_6->setPrix("5.50");
        $plat7_6->setImage("mousse_choco.jpeg");
        $plat7_6->setActive("yes");

        // Ajoutez les six plats de la catégorie "Dessert" de manière similaire



        $plat1->setIdCategorie($categorie1);
        // $categorie1->addPlat($plat1);
        $plat2->setIdCategorie($categorie1);
        // $categorie1->addPlat($plat2);
        $plat3->setIdCategorie($categorie1);
        // $categorie1->addPlat($plat3);
        $plat4->setIdCategorie($categorie1);
        // $categorie1->addPlat($plat4);
        $plat5->setIdCategorie($categorie1);
        // $categorie1->addPlat($plat5);


        $plat2_1->setIdCategorie($categorie2);
        // $categorie2->addPlat($plat2_1);
        $plat2_2->setIdCategorie($categorie2);
        // $categorie2->addPlat($plat2_2);
        $plat2_3->setIdCategorie($categorie2);
        // $categorie2->addPlat($plat2_3);
        $plat2_4->setIdCategorie($categorie2);
        // $categorie2->addPlat($plat2_4);
        $plat2_5->setIdCategorie($categorie2);
        // $categorie2->addPlat($plat2_5);



        $plat3_1->setIdCategorie($categorie3);
        // $categorie3->addPlat($plat3_1);
        $plat3_2->setIdCategorie($categorie3);
        // $categorie3->addPlat($plat3_2);
        $plat3_3->setIdCategorie($categorie3);
        // $categorie3->addPlat($plat3_3);
        $plat3_4->setIdCategorie($categorie3);
        // $categorie3->addPlat($plat3_4);
        $plat3_5->setIdCategorie($categorie3);
        // $categorie3->addPlat($plat3_5);
        $plat3_6->setIdCategorie($categorie3);
        // $categorie3->addPlat($plat3_6);


        $plat4_1->setIdCategorie($categorie4);
        // $categorie4->addPlat($plat4_1);
        $plat4_2->setIdCategorie($categorie4);
        // $categorie4->addPlat($plat4_2);
        $plat4_3->setIdCategorie($categorie4);
        // $categorie4->addPlat($plat4_3);
        $plat4_4->setIdCategorie($categorie4);
        // $categorie4->addPlat($plat4_4);
        $plat4_5->setIdCategorie($categorie4);
        // $categorie4->addPlat($plat4_5);
        $plat4_6->setIdCategorie($categorie4);
        // $categorie4->addPlat($plat4_6);

        $plat5_1->setIdCategorie($categorie5);
        // $categorie5->addPlat($plat5_1);
        $plat5_2->setIdCategorie($categorie5);
        // $categorie5->addPlat($plat5_2);
        $plat5_3->setIdCategorie($categorie5);
        // $categorie5->addPlat($plat5_3);
        $plat5_4->setIdCategorie($categorie5);
        // $categorie5->addPlat($plat5_4);
        $plat5_5->setIdCategorie($categorie5);
        // $categorie5->addPlat($plat5_5);
        $plat5_6->setIdCategorie($categorie5);
        // $categorie5->addPlat($plat5_6);

        $plat6_1->setIdCategorie($categorie6);
        // $categorie6->addPlat($plat6_1);
        $plat6_2->setIdCategorie($categorie6);
        // $categorie6->addPlat($plat6_2);
        $plat6_3->setIdCategorie($categorie6);
        // $categorie6->addPlat($plat6_3);
        $plat6_4->setIdCategorie($categorie6);
        // $categorie6->addPlat($plat6_4);
        $plat6_5->setIdCategorie($categorie6);
        // $categorie6->addPlat($plat6_5);
        $plat6_6->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat6_6);

        $plat7_1->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat7_1);
        $plat7_2->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat7_2);
        $plat7_3->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat7_3);
        $plat7_4->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat7_4);
        $plat7_5->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat7_5);
        $plat7_6->setIdCategorie($categorie7);
        // $categorie7->addPlat($plat7_6);

        $utilisateur1 = new User();
        $utilisateur1->setEmail("joel80@gmail.fr");
        $utilisateur1->setRoles(["ROLE_USER"]);
        $utilisateur1->setPassword("pas1");
        $utilisateur1->setNom("joel");
        $utilisateur1->setPrenom("poel");
        $utilisateur1->setTelephone("0610253748");
        $utilisateur1->setAdresse("rue de amiens");
        $utilisateur1->setCp("80");
        $utilisateur1->setVille("Amiens");



     

        $utilisateur2 = new User();
        $utilisateur2->setEmail("joel80@gmail.com");
        $utilisateur2->setRoles(["ROLE_USER"]);
        $utilisateur2->setPassword("pas2");
        $utilisateur2->setNom("noel");
        $utilisateur2->setPrenom("foel");
        $utilisateur2->setTelephone("0799885477");
        $utilisateur2->setAdresse("rue de beauvais");
        $utilisateur2->setCp("60");
        $utilisateur2->setVille("beauvais");
       
        $utilisateur3 = new User();
        $utilisateur3->setEmail("joel80@gmail.de");
        $utilisateur3->setRoles(["ROLE_USER"]);
        $utilisateur3->setPassword("pas3");
        $utilisateur3->setNom("goeland");
        $utilisateur3->setPrenom("glacial");
        $utilisateur3->setTelephone("0977885544");
        $utilisateur3->setAdresse("rue de longueau");
        $utilisateur3->setCp("80");
        $utilisateur3->setVille("longeau");

        $commande1 = new Commande();
        $commande1->setDateCommande(new \Datetime());
        $commande1->setTotal("0");
        $commande1->setEtat("1");
        $commande1->setUser($utilisateur1);
        $commande1->setAdresseDeFacturation('lyon');
        $commande1->setMoyenDePayement('carte');
        $commande1->setAdresseDeLivraison('Afpa');





        $commande2 = new Commande();
        $commande2->setDateCommande(new \Datetime());
        $commande2->setTotal("1");
        $commande2->setEtat("0");
        $commande2->setUser($utilisateur2);
        $commande2->setAdresseDeFacturation('Monaco');
        $commande2->setMoyenDePayement('chéque');
        $commande2->setAdresseDeLivraison('Promeo');




        $commande3 = new Commande();
        $commande3->setDateCommande(new \Datetime());
        $commande3->setTotal("2");
        $commande3->setEtat("2");
        $commande3->setUser($utilisateur2);
        $commande3->setAdresseDeFacturation('Amiens');
        $commande3->setMoyenDePayement('virement');
        $commande3->setAdresseDeLivraison('Centre');






        $detail1 = new Detail();
        $detail1->setQuantite("5");
        $detail1->setCommande($commande1);
        $detail1->setPlat($plat1);

        $detail2 = new Detail();
        $detail2->setQuantite("3");
        $detail2->setCommande($commande2);
        $detail2->setPlat($plat2_1);




        $detail3 = new Detail();
        $detail3->setQuantite("6");
        $detail3->setCommande($commande3);
        $detail3->setPlat($plat3_1);




        $detail4 = new Detail();
        $detail4->setQuantite("1");
        $detail4->setCommande($commande2);
        $detail4->setPlat($plat4_1);



        $detail5 = new Detail();
        $detail5->setQuantite("1");
        $detail5->setCommande($commande2);
        $detail5->setPlat($plat5_1);




        $detail6 = new Detail();
        $detail6->setQuantite("1");
        $detail6->setCommande($commande1);
        $detail6->setPlat($plat6_1);







        $manager->persist($plat1);
        $manager->persist($plat2);
        $manager->persist($plat3);
        $manager->persist($plat4);
        $manager->persist($plat5);

        $manager->persist($plat2_1);
        $manager->persist($plat2_2);
        $manager->persist($plat2_3);
        $manager->persist($plat2_4);
        $manager->persist($plat2_5);


        $manager->persist($plat3_1);
        $manager->persist($plat3_2);
        $manager->persist($plat3_3);
        $manager->persist($plat3_4);
        $manager->persist($plat3_5);
        $manager->persist($plat3_6);


        $manager->persist($plat4_1);
        $manager->persist($plat4_2);
        $manager->persist($plat4_3);
        $manager->persist($plat4_4);
        $manager->persist($plat4_5);
        $manager->persist($plat4_5);

        $manager->persist($plat5_1);
        $manager->persist($plat5_2);
        $manager->persist($plat5_3);
        $manager->persist($plat5_4);
        $manager->persist($plat5_5);
        $manager->persist($plat5_6);

        $manager->persist($plat6_1);
        $manager->persist($plat6_2);
        $manager->persist($plat6_3);
        $manager->persist($plat6_4);
        $manager->persist($plat6_5);
        $manager->persist($plat6_6);

        $manager->persist($plat7_1);
        $manager->persist($plat7_2);
        $manager->persist($plat7_3);
        $manager->persist($plat7_4);
        $manager->persist($plat7_5);
        $manager->persist($plat7_6);

        $manager->persist($categorie1);
        $manager->persist($categorie2);
        $manager->persist($categorie3);
        $manager->persist($categorie4);
        $manager->persist($categorie5);
        $manager->persist($categorie6);
        $manager->persist($categorie7);


        $manager->persist($utilisateur1);
        $manager->persist($utilisateur2);
        $manager->persist($utilisateur3);



        $manager->persist($commande1);
        $manager->persist($commande2);
        $manager->persist($commande3);



        $manager->persist($detail1);
        $manager->persist($detail2);
        $manager->persist($detail3);
        $manager->persist($detail4);
        $manager->persist($detail5);
        $manager->persist($detail6);





        $manager->flush();
    }
}
