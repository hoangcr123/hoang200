<!DOCTYPE html>
<html>
<head>
<title> STUDENT RESULTS RATING</title>
<!-- Unicode Vietnamese -->
<meta charset="UTF-8">
<meta name="author" content=" trendemy.com" />
<!-- css definition file -->
<link href="style.css" rel="stylesheet" />
</head>
<body>
<div id="wrapper">
<h2> CLASSIFICATION OF STUDENT RESULTS</h2>
<!-- Form to send processing results -->
<!-- action is the landing page, the # value is sent to the

current page itself.
The method is post. -->
<form action="#" method="post">
<!-- Mathematics -->
<div class="row">
<div class="lbltitle">
<label> Math scores </label>
</div>
<div class="lblinput">
<!-- name="math" is the variable name sent to the

server,

isset($_POST['math']) check if the variable is defined

or not -->

<input type="number" name="math"
value="<?php echo isset($_POST['math']) ?

$_POST['math'] : "" ; ?>" />
</div>
</div>
<!-- Physics -->
<div class="row">
<div class="lbltitle">
<label> Physics scores</label>
</div>
<div class="lblinput">
<input type="number" name="physics"
value="<?php echo isset($_POST['physics']) ?

$_POST['physics'] : "" ; ?>" />

</div>
</div>
<!-- Chemistry -->
<!-- Chemistry scores -->
<div class="row">
    <div class="lbltitle">
        <label>Chemistry scores</label>
    </div>
    <div class="lblinput">
        <input type="number" name="chemistry" value="<?php echo isset($_POST['chemistry']) ? $_POST['chemistry'] : ""; ?>" />
    </div>
</div>

<!-- Area selection -->
<div class="row">
    <div class="lbltitle">
        <label>Chemistry scores</label>
    </div>
    <div class="lblinput">
        <select name="area" id="area">
            <option value="none">Select an area</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
</div>

<!-- JavaScript for dynamic points addition -->
<script>
    document.getElementById("btnsubmit").addEventListener("click", function() {
        var totalpoints = parseInt(document.getElementsByName("chemistry")[0].value);

        // Get the selected area
        var selectedArea = document.getElementById("area").value;

        // Add points based on the selected area
        if (selectedArea === "1" || selectedArea === "2") {
            totalpoints += 5;
        } else if (selectedArea === "3") {
            totalpoints += 3;
        }

        // Update the total points display
        document.getElementById("totalpoints").innerText = totalpoints;
    });
</script>

<!-- Form send button, command button to send results -->
<div class="row">
<div class="submit">
<input type="submit" name="btnsubmit" value="

Ratings" />


</div>
</div>
</form>
</div>
</body>
</html>

<!-- Display results -->
<div class="result">
<h2>Rating results</h2>
<div class="row">
<div class="lbltitle">
<label>Total points</label>
</div>
<div class="lbloutput">
<?php echo isset($_POST['btnsubmit']) ? $_POST['math']

+ $_POST['physics'] + $_POST['chemistry'] : "" ; ?>

</div>
</div>
</div>

<div class="row">
<div class="lbltitle">
<label>Rating</label>
</div>
<div class="lbloutput">
<?php

if(isset($_POST['btnsubmit'])){
$totalpoints = $_POST['math'] + $_POST['physics']

+ $_POST['chemistry'];

if($totalpoints >= 24) echo "Very Good";
elseif($totalpoints >= 21) echo "Good";
elseif($totalpoints >= 15) echo "Average";
else echo "Weak";
}
?>

</div>
</div>


<!-- Priority Score -->
<div class="row">
    <div class="lbltitle">
        <label>Priority Point</label>
    </div>
    <div class="lbloutput" id="priorityScore">0</div>
</div>

<!-- JavaScript for dynamic priority score calculation -->
<script>
    document.getElementById("area").addEventListener("change", function() {
        var selectedArea = this.value;
        var priorityScore = 0;

        if (selectedArea === "1" || selectedArea === "2") {
            priorityScore = 5;
        } else if (selectedArea === "3") {
            priorityScore = 3;
        }

        document.getElementById("priorityScore").innerText = priorityScore;
    });
</script>
