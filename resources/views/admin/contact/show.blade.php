@extends('gentelella.app')

@section('content')

<style>

.head {
    font-size: 20px;
}

</style>

<table>
    <thead class="head">
        <tr>
            <th>
                이름 : {{ $contact->contact_name }}
                작성일 : {{ $contact->created_at }}
            </th>
        </tr>
        <tr>
            <td>
                전화번호 : {{ $contact->contact_tel }}
                이메일 : {{ $contact->contact_email }}
                사이트 : {{ $contact->contact_refsite }}
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>내용 : {{ $contact->contact_content }}</td>
        </tr>
    </tbody>
</table>

@endsection