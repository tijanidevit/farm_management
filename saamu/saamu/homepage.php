<?php 
    include_once 'includes/session.php';
    session_unexist();

    $email = get_session(); 
    include_once 'includes/connect.php'; 
    include_once 'includes/header.php';
    
    $user_query = $db->prepare("SELECT * FROM users WHERE email = ?");
    $user_query->execute([$email]);
    $user_row = $user_query->fetch();
    $user_id = $user_row['user_id'];
    $ref_id = 'SA-'.$user_id.'-'.rand(1000000,9999999 );
    
    $savings_query = $db->prepare("SELECT * FROM savings WHERE user_id = ?");
    $savings_query->execute([$user_id]);
    $savings_row = $savings_query->fetchAll();
    
    $withraws_query = $db->prepare("SELECT * FROM withdraws WHERE user_id = ?");
    $withraws_query->execute([$user_id]);
    $withraws_row = $withraws_query->fetchAll();
?>
    <section class="stats py-5" id="about" >
        <div class="container py-5">
            <div class="header py-lg-5 py-3 text-center">
                <h3 class="tittle mb-lg-3 mb-3 text-white">Your <span class="gold-text">Account</span></h3>
                <h5 class="tittle mb-lg-3 mb-3 text-white">Your total balance is: <span class="gold-text">&#8358;<?php echo $user_row['balance'] ?></span></h5>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h6 class="tittle mb-lg-3 mb-3"> <span class="gold-text">Savings</span></h6>
                    <table class = 'table table-striped table-hover text-white'>
                        <thead>
                            <th>Reference_Id</th>
                            <th>Amount Saved</th>
                            <th>Date of Payment</th>
                        </thead>

                        <tbody>
                            <?php 
                                foreach ($savings_row as $row) {
                            ?>
                                    <tr>
                                        <td> <?php echo $row['reference_id'] ?></td>
                                        <td> <?php echo $row['amount'] ?></td>
                                        <td> <?php echo $row['date'] ?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                        <tfoot>
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                            Make Savings
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Make Savings</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="amountForm">
                                        <label>Amount to save</label>
                                        <input class="form-control" placeholder="amount" type="text" name="amount" id="amount">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                        <br/>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <form>
                                        <script src="https://js.paystack.co/v1/inline.js"></script>
                                        <button type="button" class="btn btn-dark" id="paywith"> Process Payment </button> 
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        </tfoot>
                    </table>
                </div>
                
                <div class="col-lg-6">
                    <h6 class="tittle mb-lg-3 mb-3"> <span class="gold-text">Withdraws</span></h6>
                    <table class = 'table table-striped table-hover text-white'>
                        <thead>
                            <th>Reference_Id</th>
                            <th>Amount Withdrawn</th>
                            <th>Date of Withdrawn</th>
                        </thead>

                        <tbody>
                            <?php 
                                foreach ($withraws_row as $row) {
                            ?>
                                    <tr>
                                        <td> <?php echo $row['reference_id'] ?></td>
                                        <td> <?php echo $row['amount'] ?></td>
                                        <td> <?php echo $row['date'] ?></td>
                                    </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                        
                        <tfoot>
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal2">
                            Request Withdraw
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Request Withdraw</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" id="withdrawForm">
                                        <label class="text-gold">Amount to withdraw</label>
                                        <input class="form-control" placeholder="amount" type="text" name="amount" min="1000" id="withdrawAmount">
                                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                                        <input type="hidden" name="balance" id="balance" value="<?php echo $user_row['balance'] ?>">
                                        <br/>
                                        <script src="https://js.paystack.co/v1/inline.js"></script>
                                        <button type="submit" class="btn btn-dark"> Request Withdraw </button> 
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
  
<?php include_once 'includes/footer.php'; ?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){ 
        $('#paywith').click(function(){
            var myAmount = $('#amount').val() * 100;
            var myEmail = '<?php echo $_SESSION["user"] ?>';
            var user_id = '<?php echo $user_id ?>';

            var handler = PaystackPop.setup({
            key: 'pk_test_084fa7123ffb9f323b380dcdc88397b7f5bb4e5a',
            email: myEmail,
            amount: myAmount,
            currency: "NGN",
            ref: ''+Math.floor((Math.random() * 1000000000) + 1),
            metadata: {
                custom_fields: [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value: "+2348012345678"
                    }
                ]
            },
            callback: function(response){
                alert("Savings Done Successful");
                saveSavings(myAmount);                
            },
            onClose: function(){
                alert('window closed');
            }
            });
            handler.openIframe();
        });

        function saveSavings(amount){
            var user_ = '<?php echo $user_id ?>';
            $.ajax({
                url: 'includes/save_saving.php',
                type: 'POST',
                data: {user_id : user_,amount : amount, balance : '<?php echo $user_row['balance'] ?>' },
                success: function(data){
                    setTimeout(function() {
                        if(data == 1){
                            window.location.href = "homepage.php";
                        }
                        else{
                            console.log(data);
                        }
                    },500);
                }
            })
        }

        
        $('#withdrawForm').submit(function(e){
            e.preventDefault();
            $.ajax({
                url: 'includes/request_withdraw.php',
                type: 'POST',
                data:  $('#withdrawForm').serialize(),
                success: function(data){
                    setTimeout(function() {
                        if(data == 1){
                            window.location.href = "homepage.php";
                        }
                        else{
                            alert(data);
                        }
                    },500);
                }
            })
        })
    })
</script>
 
   
</body>

</html>
