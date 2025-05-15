<x-navigacija />
<div class="proizvod-detail">
    <h1>{{ $proizvod->ime }}</h1>
    <p><strong>Opis:</strong> {{ $proizvod->opis }}</p>
    <p><strong>Cijena:</strong> {{ $proizvod->cijena }} KM</p>
    <p><strong>Količina:</strong> {{ $proizvod->kolicina }}</p>
    <form action="{{ route('proizvod.kupi', $proizvod->id) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Kupi</button>
    </form>
</div>
