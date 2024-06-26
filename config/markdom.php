<?php

return [
    /**
     * Mapping elements to class names
     * For instance
     * 'p' => 'lead',
     * will give all <p> elements the class "lead"
     * <p class="lead">
     */
    'classes' => [
        'h1'     => 'text-3xl font-bold mt-1 mb-2 border-b',
        'h2'     => 'text-2xl font-bold my-1 border-b',
        'h3'     => 'text-xl font-bold my-1',
        'p'      => 'py-2',
        'ul'     => 'list-disc list-inside',
        'ul ul'  => 'pl-8 list-disc list-inside',
        'ol'     => 'list-decimal list-inside',
        'pre'    => 'my-1',
        'blockquote'    => 'p-4 my-4 border-s-4 border-gray-500 bg-gray-800',
    ],

    /**
     * Options for CommonMark parser
     * https://commonmark.thephpleague.com/2.3/configuration/
     */
    'commonmark' => [
        'renderer' => [
            'block_separator' => "\n",
            'inner_separator' => "\n",
            'soft_break'      => "\n",
        ],

        'commonmark' => [
            'enable_em'              => true,
            'enable_strong'          => true,
            'use_asterisk'           => true,
            'use_underscore'         => true,
            'unordered_list_markers' => ['-', '+', '*'],
        ],

        'html_input' => 'strip',
        'allow_unsafe_links' => true,
        'max_nesting_level' => PHP_INT_MAX,
    ],

    /**
     * Extensions for commonmark
     * https://commonmark.thephpleague.com/2.3/extensions/overview/
     */
    'commonmark_extensions' => [
        League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension::class, //Required!
        //League\CommonMark\Extension\Autolink\AutolinkExtension::class,
        //League\CommonMark\Extension\Strikethrough\StrikethroughExtension::class,
    ],

    /**
     * It is possible to have code tags automatically
     * parsed and highlighted
     *
     * Remember to add the stylesheet to your page, if using this!
     * @markdomStyles()
     */
    'code_highlight' => [
        'enabled' => false,
        'theme' => 'default',
        'languages' => [
            'javascript',
            'php',
            'css',
        ],
    ],

    /**
     * This being enabled adds an id and an (invisible) anchor tag to configured elements
     */
    'links' => [
        'enabled' => false,

        /**
         * Here you can define which elements will receive id tags
         */
        'elements' => [
            'h2',
            'h3',
            'h4',
        ],

        /**
         * Set the delimiter to use when creating id and href slugs
         */
        'slug_delimiter' => '-',

        /**
         * Whether to add an achor tag
         */
        'add_anchor' => true,

        /**
         * Here you can define where the anchor shall be placed, possible values:
         * - before: the anchor tag will be placed right before the element
         *     - Example: <a name="foo"></a><h1>Foo</h1>
         * - after: the anchor tag will be placed right after the element
         *     - Example: <h1>Foo</h1><a name="foo"></a>
         * - wrap: the anchor tag will wrap the element
         *     - Example: <a name="foo"><h1>Foo</h1></a>
         * - wrapInner: the anchor tag will wrap the content inside the element
         *     - Example: <h1><a name="foo">Foo</a></h1>
         * - prepend: the anchor tag will be placed before the content of the element
         *     - Example: <h1><a name="foo"></a>Foo</h1>
         * - append: the anchor tag will be placed after the content of the element
         *     - Example: <h1>Foo<a name="foo"></a></h1>
         */
        'position' => 'before',
    ],
];
