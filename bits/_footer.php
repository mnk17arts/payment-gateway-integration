<div class="container-fluid footerdiv py-3" style="min-height:10vh;">
    <!-- <h6 class="text-center">
        footer
    </h6> -->
    <div class="fbox p-4">
    MESSI.ORG is a registered XYZ non-profit organization founded on the principle that helping others is good for society.Our resources alone cannot make the difference, we need your support to improve lives.
Become our partner with a small extension of kindness to foster greater public care.
    </div>
    <hr>
    <div class="crights text-primary">
        <p>&copy; 2021 Messi.org  All Rights Reserved</p>
        <p class="links">
Terms & Conditions <span class="text-light">/</span> Privacy Policy <span class="text-light">/</span> Legal Disclaimer <span class="text-light">/</span> Contact Us</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var donate = document.getElementsByClassName('PaymentButton');
    donate.setAttribute('id','paymentbtn')
    document.getElementById('nb-donate').addEventListener("click", ()=>{
        document.getElementById('paymentbtn').Click();
    })
</script>