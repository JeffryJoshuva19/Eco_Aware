<?php
include "libs/load.php";
?>
<head>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="vendor/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
    <link rel="stylesheet" href="pay.css">

    
</head>
  <body>
  <div class="container p-2" >
        <div class="card p-4">
        <div class="border border-4 border-info-subtle rounded-3 p-4" >
            <p class="h8 py-3"> Payment Details</p>
            <div class="row gx-3">
                <div class="col">
                    <div class="d-flex flex-column">
                        
                       <!-- <p class="text mb-1">Person Name</p> -->
                       <label for="name" class="form-label m-2"> Card-holder Name</label>
                        <input class="form-control mb-4" type="text" placeholder="ABCDEFGHIJ">
                    </div>
                </div>
                </div>
                <div class="row gx-3">
                <div class="col">
                    <div class="d-flex flex-column">
                     <label for="number" class="form-label m-2"> Card Number</label>
                        <input class="form-control mb-4" type="text" placeholder="XXXX-XXXX-XXXX-XXXX">
                    </div>
                </div>
                </div>
                <div class="row gx-3">
                <div class="col">
                    <div class="d-flex flex-column">
                        <label for="expiryMonth" class="form-label m-2"> Expiry Month</label>
                        <!-- <p class="text mb-1">Expiry</p> -->
                        <!-- <input class="form-control mb-4" placeholder="MM/YYYY"> -->
                        <select id="expiryMonth" name="expiryMonth" class="form-select mb-4" aria-required>
                           <option value="" disabled selected>MM</option>
                           <option value="01">01</option>
                           <option value="02">02</option>
                           <option value="03">03</option>
                           <option value="04">04</option>
                           <option value="05">05</option>
                           <option value="06">06</option>
                           <option value="07">07</option>
                           <option value="08">08</option>
                           <option value="09">09</option>
                           <option value="10">10</option>
                           <option value="11">11</option>
                           <option value="12">12</option>
                        </select>
                    </div>
                
                
                    <div class="d-flex flex-column">
                        <label for="year" class="form-label m-2"> Expiry Year</label>
                        <!-- <p class="text mb-1">Expiry</p> -->
                        <!-- <input class="form-control mb-4"  placeholder="MM/YYYY"> -->
                        <select id="expiryYear" name="expiryYear" class="form-select mb-4" aria-required>
                           <option value="" disabled selected>YYYY</option>
                           <option value="2023">2023</option>
                           <option value="2024">2024</option>
                           <option value="2025">2025</option>
                           <option value="2026">2026</option>
                           <option value="2027">2027</option>
                           <option value="2028">2028</option>
                           <option value="2029">2029</option>
                           <option value="2030">2030</option>
                           <option value="2031">2031</option>
                           <option value="2032">2032</option>
                           <option value="2033">2033</option>
                           <option value="2034">2034</option>
                           <option value="2035">2035</option>
                           <option value="2036">2036</option>
                           <option value="2037">2037</option>
                           <option value="2038">2038</option>
                           <option value="2039">2039</option>
                           <option value="2040">2040</option>
                           <option value="2041">2041</option>
                           <option value="2042">2042</option>
                           <option value="2043">2043</option>
                           <option value="2044">2044</option>
                           <option value="2045">2045</option>
                           <option value="2046">2046</option>
                           <option value="2047">2047</option>
                           <option value="2048">2048</option>
                           <option value="2049">2049</option>
                           <option value="2050">2050</option>
                        </select>
                     </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column">
                        <!-- <p class="text mb-1">CVV/CVC</p> -->
                        <label for="cvv/cvc" class="form-label m-2"> CVV/CVC</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="45px"height="45px"viewBox="0 0 512 640" x="0px" y="0px"><path d="M453.554,386.051a19.747,19.747,0,0,0-25.915-4.518l-26.648-33.8-9.424,7.43,26.581,33.719a18.182,18.182,0,0,0-2.528,25.149l38.459,48.785a15.655,15.655,0,0,0,21.932,2.617l12.461-9.787a15.632,15.632,0,0,0,2.622-21.972Z"/><path d="M424.153,310.785a129.627,129.627,0,0,0-9.777-146.359c-1.617-2.047-3.257-4.047-4.873-5.865A129.192,129.192,0,0,0,340.514,118h0a134.17,134.17,0,0,0-56.948-.051l-.011-.106a128.911,128.911,0,0,0-51.939,24.712A131.083,131.083,0,0,0,214.661,158.5a129.785,129.785,0,0,0-14.6,152.248,130.334,130.334,0,0,0,224.1.037ZM312.22,362.546a118.089,118.089,0,0,1-92.979-44.957c-1.126-1.434-2.106-2.735-3-3.985a117.786,117.786,0,0,1,19.348-158.821c1.092-.937,2.267-1.9,3.462-2.831,44.068-34.605,106.994-33.415,149.609,2.839a119.02,119.02,0,0,1,16.286,16.924,116.7,116.7,0,0,1,25.3,71.226,117.973,117.973,0,0,1-118.025,119.6Z"/><path d="M398.247,306.593A106.1,106.1,0,0,0,246.445,161.4c-1.063.829-2.092,1.671-3.072,2.513a105.786,105.786,0,0,0-17.4,142.677c.808,1.127,1.685,2.29,2.695,3.576,36.187,45.905,103.063,53.87,149.071,17.745a106.077,106.077,0,0,0,20.5-21.315ZM268.6,242h-8.64l6.114,5.993a5.788,5.788,0,0,1,0,8.308,5.99,5.99,0,0,1-4.233,1.788,5.425,5.425,0,0,1-4-1.743L252,250.252v8.64a6,6,0,0,1-12,0v-8.64l-6.37,6.139a6.356,6.356,0,0,1-4.391,1.787,5.957,5.957,0,0,1-4.328-10.185L230.992,242h-8.639a6,6,0,0,1,0-12h8.639l-6.1-6.226a6.215,6.215,0,0,1,.009-8.661,6.3,6.3,0,0,1,8.729.031l6.37,6.139v-8.64a6,6,0,0,1,12,0v8.64l5.848-6.05a5.822,5.822,0,0,1,8.337.059,6,6,0,0,1-.057,8.482L259.962,230h8.64a6,6,0,0,1,0,12Zm66.071,0h-8.64l6.109,5.993a5.788,5.788,0,0,1,0,8.308,6.011,6.011,0,0,1-4.242,1.788,5.465,5.465,0,0,1-4.017-1.743L318,250.252v8.64a6,6,0,1,1-12,0v-8.64l-6.335,6.139a6.27,6.27,0,0,1-4.355,1.787,5.957,5.957,0,0,1-4.328-10.185L297.063,242h-8.64a6,6,0,0,1,0-12h8.64l-6.109-6.226a6.131,6.131,0,1,1,8.711-8.63L306,221.283v-8.64a6,6,0,0,1,12,0v8.64l5.883-6.05a5.864,5.864,0,0,1,8.372.059,6,6,0,0,1-.056,8.482L326.033,230h8.64a6,6,0,0,1,0,12Zm59.28,16.119a5.52,5.52,0,0,1-4.035-1.758L384,250.252v8.64a6,6,0,1,1-12,0v-8.64l-6.3,6.139a6.187,6.187,0,0,1-4.32,1.787,5.957,5.957,0,0,1-4.327-10.185L363.134,242h-8.64a6,6,0,0,1,0-12h8.64l-6.118-6.226a6.122,6.122,0,1,1,8.684-8.63l6.3,6.139v-8.64a6,6,0,0,1,12,0v8.64l5.918-6.05a5.907,5.907,0,0,1,8.408.059,6,6,0,0,1-.056,8.482L392.1,230h8.639a6,6,0,0,1,0,12H392.1l6.105,5.993a5.788,5.788,0,0,1,0,8.308A6.062,6.062,0,0,1,393.953,258.119Z"/><path d="M224.2,132.86A129.442,129.442,0,0,1,247.838,118H18v30H207.526A210.25,210.25,0,0,1,224.2,132.86Z"/><path d="M342.431,106H486V57.717C486,50,479.268,43,471.548,43h-440C23.828,43,18,50,18,57.717V106H281.633A125.088,125.088,0,0,1,342.431,106Z"/><path d="M170.616,230.806A143.569,143.569,0,0,1,197.61,160H18V293.817C18,301.537,23.828,308,31.548,308H184.8A142.065,142.065,0,0,1,170.616,230.806Z"/><path d="M486,118H376.324c15.058,7,28.661,18,40.291,30H486Z"/><path d="M471.548,308c7.72,0,14.452-6.463,14.452-14.183V160H426.54A141.425,141.425,0,0,1,454,236.135c1.449,24.9-3.583,48.865-14.593,71.865Z"/></svg>
                            </div>
                            <div class="input-group-number">
                                <input type="password" id="cvv" name="cvv/cvc"class="form-control" placeholder="***"required>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
                <div class="row gx-3">
                <div class="col-12">
                    <div class="btn btn-success m-2">
                        <span class="p-5">Pay</span>
                        <span class="fas fa-arrow-right"></span>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  </body> 
</html>
<style>
   @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    /* background-color: #0C4160; */

    padding: 30px 10px;
}

.card {
    max-width: 750px;
    margin: auto;
    color: black;
    border-radius: 20 px;
}

/* p {
    margin: 0px;
}

.container .h8 {
    font-size: 30px;
    font-weight: 800;
    text-align: center;
}

.btn.btn-primary {
    width: 100%;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 15px;
    background-image: linear-gradient(to right, #77A1D3 0%, #79CBCA 51%, #77A1D3 100%);
    border: none;
    transition: 0.5s;
    background-size: 200% auto;

}


.btn.btn.btn-primary:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none;
}



.btn.btn-primary:hover .fas.fa-arrow-right {
    transform: translate(15px);
    transition: transform 0.2s ease-in;
}

.form-control {
    color: white;
    background-color: #223C60;
    border: 2px solid transparent;
    height: 60px;
    padding-left: 20px;
    vertical-align: middle;
}

.form-control:focus {
    color: white;
    background-color: #0C4160;
    border: 2px solid #2d4dda;
    box-shadow: none;
}

.text {
    font-size: 14px;
    font-weight: 600;
}

::placeholder {
    font-size: 14px;
    font-weight: 600;
} */
</style>