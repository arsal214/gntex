<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<table class="table table-bordered" border="1">
    <thead>
    <tr>
        <td><b>Company Name</b></td>
        <td><b>Department Name</b></td>
        <td><b>Team Lead name</b></td>
    </tr>
    </thead>
    <tbody>
    @foreach($orders as $order)
    <tr class="border-container">
        <td>
            {{$order->marking}}
        </td>
        <td>
            {{$order->product_description}}
        </td>
        <td>
            {{$order->category_id}}
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
