<x-navigacija />
<div class="pocetna">
<div class="box">
    <div class="box1"><img src="{{asset('/slike/burger.jpg')}}" alt="burger" style="height: 300px; width: 300px;"></div>
    <form action="dodajbalance" method="post">
        @csrf
    <div class="box2"><button>10 Euro = 100 CP</button></div>
    </form>
</div>
</div>
<style>
.box{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 400px;
    width: 400px;
    background-color: white;
    margin-left: 100px;
    gap: 20px;
}
.box button {
    padding: 1rem 2.5rem;
    font-size: var(--font-medium);
    background: linear-gradient(45deg, #a4508b, #5f0a87, #d76d77, #ffaf7b);
    /* ljubičasto do roze i svetlo plava/narandžasto-roze gradient */
    color: white;
    font-weight: 700;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    box-shadow:
        0 4px 15px rgba(164, 82, 150, 0.6),
        0 0 10px rgba(255, 182, 193, 0.7), /* roze glow */
        0 0 20px rgba(173, 216, 230, 0.8); /* svetlo plava glow */
    transition: background 0.5s ease, box-shadow 0.4s ease, transform 0.3s ease;
    letter-spacing: 1.2px;
    text-transform: uppercase;
}

.box button:hover {
    background: linear-gradient(135deg, #d16ba5, #c777b9, #c0d8e4, #9ad0ec);
    /* svetliji i hladniji gradient */
    box-shadow:
        0 6px 20px rgba(255, 105, 180, 0.9), /* intenzivniji roze glow */
        0 0 15px rgba(147, 112, 219, 0.9), /* jaca ljubičasta glow */
        0 0 25px rgba(135, 206, 250, 1); /* jaca svetlo plava glow */
    transform: scale(1.15) rotate(2deg);
}

.box button:focus {
    outline: none;
    box-shadow:
        0 0 5px 3px rgba(173, 216, 230, 0.9);
}
.pocetna{
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>
