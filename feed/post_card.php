<div class="card post-card  text-start">
  <img class="card-img-top" src="#" alt="">
  <div class="card-body">
      <textarea name="post_content" class="d-none" id="post_content" cols="30" rows="10">
        <?=$post['content']?>
      </textarea>
     <div class="card-head d-flex">
     <img width="20" height="20" src="<?=get_username($post['user_id'])['photo']?>" alt="profile">
    <h4 class="card-title">
    <?=get_username($post['user_id'])['username']?>
     </h4>
       </div>
    <div data-toggle="modal" post_id="<?=$post['id']?>" data-target="#deletePost" class="btn btn-delete btn-sm btn-danger">
       Delete
     </div>
     <div data-toggle="modal" post_id="<?=$post['id']?>" data-target="#editPost" class="btn btn-edit btn-sm btn-success">
       Edit
     </div>
     <hr>
     <div class="ql-editor">
      <?=$post['content']?>
     </div>
  </div>
</div>