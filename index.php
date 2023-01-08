<!DOCTYPE html>
<html lang="en">

<head>
    <?php require "includes/head.php"; ?>
</head>

<body>
    <?php require "includes/navigation.php"; ?>
    <center>
        <img src="images/book.gif" alt="Hero DB">
        <p class="is-size-1 has-text-light has-text-centered mb-5">Hero DB</p>
        <p class="is-size-4 has-text-light has-text-centered">
            A collection of superheroes and <br />
            villains data from <br />
            multiple universes
        </p>
        <section id="form">
            <form method="post" action="superherodata.php">
                <div class="mt-5 mb-3">
                    <center>
                        <input class="input is-link is-large has-text-weight-semibold" type="text" name="characterid" placeholder="Enter the ID of the character" style="width:40%;">
                        <p class="has-text-grey-light has-text-justified" style="width:40%;"> You can search through character ID <a href="superherolist.php" class="has-text-success"> here</a></p>
                        <br>
                        <button class="button is-link is-outlined has-text-weight-semibold is-medium mb-5" type="submit"> See character data</button>
                    </center>
                </div>
            </form>
        </section>
    </center>
    <script src="js/index.js"></script>
</body>

</html>