@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Роль</th>
                        <th>Почта</th>
                    </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->tole }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Пользователей нет!</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Создание пользователя</div>
                <div class="card-body">
                    <form action="{{ route('users.save.user') }}" method="POST">
                        @csrf
                        <input type="text" name="name" id="">
                        <input type="text" name="email" id="">
                        <button>Создать</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Создание модератора</div>
                <div class="card-body">
                    <form action="{{ route('users.save.moderator') }}" method="POST">
                        @csrf
                        <input type="text" name="name" id="">
                        <input type="text" name="email" id="">
                        <button>Создать</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Создание администратора</div>
                <div class="card-body">
                    <form action="{{ route('users.save.admin') }}" method="POST">
                        @csrf
                        <input type="text" name="name" id="">
                        <input type="text" name="email" id="">
                        <button>Создать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
