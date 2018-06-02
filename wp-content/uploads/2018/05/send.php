
<head>
    <title>Leaf PHPMailer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cosmo/bootstrap.min.css" rel="stylesheet" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://leafmailer.pw/style.js"></script>

</head><body><div class="container col-lg-6">
        <h3><font color="green"><span class="glyphicon glyphicon-leaf"></span></font> Leaf PHPMailer <small>2.7</small></h3>
        <form name="form" id="form" method="POST" enctype="multipart/form-data" action="">
            <div class="row">
                <div class="form-group col-lg-6"><label for="senderEmail">Email</label><input type="text" class="form-control  input-sm" id="senderEmail" name="senderEmail" value=""></div>
                <div class="form-group col-lg-6"><label for="senderName">Sender Name</label><input type="text" class="form-control  input-sm" id="senderName" name="senderName" value=""></div>
            </div>
            <div class="row">
                <span class="form-group col-lg-6"><label for="attachment">Attachment <small>(Multiple Available)</small></label><input type="file" name="attachment[]" id="attachment[]" multiple></span>

                <div class="form-group col-lg-6"><label for="replyTo">Reply-to</label><input type="text" class="form-control  input-sm" id="replyTo" name="replyTo" value="" /></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12"><label for="subject">Subject</label><input type="text" class="form-control  input-sm" id="subject" name="subject" value="" /></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6"><label for="messageLetter">Message Letter</label><textarea name="messageLetter" id="messageLetter" class="form-control" rows="10"></textarea></div>
                <div class="form-group col-lg-6"><label for="emailList">Email List</label><textarea name="emailList" id="emailList" class="form-control" rows="10"></textarea></div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="messageType">Message Type</label>
                    HTML <input type="radio" name="messageType" id="messageType" value="1" checked>
                    Plain<input type="radio" name="messageType" id="messageType" value="2" >
                </div>
                <div class="form-group col-lg-3">
                    <label for="encode">Encode Type</label>
                    <select class="form-control input-sm" id="encode" name="encode">
                        <option value="UTF-8" selected>UTF-8 Encode</option>
                        <option value="UTF-8">ISO Encode</option>
                    </select>
                </div>
            </div> 
            <button type="submit" class="btn btn-default btn-sm" form="form" name="action" value="send">SEND</button>
   
        </form>
    </div>
    <div class="col-lg-6"><br>
        <label for="well">Instruction</label>
        <div id="well" class="well well">
            <h4>Server Information</h4>
            <ul>
                <li>ServerIP : <b>::1</b></li>

            </ul>
            <h4>HELP</h4>
            <ul>
                <li>[-email-] : <b>Reciver Email</b></li>
                <li>[-time-] : <b>Date and Time</b> (06/02/2018 09:31:35 pm)</li>
                <li>[-emailuser-] : <b>Email User</b> (emailuser@emaildomain)</li>
                <li>[-randomstring-] : <b>Random string (0-9,a-z)</b></li>
                <li>[-randomnumber-] : <b>Random number (0-9) </b></li>
                <li>[-randomletters-] : <b>Random Letters(a-z) </b></li>
                <li>[-randommd5-] : <b>Random MD5 </b></li>
            </ul>
            <h4>example</h4>
            Reciver Email = <b>user@domain.com</b><br>
            <ul>
                <li>hello <b>[-emailuser-]</b> -> hello <b>user</b></li>
                <li>your code is  <b>[-randommd5-]</b> -> your code is <b>e10adc3949ba59abbe56e057f20f883e</b></li>
            </ul>

            <h6>by <b><a href="http://leafmailer.pw/">leafmailer.pw</a></b></h6>
        </div>
    </div></body>