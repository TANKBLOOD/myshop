@foreach($children as $child)
    <option value="{{ $child->id }}">{{ str_repeat('- ', $level) }}{{ $child->name }}</option>
    @if(count($child->children) > 0)
        @include('panel.blog.child-categories-select', ['children' => $child->children, 'level' => $level + 1])
    @endif
@endforeach
