<?php

class eSportsOrganization{
    public $organizationName;
    public $headquarters;
    public $chairman;
    public $founded;

    function __construct($organizationName, $headquarters, $chairman, $founded){
        $this->organizationName = $organizationName;
        $this->headquarters = $headquarters;
        $this->chairman = $chairman;
        $this->founded = $founded;
    }

    public function eSportsTeamInfo(){
        return "<h2>The Esports Organization name is ".$this->organizationName." it was founded on ".$this->founded."<br/> The chairman's name is ".$this->chairman.
        "<br/> The headquarters is located in ".$this->headquarters."</h2><br/>";
    }

}

class player extends eSportsOrganization{
    public $playerName;
    public $division;
    public $location;
    public $gamerTag;

    function __construct($organizationName, $headquarters, $chairman, $founded, $playerName, $division, $location, $gamerTag){
        eSportsOrganization::__construct($organizationName, $headquarters, $chairman, $founded);
        $this->playerName = $playerName;
        $this->division = $division;
        $this->location = $location;
        $this->gamerTag = $gamerTag;
    }

    public function playerInfo(){
        return "<h2>".$this->playerName." plays for ".$this->organizationName." in the ".$this->division." division.
        <br/> His gamer tag is ".$this->gamerTag."<br/> He lives in ".$this->location.".</h2><br/>";
    }
}
$Team1 = new eSportsOrganization('Fnatic','London','Sam Mathews','07/23/2004');
echo $Team1->EsportsTeamInfo();

$player1 = new player('Fnatic','London','Sam Mathews','07/23/2004','Benjamin Eekenulv','Heroes of the Storm','Berlin','BadBenny');
echo $player1->PlayerInfo();
?>