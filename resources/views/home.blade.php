@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e_gov</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4"></script>

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .top-bar {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            min-width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .conta {
            margin-top: 30px;
            margin-left: 270px; /* Adjust the margin to accommodate the sidebar width */
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            padding: 20px;
            text-align: center;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .fa-chart-line {
            color: #007BFF;
            font-size: 40px;
        }

        .fa-dollar-sign {
            color: #28A745;
            font-size: 40px;
        }

        .fa-users {
            color: #FFC107;
            font-size: 40px;
        }

        .chart-conta {
            margin-top: 30px;
        }

        /* Print button */
        .print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>e_Gov</h2>
        <p>Admin</p>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
       
    </div>
    <!-- Main Content -->
    <div class="conta">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-chart-line"></i>
                    <h2>Total users</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-dollar-sign"></i>
                    <h2>Total Services</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h2>Happy Customers:20</h2>
                </div>
            </div>
        </div>

<style>
    @import url();
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:"Poppins",sans-serif;
}

body{
    min-height: 100vh;
    background: #e7f2fd;
}

.contai {
    position: relative;
    max-width: 1350px;
    width: 100%;
    padding: 20px;
    margin: 50px auto;
}

.filter_buttons{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

button{
    padding: 10px 20px;
    font-size: 18px;
    background: #fff;
    border: none;
    border-radius: 6px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
} 
button.active {
background: #4070f4;
color: #fff;
}
.filterable_cards {
    display: flex;
    margin-top: 25px;
    gap: 20px;
    flex-wrap: wrap;
}
.card {
    flex-grow: 1;
    flex-basis: 300px;
    background-color: #fff;
    padding: 3px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);

}
.card.hide{
    display: none;
}
.card img{
    width: 300px;
    height: 210px;
    object-fit: cover;
    border-radius: 8px 8px 0 0 ;
}
.card_body{
    padding: 15px 20px 20px;
}
.card_title {
    font-size: 20px;
    font-weight: 500;
    color: #333;
}

.card_text {
    font-size: 18px;
    color: #333;
}
</style>
        <div class="contai">
        <div class="filter_buttons">
            <button class="active" data-name="all">All Services</button>
            <button  data-name="shoes">Identification</button>
            <button  data-name="cloths">Police</button>
            <button  data-name="phone">Land</button>
        </div>

        <div class="filterable_cards">
            <div class="card" data-name="phone">
                <a href="">
                <img src="land.jpeg" alt="" />
                <div class="card_body">
                 
                    <p class="card_text">Change of Land Use </p>
                </div>
                </a>
            </div>

            
            <div class="card" data-name="phone">
            <a href="">
                <img src="ubut.png" alt="" />
                <div class="card_body">
                    <p class="card_text">Land Subdivision </p>
                </div>
                </a>
            </div>
           

            <div class="card" data-name="cloths">
            <a href="">
                <img src="lice.png" alt="" />
                <div class="card_body">
                    <p class="card_text">Application for Driving License </p>
                </div>
                </a>
            </div>

            <div class="card" data-name="cloths">
            <a href="">
                <img src="int.png" alt="" />
                <div class="card_body">
                    <p class="card_text">Renewal of Driving License </p>
                </div>
                </a>
            </div>

            <div class="card" data-name="shoes">
            <a href="">
                <img src="nidd.webp" alt="" />
                <div class="card_body">
                    <p class="card_text">Application for National ID </p>
                </div>
                </a>
            </div>

            <div class="card" data-name="shoes">
            <a href="">
                <img src="nid.png" alt="" />
                <div class="card_body">
                    <p class="card_text">Application for National ID Correction </p>
                </div>
                </a>
            </div>

        </div>
        

    </div>
</body>
        
    </div>

    <!-- Print Button -->
    <button class="print-button" onclick="window.print()"><i class="fas fa-print"></i> Print</button>

    <!-- Bootstrap JS and Popper.js via CDN (for Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <script>
        // Sample data for charts
        var salesByCountryData = {
            labels: ["USA", "Canada", "UK", "Bangladesh"],
            datasets: [{
                label: "Sales Volume",
                data: [250000, 180000, 160000, 120000],
                backgroundColor: ["#007BFF", "#28A745", "#FFC107", "#DC3545"],
            }]
        };

        var topSellingProductsData = {
            labels: ["Product A", "Product B", "Product C", "Product D", "Product E"],
            datasets: [{
                label: "Sales",
                data: [3500, 2800, 2200, 1900, 1500],
                backgroundColor: ["#007BFF", "#28A745", "#FFC107", "#DC3545", "#FF5733"],
            }]
        };

        var salesByExecutivesData = {
            labels: ["Sales Exec 1", "Sales Exec 2", "Sales Exec 3"],
            datasets: [{
                data: [250000, 180000, 160000],
                backgroundColor: ["#007BFF", "#28A745", "#FFC107"],
            }]
        };

        // Calculate percentage for sales increment
        var salesIncrementData = {
            labels: ["Sales Increment"],
            datasets: [{
                data: [25], // Adjust this value for the percentage you want to display
                backgroundColor: ["#007BFF"],
            }]
        };

        // Initialize charts
        var salesByCountryChart = new Chart(document.getElementById("salesByCountryChart"), {
            type: "bar",
            data: salesByCountryData,
        });

        var topSellingProductsChart = new Chart(document.getElementById("topSellingProductsChart"), {
            type: "horizontalBar",
            data: topSellingProductsData,
        });

        var salesByExecutivesChart = new Chart(document.getElementById("salesByExecutivesChart"), {
            type: "pie",
            data: salesByExecutivesData,
        });

        var salesIncrementChart = new Chart(document.getElementById("salesIncrementChart"), {
            type: "pie",
            data: salesIncrementData,
        });
    </script>


<script>
    const filterButtons = document.querySelectorAll(".filter_buttons button");
const filterableCards = document.querySelectorAll(".filterable_cards .card");


const filterCards = e => {
    document.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");

    //console.log(e.target);

    filterableCards.forEach(card =>{
        card.classList.add("hide");

     if(card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
        card.classList.remove("hide");
     }

    });
};


filterButtons.forEach(button => button.addEventListener("click",filterCards));
</script>
</body>


@endsection
