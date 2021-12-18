<div class="card">
            <div class="card-header">
                 <?=$_SESSION['username']?>
            </div>
            <div class="card-body">
            
            <div id="toolbar">
            <span class="ql-formats">
              <select class="ql-font"></select>
              <select class="ql-size"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-bold"></button>
              <button class="ql-italic"></button>
              <button class="ql-underline"></button>
              <button class="ql-strike"></button>
            </span>
            <span class="ql-formats">
              <select class="ql-color"></select>
              <select class="ql-background"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-script" value="sub"></button>
              <button class="ql-script" value="super"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-header" value="1"></button>
              <button class="ql-header" value="2"></button>
              <button class="ql-blockquote"></button>
              <button class="ql-code-block"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-list" value="ordered"></button>
              <button class="ql-list" value="bullet"></button>
              <button class="ql-indent" value="-1"></button>
              <button class="ql-indent" value="+1"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-direction" value="rtl"></button>
              <select class="ql-align"></select>
            </span>
            <span class="ql-formats">
              <button class="ql-link"></button>
              <button class="ql-image"></button>
              <button class="ql-video"></button>
              <button class="ql-formula"></button>
            </span>
            <span class="ql-formats">
              <button class="ql-clean"></button>
            </span>
          </div>
        <form action="actions/NewPost.php" method="post">
              <div id="editor"></div>
                <input type="hidden" name="content" id="content">
              <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Share</button>
              </div>
         </form>
            </div>
    </div>