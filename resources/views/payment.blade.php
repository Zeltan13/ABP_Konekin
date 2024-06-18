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
        }
        .payment-option {
            display: flex;
            align-items: center;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f7f7f7;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .payment-option.selected {
            background-color: #007bff;
            color: white;
        }
        .payment-option img {
            margin-right: 10px;
        }
        .payment-option input[type="radio"] {
            display: none;
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
        button:hover {
            background-color: #0056b3;
        }
        .back-button:hover {
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
                    <div class="payment-option" data-value="mandiri">
                        <img src="{{ asset('assets/images/logo_mandiri.png') }}" alt="Mandiri" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="mandiri" required>
                            Bank Mandiri: 102000998086
                        </label>
                    </div>
                    <div class="payment-option" data-value="bca">
                        <img src="{{ asset('assets/images/logo_bca.png') }}" alt="BCA" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="bca" required>
                            Bank BCA: 102000998086
                        </label>
                    </div>
                    <div class="payment-option" data-value="bsi">
                        <img src="{{ asset('assets/images/logo_bsi.png') }}" alt="BSI" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="bsi" required>
                            Bank BSI: 102000998086
                        </label>
                    </div>
                    <div class="payment-option" data-value="bni">
                        <img src="{{ asset('assets/images/logo_bni.png') }}" alt="BNI" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="bni" required>
                            Bank BNI: 102000998086
                        </label>
                    </div>
                </div>
                <div class="payment-method">
                    <div class="payment-option" data-value="dana">
                        <img src="{{ asset('assets/images/logo_dana.png') }}" alt="Dana" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="dana" required>
                            Dana: 081398844808
                        </label>
                    </div>
                    <div class="payment-option" data-value="ovo">
                        <img src="{{ asset('assets/images/logo_ovo.png') }}" alt="OVO" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="ovo" required>
                            OVO: 081398844808
                        </label>
                    </div>
                    <div class="payment-option" data-value="gopay">
                        <img src="{{ asset('assets/images/logo_gopay.png') }}" alt="Gopay" width="24" height="24">
                        <label>
                            <input type="radio" name="payment_method" value="gopay" required>
                            Gopay: 081398844808
                        </label>
                    </div>
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
    <script>
        document.querySelectorAll('.payment-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.payment-option').forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                this.querySelector('input[type="radio"]').checked = true;
            });
        });
    </script>
</body>
</html>
