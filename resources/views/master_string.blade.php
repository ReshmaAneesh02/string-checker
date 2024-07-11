<!DOCTYPE html>
<html>
<head>
    <title>String Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 400px;
            margin-top: 20px;
        }

        h1, h2,h3 {
            text-align: center;
            color: #333;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        h2 {
            
            font-size: 18px;
            margin-bottom: 20px;
        }
       /* h3{
            font-size: 24px;
            margin-top: 10px;
        }*/

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .results {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
        }

        .results ul {
            list-style: none;
            padding: 0;
        }

        .results li {
            background-color: #e9ecef;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="layout-login-centered-boxed__form card">
        <div class="card-body">
    <br>
    <br>
    <br>

        <h3>Enter Strings to Compare</h3>
        <form action="{{ url('/check-strings') }}" method="post">
            @csrf
            <table>
                <tr>
                    <td>
                        <label for="master_string">Master String:</label>
                    </td>
                    <td>
                        <input type="text" id="master_string" name="master_string" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="string1">String 1:</label>
                    </td>
                    <td>
                        <input type="text" id="string1" name="string1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="string2">String 2:</label>
                    </td>
                    <td>
                        <input type="text" id="string2" name="string2">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="string3">String 3:</label>
                    </td>
                    <td>
                        <input type="text" id="string3" name="string3">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="string4">String 4:</label>
                    </td>
                    <td>
                        <input type="text" id="string4" name="string4">
                    </td>
                </tr>
            </table>
            <button type="submit">Check Strings</button>
        </form>

        @if (isset($results))
            <div class="results">
                <h2>Results:</h2>
                <ul>
                    @foreach ($results as $index => $result)
                        <li>String {{ $index + 1 }}: {{ $result }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </div>
    </div>
</body>
</html>
