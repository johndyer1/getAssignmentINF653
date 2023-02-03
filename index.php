<?php 
#Declare variables
$first=filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
$last=filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
$age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

#Check if any of the data is empty
if (empty($first) || empty($last) || empty($age)) {
    echo "Please, enter more data.</br>";
}
else {    
    #Echo name
    echo "Hello, my name is $first $last.<br/>";

    #Echo age
    if($age>=18) {
        echo "I am $age years old, and I am old enough to vote in the United States.<br/>";
    }
    else {
        echo "I am $age years old and, I am not old enough to vote in the United States.<br/>";
    }

    #Echo how many days are in the user's entered age
    $daysInAge = $age * 365;
    echo "There are $daysInAge days in $age years.</br>";

    #Echo the current date
    $date = date('m-d-Y');
    echo "The current date is $date.</br>";
}

?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Assignment</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <h1>GET Assignment</h1>

    <form action ="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="first">First Name: </label>
        <input type="text" id="first" name="first" autocomplete="off">
        <label for="last">Last Name: </label>
        <input type="text" id="last" name="last" autocomplete="off">
        <label for="age">Age: </label>
        <input type="text" id="age" name="age" autocomplete="off">
        <div>
            <button type="submit">Submit</button>
            <button type="submit" formethod="post">Submit using POST</button>
            <button type="reset">Reset</button>
        </div>
    </form>

</body>

</html>