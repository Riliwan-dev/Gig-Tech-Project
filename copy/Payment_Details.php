<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="images/gig.png">
    
    <title>Gig-tech consults and solution</title>
    <link rel="stylesheet" href="css/Payment_Details.css">
</head>
<body>
    <div class="container">
        <div class="search-bar">
            <div id="select">
                <p id="selectText">Payment for</p>
                <img src="images/arrow.jpg" alt="arrow">
                <ul id="list">
                    <li class="options">ID CARD</li>
                    <li class="options">BADGE</li>
                    <li class="options">PROGRAM FEES</li>
                    <li class="options">Laptop</li>
                    <li class="options">Certificate</li>
                </ul>
            </div>
            <input type="text" id="inputfield" placeholder="What expenses are you covering">
        </div>

        <form action="paystack/index.php" method="POST"> 
        <button type="submit" id="button" name="pay_now" title="Pay now"> <a href="paystack/">Make Payment</a> </button>
        </form>
    </div>

    <script>
        let select = document.getElementById("select");
        let list = document.getElementById("list");
        let selectText = document.getElementById("selectText");
        let inputfield = document.getElementById("inputfield");
        
        let options = document.getElementsByClassName("options");

        
        

        select.onclick = function(){
            list.classList.toggle("open")
        }
        for(option of options){
            option.onclick = function(){
                selectText.innerHTML = this.innerHTML;
                inputfield.placeholder = "Payment for " + selectText.innerHTML; 
            }
        }

    </script>
</body>
</html>