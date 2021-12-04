@extends('layouts.header')

@section('content')
    <link rel="stylesheet" href="/css/index.css">
    <div class="container">
        <div class="box">
            <form action="" method="POST" class="create-form">
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
                            <tr class="todos-table__row">
                                <form method="POST">
                                    <td class="todos-table__column--todo">
                                        <input type="text" class="todos-table__input" name="content" value="todoが入ります">
                                    </td>
                                    <td class="todos-table__column--createdAt">
                                        <p>日付</p>
                                    </td>
                                    <td class="todos-table__column--btn">
                                        <button class="btn" formaction="">更新</button>
                                    </td>
                                    <td class="todos-table__column--btn">
                                        <button class="btn" formaction="">削除</button>
                                    </td>
                                </form>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
