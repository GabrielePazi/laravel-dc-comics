<a href="{{ route('comics.show', $comic->id) }}" class="text-decoration-none">
  <div class="card rounded-0 bg-transparent border-0" style="width: 8rem;">
      <img src="{{ $comic->thumb }}" class="card-img-top rounded-0" alt="card">
      <div class="card-body px-0">
          <h6 class="text-white">{{ $comic->title }}</h6>
      </div>
  </div>
</a>