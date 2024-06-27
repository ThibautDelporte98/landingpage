<div class="col-12 col-lg-6">
    <div class="form-block">
        <form id="myForm">
            <div class="form-row flex-input-row">
                <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Naam">
                </div>
                <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" id="user_last_name" name="user_last_name"
                        placeholder="Achternaam">
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email">
            </div>
            <div class="form-row flex-input-row">
                <div class="form-group col-12 col-md-6">
                    <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="Telefoon">
                </div>
                <div class="form-group col-12 col-md-6 d-flex align-items-center">
                    <input type="checkbox" class="form-check-input" id="checkbox1" name="checkbox1">
                    <div class="checkbox-text">Ik ga akkoord met het privacy beleid.</div>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="user_message" name="user_message" rows="4"
                    placeholder="Waar kunnen wij u een handje mee helpen?"></textarea>
            </div>
            <div class="form-button">
                <button type="submit" class="Btn Btn-submit">Submit</button>
            </div>
            <div id="loading" style="display: none;">
                <div class="loaderPosition">
                    <div class="loaderDescription">Verzenden...</div>
                    <div class="lds-ripple">
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div id="successPopup" class="popup">
                <div class="popup-content">
                    <span class="close" id="closeSuccessPopup">&times;</span>
                    <div class="popup-message ">
                        <img src="<?php bloginfo('template_url'); ?>../assets/images/check-mark.png" alt="" />
                        <p>Uw bericht is succesvol verzonden!</p>
                    </div>
                </div>
            </div>
            <div id="errorPopup" class="popup">
                <div class="popup-content">
                    <span class="close" id="closeErrorPopup">&times;</span>                    
                    <div class="popup-message ">
                        <img src="<?php bloginfo('template_url'); ?>../assets/images/close.png" alt="" />
                        <p>Oeps! Er is een fout opgetreden, probeer het opnieuw.</p>                    
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>