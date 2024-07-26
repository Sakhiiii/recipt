<!DOCTYPE html>
<html>
<head>
    <title>PDF Example</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Generate PDF</h1>
    <form method="post" action="generate-pdf.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        
        <label for="total-cost">Total Cost</label>
        <input type="text" name="total-cost" id="total-cost">
        
        <label for="1st-payment">1st Payment</label>
        <input type="text" name="1st-payment" id="1st-payment">
        
        <label for="2nd-payment">2nd Payment</label>
        <input type="text" name="2nd-payment" id="2nd-payment">
        
        <label for="3rd-payment">3rd and Final Payment</label>
        <input type="text" name="3rd-payment" id="3rd-payment">
        
        <button type="submit">Generate PDF</button>
    </form>
</body>
</html>
