<?php

// Exo 1
/**
 * @return bool
 */
function rTrue() : bool {
    return true;
}

echo rTrue() . "<br>";


// Exo 2
/**
 * @param string $yourString
 * @return string
 */
function rString(string $yourString) : string{
    return $yourString;
}

echo rString("Coucou") . "<br>";


// Exo 3
/**
 * @param string $string1
 * @param string $string2
 * @return string
 */
function concatString(string $string1, string $string2) : string{
    return $string1 . " " . $string2;
}

echo concatString("Hola", "8") . "<br>";


// Exo 4
/**
 * @param int $nb1
 * @param int $nb2
 * @return string
 */
function nbr(int $nb1, int $nb2) : string {
    if ($nb1 > $nb2) {
        return " Le premier nombre est plus grand";
    }
    elseif ($nb1 < $nb2) {
        return "Le premier nombre est plus petit";
    }
    else {
        return "Les deux nombres sont identiques";
    }
}

echo nbr(3, 8) . "<br>";


// Exo 5
/**
 * @param string $yourString
 * @param int $yourNumber
 * @return string
 */
function concatStrInt(string $yourString, int $yourNumber) : string {
    return $yourString . " " . $yourNumber;
}

echo concatStrInt("Hello", 5) . "<br>";


// Exo 6
/**
 * @param string $name
 * @param string $firstName
 * @param int $age
 * @return string
 */
function name(string $name, string $firstName, int $age) : string{
    return "Bonjour " . $name . " " . $firstName . ", tu as " . $age . " ans";
}

echo name("Olivier", "Damien", 21) . "<br>";


// Exo 7
/**
 * @param string $gender
 * @param int $age
 * @return string
 */
function genderAge(string $gender, int $age) : string{
    $thisAge = null;
    $thisGender = "";

    // gender
    if ($gender === "Homme") {
        $thisGender = "Vous êtes un homme";
    }
    elseif ($gender === "Femme") {
        $thisGender = "Vous êtes une femme";
    }

    // age
    if ($age > 18) {
        $thisAge = "vous êtes majeur.";
    }
    else {
        $thisAge = "vous êtes mineur.";
    }

    return $thisGender . " et " . $thisAge;
}

echo genderAge("Homme", 21) . "<br>";

// Exo 8
/**
 * @param int $nb1
 * @param int $nb2
 * @param int $nb3
 * @return int
 */
function addNumber(int $nb1 = 1, int $nb2 = 1, int $nb3 = 1) : int{
    return $nb1 + $nb2 + $nb3;
}

echo addNumber(2, 5);
?>



