<?php 
$me = new Me();
$theWorld = new World(); 
// get only women for marriage
$allWomens = $theWorld->getAllWomenForMarriage(); 
// define my women characters 
$myWomenCharacters = [
    'Religious',
    'Beautiful',
    'Programmer'
];
$possibleWomens = array();
// check if any women characters is equal or more than my desired characters
foreach($woman as $women){
    if(array_intersect($woman->getCharacters(),$myWomenCharacters) >= count($myWomenCharacters)){
        array_push($possibleWomens,$women);
    }
}
$myPossibilities = count($possibleWomens);
// if there possible women try to seek god and try to marry else stay single
if(count($myPossibilities) > 0){
    $married = false;
    while($married == false){
        $randomWomen = array_rand($possibleWomens);
        if(GODseek($randomWomen) == TRUE){
            $married = TRUE;
            $me->marry($randomWomen);
            $me->lol(100);
        }
    }
}else{
    $me->staySingleForEver();
}
?>