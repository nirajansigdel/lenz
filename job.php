<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

 <style>
    /* Container for each input */
.inputcontainer {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}

/* Label style */
.inputcontainer label {
    margin-bottom:15px;
}

/* Input style */
.inputcontainer input[type="text"],
.inputcontainer input[type="email"],
.inputcontainer input[type="file"] {
    padding: 15px 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 500px; /* Adjust width as needed */
}

/* Checkbox container */
.checkcondition {
    display: flex;
    align-items: center;
     margin-top:20px
}

/* Checkbox style */
.checkcondition input[type="checkbox"] {
    margin-right: 5px;
}
.checkcondition span{
    font-size:21px
}
form input[type="submit"] {
    padding:15px;
    width:170px;
    font-size:21px;
    transition: 0.3s ease; 
    border: 1px solid #ccc;
    text-transform:UPPERCASE;
}
form input[type="submit"]:hover{
     background-color:green;
     color:white;
     border:1px solid green;
}
 
 </style>

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
            <input type="text" name="cover" require>
            
        </div>


        <div class="inputcontainer">
            <label for="resume">Upload RESUME</label>
            <input type="file" name="resume">


            <div class="checkcondition">
            <input type="checkbox" name="formcondition" id="conditionCheckbox" value="true">
            <span>"I acknowledge that all the information provided by me is accurate and responsibility for its authenticity."</span>
        </div>
        </div>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
