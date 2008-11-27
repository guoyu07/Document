<?php
/**
 * Autoloader definition for the Document component.
 *
 * @copyright Copyright (C) 2005-2008 eZ systems as. All rights reserved.
 * @license http://ez.no/licenses/new_bsd New BSD License
 * @version //autogentag//
 * @filesource
 * @package Document
 */

return array(
    'ezcDocumentException'                               => 'Document/exceptions/exception.php',
    'ezcDocumentConversionException'                     => 'Document/exceptions/conversion.php',
    'ezcDocumentErroneousXmlException'                   => 'Document/exceptions/erroneous_xml.php',
    'ezcDocumentMissingVisitorException'                 => 'Document/exceptions/missing_visitor.php',
    'ezcDocumentParserException'                         => 'Document/exceptions/parser.php',
    'ezcDocumentRstMissingDirectiveHandlerException'     => 'Document/exceptions/missing_directive_handler.php',
    'ezcDocumentRstTokenizerException'                   => 'Document/exceptions/rst_tokenizer.php',
    'ezcDocumentVisitException'                          => 'Document/exceptions/visitor.php',
    'ezcDocumentWikiMissingPluginHandlerException'       => 'Document/exceptions/missing_plugin_handler.php',
    'ezcDocumentWikiTokenizerException'                  => 'Document/exceptions/wiki_tokenizer.php',
    'ezcDocumentElementVisitorHandler'                   => 'Document/converters/element_visitor_handler.php',
    'ezcDocumentWikiNode'                                => 'Document/document/wiki/node.php',
    'ezcDocumentWikiToken'                               => 'Document/document/wiki/token.php',
    'ezcDocument'                                        => 'Document/interfaces/document.php',
    'ezcDocumentConverter'                               => 'Document/interfaces/converter.php',
    'ezcDocumentConverterOptions'                        => 'Document/options/converter.php',
    'ezcDocumentDocbookToRstBaseHandler'                 => 'Document/converters/element_visitor/docbook/rst/handler.php',
    'ezcDocumentDocbookToWikiBaseHandler'                => 'Document/converters/element_visitor/docbook/wiki/handler.php',
    'ezcDocumentOptions'                                 => 'Document/options/document.php',
    'ezcDocumentRstDirective'                            => 'Document/document/rst/directive.php',
    'ezcDocumentRstNode'                                 => 'Document/document/rst/node.php',
    'ezcDocumentRstVisitor'                              => 'Document/document/rst/visitor.php',
    'ezcDocumentRstXhtmlDirective'                       => 'Document/interfaces/rst_xhtml_directive.php',
    'ezcDocumentValidation'                              => 'Document/interfaces/validation.php',
    'ezcDocumentWikiBlockLevelNode'                      => 'Document/document/wiki/nodes/block.php',
    'ezcDocumentWikiBlockMarkupToken'                    => 'Document/document/wiki/token/block_markup.php',
    'ezcDocumentWikiInlineMarkupToken'                   => 'Document/document/wiki/token/inline_markup.php',
    'ezcDocumentWikiInlineNode'                          => 'Document/document/wiki/nodes/inline.php',
    'ezcDocumentDocbookToHtmlBaseHandler'                => 'Document/converters/element_visitor/docbook/xhtml/handler.php',
    'ezcDocumentDocbookToRstMediaObjectHandler'          => 'Document/converters/element_visitor/docbook/rst/mediaobject.php',
    'ezcDocumentDocbookToWikiMediaObjectHandler'         => 'Document/converters/element_visitor/docbook/wiki/mediaobject.php',
    'ezcDocumentElementVisitorConverter'                 => 'Document/converters/element_visitor.php',
    'ezcDocumentEzXmlLinkConverter'                      => 'Document/interfaces/ezxml_link_converter.php',
    'ezcDocumentEzXmlLinkProvider'                       => 'Document/interfaces/ezxml_link_provider.php',
    'ezcDocumentHtmlConverterOptions'                    => 'Document/options/html_rendering.php',
    'ezcDocumentParser'                                  => 'Document/interfaces/parser.php',
    'ezcDocumentRstBlockNode'                            => 'Document/document/rst/nodes/block.php',
    'ezcDocumentRstImageDirective'                       => 'Document/document/rst/directive/image.php',
    'ezcDocumentRstLinkNode'                             => 'Document/document/rst/nodes/link.php',
    'ezcDocumentRstMarkupNode'                           => 'Document/document/rst/nodes/markup.php',
    'ezcDocumentRstXhtmlVisitor'                         => 'Document/document/rst/visitor/xhtml.php',
    'ezcDocumentWikiLineLevelNode'                       => 'Document/document/wiki/nodes/line.php',
    'ezcDocumentWikiLineMarkupToken'                     => 'Document/document/wiki/token/line_markup.php',
    'ezcDocumentWikiLinkStartToken'                      => 'Document/document/wiki/token/link_start.php',
    'ezcDocumentWikiListNode'                            => 'Document/document/wiki/nodes/list.php',
    'ezcDocumentWikiMatchingInlineNode'                  => 'Document/document/wiki/nodes/matching_inline.php',
    'ezcDocumentWikiPlugin'                              => 'Document/document/wiki/plugin.php',
    'ezcDocumentWikiSectionNode'                         => 'Document/document/wiki/nodes/section.php',
    'ezcDocumentWikiSeparatorNode'                       => 'Document/document/wiki/nodes/separator.php',
    'ezcDocumentWikiTokenizer'                           => 'Document/document/wiki/tokenizer.php',
    'ezcDocumentWikiVisitor'                             => 'Document/document/wiki/visitor.php',
    'ezcDocumentXhtmlBaseFilter'                         => 'Document/document/xml/xhtml/filter/base.php',
    'ezcDocumentXhtmlConversion'                         => 'Document/interfaces/conversions/xhtml.php',
    'ezcDocumentXhtmlElementBaseFilter'                  => 'Document/document/xml/xhtml/filter/element/base.php',
    'ezcDocumentXmlBase'                                 => 'Document/document/xml_base.php',
    'ezcDocumentXmlOptions'                              => 'Document/options/document_xml.php',
    'ezcDocumentXsltConverter'                           => 'Document/converters/xslt.php',
    'ezcDocumentXsltConverterOptions'                    => 'Document/options/converter_xslt.php',
    'ezcDocumentDocbook'                                 => 'Document/document/xml/docbook.php',
    'ezcDocumentDocbookOptions'                          => 'Document/options/document_docbook.php',
    'ezcDocumentDocbookToEzXmlAnchorHandler'             => 'Document/converters/element_visitor/docbook/ezxml/anchor.php',
    'ezcDocumentDocbookToEzXmlCommentHandler'            => 'Document/converters/element_visitor/docbook/ezxml/comment.php',
    'ezcDocumentDocbookToEzXmlConverter'                 => 'Document/converters/element_visitor/docbook_ezxml.php',
    'ezcDocumentDocbookToEzXmlConverterOptions'          => 'Document/options/converter_docbook_ezxml.php',
    'ezcDocumentDocbookToEzXmlEmphasisHandler'           => 'Document/converters/element_visitor/docbook/ezxml/emphasis.php',
    'ezcDocumentDocbookToEzXmlExternalLinkHandler'       => 'Document/converters/element_visitor/docbook/ezxml/external_link.php',
    'ezcDocumentDocbookToEzXmlFootnoteHandler'           => 'Document/converters/element_visitor/docbook/ezxml/footnote.php',
    'ezcDocumentDocbookToEzXmlIgnoreHandler'             => 'Document/converters/element_visitor/docbook/ezxml/ignore.php',
    'ezcDocumentDocbookToEzXmlInternalLinkHandler'       => 'Document/converters/element_visitor/docbook/ezxml/internal_link.php',
    'ezcDocumentDocbookToEzXmlItemizedListHandler'       => 'Document/converters/element_visitor/docbook/ezxml/itemized_list.php',
    'ezcDocumentDocbookToEzXmlLiteralLayoutHandler'      => 'Document/converters/element_visitor/docbook/ezxml/literal_layout.php',
    'ezcDocumentDocbookToEzXmlMappingHandler'            => 'Document/converters/element_visitor/docbook/ezxml/mapper.php',
    'ezcDocumentDocbookToEzXmlOrderedListHandler'        => 'Document/converters/element_visitor/docbook/ezxml/ordered_list.php',
    'ezcDocumentDocbookToEzXmlParagraphHandler'          => 'Document/converters/element_visitor/docbook/ezxml/paragraph.php',
    'ezcDocumentDocbookToEzXmlRecurseHandler'            => 'Document/converters/element_visitor/docbook/ezxml/recurse.php',
    'ezcDocumentDocbookToEzXmlSectionHandler'            => 'Document/converters/element_visitor/docbook/ezxml/section.php',
    'ezcDocumentDocbookToEzXmlTableCellHandler'          => 'Document/converters/element_visitor/docbook/ezxml/table_cell.php',
    'ezcDocumentDocbookToEzXmlTableHandler'              => 'Document/converters/element_visitor/docbook/ezxml/table.php',
    'ezcDocumentDocbookToEzXmlTitleHandler'              => 'Document/converters/element_visitor/docbook/ezxml/title.php',
    'ezcDocumentDocbookToHtmlAnchorHandler'              => 'Document/converters/element_visitor/docbook/xhtml/anchor.php',
    'ezcDocumentDocbookToHtmlBlockquoteHandler'          => 'Document/converters/element_visitor/docbook/xhtml/blockquote.php',
    'ezcDocumentDocbookToHtmlCommentHandler'             => 'Document/converters/element_visitor/docbook/xhtml/comment.php',
    'ezcDocumentDocbookToHtmlConverter'                  => 'Document/converters/element_visitor/docbook_html.php',
    'ezcDocumentDocbookToHtmlConverterOptions'           => 'Document/options/converter_docbook_html.php',
    'ezcDocumentDocbookToHtmlDefinitionListEntryHandler' => 'Document/converters/element_visitor/docbook/xhtml/definition_list_entry.php',
    'ezcDocumentDocbookToHtmlEmphasisHandler'            => 'Document/converters/element_visitor/docbook/xhtml/emphasis.php',
    'ezcDocumentDocbookToHtmlExternalLinkHandler'        => 'Document/converters/element_visitor/docbook/xhtml/external_link.php',
    'ezcDocumentDocbookToHtmlFootnoteHandler'            => 'Document/converters/element_visitor/docbook/xhtml/footnote.php',
    'ezcDocumentDocbookToHtmlHeadHandler'                => 'Document/converters/element_visitor/docbook/xhtml/head.php',
    'ezcDocumentDocbookToHtmlIgnoreHandler'              => 'Document/converters/element_visitor/docbook/xhtml/ignore.php',
    'ezcDocumentDocbookToHtmlInternalLinkHandler'        => 'Document/converters/element_visitor/docbook/xhtml/internal_link.php',
    'ezcDocumentDocbookToHtmlLiteralLayoutHandler'       => 'Document/converters/element_visitor/docbook/xhtml/literal_layout.php',
    'ezcDocumentDocbookToHtmlMappingHandler'             => 'Document/converters/element_visitor/docbook/xhtml/mapper.php',
    'ezcDocumentDocbookToHtmlMediaObjectHandler'         => 'Document/converters/element_visitor/docbook/xhtml/mediaobject.php',
    'ezcDocumentDocbookToHtmlParagraphHandler'           => 'Document/converters/element_visitor/docbook/xhtml/paragraph.php',
    'ezcDocumentDocbookToHtmlSectionHandler'             => 'Document/converters/element_visitor/docbook/xhtml/section.php',
    'ezcDocumentDocbookToHtmlSpecialParagraphHandler'    => 'Document/converters/element_visitor/docbook/xhtml/special_paragraph.php',
    'ezcDocumentDocbookToHtmlTableCellHandler'           => 'Document/converters/element_visitor/docbook/xhtml/table_cell.php',
    'ezcDocumentDocbookToHtmlXsltConverter'              => 'Document/converters/xslt/docbook_html.php',
    'ezcDocumentDocbookToHtmlXsltConverterOptions'       => 'Document/options/converter_docbook_html_xslt.php',
    'ezcDocumentDocbookToRstBeginPageHandler'            => 'Document/converters/element_visitor/docbook/rst/begin_page.php',
    'ezcDocumentDocbookToRstBlockquoteHandler'           => 'Document/converters/element_visitor/docbook/rst/blockquote.php',
    'ezcDocumentDocbookToRstCitationHandler'             => 'Document/converters/element_visitor/docbook/rst/citation.php',
    'ezcDocumentDocbookToRstCommentHandler'              => 'Document/converters/element_visitor/docbook/rst/comment.php',
    'ezcDocumentDocbookToRstConverter'                   => 'Document/converters/element_visitor/docbook_rst.php',
    'ezcDocumentDocbookToRstConverterOptions'            => 'Document/options/converter_docbook_rst.php',
    'ezcDocumentDocbookToRstEmphasisHandler'             => 'Document/converters/element_visitor/docbook/rst/emphasis.php',
    'ezcDocumentDocbookToRstExternalLinkHandler'         => 'Document/converters/element_visitor/docbook/rst/external_link.php',
    'ezcDocumentDocbookToRstFootnoteHandler'             => 'Document/converters/element_visitor/docbook/rst/footnote.php',
    'ezcDocumentDocbookToRstHeadHandler'                 => 'Document/converters/element_visitor/docbook/rst/head.php',
    'ezcDocumentDocbookToRstIgnoreHandler'               => 'Document/converters/element_visitor/docbook/rst/ignore.php',
    'ezcDocumentDocbookToRstInlineMediaObjectHandler'    => 'Document/converters/element_visitor/docbook/rst/inlinemediaobject.php',
    'ezcDocumentDocbookToRstInternalLinkHandler'         => 'Document/converters/element_visitor/docbook/rst/internal_link.php',
    'ezcDocumentDocbookToRstItemizedListHandler'         => 'Document/converters/element_visitor/docbook/rst/itemized_list.php',
    'ezcDocumentDocbookToRstLiteralHandler'              => 'Document/converters/element_visitor/docbook/rst/literal.php',
    'ezcDocumentDocbookToRstLiteralLayoutHandler'        => 'Document/converters/element_visitor/docbook/rst/literal_layout.php',
    'ezcDocumentDocbookToRstOrderedListHandler'          => 'Document/converters/element_visitor/docbook/rst/ordered_list.php',
    'ezcDocumentDocbookToRstParagraphHandler'            => 'Document/converters/element_visitor/docbook/rst/paragraph.php',
    'ezcDocumentDocbookToRstRecurseHandler'              => 'Document/converters/element_visitor/docbook/rst/recurse.php',
    'ezcDocumentDocbookToRstSectionHandler'              => 'Document/converters/element_visitor/docbook/rst/section.php',
    'ezcDocumentDocbookToRstSpecialParagraphHandler'     => 'Document/converters/element_visitor/docbook/rst/special_paragraph.php',
    'ezcDocumentDocbookToRstTableHandler'                => 'Document/converters/element_visitor/docbook/rst/table.php',
    'ezcDocumentDocbookToRstVariableListHandler'         => 'Document/converters/element_visitor/docbook/rst/variable_list.php',
    'ezcDocumentDocbookToWikiBeginPageHandler'           => 'Document/converters/element_visitor/docbook/wiki/begin_page.php',
    'ezcDocumentDocbookToWikiConverter'                  => 'Document/converters/element_visitor/docbook_wiki.php',
    'ezcDocumentDocbookToWikiConverterOptions'           => 'Document/options/converter_docbook_wiki.php',
    'ezcDocumentDocbookToWikiEmphasisHandler'            => 'Document/converters/element_visitor/docbook/wiki/emphasis.php',
    'ezcDocumentDocbookToWikiExternalLinkHandler'        => 'Document/converters/element_visitor/docbook/wiki/external_link.php',
    'ezcDocumentDocbookToWikiFootnoteHandler'            => 'Document/converters/element_visitor/docbook/wiki/footnote.php',
    'ezcDocumentDocbookToWikiIgnoreHandler'              => 'Document/converters/element_visitor/docbook/wiki/ignore.php',
    'ezcDocumentDocbookToWikiInlineMediaObjectHandler'   => 'Document/converters/element_visitor/docbook/wiki/inlinemediaobject.php',
    'ezcDocumentDocbookToWikiInternalLinkHandler'        => 'Document/converters/element_visitor/docbook/wiki/internal_link.php',
    'ezcDocumentDocbookToWikiItemizedListHandler'        => 'Document/converters/element_visitor/docbook/wiki/itemized_list.php',
    'ezcDocumentDocbookToWikiLiteralHandler'             => 'Document/converters/element_visitor/docbook/wiki/literal.php',
    'ezcDocumentDocbookToWikiLiteralLayoutHandler'       => 'Document/converters/element_visitor/docbook/wiki/literal_layout.php',
    'ezcDocumentDocbookToWikiOrderedListHandler'         => 'Document/converters/element_visitor/docbook/wiki/ordered_list.php',
    'ezcDocumentDocbookToWikiParagraphHandler'           => 'Document/converters/element_visitor/docbook/wiki/paragraph.php',
    'ezcDocumentDocbookToWikiRecurseHandler'             => 'Document/converters/element_visitor/docbook/wiki/recurse.php',
    'ezcDocumentDocbookToWikiSectionHandler'             => 'Document/converters/element_visitor/docbook/wiki/section.php',
    'ezcDocumentDocbookToWikiTableHandler'               => 'Document/converters/element_visitor/docbook/wiki/table.php',
    'ezcDocumentEzXml'                                   => 'Document/document/xml/ezxml.php',
    'ezcDocumentEzXmlDummyLinkConverter'                 => 'Document/document/xml/ezxml/dummy_link_converter.php',
    'ezcDocumentEzXmlDummyLinkProvider'                  => 'Document/document/xml/ezxml/dummy_link_provider.php',
    'ezcDocumentEzXmlOptions'                            => 'Document/options/document_ezxml.php',
    'ezcDocumentEzXmlToDocbookAnchorHandler'             => 'Document/converters/element_visitor/ezxml/docbook/anchor.php',
    'ezcDocumentEzXmlToDocbookConverter'                 => 'Document/converters/element_visitor/ezxml_docbook.php',
    'ezcDocumentEzXmlToDocbookConverterOptions'          => 'Document/options/converter_ezxml_docbook.php',
    'ezcDocumentEzXmlToDocbookEmphasisHandler'           => 'Document/converters/element_visitor/ezxml/docbook/emphasis.php',
    'ezcDocumentEzXmlToDocbookHeaderHandler'             => 'Document/converters/element_visitor/ezxml/docbook/header.php',
    'ezcDocumentEzXmlToDocbookLineHandler'               => 'Document/converters/element_visitor/ezxml/docbook/line.php',
    'ezcDocumentEzXmlToDocbookLinkHandler'               => 'Document/converters/element_visitor/ezxml/docbook/link.php',
    'ezcDocumentEzXmlToDocbookListHandler'               => 'Document/converters/element_visitor/ezxml/docbook/list.php',
    'ezcDocumentEzXmlToDocbookLiteralHandler'            => 'Document/converters/element_visitor/ezxml/docbook/literal.php',
    'ezcDocumentEzXmlToDocbookMappingHandler'            => 'Document/converters/element_visitor/ezxml/docbook/mapper.php',
    'ezcDocumentEzXmlToDocbookTableCellHandler'          => 'Document/converters/element_visitor/ezxml/docbook/table_cell.php',
    'ezcDocumentEzXmlToDocbookTableHandler'              => 'Document/converters/element_visitor/ezxml/docbook/table.php',
    'ezcDocumentEzXmlToDocbookTableRowHandler'           => 'Document/converters/element_visitor/ezxml/docbook/table_row.php',
    'ezcDocumentParserOptions'                           => 'Document/options/document_parser.php',
    'ezcDocumentRst'                                     => 'Document/document/rst.php',
    'ezcDocumentRstAnonymousLinkNode'                    => 'Document/document/rst/nodes/link_anonymous.php',
    'ezcDocumentRstAnonymousReferenceNode'               => 'Document/document/rst/nodes/anon_reference.php',
    'ezcDocumentRstAttentionDirective'                   => 'Document/document/rst/directive/attention.php',
    'ezcDocumentRstBlockquoteAnnotationNode'             => 'Document/document/rst/nodes/blockquote_annotation.php',
    'ezcDocumentRstBlockquoteNode'                       => 'Document/document/rst/nodes/blockquote.php',
    'ezcDocumentRstBulletListListNode'                   => 'Document/document/rst/nodes/bullet_list_list.php',
    'ezcDocumentRstBulletListNode'                       => 'Document/document/rst/nodes/bullet_list.php',
    'ezcDocumentRstCommentNode'                          => 'Document/document/rst/nodes/comment.php',
    'ezcDocumentRstContentsDirective'                    => 'Document/document/rst/directive/contents.php',
    'ezcDocumentRstDangerDirective'                      => 'Document/document/rst/directive/danger.php',
    'ezcDocumentRstDefinitionListListNode'               => 'Document/document/rst/nodes/definition_list_list.php',
    'ezcDocumentRstDefinitionListNode'                   => 'Document/document/rst/nodes/definition_list.php',
    'ezcDocumentRstDirectiveNode'                        => 'Document/document/rst/nodes/directive.php',
    'ezcDocumentRstDocbookVisitor'                       => 'Document/document/rst/visitor/docbook.php',
    'ezcDocumentRstDocumentNode'                         => 'Document/document/rst/nodes/document.php',
    'ezcDocumentRstEnumeratedListListNode'               => 'Document/document/rst/nodes/enumerated_list_list.php',
    'ezcDocumentRstEnumeratedListNode'                   => 'Document/document/rst/nodes/enumerated_list.php',
    'ezcDocumentRstExternalReferenceNode'                => 'Document/document/rst/nodes/link_reference.php',
    'ezcDocumentRstFieldListNode'                        => 'Document/document/rst/nodes/field_list.php',
    'ezcDocumentRstFigureDirective'                      => 'Document/document/rst/directive/figure.php',
    'ezcDocumentRstFootnoteNode'                         => 'Document/document/rst/nodes/footnote.php',
    'ezcDocumentRstIncludeDirective'                     => 'Document/document/rst/directive/include.php',
    'ezcDocumentRstLineBlockLineNode'                    => 'Document/document/rst/nodes/line_block_line.php',
    'ezcDocumentRstLineBlockNode'                        => 'Document/document/rst/nodes/line_block.php',
    'ezcDocumentRstLiteralBlockNode'                     => 'Document/document/rst/nodes/literal_block.php',
    'ezcDocumentRstLiteralNode'                          => 'Document/document/rst/nodes/literal.php',
    'ezcDocumentRstMarkupEmphasisNode'                   => 'Document/document/rst/nodes/markup_emphasis.php',
    'ezcDocumentRstMarkupInlineLiteralNode'              => 'Document/document/rst/nodes/markup_inline_literal.php',
    'ezcDocumentRstMarkupInterpretedTextNode'            => 'Document/document/rst/nodes/markup_interpreted_text.php',
    'ezcDocumentRstMarkupStrongEmphasisNode'             => 'Document/document/rst/nodes/markup_strong_emphasis.php',
    'ezcDocumentRstMarkupSubstitutionNode'               => 'Document/document/rst/nodes/markup_substitution.php',
    'ezcDocumentRstNamedReferenceNode'                   => 'Document/document/rst/nodes/named_reference.php',
    'ezcDocumentRstNoteDirective'                        => 'Document/document/rst/directive/note.php',
    'ezcDocumentRstNoticeDirective'                      => 'Document/document/rst/directive/notice.php',
    'ezcDocumentRstOptions'                              => 'Document/options/document_rst.php',
    'ezcDocumentRstParagraphNode'                        => 'Document/document/rst/nodes/paragraph.php',
    'ezcDocumentRstParser'                               => 'Document/document/rst/parser.php',
    'ezcDocumentRstReferenceNode'                        => 'Document/document/rst/nodes/reference.php',
    'ezcDocumentRstSectionNode'                          => 'Document/document/rst/nodes/section.php',
    'ezcDocumentRstSubstitutionNode'                     => 'Document/document/rst/nodes/substitution.php',
    'ezcDocumentRstTableBodyNode'                        => 'Document/document/rst/nodes/table_body.php',
    'ezcDocumentRstTableCellNode'                        => 'Document/document/rst/nodes/table_cell.php',
    'ezcDocumentRstTableHeadNode'                        => 'Document/document/rst/nodes/table_head.php',
    'ezcDocumentRstTableNode'                            => 'Document/document/rst/nodes/table.php',
    'ezcDocumentRstTableRowNode'                         => 'Document/document/rst/nodes/table_row.php',
    'ezcDocumentRstTargetNode'                           => 'Document/document/rst/nodes/target.php',
    'ezcDocumentRstTextLineNode'                         => 'Document/document/rst/nodes/text_line.php',
    'ezcDocumentRstTitleNode'                            => 'Document/document/rst/nodes/title.php',
    'ezcDocumentRstToken'                                => 'Document/document/rst/token.php',
    'ezcDocumentRstTokenizer'                            => 'Document/document/rst/tokenizer.php',
    'ezcDocumentRstTransitionNode'                       => 'Document/document/rst/nodes/transition.php',
    'ezcDocumentRstWarningDirective'                     => 'Document/document/rst/directive/warning.php',
    'ezcDocumentRstXhtmlBodyVisitor'                     => 'Document/document/rst/visitor/xhtml_body.php',
    'ezcDocumentValidationError'                         => 'Document/validation_error.php',
    'ezcDocumentWiki'                                    => 'Document/document/wiki.php',
    'ezcDocumentWikiBlockquoteNode'                      => 'Document/document/wiki/nodes/blockquote.php',
    'ezcDocumentWikiBoldNode'                            => 'Document/document/wiki/nodes/bold.php',
    'ezcDocumentWikiBoldToken'                           => 'Document/document/wiki/token/bold.php',
    'ezcDocumentWikiBulletListItemNode'                  => 'Document/document/wiki/nodes/bullet_list_item.php',
    'ezcDocumentWikiBulletListItemToken'                 => 'Document/document/wiki/token/bullet_list.php',
    'ezcDocumentWikiBulletListNode'                      => 'Document/document/wiki/nodes/bullet_list.php',
    'ezcDocumentWikiCodePlugin'                          => 'Document/document/wiki/plugin/code.php',
    'ezcDocumentWikiConfluenceLinkStartToken'            => 'Document/document/wiki/token/confluence_link_start.php',
    'ezcDocumentWikiConfluenceTokenizer'                 => 'Document/document/wiki/tokenizer/confluence.php',
    'ezcDocumentWikiCreoleTokenizer'                     => 'Document/document/wiki/tokenizer/creole.php',
    'ezcDocumentWikiDeletedNode'                         => 'Document/document/wiki/nodes/deleted.php',
    'ezcDocumentWikiDeletedToken'                        => 'Document/document/wiki/token/deleted.php',
    'ezcDocumentWikiDocbookVisitor'                      => 'Document/document/wiki/visitor/docbook.php',
    'ezcDocumentWikiDocumentNode'                        => 'Document/document/wiki/nodes/document.php',
    'ezcDocumentWikiDokuwikiTokenizer'                   => 'Document/document/wiki/tokenizer/dokuwiki.php',
    'ezcDocumentWikiEndOfFileToken'                      => 'Document/document/wiki/token/end_of_file.php',
    'ezcDocumentWikiEnumeratedListItemNode'              => 'Document/document/wiki/nodes/enumerated_list_item.php',
    'ezcDocumentWikiEnumeratedListItemToken'             => 'Document/document/wiki/token/enumerated_list.php',
    'ezcDocumentWikiEnumeratedListNode'                  => 'Document/document/wiki/nodes/enumerated_list.php',
    'ezcDocumentWikiEscapeCharacterToken'                => 'Document/document/wiki/token/escape_character.php',
    'ezcDocumentWikiExternalLinkNode'                    => 'Document/document/wiki/nodes/external_link.php',
    'ezcDocumentWikiExternalLinkToken'                   => 'Document/document/wiki/token/external_link.php',
    'ezcDocumentWikiFootnoteEndNode'                     => 'Document/document/wiki/nodes/footnote_end.php',
    'ezcDocumentWikiFootnoteEndToken'                    => 'Document/document/wiki/token/footnote_end.php',
    'ezcDocumentWikiFootnoteNode'                        => 'Document/document/wiki/nodes/footnote.php',
    'ezcDocumentWikiFootnoteStartToken'                  => 'Document/document/wiki/token/footnote_start.php',
    'ezcDocumentWikiImageEndNode'                        => 'Document/document/wiki/nodes/image_end.php',
    'ezcDocumentWikiImageEndToken'                       => 'Document/document/wiki/token/image_end.php',
    'ezcDocumentWikiImageNode'                           => 'Document/document/wiki/nodes/image.php',
    'ezcDocumentWikiImageStartToken'                     => 'Document/document/wiki/token/image_start.php',
    'ezcDocumentWikiInlineLiteralNode'                   => 'Document/document/wiki/nodes/inline_literal.php',
    'ezcDocumentWikiInlineLiteralToken'                  => 'Document/document/wiki/token/inline_literal.php',
    'ezcDocumentWikiInlineQuoteNode'                     => 'Document/document/wiki/nodes/inline_quote.php',
    'ezcDocumentWikiInlineQuoteToken'                    => 'Document/document/wiki/token/inline_quote.php',
    'ezcDocumentWikiInterWikiLinkNode'                   => 'Document/document/wiki/nodes/inter_wiki_link.php',
    'ezcDocumentWikiInterWikiLinkToken'                  => 'Document/document/wiki/token/inter_wiki_link.php',
    'ezcDocumentWikiInternalLinkNode'                    => 'Document/document/wiki/nodes/internal_link.php',
    'ezcDocumentWikiInternalLinkToken'                   => 'Document/document/wiki/token/internal_link.php',
    'ezcDocumentWikiInvisibleBreakNode'                  => 'Document/document/wiki/nodes/invisible_break.php',
    'ezcDocumentWikiItalicNode'                          => 'Document/document/wiki/nodes/italic.php',
    'ezcDocumentWikiItalicToken'                         => 'Document/document/wiki/token/italic.php',
    'ezcDocumentWikiLineBreakNode'                       => 'Document/document/wiki/nodes/line_break.php',
    'ezcDocumentWikiLineBreakToken'                      => 'Document/document/wiki/token/line_break.php',
    'ezcDocumentWikiLinkEndNode'                         => 'Document/document/wiki/nodes/link_end.php',
    'ezcDocumentWikiLinkEndToken'                        => 'Document/document/wiki/token/link_end.php',
    'ezcDocumentWikiLinkNode'                            => 'Document/document/wiki/nodes/link.php',
    'ezcDocumentWikiLiteralBlockNode'                    => 'Document/document/wiki/nodes/literal_block.php',
    'ezcDocumentWikiLiteralBlockToken'                   => 'Document/document/wiki/token/literal_block.php',
    'ezcDocumentWikiMediawikiTokenizer'                  => 'Document/document/wiki/tokenizer/mediawiki.php',
    'ezcDocumentWikiMonospaceNode'                       => 'Document/document/wiki/nodes/monospace.php',
    'ezcDocumentWikiMonospaceToken'                      => 'Document/document/wiki/token/monospace.php',
    'ezcDocumentWikiNewLineToken'                        => 'Document/document/wiki/token/new_line.php',
    'ezcDocumentWikiOptions'                             => 'Document/options/document_wiki.php',
    'ezcDocumentWikiPageBreakNode'                       => 'Document/document/wiki/nodes/page_break.php',
    'ezcDocumentWikiPageBreakToken'                      => 'Document/document/wiki/token/page_break.php',
    'ezcDocumentWikiParagraphIndentationToken'           => 'Document/document/wiki/token/indentation.php',
    'ezcDocumentWikiParagraphNode'                       => 'Document/document/wiki/nodes/paragraph.php',
    'ezcDocumentWikiParser'                              => 'Document/document/wiki/parser.php',
    'ezcDocumentWikiPluginNode'                          => 'Document/document/wiki/nodes/plugin.php',
    'ezcDocumentWikiPluginToken'                         => 'Document/document/wiki/token/plugin.php',
    'ezcDocumentWikiQuoteToken'                          => 'Document/document/wiki/token/quote.php',
    'ezcDocumentWikiSeparatorToken'                      => 'Document/document/wiki/token/separator.php',
    'ezcDocumentWikiSpecialCharsToken'                   => 'Document/document/wiki/token/special_chars.php',
    'ezcDocumentWikiStrikeToken'                         => 'Document/document/wiki/token/strike.php',
    'ezcDocumentWikiSubscriptNode'                       => 'Document/document/wiki/nodes/subscript.php',
    'ezcDocumentWikiSubscriptToken'                      => 'Document/document/wiki/token/subscript.php',
    'ezcDocumentWikiSuperscriptNode'                     => 'Document/document/wiki/nodes/superscript.php',
    'ezcDocumentWikiSuperscriptToken'                    => 'Document/document/wiki/token/superscript.php',
    'ezcDocumentWikiTableCellNode'                       => 'Document/document/wiki/nodes/table_cell.php',
    'ezcDocumentWikiTableHeaderSeparatorNode'            => 'Document/document/wiki/nodes/table_header_separator.php',
    'ezcDocumentWikiTableHeaderToken'                    => 'Document/document/wiki/token/table_header.php',
    'ezcDocumentWikiTableNode'                           => 'Document/document/wiki/nodes/table.php',
    'ezcDocumentWikiTableRowNode'                        => 'Document/document/wiki/nodes/table_row.php',
    'ezcDocumentWikiTableRowToken'                       => 'Document/document/wiki/token/table_row.php',
    'ezcDocumentWikiTextLineToken'                       => 'Document/document/wiki/token/text_line.php',
    'ezcDocumentWikiTextNode'                            => 'Document/document/wiki/nodes/text.php',
    'ezcDocumentWikiTitleNode'                           => 'Document/document/wiki/nodes/title.php',
    'ezcDocumentWikiTitleToken'                          => 'Document/document/wiki/token/title.php',
    'ezcDocumentWikiUnderlineNode'                       => 'Document/document/wiki/nodes/underline.php',
    'ezcDocumentWikiUnderlineToken'                      => 'Document/document/wiki/token/underline.php',
    'ezcDocumentWikiWhitespaceToken'                     => 'Document/document/wiki/token/whitespace.php',
    'ezcDocumentXhtml'                                   => 'Document/document/xml/xhtml.php',
    'ezcDocumentXhtmlBlockquoteElementFilter'            => 'Document/document/xml/xhtml/filter/element/blockquote.php',
    'ezcDocumentXhtmlContentLocatorFilter'               => 'Document/document/xml/xhtml/filter/content_locator.php',
    'ezcDocumentXhtmlDefinitionListElementFilter'        => 'Document/document/xml/xhtml/filter/element/definitionlist.php',
    'ezcDocumentXhtmlDomElement'                         => 'Document/document/xml/xhtml/element.php',
    'ezcDocumentXhtmlElementFilter'                      => 'Document/document/xml/xhtml/filter/element.php',
    'ezcDocumentXhtmlElementMappingFilter'               => 'Document/document/xml/xhtml/filter/element/mapping.php',
    'ezcDocumentXhtmlEnumeratedElementFilter'            => 'Document/document/xml/xhtml/filter/element/enumerated.php',
    'ezcDocumentXhtmlFootnoteElementFilter'              => 'Document/document/xml/xhtml/filter/element/footnote.php',
    'ezcDocumentXhtmlHeaderElementFilter'                => 'Document/document/xml/xhtml/filter/element/header.php',
    'ezcDocumentXhtmlImageElementFilter'                 => 'Document/document/xml/xhtml/filter/element/image.php',
    'ezcDocumentXhtmlLineBlockElementFilter'             => 'Document/document/xml/xhtml/filter/element/lineblock.php',
    'ezcDocumentXhtmlLinkElementFilter'                  => 'Document/document/xml/xhtml/filter/element/link.php',
    'ezcDocumentXhtmlLiteralElementFilter'               => 'Document/document/xml/xhtml/filter/element/literal.php',
    'ezcDocumentXhtmlMetadataFilter'                     => 'Document/document/xml/xhtml/filter/metadata.php',
    'ezcDocumentXhtmlOptions'                            => 'Document/options/document_xhtml.php',
    'ezcDocumentXhtmlParagraphElementFilter'             => 'Document/document/xml/xhtml/filter/element/paragraph.php',
    'ezcDocumentXhtmlSpecialParagraphElementFilter'      => 'Document/document/xml/xhtml/filter/element/special_paragraph.php',
    'ezcDocumentXhtmlStrongElementFilter'                => 'Document/document/xml/xhtml/filter/element/strong.php',
    'ezcDocumentXhtmlTableCellElementFilter'             => 'Document/document/xml/xhtml/filter/element/tablecell.php',
    'ezcDocumentXhtmlTableElementFilter'                 => 'Document/document/xml/xhtml/filter/element/table.php',
    'ezcDocumentXhtmlTablesFilter'                       => 'Document/document/xml/xhtml/filter/tables.php',
    'ezcDocumentXhtmlTextToParagraphFilter'              => 'Document/document/xml/xhtml/filter/element/text.php',
    'ezcDocumentXhtmlXpathFilter'                        => 'Document/document/xml/xhtml/filter/xpath.php',
);
?>
