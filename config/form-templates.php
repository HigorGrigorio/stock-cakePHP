<?php

return [
    'label' => '{{hidden}}{{input}}<span class="input-group-text" {{attrs}}>{{text}}</span>',
    'formGroup' => '{{label}}{{input}}',
    'inputContainer' => '<div class="input-group flex-nowrap mb-2" style="width: 30rem; ">{{content}}</div>',
    'input' => '<input class="form-control" style="height: auto !important;"name="{{name}}" type="{{type}}" placeholder="{{name}} input here..." aria-describedby="{{name}}" readonly" {{attrs}}/>',
    'select' => '<select class="form-select" style="height: auto !important;"name="{{name}}" type="{{type}}" aria-describedby="{{name}}" readonly" {{attrs}}>{{content}}</select>'
];
