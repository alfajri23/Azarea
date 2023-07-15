@extends('layouts.layout_user')
@section('content')
  <div class="bg-white">
    @include('components.galeri.galeri_2')
  </div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.3.3/index.min.js" integrity="sha512-qPiIthBLNh6rmNHxCsoGQcTwjqUUjPfoBi/PaSz/wraBWJeSTG8bBb0PkVx2q7OpxoB2L7EhCXQITLswZPy1BQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  const observer = lozad();
    observer.observe();
</script>
@endsection