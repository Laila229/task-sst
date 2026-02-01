<form method="POST" action="/orders">
    @csrf

    <input type="text" name="phone" placeholder="رقم الهاتف" required>


        <select name="governorate" required>
        @foreach($topGovs as $gov)
            <option value="{{ $gov }}">{{ $gov }}</option>
        @endforeach
        @foreach($otherGovs as $gov)
            <option value="{{ $gov }}">{{ $gov }}</option>
        @endforeach
    </select>


    <textarea name="address" placeholder="العنوان" required></textarea>

    <input type="text" name="product" placeholder="المنتج" required>


    <input type="text" name="warranty_period" placeholder="مدة الكفالة" required>

    <textarea name="notes" placeholder="ملاحظات"></textarea>

        <button type="submit">حفظ</button>
</form>
