<!-- Modal -->
<div class="modal fade" id="deletePost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Post</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="./actions/delete_post.php" method="post">
      <div class="modal-body">
              <input type="hidden" value="" class="post_id" name="post_id">

        <p>Are you sure you want to delete this post?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>