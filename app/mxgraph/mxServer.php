<?php
/**
 * Copyright (c) 2006, Gaudenz Alder
 *
 * Class: mxServer
 *
 * Bootstrapping for the PHP backend. This is version 3.7.5
 * of mxGraph.
 *
 * Variable: MXGRAPH-VERSION
 *
 * Constant that holds the current mxGraph version. The current version
 * is 3.7.5.
 */
define("MXGRAPH-VERSION", "3.7.5");

// Disables external entities in XML
libxml_disable_entity_loader(true);

include_once(app_path() . "/mxgraph/util/mxLog.php");
include_once(app_path() . "/mxgraph/util/mxConstants.php");
include_once(app_path() . "/mxgraph/util/mxUtils.php");
include_once(app_path() . "/mxgraph/util/mxPoint.php");
include_once(app_path() . "/mxgraph/util/mxRectangle.php");
include_once(app_path() . "/mxgraph/util/mxEvent.php");
include_once(app_path() . "/mxgraph/util/mxEventObject.php");
include_once(app_path() . "/mxgraph/util/mxEventSource.php");
include_once(app_path() . "/mxgraph/util/mxImageBundle.php");
include_once(app_path() . "/mxgraph/model/mxCell.php");
include_once(app_path() . "/mxgraph/model/mxCellPath.php");
include_once(app_path() . "/mxgraph/model/mxGeometry.php");
include_once(app_path() . "/mxgraph/model/mxGraphModel.php");


include_once(app_path() . "/mxgraph/canvas/mxGdCanvas.php");
include_once(app_path() . "/mxgraph/canvas/mxHtmlCanvas.php");
include_once(app_path() . "/mxgraph/reader/mxGraphViewImageReader.php");
include_once(app_path() . "/mxgraph/reader/mxGraphViewHtmlReader.php");
include_once(app_path() . "/mxgraph/view/mxCellState.php");
include_once(app_path() . "/mxgraph/view/mxConnectionConstraint.php");
include_once(app_path() . "/mxgraph/view/mxStylesheet.php");
include_once(app_path() . "/mxgraph/view/mxPerimeter.php");
include_once(app_path() . "/mxgraph/view/mxEdgeStyle.php");
include_once(app_path() . "/mxgraph/view/mxStyleRegistry.php");
include_once(app_path() . "/mxgraph/view/mxGraphView.php");
include_once(app_path() . "/mxgraph/view/mxGraph.php");
include_once(app_path() . "/mxgraph/io/mxCodecRegistry.php");
include_once(app_path() . "/mxgraph/io/mxCodec.php");
include_once(app_path() . "/mxgraph/io/mxObjectCodec.php");
include_once(app_path() . "/mxgraph/io/mxCellCodec.php");
include_once(app_path() . "/mxgraph/io/mxModelCodec.php");
include_once(app_path() . "/mxgraph/io/mxStylesheetCodec.php");


// dd('?');
?>
