<!DOCTYPE html>
<html>
<head>
	<title>Editor de diagramas</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	{{-- <link rel="stylesheet" href="{{mix('css/app.css')}}"> --}}
	<link rel="stylesheet" href="{{ asset('css/miodiagrama.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('styles/grapheditor.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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

		<script type="text/javascript">
	    // Program starts here. Creates a sample graph in the
	    // DOM node with the specified ID. This function is invoked
	    // from the onLoad event handler of the document (see below).
	    function main(container) {
	        // Checks if the browser is supported
	        if (!mxClient.isBrowserSupported()) {
	            // Displays an error message if the browser is not supported.
	            mxUtils.error('Browser is not supported!', 200, false);
	        }
	        else {
	            // Disables the built-in context menu
	            mxEvent.disableContextMenu(container);
	            // Creates the graph inside the given container
	            var graph = new mxGraph(container);
	            // Enables rubberband selection
	            new mxRubberband(graph);
	            // Gets the default parent for inserting new cells. This
	            // is normally the first child of the root (ie. layer 0).
	            var parent = graph.getDefaultParent();
	            // Adds cells to the model in a single step
	            graph.getModel().beginUpdate();
	            try {
	                var v1 = graph.insertVertex(parent, null, 'Hello,', 20, 20, 80, 30);
	                var v2 = graph.insertVertex(parent, null, 'World!', 200, 150, 80, 30);
	                var e1 = graph.insertEdge(parent, null, '', v1, v2);
	            }
	            finally {
	                // Updates the display
	                graph.getModel().endUpdate();
	            }
	            // Exporting to SVG using EchoServlet
	            document.body.appendChild(mxUtils.button('Export SVG', function () {
	                var background = '#ffffff';
	                var scale = 1;
	                var border = 1;
	                var imgExport = new mxImageExport();
	                var bounds = graph.getGraphBounds();
	                var vs = graph.view.scale;
	                // Prepares SVG document that holds the output
	                var svgDoc = mxUtils.createXmlDocument();
	                var root = (svgDoc.createElementNS != null) ?
				    		svgDoc.createElementNS(mxConstants.NS_SVG, 'svg') : svgDoc.createElement('svg');
	                if (background != null) {
	                    if (root.style != null) {
	                        root.style.backgroundColor = background;
	                    }
	                    else {
	                        root.setAttribute('style', 'background-color:' + background);
	                    }
	                }
	                if (svgDoc.createElementNS == null) {
	                    root.setAttribute('xmlns', mxConstants.NS_SVG);
	                }
	                else {
	                    // KNOWN: Ignored in IE9-11, adds namespace for each image element instead. No workaround.
	                    root.setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:xlink', mxConstants.NS_XLINK);
	                }
	                root.setAttribute('width', (Math.ceil(bounds.width * scale / vs) + 2 * border) + 'px');
	                root.setAttribute('height', (Math.ceil(bounds.height * scale / vs) + 2 * border) + 'px');
	                root.setAttribute('version', '1.1');
	                // Adds group for anti-aliasing via transform
	                var group = (svgDoc.createElementNS != null) ?
							svgDoc.createElementNS(mxConstants.NS_SVG, 'g') : svgDoc.createElement('g');
	                group.setAttribute('transform', 'translate(0.5,0.5)');
	                root.appendChild(group);
	                svgDoc.appendChild(root);
	                // Renders graph. Offset will be multiplied with state's scale when painting state.
	                var svgCanvas = new mxSvgCanvas2D(group);
	                svgCanvas.translate(Math.floor((border / scale - bounds.x) / vs), Math.floor((border / scale - bounds.y) / vs));
	                svgCanvas.scale(scale / vs);
	                imgExport.drawState(graph.getView().getState(graph.model.root), svgCanvas);
	                var xml = encodeURIComponent(mxUtils.getXml(root));
	                new mxXmlRequest('/Echo.ashx', 'filename=export.svg&format=svg' +
							'&xml=' + xml).simulate(document, '_blank');
	            }));
	            function exportFile(format) {
	                var bg = '#ffffff';
	                var scale = 1;
	                var b = 1;
	                var imgExport = new mxImageExport();
	                var bounds = graph.getGraphBounds();
	                var vs = graph.view.scale;
	                // New image export
	                var xmlDoc = mxUtils.createXmlDocument();
	                var root = xmlDoc.createElement('output');
	                xmlDoc.appendChild(root);
	                // Renders graph. Offset will be multiplied with state's scale when painting state.
	                var xmlCanvas = new mxXmlCanvas2D(root);
	                xmlCanvas.translate(Math.floor((b / scale - bounds.x) / vs), Math.floor((b / scale - bounds.y) / vs));
	                xmlCanvas.scale(scale / vs);
	                imgExport.drawState(graph.getView().getState(graph.model.root), xmlCanvas);
	                // Puts request data together
	                var w = Math.ceil(bounds.width * scale / vs + 2 * b);
	                var h = Math.ceil(bounds.height * scale / vs + 2 * b);
	                var xml = mxUtils.getXml(root);
	                if (bg != null) {
	                    bg = '&bg=' + bg;
	                }
	                new mxXmlRequest('/Export', 'filename=export.' + format + '&format=' + format +
	        			bg + '&w=' + w + '&h=' + h + '&xml=' + encodeURIComponent(xml)).
	        			simulate(document, '_blank');
	            }
	            // Exporting to bitmap using ExportServlet
	            document.body.appendChild(mxUtils.button('Export PNG', function () {
	                exportFile('png');
	            }));
	        }
	    };
	</script>
</head>
<!-- Page passes the container for the graph to the program -->
<body onload="main(document.getElementById('graphContainer'))">

	<!-- Creates a container for the graph with a grid wallpaper -->
	<div id="graphContainer"
		style="position:relative;overflow:hidden;width:321px;height:241px;border:1px solid gray;cursor:default;">
	</div>
</body>
</html>