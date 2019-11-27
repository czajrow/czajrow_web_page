<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2"
         style="background: #999; border-radius: 20px; text-align: center">
        <form style=" margin-top: 5%; margin-bottom: 5%" method="post" action="./?page=print_message" id="myForm">
            <label class="label-primary" for="topic">Topic:</label>
            <input type="text"
                   name="topic"
                   id="topic"
                   class="form-control"
                   required="required">
            <br>
            <label class="label-default" for="message">Message:</label>
            <textarea name="message"
                      id="message"
                      class="form-control"
                      required
            style="min-height: 100px"></textarea>
            <br>
            <div style="text-align: right">
                <button
                        class="btn btn-success"
                        type="submit">
                    Send
                </button>
            </div>
        </form>
    </div>
</div>
