<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Payment for {{ $course->videoTitle }}</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            background: linear-gradient(180deg, #022C99, #8BACFF);
            margin: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            max-width: 600px;
            margin: 20px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .payment-method {
            margin: 20px 0;
            font-family: 'Lato', sans-serif;
        }
        .payment-method label {
            display: block;
            margin-bottom: 10px;
            text-align: left; /* Align labels to the left */
            font-family: 'Lato', sans-serif;
        }
        .payment-method input[type="radio"] {
            margin-right: 10px;
            font-family: 'Lato', sans-serif;
        }
        .payment-method button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Lato', sans-serif;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
            text-align: left; /* Align checkbox to the left */
            font-family: 'Lato', sans-serif;
        }
        .checkbox-container input[type="checkbox"] {
            margin-right: 10px;
            font-family: 'Lato', sans-serif;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .back-button {
            background-color: #dc3545;
            border-radius: 5px;
        }
        button:hover{
            background-color: #0056b3;
        }
        .back-button:hover{
            background-color: #a91b0d;
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
                        <img src="{{ asset('assets\images\logo_mandiri.png') }}" alt="Mandiri" width="24" height="24">
                        <input type="radio" name="payment_method" value="mandiri" required>
                        Bank Mandiri: 102000998086
                    </label>
                    <label>
                        <img src="{{ asset('assets\images\logo_bca.png') }}" alt="BCA" width="24" height="24">
                        <input type="radio" name="payment_method" value="bca" required>
                        Bank BCA: 102000998086
                    </label>
                    <label>
                        <img src="{{ asset('assets\images\logo_bsi.png') }}" alt="BSI" width="24" height="24">
                        <input type="radio" name="payment_method" value="bsi" required>
                        Bank BSI: 102000998086
                    </label>
                    <label>
                        <img src="{{ asset('assets\images\logo_bni.png') }}" alt="BNI" width="24" height="24">
                        <input type="radio" name="payment_method" value="bni" required>
                        Bank BNI: 102000998086
                    </label>
                </div>
                <div class="payment-method">
                    <label>
                        <img src="{{ asset('assets\images\logo_dana.png') }}" alt="Dana" width="24" height="24">
                        <input type="radio" name="payment_method" value="dana" required>
                        Dana: 081398844808
                    </label>
                    <label>
                        <img src="{{ asset('assets\images\logo_ovo.png') }}" alt="OVO" width="24" height="24">
                        <input type="radio" name="payment_method" value="ovo" required>
                        OVO: 081398844808
                    </label>
                    <label>
                        <img src="{{ asset('assets\images\logo_gopay.png') }}" alt="Gopay" width="24" height="24">
                        <input type="radio" name="payment_method" value="gopay" required>
                        Gopay: 081398844808
                    </label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="have-paid" name="have_paid" required>
                    <label for="have-paid">I have paid</label>
                </div>
                <button type="submit">Continue Payment</button>
                <a href="{{ route('course.description', ['course' => $course->videoTitle]) }}">
                    <button type="button" class="back-button">Back</button>
                </a>
            </form>
        </div>
    </div>
</body>
</html>
