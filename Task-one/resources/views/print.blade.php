<form method="POST" action="/orders/print-selected">
    @csrf

    <input type="checkbox" id="checkAll"> تحديد الكل

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>تحديد</th>
                <th>رقم الهاتف</th>
                <th>المحافظة</th>
                <th>العنوان</th>
                <th>المنتج</th>
                <th>مدة الكفالة</th>
                <th>ملاحظات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td><input type="checkbox" name="orders[]" value="{{ $order->id }}"></td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->governorate }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->product }}</td>
                <td>{{ $order->warranty_period }}</td>
                <td>{{ $order->notes }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <button type="submit">طباعة المختار</button>
</form>

<script>
document.getElementById('checkAll').onclick = function() {
    document.querySelectorAll('input[name="orders[]"]').forEach(el => el.checked = this.checked);
}
</script>

