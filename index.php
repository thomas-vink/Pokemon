<!DOCTYPE html>
<html>
<head>
	<title>Pokemon</title>
	<script>
		var rand = pokemons[Math.floor(Math.random() * pokemons.length)];
	</script>
</head>
<body>

<?php
	require 'Pokemon.php';
	require 'Attack.php';

	$pokemons = [];

	$m = new Pokemon("Muk", 75,105);
	$m->Attacks[] = new Attack("Pound", 40, 100);
	$pokemons[] = $m;

	$l = new Pokemon("Lucario", 70, 70);
	$l->Attacks[] = new Attack("Quick Attack", 40, 100);
	$pokemons[] = $l;

	$i = new Pokemon("Infernape", 71,76);
	$i->Attacks[] = new Attack("Scratch", 40, 100);
	$pokemons[] = $i;

	$n = new Pokemon("Nidoran", 40,46);
	$n->Attacks[] = new Attack("Peck", 35, 100);
	$pokemons[] = $n;

	$me = new Pokemon("Mew", 100,100);
	$me->Attacks[] = new Attack("Pound", 40, 100);
	$pokemons[] = $me;

	$b = new Pokemon("Beedrill", 40,65);
	$b->Attacks[] = new Attack("Twineedle", 25, 100);
	$pokemons[] = $b;

	$bl = new Pokemon("Blastoise", 100,79);
	$bl->Attacks[] = new Attack("Tackle", 40, 100);
	$pokemons[] = $bl;

	$p = new Pokemon("Pidgeotto", 55,63);
	$p->Attacks[] = new Attack("Tackle", 40, 100);
	$pokemons[] = $p;


	$mt = new Pokemon("Mewtwo", 90,106);
	$mt->Attacks[] = new Attack("Confusion", 50, 100);
	$pokemons[] = $mt;

	$allp = array($mt, $m);

	
	$pm1 = array_rand($pokemons, 1);
	$pm2 = array_rand($pokemons, 1);

		
    prettyPrint($pokemons[$pm1]);
    prettyPrint($pokemons[$pm2]);


	foreach($pokemons[$pm1]->Attacks as $attack) {
	    prettyPrint("Execute attack " . $attack->Name . ' on ' . $pokemons[$pm2]->Name. ' by ' . $pokemons[$pm1]->Name);
	    $attack->Execute($pokemons[$pm2]);
	}

	prettyPrint($p);

	function prettyPrint($var) {
	    echo '<pre>';
	    print_r($var);
	    echo '</pre>';
	}
	?>
</body>
</html>