@extends('layouts.master')

@section('title', 'Добавить')

@section('sidebar')
    <a href="./">Список контактов</a>
    <h1>Добавить запись</h1>
@stop

@section('content')
    <form action="/phone" role="form" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Номер телефона</th>
            </tr>
            <tr>
                <td><input type="text" name="last_name" value=""></td>
                <td><input type="text" name="first_name" value=""></td>
                <td><input type="text" name="middle_name" value=""></td>
                <td><input type="text" name="phone" value=""></td>
            </tr>
        </table>
        <p><input type="submit" value="Добавить"></p>
    </form>
@stop
