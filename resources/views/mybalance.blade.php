<x-navigacija />
<div class="pocetna">
    <div class="balance">
        <h1 id="naslov">Total Balance:</h1>
        <h1 id="naslov2">CP {{auth()->user()->balance}}</h1>
        <button id="dugme1">Kupi Balance</button>

    </div>
</div>
<style>
    .pocetna{
        margin: 0px;
        padding: 0px;
        width: 100%;
        height: 100vh;
        display: flex;

        justify-content: center;
        background-image: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
    }
    .balance{
        border: solid 3px rgba(128, 0, 128, 0.11);
        height: 300px;
        width: 600px;
        background-color: white;
        border-radius: 17px;
        margin-top: 100px;

    }
    #naslov{
        margin-top: 40px;
        margin-left: 40px;
        color: purple;
        font-weight: 400;
        font-size: 30px;
    }
    .kes{
        display: flex;
    }
    #naslov2{
        margin-left: 40px;
        margin-top: 10px;
        font-size: 80px;
    }
    #dugme1 {
        margin-left: 40px;
        margin-top: 20px;
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
