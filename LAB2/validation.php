<script>
    //On load, fire this function
    window.onload = function() {
        //Store the submit button as a variable
        var submitBtn = document.getElementById('submit');
        //Store the hidden message as variable
        var hiddenMsg = document.getElementById('hiddenMsg');
        //On load, hide the hidden message
        hiddenMsg.style.display = 'none';
        //Listen for the submit button to be clicked
        submitBtn.addEventListener('click', function validateForm() {
            //Store the full name input field as a variable
            var fullName = document.forms[0].fullName;
            //Store the age input field as a variable
            var age = document.forms[0].age;
            //Store the entire form as a variable
            var userForm = document.forms[0];
            //FORM VALIDATION
            if(!fullName.value || fullName.value === "") {
                //Change the background of the 'full name' input field to pink
                fullName.style.backgroundColor = "pink";
                //Change the background of the 'age' input field to pink
                age.style.backgroundColor = "pink";
                //Focus on the full name field
                fullName.focus();
                //Stop the form from sending
                return false;
            //Also, if:
            }else if(!age.value || isNaN(age.value) || age.value === 0 || age.value === null) {
                //Change the age field to pink
                age.style.backgroundColor = "pink";
                //Focus on the age field.
                age.focus();
                //Stop the form from sending
                return;
            //Otherwise:
            } else {
                //Store the container holding the body content
                var masterContainer = document.getElementById('masterContainer');
                //Hide the master container
                masterContainer.style.display = 'none';
                //Display the 'Thank You' msg
                hiddenMsg.style.display = "inline";
            }
        });
    }
</script>