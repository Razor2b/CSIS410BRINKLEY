<style>
    .navbar {
        overflow: hidden;
        background-color: #333;
    }

    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .subnav {
        float: left;
        overflow: hidden;
    }

    .subnav .subnavbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .navbar a:hover,
    .subnav:hover .subnavbtn {
        background-color: #c5135d;
    }

    .subnav-content {
        display: none;
        position: absolute;
        left: 0;
        background-color: #c5135d;
        width: 100%;
        z-index: 1;
    }

    .subnav-content a {
        float: left;
        color: white;
        text-decoration: none;
    }

    .subnav-content a:hover {
        background-color: #eee;
        color: black;
    }

    .subnav:hover .subnav-content {
        display: block;
    }
</style>
<div class="navbar">
    <div class="subnav">
        <button class="subnavbtn">What Makes Us Special<i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="AboutUs.php">Aboust Us</a>
            <a href="EmployeeChart.php">Meet the Team</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Shop<i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="Products.php">Our Products</a>
            <a href="cart.php ">Your Cart</a>
        </div>
    </div>
    <div class="subnav">
        <button class="subnavbtn">Product Support<i class="fa fa-caret-down"></i></button>
        <div class="subnav-content">
            <a href="GETform.php">Product Survey</a>
            <a href="HowTo.php">Product How To</a>
        </div>
    </div>
    <a href="ContactUs.php">Contact Us</a>
    <a href="login.php">Login</a>
</div>