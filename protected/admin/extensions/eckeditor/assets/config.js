CKEDITOR.editorConfig = function(config) {
// ...
   config.filebrowserBrowseUrl = '/deals_supermarket/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/deals_supermarket/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/deals_supermarket/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '/deals_supermarket/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/deals_supermarket/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/deals_supermarket/kcfinder/upload.php?opener=ckeditor&type=flash';
// ...
},
CKEDITOR.config.toolbar = [
  

   ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','PasteText','PasteFromWord','Find','Replace','-','Outdent','Indent','-','Print'],
  
   ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock',,'Source'],
   ['Image','Table','-','Link','TextColor','BGColor'],
    ['Styles','Format','Font','FontSize'],
] ;