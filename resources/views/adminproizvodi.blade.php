<x-adminnavigacija />

<div class="tabela-wrapper">
    <table>
        <thead>
        <tr>
            <th>User ID</th>
            <th>Naziv Rude</th>
            <th>Cijena</th>
            <th>Datum Objave</th>
            <th>Status</th>
            <th>Kolicina</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sviproizvodi as $proizvod)
        <tr>
            <td>{{$proizvod->user->name}}</td>
            <td>{{$proizvod->ime}}</td>
            <td>{{$proizvod->cijena}} CP</td>
            <td>{{$proizvod->created_at}}</td>
            @if($proizvod->status == 1)
                <td>Active</td>
            @endif
            <td>{{$proizvod->kolicina}} kg</td>
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
