<body>
    <!--Hidden thank you msg-->
    <div class="hidden-msg" id="hiddenMsg">
        <h2>
            THANK YOU!
        </h2>
    </div>
    <!--Master container-->
    <div class="master-container" id="masterContainer">
        <h1 class="title">Lab 02 - Variables and Control Structures</h1>
        <form>
            <div class="input-container">
                <label for="full-name">Full Name</label>
                <input type="text" name="full-name" id="fullName" class="input">
            </div>
            <div class="input-container">
                <label for="age">Age In Years</label>
                <input type="number" name="age" id="age" class="input">
            </div>
            <input type="button" value="Submit" class="submit-btn" id="submit">
        </form>
    <!--Inclusion of footer file -->
    <?php
        require('footer.php');
    ?>
