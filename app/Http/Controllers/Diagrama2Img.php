<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diagrama;
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */

/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxConstants
{

	/**
	 * Class: mxConstants
	 *
	 * Defines global constants.
	 * 
	 * Variable: RAD_PER_DEG
	 *
	 * Defines the number of radiants per degree.
	 */
	public static $RAD_PER_DEG = 0.0174532;

	/**
	 * Variable: DEG_PER_RAD
	 *
	 * Defines the number of degrees per radiant.
	 */
	public static $DEG_PER_RAD = 57.2957795;

	/**
	 * Variable: ACTIVE_REGION
	 *
	 * Defines the portion of the cell which is
	 * to be used as a connectable region.
	 */
	public static $ACTIVE_REGION = 0.3;

	/**
	 * Variable: MIN_ACTIVE_REGION
	 *
	 * Defines the minimum size in pixels of the 
	 * portion of the cell cell which is to be 
	 * used as a connectable region.
	 */
	public static $MIN_ACTIVE_REGION = 8;

	/**
	 * Variable: NS_SVG
	 *
	 * Defines the SVG namespace.
	 */
	public static $NS_SVG = "http://www.w3.org/2000/svg";

	/**
	 * Variable: NS_XHTML
	 *
	 * Defines the XHTML namespace.
	 */
	public static $NS_XHTML = "http://www.w3.org/1999/xhtml";

	/**
	 * Variable: NS_XLINK
	 *
	 * Defined the XLink namespace.
	 */
	public static $NS_XLINK = "http://www.w3.org/1999/xlink";

	/**
	 * Variable: W3C_SHADOWCOLOR
	 *
	 * Defines the color to be used to draw
	 * shadows in DOM documents.
	 */
	public static $W3C_SHADOWCOLOR = "gray";

	/**
	 * Variable: SHADOW_OFFSETX
	 *
	 * Defines the x-offset to be used for shadows. Default is 2.
	 */
	public static $SHADOW_OFFSETX = 2;

	/**
	 * Variable: SHADOW_OFFSETY
	 *
	 * Defines the y-offset to be used for shadows. Default is 3.
	 */
	public static $SHADOW_OFFSETY = 3;

	/**
	 * Variable: W3C_DEFAULT_FONTFAMILY
	 * 
	 * Defines the default family for HTML markup. Default is times, serif.
	 */
	public static $W3C_DEFAULT_FONTFAMILY = "times, serif";

	/**
	 * Variable: TTF_ENABLED
	 * 
	 * Whether TrueType fonts should be enabled in the mxGdCanvas
	 * by default. Default is true.
	 */
	public static $TTF_ENABLED = true;

	/**
	 * Variable: TTF_SIZEFACTOR
	 * 
	 * Defines the factor which wich the font sizes are to be
	 * multiplied when used in truetype fonts. Default is 0.66.
	 */
	public static $TTF_SIZEFACTOR = 0.66;

	/**
	 * Variable: DEFAULT_FONTFAMILY
	 * 
	 * Defines the default family for all truetype fonts. Default is vera.
	 */
	public static $DEFAULT_FONTFAMILY = "vera";

	/**
	 * Variable: DEFAULT_FONTSIZE
	 * 
	 * Defines the default size (in px). Default is 11.
	 */
	public static $DEFAULT_FONTSIZE = 11;

	/**
	 * Variable: DEFAULT_STARTSIZE
	 * 
	 * Defines the default start size for swimlanes. Default is 40.
	 */
	public static $DEFAULT_STARTSIZE = 40;
	
	/**
	 * Variable: DEFAULT_LINESPACING
	 * 
	 * Defines the default linespacing. Default is 7.
	 */
	public static $DEFAULT_LINESPACING = 7;

	/**
	 * Variable: LABEL_INSET
	 * 
	 * Defines the inset in absolute pixels between the label bounding box and
	 * the label text. Default is 3.
	 */
	public static $LABEL_INSET = 3;

	/**
	 * Variable: DEFAULT_MARKERSIZE
	 * 
	 * Defines the default size for all markers. Default is 6.
	 */
	public static $DEFAULT_MARKERSIZE = 6;

	/**
	 * Variable: DEFAULT_IMAGESIZE
	 * 
	 * Defines the default width and height for images used in the
	 * label shape. Default is 24.
	 */
	public static $DEFAULT_IMAGESIZE = 24;

	/**
	 * Variable: ENTITY_SEGMENT
	 * 
	 * Defines the length of the horizontal segment of an Entity Relation.
	 * This can be overridden using <mxConstants.STYLE_SEGMENT> style.
	 * Default is 30.
	 */
	public static $ENTITY_SEGMENT = 30;

	/**
	 * Variable: ARROW_SPACING
	 * 
	 * Defines the spacing between the arrow shape and its terminals. Default
	 * is 10.
	 */
	public static $ARROW_SPACING = 10;

	/**
	 * Variable: ARROW_WIDTH
	 * 
	 * Defines the width of the arrow shape. Default is 30.
	 */
	public static $ARROW_WIDTH = 30;

	/**
	 * Variable: ARROW_SIZE
	 * 
	 * Defines the size of the arrowhead in the arrow shape. Default is 30.
	 */
	public static $ARROW_SIZE = 30;

	/**
	 * Variable: NONE
	 * 
	 * Defines the value for none. Default is "none".
	 */
	public static $NONE = "none";

	/**
	 * Variable: STYLE_PERIMETER
	 *
	 * Defines the key for the perimeter style. This is a function that defines
	 * the perimeter around a particular shape. Possible values are the
	 * functions defined in <mxPerimeter>. Alternatively, the constants in this
	 * class that start with <code>PERIMETER_</code> may be used to access
	 * perimeter styles in <mxStyleRegistry>.
	 */
	public static $STYLE_PERIMETER = "perimeter";
	
	/**
	 * Defines the ID of the cell that should be used for computing the
	 * perimeter point of the source for an edge. This allows for graphically
	 * connecting to a cell while keeping the actual terminal of the edge.
	 */
	public static $STYLE_SOURCE_PORT = "sourcePort";
	
	/**
	 * Defines the ID of the cell that should be used for computing the
	 * perimeter point of the target for an edge. This allows for graphically
	 * connecting to a cell while keeping the actual terminal of the edge.
	 */
	public static $STYLE_TARGET_PORT = "targetPort";
	
	/**
	 * Variable: STYLE_OPACITY
	 *
	 * Defines the key for the opacity style. The type of the value is 
	 * numeric and the possible range is 0-100.
	 */
	public static $STYLE_OPACITY = "opacity";

	/**
	 * Variable: STYLE_TEXT_OPACITY
	 *
	 * Defines the key for the text opacity style. The type of the value is 
	 * numeric and the possible range is 0-100.
	 */
	public static $STYLE_TEXT_OPACITY = "textOpacity";

	/**
	 * Variable: STYLE_OVERFLOW
	 * 
	 * Defines the key for the overflow style. Possible values are "visible",
	 * "hidden" and "fill". The default value is "visible". This value
	 * specifies how overlapping vertex labels are handles. A value of
	 * "visible" will show the complete label. A value of "hidden" will clip
	 * the label so that it does not overlap the vertex bounds. A value of
	 * "fill" will use the vertex bounds for the label.
	 * 
	 * This style is ignored in PHP.
	 */
	public static $STYLE_OVERFLOW = "overflow";

    /**
	 * Variable: STYLE_ORTHOGONAL
	 *
	 * Defines if the connection points on either end of the edge should be
	 * computed so that the edge is vertical or horizontal if possible and
	 * if the point is not at a fixed location. Default is false. This is
	 * used in <mxGraph.isOrthogonal>, which also returns true if the edgeStyle
	 * of the edge is an elbow or entity.
	 */
    public static $STYLE_ORTHOGONAL = "orthogonal";

    /**
	 * Variable: STYLE_EXIT_X
	 *
	 * Defines the key for the horizontal relative coordinate connection point
	 * of an edge with its source terminal.
	 */
    public static $STYLE_EXIT_X = "exitX";

    /**
	 * Variable: STYLE_EXIT_Y
	 *
	 * Defines the key for the vertical relative coordinate connection point
	 * of an edge with its source terminal.
	 */
    public static $STYLE_EXIT_Y = "exitY";

    /**
	 * Variable: STYLE_EXIT_PERIMETER
	 *
	 * Defines if the perimeter should be used to find the exact entry point
	 * along the perimeter of the source. Possible values are 0 (false) and
	 * 1 (true). Default is 1 (true).
	 */
    public static $STYLE_EXIT_PERIMETER = "exitPerimeter";

    /**
	 * Variable: STYLE_ENTRY_X
	 *
	 * Defines the key for the horizontal relative coordinate connection point
	 * of an edge with its target terminal.
	 */
    public static $STYLE_ENTRY_X = "entryX";

    /**
	 * Variable: STYLE_ENTRY_Y
	 *
	 * Defines the key for the vertical relative coordinate connection point
	 * of an edge with its target terminal.
	 */
    public static $STYLE_ENTRY_Y = "entryY";

    /**
	 * Variable: sSTYLE_ENTRY_PERIMETER
	 *
	 * Defines if the perimeter should be used to find the exact entry point
	 * along the perimeter of the target. Possible values are 0 (false) and
	 * 1 (true). Default is 1 (true).
	 */
    public static $STYLE_ENTRY_PERIMETER = "entryPerimeter";
	
	/**
	 * Variable: STYLE_WHITE_SPACE
	 * 
	 * Defines the key for the white-space style. Possible values are "nowrap"
	 * and "wrap". The default value is "nowrap". This value specifies how
	 * white-space inside a HTML vertex label should be handled. A value of
	 * "nowrap" means the text will never wrap to the next line until a
	 * linefeed is encountered. A value of "wrap" means text will wrap when
	 * necessary. This style is only used for HTML labels.
	 * 
	 * This style is ignored in PHP.
	 */
	public static $STYLE_WHITE_SPACE = "whiteSpace";
	
	/**
	 * Variable: STYLE_ROTATION
	 *
	 * Defines the key for the rotation style. The type of the value is 
	 * numeric and the possible range is 0-360.
	 */
	public static $STYLE_ROTATION = "rotation";

	/**
	 * Variable: STYLE_FILLCOLOR
	 *
	 * Defines the key for the fill color. Possible values are all HTML color
	 * names or HEX codes, as well as special keywords such as 'swimlane,
	 * 'inherit' or 'indicated' to use the color code of a related cell or the
	 * indicator shape.
	 */
	public static $STYLE_FILLCOLOR = "fillColor";
	
	/**
	 * Variable: STYLE_SWIMLANE_FILLCOLOR
	 *
	 * Defines the key for the fill color of the swimlane background. Possible
	 * values are all HTML color names or HEX codes. Default is no background.
	 * Value is "swimlaneFillColor".
	 */
	public static $STYLE_SWIMLANE_FILLCOLOR = "swimlaneFillColor";

	/**
	 * Variable: STYLE_GRADIENTCOLOR
	 *
	 * Defines the key for the gradient color. Possible values are all HTML color
	 * names or HEX codes, as well as special keywords such as 'swimlane,
	 * 'inherit' or 'indicated' to use the color code of a related cell or the
	 * indicator shape. This is ignored if no fill color is defined.
	 */
	public static $STYLE_GRADIENTCOLOR = "gradientColor";

	/**
	 * Variable: STYLE_GRADIENT_DIRECTION
	 * 
	 * Defines the key for the gradient direction. Possible values are
	 * <DIRECTION_EAST>, <DIRECTION_WEST>, <DIRECTION_NORTH> and
	 * <DIRECTION_SOUTH>. Default is <DIRECTION_SOUTH>. Generally, and by
	 * default in mxGraph, gradient painting is done from the value of
	 * <STYLE_FILLCOLOR> to the value of <STYLE_GRADIENTCOLOR>. Taking the
	 * example of <DIRECTION_NORTH>, this means <STYLE_FILLCOLOR> color at the 
	 * bottom of paint pattern and <STYLE_GRADIENTCOLOR> at top, with a
	 * gradient in-between.
	 */
	public static $STYLE_GRADIENT_DIRECTION = "gradientDirection";
	
	/**
	 * Variable: STYLE_STROKECOLOR
	 *
	 * Defines the key for the strokeColor style. Possible values are all HTML
	 * color names or HEX codes, as well as special keywords such as 'swimlane,
	 * 'inherit' or 'indicated' to use the color code of a related cell or the
	 * indicator shape.
	 */
	public static $STYLE_STROKECOLOR = "strokeColor";

	/**
	 * Variable: STYLE_SEPARATORCOLOR
	 *
	 * Defines the key for the separatorColor style. Possible values are all
	 * HTML color names or HEX codes. This style is only used for
	 * <SHAPE_SWIMLANE> shapes.
	 */
	public static $STYLE_SEPARATORCOLOR = "separatorColor";

	/**
	 * Variable: STYLE_STROKEWIDTH
	 *
	 * Defines the key for the strokeWidth style. The type of the value is 
	 * numeric and the possible range is any non-negative value. The value
	 * the stroke width in pixels.
	 */
	public static $STYLE_STROKEWIDTH = "strokeWidth";

	/**
	 * Variable: STYLE_ALIGN
	 *
	 * Defines the key for the align style. Possible values are <ALIGN_LEFT>,
	 * <ALIGN_CENTER> and <ALIGN_RIGHT>. This value defines how the lines of
	 * the label are horizontally aligned. <ALIGN_LEFT> mean label text lines
	 * are aligned to left of the label bounds, <ALIGN_RIGHT> to the right of
	 * the label bounds and <ALIGN_CENTER> means the center of the text lines
	 * are aligned in the center of the label bounds. Note this value doesn't
	 * affect the positioning of the overall label bounds relative to the
	 * vertex, to move the label bounds horizontally, use
	 * <STYLE_LABEL_POSITION>.
	 */
	public static $STYLE_ALIGN = "align";

	/**
	 * Variable: STYLE_VERTICAL_ALIGN
	 *
	 * Defines the key for the verticalAlign style. Possible values are
	 * <ALIGN_TOP>, <ALIGN_MIDDLE> and <ALIGN_BOTTOM>. This value defines how
	 * the lines of the label are vertically aligned. <ALIGN_TOP> means the
	 * topmost label text line is aligned against the top of the label bounds,
	 * <ALIGN_BOTTOM> means the bottom-most label text line is aligned against
	 * the bottom of the label bounds and <ALIGN_MIDDLE> means there is equal
	 * spacing between the topmost text label line and the top of the label
	 * bounds and the bottom-most text label line and the bottom of the label
	 * bounds. Note this value doesn't affect the positioning of the overall
	 * label bounds relative to the vertex, to move the label bounds
	 * vertically, use <STYLE_VERTICAL_LABEL_POSITION>.
	 */
	public static $STYLE_VERTICAL_ALIGN = "verticalAlign";

	/**
	 * Variable: STYLE_LABEL_POSITION
	 * 
	 * Defines the key for the horizontal label position of vertices. Possible
	 * values are <ALIGN_LEFT>, <ALIGN_CENTER> and <ALIGN_RIGHT>. Default is
	 * <ALIGN_CENTER>. The label align defines the position of the label
	 * relative to the cell. <ALIGN_LEFT> means the entire label bounds is
	 * placed completely just to the left of the vertex, <ALIGN_RIGHT> means
	 * adjust to the right and <ALIGN_CENTER> means the label bounds are
	 * vertically aligned with the bounds of the vertex. Note this value
	 * doesn't affect the positioning of label within the label bounds, to move
	 * the label horizontally within the label bounds, use <STYLE_ALIGN>.
	 */
	public static $STYLE_LABEL_POSITION = "labelPosition";

	/**
	 * Variable: STYLE_VERTICAL_LABEL_POSITION
	 * 
	 * Defines the key for the vertical label position of vertices. Possible
	 * values are <ALIGN_TOP>, <ALIGN_BOTTOM> and <ALIGN_MIDDLE>. Default is
	 * <ALIGN_MIDDLE>. The label align defines the position of the label
	 * relative to the cell. <ALIGN_TOP> means the entire label bounds is
	 * placed completely just on the top of the vertex, <ALIGN_BOTTOM> means
	 * adjust on the bottom and <ALIGN_MIDDLE> means the label bounds are
	 * horizontally aligned with the bounds of the vertex. Note this value
	 * doesn't affect the positioning of label within the label bounds, to move
	 * the label vertically within the label bounds, use
	 * <STYLE_VERTICAL_ALIGN>.
	 */
	public static $STYLE_VERTICAL_LABEL_POSITION = "verticalLabelPosition";
	
	/**
	 * Variable: STYLE_IMAGE_ALIGN
	 *
	 * Defines the key for the align style. Possible values are <ALIGN_LEFT>,
	 * <ALIGN_CENTER> and <ALIGN_RIGHT>. The value defines how any image in the
	 * vertex label is aligned horizontally within the label bounds of a
	 * <SHAPE_LABEL> shape.
	 */
	public static $STYLE_IMAGE_ALIGN = "imageAlign";

	/**
	 * Variable: STYLE_IMAGE_VERTICALALIGN
	 *
	 * Defines the key for the verticalAlign style. Possible values are
	 * <ALIGN_TOP>, <ALIGN_MIDDLE> and <ALIGN_BOTTOM>. The value defines how
	 * any image in the vertex label is aligned vertically within the label
	 * bounds of a <SHAPE_LABEL> shape.
	 */
	public static $STYLE_IMAGE_VERTICAL_ALIGN = "imageVerticalAlign";

	/**
	 * Variable: STYLE_IMAGE
	 *
	 * Defines the key for the image style. Possible values are any image URL,
	 * registered key in <mxImageResources> or short data URI as defined
	 * in <mxImageBundle>.
	 * The type of the value is String. This is the path to the image to image
	 * that is to be displayed within the label of a vertex. Finally,
	 * <mxUtils.loadImage> is used for loading the image for a given value.
	 */
	public static $STYLE_IMAGE = "image";

	/**
	 * Variable: STYLE_IMAGE_WIDTH
	 *
	 * Defines the key for the imageWidth style. The type of this value is
	 * int, the value is the image width in pixels and must be greater than 0.
	 */
	public static $STYLE_IMAGE_WIDTH = "imageWidth";

	/**
	 * Variable: STYLE_IMAGE_HEIGHT
	 *
	 * Defines the key for the imageHeight style. The type of this value is
	 * int, the value is the image height in pixels and must be greater than 0.
	 */
	public static $STYLE_IMAGE_HEIGHT = "imageHeight";

	/**
	 * Variable: STYLE_IMAGE_BACKGROUND
	 * 
	 * Defines the key for the image background color. This style is only used
	 * in <mxImageShape>. Possible values are all HTML color names or HEX
	 * codes.
	 */
	public static $STYLE_IMAGE_BACKGROUND = "imageBackground";

	/**
	 * Variable: STYLE_IMAGE_BORDER
	 * 
	 * Defines the key for the image border color. This style is only used in
	 * <mxImageShape>. Possible values are all HTML color names or HEX codes.
	 */
	public static $STYLE_IMAGE_BORDER = "imageBorder";
	
	/**
	 * Variable: STYLE_IMAGE_FLIPH
	 * 
	 * Defines the key for the horizontal image flip. This style is only used
	 * for painting images. Possible values are 0 and 1. Default is 0.
	 */
	public static $STYLE_IMAGE_FLIPH = "imageFlipH";

	/**
	 * Variable: STYLE_IMAGE_FLIPV
	 * 
	 * Defines the key for the vertical image flip. This style is only used
	 * for painting images. Possible values are 0 and 1. Default is 0.
	 */
	public static $STYLE_IMAGE_FLIPV = "imageFlipV";
	
	/**
	 * Variable: STYLE_NOLABEL
	 * 
	 * Defines the key for the noLabel style. If this is
	 * true then no label is visible for a given cell.
	 * Possible values are true or false (1 or 0).
	 * Default is false.
	 */
	public static $STYLE_NOLABEL = "noLabel";

	/**
	 * Variable: STYLE_NOEDGESTYLE
	 * 
	 * Defines the key for the noEdgeStyle style. If this is
	 * true then no edge style is applied for a given edge.
	 * Possible values are true or false (1 or 0).
	 * Default is false.
	 */
	public static $STYLE_NOEDGESTYLE = "noEdgeStyle";

	/**
	 * Variable: STYLE_LABEL_BACKGROUNDCOLOR
	 * 
	 * Defines the key for the label background color. Possible values are all
	 * HTML color names or HEX codes.
	 */
	public static $STYLE_LABEL_BACKGROUNDCOLOR = "labelBackgroundColor";

	/**
	 * Variable: STYLE_LABEL_BORDERCOLOR
	 * 
	 * Defines the key for the label border color. Possible values are all
	 * HTML color names or HEX codes.
	 */
	public static $STYLE_LABEL_BORDERCOLOR = "labelBorderColor";

	/**
	 * Variable: STYLE_INDICATOR_SHAPE
	 *
	 * Defines the key for the indicatorShape style.
	 * Possible values are any of the SHAPE_*
	 * constants.
	 */
	public static $STYLE_INDICATOR_SHAPE = "indicatorShape";

	/**
	 * Variable: STYLE_INDICATOR_IMAGE
	 *
	 * Defines the key for the indicatorImage style.
	 * Possible values are any image URL.
	 */
	public static $STYLE_INDICATOR_IMAGE = "indicatorImage";

	/**
	 * Variable: STYLE_INDICATOR_COLOR
	 *
	 * Defines the key for the indicatorColor style. Possible values are all
	 * HTML color names or HEX codes, as well as the special 'swimlane' keyword
	 * to refer to the color of the parent swimlane if one exists.
	 */
	public static $STYLE_INDICATOR_COLOR = "indicatorColor";

	/**
	 * Variable: STYLE_INDICATOR_GRADIENTCOLOR
	 *
	 * Defines the key for the indicatorGradientColor style. Possible values
	 * are all HTML color names or HEX codes. This style is only supported in
	 * <SHAPE_LABEL> shapes.
	 */
	public static $STYLE_INDICATOR_GRADIENTCOLOR = "indicatorGradientColor";

	/**
	 * Variable: STYLE_INDICATOR_SPACING
	 *
	 * Defines the key for the indicatorSpacing style (in px).
	 */
	public static $STYLE_INDICATOR_SPACING = "indicatorSpacing";

	/**
	 * Variable: STYLE_INDICATOR_WIDTH
	 *
	 * Defines the key for the indicatorWidth style (in px).
	 */
	public static $STYLE_INDICATOR_WIDTH = "indicatorWidth";

	/**
	 * Variable: STYLE_INDICATOR_HEIGHT
	 *
	 * Defines the key for the indicatorHeight style (in px).
	 */
	public static $STYLE_INDICATOR_HEIGHT = "indicatorHeight";

	/**
	 * Variable: STYLE_SHADOW
	 *
	 * Defines the key for the shadow style. The type of the value is Boolean.
	 */
	public static $STYLE_SHADOW = "shadow";
	
	/**
	 * Variable: STYLE_SEGMENT
	 * 
	 * Defines the key for the segment style. The type of this value is
	 * float and the value represents the size of the horizontal
	 * segment of the entity relation style. Default is ENTITY_SEGMENT.
	 */
	public static $STYLE_SEGMENT = "segment";
	
	/**
	 * Variable: STYLE_ENDARROW
	 *
	 * Defines the key for the endArrow style.
	 * Possible values are all constants in this
	 * class that start with ARROW_.
	 * This style is supported in the
	 * <mxConnector> shape.
	 *
	 * Example:
	 * (code)
	 * style[mxConstants.public static $STYLE_ENDARROW] = mxConstants.ARROW_CLASSIC;
	 * (end)
	 */
	public static $STYLE_ENDARROW = "endArrow";

	/**
	 * Variable: STYLE_STARTARROW
	 *
	 * Defines the key for the startArrow style.
	 * Possible values are all constants in this
	 * class that start with ARROW_.
	 * See <public static $STYLE_ENDARROW>.
	 * This style is supported in the
	 * <mxConnector> shape.
	 */
	public static $STYLE_STARTARROW = "startArrow";

	/**
	 * Variable: STYLE_ENDSIZE
	 *
	 * Defines the key for the endSize style. The type of this value is numeric
	 * and the value represents the size of the end marker in pixels.
	 */
	public static $STYLE_ENDSIZE = "endSize";

	/**
	 * Variable: STYLE_STARTSIZE
	 *
	 * Defines the key for the startSize style. The type of this value is
	 * numeric and the value represents the size of the start marker or the
	 * size of the swimlane title region depending on the shape it is used for.
	 */
	public static $STYLE_STARTSIZE = "startSize";

	/**
	 * Variable: STYLE_SWIMLANE_LINE
	 *
	 * Defines the key for the swimlaneLine style. This style specifies whether
	 * the line between the title regio of a swimlane should be visible. Use 0
	 * for hidden or 1 (default) for visible. Value is "swimlaneLine".
	 */
	public static $STYLE_SWIMLANE_LINE = "swimlaneLine";
	
	/**
	 * Variable: STYLE_DASHED
	 *
	 * Defines the key for the endSize style. The type of this value is numeric
	 * and the value represents the size of the end marker in pixels.
	 */
	public static $STYLE_DASHED = "dashed";

	/**
	 * Variable: STYLE_ROUNDED
	 *
	 * Defines the key for the rounded style. The type of this value is
	 * Boolean. For edges this determines whether or not joins between edges
	 * segments are smoothed to a rounded finish. For vertices that have the
	 * rectangle shape, this determines whether or not the rectangle is
	 * rounded.
	 */
	public static $STYLE_ROUNDED = "rounded";

	/**
	 * Variable: STYLE_SOURCE_PERIMETER_SPACING
	 *
	 * Defines the key for the source perimeter spacing. The type of this value
	 * is numeric. This is the distance between the source connection point of
	 * an edge and the perimeter of the source vertex in pixels. This style
	 * only applies to edges.
	 */
	public static $STYLE_SOURCE_PERIMETER_SPACING = "sourcePerimeterSpacing";

	/**
	 * Variable: STYLE_TARGET_PERIMETER_SPACING
	 *
	 * Defines the key for the source perimeter spacing. The type of this value
	 * is numeric. This is the distance between the target connection point of
	 * an edge and the perimeter of the target vertex in pixels.
	 */
	public static $STYLE_TARGET_PERIMETER_SPACING = "targetPerimeterSpacing";

	/**
	 * Variable: STYLE_PERIMETER_SPACING
	 *
	 * Defines the key for the perimeter spacing. This is the distance between
	 * the connection point and the perimeter in pixels. When used in a vertex
	 * style, this applies to all incoming edges to floating ports (edges that
	 * terminate on the perimeter of the vertex). When used in an edge style,
	 * this spacing applies to the source and target separately, if they
	 * terminate in floating ports (on the perimeter of the vertex).
	 */
	public static $STYLE_PERIMETER_SPACING = "perimeterSpacing";
	
	/**
	 * Variable: STYLE_SPACING
	 *
	 * Defines the key for the spacing. The value represents the spacing, in
	 * pixels, added to each side of a label in a vertex (style applies to
	 * vertices only).
	 */
	public static $STYLE_SPACING = "spacing";
	
	/**
	 * Variable: STYLE_SPACING_TOP
	 *
	 * Defines the key for the spacingTop style. The value represents the
	 * spacing, in pixels, added to the top side of a label in a vertex (style
	 * applies to vertices only).
	 */
	public static $STYLE_SPACING_TOP = "spacingTop";

	/**
	 * Variable: STYLE_SPACING_LEFT
	 *
	 * Defines the key for the spacingLeft style. The value represents the
	 * spacing, in pixels, added to the left side of a label in a vertex (style
	 * applies to vertices only).
	 */
	public static $STYLE_SPACING_LEFT = "spacingLeft";

	/**
	 * Variable: STYLE_SPACING_BOTTOM
	 *
	 * Defines the key for the spacingBottom style The value represents the
	 * spacing, in pixels, added to the bottom side of a label in a vertex
	 * (style applies to vertices only).
	 */
	public static $STYLE_SPACING_BOTTOM = "spacingBottom";

	/**
	 * Variable: STYLE_SPACING_RIGHT
	 *
	 * Defines the key for the spacingRight style The value represents the
	 * spacing, in pixels, added to the right side of a label in a vertex (style
	 * applies to vertices only).
	 */
	public static $STYLE_SPACING_RIGHT = "spacingRight";

	/**
	 * Variable: STYLE_HORIZONTAL
	 *
	 * Defines the key for the horizontal style. Possible values are
	 * true or false. This value only applies to vertices. If the <STYLE_SHAPE>
	 * is <code>SHAPE_SWIMLANE</code> a value of false indicates that the
	 * swimlane should be drawn vertically, true indicates to draw it
	 * horizontally. If the shape style does not indicate that this vertex is a
	 * swimlane, this value affects only whether the label is drawn
	 * horizontally or vertically.
	 */
	public static $STYLE_HORIZONTAL = "horizontal";

	/**
	 * Variable: STYLE_DIRECTION
	 * 
	 * Defines the key for the direction style. The direction style is used
	 * to specify the direction of certain shapes (eg. <mxTriangle>).
	 * Possible values are <DIRECTION_EAST> (default), <DIRECTION_WEST>,
	 * <DIRECTION_NORTH> and <DIRECTION_SOUTH>.
	 */
	public static $STYLE_DIRECTION = "direction";

	/**
	 * Variable: STYLE_ELBOW
	 *
	 * Defines the key for the elbow style. Possible values are
	 * <ELBOW_HORIZONTAL> and <ELBOW_VERTICAL>. Default is <ELBOW_HORIZONTAL>.
	 * This defines how the three segment orthogonal edge style leaves its
	 * terminal vertices. The vertical style leaves the terminal vertices at
	 * the top and bottom sides.
	 */
	public static $STYLE_ELBOW = "elbow";

	/**
	 * Variable: STYLE_FONTCOLOR
	 *
	 * Defines the key for the fontColor style. Possible values are all HTML
	 * color names or HEX codes.
	 */
	public static $STYLE_FONTCOLOR = "fontColor";

	/**
	 * Variable: STYLE_FONTFAMILY
	 *
	 * Defines the key for the fontFamily style. Possible values are names such
	 * as Arial; Dialog; Verdana; Times New Roman. The value is of type String.
	 */
	public static $STYLE_FONTFAMILY = "fontFamily";

	/**
	 * Variable: STYLE_FONTSIZE
	 *
	 * Defines the key for the fontSize style (in px). The type of the value
	 * is int.
	 */
	public static $STYLE_FONTSIZE = "fontSize";

	/**
	 * Variable: STYLE_FONTSTYLE
	 *
	 * Defines the key for the fontStyle style. Values may be any logical AND
	 * (sum) of <FONT_BOLD>, <FONT_ITALIC> and <FONT_UNDERLINE>.
	 * The type of the value is int.
	 */
	public static $STYLE_FONTSTYLE = "fontStyle";

	/**
	 * Variable: STYLE_SHAPE
	 *
	 * Defines the key for the shape. Possible values are all constants
	 * with a SHAPE-prefix or any newly defined shape names.
	 */
	public static $STYLE_SHAPE = "shape";

	/**
	 * Variable: STYLE_EDGE
	 *
	 * Defines the key for the edge style. Possible values are the functions
	 * defined in <mxEdgeStyle>.
	 */
	public static $STYLE_EDGE = "edgeStyle";

	/**
	 * Variable: STYLE_LOOP
	 * 
	 * Defines the key for the loop style. Possible values are the functions
	 * defined in <mxEdgeStyle>.
	 */
	public static $STYLE_LOOP = "loopStyle";

	/**
	 * Variable: STYLE_ROUTING_CENTER_X
	 * 
	 * Defines the key for the horizontal routing center. Possible values are
	 * between -0.5 and 0.5. This is the relative offset from the center used
	 * for connecting edges. The type of this value is numeric.
	 */
	public static $STYLE_ROUTING_CENTER_X = "routingCenterX";

	/**
	 * Variable: STYLE_ROUTING_CENTER_Y
	 * 
	 * Defines the key for the vertical routing center. Possible values are
	 * between -0.5 and 0.5. This is the relative offset from the center used
	 * for connecting edges. The type of this value is numeric.
	 */
	public static $STYLE_ROUTING_CENTER_Y = "routingCenterY";

	/**
	 * Variable: FONT_BOLD
	 */
	public static $FONT_BOLD = 1;

	/**
	 * Variable: FONT_ITALIC
	 */
	public static $FONT_ITALIC = 2;

	/**
	 * Variable: FONT_UNDERLINE
	 */
	public static $FONT_UNDERLINE = 4;

	/**
	 * Variable: SHAPE_RECTANGLE
	 */
	public static $SHAPE_RECTANGLE = "rectangle";

	/**
	 * Variable: SHAPE_ELLIPSE
	 */
	public static $SHAPE_ELLIPSE = "ellipse";

	/**
	 * Variable: SHAPE_DOUBLE_ELLIPSE
	 */
	public static $SHAPE_DOUBLE_ELLIPSE = "doubleEllipse";

	/**
	 * Variable: SHAPE_RHOMBUS
	 */
	public static $SHAPE_RHOMBUS = "rhombus";

	/**
	 * Variable: SHAPE_LINE
	 */
	public static $SHAPE_LINE = "line";

	/**
	 * Variable: SHAPE_IMAGE
	 */
	public static $SHAPE_IMAGE = "image";
	
	/**
	 * Variable: SHAPE_ARROW
	 */
	public static $SHAPE_ARROW = "arrow";
	
	/**
	 * Variable: SHAPE_LABEL
	 */
	public static $SHAPE_LABEL = "label";
	
	/**
	 * Variable: SHAPE_CYLINDER
	 */
	public static $SHAPE_CYLINDER = "cylinder";
	
	/**
	 * Variable: SHAPE_SWIMLANE
	 */
	public static $SHAPE_SWIMLANE = "swimlane";
		
	/**
	 * Variable: SHAPE_CONNECTOR
	 */
	public static $SHAPE_CONNECTOR = "connector";
		
	/**
	 * Variable: SHAPE_ACTOR
	 */
	public static $SHAPE_ACTOR = "actor";
		
	/**
	 * Variable: SHAPE_CLOUD
	 */
	public static $SHAPE_CLOUD = "cloud";
		
	/**
	 * Variable: SHAPE_TRIANGLE
	 */
	public static $SHAPE_TRIANGLE = "triangle";
		
	/**
	 * Variable: SHAPE_HEXAGON
	 */
	public static $SHAPE_HEXAGON = "hexagon";

	/**
	 * Variable: ARROW_CLASSIC
	 */
	public static $ARROW_CLASSIC = "classic";

	/**
	 * Variable: ARROW_BLOCK
	 */
	public static $ARROW_BLOCK = "block";

	/**
	 * Variable: ARROW_OPEN
	 */
	public static $ARROW_OPEN = "open";

	/**
	 * Variable: ARROW_OVAL
	 */
	public static $ARROW_OVAL = "oval";

	/**
	 * Variable: ARROW_DIAMOND
	 */
	public static $ARROW_DIAMOND = "diamond";

	/**
	 * Variable: ALIGN_LEFT
	 */
	public static $ALIGN_LEFT = "left";

	/**
	 * Variable: ALIGN_CENTER
	 */
	public static $ALIGN_CENTER = "center";

	/**
	 * Variable: ALIGN_RIGHT
	 */
	public static $ALIGN_RIGHT = "right";

	/**
	 * Variable: ALIGN_TOP
	 */
	public static $ALIGN_TOP = "top";

	/**
	 * Variable: ALIGN_MIDDLE
	 */
	public static $ALIGN_MIDDLE = "middle";

	/**
	 * Variable: ALIGN_BOTTOM
	 */
	public static $ALIGN_BOTTOM = "bottom";

	/**
	 * Variable: DIRECTION_NORTH
	 */
	public static $DIRECTION_NORTH = "north";

	/**
	 * Variable: DIRECTION_SOUTH
	 */
	public static $DIRECTION_SOUTH = "south";

	/**
	 * Variable: DIRECTION_EAST
	 */
	public static $DIRECTION_EAST = "east";

	/**
	 * Variable: DIRECTION_WEST
	 */
	public static $DIRECTION_WEST = "west";

	/**
	 * Variable: ELBOW_VERTICAL
	 */
	public static $ELBOW_VERTICAL = "vertical";

	/**
	 * Variable: ELBOW_HORIZONTAL
	 */
	public static $ELBOW_HORIZONTAL = "horizontal";

	/**
	 * Variable: 
	 *
	 * Name of the elbow edge style. Can be used as a string value
	 * for the STYLE_EDGE style.
	 */
	public static $EDGESTYLE_ELBOW = "elbowEdgeStyle";

	/**
	 * Variable: EDGESTYLE_ENTITY_RELATION
	 *
	 * Name of the entity relation edge style. Can be used as a string value
	 * for the STYLE_EDGE style.
	 */
	public static $EDGESTYLE_ENTITY_RELATION = "entityRelationEdgeStyle";

	/**
	 * Variable: EDGESTYLE_LOOP
	 *
	 * Name of the loop edge style. Can be used as a string value
	 * for the STYLE_EDGE style.
	 */
	public static $EDGESTYLE_LOOP = "loopEdgeStyle";

	/**
	 * Variable: EDGESTYLE_SIDETOSIDE
	 *
	 * Name of the side to side edge style. Can be used as a string value
	 * for the STYLE_EDGE style.
	 */
	public static $EDGESTYLE_SIDETOSIDE = "sideToSideEdgeStyle";

	/**
	 * Variable: EDGESTYLE_TOPTOBOTTOM
	 *
	 * Name of the top to bottom edge style. Can be used as a string value
	 * for the STYLE_EDGE style.
	 */
	public static $EDGESTYLE_TOPTOBOTTOM = "topToBottomEdgeStyle";

	/**
	 * Variable: PERIMETER_ELLIPSE
	 *
	 * Name of the ellipse perimeter. Can be used as a string value
	 * for the STYLE_PERIMETER style.
	 */
	public static $PERIMETER_ELLIPSE = "ellipsePerimeter";

	/**
	 * Variable: PERIMETER_RECTANGLE
	 *
	 * Name of the rectangle perimeter. Can be used as a string value
	 * for the STYLE_PERIMETER style.
	 */
	public static $PERIMETER_RECTANGLE = "rectanglePerimeter";

	/**
	 * Variable: PERIMETER_RHOMBUS
	 *
	 * Name of the rhombus perimeter. Can be used as a string value
	 * for the STYLE_PERIMETER style.
	 */
	public static $PERIMETER_RHOMBUS = "rhombusPerimeter";

	/**
	 * Variable: PERIMETER_TRIANGLE
	 *
	 * Name of the triangle perimeter. Can be used as a string value
	 * for the STYLE_PERIMETER style.
	 */
	public static $PERIMETER_TRIANGLE = "trianglePerimeter";

}

class mxEventObject
{

	/**
	 * Class: mxEventObject
	 *
	 * Base class for all events.
	 * 
	 * Variable: name
	 * 
	 * Holds the name of the event.
	 */
	var $name;
	
	/**
	 * Variable: properties
	 *
	 * Holds the event properties in an associative array that maps from string
	 * (key) to object (value).
	 */
	var $properties;

	/**
	 * Variable: consumed
	 *
	 * Holds the consumed state of the event. Default is false.
	 */
	var $consumed = false;

	/**
	 * Constructor: mxEventObject
	 *
	 * Constructs a new event for the given name and properties. The optional
	 * properties are specified using a sequence of keys and values, eg.
	 * new mxEventObject($name, $key1, $value1, $key2, $value2, .., $keyN, $valueN)
	 */
	function __construct($name)
	{
		$this->name = $name;
		$this->properties = array();
		$args = func_get_args();

		for ($i = 1; $i < sizeof($args); $i += 2)
		{
			if (isset($args[$i + 1]))
			{
				$this->properties[$args[$i]] = $args[$i + 1];
			}
		}			
	}
	
	/**
	 * Function: getName
	 * 
	 * Returns <name>.
	 */
	function getName()
	{
		return $this->name;
	}

	/**
	 * Function: getProperties
	 * 
	 * Returns <properties>.
	 */
	function getProperties()
	{
		return $this->properties;
	}

	/**
	 * Function: getProperty
	 * 
	 * Returns the property value for the given key.
	 */
	function getProperty($key)
	{
		return $this->properties[$key];
	}

	/**
	 * Function: isConsumed
	 *
	 * Returns true if the event has been consumed.
	 */
	function isConsumed()
	{
		return $this->consumed;
	}

	/**
	 * Function: consume
	 *
	 * Consumes the event.
	 */
	function consume()
	{
		$this->consumed = true;
	}
	
}

/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxUtils
{
	
	/**
	 * Class: mxUtils
	 *
	 * Helper methods.
	 * 
	 * Function: getLabelSize
	 * 
	 * Returns the size of the given label.
	 */
    static function getLabelSize($label, $style)
    {
        $fontSize = mxUtils::getValue($style, mxConstants::$STYLE_FONTSIZE,
            mxConstants::$DEFAULT_FONTSIZE);
        $fontFamily = mxUtils::getValue($style, mxConstants::$STYLE_FONTFAMILY,
        	mxConstants::$DEFAULT_FONTFAMILY);
		
        return mxUtils::getSizeForString($label, $fontSize, $fontFamily);
    }
        
    /**
	 * Function: getLabelPaintBounds
	 * 
	 * Returns the paint bounds for the given label.
     */
    static function getLabelPaintBounds($label, $style,
    	$isHtml, $offset, $vertexBounds, $scale)
    {
        $size = mxUtils::getLabelSize($label, $style);

        $x = $offset->x;
        $y = $offset->y;
        $width = 0;
        $height = 0;

        if (isset($vertexBounds))
        {
            $x += $vertexBounds->x;
            $y += $vertexBounds->y;

            if (mxUtils::getValue($style, mxConstants::$STYLE_SHAPE, "") ==
            	mxConstants::$SHAPE_SWIMLANE)
            {
				// Limits the label to the swimlane title
	            $start = mxUtils::getNumber($style, mxConstants::$STYLE_STARTSIZE,
	            	mxConstants::$DEFAULT_STARTSIZE) * $scale;
            	
	            if (mxUtils::getValue($style, mxConstants::$STYLE_HORIZONTAL, true))
				{
					$width += $vertexBounds->width;
            		$height += $start;				
				}
				else
				{
					$width += $start;
            		$height += $vertexBounds->height;
				}
            }
            else
            {
            	$height += $vertexBounds->height;
            	$width += $vertexBounds->width;
        	}
        }

        return mxUtils::getScaledLabelBounds($x, $y, $size, $width,
        		$height, $style, $scale);
    }
 
    /**
	 * Function: getScaledLabelBounds
	 * 
	 * Returns the bounds for a label for the given location and size, taking
	 * into account the alignment and spacing in the specified style, as well
	 * as the width and height of the rectangle that contains the label.
	 * (For edge labels this width and height is 0.) The scale is used to scale
	 * the given size and the spacings in the specified style.
     */
    static function getScaledLabelBounds($x, $y, $size, $outerWidth, $outerHeight, $style, $scale)
    {
		// Adds an inset of 3 pixels
		$inset = mxConstants::$LABEL_INSET * $scale;

    	// Scales the size of the label
    	$width = $size->width * $scale + 2 * $inset;
    	$height = $size->height * $scale;

		// Gets the global spacing and orientation
		$horizontal = mxUtils::getValue($style, mxConstants::$STYLE_HORIZONTAL, true);
        $spacing = mxUtils::getNumber($style, mxConstants::$STYLE_SPACING) * $scale;

		// Gets the alignment settings
        $align = mxUtils::getValue($style, mxConstants::$STYLE_ALIGN,
        	mxConstants::$ALIGN_CENTER);
        $valign = mxUtils::getValue($style, mxConstants::$STYLE_VERTICAL_ALIGN,
        	mxConstants::$ALIGN_MIDDLE);

		// Gets the vertical spacing
        $top = mxUtils::getNumber($style, mxConstants::$STYLE_SPACING_TOP) * $scale;
        $bottom = mxUtils::getNumber($style, mxConstants::$STYLE_SPACING_BOTTOM) * $scale;

		// Gets the horizontal spacing
        $left = mxUtils::getNumber($style, mxConstants::$STYLE_SPACING_LEFT) * $scale;
        $right = mxUtils::getNumber($style, mxConstants::$STYLE_SPACING_RIGHT) * $scale;

		// Applies the orientation to the spacings and dimension
		if (!$horizontal)
		{
			$tmp = $top;
			$top = $right;
			$right = $bottom;
			$bottom = $left;
			$left = $tmp;
			
			$tmp = $width;
			$width = $height;
			$height = $tmp;
		}

		// Computes the position of the label for the horizontal alignment
        if (($horizontal && $align == mxConstants::$ALIGN_CENTER) ||
        	(!$horizontal && $valign == mxConstants::$ALIGN_MIDDLE))
        {
            $x += ($outerWidth - $width) / 2 + $left - $right;
        }
        else if (($horizontal && $align == mxConstants::$ALIGN_RIGHT) ||
        	(!$horizontal && $valign == mxConstants::$ALIGN_BOTTOM))
        {
            $x += $outerWidth - $width - $spacing - $right;
        }
        else
        {
            $x += $spacing + $left;
        }

		// Computes the position of the label for the vertical alignment
        if ((!$horizontal && $align == mxConstants::$ALIGN_CENTER) ||
        	($horizontal && $valign == mxConstants::$ALIGN_MIDDLE))
        {
            $y += ($outerHeight - $height) / 2 + $top - $bottom;
        }
        else if ((!$horizontal && $align == mxConstants::$ALIGN_LEFT) ||
        	($horizontal && $valign == mxConstants::$ALIGN_BOTTOM))
        {
            $y += $outerHeight - $height - $spacing - $bottom;
        }
        else
        {
            $y += $spacing + $top;
        }

        return new mxRectangle($x, $y, $width, $height);
    }
    
    /**
	 * Function: getSizeForString
	 * 
	 * Returns an <mxRectangle> with the size (width and height in pixels) of
	 * the given string. The string may contain HTML markup. Newlines should be
	 * converted to <br> before calling this method.
	 * 
	 * Parameters:
	 * 
	 * text - String whose size should be returned.
	 * fontSize - Integer that specifies the font size in pixels. Default is
	 * <mxConstants.DEFAULT_FONTSIZE>.
	 * fontFamily - String that specifies the name of the font famil.y Default
	 * is <mxConstants.DEFAULT_FONTFAMILY>.
     * 
     */
    static function getSizeForString($text, $fontSize = 0, $fontFamily = null)
    {
    	if (is_string($text) && strlen($text) > 0)
    	{
	        if ($fontSize == 0)
	        {
	            $fontSize = mxConstants::$DEFAULT_FONTSIZE;
	        }
	
	        if ($fontFamily == null)
	        {
	            $fontFamily = public_path().'fonts/vendor/open-sans/OpenSans-Regular.ttf';
	        }
	        // dd($fontFamily);
	
			$lines = explode("\n", $text);
			$lineCount = sizeof($lines);
	        
	    	if (mxConstants::$TTF_ENABLED &&
	    		function_exists("imagettfbbox"))
			{
				$bbox = imagettfbbox($fontSize * mxConstants::$TTF_SIZEFACTOR, 0, public_path().'/fonts/vendor/open-sans/OpenSans-Regular.ttf', $text);
				$textWidth = $bbox[2] - $bbox[0];
				$textHeight = ($fontSize + mxConstants::$DEFAULT_LINESPACING) * $lineCount;
				
				return new mxRectangle(0, 0, $textWidth, $textHeight);
			}
			else if (function_exists("imageFontHeight") &&
				function_exists("imageFontWidth"))
			{
				$font = mxUtils::getFixedFontSize($fontSize, $fontFamily);
				$textHeight = (imageFontHeight($font) + mxConstants::$DEFAULT_LINESPACING) * $lineCount;
				$charWidth = imageFontWidth($font);
				$textWidth = 0;
				
				for ($i = 0; $i < sizeof($lines); $i++)
				{
					$textWidth = max($textWidth, $charWidth * strlen($lines[$i]));
				}
				
				return new mxRectangle(0, 0, $textWidth, $textHeight);
			}
		}
		
		return new mxRectangle();
    }
	
	/**
	 * Function: flipImage
	 * 
	 * Flips the given image horizontally and/or vertically and returns a new
	 * image instance.
	 */
	static function flipImage($img, $flipH, $flipV)
	{
		$w = imagesx($img);
		$h = imagesy($img);
		
		$sx = 0;
		$sy = 0;
		$sw = $w;
		$sh = $h;
				
		if ($flipH)
		{
			$sx = $w - 1;
			$sw = -$w;
		}
		
		if ($flipV)
		{
			$sy = $h - 1;
			$sh = -$h;
		}

		$dst = imagecreatetruecolor($w, $h);
		
		// Fills the background with transparent white
		$bg = ImageColorAllocateAlpha($dst, 255, 255, 255, 127);
		ImageFill($dst, 0, 0 , $bg);
		
		if (imagecopyresampled($dst, $img, 0, 0, $sx, $sy, $w, $h, $sw, $sh))
	    {
	        return $dst;
	    }
	
	    return $img;
	}
    
	/**
	 * Function: toRadians
	 * 
	 * Converts the given degree to radians.
	 */
	static function toRadians($deg)
	{
		return pi() * $deg / 180;
	}

	/**
	 * Function: getBoundingBox
	 * 
	 * Returns the bounding box for the rotated rectangle.
	 */
	static function getBoundingBox($rect, $rotation)
	{
        $result = null;

        if ($rect != null && $rotation != null && $rotation != 0)
        {
            $rad = mxUtils::toRadians($rotation);
            $cos = cos($rad);
            $sin = sin($rad);

            $cx = new mxPoint(
            	$rect->x + $rect->width / 2,
            	$rect->y  + $rect->height / 2);

            $p1 = new mxPoint($rect->x, $rect->y);
            $p2 = new mxPoint($rect->x + $rect->width, $rect->y);
            $p3 = new mxPoint($p2->x, $rect->y + $rect->height);
            $p4 = new mxPoint($rect->x, $p3->y);

            $p1 = mxUtils::getRotatedPoint($p1, $cos, $sin, $cx);
            $p2 = mxUtils::getRotatedPoint($p2, $cos, $sin, $cx);
            $p3 = mxUtils::getRotatedPoint($p3, $cos, $sin, $cx);
            $p4 = mxUtils::getRotatedPoint($p4, $cos, $sin, $cx);

            $result = new mxRectangle($p1->x, $p1->y, 0, 0);
            $result.add(new mxRectangle($p2->x, $p2->y, 0, 0));
            $result.add(new mxRectangle($p3->x, $p3->y, 0, 0));
            $result.add(new mxRectangle($p4->x, $p4->y, 0, 0));
        }

        return $result;
	}

	/**
	 * Function: getRotatedPoint
	 * 
	 * Rotates the given point by the given cos and sin.
	 */
	static function getRotatedPoint($pt, $cos, $sin, $cx = null)
	{
		$cx = ($cx != null) ? $cx : new mxPoint();
		
		$x = $pt->x - $c->x;
		$y = $pt->y - $c->y;

		$x1 = $x * $cos - $y * $sin;
		$y1 = $y * $cos + $x * $sin;

		return new mxPoint($x1 + $c->x, $y1 + $c->y);
	}

	/**
	 * Function: translatePoints
	 *
	 * Creates a new list of new points obtained by translating the points in
	 * the given list by the given vector. Elements that are not mxPoints are
	 * added to the result as-is.
	 */
	static function translatePoints($pts, $dx, $dy)
	{
		$result = null;

		if ($pts != null)
		{
			$result = array();
			$pointCount = sizeof($pts);
			
			for ($i = 0; $i < $pointCount; $i++)
			{
				$obj = $pts[$i];
				
				if ($obj instanceof mxPoint)
				{
					$point = $obj->copy();
					
					$point->x += $dx;
					$point->y += $dy;
					
					array_push($result, $point);
				}
				else
				{
					array_push($result, $obj);
				}
			}
		}

		return $result;
	}

	/**
	 * Function: contains
	 * 
	 * Returns true if the specified point (x, y) is contained in the given rectangle.
	 * 
	 * Parameters:
	 * 
	 * bounds - <mxRectangle> that represents the area.
	 * x - X-coordinate of the point.
	 * y - Y-coordinate of the point.
	 */
	static function contains($state, $x, $y)
	{
		return ($state->x <= $x && $state->x + $state->width >= $x &&
				$state->y <= $y && $state->y + $state->height >= $y);
	}

	/**
	 * Function: intersection
	 * 
	 * Returns the intersection of two lines as an <mxPoint>.
	 * 
	 * Parameters:
	 * 
	 * x0 - X-coordinate of the first line's startpoint.
	 * y0 - X-coordinate of the first line's startpoint.
	 * x1 - X-coordinate of the first line's endpoint.
	 * y1 - Y-coordinate of the first line's endpoint.
	 * x2 - X-coordinate of the second line's startpoint.
	 * y2 - Y-coordinate of the second line's startpoint.
	 * x3 - X-coordinate of the second line's endpoint.
	 * y3 - Y-coordinate of the second line's endpoint.
	 */
	static function intersection($x0, $y0, $x1, $y1, $x2, $y2, $x3, $y3)
	{
		$denom = (($y3 - $y2)*($x1 - $x0)) - (($x3 - $x2)*($y1 - $y0));
		$nume_a = (($x3 - $x2)*($y0 - $y2)) - (($y3 - $y2)*($x0 - $x2));
		$nume_b = (($x1 - $x0)*($y0 - $y2)) - (($y1 - $y0)*($x0 - $x2));

		$ua = $nume_a / $denom;
		$ub = $nume_b / $denom;
		
		if($ua >= 0.0 && $ua <= 1.0 && $ub >= 0.0 && $ub <= 1.0)
		{
			// Get the intersection point
			$intersectionX = $x0 + $ua*($x1 - $x0);
			$intersectionY = $y0 + $ua*($y1 - $y0);
			
			return new mxPoint($intersectionX, $intersectionY);
		}
		
		// No intersection
		return null;
	}

	/**
	 * Function: encodeImage
	 *
	 * Encodes the given image using the GD image encoding routines.
	 * Supported formats are gif, jpg and png (default).
	 *
	 * Parameters:
	 *
	 * image - GD image to be encoded.
	 * format - String that defines the encoding format. Default is png.
	 */
	static function encodeImage($image, $format=null)
	{
		if ($format == "gif")
		{
			return imageGif($image);
		}
		else if ($format == "jpg")
		{
			return imageJpeg($image);
		}
		else
		{
			return imagePng($image);
		}
	}

	/**
	 * Function: getStylename
	 * 
	 * Returns the stylename in a style of the form [stylename;|key=value;] or
	 * an empty string if the given style does not contain a stylename.
	 * 
	 * Parameters:
	 * 
	 * style - String of the form [stylename;|key=value;].
	 */
	static function getStylename($style)
	{
		if (isset($style))
		{
			$pairs = explode(";", $style);
			$stylename = $pairs[0];
			
			if (strpos($stylename, "=") === false)
			{
				return $stylename;
			}
		}
				
		return "";
	}

	/**
	 * Function: getStylenames
	 * 
	 * Returns the stylenames in a style of the form [stylename;|key=value;] or
	 * an empty array if the given style does not contain any stylenames.
	 * 
	 * Parameters:
	 * 
	 * style - String of the form [stylename;|key=value;].
	 */
	static function getStylenames($style)
	{
		$result = array();
		
		if (isset($style))
		{
			$pairs = explode(";", $style);
			
			for ($i = 0; $i < sizeof($pairs); $i++)
			{
				if (strpos($pairs[$i], "=") === false)
				{
					array_push($result, $pairs[$i]);
				}
			}
		}
				
		return $result;
	}

	/**
	 * Function: indexOfStylename
	 *
	 * Returns the index of the given stylename in the given style. This
	 * returns -1 if the given stylename does not occur (as a stylename) in the
	 * given style, otherwise it returns the index of the first character.
	 */
	static function indexOfStylename($style, $stylename)
	{
		if (isset($style) && isset($stylename))
		{
			$tokens = explode(";", $style);
			$tokenCount = sizeof($tokens);
			$pos = 0;
			
			for ($i = 0; $i < $tokenCount; $i++)
			{
				if ($tokens[$i] == $stylename)
				{
					return $pos;
				}
				
				$pos += strlen($tokens[$i]) + 1;
			}
		}
		
		return -1;
	}

	/**
	 * Function: addStylename
	 *
	 * Adds the specified stylename to the given style if it does not already
	 * contain the stylename.
	 */
	static function addStylename($style, $stylename)
	{
		if (mxUtils::indexOfStylename($style, $stylename) < 0)
		{
			if (!isset($style))
			{
				$style = "";
			}
			else if (strlen($style) > 0 && $style[strlen($style) - 1] != ";")
			{
				$style .= ";";
			}

			$style .= $stylename;
		}

		return $style;
	}

	/**
	 * Function: removeStylename
	 *
	 * Removes all occurrences of the specified stylename in the given style
	 * and returns the updated style. Trailing semicolons are preserved.
	 */
	static function removeStylename($style, $stylename)
	{
		$result = "";

		if (isset($style))
		{
			$tokens = explode(";", $style);
			$tokenCount = sizeof($tokens);

			for ($i = 0; $i < $tokenCount; $i++)
			{
				if ($tokens[$i] != $stylename)
				{
					$result .= $tokens[$i].";";
				}
			}
		}
		
		$len = strlen($result);

		return ($len > 1) ? substr($result, 0, $len - 1) : $result;
	}

	/**
	 * Function: removeAllStylenames
	 *
	 * Removes all stylenames from the given style and returns the updated
	 * style.
	 */
	static function removeAllStylenames($style)
	{
		$result = "";

		if (isset($style))
		{
			$tokens = explode(";", $style);
			$tokenCount = sizeof($tokens);

			for ($i = 0; $i < $tokenCount; $i++)
			{
				if (strpos($tokens[$i], "=") !== false)
				{
					$result .= $tokens[$i].";";
				}
			}
		}
		
		$len = strlen($result);

		return ($len > 1) ? substr($result, 0, $len - 1) : $result;
	}

	/**
	 * Function: setCellStyles
	 * 
	 * Assigns the value for the given key in the styles of the given cells, or
	 * removes the key from the styles if the value is null.
	 * 
	 * Parameters:
	 * 
	 * model - <mxGraphModel> to execute the transaction in.
	 * cells - Array of <mxCells> to be updated.
	 * key - Key of the style to be changed.
	 * value - New value for the given key.
	 */
	static function setCellStyles($model, $cells, $key, $value)
	{
		if ($cells != null && sizeof($cells) > 0)
		{
			$model->beginUpdate();
			try
			{
				for ($i=0; $i < sizeof($cells); $i++)
				{
					if (isset($cells[$i]))
					{
						$style = mxUtils::setStyle(
							$model->getStyle($cells[$i]),
							$key, $value);
						$model->setStyle($cells[$i], $style);
					}
				}
			}
			catch (Exception $e)
			{
				$model->endUpdate();
				throw($e);
			}
			$model->endUpdate();
		}
	}

	/**
	 * Function: setStyle
	 * 
	 * Adds or removes the given key, value pair to the style and returns the
	 * new style. If value is null or zero length then the key is removed from
	 * the style.
	 * 
	 * Parameters:
	 * 
	 * style - String of the form stylename[;key=value]
	 * key - Key of the style to be changed.
	 * value - New value for the given key.
	 */
	static function setStyle($style, $key, $value)
	{
		$isValue = $value != null && (!is_string($value) ||
			strlen($value) > 0);
		
		if (strlen($style) == 0)
		{
			if ($isValue)
			{
				$style = "$key=$value";
			}
		}
		else
		{
			$index = strpos($style, "$key=");

			if ($index === false)
			{
				if ($isValue)
				{
					$sep = ($style[strlen($style) - 1] == ";") ? "" : ";";
					$style = "{$style}$sep{$key}=$value";
				}
			}
			else
			{
				$tmp = ($isValue) ? "$key=$value" : "";
				$cont = strpos($style, ";", $index);
				
				if (!$isValue)
				{
					$cont++;
				}
				
				$style = substr($style, 0, $index).$tmp.
					(($cont > $index) ? substr($style, $cont) : "");
			}
		}

		return $style;
	}

	/**
	 * Function: setCellStyleFlags
	 * 
	 * Sets or toggles the flag bit for the given key in the cell's styles.
	 * If value is null then the flag is toggled.
	 * 
	 * Example:
	 * 
	 * (code)
	 * var cells = graph.getSelectionCells();
	 * mxUtils.setCellStyleFlags(graph.model,
	 * 			cells,
	 * 			mxConstants.STYLE_FONTSTYLE,
	 * 			mxConstants.FONT_BOLD);
	 * (end)
	 * 
	 * Toggles the bold font style.
	 * 
	 * Parameters:
	 * 
	 * model - <mxGraphModel> that contains the cells.
	 * cells - Array of <mxCells> to change the style for.
	 * key - Key of the style to be changed.
	 * flag - Integer for the bit to be changed.
	 * value - Optional boolean value for the flag.
	 */
	static function setCellStyleFlags($model, $cells, $key, $flag, $value)
	{
		if ($cells != null && sizeof($cells) > 0)
		{
			$model->beginUpdate();
			try
			{
				for ($i=0; $i < sizeof($cells); $i++)
				{
					if (isset($cells[$i]))
					{
						$style = mxUtils::setStyleFlag(
							$model->getStyle($cells[$i]),
							$key, $flag, $value);
						$model->setStyle($cells[$i], $style);
					}
				}
			}
			catch (Exception $e)
			{
				$model->endUpdate();
				throw($e);
			}
			$model->endUpdate();
		}
	}

	/**
	 * Function: setStyleFlag
	 * 
	 * Sets or removes the given key from the specified style and returns the
	 * new style. If value is null then the flag is toggled.
	 * 
	 * Parameters:
	 * 
	 * style - String of the form stylename[;key=value].
	 * key - Key of the style to be changed.
	 * flag - Integer for the bit to be changed.
	 * value - Optional boolean value for the given flag.
	 */
	static function setStyleFlag($style, $key, $flag, $value)
	{
		if (strlen($style) == 0)
		{
			if ($value == null || $value === true)
			{
				$style = "$key=$flag";
			}
			else
			{
				$style = "$key=0";
			}
		}
		else
		{
			$index = strpos($style, "$key=");

			if ($index === false)
			{
				$sep = ($style[strlen($style) - 1] == ";") ? "" : ";";

				if ($value == null || $value === true)
				{
					$style = "{$style}$sep{$key}=$flag";
				}
				else
				{
					$style = "{$style}$sep{$key}=0";
				}
			}
			else
			{
				$cont = strpos($style, ";", $index);
				$tmp = "";
				
				if ($cont === false)
				{
					$tmp  = substr($style, $index+strlen($key)+1);
				}
				else
				{
					$tmp  = substr($style, $index+strlen($key)+1, $cont);
				}
				
				if ($value == null)
				{
					$tmp = $tmp ^ $flag;
				}
				else if ($value === true)
				{
					$tmp = $tmp | $flag;
				}
				else
				{
					$tmp = $tmp & ~$flag;
				}

				$style = substr($style, 0, $index)."$key=$tmp".
					(($cont >= 0) ? substr($style, $cont) : "");
			}
		}

		return $style;
	}

	/**
	 * Function: getValue
	 *
	 * Returns the value for key in dictionary or the given default value if no
	 * value is defined for the key.
	 * 
	 * Parameters:
	 *
	 * dict - Dictionary that contains the key, value pairs.
	 * key - Key whose value should be returned.
	 * default - Default value to return if the key is undefined. Default is null.
	 */
	static function getValue($dict, $key, $default=null)
	{
		$value = null;
	
		if (isset($dict[$key]))
		{
			$value = $dict[$key];
		}
		else
		{
			$value = $default;
		}
		
		return $value;
	}

	/**
	 * Function: getNumber
	 *
	 * Returns the value for key in dictionary or 0 if no value is defined for
	 * the key.
	 *
	 * Parameters:
	 *
	 * dict - Dictionary that contains the key, value pairs.
	 * key - Key whose value should be returned.
	 * default - Optional default value to return if no value is defined for
	 * the given key. Default is 0.
	 */
	static function getNumber($dict, $key, $default=0)
	{
		return mxUtils::getValue($dict, $key, $default);
	}

	/**
	 * Function: indexOf
	 * 
	 * Returns the index of obj in array or -1 if the array does not contains
	 * the given object.
	 * 
	 * Parameters:
	 * 
	 * array - Array to check for the given obj.
	 * obj - Object to find in the given array.
	 */
	static function indexOf($array, $object)
	{
		if ($array != null)
		{
			$len = sizeof($array);
			
			for ($i = 0; $i < $len; $i++)
			{
				if ($array[$i] === $object)
				{
					return $i;
				}
			}
		}

		return -1;
	}

	/**
	 * Function: readFile
	 * 
	 * Reads the given filename into a string. Shortcut for file_get_contents.
	 * 
	 * Parameters:
	 * 
	 * filename - The name of the file to read.
	 */
	static function readFile($filename)
	{
		return file_get_contents($filename);
	}

	/**
	 * Function: isNode
	 * 
	 * Returns true if the given value is an XML node with the node name
	 * and if the optional attribute has the specified value.
	 * 
	 * This implementation assumes that the given value is a DOM node if the
	 * nodeName property is not null.
	 * 
	 * Parameters:
	 * 
	 * value - Object that should be examined as a node.
	 * nodeName - String that specifies the node name.
	 * attributeName - Optional attribute name to check.
	 * attributeValue - Optional attribute value to check.
	 */
	static function isNode($value, $nodeName = null, $attributeName = null, $attributeValue = null)
	{
		if ($value != null && ($nodeName == null ||
			strcasecmp($value->nodeName, $nodeName) == 0))
		{
			return $attributeName == null ||
				$value->getAttribute($attributeName) == $attributeValue;
		}
		
		return false;
	}
	
	/**
	 * Function: loadImage
	 * 
	 * Loads an image from the local filesystem, a data URI or any other URL.
	 */
	static function loadImage($url)
	{
		$img = null;
		
		if (isset($url))
		{
			// Parses data URIs of the form data:image/format;base64,xxx
			if (strpos($url, "data:image/") === 0)
			{
				$comma = strpos($url, ",");
				$data = base64_decode(substr($url, $comma + 1));
				$img = imagecreatefromstring($data);
			}
			else if (preg_match("/.jpg/i", "$url"))
			{
				$img = imagecreatefromjpeg($url);
			}
			else if (preg_match("/.png/i", "$url"))
			{
				$img = imagecreatefrompng($url);
			}
			else if (preg_match("/.gif/i", "$url"))
			{
				$img = imagecreatefromgif($url);
			}
		}
		
		return $img;
	}

	/**
	 * Function: createXmlDocument
	 * 
	 * Returns a new, empty XML document.
	 */
	static function createXmlDocument()
	{
		// return new DOMDocument("1.0");
	}

	/**
	 * Function: loadXmlDocument
	 * 
	 * Returns a new DOM document for the given URI.
	 */
	static function loadXmlDocument($uri)
	{
		$doc = mxUtils::createXmlDocument();
		$doc->load($uri);
		
		return $doc;
	}

	/**
	 * Function: parseXml
	 * 
	 * Returns a new DOM document for the given XML string.
	 */
	static function parseXml($xml)
	{
		$doc = mxUtils::createXmlDocument();
		$doc->loadXML($xml);
		
		return $doc;
	}

	/**
	 * Function getXml
	 *
	 * Returns the XML of the given node as a string.
	 *
	 * Parameters:
	 *
	 * node - DOM node to return the XML for.
	 * linefeed - Optional string that linefeeds are converted into. Default is
	 * &#xa;
	 */
	static function getXml($node, $linefeed = "&#xa;")
	{
		// SaveXML converts linefeeds to &#10; internally
		return str_replace("&#10;", "&#xa;", $node->ownerDocument->saveXML($node));
	}
	
	/**
	 * Function: evaluate
	 *
	 * Evaluates an expression to a class member. The range of supported
	 * expressions is limited to static class members with a dot-notation,
	 * such as mxEdgeStyle.ElbowConnector.
	 */
	static function evaluate($expression)
	{
		$pos = strpos($expression, ".");
		
		if ($pos !== false)
		{
			$class = substr($expression, 0, $pos);
			$field = substr($expression, $pos+1);
			$vars = get_class_vars($class);
			
			if (isset($vars[$field]))
			{
				return $vars[$field];
			}
		}
		
		return eval("return ".$expression.";");
	}
	
	/**
	 * Function: findNode
	 * 
	 * Returns the first node where attr equals value.
	 * This implementation does not use XPath.
	 */
	static function findNode($node, $attr, $value)
	{
		$tmp = $node->getAttribute($attr);
		
		if (isset($tmp) && $tmp == $value)
		{
			return $node;
		}
		
		$node = $node->firstChild;
		
		while (isset($node))
		{
			$result = mxUtils::findNode($node, $attr, $value);
			
			if (isset($result))
			{
				return $result;
			}
			
			$node = $node->nextSibling;
		}
		
		return null;
	}

	/**
	 * Function: getTrueTypeFont
	 * 
	 * Returns the truetype font to be used to draw the text with the given style.
	 */
	 static function getTrueTypeFont($style)
	 {
	 	return mxUtils::getValue($style, mxConstants::$STYLE_FONTFAMILY,
			mxConstants::$DEFAULT_FONTFAMILY);
	 }
	
	/**
	 * Function: getTrueTypeFontSize
	 * 
	 * Returns the truetype font size to be used to draw the text with the
	 * given style. This returns the fontSize in the style of the default
	 * fontsize multiplied with <ttfSizeFactor>.
	 */
	 static function getTrueTypeFontSize($size)
	 {
	 	return $size * mxConstants::$TTF_SIZEFACTOR;
	 }

	/**
	 * Function: getFixedFontSize
	 * 
	 * Returns the fixed font size for GD (1 t0 5) for the given font properties
	 */
	static function getFixedFontSize($fontSize, $fontFamily, $fontStyle=null)
	{
		$font = 5;
		
		if ($fontSize <= 12)
		{
			$font = 1;
		}
		else if ($fontSize <= 14)
		{
			$font = 2;
		}
		else if ($fontSize <= 16)
		{
			$font = 3;
		}
		else if ($fontSize <= 18)
		{
			$font = 4;
		}
		
		return $font;
	}
	
	/**
	 * Function: stackTrace
	 *
	 * Prints a simple stack trace in the error log.
	 */
	static function stackTrace()
	{
		$arr = debug_backtrace();
		
		foreach ($arr as $value)
		{
			error_log($value["class"].".".$value["function"]);
		}
	}

}

/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxCellPath
{

	/**
	 * Class: mxCellPath
	 * 
	 * Implements a mechanism for temporary cell Ids.
	 * 
	 * Variable: codecs
	 *
	 * Maps from constructor names to codecs.
	 */
	public static $PATH_SEPARATOR = ".";

	/**
	 * Function: create
	 * 
	 * Creates the cell path for the given cell. The cell path is a
	 * concatenation of the indices of all ancestors on the (finite) path to
	 * the root, eg. "0.0.0.1".
	 * 
	 * Parameters:
	 * 
	 * cell - Cell whose path should be returned.
	 */
	static function create($cell)
	{
		$result = "";
		$parent = $cell->getParent();

		while ($parent != null)
		{
			$index = $parent->getIndex($cell);
			$result = $index . mxCellPath::$PATH_SEPARATOR . $result;
			
			$cell = $parent;
			$parent = $cell->getParent();
		}
		
		return (strlen($result) > 1) ?
			substr($result, 0, strlen($result) - 1) : "";
	}

	/**
	 * Function: getParentPath
	 * 
	 * Returns the cell for the specified cell path using the given root as the
	 * root of the path.
	 * 
	 * Parameters:
	 * 
	 * path - Path whose parent path should be returned.
	 */
	static function getParentPath($path)
	{
		if ($path != null && strlen($path) > 0)
		{
			$index = strrpos($path, mxCellPath::$PATH_SEPARATOR);
			
			if ($index === false)
			{
				return "";
			}
			else
			{
				return substr($path, 0, $index);
			}
		}
		
		return null;
	}

	/**
	 * Function: resolve
	 * 
	 * Returns the cell for the specified cell path using the given root as the
	 * root of the path.
	 * 
	 * Parameters:
	 * 
	 * root - Root cell of the path to be resolved.
	 * path - String that defines the path.
	 */
	static function resolve($root, $path)
	{
		$parent = $root;
		$tokens = explode(mxCellPath::$PATH_SEPARATOR, $path);
		
		for ($i=0; $i<sizeof($tokens); $i++)
		{
			$parent = $parent->getChildAt($tokens[$i]);
		}
		
		return $parent;
	}

}

class mxCell
{

	/**
	 * Class: mxCell
	 * 
	 * Cells are the elements of the graph model. They represent the state
	 * of the groups, vertices and edges in a graph.
	 * 
	 * Variable: id
	 *
	 * Holds the Id. Default is null.
	 */
	var $id = null;

	/**
	 * Variable: value
	 *
	 * Holds the user object. Default is null.
	 */
	var $value = null;

	/**
	 * Variable: geometry
	 *
	 * Holds the <mxGeometry>. Default is null.
	 */
	var $geometry = null;

	/**
	 * Variable: style
	 *
	 * Holds the style as a string of the form [(stylename|key=value);].
	 * Default is null.
	 */
	var $style = null;

	/**
	 * Variable: vertex
	 *
	 * Specifies whether the cell is a vertex. Default is false.
	 */
	var $vertex = false;

	/**
	 * Variable: edge
	 *
	 * Specifies whether the cell is an edge. Default is false.
	 */
	var $edge = false;

	/**
	 * Variable: connectable
	 *
	 * Specifies whether the cell is connectable. Default is true.
	 */
	var $connectable = true;

	/**
	 * Variable: visible
	 *
	 * Specifies whether the cell is visible. Default is true.
	 */
	var $visible = true;

	/**
	 * Variable: collapsed
	 *
	 * Specifies whether the cell is collapsed. Default is false.
	 */
	var $collapsed = false;

	/**
	 * Variable: parent
	 *
	 * Reference to the parent cell.
	 */
	var $parent = null;

	/**
	 * Variable: source
	 *
	 * Reference to the source terminal.
	 */
	var $source = null;

	/**
	 * Variable: target
	 *
	 * Reference to the target terminal.
	 */
	var $target = null;

	/**
	 * Variable: children
	 *
	 * Holds the child cells.
	 */
	var $children = null; // transient

	/**
	 * Variable: edges
	 *
	 * Holds the edges.
	 */
	var $edges = null; // transient

	/**
	 * Constructor: mxCell
	 *
	 * Constructs a new cell to be used in a graph model.
	 * This method invokes <onInit> upon completion.
	 * 
	 * Parameters:
	 * 
	 * value - Optional object that represents the cell value.
	 * geometry - Optional <mxGeometry> that specifies the geometry.
	 * style - Optional formatted string that defines the style.
	 */
	function __construct($value = null, $geometry = null, $style = null)
	{
		$this->setValue($value);
		$this->setGeometry($geometry);
		$this->setStyle($style);
	}

	/**
	 * Function: getId
	 *
	 * Returns the Id of the cell as a string.
	 */
	function getId()
	{
		return $this->id;
	}
			
	/**
	 * Function: setId
	 *
	 * Sets the Id of the cell to the given string.
	 */
	 function setId($id)
	 {
		$this->id = $id;
	}

	/**
	 * Function: getValue
	 *
	 * Returns the user object of the cell. The user
	 * object is stored in <value>.
	 */
	function getValue()
	{
		return $this->value;
	}
			
	/**
	 * Function: setValue
	 *
	 * Sets the user object of the cell. The user object
	 * is stored in <value>.
	 */
	 function setValue($value)
	 {
		$this->value = $value;
	}

	/**
	 * Function: getGeometry
	 *
	 * Returns the <mxGeometry> that describes the <geometry>.
	 */
	function getGeometry()
	{
		return $this->geometry;
	}
			
	/**
	 * Function: setGeometry
	 *
	 * Sets the <mxGeometry> to be used as the <geometry>.
	 */
	 function setGeometry($geometry)
	 {
		$this->geometry = $geometry;
	}

	/**
	 * Function: getStyle
	 *
	 * Returns a string that describes the <style>.
	 */
	function getStyle()
	{
		return $this->style;
	}
			
	/**
	 * Function: setStyle
	 *
	 * Sets the string to be used as the <style>.
	 */
	 function setStyle($style)
	 {
		$this->style = $style;
	 }

	/**
	 * Function: isVertex
	 *
	 * Returns true if the cell is a vertex.
	 */
	function isVertex()
	{
		return $this->vertex;
	}
			
	/**
	 * Function: setVertex
	 *
	 * Specifies if the cell is a vertex. This should only be assigned at
	 * construction of the cell and not be changed during its lifecycle.
	 * 
	 * Parameters:
	 * 
	 * vertex - Boolean that specifies if the cell is a vertex.
	 */
	 function setVertex($vertex)
	 {
		$this->vertex = $vertex;
	 }
	 
	/**
	 * Function: isEdge
	 *
	 * Returns true if the cell is an edge.
	 */
	function isEdge()
	{
		return $this->edge;
	}
			
	/**
	 * Function: setEdge
	 * 
	 * Specifies if the cell is an edge. This should only be assigned at
	 * construction of the cell and not be changed during its lifecycle.
	 * 
	 * Parameters:
	 * 
	 * edge - Boolean that specifies if the cell is an edge.
	 */
	 function setEdge($edge)
	 {
		$this->edge = $edge;
	 }
	
	/**
	 * Function: isConnectable
	 *
	 * Returns true if the cell is connectable.
	 */
	function isConnectable()
	{
		return $this->connectable;
	}
	
	/**
	 * Function: setConnectable
	 *
	 * Sets the connectable state.
	 * 
	 * Parameters:
	 * 
	 * connectable - Boolean that specifies the new connectable state.
	 */
	function setConnectable($connectable)
	{
		$this->connectable = $connectable;
	}

	/**
	 * Function: isVisible
	 *
	 * Returns true if the cell is visibile.
	 */
	function isVisible()
	{
		return $this->visible;
	}
	
	/**
	 * Function: setVisible
	 *
	 * Specifies if the cell is visible.
	 * 
	 * Parameters:
	 * 
	 * visible - Boolean that specifies the new visible state.
	 */
	function setVisible($visible)
	{
		$this->visible = $visible;
	}
	
	/**
	 * Function: isCollapsed
	 *
	 * Returns true if the cell is collapsed.
	 */
	function isCollapsed()
	{
		return $this->collapsed;
	}
	
	/**
	 * Function: setCollapsed
	 *
	 * Sets the collapsed state.
	 * 
	 * Parameters:
	 * 
	 * collapsed - Boolean that specifies the new collapsed state.
 	 */
	function setCollapsed($collapsed)
	{
		$this->collapsed = $collapsed;
	}

	/**
	 * Function: getParent
	 *
	 * Returns the cell's parent.
	 */
	function getParent()
	{
		return $this->parent;
	}
			
	/**
	 * Function: setParent
	 *
	 * Sets the parent cell.
	 * 
	 * Parameters:
	 * 
	 * parent - <mxCell> that represents the new parent.
	 */
	 function setParent($parent)
	 {
		$this->parent = $parent;
	}
		
	/**
	 * Function: getTerminal
	 *
	 * Returns the source or target terminal.
	 * 
	 * Parameters:
	 * 
	 * source - Boolean that specifies if the source terminal should be
	 * returned.
	 */
	function getTerminal($source)
	{
		if ($source)
		{
			return $this->source;
		}
		else
		{
			return $this->target;
		}
	}
			
	/**
	 * Function: setTerminal
	 *
	 * Sets the source or target terminal and returns the new terminal.
	 * 
	 * Parameters:
	 * 
	 * terminal - <mxCell> that represents the new source or target terminal.
	 * source - Boolean that specifies if the source or target terminal
	 * should be set.
	 */
	 function setTerminal($terminal, $source)
	 {
	 	if ($source)
	 	{
	 		$this->source = $terminal;
	 	}
	 	else
	 	{
	 		$this->target = $terminal;
	 	}
	 	
	 	return $terminal;
	}
	
	/**
	 * Function: getChildCount
	 *
	 * Returns the number of child cells.
	 */
	function getChildCount()
	{
		return ($this->children == null) ? 0 : sizeof($this->children);
	}

	/**
	 * Function: getIndex
	 *
	 * Returns the index of the specified child in the child array.
	 * 
	 * Parameters:
	 * 
	 * child - Child whose index should be returned.
	 */
	function getIndex($child)
	{
		return mxUtils::indexOf($this->children, $child);
	}

	/**
	 * Function: getChildAt
	 *
	 * Returns the child at the specified index.
	 * 
	 * Parameters:
	 * 
	 * index - Integer that specifies the child to be returned.
	 */
	function getChildAt($index)
	{
		if ($this->children != null)
		{
			return $this->children[$index];
		}
		
		return null;
	}

	/**
	 * Function: insert
	 *
	 * Inserts the specified child into the child array at the specified index
	 * and updates the parent reference of the child. If not childIndex is
	 * specified then the child is appended to the child array. Returns the
	 * inserted child.
	 * 
	 * Parameters:
	 * 
	 * child - <mxCell> to be inserted or appended to the child array.
	 * index - Optional integer that specifies the index at which the child
	 * should be inserted into the child array.
	 */
	function insert($child, $index = null)
	{
		if (isset($child))
		{
			if (!isset($index))
			{
				$index = $this->getChildCount();
				
				if ($child->getParent() === $this)
				{
					$index--;
				}
			} 

			$child->removeFromParent();
			$child->setParent($this);
			
			if ($this->children == null)
			{
				$this->children = array();
				array_push($this->children, $child);
			}
			else
			{
				array_splice($this->children, $index, 0, array($child));
			}
		}
		
		return $child;
	}

	/**
	 * Function: remove
	 *
	 * Removes the child at the specified index from the child array and
	 * returns the child that was removed. Will remove the parent reference of
	 * the child.
	 * 
	 * Parameters:
	 * 
	 * index - Integer that specifies the index of the child to be
	 * removed.
	 */
	function remove($index)
	{
		if ($this->children != null && $index >= 0)
		{
			$child = $this->getChildAt($index);
			
			if ($child != null)
			{
				array_splice($this->children, $index, 1);
				$child->setParent(null);
			}
			
			return $child;
		}
		
		return null;
	}

	/**
	 * Function: removeFromParent
	 *
	 * Removes the cell from its parent.
	 */
	function removeFromParent()
	{
	 	if (isset($this->parent))
	 	{
	 		$index = $this->parent->getIndex($this);
	 		$this->parent->remove($index);
	 	}
	}

	/**
	 * Function: getEdgeCount
	 *
	 * Returns the number of edges in the edge array.
	 */
	function getEdgeCount()
	{
		return ($this->edges == null) ? 0 : sizeof($this->edges);
	}

	/**
	 * Function: getEdgeIndex
	 *
	 * Returns the index of the specified edge in <edges>.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCell> whose index in <edges> should be returned.
	 */
	function getEdgeIndex($edge)
	{
		return mxUtils::indexOf($this->edges, $edge);
	}
	
	/**
	 * Function: getEdgeAt
	 *
	 * Returns the edge at the specified index in <edges>.
	 * 
	 * Parameters:
	 * 
	 * index - Integer that specifies the index of the edge to be returned.
	 */
	function getEdgeAt($index)
	{
		if ($this->edges != null)
		{
			return $this->edges[$index];
		}
		
		return null;
	}

	/**
	 * Function: insertEdge
	 *
	 * Inserts the specified edge into the edge array and returns the edge.
	 * Will update the respective terminal reference of the edge.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCell> to be inserted into the edge array.
	 * outgoing - Boolean that specifies if the edge is outgoing.
	 */
	function insertEdge($edge, $outgoing)
	{
		if (isset($edge))
		{
			$edge->removeFromTerminal($outgoing);
			$edge->setTerminal($this, $outgoing);

			if ($this->edges == null ||
				$edge->getTerminal(!$outgoing) !== $this ||
				mxUtils::indexOf($this->edges, $edge) < 0)
			{
				if ($this->edges == null)
				{
					$this->edges = array();
				}
				
				array_push($this->edges, $edge);
			}
		}
		
		return $edge;
	}

	/**
	 * Function: removeEdge
	 *
	 * Removes the specified edge from the edge array and returns the edge.
	 * Will remove the respective terminal reference from the edge.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCell> to be removed from the edge array.
	 * outgoing - Boolean that specifies if the edge is outgoing.
	 */
	function removeEdge($edge, $outgoing)
	{
		if (isset($edge))
		{
			if ($edge->getTerminal(!$outgoing) !== $this &&
				$this->edges != null)
			{
				$index = $this->getEdgeIndex($edge);
				
				if ($index >= 0)
				{
					array_splice($this->edges, $index, 1);
				}
			}
			
			$edge->setTerminal(null, $outgoing);
		}

		return $edge;
	}

	/**
	 * Function: removeFromTerminal
	 *
	 * Removes the edge from its source or target terminal.
	 * 
	 * Parameters:
	 * 
	 * source - Boolean that specifies if the edge should be removed from its
	 * source or target terminal.
	 */
	function removeFromTerminal($source)
	{
	 	$terminal = $this->getTerminal($source);
	 	
	 	if (isset($terminal))
	 	{
	 		$terminal->removeEdge($this, $source);
	 	}
	}

	/**
	 * Function: getAttribute
	 *
	 * Returns the specified attribute from the user object if it is an XML
	 * node.
	 */
	function getAttribute($key, $defaultValue = null)
	{
		$userObject = $this->getValue();
		
		$value = (is_object($userObject) &&
			$userObject->nodeType == XML_ELEMENT_NODE) ?
			$userObject->getAttribute($key) : null;
			
		if (!isset($value))
		{
			$value = $defaultValue;
		}
		
		return $value;
	}

	/**
	 * Function: setAttribute
	 *
	 * Sets the specified attribute on the user object if it is an XML node.
	 */
	function setAttribute($key, $value)
	{
		$userObject = $this->getValue();
		
		if (is_object($userObject) &&
			$userObject->nodeType == XML_ELEMENT_NODE)
		{
			$userObject->setAttribute($key, $value);
		}
	}
	
	/**
	 * Function: copy
	 *
	 * Returns a clone of the cell. Uses <cloneValue> to clone
	 * the user object.
	 */
	function copy()
	{
	 	$clone = new mxCell($this->copyValue(), null, $this->style);
	 	$clone->vertex = $this->vertex;
	 	$clone->edge = $this->edge;
	 	$clone->connectable = $this->connectable;
	 	$clone->visible = $this->visible;
	 	$clone->collapsed = $this->collapsed;
		
		// Clones the geometry
		if (isset($this->geometry))
		{
			$clone->geometry = $this->geometry->copy();
		}
		
		return $clone;
	}

	/**
	 * Function: copyValue
	 *
	 * Returns a clone of the cell's user object.
	 */
	function copyValue()
	{
		$value = $this->getValue();
		
		if (isset($value))
		{
			if (method_exists($value, "cloneNode"))
			{
				$value = $value->cloneNode(true);
			}
		}
		
		return $value;
	}

}
class mxEventSource
{

	/**
	 * Class: mxEventSource
	 *
	 * Base class for all event sources.
	 * 
	 * Variable: eventListeners
	 *
	 * Holds the registered listeners.
	 */
	var $eventListeners;

	/**
	 * Function: addListener
	 *
	 * Adds a listener for the given event name. Note that the method of the
	 * listener object must have the same name as the event it's being added
	 * for. This is different from other language implementations of this
	 * class.
	 */
	function addListener($name, $listener)
	{
	 	if ($this->eventListeners == null)
	 	{
	 		$this->eventListeners = array();
	 	}
	 	
	 	array_push($this->eventListeners, $name);
	 	array_push($this->eventListeners, $listener);
	}

	/**
	 * Function: fireEvent
	 *
	 * Fires the event for the specified name.
	 */
	function fireEvent($event)
	{
	 	if ($this->eventListeners != null)
	 	{
	 		$name = $event->getName();
	 		
	 		for ($i = 0; $i < sizeof($this->eventListeners); $i += 2)
	 		{
	 			if ($this->eventListeners[$i] == $name)
	 			{
		 			$this->eventListeners[$i+1]->$name($event);
	 			}
	 		}
	 	}
	}

}
class mxEvent
{

	/**
	 * Class: mxEvent
	 *
	 * Defines global constants.
	 * 
	 * Variable: GRAPH_MODEL_CHANGED
	 *
	 * Defines the name of the graphModelChanged event.
	 */
	public static $GRAPH_MODEL_CHANGED = "graphModelChanged";

	/**
	 * Variable: SCALE
	 *
	 * Defines the name of the scale event.
	 */
	public static $SCALE = "scale";

	/**
	 * Variable: TRANSLATE
	 *
	 * Defines the name of the translate event.
	 */
	public static $TRANSLATE = "translate";

}

class mxGraphModel extends mxEventSource
{
	
	/**
	 * Class: mxGraphModel
	 * 
	 * Cells are the elements of the graph model. They represent the state
	 * of the groups, vertices and edges in a graph.
	 *
	 * Fires a graphModelChanged event after each group of changes.
	 * 
	 * Variable: root
	 * 
	 * Holds the root cell, which in turn contains the cells that represent the
	 * layers of the diagram as child cells. That is, the actual elements of the
	 * diagram are supposed to live in the third generation of cells and below.
	 */
	var $root;
		
	/**
	 * Variable: cells
	 * 
	 * Maps from Ids to cells.
	 */
	var $cells;
	
	/**
	 * Variable: maintainEdgeParent
	 * 
	 * Specifies if edges should automatically be moved into the nearest common
	 * ancestor of their terminals. Default is true.
	 */
	var $maintainEdgeParent = true;

	/**
	 * Variable: createIds
	 * 
	 * Specifies if the model should automatically create Ids for new cells.
	 * Default is true.
	 */
	var $createIds = true;
	
	/**
	 * Variable: nextId
	 * 
	 * Specifies the next Id to be created. Default is 0.
	 */
	var $nextId = 0;

	/**
	 * Variable: updateLevel
	 * 
	 * Counter for the depth of nested transactions. Each call to <beginUpdate>
	 * will increment this number and each call to <endUpdate> will decrement
	 * it. When the counter reaches 0, the transaction is closed and the
	 * respective events are fired. Initial value is 0.
	 */
	var $updateLevel = 0;

	/**
	 * Constructor: mxGraphModel
	 *
	 * Constructs a new graph model using the specified root cell.
	 */
	function __construct($root = null)
	{
	 	if (isset($root))
	 	{
			$this->setRoot($root);
	 	}
	 	else
	 	{
	 		$this->clear();
	 	}
	}
		
	/**
	 * Function: clear
	 *
	 * Sets a new root using <createRoot>.
	 */
	function clear()
	{
		$this->setRoot($this->createRoot());
	}

	/**
	 * Function: createRoot
	 *
	 * Creates a new root cell with a default layer (child 0).
	 */
	function createRoot()
	{
		$root = new mxCell();
		$root->insert(new mxCell());
			
		return $root;
	}
	
	/**
	 * Function: getCells
	 * 
	 * Returns the internal lookup table that is used to map from Ids to cells.
	 */
	function getCells()
	{
	 	return $this->cells;
	}

	/**
	 * Function: setRoot
	 *
	 */
	function getCell($id)
	{
		$result = null;

		if ($this->cells != null)
		{
			$result = mxUtils::getValue($this->cells, $id);
		}

		return $result;
	}
	
	/**
	 * Function: getRoot
	 * 
	 * Returns the root of the model.
	 */
	function getRoot()
	{
	 	return $this->root;
	}
	
	/**
	 * Function: setRoot
	 * 
	 * Sets the <root> of the model using <mxRootChange> and adds the change to
	 * the current transaction. This resets all datastructures in the model and
	 * is the preferred way of clearing an existing model. Returns the new
	 * root.
	 *
	 * Parameters:
	 * 
	 * root - <mxCell> that specifies the new root.
	 */
	function setRoot($root)
	{
		$oldRoot = $this->root;
		
	 	$this->beginUpdate();
	 	try
	 	{
			$this->root = $root;
			$this->nextId = 0;
			$this->cells = null;
			
			$this->cellAdded($root);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
		
		return $oldRoot;
	}

	//
	// Cell Cloning
	//

	/**
	 * Function: cloneCell
	 * 
	 * Returns a deep clone of the given <mxCell> (including
	 * the children) which is created using <cloneCells>.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> to be cloned.
	 */
	function cloneCell($cell)
	{
		$clones = $this->cloneCells(array($cell), true);
		
		return $clones[0];
	}

	/**
	 * Function: cloneCells
	 * 
	 * Returns an array of clones for the given array of <mxCells>.
	 * Depending on the value of includeChildren, a deep clone is created for
	 * each cell. Connections are restored based if the corresponding
	 * cell is contained in the passed in array.
	 *
	 * Parameters:
	 * 
	 * cells - Array of <mxCell> to be cloned.
	 * includeChildren - Boolean indicating if the cells should be cloned
	 * with all descendants.
	 */
	function cloneCells($cells, $includeChildren=true)
	{
		$mapping = array();
		$clones = array();
		
		for ($i=0; $i<sizeof($cells); $i++)
		{
			$cell = $cells[$i];
			$clne = $this->cloneCellImpl($cell, $mapping, $includeChildren);
			array_push($clones, $clne);
		}
		
		for ($i=0; $i<sizeof($clones); $i++)
		{
			$this->restoreClone($clones[$i], $cells[$i], $mapping);
		}
		
		return $clones;
	}
				
	/**
	 * Function: cloneCellImpl
	 * 
	 * Inner helper method for cloning cells recursively.
	 */
	function cloneCellImpl($cell, $mapping, $includeChildren)
	{
		$clne = $this->cellCloned($cell);
		
		// Stores the clone in the lookup under the
		// cell path for the original cell
		$mapping[mxCellPath::create($cell)] = $clne;
		
		if ($includeChildren)
		{
			$childCount = $this->getChildCount($cell);

			for ($i = 0; $i < $childCount; $i++)
			{
				$child = $this->getChildAt($cell, $i);
				$cloneChild = $this->cloneCellImpl($child, $mapping, true);
				$clne->insert($cloneChild);
			}
		}
		
		return $clne;
	}

	/**
	 * Function: cellCloned
	 * 
	 * Hook for cloning the cell. This returns cell->copy() or
	 * any possible exceptions.
	 */
	function cellCloned($cell)
	{
		return $cell->copy();
	}
	
	/**
	 * Function: restoreClone
	 * 
	 * Inner helper method for restoring the connections in
	 * a network of cloned cells.
	 */
	function restoreClone($clne, $cell, $mapping)
	{
		$source = $this->getTerminal($cell, true);
		
		if ($source != null)
		{
			$tmp = $mapping[mxCellPath::create($source)];
			
			if ($tmp != null)
			{
				$tmp->insertEdge($clne, true);
			}
		}
		
		$target = $this->getTerminal($cell, false);
		
		if ($target != null)
		{
			$tmp = $mapping[mxCellPath::create($target)];
			
			if ($tmp != null)
			{
				$tmp->insertEdge($clne, false);
			}
		}
		
		$childCount = $this->getChildCount($clne);
		
		for ($i = 0; $i < $childCount; $i++)
		{
			$this->restoreClone($this->getChildAt($clne, $i),
				$this->getChildAt($cell, $i), $mapping);
		}
	}
	
	/**
	 * Function: isAncestor
	 * 
	 * Returns true if the given parent is an ancestor of the given child.
	 *
	 * Parameters:
	 * 
	 * parent - <mxCell> that specifies the parent.
	 * child - <mxCell> that specifies the child.
	 */
	function isAncestor($parent, $child)
	{
		while ($child != null && $child != $parent)
		{
			$child = $this->getParent($child);
		}

		return $child === $parent;
	}

	/**
	 * Function: contains
	 * 
	 * Returns true if the model contains the given <mxCell>.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that specifies the cell.
	 */
	function contains($cell)
	{
		return $this->isAncestor($this->root, $cell);
	}
	
	/**
	 * Function: getParent
	 * 
	 * Returns the parent of the given cell.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose parent should be returned.
	 */
	function getParent($cell)
	{
		if ($cell != null)
		{
			return $cell->getParent();
		}
		
		return null;
	}

	/**
	 * Function: add
	 * 
	 * Adds the specified child to the parent at the given index using
	 * <mxChildChange> and adds the change to the current transaction. If no
	 * index is specified then the child is appended to the parent's array of
	 * children. Returns the inserted child.
	 * 
	 * Parameters:
	 * 
	 * parent - <mxCell> that specifies the parent to contain the child.
	 * child - <mxCell> that specifies the child to be inserted.
	 * index - Optional integer that specifies the index of the child.
	 */
	function add($parent, $child, $index = null)
	{
		if ($child !== $parent && $child != null && $parent != null)
		{
			$parentChanged = $parent !== $this->getParent($child);
			
		 	$this->beginUpdate();
		 	try
		 	{
				$parent->insert($child, $index);
				$this->cellAdded($child);
			}
			catch (Exception $e)
			{
				$this->endUpdate();
				throw($e);
			}
			$this->endUpdate();
			
			if ($parentChanged && $this->maintainEdgeParent)
			{
				$this->updateEdgeParents($child);
			}
		}
		
		return $child;
	}

	/**
	 * Function: cellAdded
	 * 
	 * Inner callback to update <cells> when a cell has been added. This
	 * implementation resolves collisions by creating new Ids.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that specifies the cell that has been added.
	 */
	function cellAdded($cell)
	{
	 	if ($cell->getId() == null && $this->createIds)
	 	{
	 		$cell->setId($this->createId($cell));
	 	}
	 	
	 	if ($cell->getId() != null)
	 	{
	 		$collision = $this->getCell($cell->getId());
	 		
	 		if ($collision != $cell)
	 		{
	 			while ($collision != null)
	 			{
	 				$cell->setId($this->createId($cell));
	 				$collision = $this->getCell($cell->getId());
	 			}
	 			
	 			if ($this->cells == null)
	 			{
	 				$this->cells = array();
	 			}
	 			
	 			$this->cells[$cell->getId()] = $cell;
	 		}
	 	}

		// Makes sure IDs of deleted cells are not reused
		if (is_numeric($cell->getId()))
		{
			$this->nextId = max($this->nextId, $cell->getId() + 1);
		}
		
		$childCount = $this->getChildCount($cell);
		
		for ($i = 0; $i < $childCount; $i++)
		{
			$this->cellAdded($this->getChildAt($cell, $i));
		}
	}
			
	/**
	 * Function: createId
	 * 
	 * Hook method to create an Id for the specified cell. This
	 * implementation increments <nextId>.
	 *
	 * Parameters:
	 *
	 * cell - <mxCell> to create the Id for.
	 */
	function createId($cell)
	{
		$id = $this->nextId;
		$this->nextId++;
		
		return $id;
	}

	/**
	 * Function: updateEdgeParents
	 * 
	 * Updates the parent for all edges that are connected to cell or one of
	 * its descendants using <updateEdgeParent>.
	 */
	function updateEdgeParents($cell, $root = null)
	{
		// Gets the topmost node of the hierarchy
		$root = $root || $this->getRoot();
		
		// Updates edges on children first
		$childCount = $this->getChildCount($cell);
		
		for ($i = 0; $i < $childCount; $i++)
		{
			$child = $this->getChildAt($cell, $i);
			$this->updateEdgeParents($child, $root);
		}
		
		// Updates the parents of all connected edges
		$edgeCount = $this->getEdgeCount($cell);
		$edges = array();
		
		for ($i = 0; $i < $edgeCount; $i++)
		{
			array_push($edges, $this->getEdgeAt($cell, $i));
		}
		
		foreach ($edges as $edge)
		{
			// Updates edge parent if edge and child have
			// a common root node (does not need to be the
			// model root node)
			if ($this->isAncestor($root, $edge))
			{
				$this->updateEdgeParent($edge, $root);
			}
		}
	}
	
	/**
	 * Function: updateEdgeParent
	 *
	 * Inner callback to update the parent of the specified <mxCell> to the
	 * nearest-common-ancestor of its two terminals.
	 *
	 * Parameters:
	 * 
	 * edge - <mxCell> that specifies the edge.
	 * root - <mxCell> that represents the current root of the model.
	 */
	function updateEdgeParent($edge, $root)
	{
		$source = $this->getTerminal($edge, true);
		$target = $this->getTerminal($edge, false);
		$cell = null;
		
		// Uses the first non-relative descendants of the source terminal
		while ($source != null && !$this->isEdge($source) &&
			$source->geometry != null && $source->geometry->relative)
		{
			$source = $this->getParent($source);
		}
		
		// Uses the first non-relative descendants of the target terminal
		while ($target != null && !$this->isEdge($target) &&
			$target->geometry != null && $target->geometry->relative)
		{
			$target = $this->getParent($target);
		}
		
		if ($this->isAncestor($root, $source) &&
			$this->isAncestor($root, $target))
		{
			if ($source === $target)
			{
				$cell = $this->getParent($source);
			}
			else
			{
				$cell = $this->getNearestCommonAncestor($source, $target);
			}
			
			if ($cell != null &&
				$this->getParent($cell) !== $this->root &&
				$this->getParent($edge) !== $cell)
			{
				$geo = $this->getGeometry($edge);
				
				if ($geo != null)
				{
					$origin1 = $this->getOrigin($this->getParent($edge));
					$origin2 = $this->getOrigin($cell);
					
					$dx = $origin2->x - $origin1->x;
					$dy = $origin2->y - $origin1->y;
					
					$geo = $geo->copy();
					$geo->translate(-$dx, -$dy);
					$this->setGeometry($edge, $geo);
				}
				
				$this->add($cell, $edge, $this->getChildCount($cell));
			}
		}
	}

	/**
	 * Function: getOrigin
	 * 
	 * Returns the absolute, cummulated origin for the children inside the
	 * given parent as an <mxPoint>.
	 */
	function getOrigin($cell)
	{
		$result = null;
		
		if ($cell != null)
		{
			$result = $this->getOrigin($this->getParent($cell));
			
			if (!$this->isEdge($cell))
			{
				$geo = $this->getGeometry($cell);
				
				if ($geo != null)
				{
					$result->x += $geo->x;
					$result->y += $geo->y;
				}
			}
		}
		else
		{
			$result = new mxPoint();
		}
		
		return $result;
	}
	
	/**
	 * Function: getNearestCommonAncestor
	 * 
	 * Returns the nearest common ancestor for the specified cells.
	 *
	 * Parameters:
	 * 
	 * cell1 - <mxCell> that specifies the first cell in the tree.
	 * cell2 - <mxCell> that specifies the second cell in the tree.
	 */
	function getNearestCommonAncestor($cell1, $cell2)
	{
		if ($cell1 != null && $cell2 != null)
		{		
			// Creates the cell path for the second cell
			$path = mxCellPath::create($cell2);
			
			if (isset($path) && strlen($path) > 0)
			{
				// Bubbles through the ancestors of the target
				// cell to find the nearest common ancestor.
				$cell = $cell1;
				$current = mxCellPath::create($cell);
				
				while ($cell != null)
				{
					$parent = $this->getParent($cell);

					// Checks if the cell path is equal to the beginning
					// of the given cell path
					if (strpos($path, $current.mxCellPath::$PATH_SEPARATOR) === 0 &&
						$parent != null)
					{
						return $cell;
					}
					
					$current = mxCellPath::getParentPath($current);
					$cell = $parent;
				}
			}
		}
		
		return null;
	}

	/**
	 * Function: remove
	 * 
	 * Removes the specified cell from the model using <mxChildChange> and adds
	 * the change to the current transaction. This operation will remove the
	 * cell and all of its children from the model. Returns the removed cell.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that should be removed.
	 */
	function remove($cell)
	{
	 	$this->beginUpdate();
	 	try
	 	{
			if ($cell === $this->root)
			{
				$this->setRoot(null);
			}
			else
			{
				$cell->removeFromParent();
            }
            
            $this->cellRemoved($cell);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();

		return $cell;
	}

	/**
	 * Function: cellRemoved
	 * 
	 * Inner callback to update <cells> when a cell has been removed.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that specifies the cell that has been removed.
	 */
	function cellRemoved($cell)
	{
		if ($cell != null)
		{
			$childCount = $this->getChildCount($cell);
			
			for ($i = 0; $i < $childCount; $i++)
			{
				$this->cellRemoved($this->getChildAt($cell, $i));
			}
			
			$cell->removeFromTerminal(true);
			$cell->removeFromTerminal(false);

			if ($this->cells != null && $cell->getId() != null)
			{
				$this->cells[$cell->getId()] = null;
			}
		}
	}

	/**
	 * Function: getChildCount
	 *
	 * Returns the number of children in the given cell.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose number of children should be returned.
	 */
	function getChildCount($cell)
	{
	 	return ($cell != null) ? $cell->getChildCount() : 0;
	}
	
	/**
	 * Function: getChildAt
	 *
	 * Returns the child of the given <mxCell> at the given index.
	 * 
	 * Parameters:
	 * 
	 * cell - <mxCell> that represents the parent.
	 * index - Integer that specifies the index of the child to be returned.
	 */
	function getChildAt($cell, $index)
	{
		if ($cell != null)
		{
			return $cell->getChildAt($index);
		}
		
		return null;
	}

	/**
	 * Function: getTerminal
	 * 
	 * Returns the source or target <mxCell> of the given edge depending on the
	 * value of the boolean parameter.
	 *
	 * Parameters:
	 * 
	 * edge - <mxCell> that specifies the edge.
	 * cource - Boolean indicating which end of the edge should be returned.
	 */
	function getTerminal($edge, $cource)
	{
		if ($edge != null)
		{
			return $edge->getTerminal($cource);
		}
		
	 	return null;
	}
	
	/**
	 * Function: setTerminal
	 * 
	 * Sets the source or target terminal of the given <mxCell> using
	 * <mxTerminalChange> and adds the change to the current transaction.
	 * This implementation updates the parent of the edge using <updateEdgeParent>
	 * if required.
	 *
	 * Parameters:
	 * 
	 * edge - <mxCell> that specifies the edge.
	 * terminal - <mxCell> that specifies the new terminal.
	 * isSource - Boolean indicating if the terminal is the new source or
	 * target terminal of the edge.
	 */
	function setTerminal($edge, $terminal, $source)
	{
		$previous = $edge->getTerminal($source);
		
		$this->beginUpdate();
		try
		{
			if ($terminal != null)
			{
				$terminal->insertEdge($edge, $source);
			}
			else if ($previous != null)
			{
				$previous->removeEdge($edge, $source);
			}
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();

        if ($this->maintainEdgeParent)
        {
			$this->updateEdgeParent($edge, $this->getRoot());
        }

		return $terminal;
	}
	
	/**
	 * Function: setTerminals
	 * 
	 * Sets the source and target <mxCell> of the given <mxCell> in a single
	 * transaction using <setTerminal> for each end of the edge.
	 *
	 * Parameters:
	 * 
	 * edge - <mxCell> that specifies the edge.
	 * source - <mxCell> that specifies the new source terminal.
	 * target - <mxCell> that specifies the new target terminal.
	 */
	function setTerminals($edge, $source, $target)
	{
		$this->beginUpdate();
		try
		{
			$this->setTerminal($edge, $source, true);
			$this->setTerminal($edge, $target, false);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	}
	
	/**
	 * Function: getEdgeCount
	 * 
	 * Returns the number of distinct edges connected to the given cell.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that represents the vertex.
	 */
	function getEdgeCount($cell)
	{
	 	return ($cell != null) ? $cell->getEdgeCount() : 0;
	}
	
	/**
	 * Function: getEdgeAt
	 * 
	 * Returns the edge of cell at the given index.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that specifies the vertex.
	 * index - Integer that specifies the index of the edge
	 * to return.
	 */
	function getEdgeAt($cell, $index)
	{
	 	return ($cell != null) ? $cell->getEdgeAt($index) : null;
	}

	/**
	 * Function: getEdges
	 * 
	 * Returns all distinct edges connected to this cell as an array of
	 * <mxCells>. The return value should be only be read.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that specifies the cell.
	 */
	function getEdges($cell)
	{
		return ($cell != null) ? $cell->edges : null;
	}
	
	/**
	 * Function: isVertex
	 * 
	 * Returns true if the given cell is a vertex.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that represents the possible vertex.
	 */
	function isVertex($cell)
	{
	 	return ($cell != null) ? $cell->isVertex() : null;
	}

	/**
	 * Function: isEdge
	 * 
	 * Returns true if the given cell is an edge.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> that represents the possible edge.
	 */
	function isEdge($cell)
	{
	 	return ($cell != null) ? $cell->isEdge() : null;
	}

	/**
	 * Function: isConnectable
	 * 
	 * Returns true if the given <mxCell> is connectable. If <edgesConnectable>
	 * is false, then this function returns false for all edges else it returns
	 * the return value of <mxCell.isConnectable>.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose connectable state should be returned.
	 */
	function isConnectable($cell)
	{
	 	return ($cell != null) ? $cell->isConnectable() : false;
	}

	/**
	 * Function: getValue
	 * 
	 * Returns the user object of the given <mxCell> using <mxCell.getValue>.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose user object should be returned.
	 */
	function getValue($cell)
	{
	 	return ($cell != null) ? $cell->getValue() : null;
	}
	
	/**
	 * Function: setValue
	 * 
	 * Sets the user object of then given <mxCell> using <mxValueChange>
	 * and adds the change to the current transaction.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose user object should be changed.
	 * value - Object that defines the new user object.
	 */
	function setValue($cell, $value)
	{
	 	$this->beginUpdate();
	 	try
	 	{
		 	$cell->setValue($value);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	 	
	 	return $value;
	}

	/**
	 * Function: getGeometry
	 * 
	 * Returns the <mxGeometry> of the given <mxCell>.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose geometry should be returned.
	 */
	function getGeometry($cell)
	{
		if ($cell != null)
		{
			return $cell->getGeometry();
		}
		
		return null;
	}

	/**
	 * Function: setGeometry
	 * 
	 * Sets the <mxGeometry> of the given <mxCell>. The actual update
	 * of the cell is carried out in <geometryForCellChanged>. The
	 * <mxGeometryChange> action is used to encapsulate the change.
	 * 
	 * Parameters:
	 * 
	 * cell - <mxCell> whose geometry should be changed.
	 * geometry - <mxGeometry> that defines the new geometry.
	 */
	function setGeometry($cell, $geometry)
	{
		$this->beginUpdate();
		try
		{	
		 	$cell->setGeometry($geometry);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	 	
	 	return $geometry;
	}

	/**
	 * Function: getStyle
	 * 
	 * Returns the style of the given <mxCell>.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose style should be returned.
	 */
	function getStyle($cell)
	{
	 	return ($cell != null) ? $cell->getStyle() : null;
	}

	/**
	 * Function: setStyle
	 * 
	 * Sets the style of the given <mxCell> using <mxStyleChange> and
	 * adds the change to the current transaction.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose style should be changed.
	 * style - String of the form stylename[;key=value] to specify
	 * the new cell style.
	 */
	function setStyle($cell, $style)
	{
 		$this->beginUpdate();
 		try
 		{
		 	$cell->setStyle($style);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	 	
	 	return $style;
	}
	
	/**
	 * Function: isCollapsed
	 * 
	 * Returns true if the given <mxCell> is collapsed.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose collapsed state should be returned.
	 */
	function isCollapsed($cell)
	{
	 	return ($cell != null) ? $cell->isCollapsed() : false;
	}
	
	/**
	 * Function: setCollapsed
	 * 
	 * Sets the collapsed state of the given <mxCell> using <mxCollapseChange>
	 * and adds the change to the current transaction.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose collapsed state should be changed.
	 * collapsed - Boolean that specifies the new collpased state.
	 */
	function setCollapsed($cell, $isCollapsed)
	{
	 	$this->beginUpdate();
	 	try
	 	{
		 	$cell->setCollapsed($isCollapsed);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	 	
	 	return $isCollapsed;
	}

	/**
	 * Function: isVisible
	 * 
	 * Returns true if the given <mxCell> is visible.
	 * 
	 * Parameters:
	 * 
	 * cell - <mxCell> whose visible state should be returned.
	 */
	function isVisible($cell)
	{
	 	return ($cell != null) ? $cell->isVisible() : false;
	}

	/**
	 * Function: setVisible
	 * 
	 * Sets the visible state of the given <mxCell> using <mxVisibleChange> and
	 * adds the change to the current transaction.
	 *
	 * Parameters:
	 * 
	 * cell - <mxCell> whose visible state should be changed.
	 * visible - Boolean that specifies the new visible state.
	 */
	function setVisible($cell, $visible)
	{
	 	$this->beginUpdate();
	 	try
	 	{
		 	$cell->setVisible($visible);
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	 	
	 	return $isVisible;
	}

	/**
	 * Function: mergeChildren
	 * 
	 * Merges the children of the given cell into the given target cell inside
	 * this model. All cells are cloned unless there is a corresponding cell in
	 * the model with the same id, in which case the source cell is ignored and
	 * all edges are connected to the corresponding cell in this model. Edges
	 * are considered to have no identity and are always cloned unless the
	 * cloneAllEdges flag is set to false, in which case edges with the same
	 * id in the target model are reconnected to reflect the terminals of the
	 * source edges.
	 */
	function mergeChildren($from, $to, $cloneAllEdges = true)
	{
		$this->beginUpdate();
		try
		{
			$mapping = array();
			$this->mergeChildrenImpl($from, $to, $cloneAllEdges, $mapping);
			
			// Post-processes all edges in the mapping and
			// reconnects the terminals to the corresponding
			// cells in the target model
			foreach ($mapping as $key => $cell)
			{
				$terminal = $this->getTerminal($cell, $true);
				
				if (isset($terminal))
				{
					$terminal = $mapping[mxCellPath::create($terminal)];
					$this->setTerminal($cell, $terminal, $true);
				}
				
				$terminal = $this->getTerminal(cell, false);
				
				if (isset($terminal))
				{
					$terminal = $mapping[mxCellPath::create($terminal)];
					$this->setTerminal($cell, $terminal, false);
				}
			}
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	}

	/**
	 * Function: mergeChildrenImpl
	 * 
	 * Clones the children of the source cell into the given target cell in
	 * this model and adds an entry to the mapping that maps from the source
	 * cell to the target cell with the same id or the clone of the source cell
	 * that was inserted into this model.
	 */
	function mergeChildrenImpl($from, $to, $cloneAllEdges, $mapping)
	{
		$this->beginUpdate();
		try
		{
			$childCount = $from->getChildCount();
			
			for ($i = 0; $i < $childCount; $i++)
			{
				$cell = $from->getChildAt($i);
				$id = $cell->getId();
				$target = (isset($d) && (!$this->isEdge($cell) || !$cloneAllEdges)) ?
						$this->getCell($id) : null;
				
				// Clones and adds the child if no cell exists for the id
				if (!isset($target))
				{
					$clone = $cell->clone();
					$clone->setId($id);
					
					// Sets the terminals from the original cell to the clone
					// because the lookup uses strings not cells in PHP
					$clone->setTerminal($cell->getTerminal(true), true);
					$clone->setTerminal($cell->getTerminal(false), false);
											
					// Do *NOT* use model.add as this will move the edge away
					// from the parent in updateEdgeParent if maintainEdgeParent
					// is enabled in the target model
					$target = $to->insert($clone);
					$this->cellAdded($target);
				}
				
				// Stores the mapping for later reconnecting edges
				$mapping[mxCellPath::create($cell)] = $target;
				
				// Recurses
				$this->mergeChildrenImpl($cell, $target, $cloneAllEdges, $mapping);
			}
		}
		catch (Exception $e)
		{
			$this->endUpdate();
			throw($e);
		}
		$this->endUpdate();
	}

	/**
	 * Function: beginUpdate
	 * 
	 * Increments the <updateLevel> by one. The event notification
	 * is queued until <updateLevel> reaches 0 by use of
	 * <endUpdate>.
	 */
	function beginUpdate()
	{
		$this->updateLevel++;
	}

	/**
	 * Function: endUpdate
	 * 
	 * Decrements the <updateLevel> by one and fires a notification event if
	 * the <updateLevel> reaches 0. This function indirectly fires a
	 * notification.
	 */
	function endUpdate()
	{
		$this->updateLevel--;

		if ($this->updateLevel == 0)
		{
			$this->fireEvent(new mxEventObject(mxEvent::$GRAPH_MODEL_CHANGED));
		}
	}

	/**
	 * Function: getDirectedEdgeCount
	 * 
	 * Returns the number of incoming or outgoing edges, ignoring the given
	 * edge.
	 * 
	 * Parameters:
	 * 
	 * cell - <mxCell> whose edge count should be returned.
	 * outgoing - Boolean that specifies if the number of outgoing or
	 * incoming edges should be returned.
	 * ignoredEdge - <mxCell> that represents an edge to be ignored.
	 */
	function getDirectedEdgeCount($cell, $outgoing, $ignoredEdge = null)
	{
		$count = 0;
		$edgeCount = $this->getEdgeCount($cell);

		for ($i = 0; $i < $edgeCount; $i++)
		{
			$edge = $this->getEdgeAt($cell, $i);
			
			if ($edge !== $ignoredEdge &&
				$this->getTerminal($edge, $outgoing) === $cell)
			{
				$count++;
			}
		}
		
		return $count;
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
interface mxPerimeterFunction
{

	/**
	 * Interface: mxPerimeterFunction
	 * 
	 * Defines the requirements for a perimeter function.
	 * 
	 * Function: apply
	 * 
	 * Implements a perimeter function.
	 *
	 * Parameters:
	 *
	 * bounds - <mxRectangle> that represents the absolute bounds of the
	 * vertex.
	 * vertex - <mxCellState> that represents the vertex.
	 * next - <mxPoint> that represents the nearest neighbour point on the
	 * given edge.
	 * orthogonal - Boolean that specifies if the orthogonal projection onto
	 * the perimeter should be returned. If this is false then the intersection
	 * of the perimeter and the line between the next and the center point is
	 * returned.
	 */
	public function apply($bounds, $vertex, $next, $orthogonal);

}

/**
 * Class: mxRectanglePerimeter
 *
 * Implements a rectangular perimeter for the given bounds.
 */
class mxRectanglePerimeter implements mxPerimeterFunction
{

	/**
	 *
	 */
	public function apply($bounds, $vertex, $next, $orthogonal)
	{
		$cx = $bounds->x + $bounds->width / 2;
		$cy = $bounds->y + $bounds->height / 2;
		$dx = $next->x - $cx;
		$dy = $next->y - $cy;
		$alpha = atan2($dy, $dx);
		$p = new mxPoint(0, 0);
		$pi = pi();
		$pi2 = $pi / 2;
		$beta = $pi2 - $alpha;
		$t = atan2($bounds->height, $bounds->width);
		
		if ($alpha < - $pi + $t || $alpha > $pi - $t)
		{
			// Left side
			$p->x = $bounds->x;
			$p->y = $cy - $bounds->width * tan($alpha) / 2;
		}
		else if ($alpha < -$t)
		{
			// Top side
			$p->y = $bounds->y;
			$p->x = $cx - $bounds->height * tan($beta) / 2;
		}
		else if ($alpha < $t)
		{
			// Right side
			$p->x = $bounds->x + $bounds->width;
			$p->y = $cy + $bounds->width * tan($alpha) / 2;
		}
		else
		{
			// Bottom side
			$p->y = $bounds->y + $bounds->height;
			$p->x = $cx + $bounds->height * tan($beta) / 2;			
		}

		if ($orthogonal)
		{
			if ($next->x >= $bounds->x &&
				$next->x <= $bounds->x + $bounds->width)
			{
				$p->x = $next->x;
			}
			else if ($next->y >= $bounds->y &&
			  	$next->y <= $bounds->y + $bounds->height)
			{
				$p->y = $next->y;
			}
			
			if ($next->x < $bounds->x)
			{
				$p->x = $bounds->x;
			}
			else if ($next->x > $bounds->x + $bounds->width)
			{
				$p->x = $bounds->x + $bounds->width + 1;
			}
			
			if ($next->y < $bounds->y)
			{
				$p->y = $bounds->y;
			}
			else if ($next->y > $bounds->y + $bounds->height)
			{
				$p->y = $bounds->y + $bounds->height + 1;
			}
		}
		
		return $p;
	}

}

/**
 * Class: mxEllipsePerimeter
 * 
 * Implements an elliptic perimeter. See <RectanglePerimeter>
 * for a description of the parameters.
 */
class mxEllipsePerimeter implements mxPerimeterFunction
{

	/**
	 *
	 */
	public function apply($bounds, $vertex, $next, $orthogonal)
	{
		$x = $bounds->x;
		$y = $bounds->y;
		$a = $bounds->width / 2;
		$b = $bounds->height / 2;
		$cx = $x + $a;
		$cy = $y + $b;
		$px = $next->x;
		$py = $next->y;
		
		// Calculates straight line equation through
		// point and ellipse center y = d * x + h
		$dx = (int) ($px - $cx);
		$dy = (int) ($py - $cy);
		
		if ($dx == 0 && $dy != 0)
		{
			return new mxPoint($cx, $cy + $b * $dy / abs($dy));
		}
		else if ($dx == 0 && $dy == 0)
		{
			return new mxPoint($px, $py);
		}

		if ($orthogonal)
		{
			if ($py >= $y && $py <= $y + $bounds->height)
			{
				$ty = $py - $cy;
				$tx = sqrt($a*$a*(1-($ty*$ty)/($b*$b)));
				
				if (is_nan($tx))
				{
					$tx = 0;
				}
				
				if ($px <= $x)
				{
					$tx = -$tx;
				}
				
				return new mxPoint($cx+$tx, $py);
			}
			
			if ($px >= $x && $px <= $x + $bounds->width)
			{
				$tx = $px - $cx;
				$ty = sqrt($b*$b*(1-($tx*$tx)/($a*$a)));
				
				if (is_nan($ty))
				{
					$ty = 0;
				}
				
				if ($py <= $y)
				{
					$ty = -$ty;	
				}
				
				return new mxPoint($px, $cy + $ty);
			}
		}
		
		// Calculates intersection
		$d = $dy / $dx;
		$h = $cy - $d * $cx;
		$e = $a * $a * $d * $d + $b * $b;
		$f = -2 * $cx * $e;
		$g = $a * $a * $d * $d * $cx * $cx +
				$b * $b * $cx * $cx -
				$a * $a * $b * $b;
		$det = sqrt($f * $f - 4 * $e * $g);
		
		// Two solutions (perimeter points)
		$xout1 = (-$f + $det) / (2 * $e);
		$xout2 = (-$f - $det) / (2 * $e);
		$yout1 = $d * $xout1 + $h;
		$yout2 = $d * $xout2 + $h;
		$dist1 = sqrt(pow($xout1 - $px, 2)
					+ pow($yout1 - $py, 2));
		$dist2 = sqrt(pow($xout2 - $px, 2)
					+ pow($yout2 - $py, 2));

		// Correct solution
		$xout = 0;
		$yout = 0;
		if ($dist1 < $dist2)
		{
			$xout = $xout1;
			$yout = $yout1;
		}
		else
		{
			$xout = $xout2;
			$yout = $yout2;
		}
		
		return new mxPoint($xout, $yout);
	}

}

/**
 * Class: mxRhombusPerimeter
 * 
 * Implements a rhombus (aka diamond) perimeter. See <RectanglePerimeter>
 * for a description of the parameters.
 */
class mxRhombusPerimeter implements mxPerimeterFunction
{

	/**
	 *
	 */
	public function apply($bounds, $vertex, $next, $orthogonal)
	{
		$x = $bounds->x;
		$y = $bounds->y;
		$w = $bounds->width;
		$h = $bounds->height;
		
		$cx = $x + $w / 2;
		$cy = $y + $h / 2;
		
		$px = $next->x;
		$py = $next->y;
		
		// Special case for intersecting the diamond's corners
		if ($cx == $px)
		{
			if ($cy > $py)
			{
				return new mxPoint($cx, $y); // top
			}
			else
			{
				return new mxPoint($cx, $y + $h); // bottom
			}
		}
		else if ($cy == $py)
		{
			if ($cx > $px)
			{
				return new mxPoint($x, $cy); // left
			}
			else
			{
				return new mxPoint($x + $w, $cy); // right
			}
		}
		
		$tx = $cx;
		$ty = $cy;
		
		if ($orthogonal)
		{
			if ($px >= $x && $px <= $x + $w)
			{
				$tx = $px;
			}
			else if ($py >= $y && $py <= $y + $h)
			{
				$ty = $py;
			}
		}
		
		// In which quadrant will the intersection be?
		// set the slope and offset of the border line accordingly
		if ($px < $cx)
		{
			if ($py < $cy)
			{
				return mxUtils::intersection($px, $py,
					$tx, $ty, $cx, $y, $x, $cy);
			}
			else
			{
				return mxUtils::intersection($px, $py,
					$tx, $ty, $cx, $y + $h, $x, $cy);
			}
		}
		else if ($py < $cy)
		{
			return mxUtils::intersection($px, $py,
				$tx, $ty, $cx, $y, $x + $w, $cy);
		}
		else
		{
			return mxUtils::intersection($px, $py,
				$tx, $ty, $cx, $y + $h, $x + $w, $cy);
		}
	}

}

/**
 * Class: mxTrianglePerimeter
 * 
 * Implements a triangle perimeter. See <RectanglePerimeter> for a
 * description of the parameters.
 */
class mxTrianglePerimeter implements mxPerimeterFunction
{

	/**
	 *
	 */
	public function apply($bounds, $vertex, $next, $orthogonal)
	{
		$direction = ($vertex != null) ?
			mxUtils::getValue($vertex->style, mxConstants::$STYLE_DIRECTION) : null;
		$vertical = $direction == mxConstants::$DIRECTION_NORTH ||
			$direction == mxConstants::$DIRECTION_SOUTH;

		$x = $bounds->x;
		$y = $bounds->y;
		$w = $bounds->width;
		$h = $bounds->height;
		
		$cx = $x + $w / 2;
		$cy = $y + $h / 2;
		
		$start = new mxPoint($x, $y);
		$corner = new mxPoint($x + $w, $cy);
		$end = new mxPoint($x, $y + $h);
		
		if ($direction == mxConstants::$DIRECTION_NORTH)
		{
			$start = end;
			$corner = new mxPoint($cx, $y);
			$end = new mxPoint($x + $w, $y + $h);
		}
		else if ($direction == mxConstants::$DIRECTION_SOUTH)
		{
			$corner = new mxPoint($cx, $y + $h);
			$end = new mxPoint($x + $w, $y);
		}
		else if ($direction == mxConstants::$DIRECTION_WEST)
		{
			$start = new mxPoint($x + $w, $y);
			$corner = new mxPoint($x, $cy);
			$end = new mxPoint($x + $w, $y + $h);
		}

		$dx = $next->x - $cx;
		$dy = $next->y - $cy;

		$alpha = ($vertical) ? atan2($dx, $dy) : atan2($dy, $dx);
		$t = ($vertical) ? Matan2($w, $h) : atan2($h, $w);
		
		$base = false;
		
		if ($direction == mxConstants::$DIRECTION_NORTH ||
			$direction == mxConstants::$DIRECTION_WEST)
		{
			$base = $alpha > -$t && $alpha < $t;
		}
		else
		{
			$base = $alpha < -pi() + $t || $alpha > pi() - $t;	
		}

		$result = null;			

		if ($base)
		{
			if ($orthogonal && (($vertical && $next->x >= $start->x &&
				$next->x <= $end->x) || (!$vertical && $next->y >= $start->y &&
				$next->y <= $end->y)))
			{
				if ($vertical)
				{
					$result = new mxPoint($next->x, $start->y);
				}
				else
				{
					$result = new mxPoint($start->x, $next->y);
				}
			}
			else
			{
				if ($direction == mxConstants::$DIRECTION_NORTH)
				{
					$result = new mxPoint($x + $w / 2 + $h * tan($alpha) / 2,
						$y + $h);
				}
				else if ($direction == mxConstants::$DIRECTION_SOUTH)
				{
					$result = new mxPoint($x + $w / 2 - $h * tan($alpha) / 2,
						$y);
				}
				else if ($direction == mxConstants::$DIRECTION_WEST)
				{
					$result = new mxPoint($x + $w, $y + $h / 2 +
						$w * tan($alpha) / 2);
				}
				else
				{
					$result = new mxPoint($x, $y + $h / 2 -
						$w * tan($alpha) / 2);
				}
			}
		}
		else
		{
			if ($orthogonal)
			{
				$pt = new mxPoint($cx, $cy);
		
				if ($next->y >= $y && $next->y <= $y + $h)
				{
					$pt->x = ($vertical) ? $cx : (
						($direction == mxConstants::$DIRECTION_WEST) ?
							$x + $w : $x);
					$pt->y = $next->y;
				}
				else if ($next->x >= $x && $next->x <= $x + $w)
				{
					$pt->x = $next->x;
					$pt->y = (!$vertical) ? $cy : (
						($direction == mxConstants::$DIRECTION_NORTH) ?
							$y + $h : $y);
				}
				
				// Compute angle
				$dx = $next->x - $pt->x;
				$dy = $next->y - $pt->y;
				
				$cx = $pt->x;
				$cy = $pt->y;
			}

			if (($vertical && $next->x <= $x + $w / 2) ||
				(!$vertical && $next->y <= $y + $h / 2))
			{
				$result = mxUtils::intersection($next->x, $next->y, $cx, $cy,
					$start->x, $start->y, $corner->x, $corner->y);
			}
			else
			{
				$result = mxUtils::intersection($next->x, $next->y, $cx, $cy,
					$corner->x, $corner->y, $end->x, $end->y);
			}
		}
		
		if ($result == null)
		{
			$result = new mxPoint($cx, $cy);
		}
		
		return $result;
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */


class mxRectangle extends mxPoint
{

	/**
	 * Class: mxRectangle
	 *
	 * Implements a 2-dimensional rectangle with double precision coordinates.
	 * 
	 * Variable: width
	 *
	 * Holds the width of the rectangle. Default is 0.
	 */
	var $width = 0;

	/**
	 * Variable: height
	 *
	 * Holds the height of the rectangle. Default is 0.
	 */
	var $height = 0;

	/**
	 * Constructor: mxRectangle
	 *
	 * Constructs a new rectangle for the optional parameters. If no parameters
	 * are given then the respective default values are used.
	 */
	function __construct($x = 0, $y = 0, $width = 0, $height = 0)
	{
		parent::__construct($x, $y);
		
	 	$this->width = $width;
		$this->height = $height;
	}

	/**
	 * Function: setRect
	 *
	 * Sets this rectangle to the specified values.
	 */
	function setRect($x, $y, $width, $height)
	{
	    $this->x = $x;
	    $this->y = $y;
	    $this->width = $w;
	    $this->height = $h;
	}
	
	/**
	 * Function: getCenterX
	 * 
	 * Returns the x-coordinate of the center point.
	 */
	function getCenterX()
	{
		return $this->x + $this->width / 2;
	}
	
	/**
	 * Function: getCenterY
	 * 
	 * Returns the y-coordinate of the center point.
	 */
	function getCenterY()
	{
		return $this->y + $this->height / 2;
	}
	
	/**
	 * Function: add
	 *
	 * Adds the given rectangle to this rectangle.
	 */
	function add($rect)
	{
		if ($rect != null)
		{
			$minX = min($this->x, $rect->x);
			$minY = min($this->y, $rect->y);
			$maxX = max($this->x + $this->width, $rect->x + $rect->width);
			$maxY = max($this->y + $this->height, $rect->y + $rect->height);
			
			$this->x = $minX;
			$this->y = $minY;
			$this->width = $maxX - $minX;
			$this->height = $maxY - $minY;
		}
	}

	/**
	 * Function: grow
	 *
	 * Grows the rectangle by the given amount, that is, this method subtracts
	 * the given amount from the x- and y-coordinates and adds twice the amount
	 * to the width and height.
	 */
	function grow($amount)
	{
		$this->x -= $amount;
		$this->y -= $amount;
		$this->width += 2 * $amount;
		$this->height += 2 * $amount;
	}

	/**
	 * Function: equals
	 *
	 * Returns true if the given object equals this rectangle.
	 */
	function equals($obj)
	{
        if ($obj instanceof mxRectangle)
        {
            return $obj->x == $this->x && $obj->y == $this->y &&
            	$obj->width == $this->width && $obj->height = $this->height;
        }

        return false;
	}

	/**
	 * Function: copy
	 *
	 * Returns a copy of this <mxRectangle>.
	 */
	function copy()
	{
	 	return new mxRectangle($this->x, $this->y, $this->width, $this->height);
	}

}
class mxCellState extends mxRectangle
{
	
	/**
	 * Class: mxCellState
	 * 
	 * Represents the current state of a cell in a given <mxGraphView>.
	 * 
	 * Variable: view
	 * 
	 * Reference to the enclosing <mxGraphView>.
	 */
	var $view;
	
	/**
	 * Variable: cell
	 *
	 * Reference to the <mxCell> that is represented by this state.
	 */
	var $cell;
	
	/**
	 * Variable: style
	 * 
	 * Contains an array of key, value pairs that represent the style of the
	 * cell.
	 */
	var $style;

	/**
	 * Variable: invalid
	 * 
	 * Specifies if the state is invalid. Default is true.
	 */
	var $invalid = true;

	/**
	 * Variable: origin
	 *
	 * <mxPoint> that holds the origin for all child cells. Default is a new
	 * empty <mxPoint>.
	 */
	var $origin;
	
	/**
	 * Variable: absolutePoints
	 * 
	 * Holds an array of <mxPoints> that represent the absolute points of an
	 * edge.
	 */
	var $absolutePoints;

	/**
	 * Variable: absoluteOffset
	 *
	 * <mxPoint> that holds the absolute offset. For edges, this is the
	 * absolute coordinates of the label position. For vertices, this is the
	 * offset of the label relative to the top, left corner of the vertex. 
	 */
	var $absoluteOffset;
	
	/**
	 * Variable: terminalDistance
	 * 
	 * Caches the distance between the end points for an edge.
	 */
	var $terminalDistance;
	
	/**
	 * Variable: length
	 *
	 * Caches the length of an edge.
	 */
	var $length;
	
	/**
	 * Variable: segments
	 * 
	 * Array of numbers that represent the cached length of each segment of the
	 * edge.
	 */
	var $segments;
		
	/**
	 * Variable: labelBounds
	 * 
	 * Holds the rectangle which contains the label.
	 */
	var $labelBounds;
	
	/**
	 * Variable: boundingBox
	 * 
	 * Holds the largest rectangle which contains all rendering for this cell.
	 */
	var $boundingBox;

	/**
	 * Constructor: mxCellState
	 * 
	 * Constructs a new object that represents the current state of the given
	 * cell in the specified view.
	 * 
	 * Parameters:
	 * 
	 * view - <mxGraphView> that contains the state.
	 * cell - <mxCell> that this state represents.
	 * style - Array of key, value pairs that constitute the style.
	 */
	function __construct($view = null, $cell = null, $style = null)
	{
		$this->view = $view;
		$this->cell = $cell;
		$this->style = $style;
		
		$this->origin = new mxPoint();
		$this->absoluteOffset = new mxPoint();
	}

	/**
	 * Function: getPerimeterBounds
	 * 
	 * Returns the <mxRectangle> that should be used as the perimeter of the
	 * cell.
	 */
	function getPerimeterBounds($border = 0)
	{
		$bounds = new mxRectangle($this->x, $this->y, $this->width, $this->height);
		
		if ($border != 0)
		{
			$bounds->grow($border);
		}
		
		return $bounds;
	}
	
	/**
	 * Function: copy
	 *
	 * Returns a copy of this state where all members are deeply cloned
	 * except the view and cell references, which are copied with no
	 * cloning to the new instance.
	 */
	function copy()
	{
	 	$clone = new mxCellState($this->view, $this->cell, $this->style);

		// Clones the absolute points
		if ($this->absolutePoints != null)
		{
			$clone->absolutePoints = array();
			
			for ($i = 0; $i < sizeof($this->absolutePoints); $i++)
			{
				array_push($clone->absolutePoints, $this->absolutePoints[$i]->copy());
			}
		}

		if ($this->origin != null)
		{
			$clone->origin = $this->origin->copy();
		}

		if ($this->absoluteOffset != null)
		{
			$clone->absoluteOffset = $this->absoluteOffset->copy();
		}
	
		if ($this->labelBounds != null)
		{
			$clone->labelBounds = $this->labelBounds->copy();
		}
		
		if ($this->boundingBox != null)
		{
			$clone->boundingBox = $this->boundingBox->copy();
		}

		$clone->terminalDistance = $this->terminalDistance;
		$clone->segments = $this->segments;
		$clone->length = $this->length;
		$clone->x = $this->x;
		$clone->y = $this->y;
		$clone->width = $this->width;
		$clone->height = $this->height;
		
		return $clone;
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxPoint
{

	/**
	 * Class: mxPoint
	 *
	 * Implements a 2-dimensional point with double precision coordinates.
	 * 
	 * Variable: x
	 *
	 * Holds the x-coordinate of the point. Default is 0.
	 */
	var $x = 0;

	/**
	 * Variable: y
	 *
	 * Holds the y-coordinate of the point. Default is 0.
	 */
	var $y = 0;

	/**
	 * Constructor: mxPoint
	 *
	 * Constructs a new point for the optional x and y coordinates. If no
	 * coordinates are given, then the default values for <x> and <y> are used.
	 */
	function __construct($x = 0, $y = 0)
	{
	 	$this->x = $x;
		$this->y = $y;
	}

	/**
	 * Function: equals
	 *
	 * Returns true if the given object equals this point.
	 */
	function equals($obj)
	{
        if ($obj instanceof mxPoint)
        {
            return $obj->x == $this->x &&
            	$obj->y == $this->y;
        }

        return false;
	}

	/**
	 * Function: copy
	 *
	 * Returns a copy of this <mxPoint>.
	 */
	function copy()
	{
	 	return new mxPoint($this->x, $this->y);
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxGraphView extends mxEventSource
{

	/**
	 * Class: mxGraphView
	 *
	 * Implements a view for the graph. Fires scale and translate events
	 * if one of the values change.
	 * 
	 * This class fires the following events:
	 * 
	 * mxEvent.SCALE fires after the scale was changed in setScale. The
	 * <code>scale</code> and <code>previousScale</code> arguments contain the
	 * new and previous scale.
	 * 
	 * mxEvent.TRANSLATE fires after the translate was changed in setTranslate. The
	 * <code>translate</code> and <code>previousTranslate</code> arguments contain
	 * the new and previous value for translate.
	 * 
	 * Variable: EMPTY_POINT
	 * 
	 * An empty <mxPoint> instance.
	 */
	var $EMPTY_POINT;

	/**
	 * Variable: graph
	 * 
	 * Holds the <mxGraph>.
	 */
	var $graph;
	
	/**
	 * Variable: graphBounds
	 * 
	 * Holds the bounds of the current view.
	 */
	var $graphBounds;
	
	/**
	 * Variable: scale
	 * 
	 * Holds the current scale.
	 */
	var $scale = 1;
	
	/**
	 * Variable: translate
	 * 
	 * Holds the current translate.
	 */
	var $translate;
	
	/**
	 * Variable: states
	 * 
	 * Maps from cells to states.
	 */
	var $states = array();

	/**
	 * Constructor: mxGraphView
	 * 
	 * Constructs a new view for the specified <mxGraph>.
	 */
	function __construct($graph)
	{
		$this->EMPTY_POINT = new mxPoint();
		$this->graph = $graph;
		$this->translate = new mxPoint();
		$this->graphBounds = new mxRectangle();
	}

	/**
	 * Function: setScale
	 * 
	 * Sets the scale, revalidates the view and fires
	 * a scale event.
	 */
	function setScale($scale)
	{
		$previous = $this->scale;
		
		if ($this->scale != $scale)
		{
			$this->scale = $scale;
			$this->revalidate();
		}
			
		$this->fireEvent(new mxEventObject(mxEvent::$SCALE, "scale", $scale, "previousScale", $previous));
	}

	/**
	 * Function: setTranslate
	 * 
	 * Sets the translation, revalidates the view and
	 * fires a translate event.
	 */
	function setTranslate($translate)
	{
		$previous = $this->translate;
		
		if ($this->translate->x != $translate->x ||
			$this->translate->y != $translate->y)
		{
			$this->translate = $translate;
			$this->revalidate();
		}
			
		$this->fireEvent(new mxEventObject(mxEvent::$TRANSLATE, "translate", $translate, "previousTranslate", $previous));
	}

	/**
	 * Function: getGraphBounds
	 * 
	 * Returns <graphBounds>.
	 */
    function getGraphBounds()
    {
    	return $this->graphBounds;
    }

	/**
	 * Function: setGraphBounds
	 * 
	 * Sets <graphBounds>.
	 */
    function setGraphBounds($value)
    {
    	$this->graphBounds = $value;
    }

	/**
	 * Function: getBounds
	 * 
	 * Returns the bounding for for an array of cells or null, if no cells are
	 * specified.
	 */
    function getBounds($cells, $boundingBox = false)
    {
    	$cellCount = sizeof($cells);
    	$result = null;
    	
        if ($cellCount > 0)
        {
        	$model = $this->graph->getModel();
        
			for ($i = 0; $i < $cellCount; $i++)
			{
				if ($model->isVertex($cells[$i]) || $model->isEdge($cells[$i]))
				{
	            	$state = $this->getState($cells[$i]);
	
		            if ($state != null)
		            {
		            	$bounds = ($boundingBox) ? $state->boundingBox : $state;
		            	
		            	if ($bounds != null)
		            	{
			            	if ($result == null)
			            	{
			            		$result = new mxRectangle($bounds->x, $bounds->y,
			            			$bounds->width, $bounds->height);
			            	}
							else
			                {
			                	$result->add($bounds);
			                }
		            	}
		            }
		    	}
			}
        }

        return $result;
    }

	/**
	 * Function: invalidate
	 */
	function revalidate()
	{
		$this->invalidate();
		$this->validate();
	}

	/**
	 * Function: invalidate
	 * 
	 * Invalidates the cached cell states.
	 */
	function invalidate()
	{
		// LATER: Invalidate cell states recursively
		$this->states = array();
	}

	/**
	 * Function: validate
	 * 
	 * Calls <validateCell> and <validateCellState> and updates the <graphBounds>
	 * using <getBoundingBox>. Finally the background is validated using
	 * <validateBackground>.
	 * 
	 * Parameters:
	 * 
	 * cell - Optional <mxCell> to be used as the root of the validation.
	 * Default is the root of the model.
	 */
	function validate($cell = null)
	{
	 	// Checks if cache is invalid
	 	if (sizeof($this->states) == 0)
	 	{
	 		$graphBounds = $this->getBoundingBox($this->validateCellState(
	 			$this->validateCell(($cell != null) ? $cell : $this->graph->model->root)));
	 		$this->setGraphBounds(isset($graphBounds) ? $graphBounds : new mxRectangle());
		}
	}
	
	/**
	 * Function: getBoundingBox
	 *
	 * Returns the bounding box of the shape and the label for the given
	 * <mxCellState> and its children if recurse is true.
	 *
	 * Parameters:
	 *
	 * state - <mxCellState> whose bounding box should be returned.
	 * recurse - Optional boolean indicating if the children should be included.
	 * Default is true.
	 */
	function getBoundingBox($state, $recurse = true)
	{
		$bbox = null;
	
		if ($state != null)
		{
			if ($state->boundingBox != null)
			{
				$bbox = $state->boundingBox->copy();
			}

			if ($recurse)
			{
				$model = $this->graph->getModel();
				$childCount = $model->getChildCount($state->cell);
					
				for ($i = 0; $i < $childCount; $i++)
				{
					$bounds = $this->getBoundingBox($this->getState($model->getChildAt($state->cell, $i)));
	
					if ($bounds != null)
					{
						if ($bbox == null)
						{
							$bbox = $bounds;
						}
						else
						{
							$bbox->add($bounds);
						}
					}
				}
			}
		}
	
		return $bbox;
	}
	
	/**
	 * Function: validateCell
	 *
	 * Recursively creates the cell state for the given cell if visible is true and
	 * the given cell is visible. If the cell is not visible but the state exists
	 * then it is removed using <removeState>.
	 *
	 * Parameters:
	 *
	 * cell - <mxCell> whose <mxCellState> should be created.
	 * visible - Optional boolean indicating if the cell should be visible. Default
	 * is true.
	 */
	function validateCell($cell, $visible = true)
	{
		if ($cell != null)
		{
			$visible = $visible && $this->graph->isCellVisible($cell);
			$state = $this->getState($cell, $visible);
			
			if ($state != null && !$visible)
			{
				$this->removeState($cell);
			}
			else
			{
				$model = $this->graph->getModel();
				$childCount = $model->getChildCount($cell);
				
				for ($i = 0; $i < $childCount; $i++)
				{
					$this->validateCell($model->getChildAt($cell, $i), $visible &&
						!$this->graph->isCellCollapsed($cell));
				}
			}
		}
		
		return $cell;
	}

	/**
	 * Function: validateCellStates
	 *
	 * Validates and repaints the <mxCellState> for the given <mxCell>.
	 *
	 * Parameters:
	 *
	 * cell - <mxCell> whose <mxCellState> should be validated.
	 * recurse - Optional boolean indicating if the children of the cell should be
	 * validated. Default is true.
	 */
	function validateCellState($cell, $recurse = true)
	{
		$state = null;
	
		if ($cell != null)
		{
			$state = $this->getState($cell);
	
			if ($state != null)
			{
				$model = $this->graph->getModel();
					
				if ($state->invalid)
				{
					$state->invalid = false;
	
					$this->validateCellState($model->getParent($cell), false);
					$source = $this->validateCellState($this->getVisibleTerminal($cell, true), false);
					$target = $this->validateCellState($this->getVisibleTerminal($cell, false), false);
	
					$this->updateCellState($state, $source, $target);
					
					if ($model->isEdge($cell) || $model->isVertex($cell))
					{
						$this->updateLabelBounds($state);
						$this->updateBoundingBox($state);
					}
				}
	
				if ($recurse)
				{
					$childCount = $model->getChildCount($cell);
	
					for ($i = 0; $i < $childCount; $i++)
					{
						$this->validateCellState($model->getChildAt($cell, $i));
					}
				}
			}
		}
	
		return $state;
	}

	/**
	 * Function: updateCellState
	 *
	 * Updates the given <mxCellState>.
	 *
	 * Parameters:
	 *
	 * state - <mxCellState> to be updated.
	 * source - <mxCellState> that represents the visible source.
	 * target - <mxCellState> that represents the visible target.
	 */
	function updateCellState($state, $source, $target)
	{
		$state->absoluteOffset->x = 0;
		$state->absoluteOffset->y = 0;
		$state->origin->x = 0;
		$state->origin->y = 0;
		$state->length = 0;
	
		$model = $this->graph->getModel();
		$pState = $this->getState($model->getParent($state->cell));
	
		if ($pState != null)
		{
			$state->origin->x += $pState->origin->x;
			$state->origin->y += $pState->origin->y;
		}
	
		$offset = $this->graph->getChildOffsetForCell($state->cell);
	
		if ($offset != null)
		{
			$state->origin->x += $offset->x;
			$state->origin->y += $offset->y;
		}
	
		$geo = $this->graph->getCellGeometry($state->cell);
	
		if ($geo != null)
		{
			if (!$model->isEdge($state->cell))
			{
				$offset = $geo->offset;

				if ($offset == null)
				{
					$offset = $this->EMPTY_POINT;
				}
	
				if ($geo->relative && $pState != null)
				{
					if ($model->isEdge($pState->cell))
					{
						$origin = $this->getPoint($pState, $geo);
							
						if ($origin != null)
						{
							$state->origin->x += ($origin->x / $this->scale) - $pState->origin->x - $this->translate->x;
							$state->origin->y += ($origin->y / $this->scale) - $pState->origin->y - $this->translate->y;
						}
					}
					else
					{
						$state->origin->x += $geo->x * $pState->width / $this->scale + $offset->x;
						$state->origin->y += $geo->y * $pState->height / $this->scale + $offset->y;
					}
				}
				else
				{
					$state->absoluteOffset->x = $this->scale * $offset->x;
					$state->absoluteOffset->y = $this->scale * $offset->y;
					$state->origin->x += $geo->x;
					$state->origin->y += $geo->y;
				}
			}
	
			$state->x = $this->scale * ($this->translate->x + $state->origin->x);
			$state->y = $this->scale * ($this->translate->y + $state->origin->y);
			$state->width = $this->scale * $geo->width;
			$state->height = $this->scale * $geo->height;

			if ($model->isVertex($state->cell))
			{
				$this->updateVertexState($state, $geo);
			}
	
			if ($model->isEdge($state->cell))
			{
				$this->updateEdgeState($state, $geo, $source, $target);
			}
		}
	}

	/**
	 * Function: updateVertexState
	 *
	 * Validates the given cell state.
	 */
	function updateVertexState($state, $geo)
	{
		// LATER: Add support for rotation
		$this->updateVertexLabelOffset($state);
	}
	
	/**
	 * Function: updateEdgeState
	 *
	 * Validates the given cell state.
	 */
	function updateEdgeState($state, $geo, $source, $target)
	{
		// This will remove edges with no terminals and no terminal points
		// as such edges are invalid and produce NPEs in the edge styles.
		// Also removes connected edges that have no visible terminals.
		if (($this->graph->model->getTerminal($state->cell, true) != null && $source == null) ||
			($source == null && $geo->getTerminalPoint(true) == null) ||
			($this->graph->model->getTerminal($state->cell, false) != null && $target == null) ||
			($target == null && $geo->getTerminalPoint(false) == null))
		{
			$this->removeState($state->cell, true);
		}
		else
		{
			$this->updateFixedTerminalPoints($state, $source, $target);
			$this->updatePoints($state, $geo->points, $source, $target);
			$this->updateFloatingTerminalPoints($state, $source, $target);
			
			$pts = $state->absolutePoints;
			
			if ($pts == null || sizeof($pts) < 1 || $pts[0] == null || $pts[sizeof($pts) - 1] == null)
			{
				// This will remove edges with invalid points from the list of states in the view.
				// Happens if the one of the terminals and the corresponding terminal point is null.
				$this->removeState($state->cell, true);
			}
			else
			{
				$this->updateEdgeBounds($state);
				$state->absoluteOffset = $this->getPoint($state, $geo);
			}
		}
	}
	
	/**
	 * Function: updateVertexLabelOffset
	 * 
	 * Updates the absoluteOffset of the given vertex cell state. This takes
	 * into account the label position styles.
	 * 
	 * Parameters:
	 * 
	 * state - <mxCellState> whose absolute offset should be updated.
	 */
	function updateVertexLabelOffset($state)
	{
		$horizontal = mxUtils::getValue($state->style,
				mxConstants::$STYLE_LABEL_POSITION,
				mxConstants::$ALIGN_CENTER);
		
		if ($horizontal == mxConstants::$ALIGN_LEFT)
		{
			$state->absoluteOffset->x -= $state->width;
		}
		else if ($horizontal == mxConstants::$ALIGN_RIGHT)
		{
			$state->absoluteOffset->x += $state->width;
		}
		
		$vertical = mxUtils::getValue($state->style,
				mxConstants::$STYLE_VERTICAL_LABEL_POSITION,
				mxConstants::$ALIGN_MIDDLE);
		
		if ($vertical == mxConstants::$ALIGN_TOP)
		{
			$state->absoluteOffset->y -= $state->height;
		}
		else if ($vertical == mxConstants::$ALIGN_BOTTOM)
		{
			$state->absoluteOffset->y += $state->height;
		}
	}

	/**
	 * Function: updateLabelBounds
	 * 
	 * Updates the label bounds in the given state.
	 */
    function updateLabelBounds($state)
    {
        $cell = $state->cell;
        $style = $state->style;
        
        if (mxUtils::getValue($style, mxConstants::$STYLE_OVERFLOW) == "fill")
		{
			$state->labelBounds = new mxRectangle($state->x, $state->y, $state->width, $state->height);
		}
		else
		{
	        $label = $this->graph->getLabel($cell);
    	    $vertexBounds = (!$this->graph->model->isEdge($cell)) ? $state : null;
        	$state->labelBounds = mxUtils::getLabelPaintBounds($label, $style,
        		false, $state->absoluteOffset, $vertexBounds, $this->scale);
		}
    }

	/**
	 * Function: updateBoundingBox
	 * 
	 * Updates the bounding box in the given cell state.
	 */
	function updateBoundingBox($state)
	{
        // Gets the cell bounds and adds shadows and markers
        $rect = new mxRectangle($state->x, $state->y, $state->width, $state->height);
        $style = $state->style;

        // Adds extra pixels for the marker and stroke assuming
        // that the border stroke is centered around the bounds
        // and the first pixel is drawn inside the bounds
        $strokeWidth = max(1, mxUtils::getNumber($style,
            mxConstants::$STYLE_STROKEWIDTH, 1) * $this->scale);
        $strokeWidth -= max(1, $strokeWidth / 2);

        if ($this->graph->model->isEdge($state->cell))
        {
			$ms = 0;

            if (isset($style[mxConstants::$STYLE_ENDARROW])
                    || isset($style[mxConstants::$STYLE_STARTARROW]))
            {
                $ms = round(mxConstants::$DEFAULT_MARKERSIZE * $this->scale);
            }

            // Adds the strokewidth
           	$rect->grow($ms + $strokeWidth);

            // Adds worst case border for an arrow shape
            if (mxUtils::getValue($style, mxConstants::$STYLE_SHAPE) ==
                    mxConstants::$SHAPE_ARROW)
            {
                $rect->grow(mxConstants::$ARROW_WIDTH / 2);
            }
        }
        else
        {
        	$rect->grow($strokeWidth);
        }

        // Adds extra pixels for the shadow
        if (mxUtils::getValue($style, mxConstants::$STYLE_SHADOW, false) == true)
        {
            $rect->width += mxConstants::$SHADOW_OFFSETX;
            $rect->height += mxConstants::$SHADOW_OFFSETY;
        }

        // Adds oversize images in labels
        if (mxUtils::getValue($style, mxConstants::$STYLE_SHAPE) ==
        	mxConstants::$SHAPE_LABEL)
        {
            if (mxUtils::getValue($style, mxConstants::$STYLE_IMAGE) != null)
            {
                $w = mxUtils::$getValue($style,
                        mxConstants::$STYLE_IMAGE_WIDTH,
                        mxConstants::$DEFAULT_IMAGESIZE) * $this->scale;
                $h = mxUtils::$getValue($style,
                        mxConstants::$STYLE_IMAGE_HEIGHT,
                        mxConstants::$DEFAULT_IMAGESIZE) * $this->scale;

                $x = $state->x;
                $y = 0;

                $imgAlign = mxUtils::getValue($style, mxConstants::$STYLE_IMAGE_ALIGN,
                                mxConstants::$ALIGN_CENTER);
                $imgValign = mxUtils::getValue(style,
                        mxConstants::$STYLE_IMAGE_VERTICAL_ALIGN,
                        mxConstants::$ALIGN_MIDDLE);

                if ($imgAlign == mxConstants::$ALIGN_RIGHT)
                {
                    $x += $state->width - $w;
                }
                else if ($imgAlign == mxConstants::$ALIGN_CENTER)
                {
                    $x += ($state->width - $w) / 2;
                }

                if ($imgValign == mxConstants::$ALIGN_TOP)
                {
                    $y = $state->y;
                }
                else if ($imgValign == mxConstants::$ALIGN_BOTTOM)
                {
                    $y = $state->y + $state->height - $h;
                }
                else
                {
                    $y = $state->y + ($state->height - $h) / 2;
                }

                $rect->add(new mxRectangle($x, $y, $w, $h));
            }
        }
        
        // No need to add rotated rectangle bounds here because
        // GD does not support rotation

        // Unifies the cell bounds and the label bounds
		$rect->add($state->labelBounds);
        $state->boundingBox = $rect;

        return $rect;
    }

	/**
	 * Function: updateFixedTerminalPoints
	 *
	 * Sets the initial absolute terminal points in the given state before the edge
	 * style is computed.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> whose initial terminal points should be updated.
	 * source - <mxCellState> which represents the source terminal.
	 * target - <mxCellState> which represents the target terminal.
	 */
	function updateFixedTerminalPoints($edge, $source, $target)
	{
		$this->updateFixedTerminalPoint($edge, $source, true,
			$this->graph->getConnectionConstraint($edge, $source, true));
		$this->updateFixedTerminalPoint($edge, $target, false,
			$this->graph->getConnectionConstraint($edge, $target, false));
	}

	/**
	 * Function: updateFixedTerminalPoint
	 *
	 * Sets the fixed source or target terminal point on the given edge.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> whose terminal point should be updated.
	 * terminal - <mxCellState> which represents the actual terminal.
	 * source - Boolean that specifies if the terminal is the source.
	 * constraint - <mxConnectionConstraint> that specifies the connection.
	 */
	function updateFixedTerminalPoint($edge, $terminal, $source, $constraint)
	{
		$pt = null;
		
		if (isset($constraint))
		{
			$pt = $this->graph->getConnectionPoint($terminal, $constraint);
		}
		
		if (!isset($pt) && !isset($terminal))
		{
			$s = $this->scale;
			$tr = $this->translate;
			$orig = $edge->origin;
			$geo = $this->graph->getCellGeometry($edge->cell);
			$pt = $geo->getTerminalPoint($source);
			
			if (isset($pt))
			{
				$pt = new mxPoint($s * ($tr->x + $pt->x + $orig->x),
					$s * ($tr->y + $pt->y + $orig->y));
			}
		}

		if (!is_array($edge->absolutePoints))
		{
			$edge->absolutePoints = array();
		}

		$n = sizeof($edge->absolutePoints);
		
		if ($source)
		{
			if ($n > 0)
			{
				$state->absolutePoints[0] = $pt;
			}
			else
			{
				array_push($edge->absolutePoints, $pt);
			}
		}
		else
		{
			$n = sizeof($edge->absolutePoints);
			
			if ($n > 1)
			{
				$edge->absolutePoints[$n - 1] = $pt;
			}
			else
			{
				array_push($edge->absolutePoints, $pt);
			}
		}
	}

	/**
	 * Function: updatePoints
	 *
	 * Updates the absolute points in the given state using the specified array
	 * of <mxPoints> as the relative points.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> whose absolute points should be updated.
	 * points - Array of <mxPoints> that constitute the relative points.
	 * source - <mxCellState> that represents the source terminal.
	 * target - <mxCellState> that represents the target terminal.
	 */
	function updatePoints($edge, $points, $source, $target)
	{
		if (isset($edge))
		{
			$pts = array();
			array_push($pts, $edge->absolutePoints[0]);
			$edgeStyle = $this->getEdgeStyle($edge, $points, $source, $target);

			if (isset($edgeStyle))
			{
				$src = $this->getTerminalPort($edge, $source, true);
				$trg = $this->getTerminalPort($edge, $target, false);

				$edgeStyle->apply($edge, $src, $trg, $points, $pts);
			}
			else if (isset($points))
			{
				for ($i = 0; $i < sizeof($points); $i++)
				{
					if (isset($points[$i]))
					{
						$pt = $points[$i]->copy();
						array_push($pts, $this->transformControlPoint($edge, $pt));
					}
				}
			}
			
			$n = sizeof($edge->absolutePoints);
			array_push($pts, $edge->absolutePoints[$n-1]);

			$edge->absolutePoints = $pts;
		}
	}
	
	/**
	 * Function: transformControlPoint
	 *
	 * Transforms the given control point to an absolute point.
	 */
    function transformControlPoint($state, $pt)
    {
    	$orig = $state->origin;
    
        return new mxPoint($this->scale * ($pt->x + $this->translate->x + $orig->x),
        	$this->scale * ($pt->y + $this->translate->y + $orig->y));
    }
    
	/**
	 * Function: getEdgeStyle
	 *
	 * Returns the edge style function to be used to render the given edge
	 * state.
	 */
	function getEdgeStyle($edge, $points, $source, $target)
	{
		$edgeStyle = null;
		
		if (isset($source) && $source === $target)
		{
			$edgeStyle = mxUtils::getValue($edge->style, mxConstants::$STYLE_LOOP);
			
			if (!isset($edgeStyle))
			{
				$edgeStyle = $this->graph->defaultLoopStyle;
			}
		}
		else if (!mxUtils::getValue($edge->style, mxConstants::$STYLE_NOEDGESTYLE, false))
		{
			$edgeStyle = mxUtils::getValue($edge->style, mxConstants::$STYLE_EDGE);
		}
		
		// Converts string values to objects
		if (is_string($edgeStyle))
		{
			$tmp = mxStyleRegistry::getValue($edgeStyle);
			
			if ($tmp == null && strpos($edgeStyle, ".") !== false)
			{
				$tmp = mxUtils::evaluate($edgeStyle);
			}
			
			$edgeStyle = $tmp;
		}
		
		if ($edgeStyle instanceof mxEdgeStyleFunction)
		{
			return $edgeStyle;
		}
		
		return null;
	}

	/**
	 * Function: updateFloatingTerminalPoints
	 *
	 * Updates the terminal points in the given state after the edge style was
	 * computed for the edge.
	 * 
	 * Parameters:
	 * 
	 * state - <mxCellState> whose terminal points should be updated.
	 * source - <mxCellState> that represents the source terminal.
	 * target - <mxCellState> that represents the target terminal.
	 */
	function updateFloatingTerminalPoints($state, $source, $target)
	{
		$pts = $state->absolutePoints;
		$p0 = $pts[0];
		$pe = $pts[sizeof($pts) - 1];
		
		if (!isset($pe) && isset($target))
		{
			$this->updateFloatingTerminalPoint($state, $target, $source, false);
		}
		
		if (!isset($p0) && isset($source))
		{
			$this->updateFloatingTerminalPoint($state, $source, $target, true);
		}
	}

	/**
	 * Function: updateFloatingTerminalPoint
	 *
	 * Updates the absolute terminal point in the given state for the given
	 * start and end state, where start is the source if source is true.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> whose terminal point should be updated.
	 * start - <mxCellState> for the terminal on "this" side of the edge.
	 * end - <mxCellState> for the terminal on the other side of the edge.
	 * source - Boolean indicating if start is the source terminal state.
	 */
	function updateFloatingTerminalPoint($edge, $start, $end, $source)
	{
		$start = $this->getTerminalPort($edge, $start, $source);
		$next = $this->getNextPoint($edge, $end, $source);
		$border = mxUtils::getNumber($edge->style, mxConstants::$STYLE_PERIMETER_SPACING);
		$border = mxUtils::getNumber($edge->style, ($source) ?
			mxConstants::$STYLE_SOURCE_PERIMETER_SPACING :
			mxConstants::$STYLE_TARGET_PERIMETER_SPACING);
		$pt = $this->getPerimeterPoint($start, $next, $this->graph->isOrthogonal($edge), $border);
	 	$index = ($source) ? 0 : sizeof($edge->absolutePoints) - 1;
	 	$edge->absolutePoints[$index] = $pt;
	}

	/**
	 * Function: getTerminalPort
	 * 
	 * Returns an <mxCellState> that represents the source or target terminal or
	 * port for the given edge.
	 * 
	 * Parameters:
	 * 
	 * state - <mxCellState> that represents the state of the edge.
	 * terminal - <mxCellState> that represents the terminal.
	 * source - Boolean indicating if the given terminal is the source terminal.
	 */
	function getTerminalPort($state, $terminal, $source)
	{
		$key = ($source) ? mxConstants::$STYLE_SOURCE_PORT
				: mxConstants::$STYLE_TARGET_PORT;
		$id = mxUtils::getValue($state->style, $key);

		if ($id != null)
		{
			$tmp = $this->getState($this->graph->model->getCell($id));

			// Only uses ports where a cell state exists
			if (isset($tmp))
			{
				$terminal = $tmp;
			}
		}
		
		return $terminal;
	}
	
	/**
	 * Function: getPerimeterPoint
	 *
	 * Returns an <mxPoint> that defines the location of the intersection point between
	 * the perimeter and the line between the center of the shape and the given point.
	 * 
	 * Parameters:
	 * 
	 * terminal - <mxCellState> for the source or target terminal.
	 * next - <mxPoint> that lies outside of the given terminal.
	 * orthogonal - Boolean that specifies if the orthogonal projection onto
	 * the perimeter should be returned. If this is false then the intersection
	 * of the perimeter and the line between the next and the center point is
	 * returned.
	 * border - Optional border between the perimeter and the shape.
	 */
	function getPerimeterPoint($terminal, $next, $orthogonal, $border = null)
	{
		$point = null;
		
		if ($terminal != null)
		{
			$perimeter = $this->getPerimeterFunction($terminal);
			
			if (isset($perimeter) && isset($next))
			{
				$bounds = $this->getPerimeterBounds($terminal, $border);
				
				if ($bounds->width > 0 || $bounds->height > 0)
				{
					$point = $perimeter->apply($bounds,	$terminal, $next, $orthogonal);
				}
			}
			
			if (!isset($point))
			{
				$point = $this->getPoint($terminal);
			}
		}

	 	return $point;
	}
		
	/**
	 * Function: getRoutingCenterX
	 * 
	 * Returns the x-coordinate of the center point for automatic routing.
	 */
	function getRoutingCenterX($state)
	{
		$f = ($state->style != null) ? mxUtils::getNumber($state->style,
			mxConstants::$STYLE_ROUTING_CENTER_X) : 0;
	
		return $state->getCenterX() + $f * $state->width;
	}
	
	/**
	 * Function: getRoutingCenterY
	 * 
	 * Returns the y-coordinate of the center point for automatic routing.
	 */
	function getRoutingCenterY($state)
	{
		$f = ($state->style != null) ? mxUtils::getNumber($state->style,
			mxConstants::$STYLE_ROUTING_CENTER_Y) : 0;
	
		return $state->getCenterY() + $f * $state->height;
	}

	/**
	 * Function: getPerimeterBounds
	 *
	 * Returns the perimeter bounds for the given terminal, edge pair as an
	 * <mxRectangle>.
	 * 
	 * Parameters:
	 * 
	 * terminal - <mxCellState> that represents the terminal.
	 * border - Number that adds a border between the shape and the perimeter.
	 */
	function getPerimeterBounds($terminal, $border = 0)
	{
		if ($terminal != null)
		{
			$border += mxUtils::getNumber($terminal->style, mxConstants::$STYLE_PERIMETER_SPACING);
		}

		return $terminal->getPerimeterBounds($border * $this->scale);
	}

	/**
	 * Function: getPerimeterFunction
	 * 
	 * Returns the perimeter function for the given state.
	 */
	function getPerimeterFunction($state)
	{
		$perimeter = mxUtils::getValue($state->style, mxConstants::$STYLE_PERIMETER);
		
		// Converts string values to objects
		if (is_string($perimeter))
		{
			$tmp = mxStyleRegistry::getValue($perimeter);
			
			if ($tmp == null && strpos($perimeter, ".") !== false)
			{
				$tmp = mxUtils::evaluate($perimeter);
			}
			
			$perimeter = $tmp;
		}
		
		if ($perimeter instanceof mxPerimeterFunction)
		{
			return $perimeter;
		}
		
		return null;
	}

	/**
	 * Function: getNextPoint
	 *
	 * Returns the nearest point in the list of absolute points or the center
	 * of the opposite terminal.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> that represents the edge.
	 * opposite - <mxCellState> that represents the opposite terminal.
	 * source - Boolean indicating if the next point for the source or target
	 * should be returned.
	 */
	function getNextPoint($edge, $opposite, $source)
	{
		$pts = $edge->absolutePoints;
		$point = null;
		
		if ($pts != null && sizeof($pts) >= 2)
		{
			$count = sizeof($pts);
			$index = ($source) ? min(1, $count - 1) : max(0, $count - 2);
			$point = $pts[$index];
		}
		
		if (!isset($point) && isset($opposite))
		{
			$point = new mxPoint($opposite->getCenterX(), $opposite->getCenterY());
		}

	 	return $point;
	}

	/**
	 * Function: getVisibleTerminal
	 *
	 * Returns the nearest ancestor terminal that is visible. The edge appears
	 * to be connected to this terminal on the display.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCell> whose visible terminal should be returned.
	 * source - Boolean that specifies if the source or target terminal
	 * should be returned.
	 */
	function getVisibleTerminal($edge, $source)
	{
	 	$model = $this->graph->model;
	 	$result = $model->getTerminal($edge, $source);
	 	$best = $result;
	 	
	 	while ($result != null)
	 	{
	 		if (!$this->graph->isCellVisible($best)||
	 			$this->graph->isCellCollapsed($result))
	 		{
	 			$best = $result;
	 		}
	 		
	 		$result = $model->getParent($result);
	 	}

		// Checks if the result is not a layer
		if ($model->getParent($best) === $model->getRoot())
		{
			$best = null;
		}
		
	 	return $best;
	}

	/**
	 * Function: updateEdgeBounds
	 * 
	 * Updates the bounds of the specified state based on the
	 * absolute points in the state.
	 */
	function updateEdgeBounds($state)
	{
	 	$points = $state->absolutePoints;
 		$p0 = $points[0];
 		$n = sizeof($points);
 		$pe = $points[$n-1];
 		
 		if ($p0->x != $pe->x || $p0->y != $pe->y)
 		{
 			$dx = $pe->x - $p0->x;
 			$dy = $pe->y - $p0->y;
 			$state->terminalDistance = sqrt($dx*$dx+$dy*$dy);
 		}
 		else
 		{
 			$state->terminalDistance = 0;
 		}
 		
 		$length = 0;
		$segments = array();
 		$pt = $p0;
 		
 		if ($pt != null)
 		{
 			$minX = $pt->x;
 			$minY = $pt->y;
 			$maxX = $minX;
 			$maxY = $minY;
 			
 			for ($i = 1; $i < $n; $i++)
 			{
 				$tmp = $points[$i];
 				if ($tmp != null)
 				{
 					$dx = $pt->x - $tmp->x;
 					$dy = $pt->y - $tmp->y;

					$segment = sqrt($dx*$dx+$dy*$dy);
					array_push($segments, $segment);
 					$length += $segment;
 					$pt = $tmp;

 					$minX = min($pt->x, $minX);
 					$minY = min($pt->y, $minY);
 					$maxX = max($pt->x, $maxX);
 					$maxY = max($pt->y, $maxY);
 				}
 			}
 			
 			$state->length = $length;
 			$state->segments = $segments;
 			
 			$state->x = $minX;
 			$state->y = $minY;
 			$state->width = $maxX - $minX;
 			$state->height = $maxY - $minY;
 		}
	}

	/**
	 * Function: getPoint
	 *
	 * Returns the absolute point on the edge for the given relative
	 * <mxGeometry> as an <mxPoint>. The edge is represented by the given
	 * <mxCellState>.
	 * 
	 * Parameters:
	 * 
	 * state - <mxCellState> that represents the state of the parent edge.
	 * geometry - <mxGeometry> that represents the relative location.
	 */
	function getPoint($state, $geometry = null)
	{
        $x = $state->getCenterX();
        $y = $state->getCenterY();

        if (isset($state->segments) && (!isset($geometry) || $geometry->relative))
        {
            $gx = (isset($geometry)) ? $geometry->x / 2 : 0;
            $pointCount = sizeof($state->absolutePoints);
            $dist = ($gx + 0.5) * $state->length;
            $segments = $state->segments;
            $segment = $segments[0];
            $length = 0;
            $index = 1;

            while ($dist > $length + $segment && $index < $pointCount - 1)
            {
                $length += $segment;
                $segment = $segments[$index++];
            }

			$factor = ($segment == 0) ? 0 : ($dist - $length) / $segment;
			$p0 = $state->absolutePoints[$index - 1];
			$pe = $state->absolutePoints[$index];

			if ($p0 != null && $pe != null)
			{
				$gy = 0;
				$offsetX = 0;
				$offsetY = 0;

				if (isset($geometry))
				{
					$gy = $geometry->y;
					$offset = $geometry->offset;

					if (isset($offset))
					{
						$offsetX = $offset->x;
						$offsetY = $offset->y;
					}
				}

				$dx = $pe->x - $p0->x;
				$dy = $pe->y - $p0->y;
				$nx = ($segment == 0) ? 0 : $dy / $segment;
				$ny = ($segment == 0) ? 0 : $dx / $segment;

				$x = $p0->x + $dx * $factor + ($nx * $gy + $offsetX) * $this->scale;
				$y = $p0->y + $dy * $factor - ($ny * $gy - $offsetY) * $this->scale;
            }
        }
        else if (isset($geometry))
        {
            $offset = $geometry->offset;

            if (isset($offset))
            {
                $x += $offset->x;
                $y += $offset->y;
            }
        }

        return new mxPoint($x, $y);
	}

	/**
	 * Function: getState
	 * 
	 * Returns the cell state for the specified cell. If
	 * create is true then the state is created and added
	 * to the cache if it does not yet exist.
	 */
	function getState($cell, $create = false)
	{
	 	$state = null;
	 	
	 	if ($cell != null)
	 	{
	 		$id = $this->getHashCode($cell);
		 	$state = (isset($this->states[$id])) ? $this->states[$id] : null;
		 	
		 	if ($state == null && $create && $this->graph->isCellVisible($cell))
		 	{
				$state = $this->createState($cell);
				$this->states[$id] = $state;
		 	}
		}

	 	return $state;
	}
	
	/**
	 * Function: getHashCode
	 *
	 * Returns a unique string that represents the given instance.
	 */
	function getHashCode($cell)
	{
	 	// PHP >= 5.2
		if (function_exists("spl_object_hash"))
		{
			return spl_object_hash($cell);
		}
		else
		{
			return (string) $cell;
		}
	}
				
	/**
	 * Function: getStates
	 *
	 * Returns the <mxCellStates> for the given array of <mxCells>. The array
	 * contains all states that are not null, that is, the returned array may
	 * have less elements than the given array.
	 */
	function getStates()
	{
		return $this->states;
	}

	/**
	 * Function: getStates
	 *
	 * Returns the <mxCellStates> for the given array of <mxCells>. The array
	 * contains all states that are not null, that is, the returned array may
	 * have less elements than the given array.
	 */
	function getCellStates($cells)
	{
		$result = array();
		$count = sizeof($cells);
		
		for ($i = 0; $i < $count; $i++)
		{
			$state = $this->getState($cells[$i]);
			
			if ($state != null)
			{
				array_push($result, $state);
			}
		}
		
		return $result;
	}

	/**
	 * Function: removeState
	 * 
	 * Removes and returns the mxCellState for the given cell.
	 */
	function removeState($cell, $recurse = false)
	{
		if ($recurse)
		{
			$model = $this->graph->getModel();
			$childCount = $model->getChildCount($cell);
			
			for ($i = 0; $i < $childCount; $i++)
			{
				$this->removeState($model->getChildAt($cell, $i), true);
			}
		}
		
	 	$state = null;
	 	
	 	if ($cell != null)
	 	{
	 		$id = $this->getHashCode($cell);
		 	$state = $this->states[$id];
		 	unset($this->states[$id]);
		}

	 	return $state;
	}

	/**
	 * Function: createState
	 * 
	 * Creates the state for the specified cell.
	 */
	function createState($cell)
	{
	 	$style = $this->graph->getCellStyle($cell);
	 	
	 	return new mxCellState($this, $cell, $style);
	}

}
/**
 * Class: mxPerimeter
 * 
 * Provides various perimeter functions to be used in a style
 * as the value of <mxConstants.STYLE_PERIMETER>.
 * 
 * The parameters are explained in <RectanglePerimeter>.
 */
class mxPerimeter
{

	/**
	 * Variable: RectanglePerimeter
	 *
	 * Provides a rectangular perimeter.
	 */
	public static $RectanglePerimeter;

	/**
	 * Variable: EllipsePerimeter
	 *
	 * Provides an elliptic perimeter.
	 */
	public static $EllipsePerimeter;

	/**
	 * Variable: RhombusPerimeter
	 *
	 * Provides a rhombus (aka diamond) perimeter.
	 */
	public static $RhombusPerimeter;

	/**
	 * Variable: TrianglePerimeter
	 *
	 * Provides a triangle perimeter. See <RectanglePerimeter> for a
	 * description of the parameters.
	 */
	public static $TrianglePerimeter;

}

// Instanciates the declared static members of the above class
mxPerimeter::$RectanglePerimeter = new mxRectanglePerimeter();
mxPerimeter::$EllipsePerimeter = new mxEllipsePerimeter();
mxPerimeter::$RhombusPerimeter = new mxRhombusPerimeter();
mxPerimeter::$TrianglePerimeter = new mxTrianglePerimeter();



class mxStylesheet
{
	
	/**
	 * Class: mxStylesheet
	 * 
	 * Defines the appearance of the cells in a graph. See
	 * <putCellStyle> for an example of creating a style.
	 *
	 * Default Styles:
	 * 
	 * The stylesheet contains two built-om styles, which are
	 * used if no style is defined for a cell:
	 *
	 *   defaultVertex - Default style for vertices
	 *   defaultEdge - Default style for edges
	 *   
	 * Function: styles
	 * 
	 * Maps from names to styles.
	 */
	var $styles = array();

	/**
	 * Constructor: mxStylesheet
	 * 
	 * Constructs a new stylesheet and assigns default styles.
	 */
	function __construct()
	{
	 	$this->putDefaultVertexStyle($this->createDefaultVertexStyle());
	 	$this->putDefaultEdgeStyle($this->createDefaultEdgeStyle());
	}

	/**
	 * Function: createDefaultVertexStyle
	 * 
	 * Creates and returns the default vertex style.
	 */
	function createDefaultVertexStyle()
	{
	 	$style = array();
	 	
	 	$style[mxConstants::$STYLE_SHAPE] = mxConstants::$SHAPE_RECTANGLE;
	 	$style[mxConstants::$STYLE_PERIMETER] = mxPerimeter::$RectanglePerimeter;
	 	$style[mxConstants::$STYLE_VERTICAL_ALIGN] = mxConstants::$ALIGN_MIDDLE;
	 	$style[mxConstants::$STYLE_ALIGN] = mxConstants::$ALIGN_CENTER;
	 	$style[mxConstants::$STYLE_FILLCOLOR] = "#C3D9FF";
	 	$style[mxConstants::$STYLE_STROKECOLOR] = "#6482B9";
	 	$style[mxConstants::$STYLE_FONTCOLOR] = "#774400";
	 	
	 	return $style;
	}

	/**
	 * Function: createDefaultEdgeStyle
	 * 
	 * Creates and returns the default edge style.
	 */
	function createDefaultEdgeStyle()
	{
	 	$style = array();
	 	
		$style[mxConstants::$STYLE_SHAPE] = mxConstants::$SHAPE_CONNECTOR;
		$style[mxConstants::$STYLE_ENDARROW] = mxConstants::$ARROW_CLASSIC;
		$style[mxConstants::$STYLE_VERTICAL_ALIGN] = mxConstants::$ALIGN_MIDDLE;
		$style[mxConstants::$STYLE_ALIGN] = mxConstants::$ALIGN_CENTER;
		$style[mxConstants::$STYLE_STROKECOLOR] = "#6482B9";
		$style[mxConstants::$STYLE_FONTCOLOR] = "#446299";
	 	
	 	return $style;
	}
	
	/**
	 * Function: putDefaultVertexStyle
	 * 
	 * Sets the default style for vertices.
	 */
	function putDefaultVertexStyle($style)
	{
		$this->putCellStyle("defaultVertex", $style);
	}

	/**
	 * Function: putDefaultEdgeStyle
	 * 
	 * Sets the default style for edges.
	 */
	function putDefaultEdgeStyle($style)
	{
		$this->putCellStyle("defaultEdge", $style);
	}

	/**
	 * Function: getDefaultVertexStyle
	 * 
	 * Returns the default style for vertices.
	 */
	function getDefaultVertexStyle()
	{
		return $this->styles["defaultVertex"];
	}

	/**
	 * Function: getDefaultEdgeStyle
	 * 
	 * Sets the default style for edges.
	 */
	function getDefaultEdgeStyle()
	{
		return $this->styles["defaultEdge"];
	}
	
	/**
	 * Function: putCellStyle
	 * 
	 * Stores the specified style under the given name.
	 *
	 * Example:
	 * 
	 * The following example adds a new style (called 'rounded') into an
	 * existing stylesheet:
	 * 
	 * (code)
	 * var style = new Array();
	 * style[mxConstants.STYLE_SHAPE] = mxConstants.SHAPE_RECTANGLE;
	 * style[mxConstants.STYLE_PERIMETER] = mxPerimeter.RightAngleRectanglePerimeter;
	 * style[mxConstants.STYLE_ROUNDED] = 'true';
	 * graph.stylesheet.putCellStyle('rounded', style);
	 * (end)
	 * 
	 * In the above example, the new style is an array. The possible  keys of
	 * the array are all the constants in <mxConstants> that start with STYLE
	 * and the values are either JavaScript objects, such as
	 * <mxPerimeter.RightAngleRectanglePerimeter> (which is in fact a function)
	 * or expressions, such as 'true'. Note that not all keys will be
	 * interpreted by all shapes (eg. the line shape ignores the fill color).
	 * The final call to this method associates the style with a name in the
	 * stylesheet. The style is used in a cell with the following code:
	 * 
	 * (code)
	 * model.setStyle(cell, 'rounded');
	 * (end)
	 * 
	 * Parameters:
	 * 
	 * name - Name for the style to be stored.
	 * style - Key, value pairs that define the style.
	 */
	function putCellStyle($name, $style)
	{
		$this->styles[$name] = $style;
	}
	
	/**
	 * Function: getCellStyle
	 * 
	 * Returns the cell style for the specified cell or the given defaultStyle
	 * if no style can be found for the given stylename.
	 * 
	 * Parameters:
	 * 
	 * name - String of the form [(stylename|key=value);] that represents the
	 * style.
	 * defaultStyle - Default style to be returned if no style can be found.
	 */
	function getCellStyle($name, $defaultStyle = null)
	{
		$style = $defaultStyle;
		
		if ($name != null && strlen($name) > 0)
		{
			$pairs = explode(";", $name);

			if (isset($pairs))
			{
				if (isset($style) && $name{0} != ';')
				{
					$style = array_slice($style, 0);
				}
				else
				{
					$style = array();
				}
				
				for ($i = 0; $i < sizeof($pairs); $i++)
				{
					$tmp = $pairs[$i];
					$pos = strpos($pairs[$i], "=");
					
					if ($pos !== false)
					{
						$key = substr($tmp, 0, $pos);
						$value = substr($tmp, $pos+1);
						
						if ($value == mxConstants::$NONE)
						{
							unset($style[$key]);
						}
						else
						{
							$style[$key] = $value;
						}
					}
					else if (isset($this->styles[$tmp]))
					{
						$tmpStyle = $this->styles[$tmp];

						foreach ($tmpStyle as $key => $value)
						{
							$style[$key] = $value;
						}
					}
				}
			}
		}

		return $style;
	}

}

/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxGeometry extends mxRectangle
{

	/**
	 * Class: mxGeometry
	 *
	 * Represents the geometry of a cell. For vertices, the geometry consists
	 * of the x- and y-location, as well as the width and height. For edges,
	 * the edge either defines the source- and target-terminal, or the geometry
	 * defines the respective terminal points.
	 * 
	 * Variable: TRANSLATE_CONTROL_POINTS
	 * 
	 * Global switch to translate the points in translate. Default is true.
	 */
	public static $TRANSLATE_CONTROL_POINTS = true;

	/**
	 * Variable: alternateBounds
	 *
	 * Stores alternate values for x, y, width and height in a rectangle.
	 * Default is null.
	 */
	var $alternateBounds;

	/**
	 * Variable: sourcePoint
	 *
	 * Defines the source point of the edge. This is used if the corresponding
	 * edge does not have a source vertex. Otherwise it is ignored. Default is
	 * null.
	 */
	var $sourcePoint;
	
	/**
	 * Variable: targetPoint
	 *
	 * Defines the target point of the edge. This is used if the corresponding
	 * edge does not have a target vertex. Otherwise it is ignored. Default is
	 * null.
	 */
	var $targetPoint;
		
	/**
	 * Variable: points
	 *
	 * Array of <mxPoints> which specifies the control points along the edge.
	 * These points are the intermediate points on the edge, for the endpoints
	 * use <targetPoint> and <sourcePoint> or set the terminals of the edge to
	 * a non-null value. Default is null.
	 */
	var $points;
	
	/**
	 * Variable: offset
	 *
	 * Holds the offset of the label for edges. This is the absolute vector
	 * between the center of the edge and the top, left point of the label.
	 * Default is null.
	 */
	var $offset;

	/**
	 * Variable: relative
	 *
	 * Specifies if the coordinates in the geometry are to be interpreted as
	 * relative coordinates. Default is false. This is used to mark a geometry
	 * with an x- and y-coordinate that is used to describe an edge label
	 * position.
	 */
	var $relative = false;

	/**
	 * Constructor: mxGeometry
	 *
	 * Constructs a new object to describe the size and location
	 * of a vertex or the control points of an edge.
	 */
	function __construct($x=0, $y=0, $width=0, $height=0)
	{
		parent::__construct($x, $y, $width, $height);
	}

	/**
	 * Function: getTerminalPoint
	 * 
	 * Returns the <mxPoint> representing the source or target point of this
	 * edge. This is only used if the edge has no source or target vertex.
	 * 
	 * Parameters:
	 * 
	 * isSource - Boolean that specifies if the source or target point
	 * should be returned.
	 */
	function getTerminalPoint($isSource)
	{
		return ($isSource) ? $this->sourcePoint : $this->targetPoint;
	}
	
	/**
	 * Function: setTerminalPoint
	 * 
	 * Sets the <sourcePoint> or <targetPoint> to the given <mxPoint> and
	 * returns the new point.
	 * 
	 * Parameters:
	 * 
	 * point - Point to be used as the new source or target point.
	 * isSource - Boolean that specifies if the source or target point
	 * should be set.
	 */
	function setTerminalPoint($point, $isSource)
	{
		if ($isSource)
		{
			$this->sourcePoint = $point;
		}
		else
		{
			$this->targetPoint = $point;
		}
		
		return $point;
	}
	
	/**
	 * Function: translate
	 * 
	 * Translates the geometry by the specified amount. That is, <x> and <y>
	 * of the geometry, the <sourcePoint>, <targetPoint> and all elements of
	 * <points> are translated by the given amount. <x> and <y> are only
	 * translated if <relative> is false. If <TRANSLATE_CONTROL_POINTS> is
	 * false, then <points> are not modified by this function.
	 * 
	 * Parameters:
	 * 
	 * dx - Integer that specifies the x-coordinate of the translation.
	 * dy - Integer that specifies the y-coordinate of the translation.
	 */
	function translate($dx, $dy)
	{
		// Translates the geometry
		if (!$this->relative)
		{
			$this->x += $dx;
			$this->y += $dy;
		}
		
		// Translates the source point
		if ($this->sourcePoint != null)
		{
			$this->sourcePoint->x += $dx;
			$this->sourcePoint->y += $dy;
		}
		
		// Translates the target point
		if ($this->targetPoint != null)
		{
			$this->targetPoint->x += $dx;
			$this->targetPoint->y += $dy;
		}

		// Translate the control points
		if (mxGeometry::$TRANSLATE_CONTROL_POINTS &&
			$this->points != null)
		{
			$count = sizeof($this->points);
			
			for ($i = 0; $i < $count; $i++)
			{
				$pt = $this->points[i];
				
				$pt->x += $dx;
				$pt->y += $dy;
			}
		}
	}
	
	/**
	 * Function: copy
	 *
	 * Returns a copy of this <mxGeometry>.
	 */
	function copy()
	{
	 	$clone = new mxGeometry($this->x, $this->y, $this->width, $this->height);
				
		// Clones the points
		if ($this->points != null)
		{
			$clone->points = array();
			
			for ($i = 0; $i < sizeof($this->points); $i++)
			{
				array_push($clone->points, $this->points[$i]->copy());
			}
		}
		
		// Clones the alternatebounds
		if ($this->alternateBounds != null)
		{
			$clone->alternateBounds = $this->alternateBounds->copy();
		}
		
		// Clones the offset
		if ($this->offset != null)
		{
			$clone->offset = $this->offset->copy();
		}
		
		// Clones the source and targetpoint
		if ($this->sourcePoint != null)
		{
			$clone->sourcePoint = $this->sourcePoint->copy();
		}
		
		if ($this->targetPoint != null)
		{
			$clone->targetPoint = $this->targetPoint->copy();
		}

	 	$clone->relative = $this->relative;

		return $clone;
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
interface mxEdgeStyleFunction
{

	/**
	 * Interface: mxEdgeStyleFunction
	 * 
	 * Defines the requirements for an edge style function.
	 * 
	 * Function: apply
	 * 
	 * Implements an edge style function. At the time the function is called, the result
	 * array contains a placeholder (null) for the first absolute point,
	 * that is, the point where the edge and source terminal are connected.
	 * The implementation of the style then adds all intermediate waypoints
	 * except for the last point, that is, the connection point between the
	 * edge and the target terminal. The first ant the last point in the
	 * result array are then replaced with mxPoints that take into account
	 * the terminal's perimeter and next point on the edge.
	 *
	 * Parameters:
	 * 
	 * state - <mxCellState> that represents the edge to be updated.
	 * source - <mxCellState> that represents the source terminal.
	 * target - <mxCellState> that represents the target terminal.
	 * points - List of relative control points.
	 * result - Array of <mxPoints> that represent the actual points of the
	 * edge.
	 */
	public function apply($state, $source, $target, $points, &$result);

}

/**
 * Class: mxEntityRelation
 * 
 * Implements an entity relation style for edges (as used in database
 * schema diagrams).  At the time the function is called, the result
 * array contains a placeholder (null) for the first absolute point,
 * that is, the point where the edge and source terminal are connected.
 * The implementation of the style then adds all intermediate waypoints
 * except for the last point, that is, the connection point between the
 * edge and the target terminal. The first ant the last point in the
 * result array are then replaced with mxPoints that take into account
 * the terminal's perimeter and next point on the edge.
 */
class mxEntityRelation implements mxEdgeStyleFunction
{

	/**
	 * 
	 */
	public function apply($state, $source, $target, $points, &$result)
	{
		$view = $state->view;
		$graph = $view->graph;
		$segment = mxUtils::getValue($state->style,
			mxConstants::$STYLE_SEGMENT,
			mxConstants::$ENTITY_SEGMENT) * $view->scale;

		$pts = $state->absolutePoints;
		$p0 = $pts[0];
		$pe = $pts[sizeof($pts) - 1];

	 	$isSourceLeft = false;
	 	
		if (isset($p0))
		{
			$source = new mxCellState();
			$source->x = $p0->x;
			$source->y = $p0->y;
		}
	 	else if (isset($source))
	 	{
		 	$sourceGeometry = $graph->getCellGeometry($source->cell);	 		
	 	
		 	if ($sourceGeometry->relative)
		 	{
		 		$isSourceLeft = $sourceGeometry->x <= 0.5;
		 	}
		 	else if ($target != null)
		 	{
		 		$isSourceLeft = $target->x + $target->width < $source->x;
		 	}
		}
	 	
	 	$isTargetLeft = true;
	 	
		if (isset($pe))
		{
			$target = new mxCellState();
			$target->x = $pe->x;
			$target->y = $pe->y;
		}
	 	else if (isset($target))
	 	{
		 	$targetGeometry = $graph->getCellGeometry($target->cell);	 		
	 	
		 	if ($targetGeometry->relative)
		 	{
		 		$isTargetLeft = $targetGeometry->x <= 0.5;
		 	}
		 	else if ($source != null)
		 	{
		 		$isTargetLeft = $source->x + $source->width < $target->x;
		 	}
		}
	 	
		if (isset($source) && isset($target))
		{
			$x0 = ($isSourceLeft) ? $source->x : $source->x + $source->width;
			$y0 = $view->getRoutingCenterY($source);
			
			$xe = ($isTargetLeft) ? $target->x : $target->x + $target->width;
			$ye = $view->getRoutingCenterY($target);
	
			$seg = $segment;
			
			$dx = ($isSourceLeft) ? -$seg : $seg;
			$dep = new mxPoint($x0+$dx, $y0);
			array_push($result, $dep);
					
			$dx = ($isTargetLeft) ? -$seg : $seg;
			$arr = new mxPoint($xe+$dx, $ye);
	
			// Adds intermediate points if both go out on same side
			if ($isSourceLeft == $isTargetLeft)
			{
				$x = ($isSourceLeft) ?
					min($x0, $xe)-$segment :
					max($x0, $xe)+$segment;
				array_push($result, new mxPoint($x, $y0));
				array_push($result, new mxPoint($x, $ye));
			}
			else if (($dep->x < $arr->x) == $isSourceLeft)
			{
				$midY = $y0 + ($ye - $y0) / 2;
				array_push($result, new mxPoint($dep->x, $midY));
				array_push($result, new mxPoint($arr->x, $midY));
			}
			
			array_push($result, $arr);
		}
	}

}

/**
 * Class: mxLoop
 * 
 * Implements a self-reference, aka. loop.
 */
class mxLoop implements mxEdgeStyleFunction
{

	/**
	 * 
	 */
	public function apply($state, $source, $target, $points, &$result)
	{
		if ($source != null)
		{
			$view = $state->view;
			$graph = $view->graph;
			$pt = ($points != null && sizeof($points) > 0) ? $points[0] : null;

			if ($pt != null)
			{
				$pt = $view->transformControlPoint($state, $pt);
					
				if (mxUtils::contains($source, $pt->x, $pt->y))
				{
					$pt = null;
				}
			}
		
			$x = 0;
			$dx = 0;
			$y = 0;
			$dy = 0;
			
			$seg = mxUtils::getValue($state->style,
				mxConstants::$STYLE_SEGMENT, $graph->gridSize)
				* $view->scale;
			$dir = mxUtils::getValue($state->style,
				mxConstants::$STYLE_DIRECTION,
				mxConstants::$DIRECTION_WEST);

			if ($dir == mxConstants::$DIRECTION_NORTH ||
				$dir == mxConstants::$DIRECTION_SOUTH)
			{
				$x = $view->getRoutingCenterX($source);
				$dx = $seg;
			}
			else
			{
				$y = $view->getRoutingCenterY($source);
				$dy = $seg;
			}
			
			if ($pt == null ||
				$pt->x < $source->x ||
				$pt->x > $source->x + $source->width)
			{
				if ($pt != null)
				{
					$x = $pt->x;
					$dy = max(abs($y - $pt->y), $dy);
				}
				else
				{
					if ($dir == mxConstants::$DIRECTION_NORTH)
					{
						$y = $source->y - 2 * $dx;
					}
					else if ($dir == mxConstants::$DIRECTION_SOUTH)
					{
						$y = $source->y + $source->height + 2 * $dx;
					}
					else if ($dir == mxConstants::$DIRECTION_EAST)
					{
						$x = $source->x - 2 * $dy;
					}
					else
					{
						$x = $source->x + $source->width + 2 * $dy;
					}
				}
			}
			else if ($pt != null)
			{
				$x = $view->getRoutingCenterX($source);
				$dx = max(abs($x - $pt->x), $dy);
				$y = $pt->y;
				$dy = 0;
			}
			
			array_push($result, new mxPoint($x-$dx, $y-$dy));
			array_push($result, new mxPoint($x+$dx, $y+$dy));
		}
	}
	
}

/**
 * Class: mxElbowConnector
 * 
 * Uses either <SideToSide> or <TopToBottom> depending on the horizontal
 * flag in the cell style. <SideToSide> is used if horizontal is true or
 * unspecified. See <EntityRelation> for a description of the
 * parameters.
 */
class mxElbowConnector implements mxEdgeStyleFunction
{

	/**
	 * 
	 */
	public function apply($state, $source, $target, $points, &$result)
	{
		$pt = ($points != null && sizeof($points) > 0) ? $points[0] : null;

		$vertical = false;
		$horizontal = false;
		
		if ($source != null && $target != null)
		{
			if ($pt != null)
			{
				$left = min($source->x, $target->x);
				$right = max($source->x + $source->width,
					$target->x + $target->width);
	
				$top = min($source->y, $target->y);
				$bottom = max($source->y + $source->height,
					$target->y + $target->height);

				$pt = $state->view->transformControlPoint($state, $pt);
				
				$vertical = $pt->y < $top || $pt->y > $bottom;
				$horizontal = $pt->x < $left || $pt->x > $right;
			}
			else
			{
				$left = max($source->x, $target->x);
				$right = min($source->x + $source->width,
					$target->x + $target->width);
					
				$vertical = $left == $right;
				
				if (!$vertical)
				{
					$top = max($source->y, $target->y);
					$bottom = min($source->y + $source->height,
						$target->y + $target->height);
						
					$horizontal = $top == $bottom;
				}
			}
		}

		if (!$horizontal && ($vertical ||
			mxUtils::getValue($state->style, mxConstants::$STYLE_ELBOW) == mxConstants::$ELBOW_VERTICAL))
		{
			mxEdgeStyle::$TopToBottom->apply($state, $source, $target, $points, $result);
		}
		else
		{
			mxEdgeStyle::$SideToSide->apply($state, $source, $target, $points, $result);
		}
	}

}

/**
 * Class: mxSideToSide
 * 
 * Implements a vertical elbow edge. See <EntityRelation> for a description
 * of the parameters.
 */
class mxSideToSide implements mxEdgeStyleFunction
{

	/**
	 * 
	 */
	public function apply($state, $source, $target, $points, &$result)
	{
		$view = $state->view;
		$pt = ($points != null && sizeof($points) > 0) ? $points[0] : null;
		$pts = $state->absolutePoints;
		$p0 = $pts[0];
		$pe = $pts[sizeof($pts) - 1];
		
		if ($pt != null)
		{
			$pt = $view->transformControlPoint($state, $pt);
		}

		if (isset($p0))
		{
			$source = new mxCellState();
			$source->x = $p0->x;
			$source->y = $p0->y;
		}
		
		if (isset($pe))
		{
			$target = new mxCellState();
			$target->x = $pe->x;
			$target->y = $pe->y;
		}

		if (isset($source) && isset($target))
		{
			$l = max($source->x, $target->x);
			$r = min($source->x+$source->width, $target->x+$target->width);
	
			$x = ($pt != null) ? $pt->x : $r + ($l-$r)/2;
			
			$y1 = $view->getRoutingCenterY($source);
			$y2 = $view->getRoutingCenterY($target);
			
			if ($pt != null)
			{
				if ($pt->y >= $source->y &&
					$pt->y <= $source->y + $source->height)
				{
					$y1 = $pt->y;
				}
				
				if ($pt->y >= $target->y &&
					$pt->y <= $target->y + $target->height)
				{
					$y2 = $pt->y;
				}
			}
			
			if (!mxUtils::contains($target, $x, $y1) &&
				!mxUtils::contains($source, $x, $y1))
			{
				array_push($result, new mxPoint($x, $y1));
			}
			
			if (!mxUtils::contains($target, $x, $y2) &&
				!mxUtils::contains($source, $x, $y2))
			{
				array_push($result, new mxPoint($x, $y2));
			}
	
			if (sizeof($result) == 1)
			{
				if (isset($pt))
				{
					array_push($result, new mxPoint($x, $pt->y));
				}
				else
				{
					$t = max($source->y, $target->y);
					$b = min($source->y+$source->height, $target->y+$target->height);
					
					array_push($result, new mxPoint($x, $t + ($b - $t) / 2));
				}
			}
		}
	}
	
}
	
/**
 * Class: mxTopToBottom
 * 
 * Implements a horizontal elbow edge. See <EntityRelation> for a
 * description of the parameters.
 */
class mxTopToBottom implements mxEdgeStyleFunction
{

	/**
	 * 
	 */
	public function apply($state, $source, $target, $points, &$result)
	{
		$view = $state->view;
		$pt = ($points != null && sizeof($points) > 0) ? $points[0] : null;
		$pts = $state->absolutePoints;
		$p0 = $pts[0];
		$pe = $pts[sizeof($pts) - 1];
		
		if ($pt != null)
		{
			$pt = $view->transformControlPoint($state, $pt);
		}

		if (isset($p0))
		{
			$source = new mxCellState();
			$source->x = $p0->x;
			$source->y = $p0->y;
		}
		
		if (isset($pe))
		{
			$target = new mxCellState();
			$target->x = $pe->x;
			$target->y = $pe->y;
		}

		if (isset($source) && isset($target))
		{
			$t = max($source->y, $target->y);
			$b = min($source->y+$source->height, $target->y+$target->height);
	
			$x = $view->getRoutingCenterX($source);
			
			if ($pt != null && 
				$pt->x >= $source->x &&
				$pt->x <= $source->x + $source->width)
			{
				$x = $pt->x;
			}
			
			$y = ($pt != null) ? $pt->y : $b + ($t - $b) / 2;
			
			if (!mxUtils::contains($target, $x, $y) &&
				!mxUtils::contains($source, $x, $y))
			{
				array_push($result, new mxPoint($x, $y));
			}
			
			if ($pt != null &&
				$pt->x >= $target->x &&
				$pt->x <= $target->x + $target->width)
			{
				$x = $pt->x;
			}
			else
			{
				$x = $view->getRoutingCenterX($target);
			}
			
			if (!mxUtils::contains($target, $x, $y) &&
				!mxUtils::contains($source, $x, $y))
			{
				array_push($result, new mxPoint($x, $y));
			}
	
			if (sizeof($result) == 1)
			{
				if ($pt == null)
				{
					array_push($result, new mxPoint($x, $y));
				}
				else
				{
					$l = max($source->x, $target->x);
					$r = min($source->x + $source->width, $target->x + $target->width);
					
					array_push($result, new mxPoint($r + ($r - $l) / 2, $y));
				}
			}
		}
	}
	
}

/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxGdCanvas
{
	/** 
	 * Variable: antialias
	 *
	 * Specifies if image aspect should be preserved in drawImage. Default is true.
	 */
	public static $PRESERVE_IMAGE_ASPECT = true;
	
	/**
	 * Class: mxGdCanvas
	 *
	 * Canvas for drawing graphs using the GD library. This class requires GD
	 * support (GDLib). Note that rounded corners, gradients and word wrapping
	 * are not supported by GD.
	 * 
	 * Variable: antialias
	 *
	 * Specifies if antialiasing should be enabled. Default is false. NOTE: GD
	 * has a known bug where strokeWidths are ignored if this is enabled.
	 */
	var $antialias = false;

	/**
	 * Variable: enableTtf
	 *
	 * Specifies if truetype fonts are enabled if available. Default is <mxConstants.TTF_ENABLED>.
	 */
	var $enableTtf;

	/**
	 * Variable: shadowColor
	 *
	 * Holds the color object for the shadow color defined in
	 * <mxConstants.W3C_SHADOWCOLOR>.
	 */
	var $shadowColor;

	/**
	 * Defines the base path for images with relative paths. Trailing slash
	 * is required. Default is an empty string.
	 */
	var $imageBasePath;

	/**
	 * Variable: imageCache
	 *
	 * Holds the image cache.
	 */
	var $imageCache = array();
	
	/**
	 * Variable: image
	 *
	 * Holds the image.
	 */
	var $image;
	
	/**
	 * Variable: height
	 *
	 * Holds the height.
	 */
	var $scale;

	/**
	 * Constructor: mxGdCanvas
	 *
	 * Constructs a new GD canvas. Use a HTML color definition for
	 * the optional background parameter, eg. white or #FFFFFF.
	 * The buffered <image> is only created if the given
	 * width and height are greater than 0.
	 */
	function __construct($width = 0, $height = 0, $scale = 1,
		$background = null, $imageBasePath = "")
	{
	 	$this->enableTtf = mxConstants::$TTF_ENABLED;
		$this->imageBasePath = $imageBasePath;
	 	$this->scale = $scale;
	 	
	 	if ($width > 0 && $height > 0)
	 	{
			$this->image = @imageCreateTrueColor($width, $height);
			
			if ($this->antialias &&
				function_exists("imageantialias"))
			{
				imageantialias($this->image, true);
	 		}
			
			if (isset($background))
			{
				$color = $this->getColor($background);
				imageFilledRectangle($this->image,
					0, 0, $width, $height, $color);
			}
			
			$this->shadowColor = $this->getColor(mxConstants::$W3C_SHADOWCOLOR);
		}
	}

	/**
	 * Function: loadImage
	 * 
	 * Returns an image instance for the given URL. If the URL has
	 * been loaded before than an instance of the same instance is
	 * returned as in the previous call.
	 */
	function loadImage($image)
	{
		$img = (array_key_exists($image, $this->imageCache)) ? $this->imageCache[$image] : null;
		
		if (!isset($img))
		{
			$img = mxUtils::loadImage($image);

			if (isset($img))
			{
				$this->imageCache[$image] = $img;
			}
		}
		
		return $img;
	}

	/**
	 * Function: drawCell
	 * 
	 * Draws the given cell state.
	 */
	function drawCell($state)
	{
		$style = $state->style;
		
		if (sizeof($state->absolutePoints) > 1)
		{
			$dashed = mxUtils::getNumber($style, mxConstants::$STYLE_DASHED);
			$stroke = mxUtils::getValue($style, mxConstants::$STYLE_STROKECOLOR);
			$strokeWidth = mxUtils::getNumber($style, mxConstants::$STYLE_STROKEWIDTH, 1) * $this->scale;

			if ($stroke == "none")
			{
				$stroke = null;
			}
						
			if (isset($this->image))
			{
				// KNOWN: Stroke widths are ignored by GD if antialias is on
				imagesetthickness($this->image, $strokeWidth);
			}
	
			// Draws the start marker
			$marker = mxUtils::getValue($style, mxConstants::$STYLE_STARTARROW);
	
			$pts = $state->absolutePoints;
			$p0 = $pts[0];
			$pt = $pts[1];
			$offset = null;
			
			if (isset($marker))
			{
				$size = mxUtils::getNumber($style, mxConstants::$STYLE_STARTSIZE,
					mxConstants::$DEFAULT_MARKERSIZE);
				$offset = $this->drawMarker($marker, $pt, $p0, $size, $stroke);
			}
			else
			{
				$dx = $pt->x - $p0->x;
				$dy = $pt->y - $p0->y;
	
				$dist = max(1, sqrt($dx * $dx + $dy * $dy));
				$nx = $dx * $strokeWidth / $dist;
				$ny = $dy * $strokeWidth / $dist;
				
				$offset = new mxPoint($nx / 2, $ny / 2);
			}

			// Applies offset to the point
			if (isset($offset))
			{
				$p0 = $p0->copy();
				$p0->x += $offset->x;
				$p0->y += $offset->y;
				
				unset($offset);
			}
		
			// Draws the end marker
			$len = sizeof($pts);
			$marker = mxUtils::getValue($style, mxConstants::$STYLE_ENDARROW);
			
			$pe = $pts[$len - 1];
			$pt = $pts[$len - 2];
			$offset = null;
			
			if (isset($marker))
			{
				$size = mxUtils::getNumber($style, mxConstants::$STYLE_ENDSIZE,
					mxConstants::$DEFAULT_MARKERSIZE);
				$offset = $this->drawMarker($marker, $pt, $pe, $size, $stroke);
			}
			else
			{
				$dx = $pt->x - $p0->x;
				$dy = $pt->y - $p0->y;
	
				$dist = max(1, sqrt($dx * $dx + $dy * $dy));
				$nx = $dx * $strokeWidth / $dist;
				$ny = $dy * $strokeWidth / $dist;
				
				$offset = new mxPoint($nx / 2, $ny / 2);
			}

			// Applies offset to the point			
			if (isset($offset))
			{
				$pe = $pe->copy();
				$pe->x += $offset->x;
				$pe->y += $offset->y;
				
				unset($offset);
			}

			// Draws the line segments
			$pt = $p0;
			
		 	for ($i = 1; $i < $len - 1; $i++)
		 	{
		 		$tmp = $pts[$i];
		 		$this->drawLine($pt->x, $pt->y, $tmp->x, $tmp->y, $stroke, $dashed);
		 		$pt = $tmp;
			}
			
			$this->drawLine($pt->x, $pt->y, $pe->x, $pe->y, $stroke, $dashed);
			
			if (isset($this->image))
			{
				imagesetthickness($this->image, 1);
			}
		}
		else
		{
			$x = $state->x;
			$y = $state->y;
			$w = $state->width;
			$h = $state->height;

			// Draws the vertex
			if (mxUtils::getValue($style, mxConstants::$STYLE_SHAPE, "") !=
            	mxConstants::$SHAPE_SWIMLANE)
			{
				$this->drawShape($x, $y, $w, $h, $style);
			}
			else
			{
				$start = mxUtils::getNumber($style, mxConstants::$STYLE_STARTSIZE,
					mxConstants::$DEFAULT_STARTSIZE) * $this->scale;

                    // Removes some styles to draw the content area
				$cloned = array_slice($style, 0);
				$cloned[mxConstants::$STYLE_FILLCOLOR] = $cloned[mxConstants::$STYLE_SWIMLANE_FILLCOLOR];
				unset($cloned[mxConstants::$STYLE_GRADIENTCOLOR]);
				unset($cloned[mxConstants::$STYLE_ROUNDED]);

				// TODO: Clone style, remove fill and rounded and take into account
				// the label orientation
				//if (mxUtils::getValue($style, mxConstants::$STYLE_HORIZONTAL, true))
				{
					$this->drawShape($x, $y, $w, $h, $cloned);
					$this->drawShape($x, $y, $w, min($h, $start), $style);
				}
			}
		}
	}
	
	/**
	 * Function: drawLabel
	 * 
	 * Draws the given label.
	 */
	function drawLabel($text, $state, $html = false)
	{
		$bounds = $state->labelBounds;
		
		if (isset($bounds))
		{
			$x = $bounds->x;
			$y = $bounds->y;
			$w = $bounds->width;
			$h = $bounds->height;
			
			$this->drawText($text, $x, $y, $w, $h, $state->style);
		}
	}
	
	/**
	 * Function: drawMarker
	 * 
	 * Draws the specified marker.
	 */
	function drawMarker($type, $p0, $pe, $size, $stroke)
	{
		$offset = null;

		// Computes the norm and the inverse norm
		$dx = $pe->x - $p0->x;
		$dy = $pe->y - $p0->y;

		$dist = max(1, sqrt($dx*$dx+$dy*$dy));
		$absSize = $size * $this->scale;
		$nx = $dx * $absSize / $dist;
		$ny = $dy * $absSize / $dist;
		
		$pe = $pe->copy();
		$pe->x -= $nx / (2 * $size);
		$pe->y -= $ny / (2 * $size);

		if ($type == mxConstants::$ARROW_CLASSIC ||
			$type == mxConstants::$ARROW_BLOCK)
		{
			$poly = array($pe->x, $pe->y,
				$pe->x - $nx - $ny / 2,
				$pe->y - $ny + $nx / 2);

			if ($type == mxConstants::$ARROW_CLASSIC)
			{
				array_push($poly, $pe->x - $nx * 3 / 4, $pe->y - $ny * 3 / 4);
			}
			
			array_push($poly, $pe->x + $ny / 2 - $nx, $pe->y - $ny - $nx / 2);
			$this->drawPolygon($poly, $stroke, $stroke, false);
			
			$offset = new mxPoint(-$nx * 3 / 4, -$ny * 3 / 4);
		}
		else if ($type == mxConstants::$ARROW_OPEN)
		{
			$nx *= 1.2;
			$ny *= 1.2;
			
			$this->drawLine($pe->x - $nx -  $ny / 2, $pe->y - $ny + $nx / 2,
				$pe->x - $nx / 6, $pe->y - $ny / 6, $stroke);
			$this->drawLine($pe->x - $nx / 6, $pe->y - $ny / 6,
				$pe->x + $ny / 2 - $nx, $pe->y - $ny - $nx / 2, $stroke);

			$offset = new mxPoint(-$nx / 4, -$ny / 4);
		}
		else if ($type == mxConstants::$ARROW_OVAL)
		{
			$nx *= 1.2;
			$ny *= 1.2;
			$absSize *= 1.2;
			
			$tmp = $absSize / 2;
			$x = $pe->x - $nx / 2 - $tmp;
			$y = $pe->y - $ny / 2 - $tmp;
			
			$this->drawOval($x, $y, $absSize, $absSize, $stroke, $stroke, false);
			
			$offset = new mxPoint(-$nx / 2, -$ny / 2);
		}
		else if ($type == mxConstants::$ARROW_DIAMOND)
		{
			$nx *= 1.2;
			$ny *= 1.2;
			
			$poly = array($pe->x + $nx / 2, $pe->y + $ny / 2,
				$pe->x - $ny / 2, $pe->y + $nx / 2,
				$pe->x - $nx / 2, $pe->y - $ny / 2,
				$pe->x + $ny, $pe->y - $nx / 2);
			$this->drawPolygon($poly, $stroke, $stroke, false);
		}
		
		return $offset;
	}

	/**
	 * Function: getImage
	 *
	 * Returns an image that represents this canvas.
	 */
	function getImage()
	{
		return $this->image;
	}

	/**
	 * Function: setImage
	 *
	 * Sets the image that represents the canvas.
	 */
	function setImage($img)
	{
		$this->image = $img;
	}

	/**
	 * Function: getImageForStyle
	 *
	 * Returns an image that represents this canvas.
	 */
	function getImageForStyle($style)
	{
		$filename = mxUtils::getValue($style, mxConstants::$STYLE_IMAGE, "");

		if ($filename != null && strpos($filename, "/") > 0)
		{
			$filename = $this->imageBasePath.$filename;
		}

		return $filename;
	}
	
	/**
	 * Function: drawLine
	 *
	 * Draws the given line.
	 */
	function drawLine($x0, $y0, $x1, $y1, $stroke = null, $dashed = false)
	{
		$stroke = $this->getColor($stroke, "black");
		
		if ($dashed)
		{
			// ImageDashedLine only works for vertical lines and
			// ImageSetStyle doesnt work with antialiasing.
			if ($this->antialias &&
				function_exists("imageantialias"))
			{
				imageantialias($this->image, false);
	 		}
	 		
			$st = array($stroke, $stroke, $stroke, $stroke,
				IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT,
				IMG_COLOR_TRANSPARENT, IMG_COLOR_TRANSPARENT);
			imageSetStyle($this->image, $st);
			imageLine($this->image, $x0, $y0, $x1, $y1, IMG_COLOR_STYLED);

			if ($this->antialias &&
				function_exists("imageantialias"))
			{
				imageantialias($this->image, true);
	 		}
		}
		else
		{
			imageLine($this->image, $x0, $y0, $x1, $y1, $stroke);
		}
	}
	
	/**
	 * Function: drawShape
	 *
	 * Draws the given shape.
	 */
	function drawShape($x, $y, $w, $h, $style)
	{
		// Draws the shape
		$shape = mxUtils::getValue($style, mxConstants::$STYLE_SHAPE);
		$image = $shape == mxConstants::$SHAPE_IMAGE;
		
		// Redirects background styles for image shapes
		$fillStyle = ($image) ? mxConstants::$STYLE_IMAGE_BACKGROUND : mxConstants::$STYLE_FILLCOLOR;
		$strokeStyle = ($image) ? mxConstants::$STYLE_IMAGE_BORDER : mxConstants::$STYLE_STROKECOLOR;

        // Prepares the background and foreground
		$stroke = mxUtils::getValue($style, $strokeStyle);
		$fill = mxUtils::getValue($style, $fillStyle);
					
		if ($stroke == "none")
		{
			$stroke = null;
		}
		
		if ($fill == "none")
		{
			$fill = null;
		}
		
		if ($fill != null || $stroke != null || $image)
		{
			$shadow = mxUtils::getValue($style, mxConstants::$STYLE_SHADOW);
			$strokeWidth = mxUtils::getValue($style, mxConstants::$STYLE_STROKEWIDTH, 1) * $this->scale;
			
			if (isset($this->image))
			{
				imagesetthickness($this->image, $strokeWidth);
			}

			if ($shape == mxConstants::$SHAPE_ELLIPSE)
	 		{
	 			$this->drawOval($x, $y, $w, $h, $fill, $stroke, $shadow);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_LINE)
	 		{
				$direction = mxUtils::getValue($style, mxConstants::$STYLE_DIRECTION, mxConstants::$DIRECTION_EAST);
	 			
	            if ($direction == mxConstants::$DIRECTION_EAST || $direction == mxConstants::$DIRECTION_WEST)
	            {
	                $mid = $y + $h / 2;
	                $this->drawLine($x, $mid, $x + $w, $mid, $stroke);
	            }
	            else
	            {
	                $mid = $x + $w / 2;
	                $this->drawLine($mid, $y, $mid, $y + $h, $stroke);
	            }
	 			
	 		}
	 		else if ($shape == mxConstants::$SHAPE_DOUBLE_ELLIPSE)
	 		{
	 			$this->drawOval($x, $y, $w, $h, $fill, $stroke, $shadow);
	 			
	 			$inset = (3 + 1) * $this->scale;
	 			$x += $inset;
	 			$y += $inset;
	 			$w -= 2 * $inset;
	 			$h -= 2 * $inset;
	 			$this->drawOval($x, $y, $w, $h, null, $stroke, false);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_RHOMBUS)
	 		{
				$this->drawRhombus($x, $y, $w, $h, $fill, $stroke, $shadow);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_TRIANGLE)
	 		{
				$dir = mxUtils::getValue($style, mxConstants::$STYLE_DIRECTION);
				$this->drawTriangle($x, $y, $w, $h, $fill, $stroke, $shadow, $dir);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_HEXAGON)
	 		{
				$dir = mxUtils::getValue($style, mxConstants::$STYLE_DIRECTION);
				$this->drawHexagon($x, $y, $w, $h, $fill, $stroke, $shadow, $dir);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_CYLINDER)
	 		{
			 	$this->drawCylinder($x, $y, $w, $h, $fill, $stroke, $shadow);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_CLOUD)
	 		{
			 	$this->drawCloud($x, $y, $w, $h, $fill, $stroke, $shadow);
	 		}
	 		else if ($shape == mxConstants::$SHAPE_ACTOR)
	 		{
			 	$this->drawActor($x, $y, $w, $h, $fill, $stroke, $shadow);
	 		}
	 		else
	 		{
				$rounded = mxUtils::getValue($style, mxConstants::$STYLE_ROUNDED);
				$dashed = mxUtils::getNumber($style, mxConstants::$STYLE_DASHED);
				$this->drawRect($x, $y, $w, $h, $fill, $stroke, $shadow, $rounded, $dashed);
	
				// Draws the image as a shape
		 		if ($image)
		 		{
					$img = $this->getImageForStyle($style);
					
					if ($img != null)
					{
						$aspect = mxGdCanvas::$PRESERVE_IMAGE_ASPECT;
						$flipH = mxUtils::getValue($style, mxConstants::$STYLE_IMAGE_FLIPH, 0);
						$flipV = mxUtils::getValue($style, mxConstants::$STYLE_IMAGE_FLIPV, 0);
						
						$this->drawImage($x, $y, $w, $h, $img, $aspect, $flipH, $flipV);
					}
				}
	 			
				// Draws the image of the label inside the label shape
	 			if ($shape == mxConstants::$SHAPE_LABEL)
	 			{
					$image = $this->getImageForStyle($style);
					
					if ($image != null)
					{
		 				$imgAlign = mxUtils::getValue($style, mxConstants::$STYLE_IMAGE_ALIGN);
		 				$imgValign = mxUtils::getValue($style, mxConstants::$STYLE_IMAGE_VERTICAL_ALIGN);
		 				$imgWidth = mxUtils::getNumber($style, mxConstants::$STYLE_IMAGE_WIDTH,
		 					mxConstants::$DEFAULT_IMAGESIZE) * $this->scale;
		 				$imgHeight = mxUtils::getNumber($style, mxConstants::$STYLE_IMAGE_HEIGHT,
		 					mxConstants::$DEFAULT_IMAGESIZE) * $this->scale;
		 				$spacing = mxUtils::getNumber($style, mxConstants::$STYLE_SPACING, 2) * $this->scale;
		 				
		 				$imgX = $x;
		 				
		 				if ($imgAlign == mxConstants::$ALIGN_LEFT)
		 				{
		 					$imgX += $spacing;
		 				}
		 				else if ($imgAlign == mxConstants::$ALIGN_RIGHT)
		 				{
		 					$imgX += $w - $imgWidth - $spacing;
		 				}
		 				else // CENTER
		 				{
		 					$imgX += ($w - $imgWidth) / 2;
		 				}
		 				
		 				$imgY = $y;
		 				
		 				if ($imgValign == mxConstants::$ALIGN_TOP)
		 				{
		 					$imgY += $spacing;
		 				}
		 				else if ($imgValign == mxConstants::$ALIGN_BOTTOM)
		 				{
		 					$imgY += $h - $imgHeight - $spacing;
		 				}
		 				else // MIDDLE
		 				{
		 					$imgY += ($h - $imgHeight) / 2;
		 				}
		
						$this->drawImage($imgX, $imgY, $imgWidth, $imgHeight, $image);
					} 				
	 			}
			}
			
			if (isset($this->image))
			{
				imagesetthickness($this->image, 1);
			}
		}
	}

	/**
	 * Function: drawPolygon
	 *
	 * Draws the given polygon.
	 */
	function drawPolygon($points, $fill = null, $stroke = null, $shadow = false)
	{
		if (isset($this->image))
		{
			$n = sizeof($points) / 2;
			
			if (isset($fill))
		 	{
				if ($shadow)
				{
					imageFilledPolygon($this->image, $this->offset($points),
						$n, $this->shadowColor);	
				}
				
			 	$fill = $this->getColor($fill);
				imageFilledPolygon($this->image, $points, $n, $fill);
			}
			
		 	if (isset($stroke))
		 	{
			 	$stroke = $this->getColor($stroke);
				imagePolygon($this->image, $points, $n, $stroke);
			}
		}
	}
	
	/**
	 * Function: drawRect
	 *
	 * Draws then given rectangle. Rounded is currently ignored.
	 */
	function drawRect($x, $y, $w, $h, $fill = null, $stroke = null,
		$shadow = false, $rounded = false, $dashed = false)
	{
		// TODO: Rounded rectangles
	 	if (isset($fill))
	 	{
			if ($shadow)
			{
				imageFilledRectangle($this->image,
					$x + mxConstants::$SHADOW_OFFSETX ,
					$y + mxConstants::$SHADOW_OFFSETY,
					$x + mxConstants::$SHADOW_OFFSETX + $w,
					$y + mxConstants::$SHADOW_OFFSETX + $h,
					$this->shadowColor);
			}
			
		 	$fill = $this->getColor($fill);
			imageFilledRectangle($this->image, $x, $y, $x + $w, $y + $h, $fill);
		}
		
	 	if (isset($stroke))
	 	{
		 	if ($dashed)
		 	{
		 		$this->drawLine($x, $y, $x + $w, $y, $stroke, $dashed);
		 		$this->drawLine($x + $w, $y, $x + $w, $y + $h, $stroke, $dashed);
		 		$this->drawLine($x, $y + $h, $x + $w, $y + $h, $stroke, $dashed);
		 		$this->drawLine($x, $y + $h, $x, $y, $stroke, $dashed);
		 	}
		 	else
		 	{
		 		$stroke = $this->getColor($stroke);
		 		imageRectangle($this->image, $x, $y, $x + $w, $y + $h, $stroke);
		 	}
		}
	}
	
	/**
	 * Function: drawOval
	 *
	 * Draws then given ellipse.
	 */
	function drawOval($x, $y, $w, $h, $fill = null, $stroke = null, $shadow = false)
	{
	 	if (isset($fill))
	 	{
			if ($shadow)
			{
				imageFilledEllipse($this->image,
					$x + $w / 2 + mxConstants::$SHADOW_OFFSETX,
					$y + $h / 2 + mxConstants::$SHADOW_OFFSETY,
					$w, $h, $this->shadowColor);	
			}
			
		 	$fill = $this->getColor($fill);
			imageFilledEllipse($this->image, $x + $w / 2, $y + $h / 2,
				$w, $h, $fill);
		}
		
	 	if (isset($stroke))
	 	{
		 	$stroke = $this->getColor($stroke);
			imageEllipse($this->image, $x + $w / 2, $y + $h / 2,
				$w, $h, $stroke);
		}
	}

	/**
	 * Function: drawRhombus
	 *
	 * Draws then given rhombus.
	 */
	function drawRhombus($x, $y, $w, $h, $fill = null, $stroke = null, $shadow = false)
	{
		$halfWidth = $x + $w / 2;
		$halfHeight = $y + $h / 2;

		$points = array($halfWidth, $y, $x + $w, $halfHeight,
			$halfWidth, $y + $h, $x, $halfHeight, $halfWidth, $y);
			
		$this->drawPolygon($points, $fill, $stroke, $shadow);
	}
	
	/**
	 * Function: drawTriangle
	 *
	 * Draws then given triangle.
	 */
	function drawTriangle($x, $y, $w, $h, $fill = null, $stroke = null,
		$shadow = false, $direction = null)
	{
		if ($direction == mxConstants::$DIRECTION_NORTH)
		{
			$points = array($x, $y + $h, $x + $w / 2, $y,
				$x + $w, $y + $h, $x, $y + $h);
		}
		else if ($direction == mxConstants::$DIRECTION_SOUTH)
		{
			$points = array($x, $y, $x + $w / 2, $y + $h,
				$x + $w, $y, $x, $y);
		}
		else if ($direction == mxConstants::$DIRECTION_WEST)
		{
			$points = array($x + $w, $y, $x, $y + $h / 2,
				$x + $w, $y + $h, $x + $w, $y);
		}
		else // east
		{
			$points = array($x, $y, $x + $w, $y + $h / 2,
				$x, $y + $h, $x, $y);
		}
		
		$this->drawPolygon($points, $fill, $stroke, $shadow);
	}
		
	/**
	 * Function: drawHexagon
	 *
	 * Draws then given haxagon.
	 */
	function drawHexagon($x, $y, $w, $h, $fill = null, $stroke = null,
		$shadow = false, $direction = null)
	{
		if ($direction == mxConstants::$DIRECTION_NORTH ||
			$direction == mxConstants::$DIRECTION_SOUTH)
		{
			$points = array($x + 0.5 * $w, $y, $x + $w, $y + 0.25 * $h,
				$x + $w, $y + 0.75 * $h, $x + 0.5 * $w, $y + $h,
				$x, $y + 0.75 * $h, $x, $y + 0.25 * $h);
		}
		else
		{
			$points = array($x + 0.25 * $w, $y, $x + 0.75 * $w, $y,
				$x + $w, $y + 0.5 * $h, $x + 0.75 * $w, $y + $h,
				$x + 0.25 * $w, $y + $h, $x, $y + 0.5 * $h);
		}
		
		$this->drawPolygon($points, $fill, $stroke, $shadow);
	}
	
	/**
	 * Function: drawCylinder
	 *
	 * Draws then given cylinder.
	 */
	function drawCylinder($x, $y, $w, $h, $fill = null, $stroke = null, $shadow = false)
	{
		$h4 = $h / 4;
	 	$h8 = $h4 / 2;

	 	if (isset($fill))
	 	{
	 		$this->drawOval($x, $y, $w, $h4, $fill, null, $shadow);
	 		$this->drawRect($x, $y + $h8, $w, $h - $h4, $fill, null, $shadow);
	 		$this->drawOval($x, $y + $h - $h4, $w, $h4, $fill, null, $shadow);
		}
		
	 	if (isset($stroke))
	 	{
	 		$this->drawOval($x, $y, $w, $h4, null, $stroke, false);
	 		$this->drawLine($x, $y + $h8, $x, $y + $h - $h8, $stroke);
	 		$this->drawLine($x + $w, $y + $h8, $x + $w, $y + $h - $h8, $stroke);
	 		$this->drawOval($x, $y + $h - $h4, $w, $h4, null, $stroke, false);
		}

		// Hides lower arc for filled cylinder
	 	if (isset($fill) && isset($stroke))
	 	{
	 		$this->drawRect($x + 1, $y + $h - $h4, $w - 2, $h8, $fill, null, false);
		}
	}
	
	/**
	 * Function: drawCloud
	 *
	 * Draws then given cloud.
	 */
	function drawCloud($x, $y, $w, $h, $fill = null, $stroke = null, $shadow=false)
	{
		if (isset($fill))
	 	{
			if ($shadow)
			{
				$dx = mxConstants::$SHADOW_OFFSETX;
				$dy = mxConstants::$SHADOW_OFFSETY;
				
				imageFilledEllipse($this->image, $x + 0.2 * $w + $dx, $y + 0.42 * $h + $dy, 0.3 * $w, 0.29 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.4 * $w + $dx, $y + 0.25 * $h + $dy, 0.4 * $w, 0.4 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.75 * $w + $dx, $y + 0.35 * $h + $dy, 0.5 * $w, 0.4 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.2 * $w + $dx, $y + 0.65 * $h + $dy, 0.3 * $w, 0.3 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.55 * $w + $dx, $y + 0.62 * $h + $dy, 0.6 * $w, 0.6 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.88 * $w + $dx, $y + 0.63 * $h + $dy, 0.3 * $w, 0.3 * $h, $this->shadowColor);
			}

			$fill = $this->getColor($fill);
			imageFilledEllipse($this->image, $x + 0.2 * $w, $y + 0.42 * $h, 0.3 * $w, 0.29 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.4 * $w, $y + 0.25 * $h, 0.4 * $w, 0.4 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.75 * $w, $y + 0.35 * $h, 0.5 * $w, 0.4 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.2 * $w, $y + 0.65 * $h, 0.3 * $w, 0.3 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.55 * $w, $y + 0.62 * $h, 0.6 * $w, 0.6 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.88 * $w, $y + 0.63 * $h, 0.3 * $w, 0.3 * $h, $fill);
		}

	 	if (isset($stroke))
	 	{
			$stroke = $this->getColor($stroke);
			imageArc($this->image, $x + 0.2 * $w, $y + 0.42 * $h, 0.3 * $w, 0.29 * $h, 125, 270, $stroke);
			imageArc($this->image, $x + 0.4 * $w, $y + 0.25 * $h, 0.4 * $w, 0.4 * $h, 170, 345, $stroke);
			imageArc($this->image, $x + 0.75 * $w, $y + 0.35 * $h, 0.5 * $w, 0.4 * $h, 230, 55, $stroke);
			imageArc($this->image, $x + 0.2 * $w, $y + 0.65 * $h, 0.3 * $w, 0.3 * $h, 50, 235, $stroke);
			imageArc($this->image, $x + 0.55 * $w, $y + 0.62 * $h, 0.6 * $w, 0.6 * $h, 33, 145, $stroke);
			imageArc($this->image, $x + 0.88 * $w, $y + 0.63 * $h, 0.3 * $w, 0.3 * $h, 290, 120, $stroke);
		}
	}
		
	/**
	 * Function: drawActor
	 *
	 * Draws then given cloud.
	 */
	function drawActor($x, $y, $w, $h, $fill = null, $stroke = null, $shadow=false)
	{
		if (isset($fill))
	 	{
			if ($shadow)
			{
				$dx = mxConstants::$SHADOW_OFFSETX;
				$dy = mxConstants::$SHADOW_OFFSETY;
					
				imageFilledEllipse($this->image, $x + 0.5 * $w + $dx, $y + 0.2 * $h + $dy, 0.4 * $w, 0.4 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.2 * $w + $dx, $y + 0.6 * $h + $dy, 0.4 * $w, 0.4 * $h, $this->shadowColor);
				imageFilledEllipse($this->image, $x + 0.8 * $w + $dx, $y + 0.6 * $h + $dy, 0.4 * $w, 0.4 * $h, $this->shadowColor);
				imageFilledRectangle($this->image, $x + 0.2 * $w + $dx, $y + 0.4 * $h + $dy, $x + 0.8 * $w + $dx, $y + 0.6 * $h + $dy, $this->shadowColor);
				imageFilledRectangle($this->image, $x + $dx, $y + 0.6 * $h + $dy, $x + $w + $dx, $y + $h + $dy, $this->shadowColor);
			}

			$fill = $this->getColor($fill);
			imageFilledEllipse($this->image, $x + 0.5 * $w, $y + 0.2 * $h, 0.4 * $w, 0.4 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.2 * $w, $y + 0.6 * $h, 0.4 * $w, 0.4 * $h, $fill);
			imageFilledEllipse($this->image, $x + 0.8 * $w, $y + 0.6 * $h, 0.4 * $w, 0.4 * $h, $fill);
			imageFilledRectangle($this->image, $x + 0.2 * $w, $y + 0.4 * $h, $x + 0.8 * $w, $y + 0.6 * $h, $fill);
			imageFilledRectangle($this->image, $x, $y + 0.6 * $h, $x + $w, $y + $h, $fill);
		}

	 	if ($stroke != null)
	 	{
			$stroke = $this->getColor($stroke);
			imageEllipse($this->image, $x + 0.5 * $w, $y + 0.2 * $h, 0.4 * $w, 0.4 * $h, $stroke);
			imageLine($this->image, $x + 0.2 * $w, $y + 0.4 * $h, $x + 0.8 * $w, $y + 0.4 * $h, $stroke);
			imageArc($this->image, $x + 0.2 * $w, $y + 0.6 * $h, 0.4 * $w, 0.4 * $h, 180, 270, $stroke);
			imageArc($this->image, $x + 0.8 * $w, $y + 0.6 * $h, 0.4 * $w, 0.4 * $h, 270, 360, $stroke);
			imageLine($this->image, $x, $y + 0.6 * $h, $x, $y + $h, $stroke);
			imageLine($this->image, $x, $y + $h, $x + $w, $y + $h, $stroke);
			imageLine($this->image, $x + $w, $y + $h, $x + $w, $y + 0.6 * $h, $stroke);
		}
	}
	
	/**
	 * Function: drawImage
	 *
	 * Draws a given image.
	 */
	function drawImage($x, $y, $w, $h, $image, $aspect = true, $flipH = false, $flipV = false)
	{
		$img = $this->loadImage($image);

		if ($img != null)
		{
			$iw = imagesx($img);
			$ih = imagesy($img);
			
			// Horizontal and vertical image flipping
			if ($flipH || $flipV)
			{
				$img = mxUtils::flipImage($img, $flipH, $flipV);
			}
			
			// Preserved aspect ratio
			if ($aspect)
			{
				$s = min($w / $iw, $h / $ih);
				$x0 = ($w - $iw * $s) / 2;
				$y0 = ($h - $ih * $s) / 2;

				imageCopyResized($this->image, $img, $x0 + $x, $y0 + $y,
					0, 0, $iw * $s, $ih * $s, $iw, $ih);
			}
			else
			{
				imageCopyResized($this->image, $img, $x, $y, 0, 0,
					$w, $h, $iw, $ih);
			}
		}
	}

	/**
	 * Function: drawText
	 */
	function drawText($string, $x, $y, $w, $h, $style)
	{
		if (gettype($string) == "string" && strlen($string) > 0)
		{
			// Draws the label background and border
			$bg = mxUtils::getValue($style, mxConstants::$STYLE_LABEL_BACKGROUNDCOLOR);
			$border = mxUtils::getValue($style, mxConstants::$STYLE_LABEL_BORDERCOLOR);
	
			if ($bg != null || $border != null)
			{			
				$bounds->width += 2;
				$bounds->x -= 2;
				$bounds->y -= 1;
	
				$this->drawRect($x, $y, $w, $h, $bg, $border, false);
			}

			// Draws the label string			
			if ($this->enableTtf && function_exists("imagettftext"))
			{
				$this->drawTtfText($string, $x, $y, $w, $h, $style);
			}
			else
			{
				$this->drawFixedText($string, $x, $y, $w, $h, $style);
			}
		}
	}
	
	/**
	 * Function: getTrueTypeFont
	 * 
	 * Returns the truetype font to be used to draw the text with the given style.
	 */
	 function getTrueTypeFont($style)
	 {
	 	return mxUtils::getTrueTypeFont($style);
	 }
	
	/**
	 * Function: getTrueTypeFontSize
	 * 
	 * Returns the truetype font size to be used to draw the text with the
	 * given style. This returns the fontSize in the style of the default
	 * fontsize multiplied with <ttfSizeFactor>.
	 */
	 function getTrueTypeFontSize($style)
	 {
	 	return mxUtils::getTrueTypeFontSize(
	 		mxUtils::getValue($style, mxConstants::$STYLE_FONTSIZE,
			mxConstants::$DEFAULT_FONTSIZE) * $this->scale);
	 }

	/**
	 * Function: drawTtfText
	 */
	function drawTtfText($string, $x, $y, $w, $h, $style)
	{
		$lines = explode("\n", $string);
		$lineCount = sizeof($lines);
		
		if ($lineCount > 0)
		{
			// Gets the orientation and alignment
			$horizontal = mxUtils::getValue($style, mxConstants::$STYLE_HORIZONTAL, true);
			$align = mxUtils::getValue($style, mxConstants::$STYLE_ALIGN, mxConstants::$ALIGN_CENTER);

			if ($align == mxConstants::$ALIGN_LEFT)
			{
				if ($horizontal)
				{
					$x += mxConstants::$LABEL_INSET;
				}
				else
				{
					$y -= mxConstants::$LABEL_INSET;
				}
			}
			else if ($align == mxConstants::$ALIGN_RIGHT)
			{
				if ($horizontal)
				{
					$x -= mxConstants::$LABEL_INSET;
				}
				else
				{
					$y += mxConstants::$LABEL_INSET;
				}
			}

			// Gets the font
			$fontSize = $this->getTrueTypeFontSize($style);
			$font = $this->getTrueTypeFont($style);

			// Gets the color
			$fontColor = mxUtils::getValue($style, mxConstants::$STYLE_FONTCOLOR);
	 		$color = $this->getColor($fontColor, "black");
	 		
	 		$dy = ((($horizontal) ? $h : $w) - 2 * mxConstants::$LABEL_INSET) / $lineCount;

			if ($horizontal)
			{
	 			$y += 0.8 * $dy + mxConstants::$LABEL_INSET;				
			}
			else
			{
				$y += $h;
				$x += $dy;
			}

			// Draws the text line by line
			for ($i = 0; $i < $lineCount; $i++)
			{
				$left = $x;
				$top = $y;
				$tmp = imagettfbbox($fontSize, 0, public_path().'/fonts/vendor/open-sans/OpenSans-Regular.ttf', $lines[$i]);
				$lineWidth = $tmp[2] - $tmp[0];
	
				if ($align == mxConstants::$ALIGN_CENTER)
				{
					if ($horizontal)
					{
						$left += ($w - $lineWidth) / 2;
					}
					else
					{
						$top -= ($h - $lineWidth) / 2;
					}
				}
				else if ($align == mxConstants::$ALIGN_RIGHT)
				{
					if ($horizontal)
					{
						$left += $w - $lineWidth;
					}
					else
					{
						$top -= $h - $lineWidth;
					}
				}
				
				$this->drawTtfTextLine($lines[$i], $left, $top, $w, $h,
					$color, $fontSize, $font, ($horizontal) ? 0 : 90);
					
				if ($horizontal)
				{
					$y += $dy;
				}
				else
				{
					$x += $dy;
				}
			}
		}
	}
	
	/**
	 * Function: drawTtxTextLine
	 *
	 * Draws a single line of the given true type font text. The w and h are
	 * the width and height of the complete text box that contains this line.
	 */
	function drawTtfTextLine($line, $x, $y, $w, $h, $color, $fontSize, $font, $rot)
	{
		imagettftext($this->image, $fontSize, $rot, $x, $y, $color, public_path().'/fonts/vendor/open-sans/OpenSans-Regular.ttf', $line);
	}
	
	/**
	 * Function: getFixedFontSize
	 * 
	 * Returns the fixed font size for GD (1 t0 5) for the given font properties
	 */
	function getFixedFontSize($fontSize, $fontFamily, $fontStyle=null)
	{
		return mxUtils::getFixedFontSize($fontSize, $fontFamily);
	}
	
	/**
	 * Function: drawString
	 */
	function drawFixedText($string, $x, $y, $w, $h, $style)
	{
		$lines = explode("\n", $string);
		$lineCount = sizeof($lines);
		
		if ($lineCount > 0)
		{
			// Gets the orientation and alignment
			$horizontal = mxUtils::getValue($style, mxConstants::$STYLE_HORIZONTAL, true);
			$align = mxUtils::getValue($style, mxConstants::$STYLE_ALIGN, mxConstants::$ALIGN_CENTER);

			if ($align == mxConstants::$ALIGN_LEFT)
			{
				if ($horizontal)
				{
					$x += mxConstants::$LABEL_INSET;
				}
				else
				{
					$y -= mxConstants::$LABEL_INSET;
				}
			}
			else if ($align == mxConstants::$ALIGN_RIGHT)
			{
				if ($horizontal)
				{
					$x -= mxConstants::$LABEL_INSET;
				}
				else
				{
					$y += mxConstants::$LABEL_INSET;
				}
			}

			if ($horizontal)
			{
	 			$y += 2 * mxConstants::$LABEL_INSET;				
			}
			else
			{
				$y += $h;
				$x += 2 * mxConstants::$LABEL_INSET;
			}

			// Gets the font
			$fontSize = mxUtils::getValue($style, mxConstants::$STYLE_FONTSIZE,
				mxConstants::$DEFAULT_FONTSIZE) * $this->scale;
			$fontFamily = mxUtils::getValue($style, mxConstants::$STYLE_FONTFAMILY,
				mxConstants::$DEFAULT_FONTFAMILY);
			$font = $this->getFixedFontSize($fontSize, $fontFamily);

			// Gets the color
			$fontColor = mxUtils::getValue($style, mxConstants::$STYLE_FONTCOLOR);
	 		$color = $this->getColor($fontColor, "black");
	 		
	 		$dx = imageFontWidth($font);
	 		$dy = ((($horizontal) ? $h : $w) - 2 * mxConstants::$LABEL_INSET) / $lineCount;

			// Draws the text line by line
			for ($i = 0; $i < $lineCount; $i++)
			{
				$left = $x;
				$top = $y;
				$lineWidth = strlen($lines[$i]) * $dx;
	
				if ($align == mxConstants::$ALIGN_CENTER)
				{
					if ($horizontal)
					{
						$left += ($w - $lineWidth) / 2;
					}
					else
					{
						$top -= ($h - $lineWidth) / 2;
					}
				}
				else if ($align == mxConstants::$ALIGN_RIGHT)
				{
					if ($horizontal)
					{
						$left += $w - $lineWidth;
					}
					else
					{
						$top -= $h - $lineWidth;
					}
				}

				$this->drawFixedTextLine($lines[$i], $font,
						$left, $top, $color, $horizontal);
				
				if ($horizontal)
				{
					$y += $dy;
				}
				else
				{
					$x += $dy;
				}
			}
		}
	}
	
	/**
	 * Function: drawFixedTextLine
	 *
	 * Draws the given fixed text line.
	 */
	function drawFixedTextLine($text, $font, $left, $top, $color, $horizontal = true)
	{
		if ($horizontal)
		{
			imageString($this->image, $font, $left, $top,
				$text, $color);
		}
		else
		{
			imageStringUp($this->image, $font, $left, $top,
				$text, $color);
		}
	}

	/**
	 * Function: getColor
	 *
	 * Allocates the given color and returns a reference to it. Supported
	 * color names are black, red, green, blue, orange, yellow, pink,
	 * turqoise, white, gray and any hex codes between 000000 and FFFFFF.
	 */
	function getColor($hex, $default = null)
	{
		if (!isset($hex))
		{
			$hex = $default;
		}
		
		$result = null;
		$hex = strtolower($hex);
		
		if ($hex == "black")
		{
			$result = imageColorAllocate($this->image, 0, 0, 0);
		}
		else if ($hex == "red")
		{
			$result = imageColorAllocate($this->image, 255, 0, 0);
		}
		else if ($hex == "green")
		{
			$result = imageColorAllocate($this->image, 0, 255, 0);
		}
		else if ($hex == "blue")
		{
			$result = imageColorAllocate($this->image, 0, 0, 255);
		}
		else if ($hex == "orange")
		{
			$result = imageColorAllocate($this->image, 255, 128, 64);
		}
		else if ($hex == "yellow")
		{
			$result = imageColorAllocate($this->image, 255, 255, 0);
		}
		else if ($hex == "pink")
		{
			$result = imageColorAllocate($this->image, 255, 0, 255);
		}
		else if ($hex == "turqoise")
		{
			$result = imageColorAllocate($this->image, 0, 255, 255);
		}
		else if ($hex == "white")
		{
			$result = imageColorAllocate($this->image, 255, 255, 255);
		}
		else if ($hex == "gray")
		{
			$result = imageColorAllocate($this->image, 128, 128, 128);
		}
		else if ($hex == "none")
		{
			$result = null;
		}
		else
		{
	       	$rgb = array_map("hexdec", explode("|", wordwrap(substr($hex, 1), 2, "|", 1)));
	       	
	       	if (sizeof($rgb) > 2)
	       	{
				$result = imageColorAllocate($this->image, $rgb[0], $rgb[1], $rgb[2]);
	       	}
	       	else
	       	{
	       		$result = imageColorAllocate($this->image, 0, 0, 0);
	       	}
		}
		
	 	return $result;
	}
	
	/**
	 * Function: offset
	 *
	 * Creates a new array of x, y sequences where the each coordinate is
	 * translated by dx and dy, respectively.
	 */
	function offset($points, $dx = null, $dy = null)
	{
		$result = array();
		
		if ($points != null)
		{
			if (!isset($dx))
			{
				$dx = mxConstants::$SHADOW_OFFSETX;
			}
			
			if (!isset($dy))
			{
				$dy = mxConstants::$SHADOW_OFFSETY;
			}
			
			for ($i = 0; $i < sizeof($points) - 1; $i = $i + 2)
			{
				array_push($result, $points[$i] + $dx);
				array_push($result, $points[$i + 1] + $dy);
			}
		}
		
		return $result;
	}
	
	/**
	 * Destructor: destroy
	 *
	 * Destroys all allocated resources.
	 */
	function destroy()
	{
		imageDestroy($this->image);
	}
	
	/**
	 * Function: drawGraph
	 * 
	 * Draws the given graph using this canvas.
	 */
	public static function drawGraph($graph, $clip = null, $bg = null)
	{
	 	if (!isset($clip))
	 	{
	 		$clip = $graph->getGraphBounds();
	 	}
	 	
	 	// TODO: Support custom origin in mxGdCanvas
	 	// $x = round($clip->x);
	 	// $y = round($clip->y);
	 	// $width = round($clip->width - $x + $clip->x) + 1;
	 	// $height = round($clip->height - $y + $clip->y) + 1;
	 	$width = round($clip->width + $clip->x) + 1;
	 	$height = round($clip->width + $clip->x) + 1;
	 	
	 	$canvas = new mxGdCanvas($width, $height, $graph->view->scale, $bg);
	 	
	 	$graph->drawGraph($canvas);
	 	$image = $canvas->getImage();
	 	//TODO: $canvas->destroy();
	 	
	 	return $image;
	}

}
/**	
 *
 * Class: mxEdgeStyle
 * 
 * Provides various edge styles to be used as the values for
 * <mxConstants.STYLE_EDGE> in a cell style.
 */
class mxEdgeStyle
{

	/**
	 * Variable: EntityRelation
	 *
	 * Provides an entity relation style for edges (as used in database
	 * schema diagrams).
	 */
	public static $EntityRelation;

	/**
	 * Variable: Loop
	 *
	 * Provides a self-reference, aka. loop.
	 */
	public static $Loop;

	/**
	 * Variable: ElbowConnector
	 *
	 * Provides an elbow connector.
	 */
	public static $ElbowConnector;
	
	/**
	 * Variable: SideToSide
	 *
	 * Provides a side to side connector.
	 */
	public static $SideToSide;

	/**
	 * Variable: TopToBottom
	 *
	 * Provides a top to bottom connector.
	 */
	public static $TopToBottom;

}

// Instanciates the declared static members of the above class
mxEdgeStyle::$EntityRelation = new mxEntityRelation();
mxEdgeStyle::$Loop = new mxLoop();
mxEdgeStyle::$ElbowConnector = new mxElbowConnector();
mxEdgeStyle::$SideToSide = new mxSideToSide();
mxEdgeStyle::$TopToBottom = new mxTopToBottom();

/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxConnectionConstraint
{
	
	/**
	 * Class: mxConnectionConstraint
	 * 
	 * Defines an object that contains the constraints about how to connect one
 	 * side of an edge to its terminal.
	 * 
	 * Variable: point
	 * 
	 * <mxPoint> that specifies the fixed location of the connection point.
	 */
	var $point;
	
	/**
	 * Variable: perimeter
	 *
	 * Boolean that specifies if the point should be projected onto the perimeter
	 * of the terminal.
	 */
	var $perimeter;

	/**
	 * Constructor: mxConnectionConstraint
	 * 
	 * Constructs a new connection constraint for the given point and boolean
	 * arguments.
	 * 
	 * Parameters:
	 * 
	 * point - Optional <mxPoint> that specifies the fixed location of the point
	 * in relative coordinates. Default is null.
	 * perimeter - Optional boolean that specifies if the fixed point should be
	 * projected onto the perimeter of the terminal. Default is true.
	 */
	function __construct($point = null, $perimeter = true)
	{
		$this->point = $point;
		$this->perimeter = $perimeter;
	}

}
class mxGraph
{
	
	/**
	 * Class: mxGraph
	 *
	 * Implements a graph component.
	 * 
	 * Variable: model
	 *
	 * Holds the <mxGraphModel>.
	 */
	var $model;
		
	/**
	 * Variable: stylesheet
	 *
	 * Holds the <mxStylesheet>.
	 */
	var $stylesheet;
	
	/**
	 * Variable: view
	 *
	 * Holds the <mxGraphView>.
	 */
	var $view;
	
	/**
	 * Variable: gridSize
	 * 
	 * Specifies the grid size. Default is 10.
	 */
	var $gridSize = 10;
	
	/**
	 * Variable: labelsVisible
	 * 
	 * Specifies if labels should be visible. This is used in
	 * <getLabel>. Default is true.
	 */
	var $labelsVisible = true;

	/**
	 * Variable: defaultLoopStyle
	 * 
	 * <mxEdgeStyle> to be used for loops. This is a fallback for
	 * loops if the <mxConstants.STYLE_LOOP> is undefined. Default is
	 * <mxEdgeStyle.Loop>.
	 */
	var $defaultLoopStyle = "mxEdgeStyle.Loop";

	/**
	 * Variable: imageBundles
	 *
	 * Holds the list of image bundles.
	 */
	protected $imageBundles = array();
	
	/**
	 * Constructor: mxGraphModel
	 *
	 * Constructs a new graph model using the specified
	 * root cell.
	 */
	function __construct($model = null, $stylesheet = null)
	{
		$this->model = ($model != null) ? $model : new mxGraphModel();
		$this->stylesheet = ($stylesheet != null) ? $stylesheet : $this->createStylesheet();
		$this->view = $this->createGraphView();
		$this->view->revalidate();
		
		$this->model->addListener(mxEvent::$GRAPH_MODEL_CHANGED, $this);
	}
		
	/**
	 * Function: createStylesheet
	 * 
	 * Creates a new <mxStylesheet> to be used in this graph.
	 */
	function createStylesheet()
	{
		return new mxStylesheet();
	}
	
	/**
	 * Function: createGraphView
	 * 
	 * Creates a new <mxGraphView> to be used in this graph.
	 */
	function createGraphView()
	{
		return new mxGraphView($this);
	}

	/**
	 * Function: getModel
	 * 
	 * Returns the <mxGraphModel> that contains the cells.
	 */
	function getModel()
	{
		return $this->model;
	}
	
	/**
	 * Function: getStylesheet
	 * 
	 * Returns the <mxStylesheet> that defines the style.
	 */
	function getStylesheet()
	{
		return $this->stylesheet;
	}
	
	/**
	 * Function: getView
	 * 
	 * Returns the <mxGraphView> that contains the <mxCellStates>.
	 */
	function getView()
	{
		return $this->view;
	}

	/**
	 * Function: getDefaultParent
	 * 
	 * Returns the first child child of <mxGraphModel.root>. The value returned
	 * by this function should be used as the parent for new cells (aka default
	 * layer).
	 */
	function getDefaultParent()
	{
		$model = $this->model;
		
		return $model->getChildAt($model->getRoot(), 0);
	}

	/**
	 * Function: convertValueToString
	 * 
	 * Returns the textual representation for the given cell. This
	 * implementation returns the nodename or string-representation of the user
	 * object.
	 */
	function convertValueToString($cell)
	{
		$result = $this->model->getValue($cell);
	 	
 		return ($result != null) ? $result : "";
	}

	/**
	 * Function: getLabel
	 * 
	 * Returns a string or DOM node that represents the label for the given
	 * cell. This implementation uses <convertValueToString> if <labelsVisible>
	 * is true. Otherwise it returns an empty string.
	 */
	function getLabel($cell)
	{
		$result = "";
		
		if ($cell != null)
		{
			$state = $this->view->getState($cell);
			$style = ($state != null) ?
				$state->style : $this->getCellStyle($cell);
			
			if ($this->labelsVisible &&
				!mxUtils::getValue($style, mxConstants::$STYLE_NOLABEL, false))
			{
				$result = $this->convertValueToString($cell);
			}
		}
		
		return $result;
	}

	/**
	 * Function: getChildOffsetForCell
	 * 
	 * Returns the offset to be used for the cells inside the given cell. The
	 * root and layer cells may be identified using <mxGraphModel.isRoot> and
	 * <mxGraphModel.isLayer>. For all other current roots, the
	 * <mxGraphView.currentRoot> field points to the respective cell, so that
	 * the following holds: cell == this.view.currentRoot. This implementation
	 * returns null.
	 * 
	 * Parameters:
	 * 
	 * cell - <mxCell> whose offset should be returned.
	 */
	function getChildOffsetForCell($cell)
	{
		return null;
	}

	/**
	 * Function: isOrthogonal
	 * 
	 * Returns true if perimeter points should be computed such that the
	 * resulting edge has only horizontal or vertical segments.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> that represents the edge.
	 */
	function isOrthogonal($edge)
	{
		if (isset($edge->style[mxConstants::$STYLE_ORTHOGONAL]))
		{
			return mxUtils::getValue($edge->style, mxConstants::$STYLE_ORTHOGONAL);
		}

		$edgeStyle = $this->view->getEdgeStyle($edge, null, null, null);

		return $edgeStyle === mxEdgeStyle::$ElbowConnector ||
			$edgeStyle === mxEdgeStyle::$SideToSide ||
			$edgeStyle === mxEdgeStyle::$TopToBottom ||
			$edgeStyle === mxEdgeStyle::$EntityRelation;
	}
	
	/**
	 * Function: isCellVisible
	 *
	 * Returns true if the given cell is visible.
	 */
	function isCellVisible($cell)
	{
		return $this->model->isVisible($cell);
	}
	
	/**
	 * Function: isCellCollapsed
	 *
	 * Returns true if the given cell is collapsed.
	 */
	function isCellCollapsed($cell)
	{
		return $this->model->isCollapsed($cell);
	}
	
	/**
	 * Function: isCellCollapsed
	 *
	 * Returns true if the given cell is connectable.
	 */
	function isCellConnectable($cell)
	{
		return $this->model->isConnectable($cell);
	}

	/**
	 * Function: getCellGeometry
	 *
	 * Returns the <mxGeometry> for the given <mxCell>.
	 */
	function getCellGeometry($cell)
	{
		return $this->model->getGeometry($cell);
	}
	
	/**
	 * Function: getCellStyle
	 */
	function getCellStyle($cell)
	{
		$style = ($this->model->isVertex($cell)) ?
			$this->stylesheet->getDefaultVertexStyle() :
			$this->stylesheet->getDefaultEdgeStyle();

		$name = $this->model->getStyle($cell);
		
		if ($name != null)
		{
			$style = $this->postProcessCellStyle($this->stylesheet->getCellStyle($name, $style));
		}
		
		if ($style == null)
		{
			$style = array();
		}
		
		return $style;
	}
	
	/**
	 * Function: postProcessCellStyle
	 * 
	 * Tries to resolve the value for the image style in the image bundles and
	 * turns short data URIs as defined in mxImageBundle to data URIs as
	 * defined in RFC 2397 of the IETF.
	 */
	function postProcessCellStyle($style)
	{
		if (isset($style) && array_key_exists(mxConstants::$STYLE_IMAGE, $style))
		{
			$key = $style[mxConstants::$STYLE_IMAGE];
			$image = $this->getImageFromBundles($key);

			if (isset($image))
			{
				$style[mxConstants::$STYLE_IMAGE] = $image;
			}
			else
			{
				$image = $key;
			}
			
			// Converts short data uris to normal data uris
			if (isset($image) && substr($image, 0, 11) == "data:image/")
			{
				$comma = strpos($image, ",");
				
				if ($comma !== false)
				{
					$image = substr($image, 0, $comma).";base64,".
						substr($image, $comma + 1);
				}
				
				$style[mxConstants::$STYLE_IMAGE] = $image;
			}
		}

		return $style;
	}

	/**
	 * Function: setCellStyles
	 * 
	 * Sets the key to value in the styles of the given cells. This will modify
	 * the existing cell styles in-place and override any existing assignment
	 * for the given key. If no cells are specified, then the selection cells
	 * are changed. If no value is specified, then the respective key is
	 * removed from the styles.
	 * 
	 * Parameters:
	 * 
	 * key - String representing the key to be assigned.
	 * value - String representing the new value for the key.
	 * cells - Array of <mxCells> to change the style for.
	 */
	function setCellStyles($key, $value, $cells)
	{
		mxUtils::setCellStyles($this->model, $cells, $key, $value);
	}
	/**
	 * Function: addBundle
	 * 
	 * Adds the specified <mxImageBundle>.
	 */
	function addImageBundle($bundle)
	{
		array_push($this->imageBundles, $bundle);
	}
	
	/**
	 * Function: removeImageBundle
	 * 
	 * Removes the specified <mxImageBundle>.
	 */
	function removeImageBundle($bundle)
	{
		$tmp = array();
		
		for ($i = 0; $i < sizeof($this->imageBundles); $i++)
		{
			if ($this->imageBundles[$i] !== $bundle)
			{
				array_push($tmp, $this->imageBundles[$i]);
			}
		}
		
		$this->imageBundles = $tmp;
	}
	
	/**
	 * Function: getImageFromBundles
	 * 
	 * Searches all <imageBundles> for the specified key and returns the value
	 * for the first match or null if the key is not found.
	 */
	function getImageFromBundles($key)
	{
		if (isset($key))
		{
			for ($i = 0; $i < sizeof($this->imageBundles); $i++)
			{
				$image = $this->imageBundles[$i]->getImage($key);
				
				if (isset($image))
				{
					return $image;
				}
			}
		}
		
		return null;
	}
		
	/**
	 * Function: getImageBundles
	 * 
	 * Returns the <imageBundles>.
	 */
	function getImageBundles()
	{
		return $this->imageBundles;
	}
	
	/**
	 * Function: setImageBundles
	 * 
	 * Sets the <imageBundles>.
	 */
	function setImageBundles($value)
	{
		$this->imageBundles = $value;
	}
	
	/**
	 * Function: insertVertex
	 * 
	 * Adds a new vertex into the given parent <mxCell> using value as the user
	 * object and the given coordinates as the <mxGeometry> of the new vertex.
	 * The id and style are used for the respective properties of the new
	 * <mxCell>, which is returned.
	 *
	 * Parameters:
	 * 
	 * parent - <mxCell> that specifies the parent of the new vertex.
	 * id - Optional string that defines the Id of the new vertex.
	 * value - Object to be used as the user object.
	 * x - Integer that defines the x coordinate of the vertex.
	 * y - Integer that defines the y coordinate of the vertex.
	 * width - Integer that defines the width of the vertex.
	 * height - Integer that defines the height of the vertex.
	 * style - Optional string that defines the cell style.
	 * relative - Optional boolean that specifies if the geometry is relative.
	 * Default is false.
	 */
	function insertVertex($parent, $id = null, $value = null, $x = 0, $y = 0,
		$width = 1, $height = 1, $style = null, $relative = false)
	{
		if ($parent == null)
		{
			$parent = $this->getDefaultParent();
		}
		
		$vertex = $this->createVertex($parent, $id, $value, $x, $y, $width, $height, $style, $relative);
		$index = $this->model->getChildCount($parent);
		
		return $this->model->add($parent, $vertex, $index);
	}
			
	/**
	 * Function: createVertex
	 * 
	 * Creates the vertex to be used in insertVertex.
	 */
	function createVertex($parent, $id = null, $value = null, $x = 0, $y = 0,
		$width = 1, $height = 1, $style = null, $relative = false)
	{
		$geometry = new mxGeometry($x, $y, $width, $height);
		$geometry->relative = $relative;
		
		$vertex = new mxCell($value, $geometry, $style);
		$vertex->setId($id);
		$vertex->setVertex(true);
		
		return $vertex;
	}

	/**
	 * Function: insertEdge
	 * 
	 * Adds a new edge into the given parent <mxCell> using value as the user
	 * object and the given source and target as the terminals of the new edge.
	 * The id and style are used for the respective properties of the new
	 * <mxCell>, which is returned.
	 *
	 * Parameters:
	 * 
	 * parent - <mxCell> that specifies the parent of the new edge.
	 * id - Optional string that defines the Id of the new edge.
	 * value - JavaScript object to be used as the user object.
	 * source - <mxCell> that defines the source of the edge.
	 * target - <mxCell> that defines the target of the edge.
	 * style - Optional string that defines the cell style.
	 */
	function insertEdge($parent, $id = null, $value = null,
		$source = null, $target = null, $style = null)
	{
		if ($parent == null)
		{
			$parent = $this->getDefaultParent();
		}

		$edge = $this->createEdge($parent, $id, $value, $source, $target, $style);
		
		// Appends the edge to the given parent and sets
		// the edge terminals in a single transaction
		$index = $this->model->getChildCount($parent);
	 	
	 	$this->model->beginUpdate();
	 	try
	 	{
		 	$edge = $this->model->add($parent, $edge, $index);
		 	
			$this->model->setTerminal($edge, $source, true);
			$this->model->setTerminal($edge, $target, false);
		}
		catch (Exception $e)
		{
			$this->model->endUpdate();
			throw($e);
		}
		$this->model->endUpdate();

		return $edge;
	}
				
	/**
	 * Function: createEdge
	 * 
	 * Creates the edge to be used in <insertEdge>. This implementation does
	 * not set the source and target of the edge, these are set when the edge
	 * is added to the model.
	 */
	function createEdge($parent, $id = null, $value = null,
		$source = null, $target = null, $style = null)
	{
		$geometry = new mxGeometry();
		$edge = new mxCell($value, $geometry, $style);
		
		$edge->setId($id);
		$edge->setEdge(true);
		$edge->geometry->relative = true;

		return $edge;
	}
	
	/**
  	 * Function: getGraphBounds
  	 * 
  	 * Returns the bounds of the visible graph. Shortcut to
  	 * <mxGraphView.getGraphBounds>.
  	 */
	function getGraphBounds()
	{
		return $this->getView()->getGraphBounds();
	}

    /**
     * Function: getBoundingBox
     * 
     * Returns the bounding box of the given cell including all connected edges
     * if includeEdge is true.
     */
    function getBoundingBox($cell, $includeEdges = false, $includeDescendants = false)
    {
        return $this->getCellBounds($cell, $includeEdges, $includeDescendants, true);
    }

    /**
     * Function: getPaintBounds
     * 
     * Returns the bounding box of the given cells and their descendants.
     */
    function getPaintBounds($cells)
    {
        return $this->getBoundsForCells($cells, false, true, true);
    }

    /**
     * Function: getBoundsForCells
     * 
     * Returns the bounds for the given cells.
     */
    function getBoundsForCells($cells, $includeEdges = false, $includeDescendants = false, $boundingBox = false)
    {
    	$cellCount = sizeof($cells);
    	$result = null;
    	
        if ($cellCount > 0)
        {
			for ($i = 0; $i < $cellCount; $i++)
			{
            	$bounds = $this->getCellBounds($cells[$i], $includeEdges,
            		$includeDescendants, $boundingBox);
            	
            	if ($bounds != null)
            	{
	            	if ($result == null)
	            	{
	            		$result = new mxRectangle($bounds->x, $bounds->y,
	            			$bounds->width, $bounds->height);
	            	}
					else
	                {
	                	$result->add($bounds);
	                }
            	}
			}
        }

        return $result;
    }

    /**
     * Function: getCellBounds
     * 
     * Returns the bounds of the given cell including all connected edges
     * if includeEdge is true.
     */
    function getCellBounds($cell, $includeEdges = false, $includeDescendants = false, $boundingBox = false)
    {
		$cells = array($cell);

		// Includes the connected edges
        if ($includeEdges)
        {
            $edgeCount = $this->model->getEdgeCount($cell);

            for ($i = 0; $i < $edgeCount; $i++)
            {
            	array_push($cells, $this->model->getEdgeAt($cell, $i));
            }
        }

		$result = $this->view->getBounds($cells, $boundingBox);
		
		// Recursively includes the bounds of the children
		if ($includeDescendants)
		{
			for ($i = 0; $i < sizeof($cells); $i++)
			{
				$childCount = $this->model->getChildCount($cells[$i]);
				
				for ($j = 0; $j < $childCount; $j++)
				{
					$tmp = $this->getCellBounds($this->model->getChildAt($cells[$i], $j),
						$includeEdges, true, $boundingBox);
	
					if ($result != null)
					{
						$result->add($tmp);
					}
					else
					{
						$result = $tmp;
					}
				}
			}
		}
		
		return $result;
    }

	/**
	 * Function: getConnectionConstraint
	 * 
	 * Returns an <mxConnectionConstraint> that describes the given connection
	 * point. This result can then be passed to <getConnectionPoint>.
	 * 
	 * Parameters:
	 * 
	 * edge - <mxCellState> that represents the edge.
	 * terminal - <mxCellState> that represents the terminal.
	 * source - Boolean indicating if the terminal is the source or target.
	 */
   	function getConnectionConstraint($edge, $terminal, $source)
	{
		$point = null;
		$x = mxUtils::getValue($edge->style,
			($source) ? mxConstants::$STYLE_EXIT_X :
			mxConstants::$STYLE_ENTRY_X);

		if (isset($x))
		{
			$y = mxUtils::getValue($edge->style,
				(($source) ? mxConstants::$STYLE_EXIT_Y :
				mxConstants::$STYLE_ENTRY_Y));
			
			if (isset($y))
			{
				$point = new mxPoint($x, $y);
			}
		}
		
		$perimeter = false;
		
		if (isset($point))
		{
			$perimeter = mxUtils::getValue($edge->style, ($source) ?
				mxConstants::$STYLE_EXIT_PERIMETER :
				mxConstants::$STYLE_ENTRY_PERIMETER, true);
		}
		
		return new mxConnectionConstraint($point, $perimeter);
	}

	/**
	 * Function: getConnectionPoint
	 *
	 * Returns the nearest point in the list of absolute points or the center
	 * of the opposite terminal.
	 * 
	 * Parameters:
	 * 
	 * vertex - <mxCellState> that represents the vertex.
	 * constraint - <mxConnectionConstraint> that represents the connection point
	 * constraint as returned by <getConnectionConstraint>.
	 */
	function getConnectionPoint($vertex, $constraint)
	{
		$point = null;
		
		if (isset($vertex) && isset($constraint->point))
		{
			$point = new mxPoint($vertex->x + $constraint->point->x * $vertex->width,
					$vertex->y + $constraint->point->y * $vertex->height);
		}
		
		if (isset($point) && $constraint->perimeter)
		{
			$point = $this->view->getPerimeterPoint($vertex, $point, false);
		}
		
		return $point;
	}
    
	/**
	 * Function: findTreeRoots
	 * 
	 * Returns all children in the given parent which do not have incoming
	 * edges. If the result is empty then the with the greatest difference
	 * between incoming and outgoing edges is returned.
	 * 
	 * Parameters:
	 * 
	 * parent - <mxCell> whose children should be checked.
	 * isolate - Optional boolean that specifies if edges should be ignored if
	 * the opposite end is not a child of the given parent cell. Default is
	 * false.
	 * invert - Optional boolean that specifies if outgoing or incoming edges
	 * should be counted for a tree root. If false then outgoing edges will be
	 * counted. Default is false.
	 */
	function findTreeRoots($parent, $isolate = false, $invert = false)
	{
		$roots = array();
		
		if ($parent != null)
		{
			$model = $this->getModel();
			$childCount = $model->getChildCount($parent);
			$maxDiff = 0;
			
			for ($i=0; $i<$childCount; $i++)
			{
				$cell = $model->getChildAt($parent, $i);
				
				if ($this->model->isVertex($cell) &&
					$this->isCellVisible($cell))
				{
					$edgeCount = $model->getEdgeCount($cell);
					$fanOut = 0;
					$fanIn = 0;
					
					for ($j = 0; $j < $edgeCount; $j++)
					{
						$edge = $model->getEdgeAt($cell, $j);
						
						if ($this->isCellVisible($edge))
						{
							$source = $this->view->getVisibleTerminal($edge, true);
							$target = $this->view->getVisibleTerminal($edge, false);
							
							if ($source !== $target)
							{
                                if ($source === $cell && (!$isolate ||
                                	$this->model->getParent(target) == $parent))
                                {
                                    $fanOut++;
                                }
                                else if (!$isolate ||
                                	$this->model->getParent(source) == $parent)
                                {
                                    $fanIn++;
                                }
							}
						}
					}
					
					if (($invert && $fanOut == 0 && $fanIn > 0) ||
						(!$invert && $fanIn == 0 && $fanOut > 0))
					{
						array_push($roots, $cell);
					}
					
					$diff = ($invert) ? $fanIn - $fanOut : $fanOut - $fanIn;
					
					if ($diff > $maxDiff)
					{
						$maxDiff = $diff;
						$best = $cell;
					}
				}
			}
			
			if (sizeof($roots) == 0 && $best != null)
			{
				array_push($roots, $best);
			}
		}
		
		return $roots;
	}
	
	/**
	 * Function: createImage
	 */
	function createImage($clip = null, $background = null)
	{
		return mxGdCanvas::drawGraph($this, $clip, $background);
	}

	/**
	 * Function: drawGraph
	 * 
	 * Draws the given cell onto the specified canvas.
	 */
	function drawGraph($canvas)
	{
		$this->drawCell($canvas, $this->model->getRoot());
	}
	
	/**
	 * Function: paintCell
	 * 
	 * Draws the given cell onto the specified canvas.
	 */
	function drawCell($canvas, $cell)
	{
		$this->drawState($canvas, $this->view->getState($cell),
			$this->getLabel($cell));
		
		// Draws the children on top
		$childCount = $cell->getChildCount();
		
		for ($i = 0; $i < $childCount; $i++)
		{
			$child = $cell->getChildAt($i);
			$this->drawCell($canvas, $child);
		}
	}
	
	/**
	 * Function: paintState
	 * 
	 * Draws the given cell and label onto the specified canvas. No
	 * children or descendants are painted.
	 */
	function drawState($canvas, $state, $label)
	{
		$cell = (isset($state)) ? $state->cell : null;

		if ($cell != null && $cell !== $this->model->getRoot() &&
			($this->model->isVertex($cell) || $this->model->isEdge($cell)))
		{
			$canvas->drawCell($state);

			if ($label != null && $state->labelBounds != null)
			{
				$canvas->drawLabel($label, $state, false);
			}
		}
	}
	
	/**
	 * Function: graphModelChanged
	 * 
	 * Called when the graph model has changed.
	 */
	function graphModelChanged($event)
	{
	 	$this->view->revalidate();
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */

class mxGraphViewImageReader
{

	/**
	 * Class: mxGraphViewImageReader
	 *
	 * A display XML to image converter. This allows to create an image of a graph
	 * without having to parse and create the graph model using the XML file
	 * created for the mxGraphView object in the thin client.
	 *
	 * To create the XML for the mxGraphView on the client:
	 *
	 * (code)
	 * var enc = new mxCodec(mxUtils.createXMLDocument());
	 * var node = enc.encode(editor.graph.view);
	 * var xml = mxUtils.getXML(node);
	 * (end)
	 * 
	 * Variable: canvas
	 *
	 * Holds the canvas.
	 */
	var $canvas;
	
	/**
	 * Variable: scale
	 * 
	 * Holds the global scale of the graph. This is set just before
	 * createCanvas is called.
	 */
	var $scale = 1;
	
	/**
	 * Variable: parser
	 *
	 * Holds the SAX parser.
	 */
	var $parser;
	
	/**
	 * Variable: background
	 *
	 * Holds the background color.
	 */
	var $background;
	
	/**
	 * Variable: border
	 *
	 * Holds the border size. Default is 0.
	 */
	var $border;

	/**
	 * Constructor: mxGraphViewImageReader
	 *
	 * Constructs a new image graph view reader.
	 */
	function __construct($background = null, $border = 0)
	{
		$this->parser = xml_parser_create();
		
		xml_parser_set_option($this->parser, XML_OPTION_CASE_FOLDING, 0);
		xml_set_object($this->parser, $this);
		xml_set_element_handler($this->parser, "startElement", "endElement");
			
		$this->background = $background;
		$this->border = $border;
	}

	/**
	 * Function: createCanvas
	 *
	 * Returns the canvas to be used for rendering.
	 */
	function createCanvas($attrs)
	{
		$width = $attrs["x"] + $attrs["width"] + $this->border + 1;
		$height = $attrs["y"] + $attrs["height"] + $this->border + 1;

		return new mxGdCanvas($width, $height, $this->scale, $this->background);
	}

	/**
	 * Function: read
	 *
	 * Reads the specified view XML string.
	 */
	function read($string)
	{
		xml_parse($this->parser, $string, true);
	}
	
	/**
	 * Function: readFile
	 *
	 * Reads the specified view XML file in blocks of 4096 bytes.
	 */
	function readFile($filename)
	{
		$fp = fopen($filename, "r");
		while ($data = fread($fp, 4096))
		{
			xml_parse($this->parser, $data, feof($fp)) or
			die (sprintf("XML Error: %s at line %d", 
				xml_error_string(xml_get_error_code($this->parser)),
				xml_get_current_line_number($this->parser)));
		}
		
		fclose($fp);
	}

	/**
	 * Function: startElement
	 *
	 * Invoked by the SAX parser when an element starts.
	 */
	function startElement($parser, $name, $attrs)
	{
		if ($this->canvas == null && $name == "graph")
		{
			$this->scale = mxUtils::getValue($attrs, "scale", 1);
			$this->canvas = $this->createCanvas($attrs);
		}
		else if ($this->canvas != null)
		{
			$edge = $name == "edge";
			$group = $name == "group";
			$vertex = $name == "vertex";
			
			if (($edge && isset($attrs["points"])) ||
				(($vertex || $group) && isset($attrs["x"]) &&
				isset($attrs["y"]) && isset($attrs["width"]) &&
				isset($attrs["height"])))
			{
				$state = new mxCellState(null, null, $attrs);

				$label = $this->parseState($state, $edge);
				$this->canvas->drawCell($state);
				$this->canvas->drawLabel($label, $state, false);
			}
		}
	}
	
	/**
	 * Function: parseState
	 *
	 * Parses the bounds, absolute points and label information from the style
	 * of the state into its respective fields and returns the label of the
	 * cell.
	 */
	function parseState($state, $edge)
	{
		$style = $state->style;

		// Parses the bounds
		$state->x = mxUtils::getNumber($style, "x");
		$state->y = mxUtils::getNumber($style, "y");
		$state->width = mxUtils::getNumber($style, "width");
		$state->height = mxUtils::getNumber($style, "height");

		// Parses the absolute points list
		$tmp = mxUtils::getValue($style, "points");
		
		if (strlen($tmp) > 0)
		{
			$pts = $this->parsePoints($tmp);
			
			if (sizeof($pts) > 0)
			{
				$state->absolutePoints = $pts;
			}
		}
		
        // Parses the label and label bounds
		$label = mxUtils::getValue($style, "label");
		
		if ($label != null && strlen($label) > 0)
		{
			$offset = new mxPoint(mxUtils::getNumber($style, "dx"),
				mxUtils::getNumber($style, "dy"));
			$vertexBounds = (!$edge) ? $state : null;
			$state->labelBounds = mxUtils::getLabelPaintBounds($label, $style,
				mxUtils::getValue($style, "html", false), $offset,
				$vertexBounds, $this->scale);
		}
		
		return $label;
	}

	/**
	 * Function: parsePoints
	 * 
	 * Parses a string that represents a list of points into an array of
	 * <mxPoints>.
	 */
	function parsePoints($str)
	{
		$pts = array();
		
		if (isset($str))
		{
		 	$len = strlen($str);
			$tmp = "";
			$x = "";
	
		 	for ($i = 0; $i < $len; $i++)
		 	{
		 		$c = $str[$i];
		 		
		 		if ($c == "," || $c == " ")
		 		{
		 			if (strlen($x) == 0)
		 			{
		 				$x = $tmp;
		 			}
		 			else
		 			{
		 				array_push($pts, new mxPoint($x, $tmp));
		 				$x = "";
		 			}
		 			
	 				$tmp = "";
		 		}
		 		else
		 		{
					$tmp .= $c;	 		
		 		}
		 	}
		 	
		 	array_push($pts, new mxPoint($x, $tmp));
		}
		
	 	return $pts;
	}

	/**
	 * Function: endElement
	 *
	 * Invoked by the SAX parser when an element ends.
	 */
	function endElement($parser, $name)
	{
	 	// ignore
	}

	/**
	 * Destructor: destroy
	 *
	 * Destroy all allocated resources for this reader.
	 */
	function destroy()
	{
	 	$this->canvas->destroy();
	 	xml_parser_free($this->parser);
	}

	/**
	 * Function: convert
	 *
	 * Creates the image for the given display XML string.
	 */
	static function convert($string, $background = null)
	{
		$viewReader = new mxGraphViewImageReader($background);
		$viewReader->read($string);
		$image = $viewReader->canvas->getImage();
		
		return $image;	
	}

	/**
	 * Function: convertFile
	 *
	 * Creates the image for the given display XML file.
	 */
	static function convertFile($filename, $background = null)
	{
		$viewReader = new mxGraphViewImageReader($background);
		$viewReader->readFile($filename);
		$image = $viewReader->canvas->getImage();
		
		return $image;		
	}

}
/**
 * Copyright (c) 2006-2013, Gaudenz Alder
 */
class mxCodec
{
	
	/**
	 * Class: mxCodec
	 *
	 * XML codec for PHP object graphs. In order to resolve forward references
	 * when reading files the XML document that contains the data must be passed
	 * to the constructor.
	 * 
	 * Variable: document
	 *
	 * The owner document of the codec.
	 */
	var $document;
	
	/**
	 * Variable: objects
	 *
	 * Maps from IDs to objects.
	 */
	var $objects = array();

	/**
	 * Variable: elements
	 *
	 * Maps from IDs to elements.
	 */
	var $elements = null;
	
	/**
	 * Variable: encodeDefaults
	 *
	 * Specifies if default values should be encoded.
	 * Default is false.
	 */
	var $encodeDefaults = false;

	/**
	 * Constructor: mxGraphViewHtmlReader
	 *
	 * Constructs a new HTML graph view reader.
	 */
	function __construct($document=null)
	{
		if ($document == null)
		{
			$document = mxUtils::createXmlDocument();
		}
		
		$this->document = $document;
	}

	/**
	 * Function: putObject
	 * 
	 * Assoiates the given object with the given ID.
	 * 
	 * Parameters
	 * 
	 * id - ID for the object to be associated with.
	 * obj - Object to be associated with the ID.
	 */
	function putObject($id, $object)
	{
		$this->objects[$id] = $object;

		return $object;
	}

	/**
	 * Function: getObject
	 *
	 * Returns the decoded object for the element with the specified ID in
	 * <document>. If the object is not known then <lookup> is used to find an
	 * object. If no object is found, then the element with the respective ID
	 * from the document is parsed using <decode>.
	 */
	function getObject($id)
	{		
		$obj = null;
		
		if (isset($id))
		{
			$obj = $this->objects[$id];
			
			if (!isset($obj))
			{
				$obj = $this->lookup($id);
				
				if (!isset($obj))
				{
					$node = $this->getElementById($id);
					
					if (isset($node))
					{
						$obj = $this->decode($node);
					}
				}
			}
		}
		
		return $obj;
	}

	/**
	 * Function: lookup
	 *
	 * Hook for subclassers to implement a custom lookup
	 * mechanism for cell IDs. This implementation always
	 * returns null.
	 *
	 * Parameters:
	 *
	 * id - ID of the object to be returned.
	 */
	function lookup($id)
	{		
		return null;
	}

	/**
	 * Function: getElementById
	 *
	 * Returns the element with the given ID from <document>.
	 *
	 * Parameters:
	 *
	 * id - String that contains the ID.
	 */
	function getElementById($id)
	{
		if ($this->elements == null)
		{
			$this->elements = array();
			$this->addElement($this->document->documentElement);
		}
	
		return $this->elements[$id];
	}
	
	/**
	 * Function: addElement
	 *
	 * Adds the given element to <elements> if it has an ID.
	 */
	function addElement($node)
	{
		if ($node instanceof DOMElement)
		{
			$id = $node->getAttribute("id");
			
			if ($id != null && $this->elements[$id] == null)
			{
				$this->elements[$id] = $node;
			}
		}
		
		$node = $node->firstChild;
		
		while ($node != null)
		{
			$this->addElement($node);
			$node = $node->nextSibling;
		}
	}

	/**
	 * Function: getId
	 *
	 * Returns the ID of the specified object. This implementation
	 * calls <reference> first and if that returns null handles
	 * the object as an <mxCell> by returning their IDs using
	 * <mxCell.getId>. If no ID exists for the given cell, then
	 * an on-the-fly ID is generated using <mxCellPath.create>.
	 *
	 * Parameters:
	 *
	 * obj - Object to return the ID for.
	 */
	function getId($obj)
	{
		$id = null;
		
		if (isset($obj))
		{
			$id = $this->reference($obj);
			
			if (!isset($id) && mxCodecRegistry::getName($obj) == "mxCell")
			{
				$id = $obj->getId();

				if (!isset($id))
				{
					// Uses an on-the-fly Id
					$id = mxCellPath::create($obj);
					
					if (strlen($id) == 0)
					{
						$id = "root";
					}
				}
			}
		}
		
		return $id;
	}

	/**
	 * Function: reference
	 *
	 * Hook for subclassers to implement a custom method
	 * for retrieving IDs from objects. This implementation
	 * always returns null.
	 *
	 * Parameters:
	 *
	 * obj - Object whose ID should be returned.
	 */
	function reference($obj)
	{
		return null;
	}
	
	/**
	 * Function: encode
	 *
	 * Encodes the specified object and returns the resulting
	 * XML node.
	 *
	 * Parameters:
	 *
	 * obj - Object to be encoded. 
	 */
	function encode($obj)
	{
		$node = null;
		
		if (is_object($obj) || is_array($obj))
		{
			if (is_array($obj))
			{
				$enc = new mxObjectCodec(array());
			}
			else
			{
				$enc = mxCodecRegistry::getCodec(
					mxCodecRegistry::getName($obj));
			}
			
			if (isset($enc))
			{
				$node = $enc->encode($this, $obj);
			}
			else
			{
				if (get_class($obj) == "DOMElement")
				{
					$node = $obj->cloneNode(true);
				}
				else
				{
		    		mxLog::warn("mxCodec.encode: No codec for ".
		    			mxCodecRegistry::getName($obj));
				}
			}
		}
		
		return $node;
	}

	/**
	 * Function: decode
	 *
	 * Decodes the given XML node. The optional "into"
	 * argument specifies an existing object to be
	 * used. If no object is given, then a new instance
	 * is created using the constructor from the codec.
	 *
	 * The function returns the passed in object or
	 * the new instance if no object was given.
	 *
	 * Parameters:
	 *
	 * node - XML node to be decoded.
	 * into - Optional object to be decodec into.
	 */
	function decode($node, $into = null)
	{
		$obj = null;
		
		if (isset($node) && $node->nodeType == XML_ELEMENT_NODE)
		{
			$dec = mxCodecRegistry::getCodec($node->nodeName);
			
			try
			{
				if (isset($dec))
				{
					$obj = $dec->decode($this, $node, $into);
				}
				else
				{
					$obj = $node->cloneNode(true);
					$obj->removeAttribute("as");
				}
			}
			catch (Exception $ex)
			{
				// ignore
				mxLog::debug("Cannot decode ".$node->nodeName.": $ex");
				throw $ex;
			}
		}
		
		return $obj;
	}

	/**
	 * Function: encodeCell
	 *
	 * Encoding of cell hierarchies is built-into the core, but
	 * is a higher-level function that needs to be explicitely
	 * used by the respective object encoders (eg. <mxModelCodec>,
	 * <mxChildChangeCodec> and <mxRootChangeCodec>). This
	 * implementation writes the given cell and its children as a
	 * (flat) sequence into the given node. The children are not
	 * encoded if the optional includeChildren is false. The
	 * function is in charge of adding the result into the
	 * given node and has no return value.
	 *
	 * Parameters:
	 *
	 * cell - <mxCell> to be encoded.
	 * node - Parent XML node to add the encoded cell into.
	 * includeChildren - Optional boolean indicating if the
	 * function should include all descendents. Default is true. 
	 */
	function encodeCell($cell, $node, $includeChildren=true)
	{
		$node->appendChild($this->encode($cell));
		
		if ($includeChildren)
		{
			$childCount = $cell->getChildCount();
			
			for ($i = 0; $i < $childCount; $i++)
			{
				$this->encodeCell($cell->getChildAt($i), $node);
			}
		}
	}

	/**
	 * Function: decodeCell
	 *
	 * Decodes cells that have been encoded using inversion, ie.
	 * where the user object is the enclosing node in the XML,
	 * and restores the group and graph structure in the cells.
	 * Returns a new <mxCell> instance that represents the
	 * given node.
	 *
	 * Parameters:
	 *
	 * node - XML node that contains the cell data.
	 * restoreStructures - Optional boolean indicating whether
	 * the graph structure should be restored by calling insert
	 * and insertEdge on the parent and terminals, respectively.
	 * Default is true.
	 */
	function decodeCell($node, $restoreStructures = true)
	{
		$cell = null;
		
		if (isset($node) && $node->nodeType == XML_ELEMENT_NODE)
		{
			// Tries to find a codec for the given node name. If that does
			// not return a codec then the node is the user object (an XML node
			// that contains the mxCell, aka inversion).
			$decoder = mxCodecRegistry::getCodec($node->nodeName);

			// Tries to find the codec for the cell inside the user object.
			// This assumes all node names inside the user object are either
			// not registered or they correspond to a class for cells.
			if (!isset($decoder))
			{
				$child = $node->firstChild;
				
				while (isset($child) && !($decoder instanceof mxCellCodec))
				{
					$decoder = mxCodecRegistry::getCodec($child->nodeName);
					$child = $child->nextSibling;
				}
			}
			
			if (!($decoder instanceof mxCellCodec))
			{
				$decoder = mxCodecRegistry::getCodec("mxCell");
			}

			$cell = $decoder->decode($this, $node);
			
			if ($restoreStructures)
			{
				$this->insertIntoGraph($cell);
			}
		}
		
		return $cell;
	}
	
	/**
	 * Function: insertIntoGraph
	 *
	 * Inserts the given cell into its parent and terminal cells.
	 */
	function insertIntoGraph($cell)
	{
		$parent = $cell->getParent();
		$source = $cell->getTerminal(true);
		$target = $cell->getTerminal(false);
		
		// Fixes possible inconsistencies during insert into graph
		$cell->setTerminal(null, false);
		$cell->setTerminal(null, true);
		$cell->setParent(null);
		
		if (isset($parent))
		{
			$parent->insert($cell);
		}

		if (isset($source))
		{
			$source->insertEdge($cell, true);
		}

		if (isset($target))
		{
			$target->insertEdge($cell, false);
		}
	}
	
	/**
	 * Function: setAttribute
	 *
	 * Sets the attribute on the specified node to value. This is a
	 * helper method that makes sure the attribute and value arguments
	 * are not null.
	 *
	 * Parameters:
	 *
	 * node - XML node to set the attribute for.
	 * attributes - Attributename to be set.
	 * value - New value of the attribute.
	 */
	function setAttribute($node, $attribute, $value)
	{
		if (is_array($value))
		{
			error_log("cannot write array $attribute");
		}
		else if (isset($attribute) && isset($value))
		{
			$node->setAttribute($attribute, $value);
		}
	}

}
class mxCodecRegistry
{

	/**
	 * Class: mxCodecRegistry
	 *
	 * A class to register codecs for objects.
	 * 
	 * Variable: codecs
	 *
	 * Maps from constructor names to codecs.
	 */
	public static $codecs = array();

	/**
	 * Variable: aliases
	 *
	 * Maps from classnames to codecnames.
	 */
	public static $aliases = array();
	
	/**
	 * Function: register
	 *
	 * Registers a new codec and associates the name of the template constructor
	 * in the codec with the codec object. Automatically creates an alias if the
	 * codename and the classname are not equal.
	 *
	 * Parameters:
	 *
	 * codec - <mxObjectCodec> to be registered.
	 */
	static function register($codec)
	{
		if (isset($codec))
		{
			$name = $codec->getName();
			mxCodecRegistry::$codecs[$name] = $codec;
			
			$classname = mxCodecRegistry::getName($codec->template);
			
			if ($classname != $name)
			{
				mxCodecRegistry::addAlias($classname, $name);
			}
		}
		
		return $codec;
	}

	/**
	 * Function: addAlias
	 *
	 * Adds an alias for mapping a classname to a codecname.
	 */
	static function addAlias($classname, $codecname)
	{
		mxCodecRegistry::$aliases[$classname] = $codecname;
	}
	/**
	 * Function: getCodec
	 *
	 * Returns a codec that handles objects that are constructed
	 * using the given ctor.
	 *
	 * Parameters:
	 *
	 * ctor - JavaScript constructor function. 
	 */
	static function getCodec($name)
	{
		$codec = null;
		
		if (isset($name))
		{
			if (isset(mxCodecRegistry::$aliases[$name]))
			{
				$tmp = mxCodecRegistry::$aliases[$name];
				
				if (strlen($tmp) > 0)
				{
					$name = $tmp;
				}
			}
			
			$codec = (isset(mxCodecRegistry::$codecs[$name])) ?
				mxCodecRegistry::$codecs[$name] : null;
				
			// Registers a new default codec for the given constructor
			// if no codec has been previously defined.
			if (!isset($codec))
			{
				try
				{
					$obj = mxCodecRegistry::getInstanceForName($name);
					
					if (isset($obj))
					{
						$codec = new mxObjectCodec($obj);
						mxCodecRegistry::register($codec);
					}
				}
				catch (Exception $e)
				{
					// ignore
				}
			}
		}
		
		return $codec;
	}

	/**
	 * Function: getInstanceForName
	 *
	 * Creates and returns a new instance for the given class name.
	 */
	static function getInstanceForName($name)
	{
		if (class_exists($name))
		{
			return new $name();
		}
		
		return null;
	}
	
	/**
	 * Function: getName
	 *
	 * Returns the codec name for the given object instance.
	 *
	 * Parameters:
	 *
	 * obj - PHP object to return the codec name for. 
	 */
	static function getName($obj)
	{
		if (is_array($obj))
		{
			return "Array";
		}

		return get_class($obj);
	}

}


class Diagrama2Img extends Controller
{
  public function Convertir(String $filename) {

  	$file = public_path().'/diagramasXml/'.$filename;

  	$image =  mxGraphViewImageReader::convertFile($file, "#FFFFFF");
  	// $imgcrop = imagecrop($image, ['x' => 390, 'y' =>525, 'width' => 500, 'height' => 500]);
  	header("Content-Type: image/png");
  	imagePng($image,public_path().'/diagramasImg/'.substr($filename,0,strpos($filename,'.')).'.png');

  	// probar
  	unlink($file);
  	
	}
}
