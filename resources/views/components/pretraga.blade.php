<div>
    <form class="search-bar" role="search">
        <input class="form-control search-input" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px auto;
        }

        .search-input {
            border: 2px solid rgba(255, 255, 255, 0.3);
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            border-radius: 30px;
            padding: 12px 18px;
            width: 700px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 8px 15px rgba(255, 0, 150, 0.3);
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .search-input:focus {
            outline: none;
            box-shadow: 0 0 20px rgba(255, 0, 150, 0.9);
            border-color: rgba(255, 0, 150, 1);
            background-color: rgba(255, 255, 255, 0.2);
        }

        .search-btn {
            background-color: rgba(255, 0, 150, 0.8);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            transition: all 0.3s ease;
        }

        .search-btn:hover {
            background-color: rgba(255, 0, 150, 1);
            transform: scale(1.1);
            box-shadow: 0 8px 20px rgba(255, 0, 150, 0.3);
        }

        .search-btn i {
            font-size: 1.5rem;
        }
    </style>
</div>
