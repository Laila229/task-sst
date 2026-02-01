<!DOCTYPE html>
<html>
<head>
    <title>فاتورة</title>
    <style>
        @media print {
            .order {
                page-break-after: always; /* كل فاتورة في صفحة جديدة */
            }
        }
        .order {
            border: 1px solid #000;
            padding: 20px;
            margin-bottom: 20px;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

@foreach($orders as $order)
<div class="order">
    <h2>فاتورة</h2>
    <p><strong>رقم الهاتف:</strong> {{ $order->phone }}</p>
    <p><strong>المحافظة:</strong> {{ $order->governorate }}</p>
    <p><strong>العنوان:</strong> {{ $order->address }}</p>
    <p><strong>المنتج:</strong> {{ $order->product }}</p>
    <p><strong>مدة الكفالة:</strong> {{ $order->warranty_period }}</p>
    <p><strong>ملاحظات:</strong> {{ $order->notes }}</p>
</div>
@endforeach

<script>
window.onload = function() {
    window.print();
}
</script>

</body>
</html>
