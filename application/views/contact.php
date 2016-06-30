<div class="container-fluid" id="contact">
    <div class="row">
        <div class="col-lg-7 padding">
            <img class="responsive" id="ImageHeartbeat" src="img/weather.jpg">
        </div>
        <div class="col-lg-3 col-lg-offset-1">
            <form method="POST" id="centerForm" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="heigth">
                    <div class="verticalcenter">
                        <ul>
                            <li>
                                <p class="Text"> Do you have anymore quistions you can contact us with the mail. you can fill in the form beneath this and send us a mail by clicking on the submit button </p>
                            </li>
                            <li>
                                <label> Name: </label>
                                <br>
                                <input type="text" name="name" />
                            </li>
                            <li>
                                <label class="form-label"> Email: </label>
                                <br>
                                <input type="email" name="email" />
                            </li>
                            <li>
                                <label class="form-label"> Title: </label>
                                <br>
                                <input type="text" name="title" />
                            </li>
                            <li>
                                <label class="form-label"> Message: </label>
                                <br>
                                <textarea type="text" name="message"></textarea>
                            </li>
                            <li>
                                <button type="submit" class="button" name="submit"> Submit </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
