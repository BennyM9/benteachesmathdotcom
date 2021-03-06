<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav/user/themes/hypertext/blueprints/collection.yaml',
    'modified' => 1609634308,
    'data' => [
        'extends@' => 'default',
        'child_type' => 'item',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'item'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'hypertext' => [
                            'fields' => [
                                'columns' => [
                                    'fields' => [
                                        'overrides_column' => [
                                            'fields' => [
                                                'child_overrides_title' => [
                                                    'type' => 'section',
                                                    'title' => 'Children & Ordering',
                                                    'underline' => true
                                                ],
                                                'header.content.items' => [
                                                    'type' => 'textarea',
                                                    'yaml' => true,
                                                    'label' => 'Items',
                                                    'help' => 'Setting this will force which items render. May break tag/category links.',
                                                    'default' => '@self.children',
                                                    'validate' => [
                                                        'type' => 'yaml'
                                                    ]
                                                ],
                                                'header.content.limit' => [
                                                    'type' => 'text',
                                                    'label' => 'Max Items',
                                                    'help' => 'Setting this will limit how many children are shown on this page.  If you install the Pagination plugin, it will limit how many children show on each page.',
                                                    'placeholder' => 0,
                                                    'validate' => [
                                                        'type' => 'int',
                                                        'min' => 0,
                                                        'max' => 4096
                                                    ]
                                                ],
                                                'header.content.order.by' => [
                                                    'type' => 'select',
                                                    'label' => 'Order By',
                                                    'help' => 'The attribute by which to sort child pages during rendering.',
                                                    'default' => 'folder',
                                                    'options' => [
                                                        'folder' => 'Folder',
                                                        'title' => 'Title',
                                                        'date' => 'Date',
                                                        'default' => 'Default'
                                                    ]
                                                ],
                                                'header.content.order.dir' => [
                                                    'type' => 'select',
                                                    'label' => 'Order',
                                                    'help' => 'The order in which to show them (e.g. Ascending by Date means newer posts appear near the top).',
                                                    'default' => 'desc',
                                                    'options' => [
                                                        'asc' => 'Ascending',
                                                        'desc' => 'Descending'
                                                    ]
                                                ],
                                                'header.content.sibling_links' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show prev/next links',
                                                    'help' => 'When enabled, children of this page will have "Previous" and "Next" links at the bottom, useful for sequential content.',
                                                    'default' => 0,
                                                    'highlight' => 0,
                                                    'options' => [
                                                        1 => 'Enabled',
                                                        0 => 'Disabled'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'content_column' => [
                                            'fields' => [
                                                'structure_overrides_title' => [
                                                    'type' => 'section',
                                                    'title' => 'Child Rendering',
                                                    'underline' => true
                                                ],
                                                'header.render.children.style' => [
                                                    'type' => 'select',
                                                    'label' => 'Render Style',
                                                    'help' => 'How you want child pages presented on the page. See Hypertext docs for examples.',
                                                    'default' => 'summaries',
                                                    'options' => [
                                                        'summary' => 'Summaries',
                                                        'list' => 'List',
                                                        'table' => 'Table'
                                                    ]
                                                ],
                                                'header.render.children.image' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show image',
                                                    'help' => 'When enabled, child page header images will be shown (if possible).',
                                                    'default' => 0,
                                                    'highlight' => 0,
                                                    'options' => [
                                                        1 => 'Enabled',
                                                        0 => 'Disabled'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'header.render.children.subtitle' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show subtitle',
                                                    'help' => 'When enabled, child page subtitle will be shown (if possible).',
                                                    'default' => 1,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'Enabled',
                                                        0 => 'Disabled'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'header.render.children.category' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show categories',
                                                    'help' => 'When enabled, child page categories will be shown (if possible).',
                                                    'default' => 1,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'Enabled',
                                                        0 => 'Disabled'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'header.render.children.date' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show publish date',
                                                    'help' => 'When enabled, the date that a child page was published will be shown (if possible).',
                                                    'default' => 0,
                                                    'highlight' => 0,
                                                    'options' => [
                                                        1 => 'Enabled',
                                                        0 => 'Disabled'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ],
                                                'header.render.children.nested_children' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show nested children',
                                                    'help' => 'When enabled, any sub-children that a child page has will be shown (if possible).',
                                                    'default' => 1,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        1 => 'Enabled',
                                                        0 => 'Disabled'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'bool'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
