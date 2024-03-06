<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Form</title>
    <style>
        html,
        body {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        * {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            box-sizing: border-box;
        }

        h3 {
            color: #e5e5e5;
        }

        a h3:hover {
            color: #fff;
        }

        a {
            text-transform: none;
            text-decoration: none;
        }

        .wrapper {
            min-width: 1050px;
            min-height: 100%;
            background-color: #141414;
        }

        .signInContainer {
            background-color: #efefee;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .column {
            background-color: #fff;
            min-height: 300px;
            max-height: 100%;
            width: 450px;
            box-shadow: rgba(0, 0, 0, 0.1) 0 1px 2px;
            padding: 20px 35px;
            overflow-y: auto;
        }

        .column form {
            display: flex;
            flex-direction: column;
            padding: 24px 0;
        }

        .column form input {
            font-size: 14px;
            margin: 10px 0;
            border: none;
            border-bottom: 1px solid #dedede;
        }

        .column #submitButton {
            background-color: #4285f4;
            color: #fff;
            height: 36px;
            width: 88px;
            border: none;
            border-radius: 3px;
            font-weight: 500;
            margin: 10px 0 20px 0;
            font-size: 16px;
        }

        .column .header {
            padding: 20px 0;
        }

        .column h3 {
            font-size: 24px;
            font-weight: 400;
            line-height: 32px;
            margin: 0;
            padding-top: 16px;
            color: #000;
        }

        .column .header span {
            font-size: 14px;
        }

        .column .header img {
            width: 100px;
        }

        .signInMessage {
            font-size: 14px;
            font-weight: 400;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="signInContainer">
        <div class="column">
            <h3>Attendance Form</h3>
            <form id="attendanceForm" method="post" action="store_attendance.php">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required><br>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="phone">Phone No:</label>
                <input type="tel" id="phone" name="phone" required><br>

                <label for="department">Department:</label>
                <input type="text" id="department" name="department" required><br>

                <label for="loginLogout">Login/Logout:</label>
                <select id="loginLogout" name="loginLogout" required>
                    <option value="Login">Login</option>
                    <option value="Logout">Logout</option>
                </select><br>

                <label for="leave">Leave:</label>
                <input type="checkbox" id="leave" name="leave" onchange="toggleLeaveReason()"><br>

                <div id="reasonDiv" style="display: none;">
                    <label for="reason">Reason of Leave:</label>
                    <textarea id="reason" name="reason" rows="3" cols="30"></textarea><br>
                </div>

                <input type="submit" id="submitButton" value="Submit">
            </form>
        </div>
    </div>
</div>

<script>
    function toggleLeaveReason() {
        var leaveCheckbox = document.getElementById("leave");
        var reasonDiv = document.getElementById("reasonDiv");
        reasonDiv.style.display = leaveCheckbox.checked ? "block" : "none";
    }
</script>
</body>
</html>
