<html>
    <head>
        <title>Hockey Team Database</title>
        <link rel = "icon" href = "images/icon.png">
    </head>

    <body style = "background-color: Beige">
        <img src='images/hockey.jpg' alt = 'Photo by <a href="https://unsplash.com/@anders_kj1?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Anders Krøgh Jørgensen</a> on <a href="https://unsplash.com/s/photos/hockey?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
            ' width = '500' height = '200' class = 'center'>
        <style type = "text/css">
            .center {
                display: block;
                margin-left: 200;
            }
        </style>
        Photo by <a href="https://unsplash.com/@anders_kj1?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Anders Krøgh Jørgensen</a> on <a href="https://unsplash.com/s/photos/hockey?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>

        <h1> Welcome!</h1>

        <hr />

        <h2>Select</h2>
        <p>Select information from a table</p>
        <p>Separate different attributes with comma</p>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "selectRequest" name = "selectRequest">
            Table: <input type = "text" name = "table"> <br /><br />
            Attributes: <input type = "text" name = "attributes"> <br /><br />
            Field: <input type = "text" name = "field">
            <select name = "condition" id = "condition">
                <option value = ">">></option>
                <option value = "=">=</option>
                <option value = "<"><</option>
            Value: <input type = "text" name = "value"> <br /><br />
            <p><input type = "submit" value = "Select" name = "select"></p>
        </form>

        <hr />

        <h2>Insert A Player to a Team</h2>
        <p>The playerId has to be unique</p>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertPlayerRequest" name="insertPlayerRequest">
            Player ID: <input type="text" name="PlayerId"> <br /><br />
            Team Name: <input type="text" name="TeamName"> <br /><br />
            Name: <input type = "text" name = "Name"> <br /><br />
            Position: <input type = "text" name = "Position"> <br /><br />
            Number: <input type = "text" name = "Number"> <br /><br />

            <p><input type="submit" value="Insert" name="insertPlayer"></p>
        </form>

        <hr />

        <h2>Update Player</h2>
        <p>Update a player's information. The playerId must be valid.</p>

        <form method = "POST" action = "project.php">
            <input type = "hidden" id = "updatePlayerRequest" name = "updatePlayerRequest">
            Player ID: <input type = "text" name = "playerID"> <br /><br />
            Attribute: <input type = "text" name = "Attribute"> <br /><br />
            New Value: <input type = "text" name = "newValue"> <br /><br />

            <input type = "submit" value = "Update" name = "updatePlayer">
        </form>

        <hr />       

        <h2>Insert a New Team</h2>
        <form method="POST" action="project.php"> <!--refresh page when submitted-->
            <input type="hidden" id="insertTeamRequest" name="insertTeamRequest">
            Team Name: <input type="text" name="TeamName"> <br /><br />
            Division: <input type = "text" name = "Division"> <br /><br />

            <input type="submit" value="Insert" name="insertTeam"></p>
        </form> 

        <hr />

        <h2>Update Team</h2>
        <p>Update a team's information. The team's Name must be valid.</p>

        <form method = "POST" action = "project.php">
            <input type = "hidden" id = "updateTeamRequest" name = "updateTeamRequest">
            Team Name: <input type = "text" name = "TeamName"> <br /><br />
            Attribute: <input type = "text" name = "Attribute"> <br /><br />
            New Value: <input type = "text" name = "newValue"> <br /><br />

            <input type = "submit" value = "Update" name = "updateTeam">

        </form>

        <hr />
        
        <h2>Insert A Sponsor</h2>
        <form method = "POST" action = "project.php">
            <input type = "hidden" id = "insertASponsor" name = "insertASponsorRequest">
            Name: <input type = "text" name = "Name"> <br /><br />
            TeamName: <input type = "text" name = "TeamName"> <br /><br />
            Funds: <input type = "text" name = "Funds"> <br /><br />
            ContractDuration: <input type = "text" name = "ContractDuration"> <br /><br />
            <input type = "submit" value = "Insert" name = "insertASponsor">
        </form>

        <hr />

        <h2>Insert A Trade</h2>
        <form method = "POST" action = "project.php">
            <input type = "hidden" id = "insertATrade" name = "insertATradeRequest">
            ProposedTeam: <input type = "text" name = "ProposedTeam"> <br /><br />
            ReceivedTeam: <input type = "text" name = "ReceivedTeam"> <br /><br />
            RequestedPlayer: <input type = "text" name = "RequestedPlayer"> <br /><br />
            OfferedPlayer: <input type = "text" name = "OfferedPlayer"> <br /><br />
            Date: <input type = "text" name = "Date"> <br /><br />
            <input type = "submit" value = "Insert" name = "insertATrade">
        </form>

        <hr />

        <h2>Delete</h2>
        <form method = "POST" action = "project.php">
            <input type = "hidden" id = "deleteRequest" name = "deleteRequest">
            Unique ID: <input type = "text" name = "id"> From
            <select name = "table" id = "table">
                <option value = "Player">Player</option>
                <option value = "Team">Team</option>
                <option value = "Division">Division</option>
                <option value = "Coach">Coach</option>
                <option value = "Practice">Practice</option>
                <option value = "Manager">Manager</option>
                <option value = "Trade">Trade</option>
                <option value = "Matches">Matches</option>
                <option value = "Standing">Standing</option>
                <option value = "Sponsor">Sponsor</option>
            </select>
            <input type = "submit" value = "Delete" name = "delete">
        </form>
        
        <hr />

        <h2>View A Table</h2>
        <form method = "GET" action = "project.php">
            <select name = "view" id = "view">
                <option value = "Player">Player</option>
                <option value = "Team">Team</option>
                <option value = "Division">Division</option>
                <option value = "Coach">Coach</option>
                <option value = "Practice">Practice</option>
                <option value = "Manager">Manager</option>
                <option value = "Trade">Trade</option>
                <option value = "Matches">Matches</option>
                <option value = "Standing">Standing</option>
                <option value = "Sponsor">Sponsor</option>
            </select>
            <input type = "submit" value = "View" name = "viewATable">
        </form>

        <hr />
        <h2>Compare players' performance</h2>
        <p>You can enter at most 4 attributes to compare between all players. Please enter your values in the order from top to bottom</p> <br/>
        <p>i.e.DO NOT leave textbox 1 blank while textbox 4 filled in.</p>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "comparePlayersRequest" name = "comparePlayersRequest">
            Attribute 1: <input type = "text" name = "attribute1"> <br /><br />
            Attribute 2: <input type = "text" name = "attribute2"> <br /><br />
            Attribute 3: <input type = "text" name = "attribute3"> <br /><br />
            Attribute 4: <input type = "text" name = "attribute4"> <br /><br />
            <p><input type = "submit" value = "Confirm" name = "comparePlayers"></p>
        </form>

        <hr />
        <h2>Examine All Teams in a Division</h2>
        <p>Display all teams and players in that division.</p>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "examineADivisionRequest" name = "examineADivisionRequest">
            Division: <input type = "text" name = "Division"> <br /><br />
            <p><input type = "submit" value = "Examine" name = "examineADivision"></p>
        </form>

        <hr />
        <h2>Find teams that have attempted to trade for every player</h2>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "matchesRequest" name = "matchesRequest">
            <p><input type = "submit" value = "Show" name = "matches"></p>
        </form>

        <hr />
        <h2>Find the teams that have the highest average number of goals compared to all teams.</h2>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "avgGoalsRequest" name = "avgGoalsRequest">
            <p><input type = "submit" value = "Show" name = "avgGoals"></p>
        </form>

        <hr />
        <h2>Find the highest number of goals scored on a team by a single player.</h2>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "mostGoalsRequest" name = "mostGoalsRequest">
            <p><input type = "submit" value = "Show" name = "mostGoals"></p>
        </form>

        <hr />
        <h2>Find teams with at least 2 active players.</h2>
        <form method = "GET" action = "project.php">
            <input type = "hidden" id = "activePlayersRequest" name = "activePlayersRequest">
            <p><input type = "submit" value = "Show" name = "activePlayers"></p>
        </form>



        <?php

        $success = True;
        $db_conn = NULL;
        $show_debug_alert_messages = False;

        function debugAlertMessage($message) {
            global $show_debug_alert_messages;

            if ($show_debug_alert_messages) {
                echo "<script type = 'text/javascript'>alert('".$message . "');</script>";
            }
        }

        function executePlainSQL($cmdstr) {
            global $db_conn, $success;

            $statement = OCIParse($db_conn, $cmdstr);

            if (!statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn); // For OCIParse errors pass the connection handle
                echo htmlentities($e['message']);
                $success = False;
            }
            $r = OCIExecute($statement, OCI_DEFAULT);
            if (!$r) {
                echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                $e = oci_error($statement); // For OCIExecute errors pass the statementhandle
                echo htmlentities($e['message']);
                $success = False;
            }

			return $statement;
        }

        function executeBoundSQL($cmdstr, $list) {
            /* Sometimes the same statement will be executed several times with different values for the variables involved in the query.
		In this case you don't need to create the statement several times. Bound variables cause a statement to only be
		parsed once and you can reuse the statement. This is also very useful in protecting against SQL injection. 
		See the sample code below for how this function is used */

			global $db_conn, $success;
			$statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br>Cannot parse the following command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach ($list as $tuple) {
                foreach ($tuple as $bind => $val) {
                    //echo $val;
                    //echo "<br>".$bind."<br>";
                    OCIBindByName($statement, $bind, $val);
                    unset ($val); //make sure you do not remove this. Otherwise $val will remain in an array object wrapper which will not be recognized by Oracle as a proper datatype
				}

                $r = OCIExecute($statement, OCI_DEFAULT);
                if (!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement); // For OCIExecute errors, pass the statementhandle
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
        }

        function connectToDB() {
            global $db_conn;

            // Your username is ora_(CWL_ID) and the password is a(student number). For example, 
			// ora_platypus is the username and a12345678 is the password.
            $db_conn = OCILogon("ora_wu1danny", "a20662540", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Cannot connect to Database");
                $e = OCI_Error(); // For OCILogon errors pass no handle
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        function printSelect($result) {
            echo "<table>";
            echo "<tr><th>Attribute1</th><th>Attribute1</th><th>Attribute2</th><th>Attribute3</th><th>Attribute4</th><th>Attribute5</th>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
            }



            echo "</table>";
        }

        function handleSelectRequest() {
            global $db_conn;

            $table = $_GET['table'];
            $attributes = $_GET['attributes'];
            $field = $_GET['field'];
            $condition = $_GET['condition'];
            $value = $_GET['value'];


            if (is_numeric($value)) {
                $result = executePlainSQL("SELECT $attributes FROM $table where $field $condition $value");
            } else {
                $result = executePlainSQL("SELECT $attributes FROM $table where $field $condition '$value'");
            }

            printSelect($result);


        }


        function handleInsertAPlayerRequest() {
            global $db_conn;

            $player_id = $_POST['PlayerId'];
            $team_name = $_POST['TeamName'];
            $name = $_POST['Name'];
            $position = $_POST['Position'];
            $number = $_POST['Number'];
            
            executePlainSQL("INSERT INTO Player (PlayerId, TeamName, Name, Position, playerNumber) VALUES ('$player_id', '$team_name', '$name', '$position', '$number')");
            OCICommit($db_conn);
            echo "Player with Player ID $player_id has been inserted successfully.";
        }

        function handleUpdatePlayerRequest() {
            global $db_conn;

            $player_id = $_POST['playerID'];
            $attribute = $_POST['Attribute'];
            $new_value = $_POST['newValue'];
            executePlainSQL("UPDATE Player SET " . $attribute . " = '" . $new_value . "' WHERE PlayerId ='" . $player_id . "'");
            OCICommit($db_conn);
            echo "Player with Player ID " . $player_id . " has been updated successfully.";
        }

        function handleInsertTeamRequest() {
            global $db_conn;

            //Getting the values from user and insert data into the table
            $tuple = array (
                ":bind1" => $_POST['TeamName'],
                ":bind2" => $_POST['Division'],
            );

            $alltuples = array (
                $tuple
            );

            executeBoundSQL("insert into Team values (:bind1, :bind2)", $alltuples);
            OCICommit($db_conn);
            echo "Team :bind1 has been inserted successfully.";
        }

        function handleUpdateTeamRequest() {
            global $db_conn;

            $team_name = $_POST['TeamName'];
            $attribute = $_POST['Attribute'];
            $new_value = $_POST['newValue'];
            executePlainSQL("UPDATE Team SET " . $attribute . "='" . $new_value . "' WHERE TeamName='" . $team_name . "'");
            OCICommit($db_conn);
            echo "Team " . $team_name . " has been Updated successfully.";

        }

        function handleDeleteRequest() {
            global $db_conn;

            $id = $_POST['id'];
            $table =  $_POST['table'];

            switch($table) {
                case "Player":
                    executePlainSQL("DELETE FROM Player where PlayerId = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Team":
                    executePlainSQL("DELETE FROM Team where TeamName = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Coach":
                    executePlainSQL("DELETE FROM Coach where CoachId = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Division":
                    executePlainSQL("DELETE FROM Division where Division = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Practice":
                    executePlainSQL("DELETE FROM Practice where PracticeDate = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Manager":
                    executePlainSQL("DELETE FROM Manager where WorkId = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Trade":
                    executePlainSQL("DELETE FROM Trade where ProposedTeam = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Standing":
                    executePlainSQL("DELETE FROM Standing where Season = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Sponsor":
                    executePlainSQL("DELETE FROM Sponsor where Name = '$id'");
                    OCICommit($db_conn);
                    break;
                case "Matches":
                    executePlainSQL("DELETE FROM Matches where HomeTeam = '$id'");
                    OCICommit($db_conn);
                    break;
            }
        }

        function handleInsertASponsorRequest() {
            global $db_conn;

            $name = $_POST['Name'];
            $team_name = $_POST['TeamName'];
            $funds = $_POST['Funds'];
            $contract_duration = $_POST['ContractDuration'];

            executePlainSQL("INSERT INTO Sponsor VALUES ('$name', '$team_name', '$funds', '$contract_duration')");
            OCICommit($db_conn);
        }

        function handleInsertATradeRequest() {
            global $db_conn;

            $proposed_team = $_POST['ProposedTeam'];
            $received_team = $_POST['ReceivedTeam'];
            $requested_player = $_POST['RequestedPlayer'];
            $offered_player = $_POST['OfferedPlayer'];
            $date = $_POST['Date'];

            executePlainSQL("INSERT INTO Trade (ProposedTeam, ReceivedTeam, RequestedPlayer, OfferedPlayer, TradeDate) VALUES ('$proposed_team', '$received_team', '$requested_player', '$offered_player', '$date')");
            OCICommit($db_conn);
        }



        function printPlayers($result) { //prints results from a select statement
            echo "<br>Retrieved data from Player:<br>";
            echo "<table>";
            echo "<tr><th>Player ID</th><th>Team Name</th><th>Name</th><th>Goals</th><th>Assists</th><th>Goals Against</th><th>ShotsTakenOn</th><th>GamesPlayed</th><th>Position</th><th>Status</th><th>Number</th><th>AverageTimeOnIce</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) { 
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td></tr>";
            }

            echo "</table>";
        }

        function printTeams($result) { //prints results from a select statement
            echo "<br>Retrieved data from Team :<br>";
            echo "<table>";
            echo "<tr><th>TeamName</th><th>Division</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            }

            echo "</table>";
        }

        function printCoach($result) {
            echo "<br>Retrieved data from Coach :<br>";
            echo "<table>";
            echo "<tr><th>CoachID</th><th>Name</th><th>Status</th><th>Position</th><th>TeamName</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td></tr>";
            }

            echo "</table>";
        }

        function printDivision($result) {
            echo "<br>Retrieved data from Division :<br>";
            echo "<table>";
            echo "<tr><th>Division</th><th>Conference</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            }

            echo "</table>";
        }

        function printPractice($result) {
            echo "<br>Retrieved data from Practice :<br>";
            echo "<table>";
            echo "<tr><th>PracticeDate</th><th>PracticeName</th><th>TeamName</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
            }

            echo "</table>";
        }

        function printManager($result) {
            echo "<br>Retrieved data from Manager :<br>";
            echo "<table>";
            echo "<tr><th>WorkID</th><th>Name</th><th>Position</th><th>TeamName</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
            }

            echo "</table>";
        }

        function printTrade($result) {
            echo "<br>Retrieved data from Trade :<br>";
            echo "<table>";
            echo "<tr><th>ProposedTeam</th><th>ReceivedTeam</th><th>RequestedPlayer</th><th>OfferedPlayer</th><th>TradeDate</th><th>TradeStatus</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
            }

            echo "</table>";
        }

        function printStanding($result) {
            echo "<br>Retrieved data from Standing :<br>";
            echo "<table>";
            echo "<tr><th>Season</th><th>Placement</th><th>Losses</th><th>Seeding</th><th>Wins</th><th>TeamName</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
            }

            echo "</table>";
        }

        function printSponsor($result) {
            echo "<br>Retrieved data from Sponsor :<br>";
            echo "<table>";
            echo "<tr><th>Name</th><th>TeamName</th><th>Funds</th><th>ContractDuration</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
            }

            echo "</table>";
        }

        function printMatches($result) {
            echo "<br>Retrieved data from Matches :<br>";
            echo "<table>";
            echo "<tr><th>HomeTeam</th><th>AwayTeam</th><th>MatchDate</th><th>Score</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
            }

            echo "</table>";
        }
        

        function printChosenAttributes($result, $attribute1, $attribute2, $attribute3, $attribute4) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Name</th><th>$attribute1</th><th>$attribute2</th><th>$attribute3</th><th>$attribute4</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]<td></td>$row[4]</td><td>$row[5]</td></tr>";
            }

            echo "</table>";
        }

        function printJoinedTable($result) {
            echo "<table>";
            echo "<tr><th>PlayerId</th><th>TeamName</th><th>Name</th><th>Goals</th><th>Assists</th><th>GoalsAgainst</th><th>ShotsTakenOn</th><th>GamesPlayed</th><th>Position</th><th>Status</th><th>PlayerNumber</th><th>AverageTimeOnIce</th></tr>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td></tr>";
            }
            echo "<table>";
        }

        function printAvgGoals($result) { //prints results from a select statement
            echo "<br>Teams with the highest average number of goals:<br>";
            echo "<table>";
            echo "<tr><th>Team Name</th><th>Average Number</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            }

            echo "</table>";
        }

        function printMaxGoals($result) { //prints results from a select statement
            echo "<br>Highest number of goals scored by 1 player:<br>";
            echo "<table>";
            echo "<tr><th>Team Name</th><th>Max Goals</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            }

            echo "</table>";
        }

        function printActivePlayers($result) { //prints results from a select statement
            echo "<br>Teams with at least 2 active players:<br>";
            echo "<table>";
            echo "<tr><th>Team Name</th></tr>";

            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            }

            echo "</table>";
        }


        function handleViewATableRequest() {
            global $db_conn;

            $selected_table = $_GET['view'];

            switch($selected_table) {
                case "Player":
                    $result = executePlainSQL("SELECT * FROM Player");
                    printPlayers($result);
                    break;
                case "Team":
                    $result = executePlainSQL("SELECT * FROM Team");
                    printTeams($result);
                    break;
                case "Coach":
                    $result = executePlainSQL("SELECT * FROM Coach");
                    printCoach($result);
                    break;
                case "Division":
                    $result = executePlainSQL("SELECT * FROM Division");
                    printDivision($result);
                    break;
                case "Practice":
                    $result = executePlainSQL("SELECT * FROM Practice");
                    printPractice($result);
                    break;
                case "Manager":
                    $result = executePlainSQL("SELECT * FROM Manager");
                    printManager($result);
                    break;
                case "Trade":
                    $result = executePlainSQL("SELECT * FROM Trade");
                    printTrade($result);
                    break;
                case "Standing":
                    $result = executePlainSQL("SELECT * FROM Standing");
                    printStanding($result);
                    break;
                case "Sponsor":
                    $result = executePlainSQL("SELECT * FROM Sponsor");
                    printSponsor($result);
                    break;
                case "Matches":
                    $result = executePlainSQL("SELECT * FROM Matches");
                    printMatches($result);
                    break;

            }
        }



        function handleComparePlayersRequest() {
            global $db_conn;
            
            $attribute1 = $_GET['attribute1'];
            $attribute2 = $_GET['attribute2'];
            $attribute3 = $_GET['attribute3'];
            $attribute4 = $_GET['attribute4'];

            if (empty($attribute4)) {
                if (empty($attribute3)) {
                    if (empty($attribute2)) {
                        $result = executePlainSQL("SELECT PlayerId, Name, $attribute1 FROM Player");
                        printChosenAttributes($result, $attribute1, $attribute2, $attribute3, $attribute4);
                        return;
                    }
                    $result = executePlainSQL("SELECT PlayerId, Name, $attribute1, $attribute2 FROM Player");
                    printChosenAttributes($result, $attribute1, $attribute2, $attribute3, $attribute4);
                    return;
                }
                $result = executePlainSQL("SELECT PlayerId, Name, $attribute1, $attribute2, $attribute3 FROM Player");
                printChosenAttributes($result, $attribute1, $attribute2, $attribute3, $attribute4);
                return;
            } else {
                $result = executePlainSQL("SELECT PlayerId, Name, $attribute1, $attribute2, $attribute3, $attribute4 FROM Player");
            }

            printChosenAttributes($result, $attribute1, $attribute2, $attribute3, $attribute4);

        }


        function handleExamineADivisionRequest() {
            global $db_conn;

            $division = $_GET['Division'];

            $result = executePlainSQL("SELECT * FROM Player INNER JOIN Team ON Player.TeamName = Team.TeamName
            where Team.Division = '$division'");

            printJoinedTable($result);

        }

        function printOneCol($result, $col) {
            echo "<table>";
            echo "<tr><th>$col</th></tr><br>";
            while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                echo "<tr><td>$row[0]</td></tr>";
            }
            echo "</table>";
        }

        function handleTradesRequest() {
            global $db_conn;



            $baseSql = "select B.TeamName from Team B where not exists
                 ((select P.PlayerId from Player P)
                 Minus(select T.RequestedPlayer from Trade T where T.ProposedTeam = B.TeamName))";

            $result = executePlainSQL($baseSql);

            printOneCol($result, "TeamName");
        }

        function handleAvgGoalsRequest() {
            global $db_conn;

            $baseSql = "select p.TeamName AS TeamName, AVG(p.Goals) as avgGoals from Player p GROUP BY p.TeamName
            having AVG(p.Goals) >= (select AVG(p2.Goals) from Player p2)";

            $result = executePlainSQL($baseSql);
            printAvgGoals($result);
        }

        function handleMostGoalsRequest() {
            global $db_conn;

            $baseSql = "select TeamName, MAX(Goals) as MostGoals from Player GROUP BY TeamName";

            $result = executePlainSQL($baseSql);
            printMaxGoals($result);
        }

        function handleActivePlayersRequest() {
            global $db_conn;

            $baseSql = "select TeamName from Player GROUP BY TeamName HAVING COUNT(case Status when 'Active' then 1 else null end) >= 2";

            $result = executePlainSQL($baseSql);
            printActivePlayers($result);
        }

        function handleViewSponsorsRequest() {
            global $db_conn;

            $result = executePlainSQL("SELECT * FROM Sponsor s WHERE NOT EXISTS ((SELECT t.TeamName FROM Team t) MINUS (SELECT sp.TeamName FROM Sponsor sp WHERE sp.Name = s.Name))");

            printSponsor($result);
        }



        function handlePOSTRequest() {
            if (connectToDB()) {
                if (array_key_exists('updateTeamRequest', $_POST)) {
                    handleUpdateTeamRequest();
                } else if (array_key_exists('updatePlayerRequest', $_POST)) {
                    handleUpdatePlayerRequest();
                } else if (array_key_exists('deleteRequest', $_POST)) {
                    handleDeleteRequest();
                } else if (array_key_exists('insertPlayerRequest', $_POST)) {
                    handleInsertAPlayerRequest();
                } else if (array_key_exists('insertTeamRequest', $_POST)) {
                    handleInsertTeamRequest();
                } else if (array_key_exists('deleteAPlayerRequest', $_POST)) {
                    handleDeleteAPlayerRequest();
                } else if (array_key_exists('deleteATeamRequest', $_POST)) {
                    handleDeleteATeamRequest();
                } else if (array_key_exists('insertASponsorRequest', $_POST)) {
                    handleInsertASponsorRequest();
                } else if (array_key_exists('insertATradeRequest', $_POST)) {
                    handleInsertATradeRequest();
                }

                disconnectFromDB();
            }
        }

        function handleGETRequest() {
            if (connectToDB()) {
                if (array_key_exists('viewATable', $_GET)) {
                    handleViewATableRequest();
                } else if (array_key_exists('comparePlayers', $_GET)) {
                    handleComparePlayersRequest();
                } else if (array_key_exists('examineADivision', $_GET)) {
                    handleExamineADivisionRequest();
                } else if (array_key_exists('viewSponsors', $_GET)) {
                    handleViewSponsorsRequest();
                } else if (array_key_exists('matches', $_GET)) {
                    handleTradesRequest();
                } else if (array_key_exists('avgGoals', $_GET)) {
                    handleAvgGoalsRequest();
                } else if (array_key_exists('mostGoals', $_GET)){
                    handleMostGoalsRequest();
                } else if (array_key_exists('activePlayers', $_GET)){
                    handleActivePlayersRequest();
                } else if (array_key_exists('select', $_GET)) {
                    handleSelectRequest();
                }

                disconnectFromDB();
            }
        }

		if (isset($_POST['updatePlayer']) || isset($_POST['updateTeam']) || isset($_POST['reset']) || isset($_POST['insertPlayer']) || isset($_POST['insertTeam']) || isset($_POST['deleteAPlayer']) || isset($_POST['deleteATeam']) || isset($_POST['insertASponsor']) || isset($_POST['insertATrade']) || isset($_POST['select']) || isset($_POST['delete'])) {
            handlePOSTRequest();
        } else if (isset($_GET['view']) || isset($_GET['comparePlayersRequest']) || isset($_GET['examineADivisionRequest']) || isset($_GET['viewSponsorsRequest']) || isset($_GET['matchesRequest'])
        || isset($_GET['avgGoalsRequest']) || isset($_GET['mostGoalsRequest'])
        || isset($_GET['activePlayersRequest']) || isset($_GET['selectRequest'])) {
            handleGETRequest();
        }
        ?>
    </body>
</html>