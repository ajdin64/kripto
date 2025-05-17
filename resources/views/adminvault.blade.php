<x-adminnavigacija />
<div class="tabela-wrapper">
    <table>
        <thead>
        <tr>
            <th>Ime</th>
            <th>Kolicina</th>
            <th>Cijena</th>
            <th>Datum Kreiranja</th>
        </tr>
        </thead>
        <tbody>
        @foreach($svirudnici as $rudnik)
            <tr>
                <td>{{$rudnik->ime}}</td>
                <td>{{$rudnik->kolicina}}</td>
                <td>{{$rudnik->cijena}}</td>
                <td>{{$rudnik->created_at}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
    .tabela-wrapper {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    table {
        width: 70%;
        max-width: 800px;
        border-collapse: separate;
        border-spacing: 0;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(145deg, #fdf4ff, #f0f9ff);
    }

    th, td {
        padding: 14px 18px;
        text-align: left;
    }

    thead {
        background: linear-gradient(90deg, #a78bfa, #60a5fa, #f472b6);
        color: white;
    }

    tbody tr:nth-child(odd) {
        background-color: #fdf4ff;
    }

    tbody tr:nth-child(even) {
        background-color: #f0f9ff;
    }

    tbody tr:hover {
        background-color: #fae8ff;
        cursor: pointer;
    }

    th:first-child,
    td:first-child {
        border-top-left-radius: 12px;
    }

    th:last-child,
    td:last-child {
        border-top-right-radius: 12px;
    }
</style>
