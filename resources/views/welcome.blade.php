@php
    $data = \Session::get('data');
@endphp
<h1>SELAMAT DATANG {{$data['firstName']}} {{$data['lastName']}}</h1>
<h3>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h3>