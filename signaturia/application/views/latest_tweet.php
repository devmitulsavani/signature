<script type="text/javascript">
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var tweet_classes = document.getElementsByClassName("latest_tweet");
            var i;
            for (i = 0; i < tweet_classes.length; i++) {
                tweet_classes[i].innerHTML = this.responseText;
            }
        }
    };
    xmlhttp.open("GET", "<?php echo site_url('twitter/get_latest_tweet?id=' . base64_encode($this->session->userdata('htmlsig_user')['id'])) ?>", true);
    xmlhttp.send();
</script>