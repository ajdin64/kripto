<x-navigacija />
<div class="pocetna">
    <div class="konverter">
        <form id="konverzija-forma" action="{{ route('depositing') }}" method="POST">
            @csrf
            <h1>Withdraw Ore</h1>

            <label for="tiprude">Odaberite rudu</label>
            <select name="tiprude" id="tiprude" onchange="prikaziCijenu()" required>
                <option value="" disabled selected>-- Odaberite rudu --</option>
                <option value="Coal">Coal</option>
                <option value="Iron">Iron</option>
            </select>

            <p id="cijena-info" style="margin-top: 10px; color: #7b1fa2;"></p>

            <label for="kolicina">Unesite količinu (kg)</label>
            <input type="number" name="kolicina" id="kolicina" placeholder="npr. 20" required>

            <button type="button" onclick="konvertuj()">Konvertuj</button>

            <label for="kolicinanovca">Povuci novac (€)</label>
            <input type="number" name="kolicinanovca" id="kolicinanovca" placeholder="npr. 30" readonly required>

            <button type="submit">Deposit</button>
        </form>
    </div>
</div>

<script>
    const cijene = {
        Coal: 3,
        Iron: 6
    };

    function prikaziCijenu() {
        const tip = document.getElementById("tiprude").value;
        const info = document.getElementById("cijena-info");
        if (tip && cijene[tip]) {
            info.textContent = `Vrijednost: ${cijene[tip]} € po 1 kg.`;
        } else {
            info.textContent = "";
        }
    }

    function konvertuj() {
        const tip = document.getElementById("tiprude").value;
        const kolicina = parseFloat(document.getElementById("kolicina").value);
        const output = document.getElementById("kolicinanovca");

        if (!tip || isNaN(kolicina)) {
            alert("Molimo odaberite rudu i unesite količinu.");
            return;
        }

        const cijenaPoKg = cijene[tip];
        const rezultat = kolicina * cijenaPoKg;

        output.value = rezultat.toFixed(2);
    }
</script>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #e0bbf7, #d0f0ff, #ffe0f7);
        background-size: 200% 200%;
        animation: gradient 10s ease infinite;
    }

    .pocetna {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        width: 100%;
    }

    .konverter {
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(150, 100, 200, 0.3);
        width: 100%;
        max-width: 400px;
    }

    .konverter h1 {
        color: #8e44ad;
        text-align: center;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
        color: #6a1b9a;
    }

    input,
    select,
    button {
        margin-top: 5px;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #d1c4e9;
        border-radius: 8px;
    }

    input:focus,
    select:focus {
        outline: none;
        border-color: #ba68c8;
        box-shadow: 0 0 5px #ba68c8;
    }

    input[readonly] {
        background-color: #f5f5f5;
    }

    button {
        background: linear-gradient(to right, #ce93d8, #81d4fa);
        border: none;
        color: white;
        margin-top: 20px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: linear-gradient(to right, #ab47bc, #29b6f6);
    }

    @keyframes gradient {
        0% { background-position: 0% 50% }
        50% { background-position: 100% 50% }
        100% { background-position: 0% 50% }
    }
</style>
