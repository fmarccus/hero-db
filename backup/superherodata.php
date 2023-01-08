<?php
session_start();
$_SESSION['charid'] = $_POST['characterid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'includes/head.php'; ?>
</head>

<body class="bg-dark">
    <?php require 'includes/navigation.php'; ?>

    <div class="container mb-5">
        <div class="row">
            <div class="col-sm-3 mt-5 text-light">
                <h2 id="name" class="fw-bold text-center"></h2>
                <div id="characterImg">
                </div>
                <p class="fw-bold mt-2">Real Name: <span class="fw-normal" id="realName"></span></p>
                <p class="fw-bold"> Occupation: <span class="fw-normal" id="occupation"></span>
                </p>
                <p class="fw-bold"> Base: <span class="fw-normal" id="base"></span>
                </p>
                <table class="table text-center text-light">
                    <thead>
                        <tr>
                            <td colspan=3 class="fw-bold">Power Stats</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fa-solid fa-hand-fist me-2"></i> <span id="combat"></span></td>
                            <td><i class="fa-solid fa-shield-halved me-2"></i> <span id="durability"></span></td>
                            <td><i class="fa-solid fa-brain me-2"></i> <span id="intelligence"></span></td>
                        </tr>
                        <tr>
                            <td><i class="fa-solid fa-burst me-2"></i> <span id="power"></span></td>
                            <td><i class="fa-solid fa-person-running me-2"></i> <span id="speed"></span></td>
                            <td><i class="fa-solid fa-dumbbell me-2"></i> <span id="strength"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-9 mt-5 text-light">
                <h3 class="">Biography</h3>
                <div class="table-responsive">
                    <table class="table text-light">
                        <tbody>
                            <tr class="">
                                <td class="fw-bold">Alias(es)</td>
                                <td id="aliases"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Alter Ego(s)</td>
                                <td id="alteregos"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Place of Birth</td>
                                <td id="placeOfBirth"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">First Appearance</td>
                                <td id="firstAppearance"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Publisher</td>
                                <td id="publisher"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h3 class="mt-5">Appearance</h3>
                <div class="table-responsive">
                    <table class="table text-light">
                        <tbody>
                            <tr class="">
                                <td class="fw-bold">Race</td>
                                <td id="race"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Gender</td>
                                <td id="gender"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Hair Color</td>
                                <td id="hairColor"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Eye Color</td>
                                <td id="eyeColor"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Height</td>
                                <td id="height"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Weight</td>
                                <td id="weight"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <h3 class="mt-5">Connections</h3>
                <div class="table-responsive">
                    <table class="table text-light">
                        <tbody>
                            <tr class="">
                                <td class="fw-bold">Affiliation(s)</td>
                                <td id="affiliations"></td>
                            </tr>
                            <tr class="">
                                <td class="fw-bold">Relative(s)</td>
                                <td id="relatives"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <script>
        var id = <?php echo $_SESSION['charid']; ?>;
        fetch("https://www.superheroapi.com/api.php/6230998213612277/" + id)
            .then((res) => {
                return res.json();
            })
            .then((data) => {
                console.log(data);
                //html elements
                const characterImg = document.getElementById("characterImg");
                const name = document.getElementById("name");
                const realName = document.getElementById("realName");
                const aliases = document.getElementById("aliases");
                const gender = document.getElementById("gender");
                const alteregos = document.getElementById("alteregos");
                const placeOfBirth = document.getElementById("placeOfBirth");
                const firstAppearance = document.getElementById("firstAppearance");
                const publisher = document.getElementById("publisher");
                const race = document.getElementById("race");
                const hairColor = document.getElementById("hairColor");
                const eyeColor = document.getElementById("eyeColor");
                const height = document.getElementById("height");
                const weight = document.getElementById("weight");
                const combat = document.getElementById("combat");
                const occupation = document.getElementById("occupation");
                const base = document.getElementById("base");
                const affiliations = document.getElementById("affiliations");
                const relatives = document.getElementById("relatives");




                //arrays
                const aliasesArray = data.biography["aliases"];
                const heightArray = data.appearance["height"];
                const weightArray = data.appearance["weight"];
                // character data - biography
                name.innerHTML = `${data.name}`;
                aliases.innerHTML = aliasesArray.join(", ");
                characterImg.innerHTML += `<img src="${data.image["url"]}" class="img-fluid img-thumbnail" style=" width: 100%; height: 100%;">`;
                realName.innerHTML = `${data.biography["full-name"]}`;
                alteregos.innerHTML = `${data.biography["alter-egos"]}`;
                placeOfBirth.innerHTML = `${data.biography["place-of-birth"]}`;
                firstAppearance.innerHTML = `${data.biography["first-appearance"]}`;
                publisher.innerHTML = `${data.biography["publisher"]}`;
                // character data - appearance
                race.innerHTML = data.appearance["race"] == "null" ? "No data available" : data.appearance["race"];
                gender.innerHTML = `${data.appearance["gender"]}`;
                hairColor.innerHTML = `${data.appearance["hair-color"]}`;
                eyeColor.innerHTML = `${data.appearance["eye-color"]}`;
                height.innerHTML = heightArray.join(" / ");
                weight.innerHTML = weightArray.join(" / ");
                // character data - power stats
                combat.innerHTML = data.powerstats["combat"] == "null" ? "-" : data.powerstats["combat"];
                durability.innerHTML = data.powerstats["durability"] == "null" ? "-" : data.powerstats["durability"];
                intelligence.innerHTML = data.powerstats["intelligence"] == "null" ? "-" : data.powerstats["intelligence"];
                power.innerHTML = data.powerstats["power"] == "null" ? "-" : data.powerstats["power"];
                speed.innerHTML = data.powerstats["speed"] == "null" ? "-" : data.powerstats["speed"];
                strength.innerHTML = data.powerstats["strength"] == "null" ? "-" : data.powerstats["strength"];
                // character data - work
                occupation.innerHTML = data.work["occupation"] == "null" ? "-" : data.work["occupation"];
                base.innerHTML = data.work["base"] == "-" ? "No data available" : data.work["base"];
                affiliations.innerHTML = data.connections["group-affiliation"] == "-" ? "No data available" : data.connections["group-affiliation"];
                relatives.innerHTML = data.connections["relatives"] == "-" ? "No data available" : data.connections["relatives"];





            })
            .catch((error) => console.log(error));
        console.log(name);
    </script>
</body>

</html>