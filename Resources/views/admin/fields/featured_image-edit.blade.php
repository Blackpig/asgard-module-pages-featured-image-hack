@include('media::admin.fields.file-link', [
    'entityClass' => 'Modules\\\Page\\\Entities\\\Page',
    'entityId' => $page->id,
    'zone' => 'featured_image'
])
