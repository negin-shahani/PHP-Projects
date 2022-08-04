<?php
    //connect to database
    $conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");
    
    // getting user message through ajax
    $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

    //check if input is in our database
    $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
    //mysqli_query:Performs a query on the database and return a mysqli_result object
    $run_query = mysqli_query($conn, $check_data) or die("Error");

    //if we have an reply for this query show it
        //mysqli_num_rows:Returns the number of rows in the result set
    if(mysqli_num_rows($run_query) > 0){
        //fetch replay from database
        //mysqli_fetch_assoc:Returns an associative array representing the fetched row
        $fetch_data = mysqli_fetch_assoc($run_query);
        //store replay to a varible and sent it to Ajax
        $replay = $fetch_data['replies'];
        echo $replay;
    }else{ //if we don't have any replies
        echo "Sorry can't be able to understand you!";
    }

?>