<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'includes/head.php'; ?>
</head>

<body class="bg-dark">
    <?php require 'includes/navigation.php'; ?>

    <div class="container">
        <div class="mt-5 justify-content-center">
            <h1 id="name" class="text-light text-center mt-2"></h1>

            <div class="card bg-dark border-secondary">

                <div class="row">
                    <div class="col-sm-6">
                        <div id="characterImg">

                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="card-body">
                            <table class="table table-sm text-center">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="bg-table">
                                            <p class="card-title text-dark fw-bold">Biography</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold"> Name <span id="name"> </span></p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="realName"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Alias(es)</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="aliases"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Alter Ego(s)</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="alteregos"> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Place of Birth</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="placeOfBirth"> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">First Appearance</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="firstAppearance"> </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Publisher</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="publisher"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-table">
                                            <p class="card-title text-dark fw-bold">Appearance</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Race</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="race"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Gender</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="gender"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Hair Color</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="hairColor"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Eye Color</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="eyeColor"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Height</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="height"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Weight</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="weight"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="bg-table">
                                            <p class="card-title text-dark fw-bold">Power Stats</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Combat</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="combat"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Durability</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="durability"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Intelligence</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="intelligence"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Power</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="power"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Speed</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="speed"></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="card-title text-light fw-bold">Strength</p>
                                        </td>
                                        <td>
                                            <p class="card-title text-light" id="strength"></p>
                                        </td>
                                    </tr>



                                </tbody>

                            </table>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <?php
    session_start();
    $_SESSION['charid'] = $_POST['characterid'];
    ?>
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
                const durability = document.getElementById("durability");
                const intelligence = document.getElementById("intelligence");
                const power = document.getElementById("power");
                const speed = document.getElementById("speed");
                const strength = document.getElementById("strength");


                //arrays
                const aliasesArray = data.biography["aliases"];
                const heightArray = data.appearance["height"];
                const weightArray = data.appearance["weight"];
                // character data - biography
                name.innerHTML = `${data.name}`;
                aliases.innerHTML = aliasesArray.join(", ");
                characterImg.innerHTML += `<img src="${data.image["url"]}" class="card-img-top" style=" width: 100%; height: 100%; object-fit: cover;">`;
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
                combat.innerHTML = `${data.powerstats["combat"]}`;
                durability.innerHTML = `${data.powerstats["durability"]}`;
                intelligence.innerHTML = `${data.powerstats["intelligence"]}`;
                power.innerHTML = `${data.powerstats["power"]}`;
                speed.innerHTML = `${data.powerstats["speed"]}`;
                strength.innerHTML = `${data.powerstats["strength"]}`;



            })
            .catch((error) => console.log(error));
        console.log(name);
    </script>
</body>

</html>