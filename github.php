<?php
  include("header.php");
  include("inc/state_github.php");
?>
      
<!-- GitHub callback -->

  <?php if($result == "STATE_VALID") { ?>
  
    <div class="alert alert-success">
      <strong>Well done!</strong> Welcome back from <strong>GitHub</strong>, <?php echo $username; ?>.
    </div>
    
    <span class="description">
      <p>You are <strong>qualified</strong> for this reward. :)</p>
    </span>
	
	<br />
    <p>Please enter your <strong>Mastercoin address</strong> and click <strong>submit</strong> to claim your bounty:</p>
    
    <form class="navbar-form navbar-left" role="form" action="/claim" method="post">
      <div class="form-group">
        <input name="address" type="text" class="form-control" placeholder="Your address" style="width: 400px;" 
		autofocus required>          
      </div>
      <input name="formid" type="hidden" value="<?php echo $formid; ?>">
      <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <br /><br /><br /><br /><br />
    <p>Or <a href="/"><strong>go back</strong></a> to the frontpage.</p>
    
  <?php } else if($result == "STATE_NOT_QUALIFIED") { ?>
  
    <div class="alert alert-info">
      <strong>Too bad.</strong> Sorry, <?php echo $username; ?>...
    </div>
    
    <span class="description">
      <p>You must be stared on one of the <a href="http://wiki.mastercoin.org/index.php/FAQ#Is_Mastercoin_open_source.3F">
      <strong>Mastercoin GitHub repositories</strong></a> or you need at least <strong>3 public repositories</strong> and 
      an account older than <strong>August 1, 2013</strong>.</p>
      <p>The requirement serves as protection against abuse, so we are able to give out as much free MCS as 
      possible.</p>
      <p>Please understand our position and we hope you <strong>come back</strong> later when you gained enough.</p>
    </span>

    <br /><br /><br />
    <p><a href="/"><strong>Go back</strong></a> to the frontpage.</p>
  
  <?php } else if($result == "STATE_ALREADY_CLAIMED") { ?>
  
    <div class="alert alert-warning">
      <strong>Hmm...!</strong> You already claimed this reward.
    </div>
    
    <span class="description">  
      <p>It looks like you already have claimed your reward on <strong><?php echo $txtimestamp; ?></strong>.</p>
      <p>You can lookup the transaction and all further details on:</p>
    </span>
    
    <ul>
      <li><a href="http://mastercoin-explorer.com/transactions/<?php echo $txid; ?>" target="_blank">
	  <strong>mastercoin-explorer.com</strong></a></li>
      <li><a href="https://masterchest.info/lookuptx.aspx?txid=<?php echo $txid; ?>" target="_blank">
	  <strong>masterchest.info</strong></a></li>
    </ul>
    <p>If you are certain that you never claimed this reward, please contact us via 
	<a href="mailto:dexx@bitwatch.co"><strong>email</strong></a>.</p>
          
    <br /><br /><br />
    <p><a href="/"><strong>Go back</strong></a> to the frontpage.</p>
    
  <?php } else { ?>
  
    <div class="alert alert-danger">
      <strong>Oh noes!</strong> There seems to be a problem.. :(
    </div>
    
    <span class="description">
      <p>There are several reasons why you might see this.</p>
      <p>For example you declined the authorisation or your session is no longer valid, because you refreshed 
      this website.</p>
      <p>You can <a href="/github-intro"><strong>click here</strong></a> to start the authentication via 
	  <strong>GitHub</strong> again.</p>
      <p>If you think there shouldn't be an error, please contact us via <a href="mailto:dexx@bitwatch.co">
	  <strong>email</strong></a>.</p>
    </span>
    
    <br /><br /><br />
    <p>Or <a href="/"><strong>go back</strong></a> to the frontpage.</p>

  <?php } ?>

<!-- /GitHub callback -->
      
<?php include("footer.php"); ?>