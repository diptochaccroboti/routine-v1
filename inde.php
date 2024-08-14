<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine </title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url("2.jpg" );
        background-size: cover;
        background-position: center;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 84%;
        margin: 0 auto;
        padding: 25px;
        background-color: rgba(255, 255, 255, 0.89);
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 24px;
        text-align: center;
        color: #333;
        position: relative;
    }

    h1 img {
        width: 170px;
        height: auto;
        position: absolute;
        top: 25%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    h2 img {
        width: 37px;
        height: auto;
        position: absolute;
        top: 5%;
        left: 90.5%;
        transform: translate(-50%, -50%);
    }

    h2 img:hover {
        background-color: #0056b3;
    }

    label {
        display: block;
        margin-bottom: 10px;
        color: #333;
    }

    select, input[type="submit"] {
        width: calc(100% - 40px);
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    select {
        background-color: #f8f8f8;
    }

    input[type="submit"] {
        background-color: #0056b3;
        color: #ffffff;
        font-weight: bold;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #004494;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        background-color: rgba(255, 255, 255, 0.7);
        margin-bottom: 12px;
        padding: 10px;
        border-radius: 10px;
        transition: background-color 0.3s ease; /* Transition effect */
    }

    li:hover {
        background-color: #f0f0f0; /* Background color on hover */
    }

    li:last-child {
        margin-bottom: 0;
    }

    .bold {
        font-weight: bold;
    }

    footer {
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 20px;
        margin-top: 7%;
        margin-bottom: 1.5%;
        background-color: #333;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }
    </style>

</head>
<body>


    <div class="container"><h2><img src="https://i.ibb.co/JBqcpKc/3.png" alt="3" border="0"> </h2>
        <h1><img src="3.png" alt="Routine Icon"> <br><br><b></b> <br>*Hat Bongram High School </h1>
        <form action="" method="POST">
            <label for="day">Select Day:</label>
            <select name="day" id="day">
            <option value="saturday">Saturday</option>
            <option value="sunday">Sunday</option>
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                
            </select>
            <br>
            <label for="class">Select Class:</label>
            <select name="class" id="class">
                <option value="class6">Class 6</option>
                <option value="class7">Class 7</option>
                <option value="class8">Class 8</option>
                <option value="class9">Class 9</option>
                <option value="class10">Class 10</option>
                
            </select>
            <br>
            <input type="submit" value="Get Routine">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $day = $_POST['day'];
            $class = $_POST['class'];

            $routine = [];

            if ($day == 'saturday') {
                if ($class == 'class6') {
                    $routine[] = ['subject' => 'Maths', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room A', 'teacher' => 'Mr. Smith'];
                    $routine[] = ['subject' => 'Science', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room B', 'teacher' => 'Ms. Johnson'];
                } elseif ($class == 'class7') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                elseif ($class == 'class8') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                elseif ($class == 'class9') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                elseif ($class == 'class10') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                 
                
            } elseif ($day == 'sunday') {
                if ($class == 'class6') {
                    $routine[] = ['subject' => 'গণিত', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room A', 'teacher' => 'Akhil Kumar'];
                    $routine[] = ['subject' => 'বাংলা', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room B', 'teacher' => 'Dhinsesh Kumar'];
                    $routine[] = ['subject' => 'বিজ্ঞান', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room A', 'teacher' => 'Akhil Kumar'];
                    $routine[] = ['subject' => 'ডিজিটাল প্রযুক্তি', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room B', 'teacher' => 'Dhinsesh Kumar'];
                    $routine[] = ['subject' => 'English', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room A', 'teacher' => 'Ananda Mondal'];
                    $routine[] = ['subject' => 'স্বাস্থ্য', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room B', 'teacher' => 'Dhinsesh Kumar'];
                } elseif ($class == 'class7') {
                    $routine[] = ['subject' => 'ইতিহাস এবং সামাজিক বিজ্ঞান', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'K.H'];
                    $routine[] = ['subject' => 'ধর্ম', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                    $routine[] = ['subject' => 'ইতিহাস এবং সামাজিক বিজ্ঞান', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'K.H'];
                    $routine[] = ['subject' => 'English', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Gopal Biswas'];
                    $routine[] = ['subject' => 'গণিত', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'K.H'];
                    $routine[] = ['subject' => 'বিজ্ঞান', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                elseif ($class == 'class8') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                elseif ($class == 'class9') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
                elseif ($class == 'class10') {
                    $routine[] = ['subject' => 'History', 'time' => '9:00 AM - 10:00 AM', 'room' => 'Room C', 'teacher' => 'Mr. Brown'];
                    $routine[] = ['subject' => 'Geography', 'time' => '10:15 AM - 11:15 AM', 'room' => 'Room D', 'teacher' => 'Mrs. White'];
                }
            }

            if (!empty($routine)) {
                echo "<h2>Routine for $day, $class:</h2>";
                echo "<ul>";
                foreach ($routine as $item) {
                    echo "<li>";
                    echo "<span class='bold'>{$item['subject']}</span> <br>";
                    echo "Time: {$item['time']} <br>";
                    echo "Room: {$item['room']} <br>";
                    echo "Teacher: {$item['teacher']} <br>";
                    echo "</li>";
                }
                echo "</ul>";
            } else {
                echo "No routine found for selected day and class.";
            }
        }
        ?>
    </div>
    <footer>
        <p>&copy; ISOLATE.<br> All rights reserved. Terms and conditions apply.</p>
    </footer>
</body>
</html>
