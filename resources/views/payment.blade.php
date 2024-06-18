<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment for {{ $course->videoTitle }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .payment-method {
            margin: 20px 0;
        }
        .payment-method label {
            display: block;
            margin-bottom: 10px;
        }
        .payment-method input[type="radio"] {
            margin-right: 10px;
        }
        .payment-method button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
        .checkbox-container input[type="checkbox"] {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment for {{ $course->videoTitle }}</h2>
        <div class="payment-method">
            <form action="{{ route('course.pay', ['course' => $course->videoTitle]) }}" method="POST">
                @csrf
                <div class="payment-method">
                    <label>
                        <input type="radio" name="payment_method" value="mandiri" required>
                        Bank Mandiri: 102000998086
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="bca" required>
                        Bank BCA: 102000998086
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="bsi" required>
                        Bank BSI: 102000998086
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="bni" required>
                        Bank BNI: 102000998086
                    </label>
                </div>
                <div class="payment-method">
                    <label>
                        <input type="radio" name="payment_method" value="dana" required>
                        Dana: 081398844808
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="ovo" required>
                        OVO: 081398844808
                    </label>
                    <label>
                        <input type="radio" name="payment_method" value="gopay" required>
                        Gopay: 081398844808
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="have-paid" name="have_paid" required>
                    <label for="have-paid">I have paid</label>
                </div>
                <button type="submit">Continue Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
