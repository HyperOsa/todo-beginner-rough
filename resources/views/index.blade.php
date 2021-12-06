@extends('layouts.header')

@section('content')
    <link rel="stylesheet" href="/css/index.css">
    <div class="container">
        <div class="box">
            <form action="{{ route('todo.create') }}" method="POST" class="create-form">
                @csrf
                <input type="text" class="create-form__input" name="content">
                <button class="btn">追加</button>
            </form>
            <div class="todos">
                <div class="todos__header">
                    <p class="todos__header--todo">Todo</p>
                    <p class="todos__header--createdAt">作成日</p>
                    <p class="todos__header--btn">更新</p>
                    <p class="todos__header--btn">削除</p>
                </div>
                <div class="todos__content">
                    <table class="todos-table">
                        @foreach ($todos as $todo)
                            <tr class="todos-table__row">
                                <form method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $todo->id }}">
                                    <td class="todos-table__column--todo">
                                        <input type="text" class="todos-table__input" name="content" value="{{ $todo->content }}">
                                    </td>
                                    <td class="todos-table__column--createdAt">
                                        <p>{{ $todo->created_at }}</p>
                                    </td>
                                    <td class="todos-table__column--btn">
                                        <button class="btn" formaction="{{ route('todo.update') }}">更新</button>
                                    </td>
                                    <td class="todos-table__column--btn">
                                        <button class="btn" formaction="{{ route('todo.delete') }}">削除</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
