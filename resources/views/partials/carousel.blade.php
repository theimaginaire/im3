<ul class="list-unstyled slider">
  @forelse($images as $image)
    <li><img src="{{$image['url']}}" alt="{{$image['alt']}}"></li>
  @empty
    <li class="alert alert-danger">No Images</li>
  @endforelse
</ul>