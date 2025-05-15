<div style=" margin-left: 40px;">
    <a href="{{ $url }}" id="btn" class="btn-custom">
        <i id="btn-icon" class="fas fa-plus"></i> {{ $text }}
    </a>
</div>

<style>
    .btn-custom {
        background-color: #ff0096;
        color: white;
        font-weight: bold;
        border: none;
        padding: 12px 24px;
        border-radius: 30px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #00ccff;
        transform: scale(1.05);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }

    /* Ikona */
    .btn-custom i {
        font-size: 1.2rem;
        transition: transform 0.5s ease;
    }

    /* Animacija rotacije */
    @keyframes rotateIcon {
        0% { transform: rotate(0deg); }
        50% { transform: rotate(180deg); }
        100% { transform: rotate(360deg); }
    }

    .rotating {
        animation: rotateIcon 1s ease-in-out;
    }
</style>

<script>
    document.getElementById("btn").addEventListener("click", function () {
        const icon = document.getElementById("btn-icon");

        // Dodaj animaciju
        icon.classList.add("rotating");

        // Ukloni nakon završetka da bi se mogla opet aktivirati
        icon.addEventListener("animationend", function () {
            icon.classList.remove("rotating");
        }, { once: true });
    });
</script>

<!-- Font Awesome (potrebno ako već nije uključeno) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
