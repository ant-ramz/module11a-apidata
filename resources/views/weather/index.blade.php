<!DOCTYPE html>
<html>
<head>
    <title>Weather Forecast</title>
    <style>
        table { 
            border-collapse: collapse; 
            width: 50%; 
            margin: 20px 0; /* removes auto centering */
        }
        th, td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; /* aligns text to the left */
        }
        th { background-color: #f2f2f2; }
        h2 { text-align: left; margin-left: 0; } /* aligns heading to left */
    </style>
</head>
<body>
    <h2>Weekly Weather Forecast</h2>
    <table>
        <tr>
            <th>Day</th>
            <th>High</th>
            <th>Low</th>
            <th>Condition</th>
        </tr>
        @foreach($weather as $day)
            <tr>
                <td>{{ $day['day'] }}</td>
                <td>{{ $day['high'] }}</td>
                <td>{{ $day['low'] }}</td>
                <td>{{ $day['condition'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>

