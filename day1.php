<form action="save.php" method="post">

<input type="text" name="first_name" placeholder="First Name" required><br>

<input type="text" name="last_name" placeholder="Last Name" required><br>

<textarea name="address" placeholder="Address" required></textarea><br>

<select name="country" required>
    <option value="">Select Country</option>
    <option value="Egypt">Egypt</option>
    <option value="Canada">Canada</option>
    <option value="UK">UK</option>
</select><br>

<label>Gender:</label>
<input type="radio" name="gender" value="male" required> Male
<input type="radio" name="gender" value="female"> Female
<br>

<label>Skills:</label>
<input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="MySQL"> MySQL
<input type="checkbox" name="skills[]" value="PostgreSQL"> PostgreSQL
<br>

<input type="text" name="username" placeholder="Username" minlength="3" required><br>

<input type="password" name="password" minlength="6" required><br>

<input type="text" name="department" value="OpenSource" readonly><br>

<input type="submit">
<input type="reset">

</form>

<script>
function validateForm() {

    const fixedText = "Sh68Sa";
    const userInput = document.getElementById("captchaInput").value;

    if (userInput !== fixedText) {
        alert("Wrong code!");
        return false;  
    }

    return true;
}
</script>