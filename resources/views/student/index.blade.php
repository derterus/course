@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>ФАмилия</th>
                        <th>возраст</th>
                        <th>телефон</th>
                        <th>адрес</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            {{ $student->id }}
                        </th>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
