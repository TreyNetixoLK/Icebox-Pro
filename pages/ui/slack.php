<?php
/**
 * A lightweight example script for demonstrating how to
 * work with the Slack API.
 */
  
// Include our Slack interface classes
include "slack-interface/class-slack.php";
require_once ("slack-interface/class-slack-access.php");
require_once ("slack-interface/class-slack-api-exception.php");
 
use Slack_Interface\Slack;
use Slack_Interface\Slack_API_Exception;
 
//
// HELPER FUNCTIONS
//
 
/**
 * Initializes the Slack object.
 *
 * @return Slack    The Slack interface object
 */
function initialize_slack_interface() {
    return null;
}
 
/**
 * Executes an application action (e.g. 'send_notification').
 * 
 * @param Slack  $slack     The Slack interface object
 * @param string $action    The id of the action to execute
 *
 * @return string   A result message to show to the user
 */
function do_action( $slack, $action ) {
    $result_message = '';
 
    switch ( $action ) {
        default:
            break;
    }
 
    return $result_message;
}
 
//
// MAIN FUNCTIONALITY
//
 
// Setup the Slack interface
$slack = initialize_slack_interface();
 
// If an action was passed, execute it before rendering the page
$result_message = '';
if ( isset( $_REQUEST['action'] ) ) {
    $action = $_REQUEST['action'];
    $result_message = do_action( $slack, $action );
}
 
//
// PAGE LAYOUT
//
 
?>
<html>
    <head>
        <title>Slack Integration Example</title>
         
        <style>
            body {
                font-family: Helvetica, sans-serif;
                padding: 20px;
            }
             
            .notification {
                padding: 20px;
                background-color: #fafad2;
            }
 
            input {
                padding: 10px;
                font-size: 1.2em;
                width: 100%;
            }
        </style>
    </head>
     
    <body>
        <h1>Slack Integration Example</h1>
 
        <?php if ( $result_message ) : ?>
            <p class="notice">
                <?php echo $result_message; ?>
            </p>
        <?php endif; ?>
 
        <form action="" method="post">
            <input type="hidden" name="action" value="send_notification"/>
            <p>
                <input type="text" name="text" placeholder="Type your notification here and press enter to send." />
            </p>
        </form>
    </body>
</html>