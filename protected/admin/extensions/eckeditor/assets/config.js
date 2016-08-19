CKEDITOR.editorConfig = function(config) {
// ...
   config.filebrowserBrowseUrl = '/dealssupermarket/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = '/dealssupermarket/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = '/dealssupermarket/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = '/dealssupermarket/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = '/dealssupermarket/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = '/dealssupermarket/kcfinder/upload.php?opener=ckeditor&type=flash';
// ...
},
CKEDITOR.config.toolbar = [
  

   ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','PasteText','PasteFromWord','Find','Replace','-','Outdent','Indent','-','Print'],
  
   ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock',,'Source'],
   ['Image','Table','-','Link','TextColor','BGColor'],
    ['Styles','Format','Font','FontSize'],
] ;