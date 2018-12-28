<button class="chat-popup-button" onclick="openPopup()">Chat</button>

<div class="chat-popup-section" id="myForm">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closePopup()"><span aria-hidden="true">×</span></button>
    <form action="/action_page.php" class="chat-popup-form-container">
        <h1>Chat</h1>
        <div class="textarea-1"></div>
        <input type="text" class="chat-input" placeholder="Type Your Message" style="float: left;"/><button type="button" class="btn" style="float: right;">Send</button>
    </form>
</div>