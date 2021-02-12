<script src="tinymce/tinymce.min.js"></script>
<script>
	function RoxyFileBrowser(field_name, url, type, win) {
		var roxyFileman = 'fileman/index.php';
		if (roxyFileman.indexOf("?") < 0) {     
			roxyFileman += "?type=" + type;   
		}
		else {
			roxyFileman += "&type=" + type;
		}
		roxyFileman += '&input=' + field_name + '&value=' + win.document.getElementById(field_name).value;
		if(tinyMCE.activeEditor.settings.language){
			roxyFileman += '&langCode=' + tinyMCE.activeEditor.settings.language;
		}
		tinyMCE.activeEditor.windowManager.open({
			 file: roxyFileman,
			 title: 'File Manager',
			 width: 850, 
			 height: 650,
			 resizable: "yes",
			 plugins: "media",
			 inline: "yes",
			 close_previous: "no"  
		}, {     window: win,     input: field_name    });
		return false; 
	}
	tinymce.init({ 
		selector:'textarea',
		
		  height: 500,
		  theme: 'modern',
		  valid_elements : '*[*]',
		  plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
		  ],
		
		  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code | link image',
		  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample | fullscreen',
		  image_advtab: true,
		  templates: [
			{ title: 'Test template 1', content: 'Test 1' },
			{ title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
			'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			'//www.tinymce.com/css/codepen.min.css'
		  ],
			media_strict: false,
			file_picker_types: 'image',
			file_browser_callback: RoxyFileBrowser,
			paste_remove_spans : true,
			paste_convert_headers_to_strong: true,
			paste_remove_styles: true,
			paste_text_linebreaktype: true,
			paste_strip_class_attributes: "all",
			paste_retain_style_properties: "all",
			paste_auto_cleanup_on_paste: true,
			image_caption: true,
			image_dimensions: false,
			image_advtab: true,
			importcss_append: true,
			
    importcss_groups: [
        {title: "Table styles", filter: /^(td|tr|table)\./},
        {title: "Block styles", filter: /^(div|p|ul|ol|h1|h2|h3|h4|h5|h6)\./},
        {title: "Image styles", filter: /^(img)\./},
        {title: "Other styles"}
    ],
    style_formats: [
        {title: "Headers", items: [
            {title: "Header 1", format: "h1"},
            {title: "Header 2", format: "h2"},
            {title: "Header 3", format: "h3"},
            {title: "Header 4", format: "h4"},
            {title: "Header 5", format: "h5"},
            {title: "Header 6", format: "h6"}
        ]},
        {title: "Inline", items: [
			{title : 'Span', inline : 'span', styles : {color : '#9A6F46'}},
            {title: "Bold", icon: "bold", format: "bold"},
            {title: "Italic", icon: "italic", format: "italic"},
            {title: "Underline", icon: "underline", format: "underline"},
            {title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
            {title: "Superscript", icon: "superscript", format: "superscript"},
            {title: "Subscript", icon: "subscript", format: "subscript"},
            {title: "Code", icon: "code", format: "code"}
        ]},
        {title: "Blocks", items: [
            {title: "Paragraph", format: "p"},
            {title: "Div", format: "div"},
            {title: "Blockquote", format: "blockquote"},
            {title: "Pre", format: "pre"}
        ]},
        {title: "Alignment", items: [
            {title: "Left", icon: "alignleft", format: "alignleft"},
            {title: "Center", icon: "aligncenter", format: "aligncenter"},
            {title: "Right", icon: "alignright", format: "alignright"},
            {title: "Justify", icon: "alignjustify", format: "alignjustify"}
        ]}
    ],
    image_class_list: [
        {title: 'full-screen', value: 'full_screen'},
        {title: 'left', value: 'left_img'},
        {title: 'right', value: 'right_img'},
    ],
    media_class_list: [
        {title: 'full-screen', value: 'full_screen'},
        {title: 'left', value: 'left_img'},
        {title: 'right', value: 'right_img'},
    ],
			paste_preprocess : function(pl, o) {
				// Content string containing the HTML from the clipboard
				//alert(o.content);
				//o.content = o.content;
			},
			paste_postprocess : function(pl, o) {
				// Content DOM node containing the DOM structure of the clipboard
				//alert(o.node.innerHTML);
				//o.node.innerHTML = o.node.textContent || o.node.innerText || "";
				//o.node.innerHTML = o.node;
			}
	 });
</script>