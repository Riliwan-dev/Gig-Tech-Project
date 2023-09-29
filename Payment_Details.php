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
    <input type="email" id="emailfield" class="input_email" placeholder="input email"  ><br/><br/><br/><br/><br/>

        <div class="search-bar">
            <div id="select">
                <p id="selectText">Payment for</p>
                <img src="images/arrow.jpg" alt="arrow">
              

                <ul id="list">
                    <form action="" method="get">
                    <li class="options" name="id_card" data-price="2000">ID CARD</li>
                    <li class="options" name="badge" data-price="300">BADGE</li>
                    <li class="options" name="program_fees" data-price="10000">PROGRAM FEES</li>
                    <li class="options" name="laptop" data-price="50000">Laptop</li>
                    <li class="options" name="certificate" data-price="1500">Certificate</li>
                    </form>
                </ul>
            </div>
          
            <input type="text" id="inputfield" placeholder="What expenses are you covering" data-amount="">
        </div>

        <form method="POST"> 
        <button type="button" id="button" name="pay_now" title="Pay now"  onclick="redirectpage()"> Make Payment</button>
        <input type="hidden" id="amounttopay">
        </form>
    </div>

    <script>
        function redirectpage(){
            var price = document.getElementById('amounttopay').value;
            var emailfield = document.getElementById('emailfield').value;
            
            if(price === "")
            
            {
                alert('choose an option');
            }else if(emailfield === ""){
                alert('email is required');
            }
            
            else
            {
            location.href="paystack/index.php?fee="+price+"&email="+emailfield;
            }
        }
        let select = document.getElementById("select");
        let list = document.getElementById("list");
        let selectText = document.getElementById("selectText");
        let inputfield = document.getElementById("inputfield");
        
        let options = document.getElementsByClassName("options");
        const amounttopay = document.getElementById('amounttopay');

        
        

        select.onclick = function(){
            list.classList.toggle("open")
        }
        for(option of options){
            option.onclick = function(){
                selectText = this.innerHTML;
                amouttopay = this.dataset.price;
                amounttopay.value = amouttopay;
                // console.log(3);
                
                
                inputfield.placeholder = "Payment for " + selectText ; 
                // inputfield.setAttribute("data-amount","") 
            }
        }

    </script>
</body>
</html>