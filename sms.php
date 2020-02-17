
<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php 

	include ( "sms/NexmoMessage.php" );


	/**
	 * To send a text message.
     **/
     if(isset($_POST['submit'])){
       $to=$_POST['num'];
    $from=$_POST['sub'];
    $message=$_POST['msg'];

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('b2dbeb93', 'mpm0HxODOmG2Hy90');
 
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $to, $from, $message );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!
}
?>

                    <div class="section-heading text-center">
                        <h2>Send Sms</h2>
                        <p>Please fill in your details correctly </p>
                    </div>
                    <!-- Form -->
                    <form action="sms.php" method="post" enctype="multipart/form-data" class="user">
                          
                                <input type="text" name="sub" class="form-control form-control-user" placeholder="Sender" required>
                            
                                <input type="tel" name="num" class="form-control form-control-user"placeholder="Phone Number" required>
                            
                          <textarea name="msg"class="form-control form-control-user" placeholder="Start the message..."></textarea>
                           
                           
                                <button type="submit" name="submit" value="send" >Send</button>
                           
                        </form>
 <?php
include('includes/scripts.php');
include('includes/footer.php');
?>