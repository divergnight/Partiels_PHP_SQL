<?php
	class Guerrier
	{
		public $niveau;
		public $nom;
		public $age;
		public $force;

		public function __construct($nom,$age)
    	{
        	$this->niveau = 1;
			$this->nom = $nom;
			$this->age = $age;
			$this->force = 100;
    	}
  		public function getNiveau(){ return $this->niveau; }
		public function getNom(){ return $this->nom; }
		public function getAge(){ return $this->age; }
		public function getForce(){ return $this->force; }

  		public function setNiveau($new){ $this->niveau = $new; }
		public function setNom($new){ $this->nom = $new; }
		public function setAge($new){ $this->age = $new; }
		public function setForce($new){ $this->force = $new; }

		public function levelUp(){ $this->niveau++; $this->force+=50;}

		public function AttaqueCoupDeHache(){
			if(random_int(0,1) === 1){
				$atk = $this->force*1.5;
				return "Attaque réussi : $atk";
			}
			else{
				return 'Attaque raté';
			}
		}
	}

	$war = new Guerrier("Charlie",57);
	$nom = $war->getNom();
	$age = $war->getAge();
	echo "Création d'un nouveau guerrier : $nom agé de $age ans.<br>";
	echo $war->AttaqueCoupDeHache();
	$war->levelUp();
	echo '<br>Level Up<br>';
	echo $war->AttaqueCoupDeHache();

?>