@extends('layouts.master')

@section('title', 'Добавить')

@section('sidebar')
    <a href="../">Список контактов</a>
    <h1>Добавить запись</h1>
@stop

@section('content')
    <form action="/phone/{{ $id }}" role="form" method="post">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Номер телефона</th>
            </tr>
            <tr>
                <td><input type="text" name="last_name" value="{{ $phone->last_name }}"></td>
                <td><input type="text" name="first_name" value="{{ $phone->first_name }}"></td>
                <td><input type="text" name="middle_name" value="{{ $phone->middle_name }}"></td>
                <td><input type="text" name="phone" value="{{ $phone->phone }}"></td>
            </tr>
        </table>
        <p><input type="submit" value="Изменить"></p>
    </form>
@stop
