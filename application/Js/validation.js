<script>
    function ConfirmAccept()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x){
            window.location='site_url("/home/accept_ctrl/$row->news_id")';
        }

      else{
        return false;}
    }
</script>    


    // window.location='site_url("/home/accept_ctrl/$row->news_id")';}



