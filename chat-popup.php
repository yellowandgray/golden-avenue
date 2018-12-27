<button class="chat-popup-button" onclick="openPopup()">Chat</button>

<div class="chat-popup-section" id="myForm">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closePopup()"><span aria-hidden="true">×</span></button>
    <form action="/action_page.php" class="chat-popup-form-container">
        <h1>Chat</h1>
        <textarea placeholder="Type message.." name="msg" required></textarea>
        <button type="submit" class="btn">Send</button>
    </form>
</div>