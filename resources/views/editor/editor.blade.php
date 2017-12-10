<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Editor de diagramas</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{mix('css/app.css')}}">
	<link rel="stylesheet" href="{{ asset('css/mio.css') }}">
	<link rel="icon" href="{{ asset('img/ico32x32.ico') }}" type="image/ico" sizes="32x32">
	<link rel="stylesheet" href="{{ asset('css/miodiagrama.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/grapheditor.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript">
		// Parses URL parameters. Supported parameters are:
		// - lang=xy: Specifies the language of the user interface.
		// - touch=1: Enables a touch-style user interface.
		// - storage=local: Enables HTML5 local storage.
		// - chrome=0: Chromeless mode.
		var urlParams = (function(url)
		{
			var result = new Object();
			var idx = url.lastIndexOf('?');
	
			if (idx > 0)
			{
				var params = url.substring(idx + 1).split('&');
				
				for (var i = 0; i < params.length; i++)
				{
					idx = params[i].indexOf('=');
					
					if (idx > 0)
					{
						result[params[i].substring(0, idx)] = params[i].substring(idx + 1);
					}
				}
			}
			
			return result;
		})(window.location.href);
	
		// Default resources are included in grapheditor resources
		mxLoadResources = false;
	</script>
	<script type="text/javascript" src="{{asset('js/js/Init.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jscolor/jscolor.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/sanitizer/sanitizer.min.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/src/js/mxClient.js') }}"></script>
	<script type="text/javascript" src="{{asset('js/js/EditorUi.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Editor.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Sidebar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Graph.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Shapes.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Actions.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Menus.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Format.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Toolbar.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/Dialogs.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/js/jquery-3.2.1.min.js')}}"></script>
	<script src='{{mix("js/app.js")}}'></script>
	<script type="text/javascript" src="{{ asset('js/mio.js') }}"></script>
</head>
<body>
	@include('editor.navdiagrama')
	<div class="geEditor" id="editorGeneral">


	<script type="text/javascript">
		var editor, mxeditor;
		// Extends EditorUi to update I/O action states based on availability of backend
		(function main (container)
		{
			var editorUiInit = EditorUi.prototype.init;
			var model = new mxGraphModel();
			var graph = new mxGraph(container, model);
			
			EditorUi.prototype.init = function()
			{
				editorUiInit.apply(this, arguments);
				this.actions.get('export').setEnabled(false);

				// Updates action states which require a backend
				if (!Editor.useLocalStorage)
				{
					mxUtils.post(OPEN_URL, '', mxUtils.bind(this, function(req)
					{
						var enabled = req.getStatus() != 404;
						this.actions.get('open').setEnabled(enabled || Graph.fileSupport);
						this.actions.get('import').setEnabled(enabled || Graph.fileSupport);
						this.actions.get('save').setEnabled(enabled || Graph.fileSupport);
						this.actions.get('saveAs').setEnabled(enabled || Graph.fileSupport);
						this.actions.get('export').setEnabled(enabled || Graph.fileSupport);
					}));
				}
			};
			
			// Adds required resources (disables loading of fallback properties, this can only
			// be used if we know that all keys are defined in the language specific file)
			mxResources.loadDefaultBundle = false;
			var bundle = mxResources.getDefaultBundle(RESOURCE_BASE, mxLanguage) ||
				mxResources.getSpecialBundle(RESOURCE_BASE, mxLanguage);

			// Fixes possible asynchronous requests
			mxUtils.getAll([bundle, STYLE_PATH + '/default.xml'], function(xhr)
			{
				// Adds bundle text to resources
				mxResources.parse(xhr[0].getText());
				
				// Configures the default graph theme
				var themes = new Object();
				themes[Graph.prototype.defaultThemeName] = xhr[1].getDocumentElement(); 
				editor = new Editor(urlParams['chrome'] == '0', themes);
				
				// Main
				new EditorUi(editor);
				// editor.getGraphXml()
			}, function()
			{
				document.body.innerHTML = '<center style="margin-top:10%;">Error cargando los archivos. Please check browser console.</center>';
			});

		})();


$(document).ready(() => {

	@if (isset($_GET['edit']))
		editor.setGraphXml((mxUtils.load('diagramasXml/{{$_GET['name']}}ja.xml')).getDocumentElement())
		setTimeout( () => {
			$.post('{{ url('dlteAux') }}', {'filename': '{{$_GET['name']}}ja.xml','_token': '{{csrf_token()}}'})
		}, 5000);
		
	@endif

	editor.graph.setAllowLoops(false)
	editor.graph.addListener(mxEvent.CELLS_ADDED, (sender, evt) => {
		if (evt.properties.cells["0"].children != null ){
			if ( (evt.properties.cells["0"].children).length==0) {
				// console.log('individual');
			}else{
				if (evt.properties.cells["0"].children["0"].children!= null ) {
					// console.log('agrupaci');
					evt.properties.cells["0"].setConnectable(false);
				}else{
					if ((evt.properties.cells["0"].children).length<2)
						console.log('individi');
					else
						evt.properties.cells["0"].setConnectable(false);
						console.log('agrupacion');	
				}
			}
		}else{
			// console.log('flecha') 
		}
	});
});	

function XMLToString(oXML)
{
 //code for IE
 if (window.ActiveXObject) {
 var oString = oXML.xml; return oString;
 } 
 // code for Chrome, Safari, Firefox, Opera, etc.
 else {
 return (new XMLSerializer()).serializeToString(oXML);
 }
 }


/**
 * Adds the label menu items to the given menu and parent.
 */
EditorUi.prototype.saveFile = function(forceDialog)
{

	if (!forceDialog && this.editor.filename != null)
	{
		
		let nombre = this.editor.getOrCreateFilename();
		let diagrama = XMLToString(editor.getGraphXml());
		let enc = new mxCodec(mxUtils.createXmlDocument());
		let node = enc.encode(editor.graph.view);
		let xml = mxUtils.getXml(node);

		$.ajax({
			url: '{{ url('api/saveDiagram') }}',
			type: 'POST',
			data: { 
					acc: 'new',
					nombre, 
					diagrama,
					userid : '{{Auth::user()->id}}',
					tipo: 0,
					xml,
					"_token": "{{ csrf_token() }}",
					},
		})
		.done( () => {
			console.log("success");
		});


		this.save(this.editor.getOrCreateFilename());
	}
	else
	{

		var dlg = new FilenameDialog(this, this.editor.getOrCreateFilename(), mxResources.get('save'), mxUtils.bind(this, function(name)
		{

		let nombre = name;
		let diagrama = XMLToString(editor.getGraphXml());
		let enc = new mxCodec(mxUtils.createXmlDocument());
		let node = enc.encode(editor.graph.view);
		let xml = mxUtils.getXml(node);
		
		$.ajax({
			url: '{{ url('api/saveDiagram') }}',
			type: 'POST',
			data: { 
					acc: 'edit',
					userid : '{{Auth::user()->id}}',
					nombre, 
					diagrama,
					tipo: 0,
					xml,
					"_token": "{{ csrf_token() }}",
					},
		})
		.done(() => {
			console.log("success");
		});


		this.save(name);


		}), null, mxUtils.bind(this, function(name)
		{
			if (name != null && name.length > 0)
			{
				return true;
			}
			
			mxUtils.confirm(mxResources.get('invalidName'));
			
			return false;
		}));
		this.showDialog(dlg.container, 300, 100, true, true);
		dlg.init();
	}
};

		</script>
	</div>
</body>
</html>