 let x = document.querySelector(".totalvalue").innerHTML;
paypal.Buttons({
        style: {
            layout: 'vertical',
            color:  'gold',
            shape:  'pill',
            label:  'paypal'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
            purchase_units: [
                {
                amount: {
                    value: x
                }
                }
            ]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                let contentfor = JSON.stringify(details);
                let xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                   console.log(this.responseText);
                }
                    xmlhttp.open('POST', "goforward.php");
                 xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xmlhttp.send("allinformation=" + contentfor);
            });
        }
        }).render('#paypal-button-container');