<dl>
    @foreach($mailData as $key => $value)
    <dt>{{ $key }}</dt>
    <dd>{{ $value or 'nadarad' }}</dd>
    @endforeach
</dl>