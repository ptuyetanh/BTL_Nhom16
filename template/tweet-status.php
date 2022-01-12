<!-- tweet-status  -->
<div class="tweet-status">
    <!-- status  -->
    <div class="card mb-3 status border-0" style="max-width: 700px;">
        <div class="row">
            <div class="col-md-2">
                <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
            </div>
            <div class="col-md-10 mb-5">
                <form action="process-tweet.php" method="post" enctype="multipart/form-data">
                    <textarea name="content_status" placeholder="Bạn đang nghĩ gì?"
                        aria-label="Bạn đang nghĩ gì" id="content_status" autofocus></textarea>
                    <div id="tweet_post">
                        <div class="container-fluid row mt-5">
                            <div class="col-md-9">
                                <label for="fileimage">
                                    <span class="material-icons text-primary me-2 ">
                                        image</span>
                                </label>
                                <span class="material-icons fs-4,5 text-primary me-2">
                                    gif_box
                                </span>
                                <span class="material-icons fs-4,5 text-primary me-2">
                                    sentiment_satisfied
                                </span>
                                <span class="material-icons fs-4,5 text-primary me-2">
                                    align_horizontal_left
                                </span>
                                <span class="material-icons fs-4,5 text-primary me-2">
                                    event_available
                                </span>
                                <span class="material-icons fs-4,5 text-primary me-2">
                                    location_on
                                </span>
                            </div>
                            <div class="col-md-3 bg-light">
                                <input type="file" name="myFile" id="fileimage" style="position: absolute;width:0;height:0;right:0;left:108px;opacity: 0;">
                                <input class="bg-primary" type="submit" id="submit-tweet-button"
                                    value="Tweet" role="button">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>