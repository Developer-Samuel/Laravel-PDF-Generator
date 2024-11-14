<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <style>
        .content {
            position: absolute;
            width: 100%;
            height: 100vh;
            background: #444;
            color: #fff
        }
        .container
        {
            position: relative;
            width: 1000px;
            margin: 0 auto;
        }
        .title
        {
            position: relative;
            font-size: 32px;
            font-weight: 700;
            text-align: center;
        }
        table
        {
            position: relative;
            width: 100%;
        }
        table tr td
        {
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="container">
            <h1 class="title">Invoice</h1>
            <table>
                <tr>
                    <td>Name:</td>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td>{{ $phone }}</td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td>{{ $address }}</td>
                </tr>
                <tr>
                    <td>Birthdate:</td>
                    <td>{{ $birthdate }}</td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>{{ $gender }}</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
