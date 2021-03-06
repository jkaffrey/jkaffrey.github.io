<?php
include('sessions.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Submit Event</title>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <form class="eventCreate" action="saveJson.php" method="POST">
    <ul>
      <li align="right">
        <a href="./logout.php">Log-out</a>
      </li>
      <li>
        <label for="name">Name of Event</label>
        <input type="text" name="name" maxlength="100" id="name">
        <span>Enter a quick name of the event for everyone to see.</span>
      </li>
      <li>
        <label for="date">Date</label>
        <input type="date" name="date" maxlength="100" id="date">
        <span>What is the date of the event?</span>
      </li>
      <li>
        <label for="time">Time</label>
        <input type="time" name="time" maxlength="50" id="time">
        <span>What time does the event start?</span>
      </li>
      <li>
        <label for="location">Location</label>
        <input type="text" name="location" maxlength="100" id="location">
        <span>Enter the city and additional detials for the location.</span>
      </li>
      <li>
        <label for="description">Description</label>
        <textarea rows="4" name="description" id="description"></textarea>
        <span>Please describe the event for everyone.</span>
      </li>
      <li>
        <label for="meet">Pre-Meet</label>
        <input type="text" name="meet" maxlength="200" id="meet">
        <span>Instructions for meeting up before, to car pool, etc.</span>
      </li>
      <li>
        <input type="submit" value="Send This" >
      </li>
    </ul>
  </form>
</body>
</html>
