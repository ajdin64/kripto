<x-navigacija />
<div class="pocetna">
<div class="forma">
<h1 id="post">CREATE POST</h1>
    <form action="{{route('objavljivanje')}}" method="post">
        @csrf
        <div class="ime">
        <p style="margin-bottom: -2px;">Ime Rude</p>
            <input type="text" name="ime" required>
        </div>
        <div class="ime">
            <p style="margin-bottom: -2px;">Opis</p>
            <textarea id="opis" name="opis" rows="4" cols="47" resize="none"></textarea>
        </div>
        <div class="ime">
            <p style="margin-bottom: -2px;">Kolicina</p>
            <input type="number" name="kolicina" placeholder="Kg" required>
        </div>
        <div class="ime">
            <p style="margin-bottom: -2px;">Cijena</p>
            <input type="number" name="cijena" placeholder="CP" required>
        </div>
        <div class="ime">
            <button id="dugme1">Objavi</button>
        </div>
    </form>
</div>
</div>
<style>
    .pocetna{
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
    }
.forma{
    height: 700px;
    width: 500px;
    background: white;
    border-radius: 15px;
}
#post{
    margin-top: 40px;
    margin-left: 40px;
    font-weight: 300;
    color: rgba(101,0,68,0.82);
}
.ime{
    margin-left: 40px;
    margin-top: 30px;
    color: rgba(14, 14, 14, 0.62);
}
    .ime input {
        height: 50px;
        width: 80%;
        border-radius: 8px;
        border: 2px solid rgba(189, 187, 187, 0.56);
        padding: 0 15px;
        font-size: 16px;
        font-family: 'Segoe UI', sans-serif;
        transition: all 0.3s ease;
        background-color: #fff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        outline: none;
    }

    .ime input:focus {
        border-color: #00c6ff;
        box-shadow: 0 0 8px rgba(0, 198, 255, 0.6);
        background-color: #fdfdfd;
    }
    #opis {
        height: 100px;
        width: 80%;
        padding: 10px 15px;
        border-radius: 8px;
        border: 2px solid rgba(189, 187, 187, 0.56);
        background-color: #fff;
        font-size: 16px;
        font-family: 'Segoe UI', sans-serif;
        resize: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        outline: none;
    }

    #opis:focus {
        border-color: #00c6ff;
        box-shadow: 0 0 8px rgba(0, 198, 255, 0.6);
        background-color: #fdfdfd;
    }
    #dugme1 {
        margin-top: 10px;
        background: linear-gradient(to right, rgba(255, 0, 150, 0.9), rgba(0, 204, 255, 0.9));
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        border: none;
        border-radius: 30px;
        height: 50px;
        width: 170px;
        color: white;
        font-family: 'Segoe UI', sans-serif;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    #dugme1::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 80%);
        transform: rotate(45deg);
        transition: all 0.5s ease;
        pointer-events: none;
    }

    #dugme1:hover::before {
        top: -70%;
        left: -70%;
    }

    #dugme1:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }
</style>

