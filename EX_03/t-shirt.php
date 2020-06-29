<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php
$nom_produit = "T-shirt simple";
echo "<h3>Le nom du produit est $nom_produit</h3>";
$prix = 10.50 ;
$disponible = true ; 
$quantite = 10 ;
echo  "<h3> Il reste $quantite produits en stock</h3>";
$couleur = "Blanc";
echo "<h3> Le produit $nom_produit est de couleur $couleur</h3>";
$a = $prix * 3;
echo "<h4> Acheter 3 produits coûterait $a </h4>";
$b = $quantite * $prix; 
echo "<h4> Acheter la totalité des produits coûterait $b  </h4>";
$c = $quantite - 3 ; 
echo "<h4> Si 3 produits sont vendus, il reste $c produits en stocks </h4>";
if($disponible = true)
{echo "<p> Le produit $nom_produit est disponible en ligne <p>";}
if($disponible = false) 
{echo "<p> Le produit $nom_produit n'est malheureusement plus disponible en ligne <p>";}
if($quantite > 5)
{echo "<p> Il reste plus de la moitié des produits en magasin <p>";}
if($quantite < 5)
{echo "<p> Il ne reste moins de la moitié des produits en magasin <p>";}
if($quantite = 1)
{echo "<p> Il ne reste plus qu'un produit en magasin <p>";}
if($quantite = 0)
{echo "<p> Il ne reste plus de produit en magasin <p>";}
?>