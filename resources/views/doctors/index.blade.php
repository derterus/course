@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Доктора</h1>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary">Добавить доктора</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Специализация</th>
                <th>Номер</th>
                <th>Email</th>
                <th>Стаж работы</th>
                <th>Время работы</th>
                <th>Адрес</th>
                <th>Фото</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $doctor->id }} </td>
                <td>{{ $doctor->FirstName }} </td> 
                <td> {{ $doctor->LastName }}</td>
                <td>{{ $doctor->Specialization }}</td>
                <td> {{ $doctor->PhoneNumber }}</td>
                <td> {{ $doctor->Email }}</td>
                <td> {{ $doctor->ExperienceYears }}</td>
                <td>{{ $doctor->WorkSchedule }}</td>
                <td>{{ $doctor->Adress }}</td>
                <td><img class="image" src="{{ $doctor->Photo}}"></td>
                <td>
                    <a href="{{ route('doctors.show', $doctor) }}" class="btn btn-info">Посмотреть</a>
                    <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-warning">Редактировать</a>
                    <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
