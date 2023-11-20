<!DOCTYPE html>
<html>
<head>
    <title>Product Table</title>
    <style>
        body{
            background: ;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Product Information</h1>
    <table>
        <tr>
            <th>Image</th>
            <th>Product ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        <tr>
            <td><img src="{{asset('images/p1.png')}}" alt="Product 1" width="100"></td>
            <td>001</td>
            <td>Earphones</td>
            <td>small loudspeaker held or worn close to the listener's ear or within the outer ear</td>
            <td>$19.99</td>
        </tr>
        <tr>
            <td><img src="{{asset('images/p2.jpeg')}}" alt="Product 2" width="100"></td>
            <td>002</td>
            <td>Headphones</td>
            <td>electroacoustic transducers, which convert an electrical signal to a corresponding sound.</td>
            <td>$29.99</td>
        </tr>
        <tr>
            <td><<img src="{{asset('images/p3.jpeg')}}" alt="Product 3" width="100"></td>
            <td>003</td>
            <td>Speakers</td>
            <td>Speakers are standard output devices used with computer systems that enable the listener to listen to a sound as an outcome.</td>
            <td>$39.99</td>
        </tr>
        <tr>
            <td><img src="{{asset('images/p4.jpeg')}}" alt="Product 4" width="100"></td>
            <td>004</td>
            <td>Laptops</td>
            <td>A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. </td>
            <td>$49.99</td>
        </tr>
        <tr>
            <td><img src="{{asset('images/p5.jpeg')}}" alt="Product 5" width="100"></td>
            <td>005</td>
            <td>Chargers</td>
            <td>A battery charger, recharger, or simply charger, is a device that stores energy in a battery by running an electric current through it</td>
            <td>$59.99</td>
        </tr>
    </table>
</body>
</html>