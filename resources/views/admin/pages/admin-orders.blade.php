@extends('admin.admin-template.admin')
@section('content')
    <section class="admin-section">
        <div class="admin-table-header">
            <h2>Список заказов</h2>
        </div>

        <table class="admin-table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя пользователя</th>
                <th>Цена</th>
                <th>Cтатус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->user->name}}</td>
                    <td>{{$order->total_price}} ₽</td>
                    <td>{{$order->status}}</td>
                    <td>
                        <form method="post" action="{{ route('admin.status',  $order->id) }}" class="catalog-controls">
                            @csrf
                            <select class="catalog-filter" name="status" onchange="this.form.submit()">
                                <option value="">Действия</option>
                                <option value="В обработке">В обработке</option>
                                <option value="В доставке">В доставке</option>
                                <option value="Доставлено">Доставлено</option>
                            </select>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Товары не найдены</td>
                </tr>
            @endforelse

            </tbody>
        </table>
    </section>
@endsection


