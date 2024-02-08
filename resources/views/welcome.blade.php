<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("vendors/bootstrap/css/bootstrap.min.css") }}">
    <title>Laravel Daraja</title>
</head>
<body>
    <div class="container mx-5">
        <h1>Lipa Na Mpesa</h1>
        <div class="card mt-5">
            <div class="card-header">
                <h4>Prompt Customer</h4>
            </div>
            <form action="{{ route("stk") }}" method="POST">
                @csrf
                @method("POST")
                <div class="card-body">
                    <div class="form-group">
                        <label for="phone-number">Phone Number</label>
                        <input type="tel" name="phone_number" id="phone-number" class="form-control" placeholder="+254700000000">
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" name="amount" id="amount" class="form-control" placeholder="Ksh. 5,000">
                    </div>
                    <button class="btn btn-primary" type="submit">Send Prompt</button>
                </div>
                
            </form>
        </div>

    </div>
</body>
</html>