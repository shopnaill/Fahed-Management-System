<?php 
include 'connect.php';
 
$dashboard = true;
include 'check.php';
include 'app/header.php';

$posts = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
$posts->execute();
$posts = $posts->fetchAll();

function get_username($id) {
  global $con;
  $user = $con->prepare("SELECT username , photo FROM users WHERE id = ?");
  $user->execute(array($id));
  $user = $user->fetch();
  return $user;
}

?>

<style>
  .ql-container{
    height: 350px;
  }
  .card-footer {
    border: 1px solid #ccc;
    border-top: 0px;
    text-align: right;
}
.card-header {
    box-shadow: 3px 3px 5px #eee;
    border-radius: 2px;
    border: 1px solid #eee;
    padding: 9px;
    margin: 18px;
    margin-bottom: 5px;
}

.post-card 
{
    box-shadow: 3px 3px 5px #eee;
    border-radius: 2px;
    border: 1px solid #eee;
    padding: 9px;
    margin-bottom: 10px;
}
</style>

<div class="container" style=" margin-top: 83px; ">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
           <div class="row">
                <div class="col-md-12">
                    <?php include 'feed/new_post.php'; ?>
                </div>
                  <div class="col-md-12">
                    <?php foreach ($posts as $post)  { ?>
                    <?php include 'feed/post_card.php'; ?>
                    <?php } ?>
                  </div>
            </div>

        </div>
        <div class="col-md-2">
            </div>
    </div>
</div>


<?php 
include 'feed/delete.php';
include 'feed/edit.php';
include 'app/footer.php';


?>

 <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-image-resize-module@3.0.0/image-resize.min.js"></script>

<script>
 
  var quill = new Quill('#editor', {
            modules: {
               syntax: true,
               toolbar: '#toolbar',
               imageResize: {},
            },
             theme: 'snow'
  });

  var Updatequill = new Quill('#Updateeditor', {
            modules: {
               syntax: true,
               toolbar: '#Updatetoolbar',
               imageResize: {},
            },
             theme: 'snow'
  });

    // delete post

    $(document).on('click', '.btn-delete', function() {
      var post_id = $(this).attr('post_id');
      $('.post_id').val(post_id);
    });


    // edit post

    $(document).on('click', '.btn-edit', function() {
      var post_id = $(this).attr('post_id');
      $('.post_id').val(post_id);

      var post_content = $(this).parent().find('#post_content').val();
     
      const delta = Updatequill.clipboard.convert(post_content);
      Updatequill.setContents(delta, 'silent');
      
    });


     setInterval(() => {
      $('#content').val(quill.root.innerHTML);
      $('#Editcontent').val(Updatequill.root.innerHTML);
       }, 500);
</script>