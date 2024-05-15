<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="jobapplication.php" method="post">
        <div class="inputcontainer">
            <label for="username">USERNAME*</label>
            <input type="text" name="username" required>
        </div>
        <div class="inputcontainer">
            <label for="email">Email*</label>
            <input type="email" name="email" required>
        </div>
        <div class="inputcontainer">
            <label for="phone">PHONE*</label>
            <input type="text" name="phone" required>
        </div>

        <div class="inputcontainer">
            <label for="cover">Cover LETTER*</label>
            <input type="text" name="cover">
        </div>
        <!-- 
        <div class="inputcontainer">
            <label for="resume">Upload RESUME</label>
            <input type="file" name="resume">
        </div>
        <div class="checkconditio">
            <input type="checkbox" name="condition" id="conditionCheckbox">
            <span>hello i accept our condition</span>
        </div> -->
        <input type="submit" value="submit" name="submit">
    </form>
    <!-- <script>
        const checkbox = document.getElementById('conditionCheckbox');
        let conditionAccepted = checkbox.checked;
        checkbox.addEventListener('change', function() {
            conditionAccepted = this.checked;
            console.log('Condition Accepted:', conditionAccepted);
        });
    </script> -->
</body>
</html>
