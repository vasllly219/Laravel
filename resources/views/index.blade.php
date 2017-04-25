@extends('layouts.master')

@section('title', 'Список')

@section('sidebar')
    <h1>Список номеров:</h1>
@stop

@section('content')
<table>
    <tr>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Номер телефона</th>
    </tr>
    @foreach ($phones as $phone)
    <tr>
        <td>{{ $phone->last_name }}</td>
        <td>{{ $phone->first_name }}</td>
        <td>{{ $phone->middle_name }}</td>
        <td>{{ $phone->phone }}</td>
        <td><a href="/phone/{{ $phone->id }}/edit">Редактировать</a></td>
    </tr>
    @endforeach
</table>
<p><a href="/phone/create">Добавить контакт</a></p>
@stop
