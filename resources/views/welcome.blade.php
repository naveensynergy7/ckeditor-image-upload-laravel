<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <form action="/upload" method="post">
            <textarea name="text" id="description" cols="100"></textarea>
        </form>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

       <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
        <script>
    //         ClassicEditor
    //             .create(document.querySelector('#description'),
    //  {           toolbar = [
	// 	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
	// 	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
	// 	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
	// 	{ name: 'forms', groups: [ 'forms' ] },
	// 	'/',
	// 	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
	// 	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
	// 	{ name: 'links', groups: [ 'links' ] },
	// 	{ name: 'insert', groups: [ 'insert' ] },
	// 	'/',
	// 	{ name: 'styles', groups: [ 'styles' ] },
	// 	{ name: 'colors', groups: [ 'colors' ] },
	// 	{ name: 'tools', groups: [ 'tools' ] },
	// 	{ name: 'others', groups: [ 'others' ] },
	// 	{ name: 'about', groups: [ 'about' ] }
	// ]})
    ClassicEditor
    .create( document.querySelector( '#description' ), {toolbar : [
		  'Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates' 
		, 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ,'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt', 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ,'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language','Link', 'Unlink', 'Anchor','Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe','Styles', 'Format', 'Font', 'FontSize' ,'TextColor', 'BGColor','Maximize', 'ShowBlocks','About' ] })
    .catch( error => {
        console.log( error );
    } );
                
        </script>

    </body>
</html>
