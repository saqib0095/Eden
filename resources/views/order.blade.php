<!DOCTYPE html>
<head>

            <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
                table,th,tb{
                    border: 1px solid black;
                }
            </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Reference</th>
                <th>value</th>
                <th>customer_id</th>
                <th>customer_name</th>
                <th>customer_email</th>
                <th>created_at</th>
                <th>created_at_unix</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customerOrder as $order)
            <tr>
                <th scope="row">{{$order['order_reference']}}</th>
                <th>{{$order['order_value']}}</th>
                <th>{{$order['customer_id']}}</th>
                <th>{{$order['customer_name']}}</th>
                <th>{{$order['customer_email']}}</th>
                <th>{{$order['created_at']}}</th>
                <th>{{$order['created_at_unix']}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>