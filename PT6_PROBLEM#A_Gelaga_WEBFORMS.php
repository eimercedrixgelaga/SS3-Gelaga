<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-size: 16px;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }

        hr {
            margin: 20px 0;
            border: 1px solid #ddd;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .result b {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grade Calculator</h1>
        <form action="" method="POST">
            <label>1st Quarter Grade</label>
            <input type="number" name="firstgrading" required><br>
            
            <label>2nd Quarter Grade</label>
            <input type="number" name="secondgrading" required><br>
            
            <label>3rd Quarter Grade</label>
            <input type="number" name="thirdgrading" required><br>
            
            <label>4th Quarter Grade</label>
            <input type="number" name="fourthgrading" required><br>
            
            <input class="button" type="submit" name="add" value="Calculate">
        </form>

        <?php
        if (isset($_POST['add'])) {
            // Get grades from form
            $first_quarter = $_POST['firstgrading'] ?? 0;
            $second_quarter = $_POST['secondgrading'] ?? 0;
            $third_quarter = $_POST['thirdgrading'] ?? 0;
            $fourth_quarter = $_POST['fourthgrading'] ?? 0;

            // Calculate average grade
            $averageGrade = ($first_quarter + $second_quarter + $third_quarter + $fourth_quarter) / 4;

            // Display results
            echo "<hr>";
            echo "<div class='result'>";
            echo "Average Grade: " . number_format($averageGrade, 2) . "<br>";

            // Determine description and remarks
            if ($averageGrade >= 95 && $averageGrade <= 100) {
                echo "Description: <b>Outstanding</b><br>";
                echo "Remarks: Passed";
            } elseif ($averageGrade >= 90 && $averageGrade <= 94) {
                echo "Description: <b>Excellent</b><br>";
                echo "Remarks: Passed";  
            } elseif ($averageGrade >= 85 && $averageGrade <= 89) {
                echo "Description: <b>Very Good</b><br>";
                echo "Remarks: Passed";
            } elseif ($averageGrade >= 80 && $averageGrade <= 84) {
                echo "Description: <b>Good</b><br>";
                echo "Remarks: Passed";      
            } elseif ($averageGrade >= 75 && $averageGrade <= 79) {
                echo "Description: <b>Not Bad</b><br>";
                echo "Remarks: Passed";
            } else {
                echo "Description: <b>Needs Improvement</b><br>";
                echo "Remarks: Failed";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
