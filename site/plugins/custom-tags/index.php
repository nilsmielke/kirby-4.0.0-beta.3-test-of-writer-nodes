<?php
Kirby::plugin('frwssr/fw-custom-tags', [
    'tags' => [
        'shy' => [
            'html' => function($tag) {
                return '&shy;';
            }
        ],
        'small' => [
            'html' => function($tag) {
                return '<small>' . $tag->value . '</small>';
            }
        ],
        'abbr' => [
            'attr' => [
              'title'
            ],
            'html' => function($tag) {
                $title = $tag->title ? ' title="' . $tag->title . '"' : '';
                return '<abbr' . $title . '>' . $tag->value . '</abbr>';
            }
        ],
        'lang' => [
            'attr' => [
              'locale',
              'element'
            ],
            'html' => function($tag) {
                $locale = $tag->locale ? $tag->locale : false;
                $element = $tag->element ? $tag->element : 'span';
                if ($locale):
                    return '<' . $element . ' lang=' . $locale . '>' . $tag->value . '</' . $element . '>';
                else:
                    return $tag->value;
                endif;
            }
        ]
    ]
]);